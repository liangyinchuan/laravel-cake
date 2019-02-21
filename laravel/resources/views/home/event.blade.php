<!DOCTYPE html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
<head>
<!-- /%title Pantry's Best，派悦坊－代表高品质的西式甜品，和永无止尽的创意乐趣 -->
@foreach($config as $v)
<title>{{ $v->title }}</title>
<link data-turbolinks-track="true" href="{{ asset('Css/application-42defd1b11ba9a8c6eab7b7db18f7e3a.css') }}" media="all" rel="stylesheet" /><script data-turbolinks-track="true" src="{{ asset('Scripts/application-8b32bcae09ff141a318b438e226ce68e.js') }}"></script><script src="{{ asset('Scripts/wxlogin.js') }}" type='text/javascript'></script>
<!-- /%link{"rel"=>"stylesheet", "href"=>"/jquery-ui.min.css"} -->
<!-- /%script{type: 'text/javascript', src: "/jquery-ui.js"} -->
<!-- //[if lt IE 9] -->
<meta content='IE=edge' http-equiv='X-UA-Compatible'>
<meta content='width=device-width, initial-scale=1' name='viewport'>
<meta content='{{ $v->description }}' name='description'>
<meta content='{{ $v->keywords }}' name='keywords'>
<!-- /%script{type: 'text/javascript', src: "/css3-mediaqueries.js"} -->
<!--[if lt IE 9]>
<script src='../Scripts/es5-shim-min.js' type='text/javascript'></script>
<script src='../Scripts/html5shiv.min.js' type='text/javascript'></script>
<script src='../Scripts/pie.js' type='text/javascript'></script>
<script src='../Scripts/respond.min.js' type='text/javascript'></script>
<![endif]-->
<!-- / baidu统计的代码 -->

<script>
  var _hmt = _hmt || [];
  _hmt.push(['_setAccount', '644047433451f3c44613b4c1c0bdfc9b']);
</script>
<meta content="authenticity_token" name="csrf-param" />
<meta content="O2OpTvv7BC7tX4IbfDSwMmi8bA1uqxtwq1Sw7WrjY8I=" name="csrf-token" /></head>
<body style="background-color:#FCD8E0;">
<style>
  .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus{
    background-color: #9c1e2e
  }
  #toggle-mobile-dropdown-nav.expanded{
    background-color: #9c1e2e
  }
</style>
<div data='null' id='user-data'></div>
<div data='{"id":10603283,"created_at":"2016-12-14T07:23:32.063Z","updated_at":"2016-12-14T07:23:32.063Z","item_ids":[],"productsTotal":0.0,"utensilsTotal":0,"earliestDeliveryDate":null,"undeliverDate":{"1":[],"2":[],"3":[],"4":[]}}' id='shopping-cart-data'></div>
<div class='hidden-xs navbar navbar-default navbar-fixed-top navbar-static-top' role='navigation'>
<div class='container'>
<div class='navbar-header'>
<div class='navbar-brand'>
<a href='/home'><img alt="Christmas logo" src='{{ asset("uploads/$v->logo") }}' /></a>
<!-- / %a{href: "/"}= image_tag('logo-normal.png') -->
</div>
</div>
@endforeach
<ul class='nav navbar-nav middle-nav-ul hidden-xs'>
<li class='middle-nav-ul-li'>
|
</li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
产品列表
<span class='caret'></span>
</a>
<ul class='dropdown-menu' role='menu'>
    @foreach($list as $v)
        <li>
          <a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a>
        </li>
    @endforeach
</ul>
</li>
<li class='middle-nav-ul-li'>
|
</li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
寻找我们
<span class='caret'></span>
</a>
<ul class='dropdown-menu' role='menu'>
<li>
<a href='/home/find'>门店</a>
</li>
<li>
<a href='/home/send'>配送须知</a>
</li>
</ul>
</li>
<li class='middle-nav-ul-li'>
|
</li>
<li>
<a class='navbar-font-color' href="{{asset('home/event')}}">活动</a>
</li>
<li class='middle-nav-ul-li'>
|
</li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
关于
<span class='caret'></span>
</a>
<ul class='dropdown-menu' role='menu'>
<li>
<a href='/home/huiyuan'>会员</a>
</li>
<li>
<a href='/home/women'>我们</a>
</li>
<li>
<a href='/home/liping'>礼品卡</a>
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
<ul class='nav navbar-nav navbar-right hidden-xs'>
  <li id='sign-in-item'>
    <a href='/home/login'>登录</a>
  </li>
  <li id='sign-up-item'>
    <a href='/home/register'>注册</a>
  </li>
   <li><a href=" {{ url('home/buycar') }}" style="background:url('/images/car.png') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
</ul>
@endif

</div>
</div>

