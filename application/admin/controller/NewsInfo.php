<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 11:42
 */

namespace app\admin\controller;


use app\admin\model\News;
use app\admin\model\Type;
use xb\Pagination_lib;

class NewsInfo extends Base
{
    public function index()
    {
        $str = input('title');
        $page = max(1,input('page'));
        $page_size = 5;
        $where = [];
        (!empty($str)) and $where['title'] = $str;

        $class = new News();
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

    public function edit()
    {
        if(request()->isPost()){
            $arr = request()->param();
            $file_img = request()->file('img');
            $info = [
                'title' => $arr['title'],
                'text' => $arr['text'],
                'type' => $arr['type'],
                'introduce' => $arr['introduce'],
                'update_time' => date('Y-m-d H:i:s'),
            ];
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
            $news = new News();
            $news->save($info,['id'=>$arr['id']]);
            $this->success('您的信息已成功提交',url('NewsInfo/index'));
        }

        $id = input('id');
        $news = new News();
        $info = $news->where(['id'=>$id])->find()->getData();
        $type = new Type();
        $type_arr = $type->where(['table_name'=>'news'])->select()->toArray();

        return $this->fetch('edit',['info'=>$info,'type_arr'=>$type_arr]);
    }

    public function add()
    {
        if(request()->isPost()){
            $arr = request()->param();
            $file_img = request()->file('img');
            $info = [
                'title' => $arr['title'],
                'text' => $arr['text'],
                'type' => $arr['type'],
                'introduce' => $arr['introduce'],
                'create_time' => date('Y-m-d H:i:s'),
            ];
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
            $news = new News();
            $news->insert($info);
            $this->success('您的信息已成功提交',url('NewsInfo/index'));
        }
        $type = new Type();
        $type_arr = $type->where(['table_name'=>'news'])->select()->toArray();

        return $this->fetch('',['type_arr'=>$type_arr]);
    }

    public function del()
    {
        $id = input('id');
        $news = new News();
        $news->where(['id'=>$id])->delete();
        $this->success('您的信息已成功提交',url('NewsInfo/index'));
    }
}