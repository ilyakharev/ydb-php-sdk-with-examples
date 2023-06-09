<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_query_stats.proto

namespace Ydb\TableStats;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes select, update (insert, upsert, replace) and delete operations
 *
 * Generated from protobuf message <code>Ydb.TableStats.OperationStats</code>
 */
class OperationStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 rows = 1;</code>
     */
    protected $rows = 0;
    /**
     * Generated from protobuf field <code>uint64 bytes = 2;</code>
     */
    protected $bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $rows
     *     @type int|string $bytes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbQueryStats::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 rows = 1;</code>
     * @return int|string
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Generated from protobuf field <code>uint64 rows = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRows($var)
    {
        GPBUtil::checkUint64($var);
        $this->rows = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes = 2;</code>
     * @return int|string
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * Generated from protobuf field <code>uint64 bytes = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytes($var)
    {
        GPBUtil::checkUint64($var);
        $this->bytes = $var;

        return $this;
    }

}

