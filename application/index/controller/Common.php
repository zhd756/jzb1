<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/15
 * Time: 18:21
 */

namespace app\index\controller;


use app\index\model\System;
use app\index\model\Type;
use think\Controller;

class Common extends Controller
{
    public $system = [];

    public function __construct()
    {
        parent::__construct();
        $this->getInfo();
    }

    public function getInfo()
    {
        $system = new System;
        $this->system = $system->getInfo()->getData();
        $type = new Type();
        $type_arr = $type->getList();
        $new_arr = [];
        foreach ($type_arr as $key => $value) {
            $new_arr[$value['table_name']][] = $value;
        }
        $this->system['type'] = $new_arr;
        $this->system['nav_list'] = request()->dispatch()['module'];

        return;
    }
}