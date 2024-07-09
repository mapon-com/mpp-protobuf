<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp\TachoCardInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mpp.TachoCardInfo.Card</code>
 */
class Card extends \Google\Protobuf\Internal\Message
{
    /**
     * smartcard serial number
     *
     * Generated from protobuf field <code>uint64 card_serial = 1;</code>
     */
    protected $card_serial = 0;
    /**
     * company card generation
     *
     * Generated from protobuf field <code>uint32 generation = 2;</code>
     */
    protected $generation = 0;
    /**
     * card status
     *
     * Generated from protobuf field <code>.mpp.TachoCardInfo.StatusType status = 3;</code>
     */
    protected $status = 0;
    /**
     * company card number
     *
     * Generated from protobuf field <code>optional string card_number = 4;</code>
     */
    protected $card_number = null;
    /**
     * company name
     *
     * Generated from protobuf field <code>optional string company_name = 5;</code>
     */
    protected $company_name = null;
    /**
     * card valid from
     *
     * Generated from protobuf field <code>optional uint64 validity_start_date = 6;</code>
     */
    protected $validity_start_date = null;
    /**
     * card valid to
     *
     * Generated from protobuf field <code>optional uint64 expiry_date = 7;</code>
     */
    protected $expiry_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $card_serial
     *           smartcard serial number
     *     @type int $generation
     *           company card generation
     *     @type int $status
     *           card status
     *     @type string $card_number
     *           company card number
     *     @type string $company_name
     *           company name
     *     @type int|string $validity_start_date
     *           card valid from
     *     @type int|string $expiry_date
     *           card valid to
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * smartcard serial number
     *
     * Generated from protobuf field <code>uint64 card_serial = 1;</code>
     * @return int|string
     */
    public function getCardSerial()
    {
        return $this->card_serial;
    }

    /**
     * smartcard serial number
     *
     * Generated from protobuf field <code>uint64 card_serial = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCardSerial($var)
    {
        GPBUtil::checkUint64($var);
        $this->card_serial = $var;

        return $this;
    }

    /**
     * company card generation
     *
     * Generated from protobuf field <code>uint32 generation = 2;</code>
     * @return int
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * company card generation
     *
     * Generated from protobuf field <code>uint32 generation = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGeneration($var)
    {
        GPBUtil::checkUint32($var);
        $this->generation = $var;

        return $this;
    }

    /**
     * card status
     *
     * Generated from protobuf field <code>.mpp.TachoCardInfo.StatusType status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * card status
     *
     * Generated from protobuf field <code>.mpp.TachoCardInfo.StatusType status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Mpp\TachoCardInfo\StatusType::class);
        $this->status = $var;

        return $this;
    }

    /**
     * company card number
     *
     * Generated from protobuf field <code>optional string card_number = 4;</code>
     * @return string
     */
    public function getCardNumber()
    {
        return isset($this->card_number) ? $this->card_number : '';
    }

    public function hasCardNumber()
    {
        return isset($this->card_number);
    }

    public function clearCardNumber()
    {
        unset($this->card_number);
    }

    /**
     * company card number
     *
     * Generated from protobuf field <code>optional string card_number = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCardNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->card_number = $var;

        return $this;
    }

    /**
     * company name
     *
     * Generated from protobuf field <code>optional string company_name = 5;</code>
     * @return string
     */
    public function getCompanyName()
    {
        return isset($this->company_name) ? $this->company_name : '';
    }

    public function hasCompanyName()
    {
        return isset($this->company_name);
    }

    public function clearCompanyName()
    {
        unset($this->company_name);
    }

    /**
     * company name
     *
     * Generated from protobuf field <code>optional string company_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_name = $var;

        return $this;
    }

    /**
     * card valid from
     *
     * Generated from protobuf field <code>optional uint64 validity_start_date = 6;</code>
     * @return int|string
     */
    public function getValidityStartDate()
    {
        return isset($this->validity_start_date) ? $this->validity_start_date : 0;
    }

    public function hasValidityStartDate()
    {
        return isset($this->validity_start_date);
    }

    public function clearValidityStartDate()
    {
        unset($this->validity_start_date);
    }

    /**
     * card valid from
     *
     * Generated from protobuf field <code>optional uint64 validity_start_date = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValidityStartDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->validity_start_date = $var;

        return $this;
    }

    /**
     * card valid to
     *
     * Generated from protobuf field <code>optional uint64 expiry_date = 7;</code>
     * @return int|string
     */
    public function getExpiryDate()
    {
        return isset($this->expiry_date) ? $this->expiry_date : 0;
    }

    public function hasExpiryDate()
    {
        return isset($this->expiry_date);
    }

    public function clearExpiryDate()
    {
        unset($this->expiry_date);
    }

    /**
     * card valid to
     *
     * Generated from protobuf field <code>optional uint64 expiry_date = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiryDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->expiry_date = $var;

        return $this;
    }

}
