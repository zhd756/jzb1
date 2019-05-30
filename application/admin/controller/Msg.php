<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 11:42
 */

namespace app\admin\controller;


use app\admin\model\Message;
use xb\Pagination_lib;

class Msg extends Base
{
    public function index()
    {
        $str = input('title');
        $page = max(1,input('page'));
        $page_size = 5;
        $where = [];
        (!empty($str)) and $where['title'] = $str;

        $class = new Message();
        $list = $class
            ->where($where)
            ->page($page,$page_size)
            ->select();
        $total_page = $class->where($where)->count();

        $lib = new Pagination_lib();
        $lib->init([
            'current_page'=>$page,
            'total_page'=>ceil($total_page/$page_size),
        ]);
        $page = $lib->create_html();

        $arr = [
            'list'=>$list,
            'page'=>$page
        ];

        return $this->fetch('',$arr);
    }

    public function del()
    {
        $id = input('id');
        $msg = new Message();
        $msg->where(['id'=>$id])->delete();
        $this->success('您的信息已成功提交',url('msg/index'));
    }
}