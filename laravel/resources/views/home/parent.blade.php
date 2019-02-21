<!DOCTYPE html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- /%title Pantry's Best，派悦坊－代表高品质的西式甜品，和永无止尽的创意乐趣 -->
<title>Pantry's Best 派悦坊，派送喜悦</title>
<link data-turbolinks-track="true" href="{{ asset('css/itemcss/application-ee266d495e1719618c4b89056f8d806f.css') }}" media="all" rel="stylesheet">
<script charset="utf-8" src="Pantry%27s%20Best%20%E6%B4%BE%E6%82%A6%E5%9D%8A%EF%BC%8C%E6%B4%BE%E9%80%81%E5%96%9C%E6%82%A6_files/v.htm"></script>
<script src="{{ asset('js/itemjs/hm.js') }}"></script>
<script data-turbolinks-track="true" src="{{ asset('js/itemjs/app.js') }}"></script>
<style>.cke{visibility:hidden;}</style>
<script src="{{ asset('js/itemjs/wxLogin.js') }}" type="text/javascript"></script>
<!-- /%link{"rel"=>"stylesheet", "href"=>"/jquery-ui.min.css"} -->
<!-- /%script{type: 'text/javascript', src: "/jquery-ui.js"} -->
<!-- //[if lt IE 9] -->
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="派悦坊,非凡创意美味蛋糕、经典纸杯蛋糕、大都会红丝绒蛋糕,均坚持选择纯进口原材料,给生日,派对带来不同惊喜，与朋友们、家人分享独一无二的美味快乐！" name="description">
<meta content="蛋糕,网上订购,生日,派对,红丝绒,纸杯蛋糕" name="keywords">
<!-- /%script{type: 'text/javascript', src: "/css3-mediaqueries.js"} -->
<!--[if lt IE 9]>
<script src='/es5-shim-min.js' type='text/javascript'></script>
<script src='/html5shiv.min.js' type='text/javascript'></script>
<script src='/pie.js' type='text/javascript'></script>
<script src='/respond.min.js' type='text/javascript'></script>
<![endif]-->
<!-- / baidu统计的代码 -->

<meta content="authenticity_token" name="csrf-param">
<meta content="RXMUeuDqMsrje3oXAil+YJ+gip6zcb301dikwrxV+lI=" name="csrf-token"></head>
<body style="background-color:#FCD8E0;"><iframe src="javascript:false;" style="display: none;"></iframe>
<style>
  .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus{
    background-color: #9c1e2e
  }
  #toggle-mobile-dropdown-nav.expanded{
    background-color: #9c1e2e
  }
</style>
<div class="hidden-xs navbar navbar-default navbar-static-top" role="navigation">
<div class="container">
<div class="navbar-header">
<div class="navbar-brand">
<a href="/home/"><img alt="Christmas logo" src="{{ asset('images/home/head.png') }}"></a>
<!-- / %a{href: "/"}= image_tag('logo-normal.png') -->
</div>
</div>

<ul class="nav navbar-nav middle-nav-ul hidden-xs">

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
产品列表
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">

    @foreach($lists as $v)
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
                <a href="/home/enshrine">我的收藏</a>
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
请登录
@endif

</div>
</div>

<div class="navbar navbar-default navbar-static-top navbar-fixed-top visible-xs mobile-header-nav" role="navigation">
<div class="container" id="mobile-header-nav">
<div class="navbar-header">
<span id="toggle-mobile-dropdown-nav" style="width: 18%;text-align: left;">15117979551</span>
<div class="navbar-brand" style="width: 64%;text-align: center;padding-left: 5px;padding-right: 5px;">
<a href="https://www.pantrysbest.com/"><img alt="Christmas logo" src="{{ asset('images/home/christmas-logo-2eda8a4166a8d5485d880232238f461f.png') }}"></a>
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
<ul class="nav navbar-nav navbar-right" id="mobile-navbar-right"><li class="dropdown" id="welcome-item">
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
      <a href="/home/enshrine">我的收藏</a>
    </li>

    <li>
      <a href="/home/upuser">个人信息</a>
    </li>
    <li>
      <a data-method="delete" href="/home/logout" rel="nofollow" data-no-turbolink="">退出</a>
    </li>
  </ul>
</li>

<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
产品目录
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">

    @foreach($lists as $v)
    <li>
        <a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a>
    </li>
    @endforeach


</ul>
</li>

<li class="dropdown hidden-md hidden-sm visible-xs">
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
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="navbar-font-color" href="/home/event">活动</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="navbar-font-color" href="/home/huiyuan">会员</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
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
<!-- /%li.dropdown.hidden-md.hidden-sm.visible-xs -->
<!-- /  %a.white{href: "/pages/zhaopin"} 加入我们 -->
<li id="shopping-cart-summary-nav">
<a class="navbar-font-color" href="/home/buycar">
<i class="fa fa-shopping-cart"></i>
<span class="hidden-sm">购物车</span>
</a>
</li>
</ul>
</div>
<div class="container pantry-height-5px"></div>
<div style="margin-top: -5px"></div>
</div><div class="visible-xs" style="height: 40px;"></div>
<div class="container crm-container pantry-padding-0px">
@yield('body')
</div>

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

</body>
</html>