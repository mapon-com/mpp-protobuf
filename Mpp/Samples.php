<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mpp/mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *Data sample message.
 *
 * Generated from protobuf message <code>mpp.Samples</code>
 */
class Samples extends \Google\Protobuf\Internal\Message
{
    /**
     * sample tag hash
     *
     * Generated from protobuf field <code>uint32 tag_hash = 1;</code>
     */
    protected $tag_hash = 0;
    /**
     * sample blocks
     *
     * Generated from protobuf field <code>repeated .mpp.Samples.Block blocks = 2;</code>
     */
    private $blocks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $tag_hash
     *           sample tag hash
     *     @type \Mpp\Samples\Block[]|\Google\Protobuf\Internal\RepeatedField $blocks
     *           sample blocks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp\Mpp::initOnce();
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
        return $this->tag_hash;
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
        $this->tag_hash = $var;

        return $this;
    }

    /**
     * sample blocks
     *
     * Generated from protobuf field <code>repeated .mpp.Samples.Block blocks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * sample blocks
     *
     * Generated from protobuf field <code>repeated .mpp.Samples.Block blocks = 2;</code>
     * @param \Mpp\Samples\Block[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Mpp\Samples\Block::class);
        $this->blocks = $arr;

        return $this;
    }

}
