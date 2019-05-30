<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 17:53
 */

namespace app\index\controller;

use app\index\model\News as NewsModel;
use app\index\model\Type;

class News extends Common
{
    /**
     * 新闻资讯
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $type_str = input('type');
        $where = [];
        (!empty($type_str)) and $where['type'] = $type_str;

        $news = new NewsModel();
        $news_arr = $news->where($where)->order('id desc')->paginate(3);
        $news_list = $news->where($where)->order('id desc')->paginate(6);
        $page = $news_list->render();

        $arr = [
            'title'=>'新闻资讯',
            'description' => $this->system['description'],
            'keywords' => $this->system['keywords'],
            'system'=>$this->system,
            'news'=>$news_arr,
            'news_list'=>$news_list,
            'page'=>$page
        ];

        return $this->fetch('index',$arr);
    }

    /**
     * 新闻资讯详情
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
        $info_arr = $news->where($where)->find();

        $type = new Type();
        $type_arr = $type->where(['table_name'=>'news'])->select();

        $type_arr = _array_column($type_arr->toArray(),'name','type');
        $info_arr['type_name'] = $type_arr[$info_arr['type']];

        $arr = [
            'title'=>$type_arr[$info_arr['type']],
            'system'=>$this->system,
            'news'=>$news_arr,
            'info'=>$info_arr,
        ];

        return $this->fetch('info',$arr);
    }
}