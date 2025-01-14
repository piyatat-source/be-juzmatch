<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class ProfileService
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
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Histogram::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/talent/v4beta1/profile_service.protogoogle.cloud.talent.v4beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/talent/v4beta1/common.proto)google/cloud/talent/v4beta1/filters.proto+google/cloud/talent/v4beta1/histogram.proto)google/cloud/talent/v4beta1/profile.proto#google/longrunning/operations.protogoogle/protobuf/any.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
ListProfilesRequest3
parent (	B#�A�Ajobs.googleapis.com/Profile
filter (	

page_token (	
	page_size (-
	read_mask (2.google.protobuf.FieldMask"g
ListProfilesResponse6
profiles (2$.google.cloud.talent.v4beta1.Profile
next_page_token (	"�
CreateProfileRequest2
parent (	B"�A�A
jobs.googleapis.com/Tenant:
profile (2$.google.cloud.talent.v4beta1.ProfileB�A"F
GetProfileRequest1
name (	B#�A�A
jobs.googleapis.com/Profile"�
UpdateProfileRequest:
profile (2$.google.cloud.talent.v4beta1.ProfileB�A/
update_mask (2.google.protobuf.FieldMask"I
DeleteProfileRequest1
name (	B#�A�A
jobs.googleapis.com/Profile"�
SearchProfilesRequest2
parent (	B"�A�A
jobs.googleapis.com/TenantK
request_metadata (2,.google.cloud.talent.v4beta1.RequestMetadataB�A@
profile_query (2).google.cloud.talent.v4beta1.ProfileQuery
	page_size (

page_token (	
offset (
disable_spell_check (
order_by (	
case_sensitive_sort	 (F
histogram_queries
 (2+.google.cloud.talent.v4beta1.HistogramQuery
result_set_id (	
strict_keywords_search ("�
SearchProfilesResponse
estimated_total_size (I
spell_correction (2/.google.cloud.talent.v4beta1.SpellingCorrection?
metadata (2-.google.cloud.talent.v4beta1.ResponseMetadata
next_page_token (	R
histogram_query_results (21.google.cloud.talent.v4beta1.HistogramQueryResultK
summarized_profiles (2..google.cloud.talent.v4beta1.SummarizedProfile
result_set_id (	"�
SummarizedProfile6
profiles (2$.google.cloud.talent.v4beta1.Profile5
summary (2$.google.cloud.talent.v4beta1.Profile2�	
ProfileService�
ListProfiles0.google.cloud.talent.v4beta1.ListProfilesRequest1.google.cloud.talent.v4beta1.ListProfilesResponse"@���1//v4beta1/{parent=projects/*/tenants/*}/profiles�Aparent�
CreateProfile1.google.cloud.talent.v4beta1.CreateProfileRequest$.google.cloud.talent.v4beta1.Profile"K���4"//v4beta1/{parent=projects/*/tenants/*}/profiles:*�Aparent,profile�

GetProfile..google.cloud.talent.v4beta1.GetProfileRequest$.google.cloud.talent.v4beta1.Profile">���1//v4beta1/{name=projects/*/tenants/*/profiles/*}�Aname�
UpdateProfile1.google.cloud.talent.v4beta1.UpdateProfileRequest$.google.cloud.talent.v4beta1.Profile"L���<27/v4beta1/{profile.name=projects/*/tenants/*/profiles/*}:*�Aprofile�
DeleteProfile1.google.cloud.talent.v4beta1.DeleteProfileRequest.google.protobuf.Empty">���1*//v4beta1/{name=projects/*/tenants/*/profiles/*}�Aname�
SearchProfiles2.google.cloud.talent.v4beta1.SearchProfilesRequest3.google.cloud.talent.v4beta1.SearchProfilesResponse"8���2"-/v4beta1/{parent=projects/*/tenants/*}:search:*l�Ajobs.googleapis.com�AShttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/jobsB�
com.google.cloud.talent.v4beta1BProfileServiceProtoPZAgoogle.golang.org/genproto/googleapis/cloud/talent/v4beta1;talent�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

