<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/resources.proto

namespace GPBMetadata\Google\Api\Serviceusage\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Auth::initOnce();
        \GPBMetadata\Google\Api\Documentation::initOnce();
        \GPBMetadata\Google\Api\Endpoint::initOnce();
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Monitoring::initOnce();
        \GPBMetadata\Google\Api\Quota::initOnce();
        \GPBMetadata\Google\Api\Usage::initOnce();
        \GPBMetadata\Google\Protobuf\Api::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
*google/api/serviceusage/v1/resources.protogoogle.api.serviceusage.v1google/api/documentation.protogoogle/api/endpoint.proto#google/api/monitored_resource.protogoogle/api/monitoring.protogoogle/api/quota.protogoogle/api/usage.protogoogle/protobuf/api.protogoogle/api/annotations.proto"�
Service
name (	
parent (	9
config (2).google.api.serviceusage.v1.ServiceConfig0
state (2!.google.api.serviceusage.v1.State"�
ServiceConfig
name (	
title (	"
apis (2.google.protobuf.Api0
documentation (2.google.api.Documentation 
quota
 (2.google.api.Quota2
authentication (2.google.api.Authentication 
usage (2.google.api.Usage\'
	endpoints (2.google.api.EndpointD
monitored_resources (2\'.google.api.MonitoredResourceDescriptor*

monitoring (2.google.api.Monitoring"+
OperationMetadata
resource_names (	*9
State
STATE_UNSPECIFIED 
DISABLED
ENABLEDB�
com.google.api.serviceusage.v1BResourcesProtoPZFgoogle.golang.org/genproto/googleapis/api/serviceusage/v1;serviceusage�Google.Cloud.ServiceUsage.V1�Google\\Cloud\\ServiceUsage\\V1�Google::Cloud::ServiceUsage::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

