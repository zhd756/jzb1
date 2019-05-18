<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 20:37
 */

namespace app\index\model;


use think\Model;

class Type extends Model
{
    public function getList()
    {
        return $this->order('sort desc')->select();
    }

}