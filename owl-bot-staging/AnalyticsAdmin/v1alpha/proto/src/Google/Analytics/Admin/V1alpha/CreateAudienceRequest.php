<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateAudience RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateAudienceRequest</code>
 */
class CreateAudienceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The audience to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience audience = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $audience = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example format: properties/1234
     *     @type \Google\Analytics\Admin\V1alpha\Audience $audience
     *           Required. The audience to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The audience to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience audience = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\Audience|null
     */
    public function getAudience()
    {
        return $this->audience;
    }

    public function hasAudience()
    {
        return isset($this->audience);
    }

    public function clearAudience()
    {
        unset($this->audience);
    }

    /**
     * Required. The audience to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience audience = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\Audience $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\Audience::class);
        $this->audience = $var;

        return $this;
    }

}

