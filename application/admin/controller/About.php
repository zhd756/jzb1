<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 11:35
 */

namespace app\admin\controller;


use app\admin\model\System;

class About extends Base
{
    public function index()
    {
        $system = new System();
        $info = $system->where(['id'=>1])->value('about');
        $arr = [
            'about' => $info,
        ];

        return $this->fetch('',$arr);
    }

    public function edit()
    {
        $about_str = input('about_text');
        $system = new System();
        $system->save(['about'=>$about_str],['id'=>1]);

        $this->success('您的信息已成功提交');
    }
}