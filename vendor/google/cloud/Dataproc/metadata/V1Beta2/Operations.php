<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/operations.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1Beta2;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/dataproc/v1beta2/operations.protogoogle.cloud.dataproc.v1beta2google/api/annotations.proto"�
ClusterOperationStatusJ
state (2;.google.cloud.dataproc.v1beta2.ClusterOperationStatus.State
inner_state (	
details (	4
state_start_time (2.google.protobuf.Timestamp"8
State
UNKNOWN 
PENDING
RUNNING
DONE"�
ClusterOperationMetadata
cluster_name (	
cluster_uuid (	E
status	 (25.google.cloud.dataproc.v1beta2.ClusterOperationStatusM
status_history
 (25.google.cloud.dataproc.v1beta2.ClusterOperationStatus
operation_type (	
description (	S
labels (2C.google.cloud.dataproc.v1beta2.ClusterOperationMetadata.LabelsEntry
warnings (	-
LabelsEntry
key (	
value (	:8B}
!com.google.cloud.dataproc.v1beta2BOperationsProtoPZEgoogle.golang.org/genproto/googleapis/cloud/dataproc/v1beta2;dataprocbproto3'
        , true);

        static::$is_initialized = true;
    }
}

