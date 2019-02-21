<!DOCTYPE html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- /%title Pantry's Best，派悦坊－代表高品质的西式甜品，和永无止尽的创意乐趣 -->
<title>{{ isset($title)?$title:'nihao!' }}</title>
<link data-turbolinks-track="true" href="{{ asset('Pantry/application-354237c6d723a6db65ecc58d6bded2b2.css') }}" media="all" rel="stylesheet"><script charset="utf-8" src="{{ asset('Pantry/v.htm') }}"></script><script src="{{ asset('Pantry/hm.js') }}"></script><script data-turbolinks-track="true" src="{{ asset('Pantry/application-415019d9daae0857da5f2d710dc3a787.js') }}"></script><style>.cke{visibility:hidden;}</style><script src="{{ asset('Pantry/wxLogin.js') }}" type="text/javascript"></script>
<!-- /%link{"rel"=>"stylesheet", "href"=>"/jquery-ui.min.css"} -->
<!-- /%script{type: 'text/javascript', src: "/jquery-ui.js"} -->
<!-- //[if lt IE 9] -->
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="{{ isset($description)?$description:'派悦坊,非凡创意美味蛋糕、经典纸杯蛋糕、大都会红丝绒蛋糕,均坚持选择纯进口原材料,给生日,派对带来不同惊喜，与朋友们、家人分享独一无二的美味快乐' }}" name="description">
<meta content="{{ isset($keywords)?$keywords:'蛋糕,网上订购,生日,派对,红丝绒,纸杯蛋糕' }}" name="keywords">
<!-- /%script{type: 'text/javascript', src: "/css3-mediaqueries.js"} -->
<!--[if lt IE 9]>
<script src='/es5-shim-min.js' type='text/javascript'></script>
<script src='/html5shiv.min.js' type='text/javascript'></script>
<script src='/pie.js' type='text/javascript'></script>
<script src='/respond.min.js' type='text/javascript'></script>
<![endif]-->
<!-- / baidu统计的代码 -->
<script>
  var _hmt = _hmt || [];
  _hmt.push(['_setAccount', '644047433451f3c44613b4c1c0bdfc9b']);
</script>
<meta content="authenticity_token" name="csrf-param">
<meta content="SVeovei4v50oYgo43azn33svCt93RsaQB7mRnJjxvlU=" name="csrf-token"></head>
<body style="background-color:#FCD8E0;">
<iframe src="javascript:false;" style="display: none;"></iframe>
<style>
  .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus{
    background-color: #9c1e2e
  }
  #toggle-mobile-dropdown-nav.expanded{
    background-color: #9c1e2e
  }
</style>
<div data="null" id="user-data"></div>
<div data="{&quot;id&quot;:11047341,&quot;created_at&quot;:&quot;2016-12-27T07:41:29.000Z&quot;,&quot;updated_at&quot;:&quot;2016-12-27T07:41:29.000Z&quot;,&quot;item_ids&quot;:[],&quot;productsTotal&quot;:0.0,&quot;utensilsTotal&quot;:0,&quot;earliestDeliveryDate&quot;:null,&quot;undeliverDate&quot;:{&quot;1&quot;:[],&quot;2&quot;:[],&quot;3&quot;:[],&quot;4&quot;:[]}}" id="shopping-cart-data"></div>
<div data="{&quot;id&quot;:2,&quot;chinese_name&quot;:&quot;上海&quot;}" id="city-data"></div>
<div data="2015/03/14 15:09:00" id="activity-start-at"></div>
<div data="2015/04/02" id="activity-20150402-start"></div>
<div data="2015/04/10" id="activity-20150402-end"></div>
<div data="2015/07/07" id="activity-20150710-start"></div>
<div data="2015/07/20" id="activity-20150710-end"></div>
<div class="hidden-xs navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation">
<div class="container">
<div class="navbar-header">
<div class="navbar-brand">
<a href="/home"><img alt="Christmas logo" src='{{ asset("uploads/$logo") }}'></a>
<!-- / %a{href: "/"}= image_tag('logo-normal.png') -->
</div>
</div>
<li class="dropdown">
<ul class="nav navbar-nav middle-nav-ul hidden-xs">
<li class="middle-nav-ul-li">
|
</li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
产品列表
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
	@foreach($list as $v)
	    <li>
	    	<a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a>
	    </li>
	@endforeach

