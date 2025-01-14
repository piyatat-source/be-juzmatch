<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1;

class Environments
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�1
@google/cloud/orchestration/airflow/service/v1/environments.proto-google.cloud.orchestration.airflow.service.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"{
CreateEnvironmentRequest
parent (	O
environment (2:.google.cloud.orchestration.airflow.service.v1.Environment"%
GetEnvironmentRequest
name (	"P
ListEnvironmentsRequest
parent (	
	page_size (

page_token (	"�
ListEnvironmentsResponseP
environments (2:.google.cloud.orchestration.airflow.service.v1.Environment
next_page_token (	"(
DeleteEnvironmentRequest
name (	"�
UpdateEnvironmentRequest
name (	O
environment (2:.google.cloud.orchestration.airflow.service.v1.Environment/
update_mask (2.google.protobuf.FieldMask"�
EnvironmentConfig
gke_cluster (	
dag_gcs_prefix (	

node_count (V
software_config (2=.google.cloud.orchestration.airflow.service.v1.SoftwareConfigN
node_config (29.google.cloud.orchestration.airflow.service.v1.NodeConfigk
private_environment_config (2G.google.cloud.orchestration.airflow.service.v1.PrivateEnvironmentConfig|
!web_server_network_access_control (2L.google.cloud.orchestration.airflow.service.v1.WebServerNetworkAccessControlB�A[
database_config	 (2=.google.cloud.orchestration.airflow.service.v1.DatabaseConfigB�A^
web_server_config
 (2>.google.cloud.orchestration.airflow.service.v1.WebServerConfigB�A_
encryption_config (2?.google.cloud.orchestration.airflow.service.v1.EncryptionConfigB�A
airflow_uri (	"�
WebServerNetworkAccessControlv
allowed_ip_ranges (2[.google.cloud.orchestration.airflow.service.v1.WebServerNetworkAccessControl.AllowedIpRange9
AllowedIpRange
value (	
description (	B�A"+
DatabaseConfig
machine_type (	B�A",
WebServerConfig
machine_type (	B�A"-
EncryptionConfig
kms_key_name (	B�A"�
SoftwareConfig
image_version (	{
airflow_config_overrides (2Y.google.cloud.orchestration.airflow.service.v1.SoftwareConfig.AirflowConfigOverridesEntryf
pypi_packages (2O.google.cloud.orchestration.airflow.service.v1.SoftwareConfig.PypiPackagesEntryf
env_variables (2O.google.cloud.orchestration.airflow.service.v1.SoftwareConfig.EnvVariablesEntry
python_version (	=
AirflowConfigOverridesEntry
key (	
value (	:83
PypiPackagesEntry
key (	
value (	:83
EnvVariablesEntry
key (	
value (	:8"�
IPAllocationPolicy
use_ip_aliases (B�A+
cluster_secondary_range_name (	B�AH &
cluster_ipv4_cidr_block (	B�AH ,
services_secondary_range_name (	B�AH\'
services_ipv4_cidr_block (	B�AHB
cluster_ip_allocationB
services_ip_allocation"�

NodeConfig
location (	
machine_type (	
network (	

subnetwork (	
disk_size_gb (
oauth_scopes (	
service_account (	
tags (	d
ip_allocation_policy	 (2A.google.cloud.orchestration.airflow.service.v1.IPAllocationPolicyB�A"�
PrivateClusterConfig$
enable_private_endpoint (B�A#
master_ipv4_cidr_block (	B�A\'
master_ipv4_reserved_range (	B�A"�
PrivateEnvironmentConfig\'
enable_private_environment (B�Ah
private_cluster_config (2C.google.cloud.orchestration.airflow.service.v1.PrivateClusterConfigB�A\'
web_server_ipv4_cidr_block (	B�A&
cloud_sql_ipv4_cidr_block (	B�A+
web_server_ipv4_reserved_range (	B�A"�
Environment
name (	P
config (2@.google.cloud.orchestration.airflow.service.v1.EnvironmentConfig
uuid (	O
state (2@.google.cloud.orchestration.airflow.service.v1.Environment.State/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.TimestampV
labels (2F.google.cloud.orchestration.airflow.service.v1.Environment.LabelsEntry-
LabelsEntry
key (	
value (	:8"`
State
STATE_UNSPECIFIED 
CREATING
RUNNING
UPDATING
DELETING	
ERROR:l�Ai
#composer.googleapis.com/EnvironmentBprojects/{project}/locations/{location}/environments/{environment}"�
CheckUpgradeResponse
build_log_uri (	B�A
contains_pypi_modules_conflict (2R.google.cloud.orchestration.airflow.service.v1.CheckUpgradeResponse.ConflictResultB�A,
pypi_conflict_build_log_extract (	B�A
image_version (	t
pypi_dependencies (2Y.google.cloud.orchestration.airflow.service.v1.CheckUpgradeResponse.PypiDependenciesEntry7
PypiDependenciesEntry
key (	
value (	:8"P
ConflictResult
CONFLICT_RESULT_UNSPECIFIED 
CONFLICT
NO_CONFLICT2�
Environments�
CreateEnvironmentG.google.cloud.orchestration.airflow.service.v1.CreateEnvironmentRequest.google.longrunning.Operation"����?"0/v1/{parent=projects/*/locations/*}/environments:environment�Aparent,environment�AN
Environment?google.cloud.orchestration.airflow.service.v1.OperationMetadata�
GetEnvironmentD.google.cloud.orchestration.airflow.service.v1.GetEnvironmentRequest:.google.cloud.orchestration.airflow.service.v1.Environment"?���20/v1/{name=projects/*/locations/*/environments/*}�Aname�
ListEnvironmentsF.google.cloud.orchestration.airflow.service.v1.ListEnvironmentsRequestG.google.cloud.orchestration.airflow.service.v1.ListEnvironmentsResponse"A���20/v1/{parent=projects/*/locations/*}/environments�Aparent�
UpdateEnvironmentG.google.cloud.orchestration.airflow.service.v1.UpdateEnvironmentRequest.google.longrunning.Operation"����?20/v1/{name=projects/*/locations/*/environments/*}:environment�Aname,environment,update_mask�AN
Environment?google.cloud.orchestration.airflow.service.v1.OperationMetadata�
DeleteEnvironmentG.google.cloud.orchestration.airflow.service.v1.DeleteEnvironmentRequest.google.longrunning.Operation"����2*0/v1/{name=projects/*/locations/*/environments/*}�Aname�AX
google.protobuf.Empty?google.cloud.orchestration.airflow.service.v1.OperationMetadataK�Acomposer.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
1com.google.cloud.orchestration.airflow.service.v1PZTgoogle.golang.org/genproto/googleapis/cloud/orchestration/airflow/service/v1;servicebproto3'
        , true);

        static::$is_initialized = true;
    }
}

