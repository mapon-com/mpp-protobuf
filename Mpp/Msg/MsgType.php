<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp\Msg;

use UnexpectedValueException;

/**
 * message types
 *
 * Protobuf type <code>mpp.Msg.MsgType</code>
 */
class MsgType
{
    /**
     * no payload
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * payload = SessionBegin
     *
     * Generated from protobuf enum <code>SESSION_BEGIN = 1;</code>
     */
    const SESSION_BEGIN = 1;
    /**
     * payload = SessionEnd
     *
     * Generated from protobuf enum <code>SESSION_END = 2;</code>
     */
    const SESSION_END = 2;
    /**
     * payload = Samples
     *
     * Generated from protobuf enum <code>SAMPLES = 3;</code>
     */
    const SAMPLES = 3;
    /**
     * payload = SymbolInval
     *
     * Generated from protobuf enum <code>SYMBOL_INVAL = 4;</code>
     */
    const SYMBOL_INVAL = 4;
    /**
     * payload = UpdateStart
     *
     * Generated from protobuf enum <code>UPDATE_START = 5;</code>
     */
    const UPDATE_START = 5;
    /**
     * payload = UpdateResult
     *
     * Generated from protobuf enum <code>UPDATE_START_RESULT = 6;</code>
     */
    const UPDATE_START_RESULT = 6;
    /**
     * payload = UpdateCancel
     *
     * Generated from protobuf enum <code>UPDATE_CANCEL = 7;</code>
     */
    const UPDATE_CANCEL = 7;
    /**
     * payload = UpdateResult
     *
     * Generated from protobuf enum <code>UPDATE_CANCEL_RESULT = 8;</code>
     */
    const UPDATE_CANCEL_RESULT = 8;
    /**
     * payload = UpdateResult
     *
     * Generated from protobuf enum <code>UPDATE_SESSION_RESULT = 9;</code>
     */
    const UPDATE_SESSION_RESULT = 9;
    /**
     * payload = LogReadStart
     *
     * Generated from protobuf enum <code>LOG_READ_START = 10;</code>
     */
    const LOG_READ_START = 10;
    /**
     * payload = LogResult
     *
     * Generated from protobuf enum <code>LOG_READ_START_RESULT = 11;</code>
     */
    const LOG_READ_START_RESULT = 11;
    /**
     * payload = LogReadCancel
     *
     * Generated from protobuf enum <code>LOG_READ_CANCEL = 12;</code>
     */
    const LOG_READ_CANCEL = 12;
    /**
     * payload = LogResult
     *
     * Generated from protobuf enum <code>LOG_READ_CANCEL_RESULT = 13;</code>
     */
    const LOG_READ_CANCEL_RESULT = 13;
    /**
     * payload = LogErase
     *
     * Generated from protobuf enum <code>LOG_ERASE = 14;</code>
     */
    const LOG_ERASE = 14;
    /**
     * payload = LogResult
     *
     * Generated from protobuf enum <code>LOG_ERASE_RESULT = 15;</code>
     */
    const LOG_ERASE_RESULT = 15;
    /**
     * payload = LogEntry
     *
     * Generated from protobuf enum <code>LOG_ENTRY = 16;</code>
     */
    const LOG_ENTRY = 16;
    /**
     * Generated from protobuf enum <code>RT_SAMPLING_START = 17;</code>
     */
    const RT_SAMPLING_START = 17;
    /**
     * Generated from protobuf enum <code>RT_SAMPLING_STOP = 18;</code>
     */
    const RT_SAMPLING_STOP = 18;
    /**
     * Generated from protobuf enum <code>MARK_INSTALL_ORIENTATION = 19;</code>
     */
    const MARK_INSTALL_ORIENTATION = 19;
    /**
     * Generated from protobuf enum <code>CALIBRATE_IMU = 20;</code>
     */
    const CALIBRATE_IMU = 20;
    /**
     * payload = SysInfoRequest
     *
     * Generated from protobuf enum <code>SYS_INFO_REQUEST = 21;</code>
     */
    const SYS_INFO_REQUEST = 21;
    /**
     * payload = SysInfo
     *
     * Generated from protobuf enum <code>SYS_INFO = 22;</code>
     */
    const SYS_INFO = 22;
    /**
     * payload = ConfigReadRequest
     *
     * Generated from protobuf enum <code>CONFIG_READ_REQUEST = 23;</code>
     */
    const CONFIG_READ_REQUEST = 23;
    /**
     * payload = ConfigRead
     *
     * Generated from protobuf enum <code>CONFIG_READ = 24;</code>
     */
    const CONFIG_READ = 24;
    /**
     * payload = ConfigWrite
     *
     * Generated from protobuf enum <code>CONFIG_WRITE = 25;</code>
     */
    const CONFIG_WRITE = 25;
    /**
     * payload = ConfigResult
     *
     * Generated from protobuf enum <code>CONFIG_WRITE_RESULT = 26;</code>
     */
    const CONFIG_WRITE_RESULT = 26;
    /**
     * payload = ConfigSave
     *
     * Generated from protobuf enum <code>CONFIG_SAVE = 27;</code>
     */
    const CONFIG_SAVE = 27;
    /**
     * payload = ConfigResult
     *
     * Generated from protobuf enum <code>CONFIG_SAVE_RESULT = 28;</code>
     */
    const CONFIG_SAVE_RESULT = 28;
    /**
     * payload = ConfigRevert
     *
     * Generated from protobuf enum <code>CONFIG_REVERT = 29;</code>
     */
    const CONFIG_REVERT = 29;
    /**
     * payload = ConfigResult
     *
     * Generated from protobuf enum <code>CONFIG_REVERT_RESULT = 30;</code>
     */
    const CONFIG_REVERT_RESULT = 30;
    /**
     * payload = ConfigErase
     *
     * Generated from protobuf enum <code>CONFIG_ERASE = 31;</code>
     */
    const CONFIG_ERASE = 31;
    /**
     * payload = ConfigResult
     *
     * Generated from protobuf enum <code>CONFIG_ERASE_RESULT = 32;</code>
     */
    const CONFIG_ERASE_RESULT = 32;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::SESSION_BEGIN => 'SESSION_BEGIN',
        self::SESSION_END => 'SESSION_END',
        self::SAMPLES => 'SAMPLES',
        self::SYMBOL_INVAL => 'SYMBOL_INVAL',
        self::UPDATE_START => 'UPDATE_START',
        self::UPDATE_START_RESULT => 'UPDATE_START_RESULT',
        self::UPDATE_CANCEL => 'UPDATE_CANCEL',
        self::UPDATE_CANCEL_RESULT => 'UPDATE_CANCEL_RESULT',
        self::UPDATE_SESSION_RESULT => 'UPDATE_SESSION_RESULT',
        self::LOG_READ_START => 'LOG_READ_START',
        self::LOG_READ_START_RESULT => 'LOG_READ_START_RESULT',
        self::LOG_READ_CANCEL => 'LOG_READ_CANCEL',
        self::LOG_READ_CANCEL_RESULT => 'LOG_READ_CANCEL_RESULT',
        self::LOG_ERASE => 'LOG_ERASE',
        self::LOG_ERASE_RESULT => 'LOG_ERASE_RESULT',
        self::LOG_ENTRY => 'LOG_ENTRY',
        self::RT_SAMPLING_START => 'RT_SAMPLING_START',
        self::RT_SAMPLING_STOP => 'RT_SAMPLING_STOP',
        self::MARK_INSTALL_ORIENTATION => 'MARK_INSTALL_ORIENTATION',
        self::CALIBRATE_IMU => 'CALIBRATE_IMU',
        self::SYS_INFO_REQUEST => 'SYS_INFO_REQUEST',
        self::SYS_INFO => 'SYS_INFO',
        self::CONFIG_READ_REQUEST => 'CONFIG_READ_REQUEST',
        self::CONFIG_READ => 'CONFIG_READ',
        self::CONFIG_WRITE => 'CONFIG_WRITE',
        self::CONFIG_WRITE_RESULT => 'CONFIG_WRITE_RESULT',
        self::CONFIG_SAVE => 'CONFIG_SAVE',
        self::CONFIG_SAVE_RESULT => 'CONFIG_SAVE_RESULT',
        self::CONFIG_REVERT => 'CONFIG_REVERT',
        self::CONFIG_REVERT_RESULT => 'CONFIG_REVERT_RESULT',
        self::CONFIG_ERASE => 'CONFIG_ERASE',
        self::CONFIG_ERASE_RESULT => 'CONFIG_ERASE_RESULT',
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
class_alias(MsgType::class, \Mpp\Msg_MsgType::class);

