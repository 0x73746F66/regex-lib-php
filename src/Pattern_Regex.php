<?php

/**
 * @package     Pattern_Regex
 * @author      Christopher Langton <chris@codewiz.biz>
 * @version     0.3
 * @since       2013-07-17
 * 
 * @property-read string $alphaNumeric alphaNumeric characters only
 * @property-read string $dateBasic Basic date format YYYY-MM-DD
 * @property-read string $date Basic date format YYYY-MM-DD Checks that the year is numeric and starts with 19 or 20, the month is numeric and between 01-12, and the day is numeric between 01-29, or 30 if the month value is anything other than 02 if not a leap year, or 31 if the month value is one of 01,03,05,07,08,10, or 12.
 * @property-read string $dateAlt Alternate date format YYYY/MM/DD
 * @property-read string $time Basic time format HH:MM:SS
 * @property-read string $datetime Datetime according to W3C for input type="datetime". Matches the following: 1990-12-31T23:59:60Z or 1996-12-19T16:39:57-08:00
 * @property-read string $currency Numeric values matching simple full or decimal numbers (2 decimal places)
 * @property-read string $password Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)
 * @property-read string $hexColor HEX Format is #CCC or #CCCCCC
 * @property-read string $ipv4 ipv4 Address
 * @property-read string $ipv6 ipv6 Address
 * @property-read string $uuid UUID A universally unique identifier standard by OSF (Open Software Foundation)
 * @property-read string $latitudeLongitude Latitude or Longitude
 * @property-read string $md5Hash md5 Hash
 * @property-read string $creditCard Regular Credit Card checks if 16 numeric characters only.
 * @property-read string $amex American Express Credit Card
 * @property-read string $dinersClub Diners Club Credit Card
 * @property-read string $visa VISA Credit Card
 * @property-read string $masterCard Master Card Credit Card
 * @property-read string $discover Discover Credit Card
 * @property-read string $jcb JCB Credit Card
 * @property-read string $ukPostCode UK Post Code
 * @property-read string $ukPhoneNumber UK Phone Numbers
 * @property-read string $auPostCode Australian Post Codes
 * @property-read string $auPhoneNumber Australian Phone Numbers
 * @property-read string $usPhoneNumber USA Phone Numbers
 * @property-read string $usPostCode USA Post Codes
 * @property-read string $caPostcode Canada Post Codes
 * @property-read string $germanPostCode German Post Codes
 * @property-read string $jpPostCode Japan Post Codes
 * @property-read string $twitterProfile 
 * @property-read string $facebookUsername 
 * 
 * @method string getAlphaNumeric() alphaNumeric characters only
 * @method string getDate() Basic date format YYYY-MM-DD Checks that the year is numeric and starts with 19 or 20, the month is numeric and between 01-12, and the day is numeric between 01-29, or 30 if the month value is anything other than 02 if not a leap year, or 31 if the month value is one of 01,03,05,07,08,10, or 12.
 * @method string getDateBasic() Basic date format YYYY-MM-DD with no further checks.
 * @method string getDateAlt() Alternate date format YYYY/MM/DD
 * @method string getTime() Basic time format HH:MM:SS
 * @method string getDatetime() Datetime according to W3C for input type="datetime". Matches the following: 1990-12-31T23:59:60Z or 1996-12-19T16:39:57-08:00
 * @method string getCurrency() Numeric values matching simple full or decimal numbers (2 decimal places)
 * @method string getPassword() Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)
 * @method string getHexColor() HEX Format is #CCC or #CCCCCC
 * @method string getIpv4() ipv4 Address
 * @method string getIpv6() ipv6 Address
 * @method string getUuid() UUID A universally unique identifier standard by OSF (Open Software Foundation)
 * @method string getLatitudeLongitude() Latitude or Longitude
 * @method string getMd5Hash() md5 Hash
 * @method string getCreditCard() Regular Credit Card checks if 16 numeric characters only.
 * @method string getAmex() American Express Credit Card
 * @method string getDinersClub() Diners Club Credit Card
 * @method string getVisa() VISA Credit Card
 * @method string getMasterCard() Master Card Credit Card
 * @method string getDiscover() Discover Credit Card
 * @method string getJcb() JCB Credit Card
 * @method string getUkPostCode() UK Post Code
 * @method string getUkPhoneNumber() UK Phone Numbers
 * @method string getAuPostCode() Australian Post Codes
 * @method string getAuPhoneNumber() Australian Phone Numbers
 * @method string getUsPhoneNumber() USA Phone Numbers
 * @method string getUsPostCode() USA Post Codes
 * @method string getCaPostcode() Canada Post Codes
 * @method string getGermanPostCode() German Post Codes
 * @method string getJpPostCode() Japan Post Codes
 * @method string getTwitterProfile() Twitter profile/username
 * @method string getFacebookUsername() Facebook profile/username
 */
