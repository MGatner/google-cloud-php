<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1/endpoint.proto

namespace Google\Cloud\ServiceDirectory\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An individual endpoint that provides a
 * [service][google.cloud.servicedirectory.v1.Service]. The service must
 * already exist to create an endpoint.
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1.Endpoint</code>
 */
class Endpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name for the endpoint in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     * addresses like:
     *   "8.8.8"
     *   "8.8.8.8:53"
     *   "test:bad:address"
     *   "[::1]"
     *   "[::1]:8080"
     * Limited to 45 characters.
     *
     * Generated from protobuf field <code>string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $address = '';
    /**
     * Optional. Service Directory will reject values outside of [0, 65535].
     *
     * Generated from protobuf field <code>int32 port = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $port = 0;
    /**
     * Optional. Annotations for the endpoint. This data can be consumed by
     * service clients. Restrictions:
     *  - The entire annotations dictionary may contain up to 512 characters,
     *    spread accoss all key-value pairs. Annotations that goes beyond any
     *    these limits will be rejected.
     *  - Valid annotation keys have two segments: an optional prefix and name,
     *    separated by a slash (/). The name segment is required and must be 63
     *    characters or less, beginning and ending with an alphanumeric character
     *    ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *    alphanumerics between. The prefix is optional. If specified, the prefix
     *    must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *    not longer than 253 characters in total, followed by a slash (/).
     *    Annotations that fails to meet these requirements will be rejected.
     *  - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *    for system annotations managed by Service Directory. If the user tries
     *    to write to these keyspaces, those entries will be silently ignored by
     *    the system.
     * Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     * They have the same syntax and read/write to the same location in Service
     * Directory.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name for the endpoint in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;`.
     *     @type string $address
     *           Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     *           addresses like:
     *             "8.8.8"
     *             "8.8.8.8:53"
     *             "test:bad:address"
     *             "[::1]"
     *             "[::1]:8080"
     *           Limited to 45 characters.
     *     @type int $port
     *           Optional. Service Directory will reject values outside of [0, 65535].
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. Annotations for the endpoint. This data can be consumed by
     *           service clients. Restrictions:
     *            - The entire annotations dictionary may contain up to 512 characters,
     *              spread accoss all key-value pairs. Annotations that goes beyond any
     *              these limits will be rejected.
     *            - Valid annotation keys have two segments: an optional prefix and name,
     *              separated by a slash (/). The name segment is required and must be 63
     *              characters or less, beginning and ending with an alphanumeric character
     *              ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *              alphanumerics between. The prefix is optional. If specified, the prefix
     *              must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *              not longer than 253 characters in total, followed by a slash (/).
     *              Annotations that fails to meet these requirements will be rejected.
     *            - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *              for system annotations managed by Service Directory. If the user tries
     *              to write to these keyspaces, those entries will be silently ignored by
     *              the system.
     *           Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     *           They have the same syntax and read/write to the same location in Service
     *           Directory.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1\Endpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name for the endpoint in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name for the endpoint in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     * addresses like:
     *   "8.8.8"
     *   "8.8.8.8:53"
     *   "test:bad:address"
     *   "[::1]"
     *   "[::1]:8080"
     * Limited to 45 characters.
     *
     * Generated from protobuf field <code>string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     * addresses like:
     *   "8.8.8"
     *   "8.8.8.8:53"
     *   "test:bad:address"
     *   "[::1]"
     *   "[::1]:8080"
     * Limited to 45 characters.
     *
     * Generated from protobuf field <code>string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Optional. Service Directory will reject values outside of [0, 65535].
     *
     * Generated from protobuf field <code>int32 port = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Optional. Service Directory will reject values outside of [0, 65535].
     *
     * Generated from protobuf field <code>int32 port = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Optional. Annotations for the endpoint. This data can be consumed by
     * service clients. Restrictions:
     *  - The entire annotations dictionary may contain up to 512 characters,
     *    spread accoss all key-value pairs. Annotations that goes beyond any
     *    these limits will be rejected.
     *  - Valid annotation keys have two segments: an optional prefix and name,
     *    separated by a slash (/). The name segment is required and must be 63
     *    characters or less, beginning and ending with an alphanumeric character
     *    ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *    alphanumerics between. The prefix is optional. If specified, the prefix
     *    must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *    not longer than 253 characters in total, followed by a slash (/).
     *    Annotations that fails to meet these requirements will be rejected.
     *  - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *    for system annotations managed by Service Directory. If the user tries
     *    to write to these keyspaces, those entries will be silently ignored by
     *    the system.
     * Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     * They have the same syntax and read/write to the same location in Service
     * Directory.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. Annotations for the endpoint. This data can be consumed by
     * service clients. Restrictions:
     *  - The entire annotations dictionary may contain up to 512 characters,
     *    spread accoss all key-value pairs. Annotations that goes beyond any
     *    these limits will be rejected.
     *  - Valid annotation keys have two segments: an optional prefix and name,
     *    separated by a slash (/). The name segment is required and must be 63
     *    characters or less, beginning and ending with an alphanumeric character
     *    ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *    alphanumerics between. The prefix is optional. If specified, the prefix
     *    must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *    not longer than 253 characters in total, followed by a slash (/).
     *    Annotations that fails to meet these requirements will be rejected.
     *  - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *    for system annotations managed by Service Directory. If the user tries
     *    to write to these keyspaces, those entries will be silently ignored by
     *    the system.
     * Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     * They have the same syntax and read/write to the same location in Service
     * Directory.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

}

