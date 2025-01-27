<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2/queue.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2;

class Queue
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Tasks\V2\Target::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
!google/cloud/tasks/v2/queue.protogoogle.cloud.tasks.v2"google/cloud/tasks/v2/target.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
Queue
name (	L
app_engine_routing_override (2\'.google.cloud.tasks.v2.AppEngineRouting6
rate_limits (2!.google.cloud.tasks.v2.RateLimits8
retry_config (2".google.cloud.tasks.v2.RetryConfig1
state (2".google.cloud.tasks.v2.Queue.State.

purge_time (2.google.protobuf.TimestampS
stackdriver_logging_config	 (2/.google.cloud.tasks.v2.StackdriverLoggingConfig"E
State
STATE_UNSPECIFIED 
RUNNING

PAUSED
DISABLED:\\�AY
cloudtasks.googleapis.com/Queue6projects/{project}/locations/{location}/queues/{queue}"j

RateLimits!
max_dispatches_per_second (
max_burst_size (!
max_concurrent_dispatches ("�
RetryConfig
max_attempts (5
max_retry_duration (2.google.protobuf.Duration.
min_backoff (2.google.protobuf.Duration.
max_backoff (2.google.protobuf.Duration
max_doublings ("2
StackdriverLoggingConfig
sampling_ratio (Be
com.google.cloud.tasks.v2B
QueueProtoPZ:google.golang.org/genproto/googleapis/cloud/tasks/v2;tasksbproto3'
        , true);

        static::$is_initialized = true;
    }
}

