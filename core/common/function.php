<?php
/**
 * 函数库
 * shiyayun
 */

/**
 * 打印变量或数组
 * @param $var
 */
function p($var)
{
    if (is_bool($var)) {
        var_dump($var);
    } elseif (is_null($var)) {
        var_dump(NULL);
    } else {
        echo "<pre style='position: relative;z-index: 1000;padding: 10px;
        border-radius: 5px;background: #F5F5F5;border: 1px solid #aaa;font-size: 14px;
        line-height: 18px;opacity: 0.9;'>" . print_r($var, true) . "</pre>";
    }
}

/**
 * 获取输入参数，并过滤
 * @param string $name 变量的名称 支持指定类型
 * @param mixed $default 不存在的时候默认值
 * @param mixed $filter 参数过滤方法
 */
function I($name, $default = '', $filter = null)
{
    if (strpos($name,'.')){
        list($method,$type) = explode('.',$name,2);
    }else{
        $method = 'param';
    }

    switch (strtolower($method)){
        case 'get':
            $input = & $_GET;
            break;
        case 'post':
            $input = & $_POST;
            break;
        case 'request':
            $input = & $_REQUEST;
            break;
        case 'session':
            $input = & $_SESSION;
            break;
        case 'cookie':
            $input = & $_COOKIE;
            break;
        case 'server':
            $input = & $_SERVER;
            break;
        case 'globals':
            $input = & $GLOBALS;
            break;

    }
}