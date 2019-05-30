<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 15:18
 */

namespace app\admin\controller;


use app\admin\model\Tab2;

class T2 extends Base
{
    public function index()
    {
        $t2 = new Tab2();
        $info = $t2
            ->where(['id'=>1])
            ->find();

        return $this->fetch('',['info'=>$info]);
    }

    public function edit()
    {
        $arr = request()->param();
        $file_img = request()->file('img');
        $info = [
            'ico'=>'',
            'title'=>$arr['title'],
            'account'=>$arr['account'],
            'title1'=>$arr['title1'],
            'tips'=>$arr['tips'],  //|
            'url_title'=>$arr['url_title'],
            'url'=>$arr['url'],
        ];

        $file_img and $info['img'] = str_replace("\\","/",'http://'.$_SERVER['SERVER_NAME'] . DS . 'uploads' . DS . upload($file_img));
        $t = new Tab2();
        $t->save($info,['id'=>1]);
        $this->success('您的信息已成功提交');
    }
}