<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp\TachoCardInfo;

use UnexpectedValueException;

/**
 * card status types
 *
 * Protobuf type <code>mpp.TachoCardInfo.StatusType</code>
 */
class StatusType
{
    /**
     * disconnected
     *
     * Generated from protobuf enum <code>DISCONNECTED = 0;</code>
     */
    const DISCONNECTED = 0;
    /**
     * connected
     *
     * Generated from protobuf enum <code>CONNECTED = 1;</code>
     */
    const CONNECTED = 1;
    /**
     * busy (participating in a transaction)
     *
     * Generated from protobuf enum <code>BUSY = 2;</code>
     */
    const BUSY = 2;

    private static $valueToName = [
        self::DISCONNECTED => 'DISCONNECTED',
        self::CONNECTED => 'CONNECTED',
        self::BUSY => 'BUSY',
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

