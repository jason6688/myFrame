<?php
/**
 * 配置加载类
 * User: shiyayun
 */
namespace core\lib;

class Conf
{
    public static $conf = array();
    public static function get($name, $file)
    {
        /**
         * 1.判断配置文件是否存在
         * 2.判断配置是否存在
         * 3.缓存配置
         */
        try{
            if (isset(self::$conf[$file])){
                return self::$conf[$file][$name];
            }
            $path = BASE.'\core\conf\\'.$file.'.php';
            if (is_file($path)){
                $conf = include $path;
                if (isset($conf[$name])){
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('没有这个配置项'.$name);
                }
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }catch (\Exception $e){
            p($e->getMessage());
        }
    }

    //加载整个配置文件(传配置文件名)
    public static function all($file)
    {
        try{
            if (isset(self::$conf[$file])){
                return self::$conf[$file];
            }
            $path = BASE.'\core\conf\\'.$file.'.php';
            if (is_file($path)){
                $conf = include $path;
                self::$conf = $conf;
                return $conf;
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }catch (\Exception $e){
            p($e->getMessage());
        }
    }
}