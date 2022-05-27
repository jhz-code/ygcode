<?php

namespace yg\ygcodes\lib;
use Psr\Http\Message\ResponseInterface;

class Client
{


    /**
     * @param string $url //请求url
     * @param $code //产品code
     * @param $appKey //应用
     * @return ResponseInterface
     */
    static function sendPost(string $url,$code,$appKey,$proType){
        $client = new \GuzzleHttp\Client();
        $signData = Sign::Encryption($code,$appKey,$proType);
        $response = $client->post($url, [
            'form_params' => [
                'code'      => urlencode($code),
                'type'      => $proType,
                'noncestr'      => $signData['Noncestr'],
                'sign'      => $signData['Sign'],
            ]
        ]);
        return json_decode($response->getBody(),true);
    }

}