<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/15
 * Time: 19:15
 */

namespace app\index\model;


class Partners
{
    /**
     * 获取合作伙伴
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getInfo()
    {
        $arr = db('public_img')
            ->order('sort')
            ->where(['type'=>'partners'])
            ->select();

        return $arr;
    }

}