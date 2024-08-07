<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp\CommSessionEnd;

use UnexpectedValueException;

/**
 * reason types
 *
 * Protobuf type <code>mpp.CommSessionEnd.ReasonType</code>
 */
class ReasonType
{
    /**
     * unknown
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * session closed normally
     *
     * Generated from protobuf enum <code>CLOSED_BY_PEER = 1;</code>
     */
    const CLOSED_BY_PEER = 1;
    /**
     * connection lost
     *
     * Generated from protobuf enum <code>NETWORK_ERROR = 2;</code>
     */
    const NETWORK_ERROR = 2;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::CLOSED_BY_PEER => 'CLOSED_BY_PEER',
        self::NETWORK_ERROR => 'NETWORK_ERROR',
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

