<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_formats.proto

namespace Ydb\Formats;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Formats.ArrowBatchSettings</code>
 */
class ArrowBatchSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes schema = 1;</code>
     */
    protected $schema = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $schema
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbFormats::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes schema = 1;</code>
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Generated from protobuf field <code>bytes schema = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkString($var, False);
        $this->schema = $var;

        return $this;
    }

}

