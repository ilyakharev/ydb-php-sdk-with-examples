<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.PartitioningSettings</code>
 */
class PartitioningSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * List of columns to partition by
     *
     * Generated from protobuf field <code>repeated string partition_by = 1;</code>
     */
    private $partition_by;
    /**
     * Enable auto partitioning on reaching upper or lower partition size bound
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status partitioning_by_size = 2;</code>
     */
    protected $partitioning_by_size = 0;
    /**
     * Preferred partition size for auto partitioning by size, Mb
     *
     * Generated from protobuf field <code>uint64 partition_size_mb = 3;</code>
     */
    protected $partition_size_mb = 0;
    /**
     * Enable auto partitioning based on load on each partition
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status partitioning_by_load = 4;</code>
     */
    protected $partitioning_by_load = 0;
    /**
     * Minimum partitions count auto merge would stop working at
     *
     * Generated from protobuf field <code>uint64 min_partitions_count = 6;</code>
     */
    protected $min_partitions_count = 0;
    /**
     * Maximum partitions count auto split would stop working at
     *
     * Generated from protobuf field <code>uint64 max_partitions_count = 7;</code>
     */
    protected $max_partitions_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $partition_by
     *           List of columns to partition by
     *     @type int $partitioning_by_size
     *           Enable auto partitioning on reaching upper or lower partition size bound
     *     @type int|string $partition_size_mb
     *           Preferred partition size for auto partitioning by size, Mb
     *     @type int $partitioning_by_load
     *           Enable auto partitioning based on load on each partition
     *     @type int|string $min_partitions_count
     *           Minimum partitions count auto merge would stop working at
     *     @type int|string $max_partitions_count
     *           Maximum partitions count auto split would stop working at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * List of columns to partition by
     *
     * Generated from protobuf field <code>repeated string partition_by = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionBy()
    {
        return $this->partition_by;
    }

    /**
     * List of columns to partition by
     *
     * Generated from protobuf field <code>repeated string partition_by = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionBy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->partition_by = $arr;

        return $this;
    }

    /**
     * Enable auto partitioning on reaching upper or lower partition size bound
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status partitioning_by_size = 2;</code>
     * @return int
     */
    public function getPartitioningBySize()
    {
        return $this->partitioning_by_size;
    }

    /**
     * Enable auto partitioning on reaching upper or lower partition size bound
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status partitioning_by_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPartitioningBySize($var)
    {
        GPBUtil::checkEnum($var, \Ydb\FeatureFlag\Status::class);
        $this->partitioning_by_size = $var;

        return $this;
    }

    /**
     * Preferred partition size for auto partitioning by size, Mb
     *
     * Generated from protobuf field <code>uint64 partition_size_mb = 3;</code>
     * @return int|string
     */
    public function getPartitionSizeMb()
    {
        return $this->partition_size_mb;
    }

    /**
     * Preferred partition size for auto partitioning by size, Mb
     *
     * Generated from protobuf field <code>uint64 partition_size_mb = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionSizeMb($var)
    {
        GPBUtil::checkUint64($var);
        $this->partition_size_mb = $var;

        return $this;
    }

    /**
     * Enable auto partitioning based on load on each partition
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status partitioning_by_load = 4;</code>
     * @return int
     */
    public function getPartitioningByLoad()
    {
        return $this->partitioning_by_load;
    }

    /**
     * Enable auto partitioning based on load on each partition
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status partitioning_by_load = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPartitioningByLoad($var)
    {
        GPBUtil::checkEnum($var, \Ydb\FeatureFlag\Status::class);
        $this->partitioning_by_load = $var;

        return $this;
    }

    /**
     * Minimum partitions count auto merge would stop working at
     *
     * Generated from protobuf field <code>uint64 min_partitions_count = 6;</code>
     * @return int|string
     */
    public function getMinPartitionsCount()
    {
        return $this->min_partitions_count;
    }

    /**
     * Minimum partitions count auto merge would stop working at
     *
     * Generated from protobuf field <code>uint64 min_partitions_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinPartitionsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->min_partitions_count = $var;

        return $this;
    }

    /**
     * Maximum partitions count auto split would stop working at
     *
     * Generated from protobuf field <code>uint64 max_partitions_count = 7;</code>
     * @return int|string
     */
    public function getMaxPartitionsCount()
    {
        return $this->max_partitions_count;
    }

    /**
     * Maximum partitions count auto split would stop working at
     *
     * Generated from protobuf field <code>uint64 max_partitions_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxPartitionsCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_partitions_count = $var;

        return $this;
    }

}

