<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/devtools/clouderrorreporting/v1beta1/common.proto+google.devtools.clouderrorreporting.v1beta1google/api/resource.protogoogle/protobuf/timestamp.proto"�

ErrorGroup
name (	
group_id (	S
tracking_issues (2:.google.devtools.clouderrorreporting.v1beta1.TrackingIssue:U�AR
-clouderrorreporting.googleapis.com/ErrorGroup!projects/{project}/groups/{group}"
TrackingIssue
url (	"�

ErrorEvent.

event_time (2.google.protobuf.TimestampT
service_context (2;.google.devtools.clouderrorreporting.v1beta1.ServiceContext
message (	J
context (29.google.devtools.clouderrorreporting.v1beta1.ErrorContext"I
ServiceContext
service (	
version (	
resource_type (	"�
ErrorContextU
http_request (2?.google.devtools.clouderrorreporting.v1beta1.HttpRequestContext
user (	T
report_location (2;.google.devtools.clouderrorreporting.v1beta1.SourceLocation"�
HttpRequestContext
method (	
url (	

user_agent (	
referrer (	
response_status_code (
	remote_ip (	"O
SourceLocation
	file_path (	
line_number (
function_name (	B�
/com.google.devtools.clouderrorreporting.v1beta1BCommonProtoPZ^google.golang.org/genproto/googleapis/devtools/clouderrorreporting/v1beta1;clouderrorreporting��#Google.Cloud.ErrorReporting.V1Beta1�#Google\\Cloud\\ErrorReporting\\V1beta1�&Google::Cloud::ErrorReporting::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

