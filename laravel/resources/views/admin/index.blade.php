<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="{{ asset('css/pintuer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <script src="{{ asset('js/jquery.js')}}"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="/home" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="/admin/logout/"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul>
    <li><a href="/admin/config" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="/admin/changepassword" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>成员管理</h2>
  <ul>
    <li><a href="/admin/lyc" target="right"><span class="icon-caret-right"></span>成员管理</a></li>
    <li><a href="/admin/lyc/create" target="right"><span class="icon-caret-right"></span>添加用户</a></li>
  </ul>     
  <h2><span class="icon-pencil-square-o"></span>轮播图管理</h2>
  <ul>
    <li><a href="/admin/rotation" target="right"><span class="icon-caret-right"></span>轮播图列表</a></li>
    <li><a href="/admin/uploadrotation/" target="right"><span class="icon-caret-right"></span>添加轮播图</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>分类管理</h2>
  <ul>
    <li><a href="/admin/goodsclass" target="right"><span class="icon-caret-right"></span>分类列表</a></li>
    <li><a href="/admin/goodsclass/create" target="right"><span class="icon-caret-right"></span>添加分类</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>商品管理</h2>
  <ul>
    <li><a href="/admin/goods" target="right"><span class="icon-caret-right"></span>商品列表</a></li>
    <li><a href="/admin/goods/create" target="right"><span class="icon-caret-right"></span>添加商品</a></li>
    <li><a href="/admin/delgoods/" target="right"><span class="icon-caret-right"></span>删除商品</a></li>
  </ul>  
  <h2><span class="icon-pencil-square-o"></span>订单管理</h2>
  <ul>
    <li><a href="/admin/order" target="right"><span class="icon-caret-right"></span>订单列表</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>友情链接</h2>
  <ul>
    <li><a href="/admin/link" target="right"><span class="icon-caret-right"></span>友情链接列表</a></li>  
    <li><a href="/admin/link/create" target="right"><span class="icon-caret-right"></span>添加友情链接</a></li>         
  </ul> 
  <h2><span class="icon-pencil-square-o"></span>收藏管理</h2>
  <ul>
    <li><a href="/admin/enshrine" target="right"><span class="icon-caret-right"></span>收藏列表</a></li>
  </ul>
  <h2><span class="icon-pencil-square-o"></span>活动管理</h2>
  <ul>
    <li><a href="/admin/event" target="right"><span class="icon-caret-right"></span>活动列表</a></li>
    <li><a href="/admin/event/create" target="right"><span class="icon-caret-right"></span>添加活动</a></li>
  </ul>       
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="{{url('admin/count')}}" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="{{url('admin/count')}}" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>