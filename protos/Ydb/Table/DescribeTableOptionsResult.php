<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.DescribeTableOptionsResult</code>
 */
class DescribeTableOptionsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.TableProfileDescription table_profile_presets = 1;</code>
     */
    private $table_profile_presets;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.StoragePolicyDescription storage_policy_presets = 2;</code>
     */
    private $storage_policy_presets;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.CompactionPolicyDescription compaction_policy_presets = 3;</code>
     */
    private $compaction_policy_presets;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.PartitioningPolicyDescription partitioning_policy_presets = 4;</code>
     */
    private $partitioning_policy_presets;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ExecutionPolicyDescription execution_policy_presets = 5;</code>
     */
    private $execution_policy_presets;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ReplicationPolicyDescription replication_policy_presets = 6;</code>
     */
    private $replication_policy_presets;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.CachingPolicyDescription caching_policy_presets = 7;</code>
     */
    private $caching_policy_presets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Ydb\Table\TableProfileDescription>|\Google\Protobuf\Internal\RepeatedField $table_profile_presets
     *     @type array<\Ydb\Table\StoragePolicyDescription>|\Google\Protobuf\Internal\RepeatedField $storage_policy_presets
     *     @type array<\Ydb\Table\CompactionPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $compaction_policy_presets
     *     @type array<\Ydb\Table\PartitioningPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $partitioning_policy_presets
     *     @type array<\Ydb\Table\ExecutionPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $execution_policy_presets
     *     @type array<\Ydb\Table\ReplicationPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $replication_policy_presets
     *     @type array<\Ydb\Table\CachingPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $caching_policy_presets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.TableProfileDescription table_profile_presets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTableProfilePresets()
    {
        return $this->table_profile_presets;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.TableProfileDescription table_profile_presets = 1;</code>
     * @param array<\Ydb\Table\TableProfileDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTableProfilePresets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\TableProfileDescription::class);
        $this->table_profile_presets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.StoragePolicyDescription storage_policy_presets = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoragePolicyPresets()
    {
        return $this->storage_policy_presets;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.StoragePolicyDescription storage_policy_presets = 2;</code>
     * @param array<\Ydb\Table\StoragePolicyDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoragePolicyPresets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\StoragePolicyDescription::class);
        $this->storage_policy_presets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.CompactionPolicyDescription compaction_policy_presets = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompactionPolicyPresets()
    {
        return $this->compaction_policy_presets;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.CompactionPolicyDescription compaction_policy_presets = 3;</code>
     * @param array<\Ydb\Table\CompactionPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompactionPolicyPresets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\CompactionPolicyDescription::class);
        $this->compaction_policy_presets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.PartitioningPolicyDescription partitioning_policy_presets = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitioningPolicyPresets()
    {
        return $this->partitioning_policy_presets;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.PartitioningPolicyDescription partitioning_policy_presets = 4;</code>
     * @param array<\Ydb\Table\PartitioningPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitioningPolicyPresets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\PartitioningPolicyDescription::class);
        $this->partitioning_policy_presets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ExecutionPolicyDescription execution_policy_presets = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExecutionPolicyPresets()
    {
        return $this->execution_policy_presets;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ExecutionPolicyDescription execution_policy_presets = 5;</code>
     * @param array<\Ydb\Table\ExecutionPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExecutionPolicyPresets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\ExecutionPolicyDescription::class);
        $this->execution_policy_presets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ReplicationPolicyDescription replication_policy_presets = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicationPolicyPresets()
    {
        return $this->replication_policy_presets;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ReplicationPolicyDescription replication_policy_presets = 6;</code>
     * @param array<\Ydb\Table\ReplicationPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicationPolicyPresets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\ReplicationPolicyDescription::class);
        $this->replication_policy_presets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.CachingPolicyDescription caching_policy_presets = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCachingPolicyPresets()
    {
        return $this->caching_policy_presets;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.CachingPolicyDescription caching_policy_presets = 7;</code>
     * @param array<\Ydb\Table\CachingPolicyDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCachingPolicyPresets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\CachingPolicyDescription::class);
        $this->caching_policy_presets = $arr;

        return $this;
    }

}

