<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DataprocMetastore.CreateBackup][google.cloud.metastore.v1beta.DataprocMetastore.CreateBackup].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1beta.CreateBackupRequest</code>
 */
class CreateBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the service in which to create a
     * backup of the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID of the backup, which is used as the final component of the
     * backup's name.
     * This value must be between 1 and 64 characters long, begin with a letter,
     * end with a letter or number, and consist of alpha-numeric ASCII characters
     * or hyphens.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backup_id = '';
    /**
     * Required. The backup to create. The `name` field is ignored. The ID of the
     * created backup must be provided in the request's `backup_id` field.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backup = null;
    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The relative resource name of the service in which to create a
     *           backup of the following form:
     *           `projects/{project_number}/locations/{location_id}/services/{service_id}`
     *     @type string $backup_id
     *           Required. The ID of the backup, which is used as the final component of the
     *           backup's name.
     *           This value must be between 1 and 64 characters long, begin with a letter,
     *           end with a letter or number, and consist of alpha-numeric ASCII characters
     *           or hyphens.
     *     @type \Google\Cloud\Metastore\V1beta\Backup $backup
     *           Required. The backup to create. The `name` field is ignored. The ID of the
     *           created backup must be provided in the request's `backup_id` field.
     *     @type string $request_id
     *           Optional. A request ID. Specify a unique request ID to allow the server to
     *           ignore the request if it has completed. The server will ignore subsequent
     *           requests that provide a duplicate request ID for at least 60 minutes after
     *           the first request.
     *           For example, if an initial request times out, followed by another request
     *           with the same request ID, the server ignores the second request to prevent
     *           the creation of duplicate commitments.
     *           The request ID must be a valid
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     *           A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Beta\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the service in which to create a
     * backup of the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The relative resource name of the service in which to create a
     * backup of the following form:
     * `projects/{project_number}/locations/{location_id}/services/{service_id}`
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
     * Required. The ID of the backup, which is used as the final component of the
     * backup's name.
     * This value must be between 1 and 64 characters long, begin with a letter,
     * end with a letter or number, and consist of alpha-numeric ASCII characters
     * or hyphens.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupId()
    {
        return $this->backup_id;
    }

    /**
     * Required. The ID of the backup, which is used as the final component of the
     * backup's name.
     * This value must be between 1 and 64 characters long, begin with a letter,
     * end with a letter or number, and consist of alpha-numeric ASCII characters
     * or hyphens.
     *
     * Generated from protobuf field <code>string backup_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_id = $var;

        return $this;
    }

    /**
     * Required. The backup to create. The `name` field is ignored. The ID of the
     * created backup must be provided in the request's `backup_id` field.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Metastore\V1beta\Backup|null
     */
    public function getBackup()
    {
        return $this->backup;
    }

    public function hasBackup()
    {
        return isset($this->backup);
    }

    public function clearBackup()
    {
        unset($this->backup);
    }

    /**
     * Required. The backup to create. The `name` field is ignored. The ID of the
     * created backup must be provided in the request's `backup_id` field.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Backup backup = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Metastore\V1beta\Backup $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Metastore\V1beta\Backup::class);
        $this->backup = $var;

        return $this;
    }

    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format)
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

