<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp\ConfigRead;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * configuration layer
 *
 * Generated from protobuf message <code>mpp.ConfigRead.Layer</code>
 */
class Layer extends \Google\Protobuf\Internal\Message
{
    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 1;</code>
     */
    private $symbol_ids;
    /**
     * symbol values as a continuous buffer
     *
     * Generated from protobuf field <code>bytes symbol_values = 2;</code>
     */
    protected $symbol_values = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $symbol_ids
     *           symbol IDs
     *     @type string $symbol_values
     *           symbol values as a continuous buffer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp::initOnce();
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
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSymbolIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->symbol_ids = $arr;

        return $this;
    }

    /**
     * symbol values as a continuous buffer
     *
     * Generated from protobuf field <code>bytes symbol_values = 2;</code>
     * @return string
     */
    public function getSymbolValues()
    {
        return $this->symbol_values;
    }

    /**
     * symbol values as a continuous buffer
     *
     * Generated from protobuf field <code>bytes symbol_values = 2;</code>
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

