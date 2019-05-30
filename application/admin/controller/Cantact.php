<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/21
 * Time: 11:38
 */

namespace app\admin\controller;


use app\admin\model\System;

class Cantact extends Base
{
    public function index()
    {
        $system = new System();
        $info = $system->where(['id'=>1])->value('cantact_us');
        $arr = [
            'cantact' => $info,
        ];

        return $this->fetch('',$arr);
    }

    public function edit()
    {
        $cantact_str = input('cantact_text');
        $system = new System();
        $system->save(['cantact_us'=>$cantact_str],['id'=>1]);

        $this->success('您的信息已成功提交');
    }

}