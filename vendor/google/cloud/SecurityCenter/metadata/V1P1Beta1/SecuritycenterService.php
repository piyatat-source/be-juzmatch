<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1;

class SecuritycenterService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\NotificationMessage::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\RunAssetDiscoveryResponse::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Asset::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Finding::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Folder::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\NotificationConfig::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\OrganizationSettings::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecurityMarks::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Source::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�i
Bgoogle/cloud/securitycenter/v1p1beta1/securitycenter_service.proto%google.cloud.securitycenter.v1p1beta1Hgoogle/cloud/securitycenter/v1p1beta1/run_asset_discovery_response.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/securitycenter/v1p1beta1/asset.proto3google/cloud/securitycenter/v1p1beta1/finding.proto2google/cloud/securitycenter/v1p1beta1/folder.proto?google/cloud/securitycenter/v1p1beta1/notification_config.protoAgoogle/cloud/securitycenter/v1p1beta1/organization_settings.proto:google/cloud/securitycenter/v1p1beta1/security_marks.proto2google/cloud/securitycenter/v1p1beta1/source.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
CreateFindingRequest<
parent (	B,�A�A&
$securitycenter.googleapis.com/Source

finding_id (	B�AD
finding (2..google.cloud.securitycenter.v1p1beta1.FindingB�A"�
CreateNotificationConfigRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization
	config_id (	B�A[
notification_config (29.google.cloud.securitycenter.v1p1beta1.NotificationConfigB�A"�
CreateSourceRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/OrganizationB
source (2-.google.cloud.securitycenter.v1p1beta1.SourceB�A"i
DeleteNotificationConfigRequestF
name (	B8�A�A2
0securitycenter.googleapis.com/NotificationConfig"f
GetNotificationConfigRequestF
name (	B8�A�A2
0securitycenter.googleapis.com/NotificationConfig"j
GetOrganizationSettingsRequestH
name (	B:�A�A4
2securitycenter.googleapis.com/OrganizationSettings"N
GetSourceRequest:
name (	B,�A�A&
$securitycenter.googleapis.com/Source"�
GroupAssetsRequest;
parent (	B+�A�A%#securitycenter.googleapis.com/Asset
filter (	
group_by (	B�A3
compare_duration (2.google.protobuf.Duration-
	read_time (2.google.protobuf.Timestamp

page_token (	
	page_size ("�
GroupAssetsResponseL
group_by_results (22.google.cloud.securitycenter.v1p1beta1.GroupResult-
	read_time (2.google.protobuf.Timestamp
next_page_token (	

total_size ("�
GroupFindingsRequest<
parent (	B,�A�A&
$securitycenter.googleapis.com/Source
filter (	
group_by (	B�A-
	read_time (2.google.protobuf.Timestamp3
compare_duration (2.google.protobuf.Duration

page_token (	
	page_size ("�
GroupFindingsResponseL
group_by_results (22.google.cloud.securitycenter.v1p1beta1.GroupResult-
	read_time (2.google.protobuf.Timestamp
next_page_token (	

total_size ("�
GroupResultV

properties (2B.google.cloud.securitycenter.v1p1beta1.GroupResult.PropertiesEntry
count (I
PropertiesEntry
key (	%
value (2.google.protobuf.Value:8"�
ListNotificationConfigsRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization

page_token (	
	page_size ("�
ListNotificationConfigsResponseW
notification_configs (29.google.cloud.securitycenter.v1p1beta1.NotificationConfig
next_page_token (	"y
ListSourcesRequest<
parent (	B,�A�A&$securitycenter.googleapis.com/Source

page_token (	
	page_size ("n
ListSourcesResponse>
sources (2-.google.cloud.securitycenter.v1p1beta1.Source
next_page_token (	"�
ListAssetsRequest;
parent (	B+�A�A%#securitycenter.googleapis.com/Asset
filter (	
order_by (	-
	read_time (2.google.protobuf.Timestamp3
compare_duration (2.google.protobuf.Duration.

field_mask (2.google.protobuf.FieldMask

page_token (	
	page_size	 ("�
ListAssetsResponseg
list_assets_results (2J.google.cloud.securitycenter.v1p1beta1.ListAssetsResponse.ListAssetsResult-
	read_time (2.google.protobuf.Timestamp
next_page_token (	

total_size (�
ListAssetsResult;
asset (2,.google.cloud.securitycenter.v1p1beta1.Assetl
state_change (2V.google.cloud.securitycenter.v1p1beta1.ListAssetsResponse.ListAssetsResult.StateChange"=
StateChange

UNUSED 	
ADDED
REMOVED

ACTIVE"�
ListFindingsRequest<
parent (	B,�A�A&
$securitycenter.googleapis.com/Source
filter (	
order_by (	-
	read_time (2.google.protobuf.Timestamp3
compare_duration (2.google.protobuf.Duration.

field_mask (2.google.protobuf.FieldMask

page_token (	
	page_size	 ("�
ListFindingsResponsem
list_findings_results (2N.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult-
	read_time (2.google.protobuf.Timestamp
next_page_token (	

total_size (�
ListFindingsResult?
finding (2..google.cloud.securitycenter.v1p1beta1.Findingp
state_change (2Z.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.StateChangen
resource (2W.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.ResourceB�A�
Resource
name (	
project_name (	
project_display_name (	
parent_name (	
parent_display_name (	>
folders
 (2-.google.cloud.securitycenter.v1p1beta1.Folder"M
StateChange

UNUSED 
CHANGED
	UNCHANGED	
ADDED
REMOVED"�
SetFindingStateRequest;
name (	B-�A�A\'
%securitycenter.googleapis.com/FindingH
state (24.google.cloud.securitycenter.v1p1beta1.Finding.StateB�A3

start_time (2.google.protobuf.TimestampB�A"d
RunAssetDiscoveryRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization"�
UpdateFindingRequestD
finding (2..google.cloud.securitycenter.v1p1beta1.FindingB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateNotificationConfigRequest[
notification_config (29.google.cloud.securitycenter.v1p1beta1.NotificationConfigB�A/
update_mask (2.google.protobuf.FieldMask"�
!UpdateOrganizationSettingsRequest_
organization_settings (2;.google.cloud.securitycenter.v1p1beta1.OrganizationSettingsB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateSourceRequestB
source (2-.google.cloud.securitycenter.v1p1beta1.SourceB�A/
update_mask (2.google.protobuf.FieldMask"�
UpdateSecurityMarksRequestQ
security_marks (24.google.cloud.securitycenter.v1p1beta1.SecurityMarksB�A/
update_mask (2.google.protobuf.FieldMask.

start_time (2.google.protobuf.Timestamp2�3
SecurityCenter�
CreateSource:.google.cloud.securitycenter.v1p1beta1.CreateSourceRequest-.google.cloud.securitycenter.v1p1beta1.Source"K���5"+/v1p1beta1/{parent=organizations/*}/sources:source�Aparent,source�
CreateFinding;.google.cloud.securitycenter.v1p1beta1.CreateFindingRequest..google.cloud.securitycenter.v1p1beta1.Finding"���A"6/v1p1beta1/{parent=organizations/*/sources/*}/findings:finding�Aparent,finding_id,finding�Aparent,finding,finding_id�
CreateNotificationConfigF.google.cloud.securitycenter.v1p1beta1.CreateNotificationConfigRequest9.google.cloud.securitycenter.v1p1beta1.NotificationConfig"����N"7/v1p1beta1/{parent=organizations/*}/notificationConfigs:notification_config�A$parent,config_id,notification_config�Aparent,notification_config�
DeleteNotificationConfigF.google.cloud.securitycenter.v1p1beta1.DeleteNotificationConfigRequest.google.protobuf.Empty"F���9*7/v1p1beta1/{name=organizations/*/notificationConfigs/*}�Aname�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"R���A"</v1p1beta1/{resource=organizations/*/sources/*}:getIamPolicy:*�Aresource�
GetNotificationConfigC.google.cloud.securitycenter.v1p1beta1.GetNotificationConfigRequest9.google.cloud.securitycenter.v1p1beta1.NotificationConfig"F���97/v1p1beta1/{name=organizations/*/notificationConfigs/*}�Aname�
GetOrganizationSettingsE.google.cloud.securitycenter.v1p1beta1.GetOrganizationSettingsRequest;.google.cloud.securitycenter.v1p1beta1.OrganizationSettings"E���86/v1p1beta1/{name=organizations/*/organizationSettings}�Aname�
	GetSource7.google.cloud.securitycenter.v1p1beta1.GetSourceRequest-.google.cloud.securitycenter.v1p1beta1.Source":���-+/v1p1beta1/{name=organizations/*/sources/*}�Aname�
GroupAssets9.google.cloud.securitycenter.v1p1beta1.GroupAssetsRequest:.google.cloud.securitycenter.v1p1beta1.GroupAssetsResponse"�����"0/v1p1beta1/{parent=organizations/*}/assets:group:*Z/"*/v1p1beta1/{parent=folders/*}/assets:group:*Z0"+/v1p1beta1/{parent=projects/*}/assets:group:*�
GroupFindings;.google.cloud.securitycenter.v1p1beta1.GroupFindingsRequest<.google.cloud.securitycenter.v1p1beta1.GroupFindingsResponse"�����"</v1p1beta1/{parent=organizations/*/sources/*}/findings:group:*Z;"6/v1p1beta1/{parent=folders/*/sources/*}/findings:group:*Z<"7/v1p1beta1/{parent=projects/*/sources/*}/findings:group:*�Aparent,group_by�

ListAssets8.google.cloud.securitycenter.v1p1beta1.ListAssetsRequest9.google.cloud.securitycenter.v1p1beta1.ListAssetsResponse"����}*/v1p1beta1/{parent=organizations/*}/assetsZ&$/v1p1beta1/{parent=folders/*}/assetsZ\'%/v1p1beta1/{parent=projects/*}/assets�Aparent�
ListFindings:.google.cloud.securitycenter.v1p1beta1.ListFindingsRequest;.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse"�����6/v1p1beta1/{parent=organizations/*/sources/*}/findingsZ20/v1p1beta1/{parent=folders/*/sources/*}/findingsZ31/v1p1beta1/{parent=projects/*/sources/*}/findings�Aparent�
ListNotificationConfigsE.google.cloud.securitycenter.v1p1beta1.ListNotificationConfigsRequestF.google.cloud.securitycenter.v1p1beta1.ListNotificationConfigsResponse"H���97/v1p1beta1/{parent=organizations/*}/notificationConfigs�Aparent�
ListSources9.google.cloud.securitycenter.v1p1beta1.ListSourcesRequest:.google.cloud.securitycenter.v1p1beta1.ListSourcesResponse"�����+/v1p1beta1/{parent=organizations/*}/sourcesZ\'%/v1p1beta1/{parent=folders/*}/sourcesZ(&/v1p1beta1/{parent=projects/*}/sources�Aparent�
RunAssetDiscovery?.google.cloud.securitycenter.v1p1beta1.RunAssetDiscoveryRequest.google.longrunning.Operation"����<"7/v1p1beta1/{parent=organizations/*}/assets:runDiscovery:*�Aparent�AX
?google.cloud.securitycenter.v1p1beta1.RunAssetDiscoveryResponsegoogle.protobuf.Empty�
SetFindingState=.google.cloud.securitycenter.v1p1beta1.SetFindingStateRequest..google.cloud.securitycenter.v1p1beta1.Finding"�����"?/v1p1beta1/{name=organizations/*/sources/*/findings/*}:setState:*Z>"9/v1p1beta1/{name=folders/*/sources/*/findings/*}:setState:*Z?":/v1p1beta1/{name=projects/*/sources/*/findings/*}:setState:*�Aname,state,start_time�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"Y���A"</v1p1beta1/{resource=organizations/*/sources/*}:setIamPolicy:*�Aresource,policy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"d���G"B/v1p1beta1/{resource=organizations/*/sources/*}:testIamPermissions:*�Aresource,permissions�
UpdateFinding;.google.cloud.securitycenter.v1p1beta1.UpdateFindingRequest..google.cloud.securitycenter.v1p1beta1.Finding"�����2>/v1p1beta1/{finding.name=organizations/*/sources/*/findings/*}:findingZC28/v1p1beta1/{finding.name=folders/*/sources/*/findings/*}:findingZD29/v1p1beta1/{finding.name=projects/*/sources/*/findings/*}:finding�Afinding�Afinding,update_mask�
UpdateNotificationConfigF.google.cloud.securitycenter.v1p1beta1.UpdateNotificationConfigRequest9.google.cloud.securitycenter.v1p1beta1.NotificationConfig"����b2K/v1p1beta1/{notification_config.name=organizations/*/notificationConfigs/*}:notification_config�Anotification_config�Anotification_config,update_mask�
UpdateOrganizationSettingsH.google.cloud.securitycenter.v1p1beta1.UpdateOrganizationSettingsRequest;.google.cloud.securitycenter.v1p1beta1.OrganizationSettings"����e2L/v1p1beta1/{organization_settings.name=organizations/*/organizationSettings}:organization_settings�Aorganization_settings�
UpdateSource:.google.cloud.securitycenter.v1p1beta1.UpdateSourceRequest-.google.cloud.securitycenter.v1p1beta1.Source"`���<22/v1p1beta1/{source.name=organizations/*/sources/*}:source�Asource�Asource,update_mask�
UpdateSecurityMarksA.google.cloud.securitycenter.v1p1beta1.UpdateSecurityMarksRequest4.google.cloud.securitycenter.v1p1beta1.SecurityMarks"�����2G/v1p1beta1/{security_marks.name=organizations/*/assets/*/securityMarks}:security_marksZS2A/v1p1beta1/{security_marks.name=folders/*/assets/*/securityMarks}:security_marksZT2B/v1p1beta1/{security_marks.name=projects/*/assets/*/securityMarks}:security_marksZe2S/v1p1beta1/{security_marks.name=organizations/*/sources/*/findings/*/securityMarks}:security_marksZ_2M/v1p1beta1/{security_marks.name=folders/*/sources/*/findings/*/securityMarks}:security_marksZ`2N/v1p1beta1/{security_marks.name=projects/*/sources/*/findings/*/securityMarks}:security_marks�Asecurity_marks�Asecurity_marks,update_maskQ�Asecuritycenter.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
)com.google.cloud.securitycenter.v1p1beta1PZSgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1p1beta1;securitycenter�%Google.Cloud.SecurityCenter.V1P1Beta1�%Google\\Cloud\\SecurityCenter\\V1p1beta1�(Google::Cloud::SecurityCenter::V1p1beta1P Pbproto3'
        , true);

        static::$is_initialized = true;
    }
}