</ul>
</li>
<li class="middle-nav-ul-li">
|
</li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
寻找我们
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="/home/find">门店</a>
</li>
<li>
<a href="/home/send">配送须知</a>
</li>
</ul>
</li>
<li class="middle-nav-ul-li">
|
</li>
<li>
<a class="navbar-font-color" href="/home/event">活动</a>
</li>
<li class="middle-nav-ul-li">
|
</li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
关于
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="/home/huiyuan">会员</a>
</li>
<li>
<a href="/home/women">我们</a>
</li>
<li>
<a href="/home/liping">礼品卡</a>
</li>
</ul>
</li>
</ul>

@if (isset($user))
<ul class="nav navbar-nav navbar-right hidden-xs">
  <li class="dropdown" id="welcome-item">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
      <span class="hidden-sm">您好，{{ isset($user)?$user:"" }}</span>
      <span class="visible-sm">
        <i class="fa fa-user"></i>
      </span>
      <span class="caret hidden-sm"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li>
        <a href="/home/heart">个人中心</a>
      </li>
      <li>
        <a href="/home/privateorder">我的订单</a>
      </li>
    
      <li>
        <a href="/home/heart">个人信息</a>
      </li>
      <li>
        <a  href="/home/logout" rel="nofollow" data-no-turbolink="">退出</a>
      </li>
    </ul>
  </li>

  <li id="summary-nav">

    <a class="navbar-font-color" href="/home/buycar">
      <i class="fa fa-shopping-cart"></i>
      <span class="hidden-sm">购物车</span>
    </a>
  </li>
</ul>
@else
<ul class="nav navbar-nav navbar-right hidden-xs">
<li id="sign-in-item">
<a href="{{ asset('home/login') }}">登录</a>
</li>
<li id="sign-up-item">
<a href="{{ asset('home/register') }}">注册</a>
</li>
 <li><a href=" {{ url('home/buycar') }}" style="background:url('/images/car.png') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
</ul>
@endif

</div>
</div>

