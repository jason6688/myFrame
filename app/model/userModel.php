<?php
/**
 * User模型
 * User: shiyayun
 */
namespace app\model;

use \core\lib\Model;

class userModel extends Model
{
    public $table = 'user';

    //查询多条数据
    public function getList(){

        $result = $this->select($this->table,"*",[]);

        return $result;
    }

    //查询单条数据
    public function getOne($id){
        $result = $this->get($this->table,"*",["id"=>$id]);

        return $result;
    }

    //更新一条数据
    public function updateOne($id,array $data){
        $result = $this->update($this->table,$data,["id"=>$id]);

        return $result;
    }

    //删除一条数据
    public function deleteOne($id){
        return $this->delete($this->table,["id"=>$id]);
    }
}