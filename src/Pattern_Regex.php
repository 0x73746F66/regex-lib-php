<?php

class Pattern_Regex {
    /*
     * Regular
     */
    private static $alphaNumeric = "[a-zA-Z0-9]+";
    private static $date = "(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))";
    private static $time = "(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}";
    private static $datetime = "/([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))/";
    private static $currency = "[-+]?[0-9]*[.,]?[0-9]+";

    /*
     * Special
     */
    private static $password = "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$";
    private static $hexColor = "^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$";
    private static $ipv4 = "((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$";
    private static $ipv6 = "((^|:)([0-9a-fA-F]{0,4})){1,8}$";
    private static $uuid = "^[0-9A-Fa-f]{8}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{4}\-[0-9A-Fa-f]{12}$";
    private static $latitudeLongitude = "-?\d{1,3}\.\d+";
    private static $md5Hash = "[0-9a-fA-F]{32}";

    /*
     * Credit Cards
     */
    private static $creditCard = "[0-9]{16}";
    private static $amex = "[0-9]{4} *[0-9]{6} *[0-9]{5}";
    private static $dinersClub = "^([30|36|38]{2})([0-9]{12})$";
    private static $visa = "^4[0-9]{12}(?:[0-9]{3})?$";
    private static $masterCard = "^5[1-5][0-9]{14}$";
    private static $discover = "^6(?:011|5[0-9]{2})[0-9]{12}$";
    private static $jcb = "^(?:2131|1800|35\d{3})\d{11}$";

    /*
     * UK
     */
    private static $ukPostCode = "[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}";
    private static $ukPhoneNumber = "^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$";

    /*
     * Australia
     */
    private static $auPostCode = "[0-9]{4}";
    private static $auPhoneNumber = "(^1300\d{6}$)|(^1800|1900|1902\d{6}$)|(^0[2|3|7|8]{1}[0-9]{8}$)|(^13\d{4}$)|(^04\d{2,3}\d{6}$)";

    /*
     * USA
     */
    private static $usPhoneNumber = "\d{3}[\-]\d{3}[\-]\d{4}";
    private static $usPostCode = "(\d{5}([\-]\d{4})?)";

    /* 
     * Canada
     */
    private static $caPostcode = "[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]";
    
    /*
     * German
     */
    private static $germanPostCode = "[0-9]{5}";
    
    /*
     * Japan
     */
    private static $jpPostCode = "\d{3}-\d{4}";
    
    /*
     * Social Networks
     */
    private static $twitterProfile = "^[A-Za-z0-9_]{1,15}$";
    private static $facebookUsername = "^[a-z\d\.]{5,}$";
    
    private $empty = "";
    
    public function __get( $name )
    {
        $property = ( property_exists( $this, $name ) ? $name : "empty" );
        return $this->$property;
    }
    private function __set( $name, $value ) {
        user_error("Can't set property: " . __CLASS__ . "->$name");
    }
    public function __isset( $property )
    {
        return property_exists( $this , $property );
    }
    private function __unset( $name )
    {
        user_error("Can't unset property: " . __CLASS__ . "->$name");
    }
    
    public static function alphaNumeric() { return static::$alphaNumeric; }
    public static function date() { return static::$date; }
    public static function time() { return static::$time; }
    public static function datetime() { return static::$datetime; }
    public static function currency() { return static::$currency; }
    public static function password() { return static::$password; }
    public static function hexColor() { return static::$hexColor; }
    public static function ipv4() { return static::$ipv4; }
    public static function ipv6() { return static::$ipv6; }
    public static function uuid() { return static::$uuid; }
    public static function latitudeLongitude() { return static::$latitudeLongitude; }
    public static function md5Hash() { return static::$md5Hash; }
    public static function creditCard() { return static::$creditCard; }
    public static function amex() { return static::$amex; }
    public static function dinersClub() { return static::$dinersClub; }
    public static function visa() { return static::$visa; }
    public static function masterCard() { return static::$masterCard; }
    public static function discover() { return static::$discover; }
    public static function jcb() { return static::$jcb; }
    public static function ukPostCode() { return static::$ukPostCode; }
    public static function ukPhoneNumber() { return static::$ukPhoneNumber; }
    public static function auPostCode() { return static::$auPostCode; }
    public static function auPhoneNumber() { return static::$auPhoneNumber; }
    public static function usPhoneNumber() { return static::$usPhoneNumber; }
    public static function usPostCode() { return static::$usPostCode; }
    public static function caPhoneNumber() { return static::$usPhoneNumber; }
    public static function caPostcode() { return static::$caPostcode; }
    public static function germanPostCode() { return static::$germanPostCode; }
    public static function jpPostCode() { return static::$jpPostCode; }
    public static function twitterProfile() { return static::$twitterProfile; }
    public static function facebookUsername() { return static::$facebookUsername; }
}

?>