<div class='navbar navbar-default navbar-static-top navbar-fixed-top visible-xs mobile-header-nav' role='navigation'>
<div class='container' id='mobile-header-nav'>
<div class='navbar-header'>
<span id='toggle-mobile-dropdown-nav' style='width: 18%;text-align: left;'>未登录</span>
<div class='navbar-brand' style='width: 64%;text-align: center;padding-left: 5px;padding-right: 5px;'>
<a href='/'><img alt="Christmas logo" src="Picture/christmas-logo-2eda8a4166a8d5485d880232238f461f.png" /></a>
<!-- / %a{href: "/"}= image_tag('logo-normal.png') -->
</div>
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-text.png') -->
<!-- /%a.navbar-brand{href: "/", style: "padding-top:12px;"}= image_tag('logo-text-new.png',style: "max-height:20px;") -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-heisenlin.png') -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-shumei.png') -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-frog.png') -->
<!-- /%a.navbar-brand{href: "/"}= image_tag('logo-qixi-2015.png') -->
<a class='toggle-mobile-telephone-nav visible-xs' href='tel:4008314159' style='width: 18%;text-align: right'>
<i class='fa fa-phone pantry-green-font'></i>
</a>
</div>
<ul class='nav navbar-nav navbar-right' id='mobile-navbar-right'>
<li id='sign-in-item'>
<a href='/users/sign_in'>登录</a>
</li>
<li id='sign-up-item'>
<a href='/users/sign_up'>注册</a>
</li>
<li class='dropdown hidden-md hidden-sm visible-xs'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
产品目录
<span class='caret'></span>
</a>
<ul class='dropdown-menu' role='menu'>
<li>
<a href='/cities/beijing/categories/christmas-specials'>圣诞精选</a>
</li>
<li>
<a href='/cities/beijing/categories/disney'>迪士尼系列</a>
</li>
<li>
<a href='/cities/beijing/categories/gift-box'>礼盒</a>
</li>
<li>
<a href='/cities/beijing/categories/cakes'>蛋糕</a>
</li>
<li>
<a href='/cities/beijing/categories/cupcakes'>纸杯蛋糕</a>
</li>
<li>
<a href='/cities/beijing/categories/pies'>派</a>
</li>
<li>
<a href='/cities/beijing/categories/tartlets'>挞</a>
</li>
<li>
<a href='/card'>礼品卡</a>
</li>
</ul>
</li>
<li class='dropdown hidden-md hidden-sm visible-xs'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
城市
<span class='caret'></span>
</a>
<ul class='dropdown-menu' role='menu'>
<li>
<a href='/cities/beijing'>北京</a>
</li>
<li>
<a href='/cities/shanghai'>上海</a>
</li>
<li>
<a href='/cities/hangzhou'>杭州</a>
</li>
<li>
<a href='/cities/tianjin'>天津</a>
</li>
</ul>
</li>
<li class='dropdown hidden-md hidden-sm visible-xs'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
寻找我们
<span class='caret'></span>
</a>
<ul class='dropdown-menu' role='menu'>
<li>
<a href='/stores'>门店</a>
</li>
<li>
<a href='/pages/bjdinggouxuzhi'>配送须知</a>
</li>
</ul>
</li>
<li class='dropdown hidden-md hidden-sm visible-xs'>
<a class='navbar-font-color' href='/events'>活动</a>
</li>
<li class='dropdown hidden-md hidden-sm visible-xs'>
<a class='navbar-font-color' href='/pages/huiyuan'>会员</a>
</li>
<li class='dropdown hidden-md hidden-sm visible-xs'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
关于
<span class='caret'></span>
</a>
<ul class='dropdown-menu' role='menu'>
<li>
<a href='/home/huiyuan'>会员</a>
</li>
<li>
<a href='/pages/ninhao'>我们</a>
</li>
<li>
<a href='/pages/lipinka'>礼品卡</a>
</li>
</ul>
</li>
<!-- /%li.dropdown.hidden-md.hidden-sm.visible-xs -->
<!-- /  %a.white{href: "/pages/zhaopin"} 加入我们 -->
<li id='shopping-cart-summary-nav'>
<a class='navbar-font-color' href='/shopping-cart'>
<i class="fa fa-shopping-cart"></i>
<span class='hidden-sm'>购物车</span>
</a>
</li>
</ul>
</div>
<div class='container pantry-height-5px'></div>
<a href='/'>
<div class='col-xs-3 mobile-nav-index'>
<div class='col-xs-12 no-padding'>
<i class='fa fa-home'></i>
</div>
<div class='col-xs-12 no-padding'></div>
首页
</div>
</a>
<a href='/cities/beijing/categories/cakes'>
<div class='col-xs-3 mobile-nav-index'>
<div class='col-xs-12 no-padding'>
<i class='fa fa-list-alt'></i>
</div>
<div class='col-xs-12 no-padding'>
产品列表
</div>
</div>
</a>
<a href='/users/sign_in'>
<div class='col-xs-3 mobile-nav-index'>
<div class='col-xs-12 no-padding'>
<i class='fa fa-user'></i>
</div>
<div class='col-xs-12 no-padding'>
个人中心
</div>
</div>
</a>
<a href='/shopping-cart'>
<div class='col-xs-3 mobile-nav-index'>
<div class='col-xs-12 no-padding'>
<i class='fa fa-shopping-cart'></i>
</div>
<div class='col-xs-12 no-padding'>
购物车
</div>
</div>
</a>
</div>
<div class='hidden-xs' style='height: 50px;'></div>
<div class='visible-xs' style='height: 85px;'></div>
<div data='2015/08/05' id='activity-20150805-start'></div>
<div data='2015/08/22' id='activity-20150805-end'></div>

<div id="activities-container">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-2 hidden-xs">


</div>
<div class="col-sm-8">
<div id="event-container">
@foreach($event as $v)
<p><img alt="" src='{{ asset("images/event/$v->pic") }}' style="width: 100%;"></p>

<h3><span style="font-size: 14px;">活动时间：{{ $v->time }}<br>
活动规则：<br>
<p>{{ $v->rule }} </p></span></h3>

<h3>&nbsp;</h3>
@endforeach
</div>


</div>
<div class="col-sm-1"></div>
</div>
</div>
<div class="footer text-muted">

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
Copyright 2010-2017 派悦坊，Ltd 京ICP备12046340
</div>
</div>
<img alt="Christmas bottom" src="../Pantry/christmas-bottom-adb5998daa7310e3fbbadf6abb368748.png" style="width: 100%">
</div><div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content"></div>
</div>
</div>
<!-- / baidu统计的代码 -->
<script type="text/javascript" async="" src="{{ asset('Pantry_files/r.js') }}")></script><script>
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