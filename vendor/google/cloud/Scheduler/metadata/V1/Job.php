<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/job.proto

namespace GPBMetadata\Google\Cloud\Scheduler\V1;

class Job
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Scheduler\V1\Target::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/scheduler/v1/job.protogoogle.cloud.scheduler.v1&google/cloud/scheduler/v1/target.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/api/annotations.proto"�
Job
name (	
description (	@
pubsub_target (2\'.google.cloud.scheduler.v1.PubsubTargetH P
app_engine_http_target (2..google.cloud.scheduler.v1.AppEngineHttpTargetH <
http_target (2%.google.cloud.scheduler.v1.HttpTargetH 
schedule (	
	time_zone (	4
user_update_time	 (2.google.protobuf.Timestamp3
state
 (2$.google.cloud.scheduler.v1.Job.State"
status (2.google.rpc.Status1
schedule_time (2.google.protobuf.Timestamp5
last_attempt_time (2.google.protobuf.Timestamp<
retry_config (2&.google.cloud.scheduler.v1.RetryConfig3
attempt_deadline (2.google.protobuf.Duration"X
State
STATE_UNSPECIFIED 
ENABLED

PAUSED
DISABLED
UPDATE_FAILED:Z�AW
!cloudscheduler.googleapis.com/Job2projects/{project}/locations/{location}/jobs/{job}B
target"�
RetryConfig
retry_count (5
max_retry_duration (2.google.protobuf.Duration7
min_backoff_duration (2.google.protobuf.Duration7
max_backoff_duration (2.google.protobuf.Duration
max_doublings (Bo
com.google.cloud.scheduler.v1BJobProtoPZBgoogle.golang.org/genproto/googleapis/cloud/scheduler/v1;schedulerbproto3'
        , true);

        static::$is_initialized = true;
    }
}

