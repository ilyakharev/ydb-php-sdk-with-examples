<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table\KeepAliveResult;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.Table.KeepAliveResult.SessionStatus</code>
 */
class SessionStatus
{
    /**
     * Generated from protobuf enum <code>SESSION_STATUS_UNSPECIFIED = 0;</code>
     */
    const SESSION_STATUS_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>SESSION_STATUS_READY = 1;</code>
     */
    const SESSION_STATUS_READY = 1;
    /**
     * Generated from protobuf enum <code>SESSION_STATUS_BUSY = 2;</code>
     */
    const SESSION_STATUS_BUSY = 2;

    private static $valueToName = [
        self::SESSION_STATUS_UNSPECIFIED => 'SESSION_STATUS_UNSPECIFIED',
        self::SESSION_STATUS_READY => 'SESSION_STATUS_READY',
        self::SESSION_STATUS_BUSY => 'SESSION_STATUS_BUSY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionStatus::class, \Ydb\Table\KeepAliveResult_SessionStatus::class);

