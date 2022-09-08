<?php
/**
 * Copyright 2022 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev\DocFx\Node;

trait XrefTrait
{
    private static $protoPrefixesToPhpNamespaces = [
        'google.bigtable.admin.v2.' => 'Google\Cloud\Bigtable\Admin\V2\\',
        'google.bigtable.v2.'       => 'Google\Cloud\Bigtable\V2\\',
    ];

    /**
     * @param string $type            The parameter type to replace
     * @param bool   $replaceWithLink False for return types, as docfx HTML-escapes return values
     */
    private function normalizeTypedVariables(
        string $type,
        bool $replaceWithLink = true
    ): string {
        $types = explode('|', $type);

        // Remove redundant "RepeatedField" type for protobuf parameters
        if (count($types) == 2 && '\Google\Protobuf\Internal\RepeatedField' === $types[1]) {
            array_pop($types);
        }

        foreach ($types as $i => $type) {
            if (0 === strpos($type, '\\')) {
                // Reformat "ClassName[]" to "array<ClassName>"
                if ('[]' === substr($type, -2)) {
                    $type = substr($type, 0, -2);
                    $types[$i] = $this->normalizeArrayType($type, $replaceWithLink);
                } elseif ($replaceWithLink) {
                    $types[$i] = $this->replaceUidWithLink($type);
                }
            } elseif (0 === strpos($type, 'array<\\')) {
                $types[$i] = preg_replace_callback(
                    '/^array<([^ ]*)>$/',
                    function ($matches) use ($replaceWithLink) {
                        return $this->normalizeArrayType($matches[1], $replaceWithLink);
                    },
                    $type
                );
            }
        }

        return implode('|', $types);
    }

    private function normalizeArrayType(string $type, bool $replaceWithLink): string
    {
        return sprintf(
            htmlentities('array<%s>'),
            $replaceWithLink ? $this->replaceUidWithLink($type) : $type
        );
    }

    private function replaceSeeTag(string $description): string
    {
        return preg_replace_callback(
            '/{@see ([^ ]*)}/',
            function ($matches) {
                return $this->replaceUidWithLink($matches[1]);
            },
            $description
        );
    }

    /**
     * Replaces protobuf references in text. This will match the following:
     *  - [link][google.cloud.automl.v1.SomeClass]
     *  - [link][google.cloud.automl.v1.SomeClass.some_property]
     *  - [link][google.cloud.automl.v1.SomeClass.SomeNestedClass]
     *  - [link][google.cloud.automl.v1.SomeServiceClass.SomeMethod]
     */
    private function replaceProtoRef(string $description): string
    {
        return preg_replace_callback(
            '/\[([^ ]*?)\]\[([a-z1-9\.]*)([a-zA-Z_\.]*)\]/',
            function ($matches) {
                list($link, $name, $namespace, $class) = $matches;
                $property = $method = $constant = null;

                // if the last word is all lowercase, it's a property
                // if the last word is all uppercase, it's a constant
                // otherwise, it's a nested class
                if (preg_match('/([a-zA-Z\.]+)?\.([a-z_]+)$/', $class, $matches)) {
                    $class = $matches[1];
                    $property = $matches[2];
                } elseif (preg_match('/([a-zA-Z\.]+)?\.([A-Z_]+)$/', $class, $matches)) {
                    $class = $matches[1];
                    $constant = $matches[2];
                }

                // Determine namespace
                $namespace = self::$protoPrefixesToPhpNamespaces[$namespace]
                    ?? str_replace(' ', '\\', ucwords(str_replace('.', ' ', $namespace)));

                $classParts = explode('.', $class);

                if ($property) {
                    // Convert the underscore property name to camel case getter method name
                    $property = ltrim($property, '.');
                    $method = 'get' . str_replace(' ', '', ucwords(str_replace('_', ' ', $property)));
                } elseif (count($classParts) === 2) {
                    // Check if the nested class exists, and if not, assume this is a service method
                    $uid = sprintf('\\%s%s', $namespace, implode('\\', $classParts));
                    if (!class_exists($uid)) {
                        $classParts[0] .= 'Client';
                        $method = lcfirst($classParts[1]);
                        array_pop($classParts);
                    }
                }

                $uid = sprintf('\\%s%s', $namespace, implode('\\', $classParts));
                if ($method) {
                    $uid = sprintf('%s::%s()', $uid, $method);
                } elseif ($constant) {
                    $uid = sprintf('%s::%s', $uid, $constant);
                }
                return $this->replaceUidWithLink($uid, $name);
            },
            $description
        );
    }

    private function replaceUidWithLink(string $uid, string $name = null): string
    {
        // Remove proceeding "\" from namespace
        $name = $name ?: ltrim($uid, '\\');

        // Check for external package namespaces
        switch (true) {
            case 0 === strpos($uid, '\Google\ApiCore\\'):
                $extLinkRoot = 'https://googleapis.github.io/gax-php#';
                break;
            case 0 === strpos($uid, '\Google\Auth\\'):
                $extLinkRoot = 'https://googleapis.github.io/google-auth-library-php/main/';
                break;
            case 0 === strpos($uid, '\Google\Protobuf\\'):
                // @TODO: link to reference docs for Protobuf
                return $name;
            case 0 === strpos($uid, '\Google\Api\\'):
            case 0 === strpos($uid, '\Google\Cloud\\Iam\\'):
            case 0 === strpos($uid, '\Google\Cloud\\Location\\'):
            case 0 === strpos($uid, '\Google\Cloud\\Logging\\'):
            case 0 === strpos($uid, '\Google\Iam\\'):
            case 0 === strpos($uid, '\Google\Rpc\\'):
            case 0 === strpos($uid, '\Google\Type\\'):
                // @TODO: link to reference docs for common protos
                return $name;
            default:
                $extLinkRoot = '';
        }

        // Create external link
        if ($extLinkRoot) {
            $path = str_replace(['::', '\\', '()'], ['#method_', '/'], $name);
            return sprintf('<a href="%s">%s</a>', $extLinkRoot . $path, $name);
        }

        return sprintf('<xref uid="%s">%s</xref>', $uid, $name);
    }
}
