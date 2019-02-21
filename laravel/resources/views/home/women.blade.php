<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
<a href="/home"><img alt="logo" src='{{ asset("uploads/$logo") }}'></a>
<!-- / %a{href: "/"}= image_tag('logo-normal.png') -->
</div>
</div>
<ul class="nav navbar-nav">
<li class="dropdown">
</ul>
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
        <a href="/home/logout" rel="nofollow" data-no-turbolink="">退出</a>
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
<a href="home/login">登录</a>
</li>
<li id="sign-up-item">
<a href="home/register">注册</a>
</li>
    <li>
        <a href=" {{ url('home/buycar') }}" style="background:url('/images/car.png') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;购物车</a>
    </li>
</ul>
@endif

</div>
</div>

<div class="navbar navbar-default navbar-static-top navbar-fixed-top visible-xs mobile-header-nav" role="navigation">
<div class="container" id="mobile-header-nav">
<div class="navbar-header">
<span id="toggle-mobile-dropdown-nav" style="width: 18%;text-align: left;">未登录</span>
<div class="navbar-brand" style="width: 64%;text-align: center;padding-left: 5px;padding-right: 5px;">
<a href="/home/"><img alt="Christmas logo" src="1Pantry%27s%20Best%20%E6%B4%BE%E6%82%A6%E5%9D%8A%EF%BC%8C%E6%B4%BE%E9%80%81%E5%96%9C%E6%82%A6_files/christmas-logo-2eda8a4166a8d5485d880232238f461f.png"></a>
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
<a href="/home/users/sign_in">登录</a>
</li>
<li id="sign-up-item">
<a href="/home/users/sign_up">注册</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
产品目录
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="/home/cities/shanghai/categories/christmas-specials">圣诞精选</a>
</li>
<li>
<a href="/home/cities/shanghai/categories/disney">迪士尼系列</a>
</li>
<li>
<a href="/home/cities/shanghai/categories/gift-box">礼盒</a>
</li>
<li>
<a href="/home/cities/shanghai/categories/cakes">蛋糕</a>
</li>
<li>
<a href="/home/cities/shanghai/categories/cupcakes">纸杯蛋糕</a>
</li>
<li>
<a href="/home/cities/shanghai/categories/pies">派</a>
</li>
<li>
<a href="/home/cities/shanghai/categories/tartlets">挞</a>
</li>
<li>
<a href="/home/card">礼品卡</a>
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
<a href="/home/cities/beijing">北京</a>
</li>
<li>
<a href="/home/cities/shanghai">上海</a>
</li>
<li>
<a href="/home/cities/hangzhou">杭州</a>
</li>
<li>
<a href="/home/cities/tianjin">天津</a>
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
<a href="/home/stores">门店</a>
</li>
<li>
<a href="/home/pages/shdinggouxuzhi">配送须知</a>
</li>
</ul>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="navbar-font-color" href="/home/events">活动</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="navbar-font-color" href="/home/pages/huiyuan">会员</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
关于
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li>
<a href="/home/pages/huiyuan">会员</a>
</li>
<li>
<a href="/home/pages/ninhao">我们</a>
</li>
<li>
<a href="/home/pages/lipinka">礼品卡</a>
</li>
</ul>
</li>
<!-- /%li.dropdown.hidden-md.hidden-sm.visible-xs -->
<!-- /  %a.white{href: "/pages/zhaopin"} 加入我们 -->
<li id="shopping-cart-summary-nav">
<a class="navbar-font-color" href="/home/shopping-cart">
<i class="fa fa-shopping-cart"></i>
<span class="hidden-sm">购物车</span>
</a>
</li>
</ul>
</div>
<div class="container pantry-height-5px"></div>
<a href="/home/">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-home"></i>
</div>
<div class="col-xs-12 no-padding"></div>
首页
</div>
</a>
<a href="/home/cities/shanghai/categories/cakes">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-list-alt"></i>
</div>
<div class="col-xs-12 no-padding">
产品列表
</div>
</div>
</a>
<a href="/home/users/sign_in">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-user"></i>
</div>
<div class="col-xs-12 no-padding">
个人中心
</div>
</div>
</a>
<a href="/home/shopping-cart">
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
<p><span style="color:#330000"><strong><span style="font-size:22px">您好，我是派悦坊！</span></strong></span>&nbsp; &nbsp; &nbsp; &nbsp;</p>

<p><span style="color:#330000"><span style="font-size:16px">&nbsp; 
&nbsp; &nbsp; &nbsp; 派悦坊的创始人Mark Huetsch 
来自美国烘焙世家。毕业于斯坦福计算机系的他，从小学习西点烘焙，并在家族经典技法的基础上，用创意和科技制作梦想中的西式甜品。2006年，Mark来
到中国学习中文，他不仅爱上了这个国家，也遇到了怀着同样梦想的北京姑娘王倞。2009年，两个热爱甜品的年轻人共同创立了派悦坊，并立志要带来“高品质
的西式甜品”。</span></span></p>

<p><span style="color:#330000"><span style="font-size:16px">&nbsp; 
&nbsp; &nbsp; 
&nbsp;创立伊始，派悦坊凭借纯正、高品质的派，迅速获得了甜品爱好者们的认可。旅居中国的美国食评家，甚至将派悦坊的产品与纽约米其林星级餐厅的派
品相提并论。为了满足中国消费者口味，派悦坊陆续推出多款创意蛋糕，将风靡纽约的纸杯蛋糕、红丝绒蛋糕带来中国，通过网络销售，将甜蜜惊喜派送到每一位顾
客手中。</span></span></p>

<p><span style="color:#330000"><span style="font-size:16px">&nbsp; 
&nbsp; &nbsp; &nbsp; 2012年9月，派悦坊实现品牌升级，并将英文名称改为“Pantry's 
Best”（中文直译为“厨房的压箱宝”）。&nbsp;如今的派悦坊，不仅代表高品质的西式甜品，还有永无止尽的创意和乐趣，和打开盒子时满满的惊喜。</span></span></p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 注：派悦坊 Pantry's Best 的中英文名称是北京派悦坊餐饮管理有限公司的注册商标。</p>

<p><img alt="" class="img-responsive" src="../Pantry/content_1050.jpg" style="display:inline-block"></p>

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