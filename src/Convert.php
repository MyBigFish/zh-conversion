<?php

namespace slliu\zh;

use slliu\zh\CharMap;

class Convert
{
    /**简体中文转换为繁体中文
     * @param $str
     * @return string
     */
    public static function zhconversion_hant($str) {

        if(empty($str) || $str === ''){
            return $str;
        }

        return strtr($str, CharMap::zh2Hant );
    }

    /**繁体中文转换为简体中文
     * @param $str
     * @return string
     */
    public static function zhconversion_hans($str) {
        if(empty($str) || $str === ''){
            return $str;
        }
        return strtr($str, CharMap::zh2Hans);
    }

    /**繁体转换为简体
     * @param $str
     * @return string
     */
    public static function zhconversion_cn($str) {
        if(empty($str) || $str === ''){
            return $str;
        }
        return strtr(strtr($str, CharMap::zh2CN), CharMap::zh2Hans);
    }


    /**简体转台湾繁体
     * @param $str
     * @return string
     */
    public static function zhconversion_tw($str) {
        if(empty($str) || $str === ''){
            return $str;
        }
        return strtr(strtr($str, CharMap::zh2TW), CharMap::zh2Hant);
    }

    /**简体转香港繁体
     * @param $str
     * @return string
     */
    public static function zhconversion_hk($str) {
        if(empty($str) || $str === ''){
            return $str;
        }
        return strtr(strtr($str, CharMap::zh2HK), CharMap::zh2Hant);
    }

}