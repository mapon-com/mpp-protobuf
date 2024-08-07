<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: mpp.proto

namespace Mpp;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mpp.InstallOrientMark</code>
 */
class InstallOrientMark extends \Google\Protobuf\Internal\Message
{
    protected $heading;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $sensor_heading_delta
     *     @type float $vehicle_heading
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mpp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float sensor_heading_delta = 1;</code>
     * @return float
     */
    public function getSensorHeadingDelta()
    {
        return $this->readOneof(1);
    }

    public function hasSensorHeadingDelta()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>float sensor_heading_delta = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setSensorHeadingDelta($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>float vehicle_heading = 2;</code>
     * @return float
     */
    public function getVehicleHeading()
    {
        return $this->readOneof(2);
    }

    public function hasVehicleHeading()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>float vehicle_heading = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setVehicleHeading($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getHeading()
    {
        return $this->whichOneof("heading");
    }

}

