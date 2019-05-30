<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/20
 * Time: 17:25
 */

namespace app\admin\controller;

use app\admin\model\System;
use think\File;

class Info extends Base
{
    public function index()
    {
        $system = new System();
        $info = $system->getInfo()->getData();
        $arr = [
            'info' => $info,
        ];

        return $this->fetch('index',$arr);
    }

    public function edit()
    {
        $arr = request()->param();
        $file_img = request()->file('box_right');
        $file_logo = request()->file('logo_top');
        $file_qrcode = request()->file('qrcode');

        $info = [
            'title' => $arr['title'],
            'description' => $arr['description'],
            'keywords' => $arr['keywords'],
            'about_bottom'=>$arr['about_bottom'],
            'about_bottom_url'=>$arr['about_bottom_url'],
            'contact_address'=>$arr['contact_address'],
            'contact_phone'=>$arr['contact_phone'],
            'contact_email'=>$arr['contact_email'],
            'contact_mobile'=>$arr['contact_mobile'],
            'copyright'=>$arr['copyright'],
            'qq'=>$arr['qq'],
            'tmall'=>$arr['tmall'],
            'box_left'=>$arr['box_left'],
            'product_text'=>$arr['product_text'],
        ];

        if($file_logo){
            $info['logo_top'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_logo));
        }
        if($file_img){
            $info['box_right'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
        }
        if($file_qrcode){
            $info['qrcode'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_qrcode));
        }

        $system = new System();
        $system->save($info,['id'=>1]);

        $this->success('您的信息已成功提交');
    }

    private function upload(File $file)
    {
        $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'uploads');
        if($info){
            // 成功上传后 获取上传信息

            // 输出 jpg
//            echo $info->getExtension();
           // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            return $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getFilename();
        }else{
            // 上传失败获取错误信息
            return $file->getError();
        }
    }

}