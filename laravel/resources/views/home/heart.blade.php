@extends('home.parent')

@section('body')
<div>
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" >
<div class="crm-left-container navbar-fixed-top hidden-xs" >
<div class="sidebar-tab" >
<a href="#a1" data-reactid=".0.0.0.0" id='b1' onclick="demo1()">
<span class="sidebar-tab" data-reactid=".0.0.0.0.0" >个人信息</span>
</a>
</div>
<div class="sidebar-tab" data-reactid=".0.0.1">
<a href="#a2" data-reactid=".0.0.1.0" id='b2' onclick="demo2()">
<span class="sidebar-tab " data-reactid=".0.0.1.0.0"  >个人积分</span>
</a>
</div>
<div class="sidebar-tab" data-reactid=".0.0.2">
<a href="#a3" id='b3' onclick="demo3()">
<span class="sidebar-tab "  >特殊要求</span>
</a>
</div>

<div class="sidebar-tab" data-reactid=".0.0.5">
<a href="#a6" data-reactid=".0.0.5.0" id='b6' onclick="demo6()">
<span class="sidebar-tab " data-reactid=".0.0.5.0.0" >我的会员权益</span></a>
</div>
</div>
<div class="col-md-offset-2 col-sm-offset-2 col-md-10 col-sm-10 col-xs-12 crm-right-container" data-reactid=".0.1">
<div class="col-md-12 col-sm-12 col-xs-12 crm-header" data-reactid=".0.1.0">
<img src="{{ asset('images/home/best.png') }}" class="logo hidden-xs" data-reactid=".0.1.0.0">
<span class="visible-xs" data-reactid=".0.1.0.1">会员中心</span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 list-title" data-reactid=".0.1.1">
<b class="icon" data-reactid=".0.1.1.0">&nbsp;</b>
<b data-reactid=".0.1.1.1">欢迎来到派悦坊</b>
<a href="/home/upuser/{{ $list->uid }}/edit" >修改个人信息</a>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.2">
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.2.0">
<div class="col-md-2 col-sm-2 col-xs-4 base-left" data-reactid=".0.1.2.0.0">
<div class="p_name" data-reactid=".0.1.2.0.0.0">总积分</div>
<div class="p_value" data-reactid=".0.1.2.0.0.1">{{ $list->integral }}</div>
</div>
<div class="col-md-10 col-sm-9 col-xs-7 base-right" data-reactid=".0.1.2.0.1">
<div class="list-gray" data-reactid=".0.1.2.0.1.0">您好，亲爱的{{ $list->username }}
</div>
<div class="list-brown" data-reactid=".0.1.2.0.1.1">
<span data-reactid=".0.1.2.0.1.1.0">您目前是{{ ($list->limits)==1?'会员':'管理员' }}</span>
</div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 base-bottom list-info" data-reactid=".0.1.2.1">
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.2.1.2">
<div class="list-gray" data-reactid=".0.1.2.1.2.0">
@if($list->integral > 90000)
	您已成为钻石会员
@elseif($list->integral >= 50000)
	您已成为铂金会员
	<div>
	再购买满 {{90000-$list->integral}} 元升级为钻石会员
	</div>
@elseif($list->integral >= 20000)
	您已成为黄金会员
	<div>
	再购买满 {{50000-$list->integral}} 元升级为铂金会员
	</div>
@elseif($list->integral >= 5000)
	您已成为白金会员
	<div>
	再购买满 {{20000-$list->integral}} 元升级为黄金会员
	</div>
@elseif($list->integral >=1000)
	您已成为青铜会员
	<div>
	再购买满 {{5000-$list->integral}} 元升级为白金会员
	</div>
@elseif($list->integral >= 600)
	您已成为高级会员
	<div>
	再购买满 {{1000-$list->integral}} 元升级为青铜会员
	</div>
@else
    再购买满 600 元升级为高级会员
