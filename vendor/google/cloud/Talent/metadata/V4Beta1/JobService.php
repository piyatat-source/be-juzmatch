<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class JobService
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
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Job::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�3
-google/cloud/talent/v4beta1/job_service.protogoogle.cloud.talent.v4beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/talent/v4beta1/common.proto)google/cloud/talent/v4beta1/filters.proto+google/cloud/talent/v4beta1/histogram.proto%google/cloud/talent/v4beta1/job.proto#google/longrunning/operations.protogoogle/protobuf/any.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"w
CreateJobRequest/
parent (	B�A�Ajobs.googleapis.com/Job2
job (2 .google.cloud.talent.v4beta1.JobB�A">
GetJobRequest-
name (	B�A�A
jobs.googleapis.com/Job"w
UpdateJobRequest2
job (2 .google.cloud.talent.v4beta1.JobB�A/
update_mask (2.google.protobuf.FieldMask"A
DeleteJobRequest-
name (	B�A�A
jobs.googleapis.com/Job"^
BatchDeleteJobsRequest/
parent (	B�A�Ajobs.googleapis.com/Job
filter (	B�A"�
ListJobsRequest/
parent (	B�A�Ajobs.googleapis.com/Job
filter (	B�A

page_token (	
	page_size (6
job_view (2$.google.cloud.talent.v4beta1.JobView"�
ListJobsResponse.
jobs (2 .google.cloud.talent.v4beta1.Job
next_page_token (	?
metadata (2-.google.cloud.talent.v4beta1.ResponseMetadata"�	
SearchJobsRequest/
parent (	B�A�Ajobs.googleapis.com/JobN
search_mode (29.google.cloud.talent.v4beta1.SearchJobsRequest.SearchModeK
request_metadata (2,.google.cloud.talent.v4beta1.RequestMetadataB�A8
	job_query (2%.google.cloud.talent.v4beta1.JobQuery
enable_broadening (#
require_precise_result_size (F
histogram_queries (2+.google.cloud.talent.v4beta1.HistogramQuery6
job_view (2$.google.cloud.talent.v4beta1.JobView
offset	 (
	page_size
 (

page_token (	
order_by (	b
diversification_level (2C.google.cloud.talent.v4beta1.SearchJobsRequest.DiversificationLevel]
custom_ranking_info (2@.google.cloud.talent.v4beta1.SearchJobsRequest.CustomRankingInfo
disable_keyword_match (�
CustomRankingInfoo
importance_level (2P.google.cloud.talent.v4beta1.SearchJobsRequest.CustomRankingInfo.ImportanceLevelB�A
ranking_expression (	B�A"s
ImportanceLevel 
IMPORTANCE_LEVEL_UNSPECIFIED 
NONE
LOW
MILD

MEDIUM
HIGH
EXTREME"R

SearchMode
SEARCH_MODE_UNSPECIFIED 

JOB_SEARCH
FEATURED_JOB_SEARCH"W
DiversificationLevel%
!DIVERSIFICATION_LEVEL_UNSPECIFIED 
DISABLED

SIMPLE"�
SearchJobsResponseR
matching_jobs (2;.google.cloud.talent.v4beta1.SearchJobsResponse.MatchingJobR
histogram_query_results (21.google.cloud.talent.v4beta1.HistogramQueryResult
next_page_token (	?
location_filters (2%.google.cloud.talent.v4beta1.Location
estimated_total_size (

total_size (?
metadata (2-.google.cloud.talent.v4beta1.ResponseMetadata"
broadened_query_jobs_count (I
spell_correction	 (2/.google.cloud.talent.v4beta1.SpellingCorrection�
MatchingJob-
job (2 .google.cloud.talent.v4beta1.Job
job_summary (	
job_title_snippet (	
search_text_snippet (	Q
commute_info (2;.google.cloud.talent.v4beta1.SearchJobsResponse.CommuteInfo~
CommuteInfo;
job_location (2%.google.cloud.talent.v4beta1.Location2
travel_duration (2.google.protobuf.Duration"~
BatchCreateJobsRequest/
parent (	B�A�Ajobs.googleapis.com/Job3
jobs (2 .google.cloud.talent.v4beta1.JobB�A"�
BatchUpdateJobsRequest/
parent (	B�A�Ajobs.googleapis.com/Job3
jobs (2 .google.cloud.talent.v4beta1.JobB�A/
update_mask (2.google.protobuf.FieldMask"�
JobOperationResultN
job_results (29.google.cloud.talent.v4beta1.JobOperationResult.JobResult^
	JobResult-
job (2 .google.cloud.talent.v4beta1.Job"
status (2.google.rpc.Status*v
JobView
JOB_VIEW_UNSPECIFIED 
JOB_VIEW_ID_ONLY
JOB_VIEW_MINIMAL
JOB_VIEW_SMALL
JOB_VIEW_FULL2�

JobService�
	CreateJob-.google.cloud.talent.v4beta1.CreateJobRequest .google.cloud.talent.v4beta1.Job"k���X"+/v4beta1/{parent=projects/*/tenants/*}/jobs:*Z&"!/v4beta1/{parent=projects/*}/jobs:*�A
parent,job�
BatchCreateJobs3.google.cloud.talent.v4beta1.BatchCreateJobsRequest.google.longrunning.Operation"����p"7/v4beta1/{parent=projects/*/tenants/*}/jobs:batchCreate:*Z2"-/v4beta1/{parent=projects/*}/jobs:batchCreate:*�Aparent,jobs�A,
JobOperationResultBatchOperationMetadata�
GetJob*.google.cloud.talent.v4beta1.GetJobRequest .google.cloud.talent.v4beta1.Job"_���R+/v4beta1/{name=projects/*/tenants/*/jobs/*}Z#!/v4beta1/{name=projects/*/jobs/*}�Aname�
	UpdateJob-.google.cloud.talent.v4beta1.UpdateJobRequest .google.cloud.talent.v4beta1.Job"l���`2//v4beta1/{job.name=projects/*/tenants/*/jobs/*}:*Z*2%/v4beta1/{job.name=projects/*/jobs/*}:*�Ajob�
BatchUpdateJobs3.google.cloud.talent.v4beta1.BatchUpdateJobsRequest.google.longrunning.Operation"����p"7/v4beta1/{parent=projects/*/tenants/*}/jobs:batchUpdate:*Z2"-/v4beta1/{parent=projects/*}/jobs:batchUpdate:*�Aparent,jobs�A,
JobOperationResultBatchOperationMetadata�
	DeleteJob-.google.cloud.talent.v4beta1.DeleteJobRequest.google.protobuf.Empty"_���R*+/v4beta1/{name=projects/*/tenants/*/jobs/*}Z#*!/v4beta1/{name=projects/*/jobs/*}�Aname�
BatchDeleteJobs3.google.cloud.talent.v4beta1.BatchDeleteJobsRequest.google.protobuf.Empty"����m"7/v4beta1/{parent=projects/*/tenants/*}/jobs:batchDelete:*Z/"-/v4beta1/{parent=projects/*}/jobs:batchDelete�Aparent,filter�
ListJobs,.google.cloud.talent.v4beta1.ListJobsRequest-.google.cloud.talent.v4beta1.ListJobsResponse"h���R+/v4beta1/{parent=projects/*/tenants/*}/jobsZ#!/v4beta1/{parent=projects/*}/jobs�Aparent,filter�

SearchJobs..google.cloud.talent.v4beta1.SearchJobsRequest/.google.cloud.talent.v4beta1.SearchJobsResponse"l���f"2/v4beta1/{parent=projects/*/tenants/*}/jobs:search:*Z-"(/v4beta1/{parent=projects/*}/jobs:search:*�
SearchJobsForAlert..google.cloud.talent.v4beta1.SearchJobsRequest/.google.cloud.talent.v4beta1.SearchJobsResponse"|���v":/v4beta1/{parent=projects/*/tenants/*}/jobs:searchForAlert:*Z5"0/v4beta1/{parent=projects/*}/jobs:searchForAlert:*l�Ajobs.googleapis.com�AShttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/jobsB}
com.google.cloud.talent.v4beta1BJobServiceProtoPZAgoogle.golang.org/genproto/googleapis/cloud/talent/v4beta1;talent�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

