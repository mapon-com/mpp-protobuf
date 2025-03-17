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
 *	Purpose:	Transfers the result of a tachograph command or the whole remote data download session.
 *	Reply:		N/D
 *
 * Generated from protobuf message <code>mpp.TachoResult</code>
 */
class TachoResult extends \Google\Protobuf\Internal\Message
{
    /**
     * session ID
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     */
    protected $session_id = 0;
    /**
     * command or download session result
     *
     * Generated from protobuf field <code>.mpp.TachoResultType result = 2;</code>
     */
    protected $result = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $session_id
     *           session ID
     *     @type int $result
     *           command or download session result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * session ID
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     * @return int
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * session ID
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
     * command or download session result
     *
     * Generated from protobuf field <code>.mpp.TachoResultType result = 2;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * command or download session result
     *
     * Generated from protobuf field <code>.mpp.TachoResultType result = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Mpp\TachoResultType::class);
        $this->result = $var;

        return $this;
    }

}

