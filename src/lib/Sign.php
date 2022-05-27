<?php

namespace yg\ygcodes\lib;

class Sign
{

    /**
     * 获取通讯加密数据
     */
     static function Encryption(string $code,string $appKey,$proType): array
     {
        $result['Noncestr'] = self::createNoncestr();
        $key =  $code.$appKey.$result['Noncestr'];
        $result['Sign'] = md5(md5($key).$appKey.$proType);
        return $result;
    }

    //作用：产生随机字符串，不长于32位
    static function createNoncestr($length = 32) {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }


}