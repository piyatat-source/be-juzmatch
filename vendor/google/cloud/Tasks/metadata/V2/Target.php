<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2/target.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2;

class Target
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
"google/cloud/tasks/v2/target.protogoogle.cloud.tasks.v2google/api/annotations.proto"�
HttpRequest
url (	B�A6
http_method (2!.google.cloud.tasks.v2.HttpMethod@
headers (2/.google.cloud.tasks.v2.HttpRequest.HeadersEntry
body (8
oauth_token (2!.google.cloud.tasks.v2.OAuthTokenH 6

oidc_token (2 .google.cloud.tasks.v2.OidcTokenH .
HeadersEntry
key (	
value (	:8B
authorization_header"�
AppEngineHttpRequest6
http_method (2!.google.cloud.tasks.v2.HttpMethodC
app_engine_routing (2\'.google.cloud.tasks.v2.AppEngineRouting
relative_uri (	I
headers (28.google.cloud.tasks.v2.AppEngineHttpRequest.HeadersEntry
body (.
HeadersEntry
key (	
value (	:8"T
AppEngineRouting
service (	
version (	
instance (	
host (	":

OAuthToken
service_account_email (	
scope (	"<
	OidcToken
service_account_email (	
audience (	*s

HttpMethod
HTTP_METHOD_UNSPECIFIED 
POST
GET
HEAD
PUT

DELETE	
PATCH
OPTIONSBf
com.google.cloud.tasks.v2BTargetProtoPZ:google.golang.org/genproto/googleapis/cloud/tasks/v2;tasksbproto3'
        , true);

        static::$is_initialized = true;
    }
}

