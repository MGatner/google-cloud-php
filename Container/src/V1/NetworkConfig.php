<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NetworkConfig reports the relative names of network & subnetwork.
 *
 * Generated from protobuf message <code>google.container.v1.NetworkConfig</code>
 */
class NetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative name of the Google Compute Engine
     * [network][google.container.v1.NetworkConfig.network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks)
     * to which the cluster is connected. Example:
     * projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 1;</code>
     */
    private $network = '';
    /**
     * Output only. The relative name of the Google Compute Engine
     * [subnetwork](https://cloud.google.com/compute/docs/vpc) to which the
     * cluster is connected. Example:
     * projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     */
    private $subnetwork = '';
    /**
     * Whether Intra-node visibility is enabled for this cluster.
     * This makes same node pod to pod traffic visible for VPC network.
     *
     * Generated from protobuf field <code>bool enable_intra_node_visibility = 5;</code>
     */
    private $enable_intra_node_visibility = false;
    /**
     * Whether the cluster disables default in-node sNAT rules. In-node sNAT rules
     * will be disabled when default_snat_status is disabled. When disabled is set
     * to false, default IP masquerade rules will be applied to the nodes to
     * prevent sNAT on cluster internal traffic.
     *
     * Generated from protobuf field <code>.google.container.v1.DefaultSnatStatus default_snat_status = 7;</code>
     */
    private $default_snat_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           Output only. The relative name of the Google Compute Engine
     *           [network][google.container.v1.NetworkConfig.network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks)
     *           to which the cluster is connected. Example:
     *           projects/my-project/global/networks/my-network
     *     @type string $subnetwork
     *           Output only. The relative name of the Google Compute Engine
     *           [subnetwork](https://cloud.google.com/compute/docs/vpc) to which the
     *           cluster is connected. Example:
     *           projects/my-project/regions/us-central1/subnetworks/my-subnet
     *     @type bool $enable_intra_node_visibility
     *           Whether Intra-node visibility is enabled for this cluster.
     *           This makes same node pod to pod traffic visible for VPC network.
     *     @type \Google\Cloud\Container\V1\DefaultSnatStatus $default_snat_status
     *           Whether the cluster disables default in-node sNAT rules. In-node sNAT rules
     *           will be disabled when default_snat_status is disabled. When disabled is set
     *           to false, default IP masquerade rules will be applied to the nodes to
     *           prevent sNAT on cluster internal traffic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [network][google.container.v1.NetworkConfig.network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks)
     * to which the cluster is connected. Example:
     * projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [network][google.container.v1.NetworkConfig.network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks)
     * to which the cluster is connected. Example:
     * projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [subnetwork](https://cloud.google.com/compute/docs/vpc) to which the
     * cluster is connected. Example:
     * projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Output only. The relative name of the Google Compute Engine
     * [subnetwork](https://cloud.google.com/compute/docs/vpc) to which the
     * cluster is connected. Example:
     * projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Whether Intra-node visibility is enabled for this cluster.
     * This makes same node pod to pod traffic visible for VPC network.
     *
     * Generated from protobuf field <code>bool enable_intra_node_visibility = 5;</code>
     * @return bool
     */
    public function getEnableIntraNodeVisibility()
    {
        return $this->enable_intra_node_visibility;
    }

    /**
     * Whether Intra-node visibility is enabled for this cluster.
     * This makes same node pod to pod traffic visible for VPC network.
     *
     * Generated from protobuf field <code>bool enable_intra_node_visibility = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIntraNodeVisibility($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_intra_node_visibility = $var;

        return $this;
    }

    /**
     * Whether the cluster disables default in-node sNAT rules. In-node sNAT rules
     * will be disabled when default_snat_status is disabled. When disabled is set
     * to false, default IP masquerade rules will be applied to the nodes to
     * prevent sNAT on cluster internal traffic.
     *
     * Generated from protobuf field <code>.google.container.v1.DefaultSnatStatus default_snat_status = 7;</code>
     * @return \Google\Cloud\Container\V1\DefaultSnatStatus|null
     */
    public function getDefaultSnatStatus()
    {
        return $this->default_snat_status;
    }

    public function hasDefaultSnatStatus()
    {
        return isset($this->default_snat_status);
    }

    public function clearDefaultSnatStatus()
    {
        unset($this->default_snat_status);
    }

    /**
     * Whether the cluster disables default in-node sNAT rules. In-node sNAT rules
     * will be disabled when default_snat_status is disabled. When disabled is set
     * to false, default IP masquerade rules will be applied to the nodes to
     * prevent sNAT on cluster internal traffic.
     *
     * Generated from protobuf field <code>.google.container.v1.DefaultSnatStatus default_snat_status = 7;</code>
     * @param \Google\Cloud\Container\V1\DefaultSnatStatus $var
     * @return $this
     */
    public function setDefaultSnatStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\DefaultSnatStatus::class);
        $this->default_snat_status = $var;

        return $this;
    }

}

