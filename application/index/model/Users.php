<?php


namespace app\index\model;


use think\Db;
use think\Model;

class Users extends Model
{
    protected $name = 'users';

    public function getInfo()
    {
        $ss = db('users')->select();
        return $ss;
    }
}