<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 17:50
 */

namespace app\index\model;


use think\Model;

class Product extends Model
{
    protected $pk = 'id';

    /**
     * @param array $where
     * @param $page
     * @param $page_size
     * @return mixed
     */
    public function getList($where = [],$page = 1,$page_size = 6)
    {
        $pindex = max(1, intval($page));  //页码
        $psize = $page_size ? (int)$page_size : 6; // 条数
        $arr = db('product')
            ->where($where)
//            ->page($pindex,$psize)
            ->order('id DESC')
            ->paginate($page_size);

        return $arr;
    }

    public function getInfo($id)
    {
        $arr = db('product')
            ->where(['id'=>$id])
            ->find();

        return $arr;
    }


}