<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/document.proto

namespace GPBMetadata\Google\Firestore\V1;

class Document
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
"google/firestore/v1/document.protogoogle.firestore.v1google/protobuf/timestamp.protogoogle/type/latlng.protogoogle/api/annotations.proto"�
Document
name (	9
fields (2).google.firestore.v1.Document.FieldsEntry/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.TimestampI
FieldsEntry
key (	)
value (2.google.firestore.v1.Value:8"�
Value0

null_value (2.google.protobuf.NullValueH 
boolean_value (H 
integer_value (H 
double_value (H 5
timestamp_value
 (2.google.protobuf.TimestampH 
string_value (	H 
bytes_value (H 
reference_value (	H .
geo_point_value (2.google.type.LatLngH 6
array_value	 (2.google.firestore.v1.ArrayValueH 2
	map_value (2.google.firestore.v1.MapValueH B

value_type"8

ArrayValue*
values (2.google.firestore.v1.Value"�
MapValue9
fields (2).google.firestore.v1.MapValue.FieldsEntryI
FieldsEntry
key (	)
value (2.google.firestore.v1.Value:8B�
com.google.firestore.v1BDocumentProtoPZ<google.golang.org/genproto/googleapis/firestore/v1;firestore�GCFS�Google.Cloud.Firestore.V1�Google\\Cloud\\Firestore\\V1�Google::Cloud::Firestore::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

