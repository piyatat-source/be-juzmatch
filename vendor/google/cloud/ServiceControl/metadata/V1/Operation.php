<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/operation.proto

namespace GPBMetadata\Google\Api\Servicecontrol\V1;

class Operation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Servicecontrol\V1\LogEntry::initOnce();
        \GPBMetadata\Google\Api\Servicecontrol\V1\MetricValue::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/api/servicecontrol/v1/operation.protogoogle.api.servicecontrol.v1/google/api/servicecontrol/v1/metric_value.protogoogle/protobuf/any.protogoogle/protobuf/timestamp.proto"�
	Operation
operation_id (	
operation_name (	
consumer_id (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.TimestampC
labels (23.google.api.servicecontrol.v1.Operation.LabelsEntryG
metric_value_sets (2,.google.api.servicecontrol.v1.MetricValueSet;
log_entries (2&.google.api.servicecontrol.v1.LogEntryF

importance (22.google.api.servicecontrol.v1.Operation.Importance(

extensions (2.google.protobuf.Any-
LabelsEntry
key (	
value (	:8"

Importance
LOW 
HIGHB�
 com.google.api.servicecontrol.v1BOperationProtoPZJgoogle.golang.org/genproto/googleapis/api/servicecontrol/v1;servicecontrol��Google.Cloud.ServiceControl.V1�Google\\Cloud\\ServiceControl\\V1�!Google::Cloud::ServiceControl::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

