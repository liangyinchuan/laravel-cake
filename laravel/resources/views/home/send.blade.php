 <!DOCTYPE html>
<html>
<head>
@foreach($config as $v)
<title>{{ $v->title }}</title>
<link data-turbolinks-track="true" href="{{ asset('Css/application-42defd1b11ba9a8c6eab7b7db18f7e3a.css') }}" media="all" rel="stylesheet" /><script data-turbolinks-track="true" src="{{ asset('Scripts/application-8b32bcae09ff141a318b438e226ce68e.js') }}"></script><script src="{{ asset('Scripts/wxlogin.js') }}" type='text/javascript'></script>
<meta content='IE=edge' http-equiv='X-UA-Compatible'>
<meta content='width=device-width, initial-scale=1' name='viewport'>
<meta content='{{ $v->description }}' name='description'>
<meta content='{{ $v->keywords }}' name='keywords'>


<script>
  var _hmt = _hmt || [];
  _hmt.push(['_setAccount', '644047433451f3c44613b4c1c0bdfc9b']);
</script>
<meta content="authenticity_token" name="csrf-param" />
<meta content="O2OpTvv7BC7tX4IbfDSwMmi8bA1uqxtwq1Sw7WrjY8I=" name="csrf-token" /></head>
<body  style="background-color:#FCD8E0;">
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
<div data='{"id":1,"chinese_name":"北京"}' id='city-data'></div>
<div data='2015/03/14 15:09:00' id='activity-start-at'></div>
<div data='2015/04/02' id='activity-20150402-start'></div>
<div data='2015/04/10' id='activity-20150402-end'></div>
<div data='2015/07/07' id='activity-20150710-start'></div>
<div data='2015/07/20' id='activity-20150710-end'></div>
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
<a class='navbar-font-color' href='/home/event'>活动</a>
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
<ul class='nav navbar-nav navbar-right hidden-xs'>
  <li id='sign-in-item'>
    <a href='home/login'>登录</a>
  </li>
  <li id='sign-up-item'>
    <a href='/home/register'>注册</a>
  </li>
   <li><a href=" {{ url('/home/buycar') }}" style="background:url('/images/car.png') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
</ul>
@endif

</div>
</div>

<div class='navbar navbar-default navbar-static-top navbar-fixed-top visible-xs mobile-header-nav' role='navigation'>
<div class='container' id='mobile-header-nav'>
<div class='navbar-header'>
<span id='toggle-mobile-dropdown-nav' style='width: 18%;text-align: left;'>未登录</span>
<div class='navbar-brand' style='width: 64%;text-align: center;padding-left: 5px;padding-right: 5px;'>
<a href='/home'><img alt="Christmas logo" src="Picture/christmas-logo-2eda8a4166a8d5485d880232238f461f.png" /></a>
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
<a href='/home/login'>登录</a>
</li>
<li id='sign-up-item'>
<a href='/home/register'>注册</a>
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

</ul>
</li>

<li class='dropdown hidden-md hidden-sm visible-xs'>
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
<li class='dropdown hidden-md hidden-sm visible-xs'>
<a class='navbar-font-color' href='/home/event'>活动</a>
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
<a class='navbar-font-color' href='/home/buycar'>
<i class="fa fa-shopping-cart"></i>
<span class='hidden-sm'>购物车</span>
</a>
</li>
</ul>
</div>
<div class='container pantry-height-5px'></div>
<a href='/home'>
<div class='col-xs-3 mobile-nav-index'>
<div class='col-xs-12 no-padding'>
<i class='fa fa-home'></i>
</div>
<div class='col-xs-12 no-padding'></div>
首页
</div>
</a>
<a href='#'>
<div class='col-xs-3 mobile-nav-index'>
<div class='col-xs-12 no-padding'>
<i class='fa fa-list-alt'></i>
</div>
<div class='col-xs-12 no-padding'>
产品列表
</div>
</div>
</a>
<a href='/home/heart'>
<div class='col-xs-3 mobile-nav-index'>
<div class='col-xs-12 no-padding'>
<i class='fa fa-user'></i>
</div>
<div class='col-xs-12 no-padding'>
个人中心
</div>
</div>
</a>
<a href='/home/buycar'>
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


