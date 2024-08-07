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
 *	Purpose:	Stops periodic sampling; does nothing if sampling with the given tag has not been started.
 *	Reply:		N/D
 *
 * Generated from protobuf message <code>mpp.SamplingStop</code>
 */
class SamplingStop extends \Google\Protobuf\Internal\Message
{
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
     * @return string
     */
    public function getTag()
    {
        return $this->whichOneof("tag");
    }

}