<div class="navbar navbar-default navbar-static-top navbar-fixed-top visible-xs mobile-header-nav" role="navigation">
<div class="container" id="mobile-header-nav">
<div class="navbar-header">
<span id="toggle-mobile-dropdown-nav" style="width: 18%;text-align: left;">未登录</span>
<div class="navbar-brand" style="width: 64%;text-align: center;padding-left: 5px;padding-right: 5px;">
<a href="https://www.pantrysbest.com/"><img alt="Christmas logo" src="../Pantry/christmas-logo-2eda8a4166a8d5485d880232238f461f.png"></a>
<!-- / %a{href: "/"}= image_tag('logo-normal.png') -->
</div>
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-text.png') -->
<!-- /%a.navbar-brand{href: "/", style: "padding-top:12px;"}= image_tag('logo-text-new.png',style: "max-height:20px;") -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-heisenlin.png') -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-shumei.png') -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-frog.png') -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-qixi-2015.png') -->
<a class="toggle-mobile-telephone-nav visible-xs" href="tel:4008314159" style="width: 18%;text-align: right">
<i class="fa fa-phone pantry-green-font"></i>
</a>
</div>
<ul class="nav navbar-nav navbar-right" id="mobile-navbar-right">
<li id="sign-in-item">
<a href="https://www.pantrysbest.com/users/sign_in">登录</a>
</li>
<li id="sign-up-item">
<a href="https://www.pantrysbest.com/users/sign_up">注册</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
产品目录
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/christmas-specials">圣诞精选</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/disney">迪士尼系列</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/gift-box">礼盒</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/cakes">蛋糕</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/cupcakes">纸杯蛋糕</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/pies">派</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/tartlets">挞</a>
</li>
<li>
<a href="https://www.pantrysbest.com/card">礼品卡</a>
</li>
</ul>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
城市
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="https://www.pantrysbest.com/cities/beijing">北京</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/shanghai">上海</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/hangzhou">杭州</a>
</li>
<li>
<a href="https://www.pantrysbest.com/cities/tianjin">天津</a>
</li>
</ul>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
寻找我们
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="https://www.pantrysbest.com/stores">门店</a>
</li>
<li>
<a href="https://www.pantrysbest.com/pages/shdinggouxuzhi">配送须知</a>
</li>
</ul>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="navbar-font-color" href="https://www.pantrysbest.com/events">活动</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="navbar-font-color" href="https://www.pantrysbest.com/pages/huiyuan">会员</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
关于
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="https://www.pantrysbest.com/pages/huiyuan">会员</a>
</li>
<li>
<a href="https://www.pantrysbest.com/pages/ninhao">我们</a>
</li>
<li>
<a href="https://www.pantrysbest.com/pages/lipinka">礼品卡</a>
</li>
</ul>
</li>
<!-- /%li.dropdown.hidden-md.hidden-sm.visible-xs -->
<!-- /  %a.white{href: "/pages/zhaopin"} 加入我们 -->
<li id="shopping-cart-summary-nav">
<a class="navbar-font-color" href="https://www.pantrysbest.com/shopping-cart">
<i class="fa fa-shopping-cart"></i>
<span class="hidden-sm">购物车</span>
</a>
</li>
</ul>
</div>
<div class="container pantry-height-5px"></div>
<a href="https://www.pantrysbest.com/">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-home"></i>
</div>
<div class="col-xs-12 no-padding"></div>
首页
</div>
</a>
<a href="https://www.pantrysbest.com/cities/shanghai/categories/cakes">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-list-alt"></i>
</div>
<div class="col-xs-12 no-padding">
产品列表
</div>
</div>
</a>
<a href="https://www.pantrysbest.com/users/sign_in">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-user"></i>
</div>
<div class="col-xs-12 no-padding">
个人中心
</div>
</div>
</a>
<a href="https://www.pantrysbest.com/shopping-cart">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-shopping-cart"></i>
</div>
<div class="col-xs-12 no-padding">
购物车
</div>
</div>
</a>
</div><div class="hidden-xs" style="height: 50px;"></div>
<div class="visible-xs" style="height: 85px;"></div>
<div id="page-container">
<p><span style="color:#330000"><span style="font-size:22px">派悦坊会员与积分条例</span></span></p>

<p>&nbsp;</p>

<p style="margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;line-height:115%;font-family:华文细黑;
color:#330000" lang="EN-US">1. </span><span style="font-size:10.5pt;line-height:115%;
font-family:华文细黑;color:#330000">会员分类与积分方法：<span lang="EN-US">&nbsp;<br>
1.1 </span>派悦坊会员分为会员、银卡会员、金卡会员和白金卡会员<span lang="EN-US">&nbsp;<br>
1.2 </span>购买产品每消费一元积<span lang="EN-US">1</span>分（不含运费及配件部分），以下称为“消费积分”<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;line-height:115%;font-family:华文细黑;
color:#330000" lang="EN-US">1.3 </span><span style="font-size:10.5pt;line-height:115%;
font-family:华文细黑;color:#330000">参与活动会可获得一次性奖励积分（具体积分数值参见活动信息），以下称为“奖励积分”<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;line-height:115%;font-family:华文细黑;
color:#330000" lang="EN-US">1.4 </span><span style="font-size:10.5pt;line-height:115%;
font-family:华文细黑;color:#330000">可兑换积分包括消费积分和奖励积分<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</p>