@endif
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.2.1.3">
<div class="base-point-bg" data-reactid=".0.1.2.1.3.0">
<div style="width:0%;" class="base-point" data-reactid=".0.1.2.1.3.0.0">&nbsp;</div>
</div>
</div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 list-title visible-xs" data-reactid=".0.1.3">
<b class="icon" data-reactid=".0.1.3.0">&nbsp;</b>
<b data-reactid=".0.1.3.1">个人二维码</b>
<b class="fa fa-chevron-right r_icon" data-reactid=".0.1.3.3"></b>
</div>
<div class="col-xs-12 list-info customer-code list-info-container" data-reactid=".0.1.4">
<img src="Pantry%27s%20Best%20%E6%B4%BE%E6%82%A6%E5%9D%8A%EF%BC%8C%E6%B4%BE%E9%80%81%E5%96%9C%E6%82%A6_files/api.png" data-reactid=".0.1.4.0"></div>

<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.5:0">
<a name='a1'></a>
<div class="col-md-12 col-sm-12 col-xs-12 list-title" id="right_list_info" data-reactid=".0.1.5:0.0">
<b class="icon" data-reactid=".0.1.5:0.0.0">&nbsp;</b>
<b data-reactid=".0.1.5:0.0.1">个人信息</b>
<b class="fa fa-chevron-down r_icon" data-reactid=".0.1.5:0.0.2"></b>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 " data-reactid=".0.1.5:0.1">
<div class="list-brown" data-reactid=".0.1.5:0.1.0">姓名：{{ $list->username }}</div>
<div class="list-brown" data-reactid=".0.1.5:0.1.1">会员卡号：{{ $list->memberno }}</div>
<div class="list-brown" data-reactid=".0.1.5:0.1.2">电话号码：{{ $list->phone }}</div>
<div class="list-brown" data-reactid=".0.1.5:0.1.3">生日：{{ $list->birth }}</div>
<div class="list-brown" data-reactid=".0.1.5:0.1.4">亲友1生日：{{ $list->kin1 }}</div>
<div class="list-brown" data-reactid=".0.1.5:0.1.5">亲友2生日：{{ $list->kin2 }}</div>
<div class="list-brown" data-reactid=".0.1.5:0.1.6">您常用的电子邮箱：{{ $list->email }}</div>
<div class="list-brown" data-reactid=".0.1.5:0.1.7">您常用的收件地址：{{ $list->address }}</div>
<a class="col-md-12 col-sm-12 col-xs-12 see-more" href="/home/upuser/{{ $list->uid }}/edit" >修改个人信息 &gt;&gt;</a>
</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.5:1">
<a name="a2"></a>
<div class="col-md-12 col-sm-12 col-xs-12 list-title" id="right_list_point" data-reactid=".0.1.5:1.0">
<b class="icon" data-reactid=".0.1.5:1.0.0">&nbsp;</b>
<b data-reactid=".0.1.5:1.0.1">个人积分</b>
<b class="fa fa-chevron-right r_icon" data-reactid=".0.1.5:1.0.3"></b>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 list-info-container" data-reactid=".0.1.5:1.2">
<div class="list-brown" data-reactid=".0.1.5:1.2.0">消费总积分：{{ $list->integral }}</div>
<div class="list-brown" data-reactid=".0.1.5:1.2.1">会员有效期：永久</div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.5:2">
<a name="a3"></a>
<div class="col-md-12 col-sm-12 col-xs-12 list-title" id="right_list_demand" data-reactid=".0.1.5:2.0">
<b class="icon" data-reactid=".0.1.5:2.0.0">&nbsp;</b>
<b data-reactid=".0.1.5:2.0.1">特殊要求</b>
<b class="fa fa-chevron-right r_icon" data-reactid=".0.1.5:2.0.3"></b>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 list-info-container" data-reactid=".0.1.5:2.3">
<div class="list-brown list-gray" data-reactid=".0.1.5:2.3.0">{{ $list->special }}</div>
<a class="col-md-12 col-sm-12 col-xs-12 see-more" href="/home/upuser/{{ $list->uid }}/edit">修改特殊要求 &gt;&gt;</a>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.5:3">
<a name="a4"></a>


