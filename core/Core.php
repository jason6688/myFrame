<?php
/**
 * 核心文件
 * User: shiyayun
 */
namespace core;

class Core
{
    public static $classMap = array();

    /**
     * @throws \Exception
     */

    public static function run()
    {
        //p('ok');
        //连接数据库
        //$model = new \core\lib\Model();

        try{
            //启动日志功能
            \core\lib\Log::init();
            \core\lib\Log::log('test');
            //\core\lib\Log::log($_SERVER);

            $route = new \core\lib\Route();
            //p($route);
            $controller = $route->controller;
            $action = $route->action;

            $controllerFile = APP . '/controller/' . $controller . 'Controller.php';//控制器文件路径

            if (is_file($controllerFile)) {
                //加载控制器
                include $controllerFile;
                $controllerClass = '\\' . MODULE . '\controller\\' . $controller . 'Controller';
                $controller = new $controllerClass();
                $controller->$action();//执行路由中控制器对应的方法
                //日志测试
                //\core\lib\Log::log('controller:'.$route->controller.'  '.'action:'.$route->action);
            } else {
                throw new \Exception('找不到控制器' . $controller . 'Controller');
            }
        }catch (\Exception $e){
            p($e->getMessage());
        }


    }

    /**
     * 自动加载类库
     */
    public static function load($class)
    {
        $class = str_replace('\\', '/', $class);
        //p($class);
        //类库已经加载则不进行重复加载
        if (isset(self::$classMap[$class])) {
            return true;
        }
        //加载未加载的类库
        $file = BASE . '/' . $class . '.php';

        if (is_file($file)) {
            include $file;
            self::$classMap[$class] = $class;
        } else {
            return false;
        }
    }


}