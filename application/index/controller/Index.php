<?php
namespace app\index\controller;

use app\index\model\Banner;
use app\index\model\News as NewsModel;
use app\index\model\Partners;
use app\index\model\Product;
use app\index\model\Tab;

class Index extends Common
{
    /**
     * 首页
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $banner = new Banner();
        $banner_arr = $banner->getinfo();
        $partners = new Partners();
        $partners_arr = $partners->getinfo();
        $news = new NewsModel();
        $news_arr = $news->getinfo();
        $product = new Product();
        $product_arr = $product->getList();
        $tab = new Tab();
        $tab1_arr1 = $tab->getinfo1();
        $tab1_arr2 = $tab->getinfo2();
        $tab1_arr3 = $tab->getinfo3();

        $tab1_arr2['tips1'] = str_replace(['[',']'],['<b>','</b>'],$tab1_arr2['tips1']);
        $tab1_arr2['tips2'] = str_replace(['[',']'],['<b>','</b>'],$tab1_arr2['tips2']);
        $tab1_arr2['tips3'] = str_replace(['[',']'],['<b>','</b>'],$tab1_arr2['tips3']);
        $tab1_arr2['tips4'] = str_replace(['[',']'],['<b>','</b>'],$tab1_arr2['tips4']);
        $tab1_arr2['tips5'] = str_replace(['[',']'],['<b>','</b>'],$tab1_arr2['tips5']);

        $arr = [
            'title' => '广州市金正邦生物科技有限公司',
            'banner' =>$banner_arr,
            'system' =>$this->system,
            'partners' => $partners_arr,
            'tab1' => $tab1_arr1,
            'tab2' => $tab1_arr2,
            'tab3' => $tab1_arr3,
            'news' => $news_arr,
            'product' => $product_arr,
        ];

        return view('index',$arr);
    }

    public function pro_email_send()
    {
        $arr = request()->param();
        $rule = [
            'cp'  => 'require',
            'name'  => 'require|max:25',
            'email'   => 'email',
            'tel'   => 'require',
            'content'   => 'require',
        ];
        $msg = [
            'cp.require' => '产品名称不能为空',
            'name.require' => '名称必须',
            'name.max'     => '名称最多不能超过25个字符',
            'email'        => '邮箱格式错误',
            'tel.require' => '电话/手机不能为空',
            'content.require' => '详细内容不能为空',
        ];

        $result = $this->validate($arr, $rule,$msg);
        if(true !== $result){
            // 验证失败 输出错误信息
            $this->error($result);
        }
        $this->success('您的信息已成功提交');
    }

    public function zt_email_send()
    {
        $arr = request()->param();
        $rule = [
            'zt'  => 'require',
            'name'  => 'require|max:25',
            'email'   => 'email',
            'tel'   => 'require',
            'content'   => 'require',
        ];
        $msg = [
            'zt.require' => '主题不能为空',
            'name.require' => '名称必须',
            'name.max'     => '名称最多不能超过25个字符',
            'email'        => '邮箱格式错误',
            'tel.require' => '电话/手机不能为空',
            'content.require' => '留言不能为空',
        ];

        $result = $this->validate($arr, $rule,$msg);
        if(true !== $result){
            // 验证失败 输出错误信息
            $this->error($result);
        }
        $this->success('您的信息已成功提交');
    }

}
