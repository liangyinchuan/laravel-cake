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
<link data-turbolinks-track="true" href=" {{ asset('Pantry/application-354237c6d723a6db65ecc58d6bded2b2.css') }}" media="all" rel="stylesheet">
<script charset="utf-8" src="{{ asset('Pantry/v.htm') }}"></script>
<script src="{{ asset('Pantry/hm.js') }}"></script>
<script data-turbolinks-track="true" src="{{ asset('Pantry/application-415019d9daae0857da5f2d710dc3a787.js') }}"></script><style>.cke{visibility:hidden;}</style>
<script src="{{ asset('Pantry/wxLogin.js') }}" type="text/javascript"></script>
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
<a href="/home"><img alt=" logo" src='{{ asset("uploads/$logo") }}'></a>
<!-- / %a{href: "/"}= image_tag('logo-normal.png') -->
</div>

</div>
<ul class="nav navbar-nav">
<li class="dropdown">
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
			<i class="fa fa-buycar"></i>
			<span class="hidden-sm">购物车</span>
		</a>
	</li>
</ul>
@else
<ul class="nav navbar-nav navbar-right hidden-xs">
<li id="sign-in-item">
<a href="{{ asset('/home/login') }}">登录</a>
</li>
<li id="sign-up-item">
<a href="{{ asset('/home/register') }}">注册</a>
</li>
 <li><a href=" {{ url('/home/buycar') }}" style="background:url('/images/car.png') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
</ul>
@endif

</div>
</div>

<div class="navbar navbar-default navbar-static-top navbar-fixed-top visible-xs mobile-header-nav" role="navigation">
<div class="container" id="mobile-header-nav">
<div class="navbar-header">
<span id="toggle-mobile-dropdown-nav" style="width: 18%;text-align: left;">未登录</span>
<div class="navbar-brand" style="width: 64%;text-align: center;padding-left: 5px;padding-right: 5px;">
<a href="/home">
	<img alt="Christmas logo" src="2Pantry%27s%20Best%20%E6%B4%BE%E6%82%A6%E5%9D%8A%EF%BC%8C%E6%B4%BE%E9%80%81%E5%96%9C%E6%82%A6_files/christmas-logo-2eda8a4166a8d5485d880232238f461f.png">
</a>
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
<a href="/home/login">登录</a>
</li>
<li id="sign-up-item">
<a href="/home/register">注册</a>
</li>
<li class="dropdown hidden-md hidden-sm visible-xs">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
产品目录
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
<a href="#">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-home"></i>
</div>
<div class="col-xs-12 no-padding"></div>
首页
</div>
</a>
<a href="/home">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-list-alt"></i>
</div>
<div class="col-xs-12 no-padding">
产品列表
</div>
</div>
</a>
<a href="/home/heart">
<div class="col-xs-3 mobile-nav-index">
<div class="col-xs-12 no-padding">
<i class="fa fa-user"></i>
</div>
<div class="col-xs-12 no-padding">
个人中心
</div>
</div>
</a>
<a href="/home/buycar">
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
<p><img alt="" src="../Pantry/content_-2.jpg" style="width: 800px; height: 350px;">&nbsp;</p>

<p>&nbsp;</p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡是什么？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品卡是上海派悦餐饮有限公司（</span><span class="s3">“</span><span class="s2">发卡人</span><span class="s3">”</span><span class="s2">）发行的预付卡产品，可供持卡人在派悦坊官网或中国大陆境内指定的派悦坊门店消费使用。派悦坊礼品卡受发卡人制定并不时修订的《派悦坊单用途商业预付卡章程》约束。若本常见问题解答与该章程的规定有任何不一致的，以章程的规定为准。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡是否是记名卡？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品卡为不记名卡。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡共有哪些面值？</b></span></li>
</ul>

<p class="p2"><span class="s2">目前，派悦坊礼品卡面额可自由选择，发卡人将可能不时发行新面值的派悦坊礼品卡产品。不同的产品会有不同的面值分配，具体以派悦坊门店或其他经发卡人正式授权的售卡渠道正式销售的为准。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡有有效期吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品卡</span><span class="s1">有效期为售出之日起为期</span><span class="s2">3</span><span class="s1">年</span><span class="s2">；具体日期可自行通过网站或派悦坊客户服务电话</span><span class="s3">4008-3-14159</span><span class="s2">进行查询。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>卡片过期后怎么办？</b></span></li>
</ul>

<p class="li1">超过有效期后可免费延期1次，为期3个月；超过有效期后达3个月以上或已经免费延期过1次的礼品卡，需充值进行延期，最低充值金额为100元，可延期3个月。 【每充值100元可延期3个月，最高充值金额为1000元】</p>

<ul>
	<li class="li1"><span class="s2"><b>如何购买派悦坊礼品卡？</b></span></li>
</ul>

<p class="p2"><span class="s2">您可以在</span><span class="s3">Pantrys Best</span><span class="s2">派悦坊淘宝企业店铺或中国大陆境内指定的派悦坊门店，通过其可接受的支付方式进行购买。您也可以在其他售卡渠道通过其可接受的支付方式进行购买。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>除了派悦坊门店及售卡渠道外，是否有其他途径也可以购买派悦坊礼品卡？</b></span></li>
</ul>

