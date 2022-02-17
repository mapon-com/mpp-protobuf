<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *Top-level MPP message with variable payload.
 *
 * Generated from protobuf message <code>mpp.Msg</code>
 */
class Msg extends \Google\Protobuf\Internal\Message
{
    /**
     * message type
     *
     * Generated from protobuf field <code>.mpp.Msg.MsgType msg_type = 1;</code>
     */
    protected $msg_type = 0;
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $msg_type
     *           message type
     *     @type \Mpp\SessionBegin $session_begin
     *     @type \Mpp\SessionEnd $session_end
     *     @type \Mpp\Samples $samples
     *     @type \Mpp\SymbolInval $symbol_inval
     *     @type \Mpp\UpdateStart $update_start
     *     @type \Mpp\UpdateCancel $update_cancel
     *     @type \Mpp\UpdateResult $update_result
     *     @type \Mpp\LogReadStart $log_read_start
     *     @type \Mpp\LogReadCancel $log_read_cancel
     *     @type \Mpp\LogErase $log_erase
     *     @type \Mpp\LogResult $log_result
     *     @type \Mpp\LogEntry $log_entry
     *     @type \Mpp\SamplingStart $sampling_start
     *     @type \Mpp\SamplingStop $sampling_stop
     *     @type \Mpp\MarkInstallOrientation $mark_install_orientation
     *     @type \Mpp\CalibrateIMU $calibrate_imu
     *     @type \Mpp\SysInfoRequest $sys_info_request
     *     @type \Mpp\SysInfo $sys_info
     *     @type \Mpp\ConfigRead $config_read
     *     @type \Mpp\ConfigReadResult $config_read_result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * message type
     *
     * Generated from protobuf field <code>.mpp.Msg.MsgType msg_type = 1;</code>
     * @return int
     */
    public function getMsgType()
    {
        return $this->msg_type;
    }

    /**
     * message type
     *
     * Generated from protobuf field <code>.mpp.Msg.MsgType msg_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMsgType($var)
    {
        GPBUtil::checkEnum($var, \Mpp\Msg\MsgType::class);
        $this->msg_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.SessionBegin session_begin = 2;</code>
     * @return \Mpp\SessionBegin|null
     */
    public function getSessionBegin()
    {
        return $this->readOneof(2);
    }

