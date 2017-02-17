<?php
/**
 * 日志类
 * User: shiyayun
 */
namespace core\lib;

use \core\lib\Conf;

class Log
{
    /**
     * 1.确定日志的存储方式
     * 2.写日志
     */
    public static $class;

    public static function init(){
        //确定存储方式
        $drive = Conf::get('DRIVE','log');         //默认使用文件驱动
        $drive = ucfirst(strtolower($drive));      //转换成首字母大写

        $class = '\core\lib\drive\log\\'.$drive;    //日志驱动类
        //p($class);exit();
        self::$class = new $class;
    }

    public static function log($name,$file='main'){
        self::$class->log($name,$file);
    }
}