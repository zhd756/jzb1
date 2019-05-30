<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/16
 * Time: 17:53
 */

namespace app\index\controller;

use app\index\model\News as NewsModel;

class About extends Common
{
    /**
     * 关于我们
     * @return \think\response\View
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $news = new NewsModel();
        $news_arr = $news->order('id desc')->paginate(3);
        $arr = [
            'title' => '关于我们',
            'description' => $this->system['description'],
            'keywords' => $this->system['keywords'],
            'system' =>$this->system,
            'news' => $news_arr,
        ];

        return view('index',$arr);
    }
}