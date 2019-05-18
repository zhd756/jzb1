<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:65:"D:\Visual-NMP-x64\www\jzb/application/index\view\about\index.html";i:1558004797;s:66:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\other.html";i:1558067953;s:67:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\header.html";i:1558086027;s:67:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\crumbs.html";i:1558067982;s:72:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\subject_top.html";i:1558004797;s:74:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\content_right.html";i:1558004797;s:75:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\subject_bottom.html";i:1558002849;s:67:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\footer.html";i:1558094681;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit" />
    <meta name="robots" content="index, follow" />
    <title>关于我们</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="order by dedeyuan.com" />
    <link href="/skin/css/bootstrap.css"  type="text/css" rel="stylesheet"/>
    <link href="/skin/css/animate.css"  type="text/css" rel="stylesheet"/>
    <link href="/skin/css/master-import.css"  type="text/css" rel="stylesheet"/>
    <link href="/skin/css/master-app.css"  type="text/css" rel="stylesheet"/>
    <link href="/skin/css/settings.css"  type="text/css" rel="stylesheet"/>
    <link href="/skin/css/extralayers.css"  type="text/css" rel="stylesheet"/>
    <link href="/skin/css/owl.carousel.css"  rel="stylesheet"/>
    <link href="/skin/css/owl.theme.green.min.css"  rel="stylesheet"/>
    <link href="/skin/css/tk.css"  type="text/css" rel="stylesheet"/>
    <script src="/skin/js/jquery-1.11.1.min.js"  type="text/javascript" ></script>
    <script src="/skin/js/jquery-migrate-1.2.1.js"  ></script>
    <script src="/skin/js/jquery-ui.min.js" ></script>
    <script src="/skin/js/bootstrap-3.1.1.min.js" ></script>
    <script src="/skin/js/modernizr.custom.js" ></script>

</head>
<body class="animated-css">
<div id="page-body-wrap">
    <body class="animated-css">
    <div id="page-body-wrap">
        <!--<div class="navbar-header">
            <div class="container">
                <div class="row">
                    <div class="info-top col-md-8 col-sm-9 col-xs-12 topbar-left">
                        <span class="adword">
                        <i class="fa fa-anchor"></i> <?php echo $system['str_top']; ?></span> <span class="top-phone">
                        <i class="fa fa-phone"></i> 服务热线: &nbsp; &nbsp; <a href="tel:<?php echo $system['phone_top']; ?>"><?php echo $system['phone_top']; ?></a>
                    </span>
                    </div>
                    <div class="info-top col-md-4 col-sm-3 hidden-xs text-right topbar-right">
                        <ul>
                            <li><a href="http://www.weibo.com/"  target="_blank"><i class="fa fa-weibo"></i></a></li>
                            &lt;!&ndash;<li><a href="http://t.qq.com/"  target="_blank"><i class="fa fa-tencent-weibo"></i></a></li>&ndash;&gt;
                            <li><a href="javascript:"  target="_blank"><i class="fa fa-qq"></i></a></li>
                            &lt;!&ndash;http://wpa.qq.com/msgrd?v=3&uin=775302585&site=qq&menu=yes &ndash;&gt;
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="header" id="header-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-12 header-left">
                        <a href="<?php echo url('index/index/index'); ?>"  class="logo">
                        <img src="<?php echo $system['logo_top']; ?>"  alt="<?php echo $title; ?>"/>&nbsp;
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-8 col-xs-12 header-nav">
                        <div class="top-cart"> <a href="https://www.tmall.com/"  target="_blank"><span class="icon-basket" aria-hidden="true"></span></a> </div>
                        <div class="navbar yamm" id="navigation">
                            <div class="navbar-header mmenu-wrap"> <a href="#mmenu" class="navbar-toggle mmenu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> </div>
                            <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class='Lev1 <?php if(request()->controller() == "Index"): ?>active<?php endif; ?>' > <a href="<?php echo url('index/index/index'); ?>"  class="menu1">网站首页</a> </li>
                                    <li class="Lev1 <?php if(request()->controller() == 'About'): ?>active<?php endif; ?>"> <a href="<?php echo url('index/about/index'); ?>"  class="menu1">关于我们
                                    </a>
                                        <ul style="display:none">


                                        </ul>
                                    </li><li class="Lev1 <?php if(request()->controller() == 'Pro'): ?>active<?php endif; ?>"> <a href="<?php echo url('index/pro/index'); ?>"  class="menu1">产品展示
                                    <b class="caret"></b></a>
                                    <ul class="dropdown-menu sub-menu2">
                                        <?php foreach($system['type']['product'] as $value): ?>
                                        <li class="Lev2"> <a href="<?php echo url('index/pro/index',['type'=>$value['type']]); ?>"  class="menu2"><?php echo $value['name']; ?></a> </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li><li class="Lev1 <?php if(request()->controller() == 'News'): ?>active<?php endif; ?>"> <a href="<?php echo url('index/news/index'); ?>"  class="menu1">新闻资讯
                                    <b class="caret"></b></a>
                                    <ul class="dropdown-menu sub-menu2">
                                        <?php foreach($system['type']['news'] as $value): ?>
                                        <li class="Lev2"> <a href="<?php echo url('index/news/index',['type'=>$value['type']]); ?>"  class="menu2"><?php echo $value['name']; ?></a> </li>
                                        <?php endforeach; ?>

                                    </ul>
                                </li>
                                   <!-- <li class="Lev1 <?php if(request()->controller() == 'Ser'): ?>active<?php endif; ?>">
                                        <a href="<?php echo url('index/ser/index'); ?>" class="menu1">服务支持
                                        <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu sub-menu2">
                                            <?php foreach($system['type']['service_support'] as $value): ?>
                                            <li class="Lev2"><a href="<?php echo url('index/ser/index',['type'=>$value['type']]); ?>" class="menu2"><?php echo $value['name']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>-->
                                    <li class="Lev1 <?php if(request()->controller() == 'Cantact'): ?>active<?php endif; ?>"> <a href="<?php echo url('index/cantact/index'); ?>"  class="menu1">联系我们
                                </a>
                                    <ul style="display:none">


                                    </ul>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 bcid-cat"><?php echo $title; ?></div>
            <div class="col-md-9 col-sm-8 location">
                <!--<i class="fa fa-map-marker"></i>&nbsp;
                <span>当前位置：
                    <a href="../../index.htm">主页</a> >
                    <?php foreach($system['nav_list'] as $value): ?>
                    <a href="<?php echo url(implode('/',$system['nav_list'])); ?>"><?php echo $value; ?></a> >
                    <?php endforeach; ?>
                    <a href="../../index.htm">主页</a> >
                    <a href="../chanpin/index.htm">产品展示</a> >
                    <a href="index.htm">礼品装</a> >
                </span>-->
            </div>
        </div>
    </div>
