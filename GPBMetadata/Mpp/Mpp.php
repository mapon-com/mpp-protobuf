<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace GPBMetadata\Mpp;

class Mpp
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
� 
mpp/mpp.protompp"
SessionBegin
node_id ("r

SessionEnd&
reason (2.mpp.SessionEnd.Reason"<
Reason
UNKNOWN 
CLOSED_BY_PEER
NETWORK_ERROR"�
Samples
tag_hash (H 
tag_str (	H "
blocks (2.mpp.Samples.Block6
Sample
utc_timestamp (
symbol_values (A
Block

symbol_ids ($
samples (2.mpp.Samples.SampleB
tag"!
SymbolInval

symbol_ids ("�
UpdateStart

session_id (*
update_mode (2.mpp.UpdateStart.Mode

source_url (	
source_size (

source_crc (
update_timeout ("
Mode
PUSH 
PULL""
UpdateCancel

session_id ("�
UpdateResult

session_id ((
result (2.mpp.UpdateResult.Result"�
Result
OK 
	CANCELLED
TIMEOUT
BUSY
NOT_RUNNING
UNKNOWN_ERR
SESSION_ERR
FILE_ERR
SEQUENCE_ERR
NETWORK_ERR	">
LogReadStart
utc_period_from (
utc_period_to ("
LogReadCancel"

LogErase"
	LogResult

ok ("�
LogEntry+

entry_type (2.mpp.LogEntry.EntryType
sys_timestamp (
utc_timestamp (
origin (	
text (	"l
	EntryType
	EMERGENCY 	
ALERT
CRITICAL	
ERROR
WARNING

NOTICE
INFO	
DEBUG"�
SamplingStart
tag_str (	

symbol_ids (
sampling_period (
allow_partial_samples (
sample_buf_size (
sample_set_size ("
SamplingStop
tag_str (	"/
MarkInstallOrientation
front_heading ("
CalibrateIMU
period ("
SysInfoRequest"�
SysInfo
	system_id (
hw_version_major (H �
hw_version_minor (H�
fw_version_major (
fw_version_minor (
fw_version_patch (
fw_version_variant (	B
_hw_version_majorB
_hw_version_minor"
ConfigReadRequest"�

ConfigRead-
initial_config (2.mpp.ConfigRead.Layer*
user_config (2.mpp.ConfigRead.Layer
locked_symbol_ids (2
Layer

symbol_ids (
symbol_values ("�
ConfigWrite+
user_config (2.mpp.ConfigWrite.Layer
lock_symbol_ids (
unlock_symbol_ids (T
Layer
set_symbol_ids (
set_symbol_values (
clear_symbol_ids ("

ConfigSave"
ConfigRevert"
ConfigErase"
ConfigResult

ok ("�
Msg"
msg_type (2.mpp.Msg.MsgType*
session_begin (2.mpp.SessionBeginH &
session_end (2.mpp.SessionEndH 
samples (2.mpp.SamplesH (
symbol_inval (2.mpp.SymbolInvalH (
update_start (2.mpp.UpdateStartH *
update_cancel (2.mpp.UpdateCancelH *
update_result (2.mpp.UpdateResultH +
log_read_start	 (2.mpp.LogReadStartH -
log_read_cancel
 (2.mpp.LogReadCancelH "
	log_erase (2.mpp.LogEraseH $

log_result (2.mpp.LogResultH "
	log_entry (2.mpp.LogEntryH ,
sampling_start (2.mpp.SamplingStartH *
sampling_stop (2.mpp.SamplingStopH ?
mark_install_orientation (2.mpp.MarkInstallOrientationH *
calibrate_imu (2.mpp.CalibrateIMUH /
sys_info_request (2.mpp.SysInfoRequestH  
sys_info (2.mpp.SysInfoH 5
config_read_request (2.mpp.ConfigReadRequestH &
config_read (2.mpp.ConfigReadH (
config_write (2.mpp.ConfigWriteH &
config_save (2.mpp.ConfigSaveH *
config_revert (2.mpp.ConfigRevertH (
config_erase (2.mpp.ConfigEraseH *
config_result (2.mpp.ConfigResultH "�
MsgType
NONE 
SESSION_BEGIN
SESSION_END
SAMPLES
SYMBOL_INVAL
UPDATE_START
UPDATE_START_RESULT
UPDATE_CANCEL
UPDATE_CANCEL_RESULT
UPDATE_SESSION_RESULT	
LOG_READ_START

LOG_READ_START_RESULT
LOG_READ_CANCEL
LOG_READ_CANCEL_RESULT
	LOG_ERASE
LOG_ERASE_RESULT
	LOG_ENTRY
RT_SAMPLING_START
RT_SAMPLING_STOP
MARK_INSTALL_ORIENTATION
CALIBRATE_IMU
SYS_INFO_REQUEST
SYS_INFO
CONFIG_READ_REQUEST
CONFIG_READ
CONFIG_WRITE
CONFIG_WRITE_RESULT
CONFIG_SAVE
CONFIG_SAVE_RESULT
CONFIG_REVERT
CONFIG_REVERT_RESULT
CONFIG_ERASE
CONFIG_ERASE_RESULT B	
payloadBHbproto3'
        , true);

        static::$is_initialized = true;
    }
}

