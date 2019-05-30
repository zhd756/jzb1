<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/15
 * Time: 18:23
 */

namespace app\admin\model;


use think\Model;

class System extends Model
{
    public function getInfo()
    {
        return $this->find();
    }

}