<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/package.proto

namespace GPBMetadata\Grafeas\V1;

class Package
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
grafeas/v1/package.proto
grafeas.v1"�
Distribution
cpe_uri (	.
architecture (2.grafeas.v1.Architecture+
latest_version (2.grafeas.v1.Version

maintainer (	
url (	
description (	"O
Location
cpe_uri (	$
version (2.grafeas.v1.Version
path (	"K
PackageNote
name (	.
distribution
 (2.grafeas.v1.Distribution"I
PackageOccurrence
name (	&
location (2.grafeas.v1.Location"�
Version
epoch (
name (	
revision (	-
kind (2.grafeas.v1.Version.VersionKind
	full_name (	"Q
VersionKind
VERSION_KIND_UNSPECIFIED 

NORMAL
MINIMUM
MAXIMUM*>
Architecture
ARCHITECTURE_UNSPECIFIED 
X86
X64BQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

