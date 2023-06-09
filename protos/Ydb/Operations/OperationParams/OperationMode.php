<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_operation.proto

namespace Ydb\Operations\OperationParams;

use UnexpectedValueException;

/**
 * Protobuf type <code>Ydb.Operations.OperationParams.OperationMode</code>
 */
class OperationMode
{
    /**
     * Generated from protobuf enum <code>OPERATION_MODE_UNSPECIFIED = 0;</code>
     */
    const OPERATION_MODE_UNSPECIFIED = 0;
    /**
     * Server will only reply once operation is finished (ready=true), and operation object won't be
     * accessible after the reply. This is a basic request-response mode.
     *
     * Generated from protobuf enum <code>SYNC = 1;</code>
     */
    const SYNC = 1;
    /**
     * Generated from protobuf enum <code>ASYNC = 2;</code>
     */
    const ASYNC = 2;

    private static $valueToName = [
        self::OPERATION_MODE_UNSPECIFIED => 'OPERATION_MODE_UNSPECIFIED',
        self::SYNC => 'SYNC',
        self::ASYNC => 'ASYNC',
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
class_alias(OperationMode::class, \Ydb\Operations\OperationParams_OperationMode::class);

