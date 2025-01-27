<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/common/common.proto

namespace GPBMetadata\Google\Cloud\Oslogin\Common;

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
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/oslogin/common/common.protogoogle.cloud.oslogin.commongoogle/api/resource.proto"�
PosixAccount
primary (
username (	
uid (
gid (
home_directory (	
shell (	
gecos (	
	system_id (	

account_id	 (	B�AO
operating_system_type
 (20.google.cloud.oslogin.common.OperatingSystemType
name (	B�A:I�AF
#oslogin.googleapis.com/PosixAccountusers/{user}/projects/{project}"�
SshPublicKey
key (	
expiration_time_usec (
fingerprint (	B�A
name (	B�A:R�AO
#oslogin.googleapis.com/SshPublicKey(users/{user}/sshPublicKeys/{fingerprint}*T
OperatingSystemType%
!OPERATING_SYSTEM_TYPE_UNSPECIFIED 	
LINUX
WINDOWSB�
com.google.cloud.oslogin.commonBOsLoginProtoZAgoogle.golang.org/genproto/googleapis/cloud/oslogin/common;common�Google.Cloud.OsLogin.Common�Google\\Cloud\\OsLogin\\Common�Google::Cloud::OsLogin::Common�A+
oslogin.googleapis.com/Userusers/{user}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

