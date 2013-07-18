<?php

/**
 * @package     Util_Regex_Constant
 * @author      Christopher Langton <chris@codewiz.biz>
 * @version     0.1
 * @since       2013-07-18
 * 
 */
final class Util_Regex_Constant {
    /**
     * alphaNumeric characters only
     * 
     * @var string
     */
    const ALPHA_NUMERIC = "[a-zA-Z0-9]+";
    /**
     * Basic date format YYYY-MM-DD
     * 
     * @var string
     */
    const DATE_BASIC = "[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])";
    /**
     * Basic date format YYYY-MM-DD Checks that the year is numeric and starts with 19 or 20, the month is numeric and between 01-12, and the day is numeric between 01-29, or 30 if the month value is anything other than 02 if not a leap year, or 31 if the month value is one of 01,03,05,07,08,10, or 12.
     * 
     * @var string
     */
    const DATE = "(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))";
    /**
     * Alternate date format YYYY/MM/DD
     * 
     * @var string
     */
    const DATE_ALTERNATIVE = "[0-9]{0,4}/[0-9]{0,2}/[0-9]{0,2}";
    /**
     * Basic time format HH:MM:SS
     * 
     * @var string
     */
    const TIME = "(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}";
    /**
     * Datetime according to W3C for input type="datetime". Matches the following: 1990-12-31T23:59:60Z or 1996-12-19T16:39:57-08:00
     * 
     * @var string
     */
    const DATETIME = "/([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))/";
    /**
     * Numeric values matching simple full or decimal numbers (2 decimal places)
     * 
     * @var string
     */
    const CURRENCY = "[-+]?[0-9]*[.,]?[0-9]+";
    /**
     * Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)
     * 
     * @var string
     */
    const PASSWORD = "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$";
    /**
     * HEX Format is #CCC or #CCCCCC
     * 
     * @var string
     */
    const HEX_COLOR = "^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$";
    /**
     * ipv4 Address
     * 
     * @var string
     */
    const IPV4 = "((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$";
    /**
     * ipv6 Address
     * 
     * @var string
     */
    const IPV6 = "((^|:)([0-9a-fA-F]{0,4})){1,8}$";
    /**
     * UUID A universally unique identifier standard by OSF (Open Software Foundation)
     * 
     * @var string
     */
    const UUID = "^[0-9A-Fa-f]{8}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{12}$";
    /**
     * Latitude or Longitude
     * 
     * @var string
     */
    const LATITUDE_LONGITUDE = "-?\d{1,3}\.\d+";
    /**
     * md5 Hash
     * 
     * @var string
     */
    const MD5_HASH = "[0-9a-fA-F]{32}";
    /**
     * Regular Credit Card checks if 16 numeric characters only.
     * 
     * @var string
     */
    const CREDIT_CARD = "[0-9]{16}";
    /**
     * American Express Credit Card
     * 
     * @var string
     */
    const AMEX = "[0-9]{4} *[0-9]{6} *[0-9]{5}";
    /**
     * Diners Club Credit Card
     * 
     * @var string
     */
    const DINERS_CLUB = "^([30|36|38]{2})([0-9]{12})$";
    /**
     * VISA Credit Card
     * 
     * @var string
     */
    const VISA = "^4[0-9]{12}(?:[0-9]{3})?$";
    /**
     * Master Card Credit Card
     * 
     * @var string
     */
    const MASTER_CARD = "^5[1-5][0-9]{14}$";
    /**
     * Discover Credit Card
     * 
     * @var string
     */
    const DISCOVER = "^6(?:011|5[0-9]{2})[0-9]{12}$";
    /**
     * JCB Credit Card
     * 
     * @var string
     */
    const JCB = "^(?:2131|1800|35\d{3})\d{11}$";
    /**
     * UK Post Code
     * 
     * @var string
     */
    const UK_POST_CODE = "[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}";
    /**
     * UK Phone Numbers
     * 
     * @var string
     */
    const UK_PHONE_NUMBER = "^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$";
    /**
     * Australian Post Codes
     * 
     * @var string
     */
    const AU_POST_CODE = "[0-9]{4}";
    /**
     * Australian Phone Numbers
     * 
     * @var string
     */
    const AU_PHONE_NUMBER = "(^1300\d{6}$)|(^1800|1900|1902\d{6}$)|(^0[2|3|7|8]{1}[0-9]{8}$)|(^13\d{4}$)|(^04\d{2,3}\d{6}$)";
    /**
     * USA Phone Numbers
     * 
     * @var string
     */
    const US_PHONE_NUMBER = "\d{3}[\-]\d{3}[\-]\d{4}";
    /**
     * USA Post Codes
     * 
     * @var string
     */
    const US_POST_CODE = "(\d{5}([\-]\d{4})?)";
    /**
     * Canada Post Codes
     * 
     * @var string
     */
    const CA_POST_CODE = "[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]";
    /**
     * German Post Codes
     * 
     * @var string
     */
    const GERMAN_POST_CODE = "[0-9]{5}";
    /**
     * Japan Post Codes
     * 
     * @var string
     */
    const JP_POST_CODE = "\d{3}-\d{4}";
    /**
     * Twitter style hash tags
     * 
     * @var string
     */
    const HASH_TAG = "(^|[^0-9A-Z&/]+)(#|\uFF03)([0-9A-Z_]*[A-Z_]+[a-z0-9_\\u00c0-\\u00d6\\u00d8-\\u00f6\\u00f8-\\u00ff]*)";
    /**
     * Twitter profile/username without &amp;
     * 
     * @var string
     */
    const TWITTER_PROFILE_NO_AT = "^[A-Za-z0-9_]{1,15}$";
    /**
     * Twitter profile/username with &amp;
     * 
     * @var string
     */
    const TWITTER_PROFILE_WITH_AT = "/(?!\b)@[\w]{1,15}(?![\w])/";
    /**
     * Facebook profile/username
     * 
     * @var string
     */
    const FACEBOOK_USERNAME = "^[a-z\d\.]{5,}$";

}

?>