class Pattern_Regex {
    /**
     * alphaNumeric characters only
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::alphaNumeric()
     */
    private static $alphaNumeric = "[a-zA-Z0-9]+";
    /**
     * Basic date format YYYY-MM-DD
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::dateBasic()
     */
    private static $dateBasic = "[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])";
    /**
     * Basic date format YYYY-MM-DD Checks that the year is numeric and starts with 19 or 20, the month is numeric and between 01-12, and the day is numeric between 01-29, or 30 if the month value is anything other than 02 if not a leap year, or 31 if the month value is one of 01,03,05,07,08,10, or 12.
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::date()
     */
    private static $date = "(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))";
    /**
     * Alternate date format YYYY/MM/DD
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::dateAlt()
     */
    private static $dateAlt = "[0-9]{0,4}/[0-9]{0,2}/[0-9]{0,2}";
    /**
     * Basic time format HH:MM:SS
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::time()
     */
    private static $time = "(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}";
    /**
     * Datetime according to W3C for input type="datetime". Matches the following: 1990-12-31T23:59:60Z or 1996-12-19T16:39:57-08:00
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::datetime()
     */
    private static $datetime = "/([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))/";
    /**
     * Numeric values matching simple full or decimal numbers (2 decimal places)
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::currency()
     */
    private static $currency = "[-+]?[0-9]*[.,]?[0-9]+";
    /**
     * Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::password()
     */
    private static $password = "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$";
    /**
     * HEX Format is #CCC or #CCCCCC
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::hexColor()
     */
    private static $hexColor = "^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$";
    /**
     * ipv4 Address
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::ipv4()
     */
    private static $ipv4 = "((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$";
    /**
     * ipv6 Address
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::ipv6()
     */
    private static $ipv6 = "((^|:)([0-9a-fA-F]{0,4})){1,8}$";
    /**
     * UUID A universally unique identifier standard by OSF (Open Software Foundation)
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::uuid()
     */
    private static $uuid = "^[0-9A-Fa-f]{8}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{12}$";
    /**
     * Latitude or Longitude
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::latitudeLongitude()
     */
    private static $latitudeLongitude = "-?\d{1,3}\.\d+";
    /**
     * md5 Hash
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::md5Hash()
     */
    private static $md5Hash = "[0-9a-fA-F]{32}";
    /**
     * Regular Credit Card checks if 16 numeric characters only.
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::creditCard()
     */
    private static $creditCard = "[0-9]{16}";
    /**
     * American Express Credit Card
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::amex()
     */
    private static $amex = "[0-9]{4} *[0-9]{6} *[0-9]{5}";
    /**
     * Diners Club Credit Card
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::dinersClub()
     */
    private static $dinersClub = "^([30|36|38]{2})([0-9]{12})$";
    /**
     * VISA Credit Card
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::visa()
     */
    private static $visa = "^4[0-9]{12}(?:[0-9]{3})?$";
    /**
     * Master Card Credit Card
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::masterCard()
     */
    private static $masterCard = "^5[1-5][0-9]{14}$";
    /**
     * Discover Credit Card
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::discover()
     */
    private static $discover = "^6(?:011|5[0-9]{2})[0-9]{12}$";
    /**
     * JCB Credit Card
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::jcb()
     */
    private static $jcb = "^(?:2131|1800|35\d{3})\d{11}$";
    /**
     * UK Post Code
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::ukPostCode()
     */
    private static $ukPostCode = "[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}";
    /**
     * UK Phone Numbers
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::ukPhoneNumber()
     */
    private static $ukPhoneNumber = "^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$";
    /**
     * Australian Post Codes
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::auPhoneNumber()
     */
    private static $auPostCode = "[0-9]{4}";
    /**
     * Australian Phone Numbers
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::ukPhoneNumber()
     */
    private static $auPhoneNumber = "(^1300\d{6}$)|(^1800|1900|1902\d{6}$)|(^0[2|3|7|8]{1}[0-9]{8}$)|(^13\d{4}$)|(^04\d{2,3}\d{6}$)";
    /**
     * USA Phone Numbers
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::usPhoneNumber()
     */
    private static $usPhoneNumber = "\d{3}[\-]\d{3}[\-]\d{4}";
    /**
     * USA Post Codes
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::usPostCode()
     */
    private static $usPostCode = "(\d{5}([\-]\d{4})?)";
    /**
     * Canada Post Codes
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::caPostCode()
     */
    private static $caPostcode = "[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]";
    /**
     * German Post Codes
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::germanPostCode()
     */
    private static $germanPostCode = "[0-9]{5}";
    /**
     * Japan Post Codes
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::jpPostCode()
     */
    private static $jpPostCode = "\d{3}-\d{4}";
    /**
     * Twitter profile/username
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::twitterProfile()
     */
    private static $twitterProfile = "^[A-Za-z0-9_]{1,15}$";
    /**
     * Facebook profile/username
     * 
     * @var string
     * @access private
     * @static
     * @see Pattern_Regex::facebookUsername()
     */
    private static $facebookUsername = "^[a-z\d\.]{5,}$";
    /**
     * empty used for overloader method when call is to an undefined property, to prevent recoverable errors
     * 
     * @var string
     * @access private
     */
    private $empty = "";
    
