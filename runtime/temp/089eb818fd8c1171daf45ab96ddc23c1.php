<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\Visual-NMP-x64\www\jzb/application/index\view\index\index.html";i:1558084981;s:66:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\index.html";i:1557912353;s:67:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\header.html";i:1558086027;s:67:"D:\Visual-NMP-x64\www\jzb\application\index\view\common\footer.html";i:1558094681;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit" />
    <meta name="robots" content="index, follow" />
    <title>广州市金正邦生物科技有限公司</title>
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


<div class="tp-banner-container" id="index-slider">
  <div class="tp-banner-1">
    <ul>
        <?php foreach($banner as $value): ?>
        <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo $value['img']; ?>" data-saveperformance="off" data-title="<?php echo $value['name']; ?>">
            <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['name']; ?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"/>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="tp-bannertimer"></div>
  </div>
</div>
<section id="tabs-section" class="home-section tabs-section-horizontal">
  <div class="container">
    <div class="ver-tabs horiz-tabs">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-sidebar">
            <ul class="nav tabs">
              <li> <a href="#tab1" data-toggle="tab">
                <div class="fa-box"> <i class="fa flaticon-workers"></i></div>
                <div class="fa-content">
                  <h4><?php echo $tab1['title']; ?></h4>
                  <p><?php echo $tab1['account']; ?></p>
                </div>
                </a> </li>
              <li class="active"> <a href="#tab2" data-toggle="tab">
                <div class="fa-box"> <i class="fa flaticon-worker18"></i></div>
                <div class="fa-content">
                  <h4><?php echo $tab2['title']; ?></h4>
                  <p><?php echo $tab2['account']; ?></p>
                </div>
                </a> </li>
              <li> <a href="#tab3" data-toggle="tab">
                <div class="fa-box"> <i class="fa flaticon-constructor5 "></i></div>
                <div class="fa-content">
                  <h4><?php echo $tab3['title']; ?></h4>
                  <p><?php echo $tab3['account']; ?></p>
                </div>
                </a> </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content" id="whyus">
            <div class="tab-pane text-style" id="tab1">
              <div class="row">
                <div class="col-md-6 whyus-left">
                  <h2 class="light-font"><?php echo $tab1['title1']; ?></h2>
                  <p><?php echo $tab1['text']; ?></p>
                  <ul class="list-style-check">
                    <li><?php echo $tab1['tips1']; ?></li>
                    <li class="li-last"><?php echo $tab1['tips2']; ?></li>
                  </ul>
                  <a class="btn btn-primary btn-lg btn-icon-right" href="<?php echo $tab1['url']; ?>"><?php echo $tab1['url_title']; ?>
                  <div class="btn-icon"><i class="fa fa-long-arrow-right"></i></div>
                  </a> </div>
                <div class="col-md-6 whyus-right"> <img src="<?php echo $tab1['img']; ?>" /> </div>
              </div>
            </div>
            <div class="tab-pane active text-style" id="tab2">
              <div class="row">
                <div class="col-md-6 whyus-left">
                  <h2 class="light-font"><?php echo $tab2['title1']; ?></h2>
                  <ul class="list-style-check">
                    <li><?php echo $tab2['tips1']; ?></li>
                    <li><?php echo $tab2['tips2']; ?></li>
                    <li><?php echo $tab2['tips3']; ?></li>
                    <li><?php echo $tab2['tips4']; ?></li>
                    <li class="li-last"><?php echo $tab2['tips5']; ?></li>
                  </ul>
                  <a class="btn btn-primary btn-lg btn-icon-right" href="<?php echo $tab1['url']; ?>"><?php echo $tab2['url_title']; ?>
                  <div class="btn-icon"><i class="fa fa-long-arrow-right"></i></div>
                  </a> </div>
                <div class="col-md-6 whyus-right"> <img src="<?php echo $tab2['img']; ?>" /> </div>
              </div>
            </div>
            <div class="tab-pane text-style" id="tab3">
              <div class="row">
                <div class="col-md-6 whyus-left">
                  <h2 class="light-font"><?php echo $tab3['title1']; ?></h2>
                  <p><?php echo $tab3['text']; ?></p>
                  <ul class="list-style-check">
                    <li><?php echo $tab3['tips1']; ?></li>
                    <li><?php echo $tab3['tips2']; ?></li>
                    <li><?php echo $tab3['tips3']; ?></li>
                    <li class="li-last"><?php echo $tab3['tips4']; ?></li>
                  </ul>
                  <!--<a class="btn btn-primary btn-lg btn-icon-right">了解实际案例视频分享<div class="btn-icon"><i class="fa fa-long-arrow-right"></i></div></a>-->
                </div>
                <div class="col-md-6 whyus-right"> <img src="<?php echo $tab3['img']; ?>" /> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home-section" id="index-portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3x col-md-12">
        <header class="section-header animated " data-animation="fadeInUp" >
          <div class="icon-line"><i class="fa fa-pencil-square-o"></i></div>
          <div class="heading-wrap">
            <h2 class="heading"><span><a href="<?php echo url('index'); ?>" >产品展示</a></span></h2>
            <p class="text-center animated desc-p" data-animation="fadeInUp"><?php echo $system['product_text']; ?></p>
          </div>
        </header>
      </div>
    </div>
  </div>
  <section class="container carousel animated " data-animation="fadeInUp" id="iport-owl">
    <div class="row">
      <ul class="carousel-1 bxslider iport-owl-ul" data-max-slides="4" data-min-slides="1" data-width-slides="270" data-margin-slides="10" data-auto-slides="true" data-move-slides="3" data-infinite-slides="false">
          <?php foreach($product as $value): ?>
        <li class="iport-item">
          <div class="media">
              <a href="<?php echo url('index/pro/info',['id'=>$value['id']]); ?>" >
                  <img src="<?php echo $value['img']; ?>"  alt="<?php echo $value['title']; ?>"/>
              </a>
          </div>
          <div class="carousel-item-content">
              <a href="<?php echo url('index/pro/info',['id'=>$value['id']]); ?>"  class="carousel-title" title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></a>
            <div class="carousel-text">
                <a class="btn btn-primary btn-lg btn-icon-right" href="<?php echo url('index/pro/info',['id'=>$value['id']]); ?>" >查看更多
                    <div class="btn-icon"><i class="fa fa-long-arrow-right"></i></div>
                </a>
            </div>
          </div>
        </li>
          <?php endforeach; ?>

      </ul>
    </div>
  </section>
