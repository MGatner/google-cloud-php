<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Explanation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ExplanationMetadata::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/aiplatform/v1/explanation.protogoogle.cloud.aiplatform.v15google/cloud/aiplatform/v1/explanation_metadata.protogoogle/protobuf/struct.proto"�
ExplanationB
attributions (2\'.google.cloud.aiplatform.v1.AttributionB�A<
	neighbors (2$.google.cloud.aiplatform.v1.NeighborB�A"[
ModelExplanationG
mean_attributions (2\'.google.cloud.aiplatform.v1.AttributionB�A"�
Attribution"
baseline_output_value (B�A"
instance_output_value (B�A9
feature_attributions (2.google.protobuf.ValueB�A
output_index (B�A 
output_display_name (	B�A 
approximation_error (B�A
output_name (	B�A"D
Neighbor
neighbor_id (	B�A
neighbor_distance (B�A"�
ExplanationSpecJ

parameters (21.google.cloud.aiplatform.v1.ExplanationParametersB�AF
metadata (2/.google.cloud.aiplatform.v1.ExplanationMetadataB�A"�
ExplanationParameters\\
sampled_shapley_attribution (25.google.cloud.aiplatform.v1.SampledShapleyAttributionH f
 integrated_gradients_attribution (2:.google.cloud.aiplatform.v1.IntegratedGradientsAttributionH G
xrai_attribution (2+.google.cloud.aiplatform.v1.XraiAttributionH 
top_k (2
output_indices (2.google.protobuf.ListValueB
method"4
SampledShapleyAttribution

path_count (B�A"�
IntegratedGradientsAttribution

step_count (B�AH
smooth_grad_config (2,.google.cloud.aiplatform.v1.SmoothGradConfigL
blur_baseline_config (2..google.cloud.aiplatform.v1.BlurBaselineConfig"�
XraiAttribution

step_count (B�AH
smooth_grad_config (2,.google.cloud.aiplatform.v1.SmoothGradConfigL
blur_baseline_config (2..google.cloud.aiplatform.v1.BlurBaselineConfig"�
SmoothGradConfig
noise_sigma (H L
feature_noise_sigma (2-.google.cloud.aiplatform.v1.FeatureNoiseSigmaH 
noisy_sample_count (B
GradientNoiseSigma"�
FeatureNoiseSigmaW
noise_sigma (2B.google.cloud.aiplatform.v1.FeatureNoiseSigma.NoiseSigmaForFeature3
NoiseSigmaForFeature
name (	
sigma (",
BlurBaselineConfig
max_blur_sigma ("�
ExplanationSpecOverrideE

parameters (21.google.cloud.aiplatform.v1.ExplanationParametersI
metadata (27.google.cloud.aiplatform.v1.ExplanationMetadataOverrideG
examples_override (2,.google.cloud.aiplatform.v1.ExamplesOverride"�
ExplanationMetadataOverrideX
inputs (2C.google.cloud.aiplatform.v1.ExplanationMetadataOverride.InputsEntryB�AH
InputMetadataOverride/
input_baselines (2.google.protobuf.Value|
InputsEntry
key (	\\
value (2M.google.cloud.aiplatform.v1.ExplanationMetadataOverride.InputMetadataOverride:8"�
ExamplesOverride
neighbor_count (
crowding_count (O
restrictions (29.google.cloud.aiplatform.v1.ExamplesRestrictionsNamespace
return_embeddings (L
data_format (27.google.cloud.aiplatform.v1.ExamplesOverride.DataFormat"H

DataFormat
DATA_FORMAT_UNSPECIFIED 
	INSTANCES

EMBEDDINGS"T
ExamplesRestrictionsNamespace
namespace_name (	
allow (	
deny (	B�
com.google.cloud.aiplatform.v1BExplanationProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

