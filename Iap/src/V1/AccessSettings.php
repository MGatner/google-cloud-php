<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Access related settings for IAP protected apps.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.AccessSettings</code>
 */
class AccessSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * GCIP claims and endpoint configurations for 3p identity providers.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.GcipSettings gcip_settings = 1;</code>
     */
    private $gcip_settings = null;
    /**
     * Configuration to allow cross-origin requests via IAP.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.CorsSettings cors_settings = 2;</code>
     */
    private $cors_settings = null;
    /**
     * Settings to configure IAP's OAuth behavior.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.OAuthSettings oauth_settings = 3;</code>
     */
    private $oauth_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iap\V1\GcipSettings $gcip_settings
     *           GCIP claims and endpoint configurations for 3p identity providers.
     *     @type \Google\Cloud\Iap\V1\CorsSettings $cors_settings
     *           Configuration to allow cross-origin requests via IAP.
     *     @type \Google\Cloud\Iap\V1\OAuthSettings $oauth_settings
     *           Settings to configure IAP's OAuth behavior.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * GCIP claims and endpoint configurations for 3p identity providers.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.GcipSettings gcip_settings = 1;</code>
     * @return \Google\Cloud\Iap\V1\GcipSettings|null
     */
    public function getGcipSettings()
    {
        return $this->gcip_settings;
    }

    public function hasGcipSettings()
    {
        return isset($this->gcip_settings);
    }

    public function clearGcipSettings()
    {
        unset($this->gcip_settings);
    }

    /**
     * GCIP claims and endpoint configurations for 3p identity providers.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.GcipSettings gcip_settings = 1;</code>
     * @param \Google\Cloud\Iap\V1\GcipSettings $var
     * @return $this
     */
    public function setGcipSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\GcipSettings::class);
        $this->gcip_settings = $var;

        return $this;
    }

    /**
     * Configuration to allow cross-origin requests via IAP.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.CorsSettings cors_settings = 2;</code>
     * @return \Google\Cloud\Iap\V1\CorsSettings|null
     */
    public function getCorsSettings()
    {
        return $this->cors_settings;
    }

    public function hasCorsSettings()
    {
        return isset($this->cors_settings);
    }

    public function clearCorsSettings()
    {
        unset($this->cors_settings);
    }

    /**
     * Configuration to allow cross-origin requests via IAP.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.CorsSettings cors_settings = 2;</code>
     * @param \Google\Cloud\Iap\V1\CorsSettings $var
     * @return $this
     */
    public function setCorsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\CorsSettings::class);
        $this->cors_settings = $var;

        return $this;
    }

    /**
     * Settings to configure IAP's OAuth behavior.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.OAuthSettings oauth_settings = 3;</code>
     * @return \Google\Cloud\Iap\V1\OAuthSettings|null
     */
    public function getOauthSettings()
    {
        return $this->oauth_settings;
    }

    public function hasOauthSettings()
    {
        return isset($this->oauth_settings);
    }

    public function clearOauthSettings()
    {
        unset($this->oauth_settings);
    }

    /**
     * Settings to configure IAP's OAuth behavior.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.OAuthSettings oauth_settings = 3;</code>
     * @param \Google\Cloud\Iap\V1\OAuthSettings $var
     * @return $this
     */
    public function setOauthSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\OAuthSettings::class);
        $this->oauth_settings = $var;

        return $this;
    }

}