</div>
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.5:4">
<a name="a5"></a>
<div class="col-md-12 col-sm-12 col-xs-12 list-info shopping-cart-coupon-list list-info-container" data-reactid=".0.1.5:4.5">
<div class="list-gray" data-reactid=".0.1.5:4.5.0"></div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 pantry-padding-0px" data-reactid=".0.1.5:5">
<a name="a6"></a>
<div class="col-md-12 col-sm-12 col-xs-12 list-title" id="right_list_huiyuan" data-reactid=".0.1.5:5.0">
<b class="icon" data-reactid=".0.1.5:5.0.0">&nbsp;</b>
<b data-reactid=".0.1.5:5.0.1">我的会员权益</b>
<b class="fa fa-chevron-right r_icon" data-reactid=".0.1.5:5.0.3"></b>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 list-info list-info-container" data-reactid=".0.1.5:5.6">
<div class="list-brown-title" data-reactid=".0.1.5:5.6.0">
<span data-reactid=".0.1.5:5.6.0.0"><img src="{{ asset('images/home/dian.png') }}"></span>
<span class="margin-left-10span" data-reactid=".0.1.5:5.6.0.1">邀请好友注册成功并完成订单后奖励100积分</span>
</div>
<div class="list-brown-title" data-reactid=".0.1.5:5.6.8">
<span data-reactid=".0.1.5:5.6.8.0"><img src="{{ asset('images/home/dian.png') }}"></span>
<span class="margin-left-10span" data-reactid=".0.1.5:5.6.8.1">生日眼镜／单</span>
</div>
</div>
</div>
</div>
</div>
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
<img alt="Ui0813 66" class="telephone-image-size" src="{{ asset('images/home/photo.png') }}">
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

<img alt="Weixin" src="{{ asset('images/home/erwei.jpg') }}" width="70px">

</div>
</td>
<td class="footer-block">
<img alt="Brand icons" id="brand-icons" src="{{ asset('images/home/foot.png') }}">
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
		

	</div> <!-- end of #container -->


	<script src="http://www.lanrenzhijia.com/ajaxjs/1.5.0/jquery-1.5.0.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="lib/js/libs/jquery-1.4.2.min.js"%3E%3C/script%3E'))</script>
	
	
	<script src="{{ asset('js/extremes.js') }}"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('.simple').extremes();
		$('.colors').extremes({
			diameter: 50
		});
		$('.months').extremes({
			diameter: 60
		});
	});
	</script>
<img alt="Christmas bottom" src="{{ asset('images/home/mowei.png') }}" style="width: 100%">
</div><div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content"></div>
</div>
</div>
<!-- / baidu统计的代码 -->
<script type="text/javascript" async="" src="Pantry%27s%20Best%20%E6%B4%BE%E6%82%A6%E5%9D%8A%EF%BC%8C%E6%B4%BE%E9%80%81%E5%96%9C%E6%82%A6_files/r.js"></script>
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

<noscript>
<img src='//t.paiyue.com/rtg.gif?i=7j-Dyf' style='display:none;'>

<script type="text/javascript">
	var b1 = document.getElementById('b1');
	var b2 = document.getElementById('b2');
	var b3 = document.getElementById('b3');
	var b4 = document.getElementById('b4');
	var b5 = document.getElementById('b5');
	var b6 = document.getElementById('b6');

	function demo1()
	{
		b2.removeAttribute('class');
		b3.removeAttribute('class');
		b4.removeAttribute('class');
		b5.removeAttribute('class');
		b6.removeAttribute('class');
		b1.setAttribute('class','current');
	}

	function demo2()
	{
		b1.removeAttribute('class');
		b3.removeAttribute('class');
		b4.removeAttribute('class');
		b5.removeAttribute('class');
		b6.removeAttribute('class');
		b2.setAttribute('class','current');
	}

	function demo3()
	{
		b1.removeAttribute('class');
		b2.removeAttribute('class');
		b4.removeAttribute('class');
		b5.removeAttribute('class');
		b6.removeAttribute('class');
		b3.setAttribute('class','current');
	}

	function demo4()
	{
		b1.removeAttribute('class');
		b2.removeAttribute('class');
		b3.removeAttribute('class');
		b5.removeAttribute('class');
		b6.removeAttribute('class');
		b4.setAttribute('class','current');
	}

	function demo5()
	{
		b1.removeAttribute('class');
		b2.removeAttribute('class');
		b3.removeAttribute('class');
		b4.removeAttribute('class');
		b6.removeAttribute('class');
		b5.setAttribute('class','current');
	}

	function demo6()
	{
		b1.removeAttribute('class');
		b2.removeAttribute('class');
		b3.removeAttribute('class');
		b4.removeAttribute('class');
		b5.removeAttribute('class');
		b6.setAttribute('class','current');
	}
</script>

@stop