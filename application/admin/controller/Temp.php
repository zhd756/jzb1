<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/22
 * Time: 18:56
 */

namespace app\admin\controller;

use app\admin\model\Users;
use think\Controller;
use think\Request;
use think\Session;

class Temp extends Controller
{
    public function index()
    {
        if(Session::has('users')){
            $this->success('你已登录成功,请勿重复登录','index/index');
        }
        return $this->fetch();
    }

    public function login()
    {
        if(Session::has('users')){
           $this->success('你已登录成功,请勿重复登录','index/index');
        }
        $captcha = input('code') or $this->error('验证码不能为空');
        !captcha_check($captcha) and $this->error('验证码有误');

        $name = input('name') or $this->error('帐号不能为空');
        $psw = input('password')or $this->error('密码不能为空');
        $users = new Users();
        $info = $users->where([
                'name'=>$name
            ])
            ->find() or $this->error('帐号不存在','index');
        $info = $info->getData();

        if(md5($psw) != $info['password']){
            $this->error('密码错误','index');
        }

        $users->save(['ip'=>Request::instance()->ip(),'end_time'=>date('Y-m-d H:i:s')],['name'=>$name]);
        Session::init([
            'expire'         => '10',
        ]);
        Session::set('users',$info);
        $this->success('登录成功','index/index');
    }

    public function logout()
    {
        Session::set('users',null);
        $this->success('退出成功','temp/index');
    }
}