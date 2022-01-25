<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance clone context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.CloneContext</code>
 */
class CloneContext extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always <b>sql#cloneContext</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>int64 pitr_timestamp_ms = 2;</code>
     */
    private $pitr_timestamp_ms = 0;
    /**
     * Name of the Cloud SQL instance to be created as a clone.
     *
     * Generated from protobuf field <code>string destination_instance_name = 3;</code>
     */
    private $destination_instance_name = '';
    /**
     * Binary log coordinates, if specified, identify the position up to which the
     * source instance is cloned. If not specified, the source instance is
     * cloned up to the most recent binary log coordinates.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.BinLogCoordinates bin_log_coordinates = 4;</code>
     */
    private $bin_log_coordinates = null;
    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 5;</code>
     */
    private $point_in_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always <b>sql#cloneContext</b>.
     *     @type int|string $pitr_timestamp_ms
     *           Reserved for future use.
     *     @type string $destination_instance_name
     *           Name of the Cloud SQL instance to be created as a clone.
     *     @type \Google\Cloud\Sql\V1beta4\BinLogCoordinates $bin_log_coordinates
     *           Binary log coordinates, if specified, identify the position up to which the
     *           source instance is cloned. If not specified, the source instance is
     *           cloned up to the most recent binary log coordinates.
     *     @type \Google\Protobuf\Timestamp $point_in_time
     *           Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always <b>sql#cloneContext</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always <b>sql#cloneContext</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>int64 pitr_timestamp_ms = 2;</code>
     * @return int|string
     */
    public function getPitrTimestampMs()
    {
        return $this->pitr_timestamp_ms;
    }

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>int64 pitr_timestamp_ms = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPitrTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->pitr_timestamp_ms = $var;

        return $this;
    }

    /**
     * Name of the Cloud SQL instance to be created as a clone.
     *
     * Generated from protobuf field <code>string destination_instance_name = 3;</code>
     * @return string
     */
    public function getDestinationInstanceName()
    {
        return $this->destination_instance_name;
    }

    /**
     * Name of the Cloud SQL instance to be created as a clone.
     *
     * Generated from protobuf field <code>string destination_instance_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_instance_name = $var;

        return $this;
    }

    /**
     * Binary log coordinates, if specified, identify the position up to which the
     * source instance is cloned. If not specified, the source instance is
     * cloned up to the most recent binary log coordinates.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.BinLogCoordinates bin_log_coordinates = 4;</code>
     * @return \Google\Cloud\Sql\V1beta4\BinLogCoordinates|null
     */
    public function getBinLogCoordinates()
    {
        return $this->bin_log_coordinates;
    }

    public function hasBinLogCoordinates()
    {
        return isset($this->bin_log_coordinates);
    }

    public function clearBinLogCoordinates()
    {
        unset($this->bin_log_coordinates);
    }

    /**
     * Binary log coordinates, if specified, identify the position up to which the
     * source instance is cloned. If not specified, the source instance is
     * cloned up to the most recent binary log coordinates.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.BinLogCoordinates bin_log_coordinates = 4;</code>
     * @param \Google\Cloud\Sql\V1beta4\BinLogCoordinates $var
     * @return $this
     */
    public function setBinLogCoordinates($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\BinLogCoordinates::class);
        $this->bin_log_coordinates = $var;

        return $this;
    }

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPointInTime()
    {
        return $this->point_in_time;
    }

    public function hasPointInTime()
    {
        return isset($this->point_in_time);
    }

    public function clearPointInTime()
    {
        unset($this->point_in_time);
    }

    /**
     * Reserved for future use.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp point_in_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPointInTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->point_in_time = $var;

        return $this;
    }

}

