<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace GPBMetadata\Google\Cloud\Gaming\V1;

class GameServerClusters
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gaming\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/gaming/v1/game_server_clusters.protogoogle.cloud.gaming.v1google/api/resource.proto#google/cloud/gaming/v1/common.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
ListGameServerClustersRequestE
parent (	B5�A�A/-gameservices.googleapis.com/GameServerCluster
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListGameServerClustersResponseG
game_server_clusters (2).google.cloud.gaming.v1.GameServerCluster
next_page_token (	
unreachable (	"b
GetGameServerClusterRequestC
name (	B5�A�A/
-gameservices.googleapis.com/GameServerCluster"�
CreateGameServerClusterRequestE
parent (	B5�A�A/-gameservices.googleapis.com/GameServerCluster#
game_server_cluster_id (	B�AK
game_server_cluster (2).google.cloud.gaming.v1.GameServerClusterB�A"�
%PreviewCreateGameServerClusterRequestE
parent (	B5�A�A/-gameservices.googleapis.com/GameServerCluster#
game_server_cluster_id (	B�AK
game_server_cluster (2).google.cloud.gaming.v1.GameServerClusterB�A5
preview_time (2.google.protobuf.TimestampB�A"q
&PreviewCreateGameServerClusterResponse
etag (	9
target_state (2#.google.cloud.gaming.v1.TargetState"e
DeleteGameServerClusterRequestC
name (	B5�A�A/
-gameservices.googleapis.com/GameServerCluster"�
%PreviewDeleteGameServerClusterRequestC
name (	B5�A�A/
-gameservices.googleapis.com/GameServerCluster5
preview_time (2.google.protobuf.TimestampB�A"q
&PreviewDeleteGameServerClusterResponse
etag (	9
target_state (2#.google.cloud.gaming.v1.TargetState"�
UpdateGameServerClusterRequestK
game_server_cluster (2).google.cloud.gaming.v1.GameServerClusterB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
%PreviewUpdateGameServerClusterRequestK
game_server_cluster (2).google.cloud.gaming.v1.GameServerClusterB�A4
update_mask (2.google.protobuf.FieldMaskB�A5
preview_time (2.google.protobuf.TimestampB�A"q
&PreviewUpdateGameServerClusterResponse
etag (	9
target_state (2#.google.cloud.gaming.v1.TargetState"�
GameServerClusterConnectionInfoL
gke_cluster_reference (2+.google.cloud.gaming.v1.GkeClusterReferenceH 
	namespace (	B
cluster_reference"&
GkeClusterReference
cluster (	"�
GameServerCluster
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AE
labels (25.google.cloud.gaming.v1.GameServerCluster.LabelsEntryP
connection_info (27.google.cloud.gaming.v1.GameServerClusterConnectionInfo
etag (	
description (	-
LabelsEntry
key (	
value (	:8:��A�
-gameservices.googleapis.com/GameServerClusterSprojects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}B\\
com.google.cloud.gaming.v1PZ<google.golang.org/genproto/googleapis/cloud/gaming/v1;gamingbproto3'
        , true);

        static::$is_initialized = true;
    }
}

