<?php

namespace ygx\ygcode\core;


use Psr\Http\Message\ResponseInterface;

class FindCode
{

    /**
     * 查询产品数据
     * @param string $url
     * @param string $appKey
     * @param string $code
     */
    static function find(string $url,string $appKey,string $code)
    {
         return  Client::sendPost('',$code,$appKey);
    }

}