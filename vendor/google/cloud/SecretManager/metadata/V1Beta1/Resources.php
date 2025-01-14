<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secrets/v1beta1/resources.proto

namespace GPBMetadata\Google\Cloud\Secrets\V1Beta1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/secrets/v1beta1/resources.protogoogle.cloud.secrets.v1beta1google/api/resource.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
Secret
name (	B�AF
replication (2).google.cloud.secrets.v1beta1.ReplicationB�A�A4
create_time (2.google.protobuf.TimestampB�A@
labels (20.google.cloud.secrets.v1beta1.Secret.LabelsEntry-
LabelsEntry
key (	
value (	:8:M�AJ
#secretmanager.googleapis.com/Secret#projects/{project}/secrets/{secret}"�
SecretVersion
name (	B�A4
create_time (2.google.protobuf.TimestampB�A5
destroy_time (2.google.protobuf.TimestampB�AE
state (21.google.cloud.secrets.v1beta1.SecretVersion.StateB�A"H
State
STATE_UNSPECIFIED 
ENABLED
DISABLED
	DESTROYED:n�Ak
*secretmanager.googleapis.com/SecretVersion=projects/{project}/secrets/{secret}/versions/{secret_version}"�
ReplicationH
	automatic (23.google.cloud.secrets.v1beta1.Replication.AutomaticH M
user_managed (25.google.cloud.secrets.v1beta1.Replication.UserManagedH 
	Automatic�
UserManagedT
replicas (2=.google.cloud.secrets.v1beta1.Replication.UserManaged.ReplicaB�A
Replica
location (	B
replication"
SecretPayload
data (B�
&com.google.cloud.secretmanager.v1beta1BResourcesProtoPZOgoogle.golang.org/genproto/googleapis/cloud/secretmanager/v1beta1;secretmanager��GSM�"Google.Cloud.SecretManager.V1Beta1�"Google\\Cloud\\SecretManager\\V1beta1�%Google::Cloud::SecretManager::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

