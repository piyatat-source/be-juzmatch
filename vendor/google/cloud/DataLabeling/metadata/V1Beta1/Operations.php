<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/operations.proto

namespace GPBMetadata\Google\Cloud\Datalabeling\V1Beta1;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
2google/cloud/datalabeling/v1beta1/operations.proto!google.cloud.datalabeling.v1beta1google/api/resource.proto/google/cloud/datalabeling/v1beta1/dataset.proto?google/cloud/datalabeling/v1beta1/human_annotation_config.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"Y
ImportDataOperationResponse
dataset (	
total_count (
import_count ("�
ExportDataOperationResponse
dataset (	
total_count (
export_count (B
label_stats (2-.google.cloud.datalabeling.v1beta1.LabelStatsF
output_config (2/.google.cloud.datalabeling.v1beta1.OutputConfig"�
ImportDataOperationMetadata
dataset (	,
partial_failures (2.google.rpc.Status/
create_time (2.google.protobuf.Timestamp"�
ExportDataOperationMetadata
dataset (	,
partial_failures (2.google.rpc.Status/
create_time (2.google.protobuf.Timestamp"�
LabelOperationMetadatat
image_classification_details (2L.google.cloud.datalabeling.v1beta1.LabelImageClassificationOperationMetadataH o
image_bounding_box_details (2I.google.cloud.datalabeling.v1beta1.LabelImageBoundingBoxOperationMetadataH q
image_bounding_poly_details (2J.google.cloud.datalabeling.v1beta1.LabelImageBoundingPolyOperationMetadataH �
#image_oriented_bounding_box_details (2Q.google.cloud.datalabeling.v1beta1.LabelImageOrientedBoundingBoxOperationMetadataH h
image_polyline_details (2F.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadataH p
image_segmentation_details (2J.google.cloud.datalabeling.v1beta1.LabelImageSegmentationOperationMetadataH t
video_classification_details (2L.google.cloud.datalabeling.v1beta1.LabelVideoClassificationOperationMetadataH w
video_object_detection_details (2M.google.cloud.datalabeling.v1beta1.LabelVideoObjectDetectionOperationMetadataH u
video_object_tracking_details (2L.google.cloud.datalabeling.v1beta1.LabelVideoObjectTrackingOperationMetadataH b
video_event_details (2C.google.cloud.datalabeling.v1beta1.LabelVideoEventOperationMetadataH r
text_classification_details	 (2K.google.cloud.datalabeling.v1beta1.LabelTextClassificationOperationMetadataH w
text_entity_extraction_details (2M.google.cloud.datalabeling.v1beta1.LabelTextEntityExtractionOperationMetadataH 
progress_percent (,
partial_failures (2.google.rpc.Status/
create_time (2.google.protobuf.TimestampB	
details"{
)LabelImageClassificationOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"x
&LabelImageBoundingBoxOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"�
.LabelImageOrientedBoundingBoxOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"y
\'LabelImageBoundingPolyOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"u
#LabelImagePolylineOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"y
\'LabelImageSegmentationOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"{
)LabelVideoClassificationOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"|
*LabelVideoObjectDetectionOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"{
)LabelVideoObjectTrackingOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"r
 LabelVideoEventOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"z
(LabelTextClassificationOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"|
*LabelTextEntityExtractionOperationMetadataN
basic_config (28.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig"�
CreateInstructionMetadata
instruction (	,
partial_failures (2.google.rpc.Status/
create_time (2.google.protobuf.TimestampB�
%com.google.cloud.datalabeling.v1beta1PZMgoogle.golang.org/genproto/googleapis/cloud/datalabeling/v1beta1;datalabeling�!Google.Cloud.DataLabeling.V1Beta1�!Google\\Cloud\\DataLabeling\\V1beta1�$Google::Cloud::DataLabeling::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

