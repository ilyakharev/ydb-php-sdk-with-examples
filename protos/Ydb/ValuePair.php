<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_value.proto

namespace Ydb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.ValuePair</code>
 */
class ValuePair extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Value key = 1;</code>
     */
    protected $key = null;
    /**
     * Generated from protobuf field <code>.Ydb.Value payload = 2;</code>
     */
    protected $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Value $key
     *     @type \Ydb\Value $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbValue::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Value key = 1;</code>
     * @return \Ydb\Value|null
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
     * Generated from protobuf field <code>.Ydb.Value key = 1;</code>
     * @param \Ydb\Value $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Value::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Value payload = 2;</code>
     * @return \Ydb\Value|null
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
     * Generated from protobuf field <code>.Ydb.Value payload = 2;</code>
     * @param \Ydb\Value $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Value::class);
        $this->payload = $var;

        return $this;
    }

}