<p class="p2"><span class="s2">如有大宗购买需求，也可拨打派悦坊客户服务电话</span><span class="s3">4008-3-14159</span><span class="s2">进行咨询。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>购买派悦坊礼品卡有数量限制吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">目前没有。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>购卡是否会产生手续费？</b></span></li>
</ul>

<p class="p2"><span class="s2">目前暂不收取。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>购买后卡片是否可以当场使用？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品卡购买后需激活才能使用。在派悦坊门店购买的礼品卡，卡片当场被激活并可立即使用；通过派悦坊门店以外的其他途径购买的礼品卡，在购卡人已支付购卡款项并收到卡片后，应按照随卡提供的激活流程激活卡片。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>购买时需要记录个人身份信息吗？</b></span></li>
</ul>

<p class="p2"><span class="s1">派悦坊储值卡为不记名卡</span><span class="s2">，无需提供个人身份信息。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>购买派悦坊礼品卡是否有折扣？</b></span></li>
</ul>

<p class="p2"><span class="s1">如有大宗购买需求请拨打派悦坊顾客服务电话</span><span class="s2">4008-3-14159</span><span class="s1">，由专人协助您购买。</span></p>

<ul style="line-height: 20.8px;">
	<li class="li1"><span class="s2"><b>会员购买派悦坊礼品卡是否有折扣？</b></span></li>
</ul>

<p class="p2" style="line-height: 20.8px;">会员购买礼品卡应遵守礼品卡购买规定；会员购买礼品卡时，可以用当前会员状态享有会员购买正价产品折扣，即：金卡享受面额95折优惠；白金卡享受面额9折优惠。使用礼品卡时，不再享有会员优惠或折扣，不享受会员折扣、不享受会员礼券、不积分。</p>

<ul>
	<li class="li1"><span class="s2"><b>购买派悦坊礼品卡是否有积分？</b></span></li>
</ul>

<p class="p2"><span class="s2">购买礼品卡时可以按照实际支付金额进行积分</span><span class="s3">, </span><span class="s2">在使用礼品卡消费时不再享受会员折扣或积分。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>购买派悦坊礼品卡有哪些结账方式？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊门店接受现金、信用卡、借记卡或其他派悦坊门店接受的支付方式进行结算。</span></p>

<p class="p2"><span class="s2">在派悦坊门店之外的销售渠道购买礼品卡的，以该销售渠道可接受的支付方式进行结算。</span></p>

<p class="p2"><span class="s2">根据国家相关法律法规，单位一次性购卡金额达</span><span class="s3">5000</span><span class="s2">元（含）以上或个人一次性购卡金额达</span><span class="s3">50000</span><span class="s2">元（含）以上的，以及单位或个人采用非现场方式购卡的，不可使用现金，应通过银行转账，但不可使用第三方电子支付平台（例如支付宝等）。购卡单位或个人应提供银行付款账户的信息（包括账户名称、账号及金额等）。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>可以用国外卡支付吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊门店暂不接受国外的信用卡、借记卡、支票或转账的支付方式。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>可以采用转账形式支付吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">目前派悦坊门店内仅接受现金，信用卡及借记卡形式来支付购买礼品卡的费用。如有大宗购卡需求请拨打派悦坊顾客服务电话</span><span class="s3">4008-3-14159</span><span class="s2">，会有专人协助您进行购买。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>购买派悦坊礼品卡需要签合同吗</b></span><span class="s5"><b>?</b></span></li>
</ul>

<p class="p2"><span class="s2">应购卡人或派悦坊门店</span><span class="s3">/</span><span class="s2">售卡渠道的要求，双方应签订礼品卡购买合同。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡可以充值吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">目前我们只接受实体礼品卡的充值。其他可充值的礼品卡品种将由发卡人另行通知。&nbsp;</span></p>

<ul>
	<li class="li1"><span class="s2"><b>如何为派悦坊礼品卡充值？</b></span></li>
</ul>

<p class="p2"><span class="s2">您可以在中国大陆境内指定的派悦坊门店，通过其可接受的支付方式进行充值。您也可以在其他经发卡人正式授权的渠道通过其可接受的支付方式进行充值。可办理充值的渠道及所在地区由发卡人另行通知。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>为派悦坊礼品卡充值有金额限制吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">单张礼品卡卡内累计余额不得超过</span><span class="s3">1000</span><span class="s2">元。单次充值金额为人民币</span><span class="s3">100</span><span class="s2">元或</span><span class="s3">100</span><span class="s2">元的整数倍（在派悦坊门店充值的）或根据其他充值渠道及</span><span class="s3">/</span><span class="s2">或方式而定。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>为派悦坊礼品卡充值时可以累积积分吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">为派悦坊礼品卡充值所支付的金额可以累积积分，但是使用礼品卡所充值金额在派悦坊门店购买商品时，您用礼品卡支付的消费额不可以重复计入该礼品卡相关联的会员账户中累积积分。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>使用派悦坊礼品卡会有礼品赠送吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">具体详见各派悦坊门店活动。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>卡内余额该如何查询？</b></span></li>
</ul>

