<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 17:53
 */

namespace app\index\controller;


use app\index\model\Product;
use app\index\model\News as NewsModel;

class Pro extends Common
{
    /**
     * 产品展示
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $type_str = input('type');
        $where = [];
        (!empty($type_str)) and $where['type'] = $type_str;

        $news = new NewsModel();
        $news_arr = $news->order('id desc')->paginate(3);

        $product = new Product();
        $product_arr = $product->where($where)->paginate(6);
        $page = $product_arr->render();

        $arr = [
            'title'=>'产品展示',
            'system'=>$this->system,
            'news'=>$news_arr,
            'product'=>$product_arr,
            'page'=>$page
        ];

        return $this->fetch('index',$arr);
    }

    /**
     * 产品详情
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function info()
    {
        $id_str = input('id');
        $where = [];
        (!empty($id_str)) and $where['id'] = $id_str;

        $news = new NewsModel();
        $news_arr = $news->order('id desc')->paginate(3);

        $pro = new Product();
        $info_arr = $pro->where($where)->find()->getData();
        $info_arr['imgs'] = explode(',',$info_arr['imgs']);

        $arr = [
            'title'=>'产品',
            'system'=>$this->system,
            'news'=>$news_arr,
            'info'=>$info_arr,
        ];

        return $this->fetch('info',$arr);
    }
}