<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class ImageAnnotator
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearch::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\WebDetection::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Color::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(
            '
�N
,google/cloud/vision/v1/image_annotator.protogoogle.cloud.vision.v1google/api/client.protogoogle/api/field_behavior.proto%google/cloud/vision/v1/geometry.proto+google/cloud/vision/v1/product_search.proto,google/cloud/vision/v1/text_annotation.proto*google/cloud/vision/v1/web_detection.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/color.protogoogle/type/latlng.proto"�
Feature2
type (2$.google.cloud.vision.v1.Feature.Type
max_results (
model (	"�
Type
TYPE_UNSPECIFIED 
FACE_DETECTION
LANDMARK_DETECTION
LOGO_DETECTION
LABEL_DETECTION
TEXT_DETECTION
DOCUMENT_TEXT_DETECTION
SAFE_SEARCH_DETECTION
IMAGE_PROPERTIES

CROP_HINTS	
WEB_DETECTION

PRODUCT_SEARCH
OBJECT_LOCALIZATION"7
ImageSource
gcs_image_uri (	
	image_uri (	"M
Image
content (3
source (2#.google.cloud.vision.v1.ImageSource"�
FaceAnnotation;
bounding_poly (2$.google.cloud.vision.v1.BoundingPoly>
fd_bounding_poly (2$.google.cloud.vision.v1.BoundingPolyB
	landmarks (2/.google.cloud.vision.v1.FaceAnnotation.Landmark

roll_angle (
	pan_angle (

tilt_angle (
detection_confidence (
landmarking_confidence (:
joy_likelihood	 (2".google.cloud.vision.v1.Likelihood=
sorrow_likelihood
 (2".google.cloud.vision.v1.Likelihood<
anger_likelihood (2".google.cloud.vision.v1.Likelihood?
surprise_likelihood (2".google.cloud.vision.v1.LikelihoodD
under_exposed_likelihood (2".google.cloud.vision.v1.Likelihood>
blurred_likelihood (2".google.cloud.vision.v1.Likelihood?
headwear_likelihood (2".google.cloud.vision.v1.Likelihood�
LandmarkB
type (24.google.cloud.vision.v1.FaceAnnotation.Landmark.Type2
position (2 .google.cloud.vision.v1.Position"�
Type
UNKNOWN_LANDMARK 
LEFT_EYE
	RIGHT_EYE
LEFT_OF_LEFT_EYEBROW
RIGHT_OF_LEFT_EYEBROW
LEFT_OF_RIGHT_EYEBROW
RIGHT_OF_RIGHT_EYEBROW
MIDPOINT_BETWEEN_EYES
NOSE_TIP
	UPPER_LIP	
	LOWER_LIP


MOUTH_LEFT
MOUTH_RIGHT
MOUTH_CENTER
NOSE_BOTTOM_RIGHT
NOSE_BOTTOM_LEFT
NOSE_BOTTOM_CENTER
LEFT_EYE_TOP_BOUNDARY
LEFT_EYE_RIGHT_CORNER
LEFT_EYE_BOTTOM_BOUNDARY
LEFT_EYE_LEFT_CORNER
RIGHT_EYE_TOP_BOUNDARY
RIGHT_EYE_RIGHT_CORNER
RIGHT_EYE_BOTTOM_BOUNDARY
RIGHT_EYE_LEFT_CORNER
LEFT_EYEBROW_UPPER_MIDPOINT 
RIGHT_EYEBROW_UPPER_MIDPOINT
LEFT_EAR_TRAGION
RIGHT_EAR_TRAGION
LEFT_EYE_PUPIL
RIGHT_EYE_PUPIL
FOREHEAD_GLABELLA
CHIN_GNATHION 
CHIN_LEFT_GONION!
CHIN_RIGHT_GONION"
LEFT_CHEEK_CENTER#
RIGHT_CHEEK_CENTER$"4
LocationInfo$
lat_lng (2.google.type.LatLng"=
Property
name (	
value (	
uint64_value ("�
EntityAnnotation
mid (	
locale (	
description (	
score (

confidence (B

topicality (;
bounding_poly (2$.google.cloud.vision.v1.BoundingPoly7
	locations (2$.google.cloud.vision.v1.LocationInfo4

properties	 (2 .google.cloud.vision.v1.Property"�
LocalizedObjectAnnotation
mid (	
language_code (	
name (	
score (;
bounding_poly (2$.google.cloud.vision.v1.BoundingPoly"�
SafeSearchAnnotation1
adult (2".google.cloud.vision.v1.Likelihood1
spoof (2".google.cloud.vision.v1.Likelihood3
medical (2".google.cloud.vision.v1.Likelihood4
violence (2".google.cloud.vision.v1.Likelihood0
racy	 (2".google.cloud.vision.v1.Likelihood
adult_confidence (B
spoof_confidence (B
medical_confidence (B
violence_confidence (B
racy_confidence (B
nsfw_confidence (B"a
LatLongRect(
min_lat_lng (2.google.type.LatLng(
max_lat_lng (2.google.type.LatLng"U
	ColorInfo!
color (2.google.type.Color
score (
pixel_fraction ("M
DominantColorsAnnotation1
colors (2!.google.cloud.vision.v1.ColorInfo"\\
ImagePropertiesI
dominant_colors (20.google.cloud.vision.v1.DominantColorsAnnotation"x
CropHint;
bounding_poly (2$.google.cloud.vision.v1.BoundingPoly

confidence (
importance_fraction ("K
CropHintsAnnotation4

crop_hints (2 .google.cloud.vision.v1.CropHint"(
CropHintsParams
aspect_ratios ("1
WebDetectionParams
include_geo_results ("E
TextDetectionParams.
&enable_text_detection_confidence_score	 ("�
ImageContext:
lat_long_rect (2#.google.cloud.vision.v1.LatLongRect
language_hints (	B
crop_hints_params (2\'.google.cloud.vision.v1.CropHintsParamsJ
product_search_params (2+.google.cloud.vision.v1.ProductSearchParamsH
web_detection_params (2*.google.cloud.vision.v1.WebDetectionParamsJ
text_detection_params (2+.google.cloud.vision.v1.TextDetectionParams"�
AnnotateImageRequest,
image (2.google.cloud.vision.v1.Image1
features (2.google.cloud.vision.v1.Feature;
image_context (2$.google.cloud.vision.v1.ImageContext":
ImageAnnotationContext
uri (	
page_number ("�
AnnotateImageResponse@
face_annotations (2&.google.cloud.vision.v1.FaceAnnotationF
landmark_annotations (2(.google.cloud.vision.v1.EntityAnnotationB
logo_annotations (2(.google.cloud.vision.v1.EntityAnnotationC
label_annotations (2(.google.cloud.vision.v1.EntityAnnotationW
localized_object_annotations (21.google.cloud.vision.v1.LocalizedObjectAnnotationB
text_annotations (2(.google.cloud.vision.v1.EntityAnnotationD
full_text_annotation (2&.google.cloud.vision.v1.TextAnnotationL
safe_search_annotation (2,.google.cloud.vision.v1.SafeSearchAnnotationL
image_properties_annotation (2\'.google.cloud.vision.v1.ImagePropertiesJ
crop_hints_annotation (2+.google.cloud.vision.v1.CropHintsAnnotation;
web_detection (2$.google.cloud.vision.v1.WebDetectionL
product_search_results (2,.google.cloud.vision.v1.ProductSearchResults!
error	 (2.google.rpc.Status?
context (2..google.cloud.vision.v1.ImageAnnotationContext"q
BatchAnnotateImagesRequestC
requests (2,.google.cloud.vision.v1.AnnotateImageRequestB�A
parent (	"_
BatchAnnotateImagesResponse@
	responses (2-.google.cloud.vision.v1.AnnotateImageResponse"�
AnnotateFileRequest9
input_config (2#.google.cloud.vision.v1.InputConfig1
features (2.google.cloud.vision.v1.Feature;
image_context (2$.google.cloud.vision.v1.ImageContext
pages ("�
AnnotateFileResponse9
input_config (2#.google.cloud.vision.v1.InputConfig@
	responses (2-.google.cloud.vision.v1.AnnotateImageResponse
total_pages (!
error (2.google.rpc.Status"o
BatchAnnotateFilesRequestB
requests (2+.google.cloud.vision.v1.AnnotateFileRequestB�A
parent (	"]
BatchAnnotateFilesResponse?
	responses (2,.google.cloud.vision.v1.AnnotateFileResponse"�
AsyncAnnotateFileRequest9
input_config (2#.google.cloud.vision.v1.InputConfig1
features (2.google.cloud.vision.v1.Feature;
image_context (2$.google.cloud.vision.v1.ImageContext;
output_config (2$.google.cloud.vision.v1.OutputConfig"X
AsyncAnnotateFileResponse;
output_config (2$.google.cloud.vision.v1.OutputConfig"�
AsyncBatchAnnotateImagesRequestC
requests (2,.google.cloud.vision.v1.AnnotateImageRequestB�A@
output_config (2$.google.cloud.vision.v1.OutputConfigB�A
parent (	"_
 AsyncBatchAnnotateImagesResponse;
output_config (2$.google.cloud.vision.v1.OutputConfig"y
AsyncBatchAnnotateFilesRequestG
requests (20.google.cloud.vision.v1.AsyncAnnotateFileRequestB�A
parent (	"g
AsyncBatchAnnotateFilesResponseD
	responses (21.google.cloud.vision.v1.AsyncAnnotateFileResponse"h
InputConfig5

gcs_source (2!.google.cloud.vision.v1.GcsSource
content (
	mime_type (	"c
OutputConfig?
gcs_destination (2&.google.cloud.vision.v1.GcsDestination

batch_size ("
	GcsSource
uri (	"
GcsDestination
uri (	"�
OperationMetadata>
state (2/.google.cloud.vision.v1.OperationMetadata.State/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp"Q
State
STATE_UNSPECIFIED 
CREATED
RUNNING
DONE
	CANCELLED*e

Likelihood
UNKNOWN 
VERY_UNLIKELY
UNLIKELY
POSSIBLE

LIKELY
VERY_LIKELY2�

ImageAnnotator�
BatchAnnotateImages2.google.cloud.vision.v1.BatchAnnotateImagesRequest3.google.cloud.vision.v1.BatchAnnotateImagesResponse"�����"/v1/images:annotate:*Z8"3/v1/{parent=projects/*/locations/*}/images:annotate:*Z,"\'/v1/{parent=projects/*}/images:annotate:*�Arequests�
BatchAnnotateFiles1.google.cloud.vision.v1.BatchAnnotateFilesRequest2.google.cloud.vision.v1.BatchAnnotateFilesResponse"����}"/v1/files:annotate:*Z7"2/v1/{parent=projects/*/locations/*}/files:annotate:*Z+"&/v1/{parent=projects/*}/files:annotate:*�Arequests�
AsyncBatchAnnotateImages7.google.cloud.vision.v1.AsyncBatchAnnotateImagesRequest.google.longrunning.Operation"�����"/v1/images:asyncBatchAnnotate:*ZB"=/v1/{parent=projects/*/locations/*}/images:asyncBatchAnnotate:*Z6"1/v1/{parent=projects/*}/images:asyncBatchAnnotate:*�Arequests,output_config�A5
 AsyncBatchAnnotateImagesResponseOperationMetadata�
AsyncBatchAnnotateFiles6.google.cloud.vision.v1.AsyncBatchAnnotateFilesRequest.google.longrunning.Operation"�����"/v1/files:asyncBatchAnnotate:*ZA"</v1/{parent=projects/*/locations/*}/files:asyncBatchAnnotate:*Z5"0/v1/{parent=projects/*}/files:asyncBatchAnnotate:*�Arequests�A4
AsyncBatchAnnotateFilesResponseOperationMetadatav�Avision.googleapis.com�A[https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-visionB{
com.google.cloud.vision.v1BImageAnnotatorProtoPZ<google.golang.org/genproto/googleapis/cloud/vision/v1;vision��GCVNbproto3'
        , true);

        static::$is_initialized = true;
    }
}