</div>
<div class="page-container" id="innerpage-wrap">
    <div class="container">
        <div class="row">
            <div class="main col-md-9 inner-left" role="main">




<div class="about-page-wrap">
    <div class="com-cnt page-content">
<?php echo $system['about']; ?>
    </div>
</div>

</div>
<aside class="sidebar col-md-3 inner-right" role="complementary">

    <section class="widget widget-category side-contact">
        <h3 class="title">联系信息</h3>
        <div class="s-contact">
            <?php echo $system['contact_info']; ?>
        </div>
    </section>
    <section class="widget side-news">
        <h3 class="title">热点新闻</h3>
        <div class="tabbed custom-tabbed">
            <div class="block current">
                <ul class="widget-list">
                    <?php foreach($news as $value): ?>
                    <li>
                        <figure>
                            <a href="<?php echo url('index/news/info',['id'=>$value['id']]); ?>" >
                                <img src="<?php echo $value['img']; ?>" />
                            </a>
                        </figure>
                        <div class="sn-wrapper">
                            <p class="s-desc">
                                <a href="<?php echo url('index/news/info',['id'=>$value['id']]); ?>"  title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></a>
                            </p>
                            <span class="comments">
                                <i class="fa fa-calendar"></i>
                                &nbsp;<?php echo $value['create_time']; ?>
                            </span>
                        </div>
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </section>
</aside>
</div>
</div>
</div>
</div>
<div class="for-bottom-padding"></div>
<footer class="footer footer-shop" id="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 foot-about">
                <div class="fot-box"> <h3 class="fot-title dark-title"><a href="a/about/index.htm" >关于我们</a></h3>
                    <div class="f-about">
                        <p> <b> <?php echo $system['about_bottom']; ?></b></p>
                    </div>
                    <a href="<?php echo $system['about_bottom_url']; ?>"  class="btn btn-primary btn-icon-right">了解更多
                        <div class="btn-icon"><i class="fa fa-long-arrow-right"></i></div>
                    </a> </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 foot-nav">
                <div class="fot-box">
                    <h3 class="fot-title">快捷导航</h3>
                    <ul class="x-hover-box">
                        <li><a href="<?php echo url('index'); ?>" >网站首页</a></li>

                        <li><a href="<?php echo url('index/about/index'); ?>" >关于我们</a></li>

                        <li><a href="<?php echo url('index/pro/index'); ?>" >产品展示</a></li>

                        <li><a href="<?php echo url('index/news/index'); ?>" >新闻资讯</a></li>

                        <!--<li><a href="<?php echo url('index/ser/index'); ?>" >服务支持</a></li>-->

                        <li><a href="<?php echo url('index/cantact/index'); ?>" >联系我们</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 foot-contact">
                <div class="fot-box"> <h3 class="fot-title dark-title"><a href="<?php echo url('index/cantact/index'); ?>" >联系我们</a></h3>
                    <div class="media fot-contact">
                        <div class="media-body">
                            <p> <i class="fa fa-map-marker"></i> 地址：<?php echo $system['contact_address']; ?> </p>
                            <p> <i class="fa fa-phone"></i> 全国热线： <?php echo $system['contact_phone']; ?></p>
                            <p> <i class="fa fa-phone"></i> 手机： <?php echo $system['contact_mobile']; ?></p>
                            <p> <i class="fa fa-envelope"></i> 邮箱： <?php echo $system['contact_email']; ?></p>
                            <!--<p> <i class="fa fa-print"></i> 传真：<?php echo $system['contact_address']; ?> </p>-->
                            <!--<p> <i class="fa fa-home"></i> 网址： </p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 foot-qrcode">
                <div class="fot-box">
                    <h3 class="fot-title">扫描二维码</h3>
                    <div class="media f-qrcode"> <img src="<?php echo $system['qrcode']; ?>" width="200px" /> </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-absolute">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-2 col-sm-12 col-xs-12 foot-left">
                <div class="copy">
                    <p><span><?php echo $system['copyright']; ?></span> </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs foot-mid">
                <!--<p class="text-center logo-p foot-logo"><img src="<?php echo $system['logo_bottom']; ?>"  alt="Logo"/></p>-->
            </div>
            <div class="col-lg-5 col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs foot-right">
                <div class="social-box">
                    <ul class="social-links">
                        <!--<li><a href="http://www.weibo.com/"  target="_blank"><i class="fa fa-weibo"></i></a></li>-->
                        <!--<li><a href="http://t.qq.com/"  target="_blank"><i class="fa fa-tencent-weibo"></i></a></li>-->
                        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $system['qq']; ?>&site=qq&menu=yes"  target="_blank"><i class="fa fa-qq"></i></a></li>
                        <li><a href="<?php echo $system['tmall']; ?>"  target="_blank"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="scroll-top"><i class="fa fa-long-arrow-up"></i></a>
