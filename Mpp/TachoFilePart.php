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
 *	Purpose:	Transfers a data file part downloaded from VU.
 *	Reply:		N/D
 *
 * Generated from protobuf message <code>mpp.TachoFilePart</code>
 */
class TachoFilePart extends \Google\Protobuf\Internal\Message
{
    /**
     * download session ID
     *
     * Generated from protobuf field <code>uint32 session_id = 1;</code>
     */
    protected $session_id = 0;
    /**
     * request number [0..n]
     *
     * Generated from protobuf field <code>uint32 request_num = 2;</code>
     */
    protected $request_num = 0;
    /**
     * file part number [0..n]
     *
     * Generated from protobuf field <code>uint32 part_num = 3;</code>
     */
    protected $part_num = 0;
    /**
     * data
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $session_id
     *           download session ID
     *     @type int $request_num
     *           request number [0..n]
     *     @type int $part_num
     *           file part number [0..n]
     *     @type string $data
     *           data
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
     * request number [0..n]
     *
     * Generated from protobuf field <code>uint32 request_num = 2;</code>
     * @return int
     */
    public function getRequestNum()
    {
        return $this->request_num;
    }

    /**
     * request number [0..n]
     *
     * Generated from protobuf field <code>uint32 request_num = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRequestNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->request_num = $var;

        return $this;
    }

    /**
     * file part number [0..n]
     *
     * Generated from protobuf field <code>uint32 part_num = 3;</code>
     * @return int
     */
    public function getPartNum()
    {
        return $this->part_num;
    }

    /**
     * file part number [0..n]
     *
     * Generated from protobuf field <code>uint32 part_num = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPartNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->part_num = $var;

        return $this;
    }

    /**
     * data
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * data
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

