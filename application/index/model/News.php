<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 17:36
 */

namespace app\index\model;


use think\Model;

class News extends Model
{
    public function getInfo()
    {
        return $this->select();
    }

}