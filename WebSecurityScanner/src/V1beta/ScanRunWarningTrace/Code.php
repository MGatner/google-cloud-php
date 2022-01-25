<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_run_warning_trace.proto

namespace Google\Cloud\WebSecurityScanner\V1beta\ScanRunWarningTrace;

use UnexpectedValueException;

/**
 * Output only.
 * Defines a warning message code.
 * Next id: 6
 *
 * Protobuf type <code>google.cloud.websecurityscanner.v1beta.ScanRunWarningTrace.Code</code>
 */
class Code
{
    /**
     * Default value is never used.
     *
     * Generated from protobuf enum <code>CODE_UNSPECIFIED = 0;</code>
     */
    const CODE_UNSPECIFIED = 0;
    /**
     * Indicates that a scan discovered an unexpectedly low number of URLs. This
     * is sometimes caused by complex navigation features or by using a single
     * URL for numerous pages.
     *
     * Generated from protobuf enum <code>INSUFFICIENT_CRAWL_RESULTS = 1;</code>
     */
    const INSUFFICIENT_CRAWL_RESULTS = 1;
    /**
     * Indicates that a scan discovered too many URLs to test, or excessive
     * redundant URLs.
     *
     * Generated from protobuf enum <code>TOO_MANY_CRAWL_RESULTS = 2;</code>
     */
    const TOO_MANY_CRAWL_RESULTS = 2;
    /**
     * Indicates that too many tests have been generated for the scan. Customer
     * should try reducing the number of starting URLs, increasing the QPS rate,
     * or narrowing down the scope of the scan using the excluded patterns.
     *
     * Generated from protobuf enum <code>TOO_MANY_FUZZ_TASKS = 3;</code>
     */
    const TOO_MANY_FUZZ_TASKS = 3;
    /**
     * Indicates that a scan is blocked by IAP.
     *
     * Generated from protobuf enum <code>BLOCKED_BY_IAP = 4;</code>
     */
    const BLOCKED_BY_IAP = 4;

    private static $valueToName = [
        self::CODE_UNSPECIFIED => 'CODE_UNSPECIFIED',
        self::INSUFFICIENT_CRAWL_RESULTS => 'INSUFFICIENT_CRAWL_RESULTS',
        self::TOO_MANY_CRAWL_RESULTS => 'TOO_MANY_CRAWL_RESULTS',
        self::TOO_MANY_FUZZ_TASKS => 'TOO_MANY_FUZZ_TASKS',
        self::BLOCKED_BY_IAP => 'BLOCKED_BY_IAP',
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