    public function hasSessionBegin()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.mpp.SessionBegin session_begin = 2;</code>
     * @param \Mpp\SessionBegin $var
     * @return $this
     */
    public function setSessionBegin($var)
    {
        GPBUtil::checkMessage($var, \Mpp\SessionBegin::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.SessionEnd session_end = 3;</code>
     * @return \Mpp\SessionEnd|null
     */
    public function getSessionEnd()
    {
        return $this->readOneof(3);
    }

    public function hasSessionEnd()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.mpp.SessionEnd session_end = 3;</code>
     * @param \Mpp\SessionEnd $var
     * @return $this
     */
    public function setSessionEnd($var)
    {
        GPBUtil::checkMessage($var, \Mpp\SessionEnd::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.Samples samples = 4;</code>
     * @return \Mpp\Samples|null
     */
    public function getSamples()
    {
        return $this->readOneof(4);
    }

    public function hasSamples()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.mpp.Samples samples = 4;</code>
     * @param \Mpp\Samples $var
     * @return $this
     */
    public function setSamples($var)
    {
        GPBUtil::checkMessage($var, \Mpp\Samples::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.SymbolInval symbol_inval = 5;</code>
     * @return \Mpp\SymbolInval|null
     */
    public function getSymbolInval()
    {
        return $this->readOneof(5);
    }

    public function hasSymbolInval()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.mpp.SymbolInval symbol_inval = 5;</code>
     * @param \Mpp\SymbolInval $var
     * @return $this
     */
    public function setSymbolInval($var)
    {
        GPBUtil::checkMessage($var, \Mpp\SymbolInval::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.UpdateStart update_start = 6;</code>
     * @return \Mpp\UpdateStart|null
     */
    public function getUpdateStart()
    {
        return $this->readOneof(6);
    }

    public function hasUpdateStart()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.mpp.UpdateStart update_start = 6;</code>
     * @param \Mpp\UpdateStart $var
     * @return $this
     */
    public function setUpdateStart($var)
    {
        GPBUtil::checkMessage($var, \Mpp\UpdateStart::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.UpdateCancel update_cancel = 7;</code>
     * @return \Mpp\UpdateCancel|null
     */
    public function getUpdateCancel()
    {
        return $this->readOneof(7);
    }

    public function hasUpdateCancel()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.mpp.UpdateCancel update_cancel = 7;</code>
     * @param \Mpp\UpdateCancel $var
     * @return $this
     */
    public function setUpdateCancel($var)
    {
        GPBUtil::checkMessage($var, \Mpp\UpdateCancel::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.UpdateResult update_result = 8;</code>
     * @return \Mpp\UpdateResult|null
     */
    public function getUpdateResult()
    {
        return $this->readOneof(8);
    }

    public function hasUpdateResult()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.mpp.UpdateResult update_result = 8;</code>
     * @param \Mpp\UpdateResult $var
     * @return $this
     */
    public function setUpdateResult($var)
    {
        GPBUtil::checkMessage($var, \Mpp\UpdateResult::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.LogReadStart log_read_start = 9;</code>
     * @return \Mpp\LogReadStart|null
     */
    public function getLogReadStart()
    {
        return $this->readOneof(9);
    }

    public function hasLogReadStart()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.mpp.LogReadStart log_read_start = 9;</code>
     * @param \Mpp\LogReadStart $var
     * @return $this
     */
    public function setLogReadStart($var)
    {
        GPBUtil::checkMessage($var, \Mpp\LogReadStart::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.LogReadCancel log_read_cancel = 10;</code>
     * @return \Mpp\LogReadCancel|null
     */
    public function getLogReadCancel()
    {
        return $this->readOneof(10);
    }

    public function hasLogReadCancel()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.mpp.LogReadCancel log_read_cancel = 10;</code>
     * @param \Mpp\LogReadCancel $var
     * @return $this
     */
    public function setLogReadCancel($var)
    {
        GPBUtil::checkMessage($var, \Mpp\LogReadCancel::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.LogErase log_erase = 11;</code>
     * @return \Mpp\LogErase|null
     */
    public function getLogErase()
    {
        return $this->readOneof(11);
    }

    public function hasLogErase()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.mpp.LogErase log_erase = 11;</code>
     * @param \Mpp\LogErase $var
     * @return $this
     */
    public function setLogErase($var)
    {
        GPBUtil::checkMessage($var, \Mpp\LogErase::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.LogResult log_result = 12;</code>
     * @return \Mpp\LogResult|null
     */
    public function getLogResult()
    {
        return $this->readOneof(12);
    }

    public function hasLogResult()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.mpp.LogResult log_result = 12;</code>
     * @param \Mpp\LogResult $var
     * @return $this
     */
    public function setLogResult($var)
    {
        GPBUtil::checkMessage($var, \Mpp\LogResult::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.LogEntry log_entry = 13;</code>
     * @return \Mpp\LogEntry|null
     */
    public function getLogEntry()
    {
        return $this->readOneof(13);
    }

    public function hasLogEntry()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.mpp.LogEntry log_entry = 13;</code>
     * @param \Mpp\LogEntry $var
     * @return $this
     */
    public function setLogEntry($var)
    {
        GPBUtil::checkMessage($var, \Mpp\LogEntry::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.SamplingStart sampling_start = 14;</code>
     * @return \Mpp\SamplingStart|null
     */
    public function getSamplingStart()
    {
        return $this->readOneof(14);
    }

    public function hasSamplingStart()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.mpp.SamplingStart sampling_start = 14;</code>
     * @param \Mpp\SamplingStart $var
     * @return $this
     */
    public function setSamplingStart($var)
    {
        GPBUtil::checkMessage($var, \Mpp\SamplingStart::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.SamplingStop sampling_stop = 15;</code>
     * @return \Mpp\SamplingStop|null
     */
    public function getSamplingStop()
    {
        return $this->readOneof(15);
    }

    public function hasSamplingStop()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.mpp.SamplingStop sampling_stop = 15;</code>
     * @param \Mpp\SamplingStop $var
     * @return $this
     */
    public function setSamplingStop($var)
    {
        GPBUtil::checkMessage($var, \Mpp\SamplingStop::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.MarkInstallOrientation mark_install_orientation = 16;</code>
     * @return \Mpp\MarkInstallOrientation|null
     */
    public function getMarkInstallOrientation()
    {
        return $this->readOneof(16);
    }

    public function hasMarkInstallOrientation()
    {
        return $this->hasOneof(16);
    }

    /**
     * Generated from protobuf field <code>.mpp.MarkInstallOrientation mark_install_orientation = 16;</code>
     * @param \Mpp\MarkInstallOrientation $var
     * @return $this
     */
    public function setMarkInstallOrientation($var)
    {
        GPBUtil::checkMessage($var, \Mpp\MarkInstallOrientation::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.CalibrateIMU calibrate_imu = 17;</code>
     * @return \Mpp\CalibrateIMU|null
     */
    public function getCalibrateImu()
    {
        return $this->readOneof(17);
    }

    public function hasCalibrateImu()
    {
        return $this->hasOneof(17);
    }

    /**
     * Generated from protobuf field <code>.mpp.CalibrateIMU calibrate_imu = 17;</code>
     * @param \Mpp\CalibrateIMU $var
     * @return $this
     */
    public function setCalibrateImu($var)
    {
        GPBUtil::checkMessage($var, \Mpp\CalibrateIMU::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.SysInfoRequest sys_info_request = 18;</code>
     * @return \Mpp\SysInfoRequest|null
     */
    public function getSysInfoRequest()
    {
        return $this->readOneof(18);
    }

    public function hasSysInfoRequest()
    {
        return $this->hasOneof(18);
    }

    /**
     * Generated from protobuf field <code>.mpp.SysInfoRequest sys_info_request = 18;</code>
     * @param \Mpp\SysInfoRequest $var
     * @return $this
     */
    public function setSysInfoRequest($var)
    {
        GPBUtil::checkMessage($var, \Mpp\SysInfoRequest::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.SysInfo sys_info = 19;</code>
     * @return \Mpp\SysInfo|null
     */
    public function getSysInfo()
    {
        return $this->readOneof(19);
    }

    public function hasSysInfo()
    {
        return $this->hasOneof(19);
    }

    /**
     * Generated from protobuf field <code>.mpp.SysInfo sys_info = 19;</code>
     * @param \Mpp\SysInfo $var
     * @return $this
     */
    public function setSysInfo($var)
    {
        GPBUtil::checkMessage($var, \Mpp\SysInfo::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.ConfigRead config_read = 20;</code>
     * @return \Mpp\ConfigRead|null
     */
    public function getConfigRead()
    {
        return $this->readOneof(20);
    }

    public function hasConfigRead()
    {
        return $this->hasOneof(20);
    }

    /**
     * Generated from protobuf field <code>.mpp.ConfigRead config_read = 20;</code>
     * @param \Mpp\ConfigRead $var
     * @return $this
     */
    public function setConfigRead($var)
    {
        GPBUtil::checkMessage($var, \Mpp\ConfigRead::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mpp.ConfigReadResult config_read_result = 21;</code>
     * @return \Mpp\ConfigReadResult|null
     */
    public function getConfigReadResult()
    {
        return $this->readOneof(21);
    }

    public function hasConfigReadResult()
    {
        return $this->hasOneof(21);
    }

    /**
     * Generated from protobuf field <code>.mpp.ConfigReadResult config_read_result = 21;</code>
     * @param \Mpp\ConfigReadResult $var
     * @return $this
     */
    public function setConfigReadResult($var)
    {
        GPBUtil::checkMessage($var, \Mpp\ConfigReadResult::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

