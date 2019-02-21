<!DOCTYPE html>
<html>
    <style type="text/css" id="2973855940"></style>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pantry's Best 派悦坊，派送喜悦</title>
        <link data-turbolinks-track="true" href="{{ asset('./css/application-e17dbbbb22ef001f86db417a5ac66305.css') }}" media="all" rel="stylesheet">
        <script charset="utf-8" src="{{ asset('./js/v.js') }}"></script>
        <script src="{{ asset('./js/hm.js') }}"></script>
        <script data-turbolinks-track="true" src="{{ asset('./js/application-61af63335a5ae67af9dbc9ea1a8e4b2d.js') }}"></script>
        <style>
            .cke{visibility:hidden;}
        </style>
        <script src="{{ asset('./js/wxLogin.js') }}" type="text/javascript"></script>
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="派悦坊" name="description">
        <meta content="蛋糕" name="keywords">

        <script>
          var _hmt = _hmt || [];
          _hmt.push(['_setAccount', '644047433451f3c44613b4c1c0bdfc9b']);
        </script>

    </head>
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

        <div class="hidden-xs navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation">
        <div class="container">
        <div class="navbar-header">
            <div class="navbar-brand">

                <!-- 网站logo -->
                <a href="/">
                    <img alt="Christmas logo" src="{{asset('')}}">
                </a>

            </div>
        </div>

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

                <!-- 商品分类列表 -->
                @foreach ($list as $v)
                <li>
                    <li><a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a></li>
                </li>
                @endforeach
                <li>
                    <a href="#">迪士尼系列</a>
                </li>


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

        <!-- 登陆成功后显示用户信息 -->
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
  <ul class="nav navbar-nav navbar-right">
    <li><a href=" {{ url('/home/login') }}">登录</a></li>
    <li><a href=" {{ url('/home/register') }}">注册</a></li>
    <li><a href=" {{ url('/home/buycar') }}" style="background:url('{{asset('images/car.png')}}') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
  </ul>
@endif



        </div>
        </div>

        <div class="navbar navbar-default navbar-static-top navbar-fixed-top visible-xs mobile-header-nav" role="navigation">
            <div class="container" id="mobile-header-nav">
                <div class="navbar-header">
                    <span id="toggle-mobile-dropdown-nav" style="width: 18%;text-align: left;">
                        李雷
                    </span>
                    <div class="navbar-brand" style="width: 64%;text-align: center;padding-left: 5px;padding-right: 5px;">
                        <a href="/home/">
                            <img alt="Christmas logo" src="./Pantry's Best 派悦坊，派送喜悦_files/christmas-logo-2eda8a4166a8d5485d880232238f461f.png">
                        </a>
                    </div>

        <a class="toggle-mobile-telephone-nav visible-xs" href="tel:4008314159" style="width: 18%;text-align: right">
        <i class="fa fa-phone pantry-green-font"></i>
        </a>
        </div>
        <ul class="nav navbar-nav navbar-right" id="mobile-navbar-right"><li class="dropdown" id="welcome-item">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown">
            <span class="hidden-sm">您好，李雷</span>
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

        <li class="dropdown hidden-md hidden-sm visible-xs">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/home/users/edit#">
        产品目录
        <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">

        <li>
            <a href="/home">圣诞精选</a>
        </li>   

        <li>
            <a href="/home">圣诞精选</a>
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
        <a href="/home/">
        <div class="col-xs-3 mobile-nav-index">
        <div class="col-xs-12 no-padding">
        <i class="fa fa-home"></i>
        </div>
        <div class="col-xs-12 no-padding"></div>
        首页
        </div>
        </a>
        <a href="/home/list">
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
        </div>
        <div class="hidden-xs" style="height: 50px;"></div>
        <div class="visible-xs" style="height: 85px;"></div>
        <div class="container">
        <div class="row">
        <div class="col-md-2 col-sm-2 hidden-xs user-sidebar-column">
        <div class="user-sidebar-tab">
        <a href="/home/heart">个人中心</a>
        </div>
        <div class="user-sidebar-tab">
        <a href="/home/privateorder">我的订单</a>
        </div>
        <div class="user-sidebar-tab">
        <a href="/home/enshrine">我的收藏</a>
        </div>
        <div class="user-sidebar-tab">
        <a href="/home/buycar">购物车</a>
        </div>
 
        <div class="user-sidebar-tab">
        <a class="selected" href="/home/editpassword">修改密码</a>
        </div>
        <div class="user-sidebar-tab">
        <a href="/home/heart">个人信息</a>
        </div>

        </div>
        <div class="col-md-10 col-sm-10">
            <form action="/home/editpassword/{{ $uid }}" class="edit_user" id="edit_user" method="post">
                <div style="display:none">
                    <input name="_method" type="hidden" value="PUT">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                </div>
                <br>
                <br>
                <h3 class="points-head">修改密码</h3>
                <h4 style="color:green;">
                    @if(session('oks'))
                    {{ session('oks') }}
                    @endif
                </h4>
                <h4 style="color:red;">
                    @if(session('ok'))
                    {{ session('ok') }}
                    @endif
                </h4>
                <div class="update-password-row">
                    <label for="user_请输入旧密码">请输入旧密码</label>
                    <i>(我们需要您的当前密码来确认您的更改!)</i>
                    <br>
                    <input autocomplete="off" class="update-password-input" id="user_current_password" name="passworded" type="password">
                </div>

                <div class="update-password-row">
                    <label for="user_输入新密码">输入新密码</label>
                    <br>
                    <input autocomplete="off" class="update-password-input" id="user_password" name="newpassword" type="password">
                </div>

                <div class="update-password-row">
                    <label for="user_请再次输入新密码">请再次输入新密码</label>
                    <br>
                    <input autocomplete="off" class="update-password-input" id="user_password_confirmation" name="renewpassword" type="password">
                </div>

                <br>
                <div class="update-password-row">
                    <input class="update-password-button" type="submit" value="修  改">
                </div>
            </form>

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
        <tbody>
        <tr>
        <td class="footer-block not-last">
            <img alt="Ui0813 66" class="telephone-image-size" src="{{ asset('./images/UI0813_66-72ee903a77275de7b02b28b3e65fc14e.png') }}">
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
            <img alt="Weixin" src="{{ asset('./images/weixin-b3b3cf5f9459b27c66749fd74316f293.jpg') }}" width="70px">
        </div>
        </td>
        <td class="footer-block">
            <img alt="Brand icons" id="brand-icons" src="{{ asset('./images/brand-icons-b7a42d80596318922d6f6fb848166249.png')}}">
        </td>
        </tr>
        </tbody>
        </table>
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
            <img alt="Christmas bottom" src="{{asset('./images/christmas-bottom-adb5998daa7310e3fbbadf6abb368748.png')}}" style="width: 100%">
        </div>
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="login-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content"></div>
        </div>
        </div>
        <script type="text/javascript" async="" src="{{ asset('./js/r.js') }}"></script>

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
        &lt;img src='//t.paiyue.com/rtg.gif?i=7j-Dyf' style='display:none;'&gt;
        </noscript>
    </body>
</html>