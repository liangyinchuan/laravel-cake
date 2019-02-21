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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">产品列表 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
           @foreach($list as $v)
            <li><a href=' {{ url("home/list/$v->name") }}'>{{$v->name}}</a></li>
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

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<link rel="stylesheet" href="{{asset('css/1.css')}}">
	 <div id="container">
       <div class='leftlist'>
      <div>
        <div><a href="/home/heart"><b>个人中心</b></a></div>
        <div><a href="/home/privateorder"><b>我的订单</b></a></div>
        <div><a href="/home/enshrine"><b>我的收藏</b></a></div>
        <div><a href="/home/buycar"><b>购物车</b></a></div>
        <div><a href="/home/editpassword"><b>修改密码</b></a></div>
        <div><a href="/home/heart"><b>个人信息</b></a></div>
       
        </div>
   </div>
   <form action="/home/order" method="post">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="rightbox">
        <div class="man">
            
            <div class="rght">
                <div class="had" id="had" style="width:100%">
                    <ul>
                        <li>产品</li>
                        <li>大小</li>
                        <li>价格</li>
                        <li>个数</li>
                        <li>总价</li>
                        <li>删除商品</li>
                    </ul>
                </div>
                @forelse($cont as $v)
                 <div class="cear">
                    <img src='{{asset("images/goods/$v->pic")}}' alt="" width='120px' height='120px'  style='margin-top:10px;cursor:pointer'>
                    <span style="margin:20px;font-size:20px;">标准</span>
                    <span style="margin:85px;font-size:20px;">{{$v->goodnum}}</span>
                    <span style="margin:35px;font-size:20px;" class='ct' >{{$v->cont}}</span>
                    <span style="margin:85px;font-size:20px;" class="sum">{{$v->cont*$v->goodnum}}</span>
                    <span style="margin:85px;font-size:20px;display:none" class="sun">{{$sun+=$v->cont*$v->goodnum}}</span>

                    <span style="margin:50px;font-size:20px;cursor:pointer" gsid="{{$v->goodsid}}">✘</span>   
                </div>
                @empty 
                   
                    <script type="text/javascript">
                       var had = document.getElementById('had');
                        had.parentNode.removeChild(had);
                    </script>
                    {{die("<h2>没有商品加入购物车！！<span><a href='/home/list' style='color:green;' class='bck'>返回继续选购</a></span><h2>")}}
                @endforelse

                <div class="souldpay">
                    <span><a href="{{ url('home/list') }}" style="color:green;" class="bck">返回继续选购</a></span>
                    <span class="py">应付金额:￥<span class='ppy'></span></span>
                </div>
                <div class="cear"></div>
                @if( !Session::get('name') )
                <p class="tps">您还没有登录，请先<a href="/home/login">登录 </a>。您也可以直接填写下面订单信息，无需注册，直接下单。（会员信息需要 <a href="/home/login">登录</a> 才能看到哦！）</p>

                @endif
                <div class="cntent">
                    <p>填写订单信息</p>
                    <hr>
                    <div>
                        <span>您的姓名</span>
                        <input type="text" class="ip" name="username" value="{{Session::get('user->name','')}}">
                    </div>
                    <div>
                        <span>手机号</span>
                        <input type="tel" class="ip" name="userphone" value="{{Session::get('user->memberno','')}}">
                    </div>
                    <div>
                        <span>收货方式</span>
                        <select id="" class="ip" name="gain" style="height:32px">
                            <option value="0">自提</option>
                            <option value="1" selected>送货</option>
                        </select>
                    </div>
                    <div>
                        <span>收货地址</span>
                        <input type="text" class="ip" name="address" value="{{Session::get('user->username','')}}">
                    </div>
                    <div>
                        <span>收货日期</span>
                        <input type="date" id="date" name="sendtime" class="ip">
                    </div>
                    <div>
                        <span>收货时间</span>
                        <select name="gaintime" class="ip" style="height:32px">
                            <option value="">--请选择送货时间--</option>
                            <option value="9:00-10:00">9:00-10:00</option>
                            <option value="9:30-10:30">9:30-10:30</option>
                            <option value="9:45-10:45">9:45-10:45</option>
                            <option value="10:00-11:00">10:00-11:00</option>
                            <option value="11:15-12:15">11:15-12:15</option>
                            <option value="12:30-13:30">12:30-13:30</option>
                            <option value="13:45-14:45">13:45-14:45</option>
                            <option value="15:00-16:00">15:00-16:00</option>
                            <option value="16:15-17:15">16:15-17:15</option>
                            <option value="17:30-18:30">17:30-18:30</option>
                            <option value="18:45-19:45">18:45-19:45</option>
                            <option value="20:00-21:00">20:00-21:00</option>
                        </select>
                    </div>
                    <div>
                        <span>收货人</span>
                        <input type="text" class="ip" name='gainname' value="{{Session::get('user->username','')}}">
                    </div>
                    <div>
                        <span>收货电话</span>
                        <input type="tel" name="phone" class="ip" value="{{Session::get('user->memberno','')}}">
                    </div>
                    <div class="wys">
                        <input type="hidden" id="paytype" name="paytype" value="1">
                        <span>付款方式</span>
                        <div id='border' class='sa' num="1" style="margin-left:0px;cursor:pointer;background:url('{{asset('images/wxzf.png')}}')"></div>
                        
                        <div class='sa' num="2" style="margin-left:10px;cursor:pointer;background:url('{{asset('images/zfb.png')}}')"></div>
                        <div class='sa' num="3" style="margin-left:10px;cursor:pointer;background:url('{{asset('images/hdfk.png')}}')"></div>
                    </div>

                    <div>
                        <span>是否显示价格</span>
                        <select name="hidden" class="ip" style="height:32px">
                            <option value="1">显示</option>
                            <option value="2">隐藏</option>
                        </select>
                    </div>

                    <div>
                        <span>是否显示订货人信息</span>
                        <select name="userinfo" class="ip" style="height:32px">
                            <option value="1">显示</option>
                            <option value="2">隐藏</option>
                        </select>
                    </div>

                    <div style="height:200px;">
                        <span>备注</span>
                        <textarea name="remark" id="" cols="50" rows="8" style="resize:none"></textarea>
                    </div>
                   
                    <div>
                        <!-- <div class="nxt">下一步</div> -->
                        <input class="nxt" type="submit" value="下一步">
                    </div>
                </div>



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

                
                <div class="cear"></div>
                <div class="bttom">
                    <ul>
                        <li class="oe">
                            <p class="pone">订购热线:4008-3-14159</p>
                            <p>订购邮箱</p>
                            <p>order@pantrysbest.com</p>
                            <p>北京市朝阳区神路街39号10幢3层4段92-93</p>
                        </li>
                        <li>
                            <span>官方微信</span>
                            <div class="cear"></div>
                            <a href="" class="eweima">
                                <img src="{{asset('images/erweima.jpg')}}" alt="" width="60">
                            </a>
                        </li>
                        <li style="border-right:none">
                            <img src="{{asset('images/one.png')}}" alt="" height="60px">
                        </li>
                    </ul>
                    <div class="cear"></div>
                    <p class="bizhu" style="margin-top:10px">Copyright 2010-2016 派悦坊，Ltd 京ICP备12046340</p>
                </div>
            </div>
        </div>
        <div class="cear"></div>
        <div class="foo0ter"></div>
    </div>
</div>
</form>
<!-- <div class="footer">
  
  
</div> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/homebase.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