<div id="page-container">
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: 华文细黑, 'STHeiti Light', STXihei, 华文细黑, SimHei, 黑体; font-size: 14px; line-height: 20px;"><img alt="" class="img-responsive" src="../Pantry/content_1050.jpg" style="line-height: 20.7999992370605px; display: inline-block;"></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: 华文细黑, 'STHeiti Light', STXihei, 华文细黑, SimHei, 黑体; font-size: 14px; line-height: 20px;"><strong style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 22px;"><span style="box-sizing: border-box; color: rgb(51, 0, 0);"><span style="box-sizing: border-box; font-size: 26px;">订购须知</span></span>&nbsp;&nbsp;&nbsp;<a href="tel:4008314159" style="color: rgb(74, 137, 55); box-sizing: border-box; text-decoration: none; background-color: transparent;"><img alt="" src="../Pantry/content_phone_icons.png" style="border-width: 0px; border-style: initial; box-sizing: border-box; vertical-align: middle; height: 20px; width: 20px;">&nbsp;</a></span></strong><a href="tel:4008314159" style="color: rgb(74, 137, 55); box-sizing: border-box; text-decoration: none; background-color: transparent;"><span style="box-sizing: border-box; color: rgb(130, 196, 17);"><span style="box-sizing: border-box; font-size: 22px;"><span style="box-sizing: border-box; font-size: 18px;">订购热线：4008-3-14159</span></span></span></a></p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: 华文细黑, 'STHeiti Light', STXihei, 华文细黑, SimHei, 黑体; font-size: 14px; line-height: 20px;">&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: 华文细黑, 'STHeiti Light', STXihei, 华文细黑, SimHei, 黑体; font-size: 14px; line-height: 20px;"><strong><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: rgb(51, 0, 0);">配送服务时间：</span></span></strong></p>

<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-family: 华文细黑, 'STHeiti Light', STXihei, 华文细黑, SimHei, 黑体; font-size: 14px; line-height: 20px; list-style-type: circle;">
	<li style="box-sizing: border-box;">
	<p><span style="box-sizing: border-box; color: rgb(0, 0, 0);">我们的客服在线时间为每天9:00-21:00；送货时间是10:00-21:00</span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="box-sizing: border-box; color: rgb(0, 0, 0);">北京需要提前5小时预订，北京</span><span style="box-sizing: border-box; color: rgb(0, 0, 0); line-height: 22.3999996185303px;">当日订单截止到当日17:00</span><span style="box-sizing: border-box; color: rgb(0, 0, 0);">，</span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="box-sizing: border-box; color: rgb(0, 0, 0);">我们也欢迎您订购之后到门店自取</span></p>
	</li>
</ul>

<p style="line-height: 20.7999992370605px;">&nbsp;</p>

<p style="line-height: 20.7999992370605px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="color: rgb(51, 0, 0); font-size: 14px; line-height: 20px;">北京门店地址：</span></strong></span></p>

<p>日坛店：朝阳区神路街39号日坛上街3层92-93号（日坛公园北门对面），营业时间：10:00-21:00 &nbsp;联系电话：010-85626670</p>

<p>&nbsp;颐堤港店：北京酒仙桥路18号颐堤港购物中心三层73号商铺，营业时间：10:00-22:00 &nbsp;联系电话：010-84176259</p>

<p style="line-height: 20.7999992370605px;">&nbsp;</p>

<p style="line-height: 20.7999992370605px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><span style="color: rgb(51, 0, 0); font-size: 14px; line-height: 20px;">圣诞自提点（12月24-25日 10:00-20:00）：​&nbsp;</span></strong></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">和平里&nbsp;<br>
朝阳区和平街十三区35号楼煤炭大厦门口（北二环小街桥向北和平里东街与青年沟路交叉口东北角）</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">国贸 &nbsp;<br>
财富中心A座西北角悠泊服务站（近金台夕照A口，千禧大酒店对面）</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">中关村&nbsp;<br>
海淀区中关村大街中科大厦B座门口（中关村大街与中关村南路交叉口东北角）</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">霍营&nbsp;<br>
海淀区西三旗旗胜家园SOCO公社29号楼112底商（霍营地铁站A口出向南300米）</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">青塔&nbsp;<br>
西四环青塔西路58号院珠江峰景小区西门</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">西直门&nbsp;<br>
西城区西直门南大街2号成铭大厦门口（地铁西直门站C口出）</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">公主坟<br>
海淀区西三环新兴桥东北角海育大厦一层国美电器门口（地铁公主坟站B口出）</span></span></p>

<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">奥体公园<br>
朝阳区大屯路与天辰东路交叉口西北角（地铁奥林匹克公园站F口出）</span></span></p>

<p>&nbsp;</p>

<p style="line-height: 20.7999992370605px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="font-size: 14px; line-height: 18px;">配送范围：购物满149元即可享受配送服务</span></span></span></p>

