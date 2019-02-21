
<!DOCTYPE html>
<html>
	<head>
		@foreach($config as $v)
		<title>{{ $v->title }}</title>
		<link data-turbolinks-track="true" href="{{ asset('Css/application-42defd1b11ba9a8c6eab7b7db18f7e3a.css') }}" media="all" rel="stylesheet" />
		<script data-turbolinks-track="true" src="{{ asset('Scripts/application-8b32bcae09ff141a318b438e226ce68e.js') }}"></script>
		<script src="{{ asset('Scripts/wxlogin.js') }}" type='text/javascript'></script>
		<meta content='IE=edge' http-equiv='X-UA-Compatible'>
		<meta content='width=device-width, initial-scale=1' name='viewport'>
		<meta content='{{ $v->description }}' name='description'>
		<meta content='{{ $v->keywords }}' name='keywords'>

		<script>
		  var _hmt = _hmt || [];
		  _hmt.push(['_setAccount', '644047433451f3c44613b4c1c0bdfc9b']);
		</script>
		<meta content="authenticity_token" name="csrf-param" />
		<meta content="O2OpTvv7BC7tX4IbfDSwMmi8bA1uqxtwq1Sw7WrjY8I=" name="csrf-token" />
	        
	    <link href="{{asset('css/jquery.slideBox.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('js/jquery-1.7.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.slideBox.js')}}" type="text/javascript"></script>
        <script>
            jQuery(function($){
            	$('#demo1').slideBox();
            	$('#demo2').slideBox({
            		direction : 'top',//left,top#方向
            		duration : 0.3,//滚动持续时间，单位：秒
            		easing : 'linear',//swing,linear//滚动特效
            		delay : 50,//滚动延迟时间，单位：秒
            		startIndex : 1//初始焦点顺序
            	});
            	$('#demo3').slideBox({
            		duration : 0.3,//滚动持续时间，单位：秒
            		easing : 'linear',//swing,linear//滚动特效
            		delay : 50,//滚动延迟时间，单位：秒
            		hideClickBar : false,//不自动隐藏点选按键
            		clickBarRadius : 10
            	});
            	$('#demo4').slideBox({
            		hideBottomBar : true//隐藏底栏
            	});
            });
        </script>
	</head>
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
<a class='navbar-font-color' href='home/event'>活动</a>
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
                <a href="/home/enshrine">我的收藏</a>
            </li>
			<li>
				<a href="/home/heart">个人信息</a>
			</li>
			<li>
				<a href="/home/logout" rel="nofollow" data-no-turbolink="">退出</a>
			</li>
		</ul>
	</li>

	<li id="shopping-cart-summary-nav">

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
	 <li><a href=" {{ url('/home/buycar') }}" style="background:url('/images/car.png') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
        
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
</div>

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

	    @foreach($list as $v)
            <li><a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a></li>
        @endforeach
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
<a class='navbar-font-color' href='/home/huiyuan'>会员</a>
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
<a href='/home/women'>我们</a>
</li>
<li>
<a href='/home/liping'>礼品卡</a>
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

<!-- 	<div class='swiper-container pc-slideshows-swiper' id='front-page-carousel'>
		
		<div class='swiper-wrapper'>
			@foreach ($rotation as $v)
			<div class='swiper-slide'>
				<a href=''>
					<img  src='{{ asset("images/rotation/$v->pic" ) }}'>
				</a>
			</div>
			@endforeach
			
		</div>
		<div class='swiper-pagination pc-swiper-pagination'></div>
	
	</div> -->
	<div id="demo1" class="slideBox" style="width:100%;" >
		<ul class="items">
			@foreach ($rotation as $v)
			<li>
				<a href="home/list/{{ $v->classname }}" title="{{ $v->goodsname }}">
					<img style="width:100%;" src='{{asset("images/rotation/$v->pic" )}}'>
				</a>
			</li>
			@endforeach


		</ul>
	</div>

<div class='container marketing center'>
	<div class='row'>
		<div class='front-page-header'>
			<span class='caret caret-right'></span>
				<b>
					<a href='/home/list'>产品列表</a>
				</b>
		</div>
	</div>
@foreach($goodsclass as $v)
	<div class='row'>
		<div class='col-md-1 col-sm-5 col-xs-6'>
			<div>
				<a href='/home/list/{{ $v->name }}'>
					<img   style="width:170px" alt='{{ $v->name }}' class='img-responsive' src='{{ asset("images/goods/$v->pic" ) }}'>
				</a>
			</div>

			<a class='product-category-link' href='/home/goods'>
				{{ $v->name }}
			</a>
		</div>
@endforeach
	</div>
</div>

