<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp\Samples;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * block of samples with a common symbol set
 *
 * Generated from protobuf message <code>mpp.Samples.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 1;</code>
     */
    private $symbol_ids;
    /**
     * samples
     *
     * Generated from protobuf field <code>repeated .mpp.Samples.Sample samples = 2;</code>
     */
    private $samples;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $symbol_ids
     *           symbol IDs
     *     @type array<\Mpp\Samples\Sample>|\Google\Protobuf\Internal\RepeatedField $samples
     *           samples
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
     * samples
     *
     * Generated from protobuf field <code>repeated .mpp.Samples.Sample samples = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSamples()
    {
        return $this->samples;
    }

    /**
     * samples
     *
     * Generated from protobuf field <code>repeated .mpp.Samples.Sample samples = 2;</code>
     * @param array<\Mpp\Samples\Sample>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Mpp\Samples\Sample::class);
        $this->samples = $arr;

        return $this;
    }

}

