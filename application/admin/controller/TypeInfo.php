<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 11:42
 */

namespace app\admin\controller;

use app\admin\model\Type;
use xb\Pagination_lib;

class TypeInfo extends Base
{
    public function index()
    {
        $type_str = input('table_name');
        $page = max(1,input('page'));
        $page_size = 5;
        $where = [];
        (!empty($type_str)) and $where['table_name'] = $type_str;

        $type = new Type();
        $list = $type
            ->where($where)
            ->page($page,$page_size)
            ->select();
        $total_page = $type->where($where)->count();

        $lib = new Pagination_lib();
        $lib->init([
            'current_page'=>$page,
            'total_page'=>ceil($total_page/$page_size),
        ]);
        $page = $lib->create_html();

        $type_arr = [
            'product' => '产品展示',
            'news' => '新闻资讯',
        ];

        $arr = [
            'list'=>$list,
            'type_arr'=>$type_arr,
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
                'name' => $arr['name'],
                'sort' => $arr['sort'],
            ];
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
            $type = new Type();
            $type->save($info,['id'=>$arr['id']]);
            $this->success('您的信息已成功提交',url('TypeInfo/index'));
        }

        $id = input('id');
        $type = new Type();
        $info = $type->where(['id'=>$id])->find()->getData();

        $str_arr = [
            'product'=>'产品展示',
            'news'=>'新闻资讯',
        ];
        $info['table_name'] = $str_arr[$info['table_name']];
        return $this->fetch('edit',['info'=>$info]);
    }

    public function add()
    {
        if(request()->isPost()){
            $arr = request()->param();
            $file_img = request()->file('img');
            $info = [
                'name' => $arr['name'],
                'sort' => $arr['sort'],
                'type' => $arr['type'],
                'table_name' => $arr['table_name'],
            ];
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
            $type = new Type();
            $type->insert($info);
            $this->success('您的信息已成功提交',url('TypeInfo/index'));
        }

        return $this->fetch();
    }

    public function del()
    {
        $id = input('id');
        $type = new Type();
        $type->where(['id'=>$id])->delete();
        $this->success('您的信息已成功提交',url('TypeInfo/index'));
    }
}