<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * update start command message
 *
 * Generated from protobuf message <code>mpp.UpdateStart</code>
 */
class UpdateStart extends \Google\Protobuf\Internal\Message
{
    /**
     * update session ID (unique, non-zero, generated by caller)
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     */
    protected $session_id = 0;
    /**
     * update mode
     *
     * Generated from protobuf field <code>.mpp.UpdateStart.Mode update_mode = 2;</code>
     */
    protected $update_mode = 0;
    /**
     * source URL (pull mode only)
     *
     * Generated from protobuf field <code>string source_url = 3;</code>
     */
    protected $source_url = '';
    /**
     * size of update binary, bytes
     *
     * Generated from protobuf field <code>uint32 source_size = 4;</code>
     */
    protected $source_size = 0;
    /**
     * checksum of update binary, CRC32
     *
     * Generated from protobuf field <code>uint32 source_crc = 5;</code>
     */
    protected $source_crc = 0;
    /**
     * timeout for the whole update session, ms
     *
     * Generated from protobuf field <code>uint64 update_timeout = 6;</code>
     */
    protected $update_timeout = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $session_id
     *           update session ID (unique, non-zero, generated by caller)
     *     @type int $update_mode
     *           update mode
     *     @type string $source_url
     *           source URL (pull mode only)
     *     @type int $source_size
     *           size of update binary, bytes
     *     @type int $source_crc
     *           checksum of update binary, CRC32
     *     @type int|string $update_timeout
     *           timeout for the whole update session, ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * update session ID (unique, non-zero, generated by caller)
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     * @return int
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * update session ID (unique, non-zero, generated by caller)
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->session_id = $var;

        return $this;
    }

    /**
     * update mode
     *
     * Generated from protobuf field <code>.mpp.UpdateStart.Mode update_mode = 2;</code>
     * @return int
     */
    public function getUpdateMode()
    {
        return $this->update_mode;
    }

    /**
     * update mode
     *
     * Generated from protobuf field <code>.mpp.UpdateStart.Mode update_mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUpdateMode($var)
    {
        GPBUtil::checkEnum($var, \Mpp\UpdateStart\Mode::class);
        $this->update_mode = $var;

        return $this;
    }

    /**
     * source URL (pull mode only)
     *
     * Generated from protobuf field <code>string source_url = 3;</code>
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * source URL (pull mode only)
     *
     * Generated from protobuf field <code>string source_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_url = $var;

        return $this;
    }

    /**
     * size of update binary, bytes
     *
     * Generated from protobuf field <code>uint32 source_size = 4;</code>
     * @return int
     */
    public function getSourceSize()
    {
        return $this->source_size;
    }

    /**
     * size of update binary, bytes
     *
     * Generated from protobuf field <code>uint32 source_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->source_size = $var;

        return $this;
    }

    /**
     * checksum of update binary, CRC32
     *
     * Generated from protobuf field <code>uint32 source_crc = 5;</code>
     * @return int
     */
    public function getSourceCrc()
    {
        return $this->source_crc;
    }

    /**
     * checksum of update binary, CRC32
     *
     * Generated from protobuf field <code>uint32 source_crc = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceCrc($var)
    {
        GPBUtil::checkUint32($var);
        $this->source_crc = $var;

        return $this;
    }

    /**
     * timeout for the whole update session, ms
     *
     * Generated from protobuf field <code>uint64 update_timeout = 6;</code>
     * @return int|string
     */
    public function getUpdateTimeout()
    {
        return $this->update_timeout;
    }

    /**
     * timeout for the whole update session, ms
     *
     * Generated from protobuf field <code>uint64 update_timeout = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateTimeout($var)
    {
        GPBUtil::checkUint64($var);
        $this->update_timeout = $var;

        return $this;
    }

}

