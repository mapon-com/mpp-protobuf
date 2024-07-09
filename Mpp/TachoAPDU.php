<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *	Purpose:	Transfers authentication data between the company card and VU.
 *	Reply:		N/D
 *
 * Generated from protobuf message <code>mpp.TachoAPDU</code>
 */
class TachoAPDU extends \Google\Protobuf\Internal\Message
{
    /**
     * download session ID
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     */
    protected $session_id = 0;
    /**
     * APDU
     *
     * Generated from protobuf field <code>optional bytes apdu = 2;</code>
     */
    protected $apdu = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $session_id
     *           download session ID
     *     @type string $apdu
     *           APDU
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * download session ID
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     * @return int
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * download session ID
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
     * APDU
     *
     * Generated from protobuf field <code>optional bytes apdu = 2;</code>
     * @return string
     */
    public function getApdu()
    {
        return isset($this->apdu) ? $this->apdu : '';
    }

    public function hasApdu()
    {
        return isset($this->apdu);
    }

    public function clearApdu()
    {
        unset($this->apdu);
    }

    /**
     * APDU
     *
     * Generated from protobuf field <code>optional bytes apdu = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setApdu($var)
    {
        GPBUtil::checkString($var, False);
        $this->apdu = $var;

        return $this;
    }

}
