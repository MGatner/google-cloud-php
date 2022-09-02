<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateApiSpec.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.UpdateApiSpecRequest</code>
 */
class UpdateApiSpecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The spec to update.
     * The `name` field is used to identify the spec to update.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.ApiSpec api_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $api_spec = null;
    /**
     * The list of fields to be updated. If omitted, all fields are updated that
     * are set in the request message (fields set to default values are ignored).
     * If an asterisk "*" is specified, all fields are updated, including fields
     * that are unspecified/default in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * If set to true, and the spec is not found, a new spec will be created.
     * In this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    private $allow_missing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApigeeRegistry\V1\ApiSpec $api_spec
     *           Required. The spec to update.
     *           The `name` field is used to identify the spec to update.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated. If omitted, all fields are updated that
     *           are set in the request message (fields set to default values are ignored).
     *           If an asterisk "*" is specified, all fields are updated, including fields
     *           that are unspecified/default in the request.
     *     @type bool $allow_missing
     *           If set to true, and the spec is not found, a new spec will be created.
     *           In this situation, `update_mask` is ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The spec to update.
     * The `name` field is used to identify the spec to update.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.ApiSpec api_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApigeeRegistry\V1\ApiSpec|null
     */
    public function getApiSpec()
    {
        return $this->api_spec;
    }

    public function hasApiSpec()
    {
        return isset($this->api_spec);
    }

    public function clearApiSpec()
    {
        unset($this->api_spec);
    }

    /**
     * Required. The spec to update.
     * The `name` field is used to identify the spec to update.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;&#47;specs/&#42;`
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.ApiSpec api_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApigeeRegistry\V1\ApiSpec $var
     * @return $this
     */
    public function setApiSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApigeeRegistry\V1\ApiSpec::class);
        $this->api_spec = $var;

        return $this;
    }

    /**
     * The list of fields to be updated. If omitted, all fields are updated that
     * are set in the request message (fields set to default values are ignored).
     * If an asterisk "*" is specified, all fields are updated, including fields
     * that are unspecified/default in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to be updated. If omitted, all fields are updated that
     * are set in the request message (fields set to default values are ignored).
     * If an asterisk "*" is specified, all fields are updated, including fields
     * that are unspecified/default in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If set to true, and the spec is not found, a new spec will be created.
     * In this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the spec is not found, a new spec will be created.
     * In this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

