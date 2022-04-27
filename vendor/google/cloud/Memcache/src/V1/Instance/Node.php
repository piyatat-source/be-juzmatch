<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.memcache.v1.Instance.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier of the Memcached node. The node id does not
     * include project or location like the Memcached instance name.
     *
     * Generated from protobuf field <code>string node_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $node_id = '';
    /**
     * Output only. Location (GCP Zone) for the Memcached node.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $zone = '';
    /**
     * Output only. Current state of the Memcached node.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.Instance.Node.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Hostname or IP address of the Memcached node used by the
     * clients to connect to the Memcached server on this node.
     *
     * Generated from protobuf field <code>string host = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $host = '';
    /**
     * Output only. The port number of the Memcached server on this node.
     *
     * Generated from protobuf field <code>int32 port = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $port = 0;
    /**
     * User defined parameters currently applied to the node.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.MemcacheParameters parameters = 6;</code>
     */
    private $parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_id
     *           Output only. Identifier of the Memcached node. The node id does not
     *           include project or location like the Memcached instance name.
     *     @type string $zone
     *           Output only. Location (GCP Zone) for the Memcached node.
     *     @type int $state
     *           Output only. Current state of the Memcached node.
     *     @type string $host
     *           Output only. Hostname or IP address of the Memcached node used by the
     *           clients to connect to the Memcached server on this node.
     *     @type int $port
     *           Output only. The port number of the Memcached server on this node.
     *     @type \Google\Cloud\Memcache\V1\MemcacheParameters $parameters
     *           User defined parameters currently applied to the node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier of the Memcached node. The node id does not
     * include project or location like the Memcached instance name.
     *
     * Generated from protobuf field <code>string node_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * Output only. Identifier of the Memcached node. The node id does not
     * include project or location like the Memcached instance name.
     *
     * Generated from protobuf field <code>string node_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_id = $var;

        return $this;
    }

    /**
     * Output only. Location (GCP Zone) for the Memcached node.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Output only. Location (GCP Zone) for the Memcached node.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Output only. Current state of the Memcached node.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.Instance.Node.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the Memcached node.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.Instance.Node.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Memcache\V1\Instance\Node\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Hostname or IP address of the Memcached node used by the
     * clients to connect to the Memcached server on this node.
     *
     * Generated from protobuf field <code>string host = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Output only. Hostname or IP address of the Memcached node used by the
     * clients to connect to the Memcached server on this node.
     *
     * Generated from protobuf field <code>string host = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Output only. The port number of the Memcached server on this node.
     *
     * Generated from protobuf field <code>int32 port = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Output only. The port number of the Memcached server on this node.
     *
     * Generated from protobuf field <code>int32 port = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * User defined parameters currently applied to the node.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.MemcacheParameters parameters = 6;</code>
     * @return \Google\Cloud\Memcache\V1\MemcacheParameters|null
     */
    public function getParameters()
    {
        return isset($this->parameters) ? $this->parameters : null;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * User defined parameters currently applied to the node.
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.MemcacheParameters parameters = 6;</code>
     * @param \Google\Cloud\Memcache\V1\MemcacheParameters $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Memcache\V1\MemcacheParameters::class);
        $this->parameters = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Node::class, \Google\Cloud\Memcache\V1\Instance_Node::class);
