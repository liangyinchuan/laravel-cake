<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>1234</title>
    
        <link href="{{asset('css/jquery.slideBox.css')}}" rel="stylesheet" type="text/css" />
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">


    
  </head>
  <body style="background-color:#FCD8E0;">
  <img  id='pic1' style="CURSOR: pointer;position:fixed;top:300px;right:40px;width:80px;" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=441480007&o=www.baidu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"  border="0" SRC=http://wpa.qq.com/pa?p=1:441480007:3 alt="点击这里给我发消息">
  <img id='pic2' style="CURSOR: pointer;position:fixed;top:322px;right:40px" src="{{asset('images/22.jpg')}}" width="80px" >
  <div class="z"></div>
  <div class="carnum">{{$tot[0]->cot}}</div>
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=" {{ url('') }}bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div ><a class="navbar-brand" href=" {{ url('home') }}" style="background:url('{{asset('images/logo.png')}}') no-repeat center center;text-indent:-111em;width:221px;background-size:222px">派乐坊派乐坊乐</a></div>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href=" {{ url('') }}" class="dropdown-toggle" data-toggle="dropdown">产品列表 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($list as $v)
                <li><a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a></li>
            @endforeach
          </ul>
        </li>
         <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">寻找我们 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href=" {{ url('home/find') }}">门店</a></li>
            <li><a href=" {{ url('home/send') }}">配送须知</a></li>
          </ul>
        </li>
        <li><a href=" {{ url('/home/event') }}">活动</a></li>
         <li class="dropdown">
          <a href=" {{ url('') }}" class="dropdown-toggle" data-toggle="dropdown">关于 <span class="caret"></span></a>
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href=" {{ url('home/login') }}">登录</a></li>
        <li><a href=" {{ url('home/register') }}">注册</a></li>
        <li><a href=" {{ url('home/buycar') }}" style="background:url('{{asset('images/car.png')}}') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
        
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
   <div class='product-category'>
		@foreach ($list as $v)
        <a class='tab' href='{{url("home/list/$v->name")}}'>{{$v->name}}</a>
			@if($v->name==$clsnm)
				
				<div class='product-set'>
				@foreach ($goods as $good)
					<div><a class='secondary-tab' id="{{$good->id}}" href='#####'>{{$good->goodsname}}</a></div>
				@endforeach
				</div>
				
			@endif
		@endforeach
   </div>
<div id="load">
<div class="list">
@forelse ($goods as $good)
    <div class="listinfo ">
        <div class="left" idd="{{$good->id}}"><a href="####"><img src='{{asset("images/goods/$good->goodspics")}}' alt="" width="130px" height="130px"></a></div>
        <div class="between">
            <div class="one">{{$good->goodsname}}</div>
            <div class="two">￥{{$good->goodsprice}}</div>
            <div class="three">{{$good->goodsinfo}}</div>
            <div class="four" idd="{{$good->id}}"><a href="####" >查看详情</a></div>
        </div>
        <div class="right">
          
          <div class="sg"><img src="{{asset('images/1.jpg')}}" width="35px" height="35px"></div>
        <div class="jian aa" name="{{$good->id}}">-</div>
          <div class="aa" style="font-size:30px">
			@foreach($cont as $v)
				@if($good->id==$v->goodsid)
				{{$aa=$v->cont}}
				@break
				@elseif($loop->index==count($cont)-1)
				{{0}}
				@endif
			@endforeach
			{{count($cont)==0?'0':''}}
		  </div>
          <div class="jia aa" name="{{$good->id}}" pic="{{$good->goodspics}}" price="{{$good->goodsprice}}">+</div>
          <div class="aaa"><span>加入购物车</span></div>
        </div>
    </div>
	@empty
	<h1>暂时没有您需要的商品！！！</h1>
   @endforelse 
 </div>  

</div>
    <div style="padding-left:15%;border:0px solid red;" class='footer text-muted'>


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

    
        <div class='container'>
            <div class='row'>
                <div class='col-md-12 col-sm-12 hidden-xs'>
                    <table>
                        <tr>
                            <td class='footer-block not-last'>
                                <img alt="Ui0813 66" class="telephone-image-size" src="{{ asset('./Picture/ui0813_66-72ee903a77275de7b02b28b3e65fc14e.png') }}" />
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
                                    <img alt="Weixin" src="{{ asset('./Picture/weixin-b3b3cf5f9459b27c66749fd74316f293.jpg') }}" width="70px" />
                                </div>
                            </td>
                            <td class='footer-block'>
                                <img alt="Brand icons" id="brand-icons" src="{{ asset('./Picture/brand-icons-b7a42d80596318922d6f6fb848166249.png') }}" />
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
    </div>
    <div aria-hidden='true' aria-labelledby='myModalLabel' class='modal fade' id='login-modal' role='dialog' tabindex='-1'>
        <div class='modal-dialog'>
            <div class='modal-content'></div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/homebase.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
        <img alt="Christmas bottom" src="{{ asset('./Picture/christmas-bottom-adb5998daa7310e3fbbadf6abb368748.png') }}" style="width: 100%" />
</html>