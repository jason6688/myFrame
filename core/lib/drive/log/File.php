<?php
/**
 * 文件系统
 * User: shiyayun
 */
namespace core\lib\drive\log;

use core\lib\Conf;

class File
{
    public $path;   //日志的存储路径

    public function __construct()
    {
        $this->path = Conf::get('OPTION', 'log')['PATH'];
    }

    //写日志
    public function log($message, $file = 'main')
    {
        if (!is_dir($this->path)){
            mkdir($this->path,0777,true);
        }
        date_default_timezone_set ( 'UTC' );

        return file_put_contents($this->path.$file.'-'.date('Y-m-d').'.log',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);


    }
}