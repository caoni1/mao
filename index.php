<?php

$agent = $_SERVER['HTTP_USER_AGENT'];
//允许通过的蜘蛛
if (stripos($agent, 'Baiduspider') === false && stripos($agent, '360Spider') ===false && stripos($agent, 'Sogou') ===false && stripos($agent, 'YisouSpider') ===false) {

//非蜘蛛
    // header('HTTP/1.1 404 Not Found');//访客页面
    include '404.html';
    exit();
}

include 'index.html';

?>