<div class='container marketing center'>
	<div class='row'>
		<div class='front-page-header'>
			<span class='caret caret-right'></span>
				<b>新品推荐</b>
		</div>
	</div>

	<div class='row'>
	@foreach($goods as $v)
		<div class='col-md-3 col-sm-3 col-xs-6'>
			<div class='front-page-product-set-image-container'>
				<a href='/home/list/{{ $v->classname }}'>
					<img alt='{{ $v->goodsname }}' class='img-responsive' src='{{ asset("images/goods/$v->goodspics" ) }}'>
				</a>
				<!-- <form  action="/home/shopping" class="front-page-cart-form hidden-xs" method="get">
					<input name="id" type="hidden" value="{{ $v->id }}" />
					<input name='_token' type='hidden' value="{{ csrf_token() }}">
					<input name='product_id' type='hidden' value=''>
					<input class='shopping-cart-button' type='submit' value=''>
				</form> -->
			</div>
			<div class='chinese-name'>
				<a href='/cities/beijing/categories/disney/products/winnie-the-pooh-cheese-cake'>
					<h2 class='product-set-link'>{{ $v->goodsname }} </h2>
				</a>
					<span class='size-and-price'>
				
				￥{{ $v->goodsprice }}
					</span>
			</div>
		</div>
	@endforeach
	</div>
</div>


<div class='container marketing center'>
	<div class='row'>
		<div class='front-page-header'>
			<span class='caret caret-right'></span>
				<b>热卖推荐</b>
		</div>
	</div>

	<div class='row'>
	@foreach($hot as $v)
		<div class='col-md-3 col-sm-3 col-xs-6'>
			<div class='front-page-product-set-image-container'>
				<a href='/home/list/{{ $v->classname }}'>
					<img alt='{{ $v->goodsname }}' class='img-responsive' src='{{ asset("images/goods/$v->goodspics" ) }}'>
				</a>
				<!-- <form  action="/home/shopping" class="front-page-cart-form hidden-xs" method="get">
					<input name="id" type="hidden" value="{{ $v->id }}" />
					<input name='authenticity_token' type='hidden' value='O2OpTvv7BC7tX4IbfDSwMmi8bA1uqxtwq1Sw7WrjY8I='>
					<input name='product_id' type='hidden' value=''>
					<input class='shopping-cart-button' type='submit' value=''>
				</form> -->
			</div>
			<div class='chinese-name'>
				<a href='/cities/beijing/categories/disney/products/winnie-the-pooh-cheese-cake'>
					<h2 class='product-set-link'>{{ $v->goodsname }} </h2>
				</a>
					<span class='size-and-price'>
				6吋
				￥{{ $v->goodsprice }}
					</span>
			</div>
		</div>
	@endforeach
	</div>
</div>

<script>
  $(document).ready(function(){
    Pantrysbest.SwiperPantry.init();
  });
</script>

<div>
<div class='footer text-muted'>



<div class="wide-main in-media-main clearfix">
	<div class="page-line"></div>
	<header class="page-header">
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



	<div class='container' >
		<div class='row'>
			<div class='col-md-12 col-sm-12 hidden-xs'>
				<table>
					<tr>
						<td class='footer-block not-last'>
							<img alt="Ui0813 66" class="telephone-image-size" src="../Picture/ui0813_66-72ee903a77275de7b02b28b3e65fc14e.png" />
							<div class='info'>
								订购邮箱
							</div>
							<div class='info'>
								order@pantrysbest.com
							</div>
							<div class='info'>
								北京市朝阳区神路街39号10幢3层4段92-93
							</div>
						</td>
						<td class='footer-block not-last'>
							<div class='info'>
								官方微信
							</div>
							<div class='info'>
								<!-- <a href='http://weibo.com/piehouse' target='_blank'><i class="fa fa-weibo fa-2x"></i></a> -->
								<img alt="Weixin" src="../Picture/weixin-b3b3cf5f9459b27c66749fd74316f293.jpg" width="70px" />
							</div>
						</td>
						<td class='footer-block'>
							<img alt="Brand icons" id="brand-icons" src="../Picture/brand-icons-b7a42d80596318922d6f6fb848166249.png" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class='visible-xs' id='phone-number'>
			<a href='tel:4008314159'>
				<i class="fa fa-phone"></i>
				4008-3-14159
			</a>
		</div>
		<div id='icp'>
			Copyright 2010-2016 派悦坊，Ltd 京ICP备12046340
		</div>
	</div>
	<img alt="Christmas bottom" src="../Picture/christmas-bottom-adb5998daa7310e3fbbadf6abb368748.png" style="width: 100%" />
</div>

<div aria-hidden='true' aria-labelledby='myModalLabel' class='modal fade' id='login-modal' role='dialog' tabindex='-1'>
	<div class='modal-dialog'>
		<div class='modal-content'></div>
	</div>
</div>
</div>
<script>
  (function() {
    var hm = document.createElement("script");
    hm.src = "//hm.baidu.com/hm.js?644047433451f3c44613b4c1c0bdfc9b";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
</script>

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
<img src='../Picture/rtg.gif' style='display:none;'>
</noscript>
</body>
</html>
