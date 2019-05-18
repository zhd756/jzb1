<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/15
 * Time: 17:56
 */

namespace app\index\model;


class Banner
{
    /**
     * 获取banner
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getinfo()
    {
        $arr = db('public_img')
            ->order('sort')
            ->where(['type'=>'banner'])
            ->select();

        return $arr;
    }
}