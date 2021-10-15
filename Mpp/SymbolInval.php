<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * symbol invalidation message
 *
 * Generated from protobuf message <code>mpp.SymbolInval</code>
 */
class SymbolInval extends \Google\Protobuf\Internal\Message
{
    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 1;</code>
     */
    private $symbol_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $symbol_ids
     *           symbol IDs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSymbolIds()
    {
        return $this->symbol_ids;
    }

    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSymbolIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->symbol_ids = $arr;

        return $this;
    }

}