</section>
<section class="home-section" id="index-news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <header class="section-header section-simple animated" data-animation="fadeInUp">
          <div class="icon-line">
            <h3><a href="<?php echo url('index/news/index'); ?>" >新闻资讯</a></h3>
          </div>
        </header>
      </div>
    </div>
  </div>
  <section class="container carousel animated " data-animation="fadeInUp" id="inews-owl">
    <div class="row">
      <ul class="carousel-2 bxslider inews-owl-ul" data-max-slides="4" data-min-slides="2" data-width-slides="270" data-margin-slides="10" data-auto-slides="true" data-move-slides="3" data-infinite-slides="false">
          <?php foreach($news as $value): ?>
          <li class="inews-item">
              <div class="media">
                  <a href="<?php echo url('index/news/info',['id'=>$value['id']]); ?>">
                    <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['title']; ?>"/>
                  </a>
              </div>
              <div class="carousel-item-content">
                  <h3 class="inews-title">
                      <a href="<?php echo url('index/news/info',['id'=>$value['id']]); ?>" class="carousel-title" title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?>
                      </a>
                  </h3>
                  <div class="carousel-text">
                      <p><?php echo $value['introduce']; ?></p>
                  </div>
                  <div class="text-right">
                      <a class="btn btn-primary btn-lg btn-icon-right btn-transparent" href="<?php echo url('index/news/info',['id'=>$value['id']]); ?>">
                          <div class="btn-icon"><i class="fa fa-long-arrow-right"></i></div>
                      </a>
                  </div>
              </div>
          </li>
          <?php endforeach; ?>
      </ul>
    </div>
    <div class="bx-wrapper">
      <div class="bx-controls bx-has-pager bx-has-controls-direction inews-ctrl">
        <div class="bx-controls-direction"> <a href="javascript:void(0);" class="bx-prev"><i class="fa fa-angle-left"></i></a> <a href="javascript:void(0);" class="bx-next"><i class="fa fa-angle-right"></i></a> </div>
      </div>
    </div>
  </section>
</section>
<section class="home-section section-preset1 " id="index-about">
  <div class="video-box">
    <div class="video-box-left  animated " data-animation="fadeInLeft">
      <div class="video-box-info">
       <?php echo $system['box_left']; ?>
      </div>
    </div>
    <div class="video-box-right animated " data-animation="fadeInRight"> <a class="video-popab"><img src="<?php echo $system['box_right']; ?>"  /></a> </div>
  </div>
</section>
<section class="home-section" id="index-client">
  <!--<div class="container">
    <div class="row">
      <div class="col-md-12">
        <header class="section-header section-simple animated " data-animation="fadeInUp">
          <div class="icon-line">
            <h3>我们的合作伙伴</h3>
          </div>
        </header>
      </div>
    </div>
  </div>-->
  <section class="carousel-brand animated " data-animation="fadeInUp" id="iclient-owl">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="bx-wrapper">
            <img src="http://www.jzb.com/uploads/20190515/1-1F4211609580-L.png" width="100%"/>
            <!--<div class="bx-controls bx-has-pager bx-has-controls-direction iclient-ctrl">
              <div class="bx-controls-direction"> <a href="javascript:void(0);" class="bx-prev"><i class="fa fa-angle-left"></i></a> <a href="javascript:void(0);" class="bx-next"><i class="fa fa-angle-right"></i></a> </div>
            </div>
          </div>
          <ul class="carousel-5 bxslider iclient-owl-ul" data-max-slides="4" data-min-slides="2" data-width-slides="270" data-margin-slides="10" data-auto-slides="true" data-move-slides="1" data-infinite-slides="false">
              <?php foreach($partners as $value): ?>
              <li><img src="<?php echo $value['img']; ?>"  alt="<?php echo $value['name']; ?>"/></li>
              <?php endforeach; ?>
          </ul>-->
        </div>
      </div>
    </div>
  </section>
</section>
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