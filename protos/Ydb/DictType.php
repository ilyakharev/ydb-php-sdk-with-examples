<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_value.proto

namespace Ydb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.DictType</code>
 */
class DictType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Type key = 1;</code>
     */
    protected $key = null;
    /**
     * Generated from protobuf field <code>.Ydb.Type payload = 2;</code>
     */
    protected $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Type $key
     *     @type \Ydb\Type $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbValue::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type key = 1;</code>
     * @return \Ydb\Type|null
     */
    public function getKey()
    {
        return $this->key;
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type key = 1;</code>
     * @param \Ydb\Type $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Type::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type payload = 2;</code>
     * @return \Ydb\Type|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type payload = 2;</code>
     * @param \Ydb\Type $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Type::class);
        $this->payload = $var;

        return $this;
    }

}

