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
 *	Purpose:	Starts sampling a set of symbols. The acquired samples are stored temporarily by the executing party 
 *				in a buffer with given capacity. The buffered samples are tagged for identification, packed in groups 
 *				with given size and transmitted as Samples messages.
 *If the sampling period is not provided, samples are acquired upon change of any symbol value.
 *				If partial samples are allowed, they may contain any number of symbols from the set; otherwise, samples 
 *				are acquired if and only if all symbols are valid and thus always contain the whole set.
 *				If sampling with the given tag has already been started, it will be restarted with the new parameters.
 *	Reply:		N/D
 *
 * Generated from protobuf message <code>mpp.SamplingStart</code>
 */
class SamplingStart extends \Google\Protobuf\Internal\Message
{
    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 3;</code>
     */
    private $symbol_ids;
    /**
     * sampling period, ms
     *
     * Generated from protobuf field <code>optional uint64 sampling_period = 4;</code>
     */
    protected $sampling_period = null;
    /**
     * allow partial samples
     *
     * Generated from protobuf field <code>bool allow_partial_samples = 5;</code>
     */
    protected $allow_partial_samples = false;
    /**
     * number of buffered samples
     *
     * Generated from protobuf field <code>uint32 sample_buf_size = 6;</code>
     */
    protected $sample_buf_size = 0;
    /**
     * number of samples in pack
     *
     * Generated from protobuf field <code>uint32 sample_pack_size = 7;</code>
     */
    protected $sample_pack_size = 0;
    protected $tag;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $tag_hash
     *           sample tag hash
     *     @type string $tag_str
     *           sample tag string
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $symbol_ids
     *           symbol IDs
     *     @type int|string $sampling_period
     *           sampling period, ms
     *     @type bool $allow_partial_samples
     *           allow partial samples
     *     @type int $sample_buf_size
     *           number of buffered samples
     *     @type int $sample_pack_size
     *           number of samples in pack
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * sample tag hash
     *
     * Generated from protobuf field <code>uint32 tag_hash = 1;</code>
     * @return int
     */
    public function getTagHash()
    {
        return $this->readOneof(1);
    }

    public function hasTagHash()
    {
        return $this->hasOneof(1);
    }

    /**
     * sample tag hash
     *
     * Generated from protobuf field <code>uint32 tag_hash = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTagHash($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * sample tag string
     *
     * Generated from protobuf field <code>string tag_str = 2;</code>
     * @return string
     */
    public function getTagStr()
    {
        return $this->readOneof(2);
    }

    public function hasTagStr()
    {
        return $this->hasOneof(2);
    }

    /**
     * sample tag string
     *
     * Generated from protobuf field <code>string tag_str = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTagStr($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSymbolIds()
    {
        return $this->symbol_ids;
    }

    /**
     * symbol IDs
     *
     * Generated from protobuf field <code>repeated uint32 symbol_ids = 3;</code>
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
     * sampling period, ms
     *
     * Generated from protobuf field <code>optional uint64 sampling_period = 4;</code>
     * @return int|string
     */
    public function getSamplingPeriod()
    {
        return isset($this->sampling_period) ? $this->sampling_period : 0;
    }

    public function hasSamplingPeriod()
    {
        return isset($this->sampling_period);
    }

    public function clearSamplingPeriod()
    {
        unset($this->sampling_period);
    }

    /**
     * sampling period, ms
     *
     * Generated from protobuf field <code>optional uint64 sampling_period = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSamplingPeriod($var)
    {
        GPBUtil::checkUint64($var);
        $this->sampling_period = $var;

        return $this;
    }

    /**
     * allow partial samples
     *
     * Generated from protobuf field <code>bool allow_partial_samples = 5;</code>
     * @return bool
     */
    public function getAllowPartialSamples()
    {
        return $this->allow_partial_samples;
    }

    /**
     * allow partial samples
     *
     * Generated from protobuf field <code>bool allow_partial_samples = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowPartialSamples($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_partial_samples = $var;

        return $this;
    }

    /**
     * number of buffered samples
     *
     * Generated from protobuf field <code>uint32 sample_buf_size = 6;</code>
     * @return int
     */
    public function getSampleBufSize()
    {
        return $this->sample_buf_size;
    }

    /**
     * number of buffered samples
     *
     * Generated from protobuf field <code>uint32 sample_buf_size = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleBufSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->sample_buf_size = $var;

        return $this;
    }

    /**
     * number of samples in pack
     *
     * Generated from protobuf field <code>uint32 sample_pack_size = 7;</code>
     * @return int
     */
    public function getSamplePackSize()
    {
        return $this->sample_pack_size;
    }

    /**
     * number of samples in pack
     *
     * Generated from protobuf field <code>uint32 sample_pack_size = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSamplePackSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->sample_pack_size = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->whichOneof("tag");
    }

}

