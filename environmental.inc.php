<?php
/**
 * 环境入口，需要有以下要点
 * 1、与数据库无关
 * 2、快速
 * 3、异常托管、错误托管、
 */

//use think\App;

PHP_VERSION_ID >= 50500            or die('require PHP > 5.5.0 !');

// 定义项目路径
defined('PROJECT_PATH')     or define('PROJECT_PATH', __DIR__);
defined('DT_CONFIG_PATH')   or define('DT_CONFIG_PATH', __DIR__ .'/data/dt/');
defined('APP_PATH')         or define('APP_PATH', __DIR__ . '/Application/');
defined('RUNTIME_PATH')     or define('RUNTIME_PATH', __DIR__ . '/data/runtime/');
defined('LOG_PATH')         or define('LOG_PATH', RUNTIME_PATH);
defined('DATA_PATH')        or define('DATA_PATH',      RUNTIME_PATH.'Data/'); // 应用数据目录

defined('CONF_PATH')        or define('CONF_PATH', __DIR__ . '/config/'); // 配置文件目录
defined('CERT_PATH')        or define('CERT_PATH', __DIR__ . '/config/cert/'); // 证书存放目录

require __DIR__ . '/thinkphp/base.php';
//error_reporting(E_ALL ^ E_NOTICE);//通知类的错误就不提示出来了。
//
//App::initCommon();
//defined('APP_DEBUG')        or define('APP_DEBUG', App::$debug);
