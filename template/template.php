<?php

// 若是HTML文档则用此报头
header('Content-type: text/html;charset=utf-8');

// 若是文本则用此报头
header('Content-type: text/plain;charset=utf-8');

// 若是只展示JSON用此报头
header('Content-type: application/json;charset=utf-8');


// 关闭所有错误显示 适合生产环境 production
error_reporting(0);

// 显示所有错误 适合开发环境 development （建议使用）
error_reporting(-1);

// 显示所有错误 适合开发环境 （官方不建议使用）
error_reporting(E_ALL);

// 不显示函数废弃提示，显示其他所有错误
error_reporting(E_ALL ^ E_DEPRECATED);


// 设置页面执行无时间限制 不超时
set_time_limit(0);


// 设置时区
date_default_timezone_set('Asia/Shanghai');


// 定义页面开始执行时间，方便计算页面执行时间
define('START_TIME', microtime(true));
// 定义全局项目根目录 看哪个好用用哪个
define('APP_ROOT', str_replace('\\', '/', dirname(__FILE__)));
define('WEB_PATH', __DIR__);
define('APP_ROOT_DIR', __DIR__);

// php 版本判断
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    echo '版本过低';
    exit;
}









