<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/common.proto

namespace GPBMetadata\Google\Spanner\Admin\Database\V1;

class Common
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
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

-google/spanner/admin/database/v1/common.proto google.spanner.admin.database.v1google/api/resource.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/api/annotations.proto"�
OperationProgress
progress_percent (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"P
EncryptionConfig<
kms_key_name (	B&�A#
!cloudkms.googleapis.com/CryptoKey"�
EncryptionInfoS
encryption_type (25.google.spanner.admin.database.v1.EncryptionInfo.TypeB�A2
encryption_status (2.google.rpc.StatusB�AI
kms_key_version (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersion"\\
Type
TYPE_UNSPECIFIED 
GOOGLE_DEFAULT_ENCRYPTION
CUSTOMER_MANAGED_ENCRYPTIONB�
$com.google.spanner.admin.database.v1BCommonProtoPZHgoogle.golang.org/genproto/googleapis/spanner/admin/database/v1;database�&Google.Cloud.Spanner.Admin.Database.V1�&Google\\Cloud\\Spanner\\Admin\\Database\\V1�+Google::Cloud::Spanner::Admin::Database::V1�Ax
!cloudkms.googleapis.com/CryptoKeySprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}�A�
(cloudkms.googleapis.com/CryptoKeyVersionzprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

