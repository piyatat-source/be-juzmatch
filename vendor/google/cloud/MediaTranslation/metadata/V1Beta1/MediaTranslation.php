<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/mediatranslation/v1beta1/media_translation.proto

namespace GPBMetadata\Google\Cloud\Mediatranslation\V1Beta1;

class MediaTranslation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/cloud/mediatranslation/v1beta1/media_translation.proto%google.cloud.mediatranslation.v1beta1google/rpc/status.protogoogle/api/client.proto"�
TranslateSpeechConfig
audio_encoding (	B�A!
source_language_code (	B�A!
target_language_code (	B�A
sample_rate_hertz (B�A
model (	B�A"�
StreamingTranslateSpeechConfigW
audio_config (2<.google.cloud.mediatranslation.v1beta1.TranslateSpeechConfigB�A
single_utterance (B�A"�
StreamingTranslateSpeechRequesta
streaming_config (2E.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechConfigH 
audio_content (H B
streaming_request"�
StreamingTranslateSpeechResult~
text_translation_result (2[.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult.TextTranslationResultH H
TextTranslationResult
translation (	B�A
is_final (B�AB
result"�
 StreamingTranslateSpeechResponse&
error (2.google.rpc.StatusB�AZ
result (2E.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResultB�Aw
speech_event_type (2W.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResponse.SpeechEventTypeB�A"Q
SpeechEventType!
SPEECH_EVENT_TYPE_UNSPECIFIED 
END_OF_SINGLE_UTTERANCE2�
SpeechTranslationService�
StreamingTranslateSpeechF.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechRequestG.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResponse" (0S�Amediatranslation.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
)com.google.cloud.mediatranslation.v1beta1BMediaTranslationProtoPZUgoogle.golang.org/genproto/googleapis/cloud/mediatranslation/v1beta1;mediatranslation��%Google.Cloud.MediaTranslation.V1Beta1�%Google\\Cloud\\MediaTranslation\\V1beta1�(Google::Cloud::MediaTranslation::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

