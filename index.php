<?php
use Bot\BotLoader;

define("__ROOT__", dirname(__FILE__));

require __ROOT__ . '/bot/BotLoader.php';

$botLoader = new BotLoader();
$botLoader->run();
