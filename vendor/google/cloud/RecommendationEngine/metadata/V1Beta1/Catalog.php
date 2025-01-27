<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/catalog.proto

namespace GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1;

class Catalog
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/cloud/recommendationengine/v1beta1/catalog.proto)google.cloud.recommendationengine.v1beta16google/cloud/recommendationengine/v1beta1/common.protogoogle/protobuf/struct.protogoogle/api/annotations.proto"�
CatalogItem
id (	B�Ak
category_hierarchies (2H.google.cloud.recommendationengine.v1beta1.CatalogItem.CategoryHierarchyB�A
title (	B�A
description (	B�AS
item_attributes (25.google.cloud.recommendationengine.v1beta1.FeatureMapB�A
language_code (	B�A
tags (	B�A
item_group_id	 (	B�A^
product_metadata
 (2=.google.cloud.recommendationengine.v1beta1.ProductCatalogItemB�AH ,
CategoryHierarchy

categories (	B�AB
recommendation_type"�
ProductCatalogItemd
exact_price (2H.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.ExactPriceB�AH d
price_range (2H.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.PriceRangeB�AH \\
costs (2H.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.CostsEntryB�A
currency_code (	B�Ab
stock_state (2H.google.cloud.recommendationengine.v1beta1.ProductCatalogItem.StockStateB�A
available_quantity (B�A"
canonical_product_uri (	B�AE
images (20.google.cloud.recommendationengine.v1beta1.ImageB�AE

ExactPrice
display_price (B�A
original_price (B�A0

PriceRange
min (B�A
max (B�A,

CostsEntry
key (	
value (:8"j

StockState
STOCK_STATE_UNSPECIFIED 
IN_STOCK 
OUT_OF_STOCK
PREORDER
	BACKORDERB
price"B
Image
uri (	B�A
height (B�A
width (B�AB�
-com.google.cloud.recommendationengine.v1beta1PZ]google.golang.org/genproto/googleapis/cloud/recommendationengine/v1beta1;recommendationengine�RECAI�)Google.Cloud.RecommendationEngine.V1Beta1�)Google\\Cloud\\RecommendationEngine\\V1beta1�,Google::Cloud::RecommendationEngine::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