<p style="margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000" lang="EN-US">2. </span><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000">会籍注册：<span lang="EN-US">&nbsp;<br>
2.1 </span>在订购时通过网站、店员记录或电话登记您的入会信息即可成为派悦坊会员<span lang="EN-US">&nbsp;<br>
<!--[endif]--></span></span><span style="font-size: 10.5pt; font-family: 华文细黑;" lang="EN-US"><o:p></o:p></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">3. </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">会员晋级与保级：<span lang="EN-US">&nbsp;<br>
3.1 </span>当会员在任意连续<span lang="EN-US">12</span>个月内积满<span lang="EN-US">600</span>分，则从积满<span lang="EN-US">600</span>之日的次日起晋级为银卡会员<span lang="EN-US">&nbsp;<br>
3.2 </span>当会员在任意连续<span lang="EN-US">12</span>个月内消费满<span lang="EN-US">6</span>次，且每次消费满<span lang="EN-US">80</span>元，</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">计算消费次数为</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">1</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">次</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">/</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">天</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">，则从满<span lang="EN-US">6</span>次之日起晋级为银卡会员，此规则与<span lang="EN-US">3.1</span>同时计算晋级<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">3.3 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">当会员在任意连续<span lang="EN-US">12</span>个月内积满<span lang="EN-US">1200</span>分，则从积满<span lang="EN-US">1200</span>之日的次日起晋级为金卡会员<span lang="EN-US">&nbsp;<o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">3.4</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">会员在任意连续<span lang="EN-US">12</span>个月内消费满<span lang="EN-US">12</span>次，</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">且每次消费满</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">80</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">元</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">，计算消费次数为</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">1</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">次</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">/</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">天，</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">则从满<span lang="EN-US">12</span>次之日起晋级为金卡会员<span lang="EN-US">&nbsp;</span>，</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">此规则与<span lang="EN-US">3.3</span>同时计算晋级</span><span style="font-size:
10.5pt;font-family:华文细黑;color:#330000" lang="EN-US"><o:p></o:p></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">3.5 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">当银卡或金卡会员在任意连续<span lang="EN-US">12</span>个月内积满<span lang="EN-US">2000</span>分，则从积满相应分数的次日起晋级为白金卡会员<span lang="EN-US">&nbsp;<o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">3.6 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">会员在任意连续<span lang="EN-US">12</span>个月内消费满<span lang="EN-US">20</span>次，</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">且每次消费满</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">80</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">元</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">，计算消费次数为</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">1</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">次</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">/</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">天，</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">则从满<span lang="EN-US">20</span>次之日晋级为白金卡会员，此规则与<span lang="EN-US">3.5</span>同时计算晋级<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">3.7 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">银卡、金卡和白金卡的会籍有效期为<span lang="EN-US">1</span>年，有效期延长即保级的条件如下：<span lang="EN-US">&nbsp;&nbsp;<br>
3.7.1 </span>银卡会员年内积满<span lang="EN-US">500</span>分消费积分可保级<br>
<span lang="EN-US">3.7.2 </span>金卡会员年内积满<span lang="EN-US">1000</span>分消费积分可保级<span lang="EN-US">&nbsp;<o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">3.7.3 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">白金卡会员年内积满<span lang="EN-US">1800</span>分消费积分可保级<span lang="EN-US">&nbsp;<o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000" lang="EN-US">3.8 </span><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000">可兑换积分的有效期是<span lang="EN-US">2</span>年。<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4. </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">会员礼遇：<span lang="EN-US">&nbsp;<br>
4.1 </span>所有会员均可在积分有效期内用可兑换积分换购指定派悦坊产品和派悦坊礼品（详见<span lang="EN-US">5. </span>积分换购）<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4.2 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">银卡会员独享礼遇：<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4.2.1 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">银卡会员本人或亲友生日当月均可获赠价值<span lang="EN-US">20</span>元礼券一张,升级至银卡会员可获得价值25元纸杯蛋糕买一赠一优惠券一张<br>
<span lang="EN-US">4.3 </span>金卡会员独享礼遇：<span lang="EN-US">&nbsp;<br>
4.3.1 </span>每盒蛋糕可免费获得两个数字蜡烛、一张贺卡，生日眼镜，全年购买正价商品<span lang="EN-US">95</span>折（不含餐具运费部分）<span lang="EN-US">&nbsp;<br>
4.3.2 </span>金卡会员本人和两位亲友生日当月均可获赠价值<span lang="EN-US">20</span>元礼券<span lang="EN-US">&nbsp;<br>
4.4 </span>白金卡会员独享礼遇：<span lang="EN-US">&nbsp;<br>
4.4.1<span class="apple-converted-space">&nbsp;</span></span>每盒蛋糕可免费获得两个数字蜡烛、一张贺卡，</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">生日眼镜，</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">全年购买正价商品<span lang="EN-US">9</span>折（不含餐具运费部分）<span lang="EN-US">&nbsp;<br>
4.4.2 </span>白金卡会员本人和两位亲友生日当月均可获赠价值<span lang="EN-US">40</span>元礼券<span lang="EN-US">&nbsp;<br>
4.4.3 </span>在本年度新品上市期间，可获赠<span lang="EN-US">1</span>次新品试吃装，试吃产品以派悦坊公布信息为准（免费递送范围：详见派悦坊派送须知）<span lang="EN-US">&nbsp;<o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4.5 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">所有会员在本方案实施之日起任意连续<span lang="EN-US">12</span>个月内消费满<span lang="EN-US">3</span>次，且每次消费金额满<span lang="EN-US">80</span>元，可获得<span lang="EN-US">3</span>次里程碑奖励，里程碑奖励计算消费次数为<span lang="EN-US">1</span>次<span lang="EN-US">/</span>天。<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4.5.1 3</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">次消费里程碑奖励<span lang="EN-US">10</span>元里程碑优惠券一张，优惠券有效期以实际发放为准<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4.6 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">普通会员在本方案实施之日起任意连续<span lang="EN-US">12</span>个月内消费满<span lang="EN-US">6</span>次，且每次消费金额大于<span lang="EN-US">80</span>元，可获得<span lang="EN-US">6</span>次里程碑奖励，里程碑奖励计算消费次数为<span lang="EN-US">1</span>次<span lang="EN-US">/</span>天。<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4.6.1 6</span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">次消费里程碑奖励价值<span lang="EN-US">25</span>元纸杯蛋糕买一赠一优惠券一张，优惠券有效期以实际发放为准<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">4.6.2 </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">白金卡会员在会员有效期内每消费<span lang="EN-US">6</span>次获得<span lang="EN-US">6</span>次消费里程碑奖励，<span lang="EN-US"><o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US"><o:p>&nbsp;</o:p></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;color:#330000" lang="EN-US">5. </span><span style="font-size:10.5pt;font-family:华文细黑;color:#330000">积分换购：<span lang="EN-US">&nbsp;<br>
5.1 </span>积分从获得当日起<span lang="EN-US">2</span>年内有效，换购消耗的积分不会影响会员保级或晋级<span lang="EN-US">&nbsp;<br>
5.2 </span>具体标准：<span lang="EN-US">&nbsp;<br>
5.2.1 3000</span>积分可兑换价值<span lang="EN-US">150</span>元的中号纸杯蛋糕一盒（<span lang="EN-US">6</span>只装）<span lang="EN-US">&nbsp;<br>
5.2.2 4000</span>积分可兑换任意价值<span lang="EN-US">180</span>元的迷你纸杯礼盒 （<span lang="EN-US">12</span>只装）<br>
<span lang="EN-US">5.3 </span>换购标准和产品将有定期更新，具体情况请参考派悦坊官网<span lang="EN-US">&nbsp;<o:p></o:p></span></span></p>

