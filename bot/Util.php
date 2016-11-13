<?php
namespace Bot;
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 2016/11/13
 * Time: 18:40
 */
class Util
{
    static function getWebCont($url, $data = '', $sslVerify = false) {
        //TODO DEBUG
        error_log($url);
        //TODO DEBUG
        $ch = curl_init();
        if ($sslVerify) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if ($data) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $body = curl_exec($ch);
        $head = curl_getinfo($ch);
        $error = curl_error($ch);
        curl_close($ch);
        if ($head['http_code'] == '200') {
            return $body;
        } else {
            //log here
            return false;
        }
    }
}