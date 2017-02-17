<?php
/**
 * 框架入口文件
 * User: shiyayun
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define('BASE', realpath('./'));
define('CORE', BASE . '/core');
define('APP', BASE . '/app');
define('MODULE', 'app');
define('__PUBLIC__',BASE.'/public');

//引入vender第三方类库
include "vendor/autoload.php";

define('DEBUG', true);

if (DEBUG) {
    /**
     * PHP errors for cool kids
     */
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

//加载函数库
include CORE . '/common/function.php';
//加载核心文件
include CORE . '/Core.php';

spl_autoload_register('\core\Core::load');

\core\Core::run();
