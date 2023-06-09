<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.DescribeTableResult</code>
 */
class DescribeTableResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Description of scheme object
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     */
    protected $self = null;
    /**
     * List of columns
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnMeta columns = 2;</code>
     */
    private $columns;
    /**
     * List of primary key columns
     *
     * Generated from protobuf field <code>repeated string primary_key = 3;</code>
     */
    private $primary_key;
    /**
     * List of key ranges for shard
     *
     * Generated from protobuf field <code>repeated .Ydb.TypedValue shard_key_bounds = 4;</code>
     */
    private $shard_key_bounds;
    /**
     * List of indexes
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.TableIndexDescription indexes = 5;</code>
     */
    private $indexes;
    /**
     * Statistics of table
     *
     * Generated from protobuf field <code>.Ydb.Table.TableStats table_stats = 6;</code>
     */
    protected $table_stats = null;
    /**
     * TTL params
     *
     * Generated from protobuf field <code>.Ydb.Table.TtlSettings ttl_settings = 7;</code>
     */
    protected $ttl_settings = null;
    /**
     * Storage settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.StorageSettings storage_settings = 8;</code>
     */
    protected $storage_settings = null;
    /**
     * Column families
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnFamily column_families = 9;</code>
     */
    private $column_families;
    /**
     * Attributes
     *
     * Generated from protobuf field <code>map<string, string> attributes = 10;</code>
     */
    private $attributes;
    /**
     * Partitioning settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.PartitioningSettings partitioning_settings = 12;</code>
     */
    protected $partitioning_settings = null;
    /**
     * Bloom filter by key
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status key_bloom_filter = 13;</code>
     */
    protected $key_bloom_filter = 0;
    /**
     * Read replicas settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.ReadReplicasSettings read_replicas_settings = 14;</code>
     */
    protected $read_replicas_settings = null;
    /**
     * List of changefeeds
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ChangefeedDescription changefeeds = 15;</code>
     */
    private $changefeeds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Scheme\Entry $self
     *           Description of scheme object
     *     @type array<\Ydb\Table\ColumnMeta>|\Google\Protobuf\Internal\RepeatedField $columns
     *           List of columns
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $primary_key
     *           List of primary key columns
     *     @type array<\Ydb\TypedValue>|\Google\Protobuf\Internal\RepeatedField $shard_key_bounds
     *           List of key ranges for shard
     *     @type array<\Ydb\Table\TableIndexDescription>|\Google\Protobuf\Internal\RepeatedField $indexes
     *           List of indexes
     *     @type \Ydb\Table\TableStats $table_stats
     *           Statistics of table
     *     @type \Ydb\Table\TtlSettings $ttl_settings
     *           TTL params
     *     @type \Ydb\Table\StorageSettings $storage_settings
     *           Storage settings for table
     *     @type array<\Ydb\Table\ColumnFamily>|\Google\Protobuf\Internal\RepeatedField $column_families
     *           Column families
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Attributes
     *     @type \Ydb\Table\PartitioningSettings $partitioning_settings
     *           Partitioning settings for table
     *     @type int $key_bloom_filter
     *           Bloom filter by key
     *     @type \Ydb\Table\ReadReplicasSettings $read_replicas_settings
     *           Read replicas settings for table
     *     @type array<\Ydb\Table\ChangefeedDescription>|\Google\Protobuf\Internal\RepeatedField $changefeeds
     *           List of changefeeds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Description of scheme object
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     * @return \Ydb\Scheme\Entry|null
     */
    public function getSelf()
    {
        return $this->self;
    }

    public function hasSelf()
    {
        return isset($this->self);
    }

    public function clearSelf()
    {
        unset($this->self);
    }

    /**
     * Description of scheme object
     *
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     * @param \Ydb\Scheme\Entry $var
     * @return $this
     */
    public function setSelf($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Scheme\Entry::class);
        $this->self = $var;

        return $this;
    }

    /**
     * List of columns
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnMeta columns = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * List of columns
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnMeta columns = 2;</code>
     * @param array<\Ydb\Table\ColumnMeta>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\ColumnMeta::class);
        $this->columns = $arr;

        return $this;
    }

    /**
     * List of primary key columns
     *
     * Generated from protobuf field <code>repeated string primary_key = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrimaryKey()
    {
        return $this->primary_key;
    }

    /**
     * List of primary key columns
     *
     * Generated from protobuf field <code>repeated string primary_key = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryKey($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->primary_key = $arr;

        return $this;
    }

    /**
     * List of key ranges for shard
     *
     * Generated from protobuf field <code>repeated .Ydb.TypedValue shard_key_bounds = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShardKeyBounds()
    {
        return $this->shard_key_bounds;
    }

    /**
     * List of key ranges for shard
     *
     * Generated from protobuf field <code>repeated .Ydb.TypedValue shard_key_bounds = 4;</code>
     * @param array<\Ydb\TypedValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShardKeyBounds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\TypedValue::class);
        $this->shard_key_bounds = $arr;

        return $this;
    }

    /**
     * List of indexes
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.TableIndexDescription indexes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexes()
    {
        return $this->indexes;
    }

    /**
     * List of indexes
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.TableIndexDescription indexes = 5;</code>
     * @param array<\Ydb\Table\TableIndexDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\TableIndexDescription::class);
        $this->indexes = $arr;

        return $this;
    }

    /**
     * Statistics of table
     *
     * Generated from protobuf field <code>.Ydb.Table.TableStats table_stats = 6;</code>
     * @return \Ydb\Table\TableStats|null
     */
    public function getTableStats()
    {
        return $this->table_stats;
    }

    public function hasTableStats()
    {
        return isset($this->table_stats);
    }

    public function clearTableStats()
    {
        unset($this->table_stats);
    }

    /**
     * Statistics of table
     *
     * Generated from protobuf field <code>.Ydb.Table.TableStats table_stats = 6;</code>
     * @param \Ydb\Table\TableStats $var
     * @return $this
     */
    public function setTableStats($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\TableStats::class);
        $this->table_stats = $var;

        return $this;
    }

    /**
     * TTL params
     *
     * Generated from protobuf field <code>.Ydb.Table.TtlSettings ttl_settings = 7;</code>
     * @return \Ydb\Table\TtlSettings|null
     */
    public function getTtlSettings()
    {
        return $this->ttl_settings;
    }

    public function hasTtlSettings()
    {
        return isset($this->ttl_settings);
    }

    public function clearTtlSettings()
    {
        unset($this->ttl_settings);
    }

    /**
     * TTL params
     *
     * Generated from protobuf field <code>.Ydb.Table.TtlSettings ttl_settings = 7;</code>
     * @param \Ydb\Table\TtlSettings $var
     * @return $this
     */
    public function setTtlSettings($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\TtlSettings::class);
        $this->ttl_settings = $var;

        return $this;
    }

    /**
     * Storage settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.StorageSettings storage_settings = 8;</code>
     * @return \Ydb\Table\StorageSettings|null
     */
    public function getStorageSettings()
    {
        return $this->storage_settings;
    }

    public function hasStorageSettings()
    {
        return isset($this->storage_settings);
    }

    public function clearStorageSettings()
    {
        unset($this->storage_settings);
    }

    /**
     * Storage settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.StorageSettings storage_settings = 8;</code>
     * @param \Ydb\Table\StorageSettings $var
     * @return $this
     */
    public function setStorageSettings($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\StorageSettings::class);
        $this->storage_settings = $var;

        return $this;
    }

    /**
     * Column families
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnFamily column_families = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnFamilies()
    {
        return $this->column_families;
    }

    /**
     * Column families
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnFamily column_families = 9;</code>
     * @param array<\Ydb\Table\ColumnFamily>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnFamilies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\ColumnFamily::class);
        $this->column_families = $arr;

        return $this;
    }

    /**
     * Attributes
     *
     * Generated from protobuf field <code>map<string, string> attributes = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Attributes
     *
     * Generated from protobuf field <code>map<string, string> attributes = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Partitioning settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.PartitioningSettings partitioning_settings = 12;</code>
     * @return \Ydb\Table\PartitioningSettings|null
     */
    public function getPartitioningSettings()
    {
        return $this->partitioning_settings;
    }

    public function hasPartitioningSettings()
    {
        return isset($this->partitioning_settings);
    }

    public function clearPartitioningSettings()
    {
        unset($this->partitioning_settings);
    }

    /**
     * Partitioning settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.PartitioningSettings partitioning_settings = 12;</code>
     * @param \Ydb\Table\PartitioningSettings $var
     * @return $this
     */
    public function setPartitioningSettings($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\PartitioningSettings::class);
        $this->partitioning_settings = $var;

        return $this;
    }

    /**
     * Bloom filter by key
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status key_bloom_filter = 13;</code>
     * @return int
     */
    public function getKeyBloomFilter()
    {
        return $this->key_bloom_filter;
    }

    /**
     * Bloom filter by key
     *
     * Generated from protobuf field <code>.Ydb.FeatureFlag.Status key_bloom_filter = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyBloomFilter($var)
    {
        GPBUtil::checkEnum($var, \Ydb\FeatureFlag\Status::class);
        $this->key_bloom_filter = $var;

        return $this;
    }

    /**
     * Read replicas settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.ReadReplicasSettings read_replicas_settings = 14;</code>
     * @return \Ydb\Table\ReadReplicasSettings|null
     */
    public function getReadReplicasSettings()
    {
        return $this->read_replicas_settings;
    }

    public function hasReadReplicasSettings()
    {
        return isset($this->read_replicas_settings);
    }

    public function clearReadReplicasSettings()
    {
        unset($this->read_replicas_settings);
    }

    /**
     * Read replicas settings for table
     *
     * Generated from protobuf field <code>.Ydb.Table.ReadReplicasSettings read_replicas_settings = 14;</code>
     * @param \Ydb\Table\ReadReplicasSettings $var
     * @return $this
     */
    public function setReadReplicasSettings($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\ReadReplicasSettings::class);
        $this->read_replicas_settings = $var;

        return $this;
    }

    /**
     * List of changefeeds
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ChangefeedDescription changefeeds = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChangefeeds()
    {
        return $this->changefeeds;
    }

    /**
     * List of changefeeds
     *
     * Generated from protobuf field <code>repeated .Ydb.Table.ChangefeedDescription changefeeds = 15;</code>
     * @param array<\Ydb\Table\ChangefeedDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChangefeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\ChangefeedDescription::class);
        $this->changefeeds = $arr;

        return $this;
    }

}

