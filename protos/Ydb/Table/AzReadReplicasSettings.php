<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.AzReadReplicasSettings</code>
 */
class AzReadReplicasSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * AZ name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Read replicas count in this AZ
     *
     * Generated from protobuf field <code>uint64 read_replicas_count = 2;</code>
     */
    protected $read_replicas_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           AZ name
     *     @type int|string $read_replicas_count
     *           Read replicas count in this AZ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * AZ name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * AZ name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Read replicas count in this AZ
     *
     * Generated from protobuf field <code>uint64 read_replicas_count = 2;</code>
     * @return int|string
     */
    public function getReadReplicasCount()
    {
        return $this->read_replicas_count;
    }

    /**
     * Read replicas count in this AZ
     *
     * Generated from protobuf field <code>uint64 read_replicas_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReadReplicasCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->read_replicas_count = $var;

        return $this;
    }

}

