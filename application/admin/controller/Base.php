<?php
/**
 * Created by PhpStorm.
 * User: xiaobeii
 * Date: 2019/5/22
 * Time: 18:47
 */

namespace app\admin\controller;


use think\Controller;
use think\Request;
use think\Session;

class Base extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->login_type();
    }

    public function login_type()
    {
        if(!Session::has('users')){
            $this->error('请登录！','temp/index');
        }
    }

}