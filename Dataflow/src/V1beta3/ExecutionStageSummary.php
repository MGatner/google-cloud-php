<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of the composing transforms, names/ids, and input/outputs of a
 * stage of execution.  Some composing transforms and sources may have been
 * generated by the Dataflow service during execution planning.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.ExecutionStageSummary</code>
 */
class ExecutionStageSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Dataflow service generated name for this stage.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Dataflow service generated id for this stage.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * Type of transform this stage is executing.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.KindType kind = 3;</code>
     */
    private $kind = 0;
    /**
     * Input sources for this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.StageSource input_source = 4;</code>
     */
    private $input_source;
    /**
     * Output sources for this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.StageSource output_source = 5;</code>
     */
    private $output_source;
    /**
     * Other stages that must complete before this stage can run.
     *
     * Generated from protobuf field <code>repeated string prerequisite_stage = 8;</code>
     */
    private $prerequisite_stage;
    /**
     * Transforms that comprise this execution stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.ComponentTransform component_transform = 6;</code>
     */
    private $component_transform;
    /**
     * Collections produced and consumed by component transforms of this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.ComponentSource component_source = 7;</code>
     */
    private $component_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Dataflow service generated name for this stage.
     *     @type string $id
     *           Dataflow service generated id for this stage.
     *     @type int $kind
     *           Type of transform this stage is executing.
     *     @type \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\StageSource[]|\Google\Protobuf\Internal\RepeatedField $input_source
     *           Input sources for this stage.
     *     @type \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\StageSource[]|\Google\Protobuf\Internal\RepeatedField $output_source
     *           Output sources for this stage.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $prerequisite_stage
     *           Other stages that must complete before this stage can run.
     *     @type \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\ComponentTransform[]|\Google\Protobuf\Internal\RepeatedField $component_transform
     *           Transforms that comprise this execution stage.
     *     @type \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\ComponentSource[]|\Google\Protobuf\Internal\RepeatedField $component_source
     *           Collections produced and consumed by component transforms of this stage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Dataflow service generated name for this stage.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Dataflow service generated name for this stage.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Dataflow service generated id for this stage.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Dataflow service generated id for this stage.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Type of transform this stage is executing.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.KindType kind = 3;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Type of transform this stage is executing.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.KindType kind = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\KindType::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Input sources for this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.StageSource input_source = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputSource()
    {
        return $this->input_source;
    }

    /**
     * Input sources for this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.StageSource input_source = 4;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\StageSource[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputSource($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\StageSource::class);
        $this->input_source = $arr;

        return $this;
    }

    /**
     * Output sources for this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.StageSource output_source = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputSource()
    {
        return $this->output_source;
    }

    /**
     * Output sources for this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.StageSource output_source = 5;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\StageSource[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputSource($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\StageSource::class);
        $this->output_source = $arr;

        return $this;
    }

    /**
     * Other stages that must complete before this stage can run.
     *
     * Generated from protobuf field <code>repeated string prerequisite_stage = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrerequisiteStage()
    {
        return $this->prerequisite_stage;
    }

    /**
     * Other stages that must complete before this stage can run.
     *
     * Generated from protobuf field <code>repeated string prerequisite_stage = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrerequisiteStage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->prerequisite_stage = $arr;

        return $this;
    }

    /**
     * Transforms that comprise this execution stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.ComponentTransform component_transform = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getComponentTransform()
    {
        return $this->component_transform;
    }

    /**
     * Transforms that comprise this execution stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.ComponentTransform component_transform = 6;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\ComponentTransform[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setComponentTransform($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\ComponentTransform::class);
        $this->component_transform = $arr;

        return $this;
    }

    /**
     * Collections produced and consumed by component transforms of this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.ComponentSource component_source = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getComponentSource()
    {
        return $this->component_source;
    }

    /**
     * Collections produced and consumed by component transforms of this stage.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary.ComponentSource component_source = 7;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\ComponentSource[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setComponentSource($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary\ComponentSource::class);
        $this->component_source = $arr;

        return $this;
    }

}

