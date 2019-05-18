<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 15:55
 */

namespace app\index\model;


class Tab
{
    /**
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getInfo1()
    {
        $arr = db('tab1')
            ->find();

        return $arr;
    }

    /**
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getInfo2()
    {
        $arr = db('tab2')
            ->find();

        return $arr;
    }

    /**
     * @return array|false|\PDOStatement|string|\think\Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getInfo3()
    {
        $arr = db('tab3')
            ->find();

        return $arr;
    }

}