<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>1234</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">


    
  </head>
  <body>
  <img  id='pic1' style="CURSOR: pointer;position:fixed;top:300px;right:40px;width:80px;" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=441480007&o=www.baidu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"  border="0" SRC=http://wpa.qq.com/pa?p=1:441480007:3 alt="点击这里给我发消息">
  <img id='pic2' style="CURSOR: pointer;position:fixed;top:322px;right:40px" src="{{asset('images/22.jpg')}}" width="80px" >
  <div class="z"></div>
  
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
          <a href="####" class="dropdown-toggle" data-toggle="dropdown">产品列表 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <!-- <li>123</li> -->
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
          <ul class="dropdown-menu" role="menu">
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
              <a data-method="delete" href="/home/logout" rel="nofollow" data-no-turbolink="">退出</a>
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

      <ul class="nav navbar-nav navbar-right">
        <li><a href=" {{ url('/home/login') }}">登录</a></li>
        <li><a href=" {{ url('/home/register') }}">注册</a></li>
        <li><a href=" {{ url('home/buycar') }}" style="background:url('{{asset('images/car.png')}}') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
        
      </ul>
      @endif

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div style="width:840px;height:200px;margin:0 auto;text-align:center;">
<img src="{{asset('images/wx.gif')}}" alt="" style="">
</div>
   <div style="width:300px;height:340px;margin:0 auto;text-align:center;">
<img src="{{ url('home/code')}}" style="float:left;margin:0 auto"/>
	</div></div>
	<div style="width:285px;height:140px;margin:0 auto;text-align:center;">
<img src="{{asset('images/wp.gif')}}" alt="" style="">
</div>
<div style="width:285px;height:140px;margin:0 auto;text-align:center;">
<!-- <img src="{{asset('images/wp.gif')}}" alt="" style=""> -->
<span style="font-size:35px">限时抢购 ￥ 1.00</span>
</div>
<!-- <div class="footer">
  
  
</div> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/homebase.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