</div>
<script src="/skin/js/jquery.themepunch.tools.min.js" ></script>
<script src="/skin/js/jquery.themepunch.revolution.min.js" ></script>
<script src="/skin/js/owl.carousel.js" ></script>
<script src="/skin/js/jquery.magnific-popup.js" ></script>
<script src="/skin/js/jquery.prettyphoto.js" ></script>
<script src="/skin/js/waypoints.min.js" ></script>
<script src="/skin/js/cssua.min.js" ></script>
<script src="/skin/js/custom.js" ></script>
<nav id="mmenu" class="noDis">
    <div class="mmDiv">
        <div class="MMhead">
            <a href="#mm-0" class="closemenu noblock">x</a>
            <a href="http://www.weibo.com/" target="_blank" class="noblock">
                <i class="fa fa-weibo"></i>
            </a>
            <a href="http://t.qq.com/" target="_blank" class="noblock">
                <i class="fa fa-tencent-weibo"></i>
            </a>
            <!--<a href="" target="_blank" class="noblock">English</a>-->
        </div>

        <ul>
            <li class="m-Lev1"><a href="<?php echo url('index/index/index'); ?>" >网站首页</a></li>
            <li class="m-Lev1">
                <a href="<?php echo url('index/about/index'); ?>"  class="m-menu1">关于我们</a>
            </li>
            <li class="m-Lev1">
                <a href="<?php echo url('index/pro/index'); ?>" class="m-menu1">产品展示</a>
                <ul class="m-submenu">
                    <?php foreach($system['type']['product'] as $value): ?>
                    <li class='Lev2'>
                        <a class='m-menu2' href="<?php echo url('index/pro/index',['type'=>$value['type']]); ?>"><?php echo $value['name']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="m-Lev1"><a href="<?php echo url('index/news/index'); ?>" class="m-menu1">新闻资讯</a>
                <ul class="m-submenu">
                    <?php foreach($system['type']['news'] as $value): ?>
                    <li class='Lev2'><a class='m-menu2' href="<?php echo url('index/news/index',['type'=>$value['type']]); ?>"><?php echo $value['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
           <!-- <li class="m-Lev1"><a href="<?php echo url('index/ser/index'); ?>" class="m-menu1">服务支持</a>
                <ul class="m-submenu">
                    <?php foreach($system['type']['service_support'] as $value): ?>
                    <li class='Lev2'><a class='m-menu2' href="<?php echo url('index/ser/index',['type'=>$value['type']]); ?>"><?php echo $value['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>-->
            <li class="m-Lev1"> <a href="<?php echo url('index/cantact/index'); ?>"  class="m-menu1">联系我们</a>  </li>
        </ul>
    </div>
</nav>
<link type="text/css" rel="stylesheet" href="/skin/css/jquery.mmenu.all.css"  />
<script type="text/javascript" src="/skin/js/jquery.mmenu.all.min.js" ></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var mmenu=$('nav#mmenu').mmenu({
            slidingSubmenus: true,
            classes		: 'mm-white', //mm-fullscreen mm-light
            extensions	: [ "theme-white" ],
            offCanvas	: {
                position: "right", //left, top, right, bottom
                zposition: "front" //back, front,next
                //modal		: true
            },
            searchfield		: false,
            counters		: false,
            //navbars		: {
            //content : [ "prev", "title", "next" ]
            //},
            navbar 		: {
                title : "网站导航"
            },
            header			: {
                add		: true,
                update	: true,
                title	: "网站导航"
            }

        });
        $(".closemenu").click(function() {
            var mmenuAPI = $("#mmenu").data( "mmenu" );
            mmenuAPI.close();
        });
    });
</script>
</body>
</html>