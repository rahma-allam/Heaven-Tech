<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/value_rule_device_type.proto

namespace Google\Ads\GoogleAds\V9\Enums\ValueRuleDeviceTypeEnum;

use UnexpectedValueException;

/**
 * Possible device types used in conversion value rule.
 *
 * Protobuf type <code>google.ads.googleads.v9.enums.ValueRuleDeviceTypeEnum.ValueRuleDeviceType</code>
 */
class ValueRuleDeviceType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Mobile device.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    const MOBILE = 2;
    /**
     * Desktop device.
     *
     * Generated from protobuf enum <code>DESKTOP = 3;</code>
     */
    const DESKTOP = 3;
    /**
     * Tablet device.
     *
     * Generated from protobuf enum <code>TABLET = 4;</code>
     */
    const TABLET = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MOBILE => 'MOBILE',
        self::DESKTOP => 'DESKTOP',
        self::TABLET => 'TABLET',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueRuleDeviceType::class, \Google\Ads\GoogleAds\V9\Enums\ValueRuleDeviceTypeEnum_ValueRuleDeviceType::class);

