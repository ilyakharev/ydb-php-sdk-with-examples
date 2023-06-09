<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_value.proto

namespace Ydb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.TaggedType</code>
 */
class TaggedType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    protected $tag = '';
    /**
     * Generated from protobuf field <code>.Ydb.Type type = 2;</code>
     */
    protected $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag
     *     @type \Ydb\Type $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbValue::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type type = 2;</code>
     * @return \Ydb\Type|null
     */
    public function getType()
    {
        return $this->type;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Type type = 2;</code>
     * @param \Ydb\Type $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Type::class);
        $this->type = $var;

        return $this;
    }

}

