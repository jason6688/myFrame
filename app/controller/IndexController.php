<?php
/**
 * 控制器类
 * User: shiyayun
 */
namespace app\controller;

use \core\lib\Controller;
use \app\model\userModel;

class IndexController extends Controller
{
    public function index()
    {
        echo 'Hello World';
        $model = new \core\lib\Model();

        $sql = 'SELECT * FROM user';
        //$result = $model->query($sql);
        //dump($result->fetchAll(\PDO::FETCH_ASSOC));
        //p($result->fetchAll(\PDO::FETCH_ASSOC));
        //p($result->fetchAll(\PDO::FETCH_NUM));

        echo '<hr>';

        //medoo查询
        $res = $model->select("user","*",[]);
        //print_r($res);
        //dump($res);

        $userModel = new userModel();
        $result = $userModel->getList();
        //p($result);

        $result = $userModel->getOne($id = 2);
        //dump($result);

        $result = $userModel->updateOne($id = 6,$data = ["name"=>"小小"]);
        //p($result);

        //$result = $userModel->deleteOne($id = 7);
        //dump($result);

        //medoo插入操作
        //$model ->insert("user",["name"=>"王五","age"=>22,"sex"=>"保密"]);
        /*$model ->insert("user",[
            ["name"=>"小楠","age"=>24,"sex"=>"女"],
            ["name"=>"王五","age"=>26,"sex"=>"男"]
        ]);*/

        $this->assign('name','小强');
        $this->display('h.html');
    }

    public function test()
    {
        $data = 'Hello World';

        $this->assign('name', '史亚运');
        //p($_SERVER['REQUEST_URI']);
        $this->assign('data', $data);
        $this->display('test.html');
    }

    public function conf(){
        //测试配置文件
        $tmp = \core\lib\Conf::get('CONTROLLER','route');
        $tmp = \core\lib\Conf::get('ACTION','route');
        p($tmp);
    }

    public function bootstrapt(){

        $time = strtotime('-1 day');
        echo $time;
        $this->assign('time',$time);
        $this->assign('name','史亚运');
        $this->display('bootstrapt.html');
    }
}