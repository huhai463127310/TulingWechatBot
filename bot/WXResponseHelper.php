<?php
namespace Bot;
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 2016/11/13
 * Time: 18:32
 */
class WXResponseHelper
{
    //回复给微信的消息长度不能超过2048字节
    const WECHAT_MAX_RESPONSE_LEN = 2018;
    /**
     * 构造链接
     * @param $txt
     * @param $link
     * @param bool $blank
     * @return string
     */
    public static function buildHref($txt, $link, $blank = true){
        if($link == "")
            return $txt;

        return sprintf("<a href=\"%s\" %s >%s</a>", $link, ($blank ? "target=\"_blank\"" : ""), $txt);
    }

    public static function maxLen($allText, $text){
        $len = strlen($text);
        $total_bytes = strlen($allText);
        $total_bytes += $len;
        return $total_bytes < self::WECHAT_MAX_RESPONSE_LEN ? false : true;
    }
}