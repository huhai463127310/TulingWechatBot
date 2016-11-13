<?php
namespace Bot;
use LaneWeChat\WeChat;

require __ROOT__ . '/bot/Config.php';
require __ROOT__ . '/bot/Util.php';
require __ROOT__ . '/bot/WXResponseHelper.php';
require __ROOT__ . '/bot/TulingBot.php';
require __ROOT__ . "/LaneWeChat-master/lanewechat.php";

/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 2016/11/13
 * Time: 18:34
 */
class BotLoader
{
    public function run(){
        $wechat = new WeChat(WECHAT_TOKEN, TRUE);
        echo $wechat->run();
    }
}