<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/type.proto

namespace GPBMetadata\Google\Spanner\V1;

class Type
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/spanner/v1/type.protogoogle.spanner.v1google/api/annotations.proto"�
Type.
code (2.google.spanner.v1.TypeCodeB�A3
array_element_type (2.google.spanner.v1.Type2
struct_type (2.google.spanner.v1.StructType"

StructType3
fields (2#.google.spanner.v1.StructType.Field<
Field
name (	%
type (2.google.spanner.v1.Type*�
TypeCode
TYPE_CODE_UNSPECIFIED 
BOOL	
INT64
FLOAT64
	TIMESTAMP
DATE

STRING	
BYTES	
ARRAY

STRUCT	
NUMERIC

JSONB�
com.google.spanner.v1B	TypeProtoPZ8google.golang.org/genproto/googleapis/spanner/v1;spanner�Google.Cloud.Spanner.V1�Google\\Cloud\\Spanner\\V1�Google::Cloud::Spanner::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