<p style="margin: 0cm 0cm 0.0001pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</p>

<p style="margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000" lang="EN-US">6. </span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">&nbsp;</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">本方案从</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">2016</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">年</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">12</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">月</span><i style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">3</i><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;">日起实施</span><span style="color: rgb(51, 0, 0); font-family: 华文细黑; font-size: 14px;" lang="EN-US">&nbsp;</span></p>

<p style="margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000" lang="EN-US">7. </span><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000">礼品卡<span lang="EN-US">/</span>储值卡与会员卡的关系：<span lang="EN-US">&nbsp;<br>
7.1 </span>由于储值卡持有人已享有一次性储值带来的折扣便利，恕不能同时享受会员待遇<span lang="EN-US">&nbsp;</span></span><span style="font-size: 10.5pt; font-family: 华文细黑;" lang="EN-US"><o:p></o:p></span></p>

<p style="margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000" lang="EN-US">8. </span><span style="font-size:10.5pt;font-family:华文细黑;
color:#330000">协议的变更和中止：<span lang="EN-US">&nbsp;<br>
8.1 </span>对这些条款的任何修改将被包含在派悦坊网站的更新的条款中。<br>
如果任何变更被认定为无效、废止或因任何原因不可执行，则该变更是可分割的，<br>
且不影响其它变更或条件的有效性或可执行性。</span><span style="font-size: 10.5pt; font-family: 华文细黑;" lang="EN-US"><o:p></o:p></span></p>

