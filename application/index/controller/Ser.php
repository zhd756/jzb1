<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 17:53
 */

namespace app\index\controller;

use app\index\model\News as NewsModel;
use app\index\model\ServiceSupport;

class Ser extends Common
{
    /**
     * 服务支持
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $type_str = input('type');
        $where = [];
        (!empty($type_str)) and $where['type'] = $type_str;

        $news = new NewsModel();
        $news_arr = $news->where($where)->order('id desc')->paginate(3);
        $ser = new ServiceSupport();
        $info_arr = $ser->where($where)->find();

        $arr = [
            'title'=>'服务支持',
            'description' => $this->system['description'],
            'keywords' => $this->system['keywords'],
            'system'=>$this->system,
            'news'=>$news_arr,
            'info'=>$info_arr,
        ];

        return $this->fetch('index',$arr);
    }
}