    public static function __callStatic($method, $params)
    {
        if ( "get" == substr($method,0,3) ) {
            $lowerMethod = strtolower( substr( $method, 3 , 1 ) ).substr( $method , 4 , strlen( $method ) );
            $property = ( property_exists( new Pattern_Regex(), $lowerMethod ) ? $lowerMethod : "empty" );
            
            return static::$$property;
        } else return "";
    }
    public function __call($method, $params)
    {
        if ( "get" == substr($method,0,3) ) {
            $lowerMethod = strtolower( substr( $method, 3 , 1 ) ).substr( $method , 4 , strlen( $method ) );
            $property = ( property_exists( $this, $lowerMethod ) ? $lowerMethod : "empty" );
            return static::$$property;
        }
    }
    public function __get( $name )
    {
        $property = ( property_exists( $this, $name ) ? $name : "empty" );
        return static::$$property;
    }
    public function __set( $name, $value ) {
        user_error("Can't set property: " . __CLASS__ . "->$name");
    }
    public function __isset( $property )
    {
        return property_exists( $this , $property );
    }
    public function __unset( $name )
    {
        user_error("Can't unset property: " . __CLASS__ . "->$name");
    }
    /**
     * alphaNumeric characters only
     * 
     * @uses Pattern_Regex::$alphaNumeric
     * @static
     * @return string regex <pre>[a-zA-Z0-9]+</pre>
     */
    public static function alphaNumeric() { return static::$alphaNumeric; }
    /**
     * Basic date format YYYY-MM-DD
     * 
     * @static
     * @uses Pattern_Regex::$dateBasic
     * @return string regex <pre>[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])</pre>
     */
    public static function dateBasic() { return static::$dateBasic; }
    /**
     * Basic date format YYYY-MM-DD Checks that the year is numeric and starts with 19 or 20, the month is numeric and between 01-12, and the day is numeric between 01-29, or 30 if the month value is anything other than 02 if not a leap year, or 31 if the month value is one of 01,03,05,07,08,10, or 12.
     * 
     * @static
     * @uses Pattern_Regex::$date
     * @access public
     * @return string regex <pre>(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))</pre>
     */
    public static function date() { return static::$date; }
    /**
     * Alternate date format YYYY/MM/DD
     * 
     * @static
     * @uses Pattern_Regex::$dateAlt
     * @access public
     * @return string regex <pre>[0-9]{0,4}/[0-9]{0,2}/[0-9]{0,2}</pre>
     */
    public static function dateAlt() { return static::$dateAlt; }
    /**
     * Basic time format HH:MM:SS
     * 
     * @static
     * @uses Pattern_Regex::$time
     * @access public
     * @return string regex <pre>(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}</pre>
     */
    public static function time() { return static::$time; }
    /**
     * Datetime according to W3C for input type="datetime". Matches the following: 1990-12-31T23:59:60Z or 1996-12-19T16:39:57-08:00
     * 
     * @static
     * @uses Pattern_Regex::$datetime
     * @access public
     * @return string regex <pre>/([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))/</pre>
     */
    public static function datetime() { return static::$datetime; }
    /**
     * Numeric values matching simple full or decimal numbers (2 decimal places)
     * 
     * @static
     * @uses Pattern_Regex::$currency
     * @access public
     * @return string regex <pre>[-+]?[0-9]*[.,]?[0-9]+</pre>
     */
    public static function currency() { return static::$currency; }
    /**
     * Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)
     * 
     * @static
     * @uses Pattern_Regex::$password
     * @access public
     * @return string regex <pre>(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$</pre>
     */
    public static function password() { return static::$password; }
    /**
     * HEX Format is #CCC or #CCCCCC
     * 
     * @static
     * @uses Pattern_Regex::$hexColor
     * @access public
     * @return string regex <pre>^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$</pre>
     */
    public static function hexColor() { return static::$hexColor; }
    /**
     * ipv4 Address
     * 
     * @static
     * @uses Pattern_Regex::$ipv4
     * @access public
     * @return string regex <pre>((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$</pre>
     */
    public static function ipv4() { return static::$ipv4; }
    /**
     * ipv6 Address
     * 
     * @static
     * @uses Pattern_Regex::$ipv6
     * @access public
     * @return string regex <pre>((^|:)([0-9a-fA-F]{0,4})){1,8}$</pre>
     */
    public static function ipv6() { return static::$ipv6; }
    /**
     * UUID A universally unique identifier standard by OSF (Open Software Foundation)
     * 
     * @static
     * @uses Pattern_Regex::$uuid
     * @access public
     * @return string regex <pre>^[0-9A-Fa-f]{8}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{12}$</pre>
     */
    public static function uuid() { return static::$uuid; }
    /**
     * Latitude or Longitude
     * 
     * @static
     * @uses Pattern_Regex::$latitudeLongitude
     * @access public
     * @return string regex <pre>-?\d{1,3}\.\d+</pre>
     */
    public static function latitudeLongitude() { return static::$latitudeLongitude; }
    /**
     * md5 Hash
     * 
     * @static
     * @uses Pattern_Regex::$md5Hash
     * @access public
     * @return string regex <pre>[0-9a-fA-F]{32}</pre>
     */
    public static function md5Hash() { return static::$md5Hash; }
    /**
     * Regular Credit Card checks if 16 numeric characters only.
     * 
     * @static
     * @uses Pattern_Regex::$creditCard
     * @access public
     * @return string regex <pre>[0-9]{16}</pre>
     */
    public static function creditCard() { return static::$creditCard; }
    /**
     * American Express Credit Card
     * 
     * @static
     * @uses Pattern_Regex::$amex
     * @access public
     * @return string regex <pre>[0-9]{4} *[0-9]{6} *[0-9]{5}</pre>
     */
    public static function amex() { return static::$amex; }
    /**
     * Diners Club Credit Card
     * 
     * @static
     * @uses Pattern_Regex::$dinersClub
     * @access public
     * @return string regex <pre>^([30|36|38]{2})([0-9]{12})$</pre>
     */
    public static function dinersClub() { return static::$dinersClub; }
    /**
     * VISA Credit Card
     * 
     * @static
     * @uses Pattern_Regex::$visa
     * @access public
     * @return string regex <pre>^4[0-9]{12}(?:[0-9]{3})?$</pre>
     */
    public static function visa() { return static::$visa; }
    /**
     * Master Card Credit Card
     * 
     * @static
     * @uses Pattern_Regex::$masterCard
     * @access public
     * @return string regex <pre>^5[1-5][0-9]{14}$</pre>
     */
    public static function masterCard() { return static::$masterCard; }
    /**
     * Discover Credit Card
     * 
     * @static
     * @uses Pattern_Regex::$discover
     * @access public
     * @return string regex <pre>^6(?:011|5[0-9]{2})[0-9]{12}$</pre>
     */
    public static function discover() { return static::$discover; }
    /**
     * JCB Credit Card
     * 
     * @static
     * @uses Pattern_Regex::$jcb
     * @access public
     * @return string regex <pre>^(?:2131|1800|35\d{3})\d{11}$</pre>
     */
    public static function jcb() { return static::$jcb; }
    /**
     * UK Post Code
     * 
     * @static
     * @uses Pattern_Regex::$ukPostCode
     * @access public
     * @return string regex <pre>[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}</pre>
     */
    public static function ukPostCode() { return static::$ukPostCode; }
    /**
     * UK Phone Numbers
     * 
     * @static
     * @uses Pattern_Regex::$ukPhoneNumber
     * @access public
     * @return string regex <pre>^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$</pre>
     */
    public static function ukPhoneNumber() { return static::$ukPhoneNumber; }
    /**
     * Australian Post Codes
     * 
     * @static
     * @uses Pattern_Regex::$auPhoneNumber
     * @access public
     * @return string regex <pre>[0-9]{4}</pre>
     */
    public static function auPostCode() { return static::$auPostCode; }
    /**
     * Australian Phone Numbers
     * 
     * @static
     * @uses Pattern_Regex::$ukPhoneNumber
     * @access public
     * @return string regex <pre>(^1300\d{6}$)|(^1800|1900|1902\d{6}$)|(^0[2|3|7|8]{1}[0-9]{8}$)|(^13\d{4}$)|(^04\d{2,3}\d{6}$)</pre>
     */
    public static function auPhoneNumber() { return static::$auPhoneNumber; }
    /**
     * USA Phone Numbers
     * 
     * @static
     * @uses Pattern_Regex::$usPhoneNumber
     * @access public
     * @return string regex <pre>\d{3}[\-]\d{3}[\-]\d{4}</pre>
     */
    public static function usPhoneNumber() { return static::$usPhoneNumber; }
    /**
     * USA Post Codes
     * 
     * @static
     * @uses Pattern_Regex::$usPostCode
     * @access public
     * @return string regex <pre>(\d{5}([\-]\d{4})?)</pre>
     */
    public static function usPostCode() { return static::$usPostCode; }
    /**
     * Canada Post Codes
     * 
     * @static
     * @uses Pattern_Regex::$caPostCode
     * @access public
     * @return string regex <pre>[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]</pre>
     */
    public static function caPostcode() { return static::$caPostcode; }
    /**
     * German Post Codes
     * 
     * @static
     * @uses Pattern_Regex::$germanPostCode
     * @access public
     * @return string regex <pre>[0-9]{5}</pre>
     */
    public static function germanPostCode() { return static::$germanPostCode; }
    /**
     * Japan Post Codes
     * 
     * @static
     * @uses Pattern_Regex::$jpPostCode
     * @access public
     * @return string regex <pre>\d{3}-\d{4}</pre>
     */
    public static function jpPostCode() { return static::$jpPostCode; }
    /**
     * Twitter profile/username
     * 
     * @static
     * @uses Pattern_Regex::$twitterProfile
     * @access public
     * @return string regex <pre>^[A-Za-z0-9_]{1,15}$</pre>
     */
    public static function twitterProfile() { return static::$twitterProfile; }
    /**
     * Facebook profile/username
     * 
     * @static
     * @uses Pattern_Regex::$facebookUsername
     * @access public
     * @return string regex <pre>^[a-z\d\.]{5,}$</pre>
     */
    public static function facebookUsername() { return static::$facebookUsername; }
}

?>