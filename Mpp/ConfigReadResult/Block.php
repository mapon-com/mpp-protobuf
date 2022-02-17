<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp\ConfigReadResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mpp.ConfigReadResult.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 prio = 1;</code>
     */
    protected $prio = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 2;</code>
     */
    private $symbol_ids;
    /**
     * Generated from protobuf field <code>bytes symbol_values = 3;</code>
     */
    protected $symbol_values = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $prio
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $symbol_ids
     *     @type string $symbol_values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 prio = 1;</code>
     * @return int
     */
    public function getPrio()
    {
        return $this->prio;
    }

    /**
     * Generated from protobuf field <code>uint32 prio = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPrio($var)
    {
        GPBUtil::checkUint32($var);
        $this->prio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSymbolIds()
    {
        return $this->symbol_ids;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSymbolIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->symbol_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes symbol_values = 3;</code>
     * @return string
     */
    public function getSymbolValues()
    {
        return $this->symbol_values;
    }

    /**
     * Generated from protobuf field <code>bytes symbol_values = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSymbolValues($var)
    {
        GPBUtil::checkString($var, False);
        $this->symbol_values = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Block::class, \Mpp\ConfigReadResult_Block::class);

