<?php
/**
 * 路由文件
 * User: shiyayun
 */
namespace core\lib;

use \core\lib\Conf;

class Route
{
    public $controller;
    public $action;

    public function __construct()
    {
        /**
         * 1.隐藏index.php
         * 2.获取URL参数部分
         * 3.返回对应控制器和方法
         */
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            //REQUEST_URI格式：/index/index
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/', trim($path, '/'));
            if (isset($pathArr[0])) {
                $this->controller = ucfirst($pathArr[0]);
                unset($pathArr[0]);
            }
            if (isset($pathArr[1])) {
                $this->action = $pathArr[1];
                unset($pathArr[1]);
            } else {
                $this->action = Conf::get('ACTION','route')?Conf::get('ACTION','route'):'index';
            }
            //URL多余部分转换成GET数据
            //REQUEST_URI:/index/index/id/2
            $count = count($pathArr) + 2;
            //当GET参数存在空值时(即变量和值还是成对出现)
            if ($count % 2 == 1) {
                $pathArr[] = null;
            }
            $i = 2;
            while ($i < $count) {
                $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                $i += 2;
            }

        } else {
            $this->controller = Conf::get('CONTROLLER','route')?Conf::get('CONTROLLER','route'):'Index';
            $this->action = Conf::get('ACTION','route')?Conf::get('ACTION','route'):'index';
        }
    }
}