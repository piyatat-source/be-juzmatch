<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/answer_record.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class AnswerRecord
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
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/dialogflow/v2/answer_record.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/dialogflow/v2/participant.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
AnswerRecord
name (	H
answer_feedback (2*.google.cloud.dialogflow.v2.AnswerFeedbackB�AW
agent_assistant_record (20.google.cloud.dialogflow.v2.AgentAssistantRecordB�AH :��A�
&dialogflow.googleapis.com/AnswerRecord0projects/{project}/answerRecords/{answer_record}Eprojects/{project}/locations/{location}/answerRecords/{answer_record}B
record"�
ListAnswerRecordsRequest>
parent (	B.�A�A(&dialogflow.googleapis.com/AnswerRecord
filter (	B�A
	page_size (B�A

page_token (	B�A"v
ListAnswerRecordsResponse@
answer_records (2(.google.cloud.dialogflow.v2.AnswerRecord
next_page_token (	"�
UpdateAnswerRecordRequestD
answer_record (2(.google.cloud.dialogflow.v2.AnswerRecordB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
AnswerFeedbackV
correctness_level (2;.google.cloud.dialogflow.v2.AnswerFeedback.CorrectnessLevel]
agent_assistant_detail_feedback (22.google.cloud.dialogflow.v2.AgentAssistantFeedbackH 
clicked (.

click_time (2.google.protobuf.Timestamp
	displayed (0
display_time (2.google.protobuf.Timestamp"p
CorrectnessLevel!
CORRECTNESS_LEVEL_UNSPECIFIED 
NOT_CORRECT
PARTIALLY_CORRECT
FULLY_CORRECTB
detail_feedback"�
AgentAssistantFeedbacka
answer_relevance (2B.google.cloud.dialogflow.v2.AgentAssistantFeedback.AnswerRelevanceB�Ai
document_correctness (2F.google.cloud.dialogflow.v2.AgentAssistantFeedback.DocumentCorrectnessB�Ag
document_efficiency (2E.google.cloud.dialogflow.v2.AgentAssistantFeedback.DocumentEfficiencyB�A"Q
AnswerRelevance 
ANSWER_RELEVANCE_UNSPECIFIED 

IRRELEVANT
RELEVANT"W
DocumentCorrectness$
 DOCUMENT_CORRECTNESS_UNSPECIFIED 
	INCORRECT
CORRECT"Y
DocumentEfficiency#
DOCUMENT_EFFICIENCY_UNSPECIFIED 
INEFFICIENT
	EFFICIENT"�
AgentAssistantRecordS
article_suggestion_answer (2).google.cloud.dialogflow.v2.ArticleAnswerB�AH @

faq_answer (2%.google.cloud.dialogflow.v2.FaqAnswerB�AH B
answer2�
AnswerRecords�
ListAnswerRecords4.google.cloud.dialogflow.v2.ListAnswerRecordsRequest5.google.cloud.dialogflow.v2.ListAnswerRecordsResponse"k���\\%/v2/{parent=projects/*}/answerRecordsZ31/v2/{parent=projects/*/locations/*}/answerRecords�Aparent�
UpdateAnswerRecord5.google.cloud.dialogflow.v2.UpdateAnswerRecordRequest(.google.cloud.dialogflow.v2.AnswerRecord"�����23/v2/{answer_record.name=projects/*/answerRecords/*}:answer_recordZP2?/v2/{answer_record.name=projects/*/locations/*/answerRecords/*}:answer_record�Aanswer_record,update_maskx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BAnswerRecordsProtoPZDgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2;dialogflow��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

