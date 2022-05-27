<?php

namespace yg\ygcodes\core;


use Psr\Http\Message\ResponseInterface;
use yg\ygcodes\lib\Client;

class FindCode
{


    /**
     * 查询产品数据
     * @param string $url
     * @param string $appKey
     * @param string $proType
     * @param string $code
     * @return ResponseInterface
     */
    static function find(string $url,string $appKey,string $proType,string $code)
    {
         return  Client::sendPost($url,$code,$appKey,$proType);
    }

}