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
�
mpp/mpp.protompp"
SessionBegin
node_id ("r

SessionEnd&
reason (2.mpp.SessionEnd.Reason"<
Reason
UNKNOWN 
CLOSED_BY_PEER
NETWORK_ERROR"�
Samples
tag_hash ("
blocks (2.mpp.Samples.Block6
Sample
utc_timestamp (
symbol_values (A
Block

symbol_ids ($
samples (2.mpp.Samples.Sample"!
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
NETWORK_ERR	"�
SamplingStart
tag_str (	

symbol_ids (
sampling_period (
allow_partial_samples (
sample_buf_size (
sample_set_size ("
SamplingStop
tag_str (	"(
MarkOrientation
front_heading ("�
Msg*
payload_type (2.mpp.Msg.PayloadType*
session_begin (2.mpp.SessionBeginH &
session_end (2.mpp.SessionEndH 
samples (2.mpp.SamplesH (
symbol_inval (2.mpp.SymbolInvalH (
update_start (2.mpp.UpdateStartH *
update_cancel (2.mpp.UpdateCancelH *
update_result (2.mpp.UpdateResultH ,
sampling_start	 (2.mpp.SamplingStartH *
sampling_stop
 (2.mpp.SamplingStopH 0
mark_orientation (2.mpp.MarkOrientationH "�
PayloadType
NONE 
SESSION_BEGIN
SESSION_END
SAMPLES
SYMBOL_INVAL
UPDATE_START
UPDATE_START_RESULT
UPDATE_CANCEL
UPDATE_CANCEL_RESULT
UPDATE_SESSION_RESULT	
RT_SAMPLING_START

RT_SAMPLING_STOP
MARK_ORIENTATIONB	
payloadBHbproto3'
        , true);

        static::$is_initialized = true;
    }
}

