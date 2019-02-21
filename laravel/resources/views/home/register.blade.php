<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>1234</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href=" {{ url('') }}" class="dropdown-toggle" data-toggle="dropdown">产品列表 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($list as $v)
                <li>
                    <a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a>
                </li>
            @endforeach
          </ul>
        </li>
         <li class="dropdown">
          <a href=" {{ url('') }}" class="dropdown-toggle" data-toggle="dropdown">寻找我们 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href=" {{ url('/home/find') }}">门店</a></li>
            <li><a href=" {{ url('/home/send') }}">配送须知</a></li>
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home/login">登录</a></li>
        <li><a href="/home/register">注册</a></li>
        <li><a href=" {{ url('/home/buycar') }}" style="background:url('{{asset('images/car.png')}}') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class='container' id='login-page-container'>
<div class='row'>
<div class='col-md-1 hidden-sm hidden-xs'></div>
<div class='col-md-5 col-sm-7 hidden-xs login-left-column' style="border-right:1px solid black;padding:40px;">
<h2 class='register-header'>微信注册</h2>
<div class='login-weixin-message'>请在此使用微信号注册或绑定。此后您只需要扫描刚才的二维码直接登录电脑版官网，无需密码哦！</div>
<div class='login-left-image' id='weixin-login-container'>
    <img src="{{ asset('Picture/pyfwx.png') }}" alt="">
</div>
</div>
<div class='col-md-6 col-sm-5' style="padding:100px;">
<div class='signup-text'>
<h2 class='register-header'>注  册</h2>
<!-- <img alt="Signup 01" class="img-responsive hidden-xs" src="{{ asset('Picture/signup_01-aa6e8378d68d90956d447de1e64428a2.jpg') }}" style="margin-left: auto; margin-right: auto; padding-bottom: 10px;" /> -->
<img alt="Mobile signup 01" class="img-responsive visible-xs" src="{{ asset('Picture/mobile_signup_01-79917ba80750c2b80bf67480fa8d6850.jpg') }}" style="margin-left: auto; margin-right: auto; padding-bottom: 10px;" />
</div>

<form action="/home/register" class="new_user" id="new_user" method="post">
    <div style="display:none">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    </div>
    <input id="user_campaign" name="limit" type="hidden" value="1" />
    <!-- <input id="user_referraled_id" name="user[referraled_id]" type="hidden" /> -->
    <div class='signup-div'>
        <label for="user_Email">用户名</label>
        <br>
        <input autofocus="autofocus" class="signup-input" id="user_email" placeholder="为自己起一个好名字!" name="username" type="text" />
        @if(session('ema'))
            <span style="color:red;">{{ session('ema') }}</span>
        @endif
        <p class='text-danger signup-message'></p>
    </div>
    <div class='signup-div'>
        <label for="user_联系电话">联系电话</label>
        <br>
        <input autofocus="autofocus" class="signup-input" id="user_phone_number" name="phone" type="text" />
        @if(session('pho'))
            <span style="color:red;">{{ session('pho') }}</span>
        @endif
        <p class='text-danger signup-message'>

        </p>
    </div>
    <div class='signup-div'>
        <label for="user_密码">密码</label>
        <br>
        <input autocomplete="off" class="signup-input" id="user_password" name="password" type="password" />
        @if(session('pas'))
            <span style="color:red;">{{ session('pas') }}</span>
        @endif
        <p class='text-danger signup-message'></p>
        <p class='password-message'>密码必须是8位以上的英文字母及数字</p>
    </div>
    <div class='signup-div'>
        <label for="user_请再次输入密码">请再次输入密码</label>
        <br>
        <input autocomplete="off" class="signup-input" id="user_password_confirmation" name="repassword" type="password" />
        @if(session('rep'))
            <span style="color:red;">{{ session('rep') }}</span>
        @endif
    </div>
    <br>
    <div class='signup-div'>
        <button id='signup-button' style="width:60px;color:#ffffff;background-color:#390C20;height:32px;border-redius:10px;">注 册</button>
        <a class='btn btn-default signup-link-color' href='/home/login' id='signup-link'><div>登录</div></a>
    </div>
</form>

<div class='signup-text'>
<p class='error'></p>
</div>
</div>
<div class='col-md-2 hidden-sm hidden-xs'></div>
</div>
</div>

<div class=' text-muted' style="padding-left:130px;"  border="1px solid red">

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
<img alt="Ui0813 66" class="telephone-image-size" src="{{ asset('Picture/ui0813_66-72ee903a77275de7b02b28b3e65fc14e.png') }}" />
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
<img alt="Weixin" src="{{ asset('Picture/weixin-b3b3cf5f9459b27c66749fd74316f293.jpg') }}" width="70px" />
</div>
</td>
<td class='footer-block'>
<img alt="Brand icons" id="brand-icons" src="{{ asset('Picture/brand-icons-b7a42d80596318922d6f6fb848166249.png') }}" />
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
<img alt="Christmas bottom" src="{{ asset('Picture/christmas-bottom-adb5998daa7310e3fbbadf6abb368748.png') }}" style="width: 100%" />
</div><div aria-hidden='true' aria-labelledby='myModalLabel' class='modal fade' id='login-modal' role='dialog' tabindex='-1'>
<div class='modal-dialog'>
<div class='modal-content'></div>
</div>
</div>



<noscript>
    <img src="{{ asset('Picture/rtg.gif') }}" style='display:none;'>
</noscript>

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