<p style="line-height: 20.7999992370605px;"><img alt="" src="../Pantry/content_2016-08-11_10_52_21.png" style="width: 60%;"></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-family:arial,helvetica,sans-serif;"><span style="color:#B22222;"><span style="font-size:14px;">北京市六环以内区域提前5个小时预订均可配送，五环以内全部免费，五环至六环之间部分区域需要加收20-40元送货费。六环以外顾客请约在六环以内的约定地点接收产品(婚礼产品运费标准请咨询客服人员）</span></span></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><strong><font color="#333333">五环到六环之间免费区域</font></strong></span></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="Verdana, serif">a)</font></font></font><font face="宋体"><font color="#333333">东边：朝阳区（机场除外）全部免费</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="Verdana, serif">b)</font></font></font><font color="#333333"><font face="宋体">西边：海淀区植物园、香山南路以东、八大处路以东免费 、石景山区全部免费</font></font><font color="#333333"><font face="宋体"> 、丰台区全部免费</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="Verdana, serif">c)</font></font></font><font face="宋体"><font color="#333333">南边：大兴区芦求路以东全部免费</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="Verdana, serif">d)</font></font></font><font face="宋体"><font color="#333333">北边：六环内昌平区京承高速以西、八达岭高速以东全部免费、上庄路以东沙阳路以南全部免费</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><strong><font color="#333333">五环到六环之间20</font></strong><font color="#333333"><strong>元外送费区域&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;</font></span></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体"><font color="#333333">海淀区：上庄路以西稻香湖路以东</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体"><font color="#333333">昌平区：京藏高速以西、沙阳路以北区域</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体"><font color="#333333">房山区：长阳路以北、京良路以南</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体"><font color="#333333">通州区：通州八里桥、九棵树、通州北苑、新华联、次渠镇、马驹桥镇</font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><font color="#333333">顺
义区：机场生活区、天竺镇、空港工业区、后沙峪、新国
展&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;</font></span></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><font color="#333333">大
兴区: 芦求路以西&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</font></span></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><strong><font color="#333333">五环至六环之间40元送货区域</font></strong></span></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="华文细黑, serif">a)</font></font></font><font face="宋体"><font color="#333333"><font face="华文细黑">海淀区：苏家坨</font></font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="华文细黑, serif">b)</font></font></font><font face="宋体"><font color="#333333"><font face="华文细黑">顺义区：南法信、机场东路</font></font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="华文细黑, serif">c)</font></font></font><font face="宋体"><font color="#333333"><font face="华文细黑">通州区：台湖镇、武夷花园、土桥</font></font></font></span></p>

<p style="page-break-inside: avoid; widows: 1" align="LEFT"><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="华文细黑, serif">d)</font></font></font><font face="宋体"><font color="#333333"><font face="华文细黑">房山区：长阳路以南</font></font></font></span></p>

<p><span style="font-size:14px;"><font face="宋体, serif"><font color="#333333"><font face="华文细黑, serif">e)</font></font></font>门头沟区六环内部分</span></p>

<p>&nbsp;</p>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: 华文细黑, 'STHeiti Light', STXihei, 华文细黑, SimHei, 黑体; font-size: 14px; line-height: 20px;"><strong><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;">产品食用小贴士：</span></span></span></strong></p>

<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-family: verdana, arial, helvetica, sans-serif; line-height: 18px; list-style-type: circle;">
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">所有产品均为当天现做，不含防腐剂，建议24小时使用完毕</span></span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">纸杯蛋糕类含有黄油和乳酪，如冷藏保存，建议在常温下回温1小时候再食用，风味更佳</span></span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">苹果派加热后食用，风味更佳</span></span></span></span></p>
	</li>
</ul>

<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: verdana, arial, helvetica, sans-serif; line-height: 18px;"><strong><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">产品规格</span></span></span></span></strong></p>

<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-family: verdana, arial, helvetica, sans-serif; line-height: 18px; list-style-type: circle;">
	<li style="box-sizing: border-box;">
	<p><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">6吋蛋糕直径15cm，适合4-6人食用，标配餐具是6份</span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">8<b style="box-sizing: border-box;">吋</b>蛋糕直径20cm，适合7-10人食用，标配餐具是10份</span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">10吋蛋糕直径25cm，适合11-15人食用，标配餐具是15份</span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">12吋蛋糕直径30cm，适合16-20人食用，标配餐具是20份</span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">7吋派直径17.5cm，适合4-6人食用，标配餐具是6份</span></span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">9吋派直径22.5cm，适合6-10人食用，标配餐具是10份</span></span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">时令礼盒通常包含4款产品，适合4-6人食用，标配餐具6份</span></span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">超过标配部分，多需一人份餐具则另收取一元费用。纸杯蛋糕和挞通常不配餐具，适合直接食用</span></span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">蜡烛：可提供2种蜡烛，普通彩色细长（免费），数字蜡烛（3元/只）</span></span></span></span></p>
	</li>
	<li style="box-sizing: border-box;">
	<p><span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(0, 0, 0);"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-size: 14px;">白色巧克力字牌：最多写八个汉字，或十五个英文字母，建议字体不要太复杂，热派上不适宜放置字牌</span></span></span></span></p>
	</li>
</ul>

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
<img alt="Christmas bottom" src="{{asset('./Pantry/christmas-bottom-adb5998daa7310e3fbbadf6abb368748.png')}}" style="width: 100%">
</div><div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content"></div>
</div>
</div>
<!-- / baidu统计的代码 -->
<script type="text/javascript" async="" src="{{ asset('Pantry_files/r.js') }}"></script><script>
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
</noscript>
</body>
</html>