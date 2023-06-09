<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The row will be considered as expired at the moment of time, when the value
 * stored in <column_name> is less than or equal to the current time (in epoch
 * time format), and <expire_after_seconds> has passed since that moment;
 * i.e. the expiration threshold is the value of <column_name> plus <expire_after_seconds>.
 *
 * Generated from protobuf message <code>Ydb.Table.DateTypeColumnModeSettings</code>
 */
class DateTypeColumnModeSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The column type must be a date type
     *
     * Generated from protobuf field <code>string column_name = 1;</code>
     */
    protected $column_name = '';
    /**
     * Generated from protobuf field <code>uint32 expire_after_seconds = 2;</code>
     */
    protected $expire_after_seconds = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column_name
     *           The column type must be a date type
     *     @type int $expire_after_seconds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * The column type must be a date type
     *
     * Generated from protobuf field <code>string column_name = 1;</code>
     * @return string
     */
    public function getColumnName()
    {
        return $this->column_name;
    }

    /**
     * The column type must be a date type
     *
     * Generated from protobuf field <code>string column_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnName($var)
    {
        GPBUtil::checkString($var, True);
        $this->column_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 expire_after_seconds = 2;</code>
     * @return int
     */
    public function getExpireAfterSeconds()
    {
        return $this->expire_after_seconds;
    }

    /**
     * Generated from protobuf field <code>uint32 expire_after_seconds = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExpireAfterSeconds($var)
    {
        GPBUtil::checkUint32($var);
        $this->expire_after_seconds = $var;

        return $this;
    }

}

