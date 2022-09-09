<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification to configure notifications published to Pub/Sub.
 * Notifications are published to the customer-provided topic using the
 * following `PubsubMessage.attributes`:
 * * `"eventType"`: one of the [EventType][google.storagetransfer.v1.NotificationConfig.EventType] values
 * * `"payloadFormat"`: one of the [PayloadFormat][google.storagetransfer.v1.NotificationConfig.PayloadFormat] values
 * * `"projectId"`: the [project_id][google.storagetransfer.v1.TransferOperation.project_id] of the
 * `TransferOperation`
 * * `"transferJobName"`: the
 * [transfer_job_name][google.storagetransfer.v1.TransferOperation.transfer_job_name] of the
 * `TransferOperation`
 * * `"transferOperationName"`: the [name][google.storagetransfer.v1.TransferOperation.name] of the
 * `TransferOperation`
 * The `PubsubMessage.data` contains a [TransferOperation][google.storagetransfer.v1.TransferOperation] resource
 * formatted according to the specified `PayloadFormat`.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.NotificationConfig</code>
 */
class NotificationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `Topic.name` of the Pub/Sub topic to which to publish
     * notifications. Must be of the format: `projects/{project}/topics/{topic}`.
     * Not matching this format results in an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>string pubsub_topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $pubsub_topic = '';
    /**
     * Event types for which a notification is desired. If empty, send
     * notifications for all event types.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.NotificationConfig.EventType event_types = 2;</code>
     */
    private $event_types;
    /**
     * Required. The desired format of the notification message payloads.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.NotificationConfig.PayloadFormat payload_format = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $payload_format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pubsub_topic
     *           Required. The `Topic.name` of the Pub/Sub topic to which to publish
     *           notifications. Must be of the format: `projects/{project}/topics/{topic}`.
     *           Not matching this format results in an
     *           [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $event_types
     *           Event types for which a notification is desired. If empty, send
     *           notifications for all event types.
     *     @type int $payload_format
     *           Required. The desired format of the notification message payloads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `Topic.name` of the Pub/Sub topic to which to publish
     * notifications. Must be of the format: `projects/{project}/topics/{topic}`.
     * Not matching this format results in an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>string pubsub_topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPubsubTopic()
    {
        return $this->pubsub_topic;
    }

    /**
     * Required. The `Topic.name` of the Pub/Sub topic to which to publish
     * notifications. Must be of the format: `projects/{project}/topics/{topic}`.
     * Not matching this format results in an
     * [INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error.
     *
     * Generated from protobuf field <code>string pubsub_topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPubsubTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->pubsub_topic = $var;

        return $this;
    }

    /**
     * Event types for which a notification is desired. If empty, send
     * notifications for all event types.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.NotificationConfig.EventType event_types = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventTypes()
    {
        return $this->event_types;
    }

    /**
     * Event types for which a notification is desired. If empty, send
     * notifications for all event types.
     *
     * Generated from protobuf field <code>repeated .google.storagetransfer.v1.NotificationConfig.EventType event_types = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\StorageTransfer\V1\NotificationConfig\EventType::class);
        $this->event_types = $arr;

        return $this;
    }

    /**
     * Required. The desired format of the notification message payloads.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.NotificationConfig.PayloadFormat payload_format = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getPayloadFormat()
    {
        return $this->payload_format;
    }

    /**
     * Required. The desired format of the notification message payloads.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.NotificationConfig.PayloadFormat payload_format = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setPayloadFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\StorageTransfer\V1\NotificationConfig\PayloadFormat::class);
        $this->payload_format = $var;

        return $this;
    }

}

