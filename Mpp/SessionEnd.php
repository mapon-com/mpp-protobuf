<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * session end message: issued by all MPP nodes before closing a comms channel
 *
 * Generated from protobuf message <code>mpp.SessionEnd</code>
 */
class SessionEnd extends \Google\Protobuf\Internal\Message
{
    /**
     * reason
     *
     * Generated from protobuf field <code>.mpp.SessionEnd.Reason reason = 1;</code>
     */
    protected $reason = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $reason
     *           reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * reason
     *
     * Generated from protobuf field <code>.mpp.SessionEnd.Reason reason = 1;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * reason
     *
     * Generated from protobuf field <code>.mpp.SessionEnd.Reason reason = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Mpp\SessionEnd\Reason::class);
        $this->reason = $var;

        return $this;
    }

}