<p class="p2"><span class="s2">您可以访问派悦坊官网礼品卡专区：<a href="http://www.pantrysbest.com/card">http://www.pantrysbest.com/card</a></span><span class="s2">，也可以通过拨打派悦坊顾客服务电话</span><span class="s3">4008-3-14159</span><span class="s2">，查询卡内资金余额。 您也可以在派悦坊门店消费时要求店员为您查询余额。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡可以在哪些地区使用？</b></span></li>
</ul>

<p class="p2"><span class="s2">您可以持卡在中国大陆境内指定的派悦坊门店消费使用。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡卡背刮条下的密码是作什么用的？</b></span></li>
</ul>

<p class="p2"><span class="s2">用于首次激活礼品卡使用，同时在派悦坊官网消费时备注于备注栏使用，或电话订购结账时报给客服即可。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>可以使用派悦坊礼品卡购买派悦坊礼品卡吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">可以，您可以使用礼品卡支付购买礼品卡的费用，但不享受二次折扣优惠。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>使用派悦坊礼品卡可以参加优惠促销活动吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品可不可与其他优惠活动同享。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>派悦坊礼品卡可以多次使用吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品卡可以多次使用，使用礼品卡消费恕不找零，余额部分可以在有效期内使用，直至余额为零，差额部分可以用现金或支付宝补足。</span><span class="s3">&nbsp;</span></p>

<ul>
	<li class="li1"><span class="s2"><b>如果查询的余额不正确，我该找谁解决？</b></span></li>
</ul>

<p class="p2"><span class="s2">请拨打派悦坊顾客服务电话</span><span class="s3">4008-3-14159</span><span class="s2">，由专人协助您解决问题。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>是否可以转移卡片余额？</b></span></li>
</ul>

<p class="p2"><span class="s2">目前无法转移卡片余额。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>如果消费被退单，消费额是否可以退回卡中？</b></span></li>
</ul>

<p class="p2"><span class="s2">若持卡人要求退掉持派悦坊礼品卡购买的商品且该等退货符合派悦坊门店相关退货规定的，礼品卡购买该商品时从卡中支出的任何金额将被退至该卡内，原礼品卡的有效期不因退货而改变。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>我可以用手机或其他移动上网设备查询卡内余额吗？</b></span></li>
</ul>

<p class="p4"><span class="s6">可以，访问派悦坊中国官网礼品卡专区：</span><span class="s2"><a href="http://www.pantrysbest.com/card">http://www.pantrysbest.com/card</a>&nbsp;</span><span class="s6">即可以查询。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>消费及余额会有短信提醒吗？</b></span></li>
</ul>

<p class="p2"><span class="s2">目前尚未提供这个服务。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>是否可以退卡？</b></span></li>
</ul>

<p class="p2"><span class="s2">可以，但退卡人应是购买派悦坊礼品卡的原购买人并在发卡人指定的渠道办理退卡。退卡人应按照相关要求提供指定的证明文件方可申请退卡。发卡人处理后台会在您提交申请后的</span><span class="s3">30</span><span class="s2">个工作日之内开始为您办理退款。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>退卡是否会产生手续费？</b></span></li>
</ul>

<p class="p2"><span class="s2">会，退卡手续费统一按原始发票（包括充值发票，如适用）金额</span><span class="s3">2%</span><span class="s2">的标准收取，最低人民币</span><span class="s3">20</span><span class="s2">元。
在扣除前述手续费后，卡内剩余资金将被退至退卡人购买派悦坊礼品卡时使用的银行卡（在使用银行卡购买的情形下）或退卡人同名的银行账户内（在使用非银行卡
交易形式购卡的情形下）。 
请注意，若您通过不同渠道为所持礼品充值的（例如：通过派悦坊门店与网络渠道），在退卡时，卡内余额将根据原充值渠道返还给您的银行卡或其他充值支付方式
所对应的账户。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>卡片损坏或者消磁怎么办</b></span><span class="s5"><b>?</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品卡因毁损无法交易或其他原因需要更换新卡，经发卡人指定人员核实确为其所发礼品卡且尚有余额，您可在发卡人指定的场所办理更换。换卡时需交纳换卡费</span><span class="s3">30</span><span class="s2">元</span><span class="s3">/</span><span class="s2">张，直接从卡内余额中扣取；若余额不足，且您仍希望换卡，需以现金或其他支付方式补足换卡费。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>卡片丢失或被盗该如何处理</b></span><span class="s5"><b>?</b></span></li>
</ul>

<p class="p2"><span class="s2">派悦坊礼品卡是不记名预付卡，一旦丢失或被盗，您将自己承担经济损失，请妥善保管。</span></p>

<ul>
	<li class="li1"><span class="s2"><b>为什么用派悦坊礼品卡进行消费时不能拿到发票？</b></span></li>
</ul>

<p class="p5"><span class="s2">派悦坊礼品卡在初始销售时就已可申请开具发票了，所以不能在消费时重复开发票。</span></p>

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