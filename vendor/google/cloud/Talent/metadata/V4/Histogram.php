<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/histogram.proto

namespace GPBMetadata\Google\Cloud\Talent\V4;

class Histogram
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/talent/v4/histogram.protogoogle.cloud.talent.v4")
HistogramQuery
histogram_query (	"�
HistogramQueryResult
histogram_query (	N
	histogram (2;.google.cloud.talent.v4.HistogramQueryResult.HistogramEntry0
HistogramEntry
key (	
value (:8Br
com.google.cloud.talent.v4BHistogramProtoPZ<google.golang.org/genproto/googleapis/cloud/talent/v4;talent�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

