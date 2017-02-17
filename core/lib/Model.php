<?php
/**
 * model基类，继承PDO连接数据库
 * User: Administrator
 * Date: 2017/2/8 0008
 * Time: 下午 10:08
 */
namespace core\lib;

use \core\lib\Conf;

/*class Model extends \PDO
{
    public function __construct()
    {
        $db = Conf::all('db');  //数据库配置内容

        try {
            parent::__construct($db['DSN'], $db['USERNAME'], $db['PASSWD']);
        } catch (\Exception $e) {
            p($e->getMessage());
        }

    }
}*/
class Model extends \Medoo\Medoo
{
    public function __construct()
    {
        $db = Conf::all('db');

        try{
            parent::__construct($db);
        }catch (\Exception $e){
            p($e->getMessage());
        }
    }
}