<p style="margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 10.5pt; font-family: 华文细黑;" lang="EN-US"><o:p></o:p></span></p>

<p style="margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</p>

<p>&nbsp;</p>

</div><div class="footer text-muted">

<div class="wide-main in-media-main clearfix">
  <div class="page-line"></div>
  <header class="page-header" >
    <h2>友情连接<cite>  链接招商QQ:971890885</cite></h2>
  </header>
  <article>
    <ul class="link" style=" overflow:hidden;zoom:1;"> 
      @forelse ($link as $v)
      <li style="margin-right:10px;float:left;list-style-type:none;">
        <a href="{{ $v->url }}" title="{{ $v->name }}" target="_blank">{{ $v->name }}</a>
      </li>
      @empty
      <li style="margin-right:10px;float:left;list-style-type:none;">
        <a href="###" title="企业网站制作" target="_blank">友情链接招商中</a>
      </li>
      @endforelse
    </ul>
  </article>
</div>


<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 hidden-xs">
<table>
<tbody><tr>
<td class="footer-block not-last">
<img alt="Ui0813 66" class="telephone-image-size" src="../Pantry/UI0813_66-72ee903a77275de7b02b28b3e65fc14e.png">
<div class="info">
订购邮箱
</div>
<div class="info">
order@pantrysbest.com
</div>
<div class="info">
北京市朝阳区神路街39号10幢3层4段92-93
</div>
</td>
<td class="footer-block not-last">
<div class="info">
官方微信
</div>
<div class="info">
<img alt="Weixin" src="../Pantry/weixin-b3b3cf5f9459b27c66749fd74316f293.jpg" width="70px">
</div>
</td>
<td class="footer-block">
<img alt="Brand icons" id="brand-icons" src="../Pantry/brand-icons-b7a42d80596318922d6f6fb848166249.png">
</td>
</tr>
</tbody></table>
</div>
</div>
<div class="visible-xs" id="phone-number">
<a href="tel:4008314159">
<i class="fa fa-phone"></i>
4008-3-14159
</a>
</div>
<div id="icp">
Copyright 2010-2016 派悦坊，Ltd 京ICP备12046340
</div>
</div>
<img alt="Christmas bottom" src="../Pantry/christmas-bottom-adb5998daa7310e3fbbadf6abb368748.png" style="width: 100%">
</div><div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content"></div>
</div>
</div>
<!-- / baidu统计的代码 -->
<script type="text/javascript" async="" src="../Pantry/r.js"></script><script>
  (function() {
    var hm = document.createElement("script");
    hm.src = "//hm.baidu.com/hm.js?644047433451f3c44613b4c1c0bdfc9b";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
</script>
<!-- /%script -->
<!-- /  var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); -->
<!-- /  document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F047cd2678d05616ac86ca9ee9529034c' type='text/javascript'%3E%3C/script%3E")); -->
<!-- /:javascript -->
<!-- /  var _mvq = window._mvq || []; -->
<!-- /  window._mvq = _mvq; -->
<!-- /  _mvq.push(['$setAccount', 'm-141528-0']); -->
<!-- /  _mvq.push(['$logConversion']); -->
<!-- /  (function() { -->
<!-- /    var mvl = document.createElement('script'); -->
<!-- /    mvl.type = 'text/javascript'; mvl.async = true; -->
<!-- /    mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js'); -->
<!-- /    var s = document.getElementsByTagName('script')[0]; -->
<!-- /    s.parentNode.insertBefore(mvl, s); -->
<!-- /  })(); -->
<script>
  var _paiyuer = _paiyuer || [];
  _paiyuer.push(['i', '7j-Dyf']);
  _paiyuer.push(['domain','t.paiyue.com']);
  (function(d) {
  var s = d.createElement('script');s.type = 'text/javascript';s.async = true;
  s.src = ('https:'===location.protocol?'https://f.paiyue.com':'http://f.py0.cc')+'/j/3/r.js';
  var e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e);
  })(document);
</script>
<noscript>
<img src='//t.paiyue.com/rtg.gif?i=7j-Dyf' style='display:none;'>
</noscript></body></html>