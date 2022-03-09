<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * system information data message; sent as a reply to request message (SysInfoRequest) or on its own (after device 
 * startup etc.)
 *
 * Generated from protobuf message <code>mpp.SysInfo</code>
 */
class SysInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * identification
     *
     * Generated from protobuf field <code>uint64 system_id = 1;</code>
     */
    protected $system_id = 0;
    /**
     * hardware version in format
     * [major].[minor]
     * e.g., 1.0
     *
     * Generated from protobuf field <code>optional uint32 hw_version_major = 2;</code>
     */
    protected $hw_version_major = null;
    /**
     * hardware version, minor
     *
     * Generated from protobuf field <code>optional uint32 hw_version_minor = 3;</code>
     */
    protected $hw_version_minor = null;
    /**
     * firmware version in format 
     * [major].[minor].[patch]-[variant]
     * e.g., 2.1.0-beta
     *
     * Generated from protobuf field <code>uint32 fw_version_major = 4;</code>
     */
    protected $fw_version_major = 0;
    /**
     * firmware version, minor
     *
     * Generated from protobuf field <code>uint32 fw_version_minor = 5;</code>
     */
    protected $fw_version_minor = 0;
    /**
     * firmware version, patch
     *
     * Generated from protobuf field <code>uint32 fw_version_patch = 6;</code>
     */
    protected $fw_version_patch = 0;
    /**
     * firmware version, variant (e.g., "alpha", "beta" etc.)
     *
     * Generated from protobuf field <code>string fw_version_variant = 7;</code>
     */
    protected $fw_version_variant = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $system_id
     *           identification
     *     @type int $hw_version_major
     *           hardware version in format
     *           [major].[minor]
     *           e.g., 1.0
     *     @type int $hw_version_minor
     *           hardware version, minor
     *     @type int $fw_version_major
     *           firmware version in format 
     *           [major].[minor].[patch]-[variant]
     *           e.g., 2.1.0-beta
     *     @type int $fw_version_minor
     *           firmware version, minor
     *     @type int $fw_version_patch
     *           firmware version, patch
     *     @type string $fw_version_variant
     *           firmware version, variant (e.g., "alpha", "beta" etc.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * identification
     *
     * Generated from protobuf field <code>uint64 system_id = 1;</code>
     * @return int|string
     */
    public function getSystemId()
    {
        return $this->system_id;
    }

    /**
     * identification
     *
     * Generated from protobuf field <code>uint64 system_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSystemId($var)
    {
        GPBUtil::checkUint64($var);
        $this->system_id = $var;

        return $this;
    }

    /**
     * hardware version in format
     * [major].[minor]
     * e.g., 1.0
     *
     * Generated from protobuf field <code>optional uint32 hw_version_major = 2;</code>
     * @return int
     */
    public function getHwVersionMajor()
    {
        return isset($this->hw_version_major) ? $this->hw_version_major : 0;
    }

    public function hasHwVersionMajor()
    {
        return isset($this->hw_version_major);
    }

    public function clearHwVersionMajor()
    {
        unset($this->hw_version_major);
    }

    /**
     * hardware version in format
     * [major].[minor]
     * e.g., 1.0
     *
     * Generated from protobuf field <code>optional uint32 hw_version_major = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHwVersionMajor($var)
    {
        GPBUtil::checkUint32($var);
        $this->hw_version_major = $var;

        return $this;
    }

    /**
     * hardware version, minor
     *
     * Generated from protobuf field <code>optional uint32 hw_version_minor = 3;</code>
     * @return int
     */
    public function getHwVersionMinor()
    {
        return isset($this->hw_version_minor) ? $this->hw_version_minor : 0;
    }

    public function hasHwVersionMinor()
    {
        return isset($this->hw_version_minor);
    }

    public function clearHwVersionMinor()
    {
        unset($this->hw_version_minor);
    }

    /**
     * hardware version, minor
     *
     * Generated from protobuf field <code>optional uint32 hw_version_minor = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHwVersionMinor($var)
    {
        GPBUtil::checkUint32($var);
        $this->hw_version_minor = $var;

        return $this;
    }

    /**
     * firmware version in format 
     * [major].[minor].[patch]-[variant]
     * e.g., 2.1.0-beta
     *
     * Generated from protobuf field <code>uint32 fw_version_major = 4;</code>
     * @return int
     */
    public function getFwVersionMajor()
    {
        return $this->fw_version_major;
    }

    /**
     * firmware version in format 
     * [major].[minor].[patch]-[variant]
     * e.g., 2.1.0-beta
     *
     * Generated from protobuf field <code>uint32 fw_version_major = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFwVersionMajor($var)
    {
        GPBUtil::checkUint32($var);
        $this->fw_version_major = $var;

        return $this;
    }

    /**
     * firmware version, minor
     *
     * Generated from protobuf field <code>uint32 fw_version_minor = 5;</code>
     * @return int
     */
    public function getFwVersionMinor()
    {
        return $this->fw_version_minor;
    }

    /**
     * firmware version, minor
     *
     * Generated from protobuf field <code>uint32 fw_version_minor = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFwVersionMinor($var)
    {
        GPBUtil::checkUint32($var);
        $this->fw_version_minor = $var;

        return $this;
    }

    /**
     * firmware version, patch
     *
     * Generated from protobuf field <code>uint32 fw_version_patch = 6;</code>
     * @return int
     */
    public function getFwVersionPatch()
    {
        return $this->fw_version_patch;
    }

    /**
     * firmware version, patch
     *
     * Generated from protobuf field <code>uint32 fw_version_patch = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setFwVersionPatch($var)
    {
        GPBUtil::checkUint32($var);
        $this->fw_version_patch = $var;

        return $this;
    }

    /**
     * firmware version, variant (e.g., "alpha", "beta" etc.)
     *
     * Generated from protobuf field <code>string fw_version_variant = 7;</code>
     * @return string
     */
    public function getFwVersionVariant()
    {
        return $this->fw_version_variant;
    }

    /**
     * firmware version, variant (e.g., "alpha", "beta" etc.)
     *
     * Generated from protobuf field <code>string fw_version_variant = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFwVersionVariant($var)
    {
        GPBUtil::checkString($var, True);
        $this->fw_version_variant = $var;

        return $this;
    }

}

