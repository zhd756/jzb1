<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 11:41
 */

namespace app\admin\controller;


use app\admin\model\Product;
use app\admin\model\Type;
use xb\Pagination_lib;

class Pro extends Base
{
    public function index()
    {
        $str = input('title');
        $page = max(1,input('page'));
        $page_size = 5;
        $where = [];
        (!empty($str)) and $where['title'] = $str;

        $class = new Product();
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
//                'update_time' => date('Y-m-d H:i:s'),
            ];
            !empty($arr['imgs']) and $info['imgs'] = implode(',',$arr['imgs']);
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));

            $pro = new Product();
            $pro->save($info,['id'=>$arr['id']]);
            $this->success('您的信息已成功提交',url('pro/index'));
        }

        $id = input('id');
        $pro = new Product();
        $info = $pro->where(['id'=>$id])->find()->getData();
        $type = new Type();
        $type_arr = $type->where(['table_name'=>'product'])->select()->toArray();

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
//                'create_time' => date('Y-m-d H:i:s'),
            ];
            !empty($arr['imgs']) and $info['imgs'] = implode(',',$arr['imgs']);
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
            $pro = new Product();
            $pro->insert($info);
            $this->success('您的信息已成功提交',url('pro/index'));
        }
        $type = new Type();
        $type_arr = $type->where(['table_name'=>'product'])->select()->toArray();

        return $this->fetch('',['type_arr'=>$type_arr]);
    }

    public function del()
    {
        $id = input('id');
        $pro = new Product();
        $pro->where(['id'=>$id])->delete();
        $this->success('您的信息已成功提交',url('pro/index'));
    }

    public function upload()
    {
        $file = request()->file('file');
        str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file));
    }

    //图片上传
    public function uploadpic()
    {
        $file = $this->request->file('file');//file是传文件的名称，这是webloader插件固定写入的。因为webloader插件会写入一个隐藏input，这里与TP5的写法有点区别
        $file->size = 524288000;

        $folder = input('folder');
        if ($folder) {
            //保存目录
            $Path = 'uploads' . DS . $folder;
            $info = $file->move(ROOT_PATH . 'uploads' . DS . $folder);
        }else{
            $Path = 'uploads';
            $info = $file->move(ROOT_PATH . 'uploads');
        }

        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg 地址
            $filePath = "/".$Path. DS .$info->getSaveName();
            $filePath = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] .$filePath);   //替换\为/
            return json(['success'=>true,'filePath'=>$filePath]);
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
        exit;
    }
}