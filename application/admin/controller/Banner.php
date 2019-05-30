<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 12:12
 */

namespace app\admin\controller;


use app\admin\model\PublicImg;

class Banner extends Base
{
    public function index()
    {
        $banner = new PublicImg();
        $list = $banner
            ->select();

        return $this->fetch('',['list'=>$list]);
    }

    public function edit()
    {
        if(request()->isPost()){
            $arr = request()->param();
            $file_img = request()->file('img');
            $info = [
                'name' => $arr['name'],
                'sort' => $arr['sort'],
                'type' => $arr['type'],
                'update_time' => date('Y-m-d H:i:s'),
            ];
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
            $banner = new PublicImg();
            $banner->save($info,['id'=>$arr['id']]);
            $this->success('您的信息已成功提交',url('banner/index'));
        }

        $id = input('id');
        $banner = new PublicImg();
        $info = $banner->where(['id'=>$id])->find();

        return $this->fetch('',['info'=>$info]);
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
                'create_time' => date('Y-m-d H:i:s'),
            ];
            $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
            $banner = new PublicImg();
            $banner->insert($info);
            $this->success('您的信息已成功提交',url('banner/index'));
        }

        return $this->fetch();
    }

    public function del()
    {
        $id = input('id');
        $banner = new PublicImg();
        $banner->where(['id'=>$id])->delete();
        $this->success('您的信息已成功提交',url('banner/index'));

    }
}