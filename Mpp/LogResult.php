<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TODO
 *
 * Generated from protobuf message <code>mpp.LogResult</code>
 */
class LogResult extends \Google\Protobuf\Internal\Message
{
    /**
     * result
     *
     * Generated from protobuf field <code>bool ok = 1;</code>
     */
    protected $ok = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $ok
     *           result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * result
     *
     * Generated from protobuf field <code>bool ok = 1;</code>
     * @return bool
     */
    public function getOk()
    {
        return $this->ok;
    }

    /**
     * result
     *
     * Generated from protobuf field <code>bool ok = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOk($var)
    {
        GPBUtil::checkBool($var);
        $this->ok = $var;

        return $this;
    }

}

