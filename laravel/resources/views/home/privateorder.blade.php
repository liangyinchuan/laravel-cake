<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>1234</title>

    <link href="{{asset('css/lyc.css')}}" rel="stylesheet">
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
        <li><a href=" {{ url('home/login') }}">登录</a></li>
        <li><a href=" {{ url('home/register') }}">注册</a></li>
        <li><a href=" {{ url('home/buycar') }}" style="background:url('{{asset('images/car.png')}}') no-repeat 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
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
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="rightbox">
        <div class="man">
            
            <div class="rght">
                @forelse ($order as $k => $v)


                <div class="col-md-10 col-sm-10" style="margin-bottom:20px;">
                    <div data-react-class="Pays" >
                        <div class="v2-orders-collection-container" >
                            <div class="row current-orders-container" >
<!-- 
                                <div class="col-xs-12 col-md-12 col-sm-12 info-title" >
                                    订单信息
                                </div> -->
                                <div style="margin-left:10px;" class="clo-xs-12 col-md-12 col-sm-12 order-list-title" >                                   
                                    <div class="hidden-xs col-md-3 col-sm-3 order-status" >
                                        订单号: {{ $k }}
                                    </div>
                                    <div class="col-md-9 col-sm-9 clo-xs-12 order-time" >
                                        下单时间: {{ $v[0]->time }}
                                    </div>
                                </div>

                                <div class="clo-xs-12 col-md-12 col-sm-12" data-reactid=".0.0.2">
                                    @foreach ($v as $v1)
                                    <div class="row order-product-list" data-reactid=".0.0.2.0">
                                        
                                        <div style="margin-top:25px;" class="col-md-4 col-sm-4 col-xs-5" data-reactid=".0.0.2.0.0">
                                            <img class="product-image" src='{{ asset("/images/goods/$v1->goodspics") }}' alt="{{ $v1->goodsname }}" >
                                        </div>

                                        <div class="hidden-xs col-md-4 col-sm-4 order-list-row"  style="padding-top:20px;">
                                            <div >
                                                {{ $v1->goodsname }}
                                            </div>
                                            <!-- <div >
                                                尺寸: 6吋
                                            </div> -->
                                        </div>

                                        <div class="hidden-xs col-md-4 col-sm-4 order-list-row" >
                                            <div data-reactid=".0.0.2.0.2.0">
                                                单价: {{ $v1->goodsprice }}
                                            </div>
                                            <div data-reactid=".0.0.2.0.2.1">
                                                数量: {{ $v1->quantity }}
                                            </div>
                                        </div>


                                    </div>
                                   
                                    @endforeach
                                </div>

                                <div class="col-xs-12 col-md-12 col-sm-12 info-title" data-reactid=".0.0.3">
                                    收货信息
                                </div>
                                <div class="col-xs-12 col-md-12 col-sm-12 order-details" data-reactid=".0.0.4">
                                    <div class="order-text" data-reactid=".0.0.4.0">
                                        支付方式: {{ $v1->paytype==1?'支付宝':($v1->paytype==2?'微信':"货到付款") }}
                                    </div>
                                    <div class="order-text" data-reactid=".0.0.4.1">
                                        下单时间: {{ $v1->time }}
                                    </div>
                                    <div class="order-text" data-reactid=".0.0.4.5">
                                        收货人：{{ $v1->gainname }}
                                    </div>
                                    <div class="order-text" data-reactid=".0.0.4.6">
                                        收货人电话：{{ $v1->phone }}
                                    </div>
                                    <div class="order-text" data-reactid=".0.0.4.7">
                                        收货地址：{{ $v1->address }} 
                                    </div>
                                 
                                    <div class="order-text" data-reactid=".0.0.4.9">
                                        收货日期：{{ $v1->sendtime }}
                                    </div>
                                    <div class="order-text" data-reactid=".0.0.4.a">
                                        收货时间：{{ $v1->gaintime }}
                                    </div>
                      
                                    <div class="order-text" data-reactid=".0.0.4.g">
                                        备注：{{ $v1->remark }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-sm-12 info-title" data-reactid=".0.0.5">
                                    付款信息
                                </div>
                                <div class="col-xs-12 col-md-12 col-sm-12 tally-orders-desktop" data-reactid=".0.0.6">
                                    <div data-reactid=".0.0.6.0">
                                        <span class="col-xs-9 col-md-11 col-sm-11" data-reactid=".0.0.6.0.0">
                                            <span class="order-text" data-reactid=".0.0.6.0.0.0">
                                                共
                                            </span>
                                            <span class="number" data-reactid=".0.0.6.0.0.1">
                                                {{ $v[0]->num }}
                                            </span>
                                            <span class="order-text" data-reactid=".0.0.6.0.0.2">
                                                件产品，总金额：
                                            </span>
                                        </span>
                                        <span class="col-xs-3 col-md-1 col-sm-1 price" data-reactid=".0.0.6.0.1">
                                            ¥{{ $v1->total }}
                                        </span>
                                    </div>
                                    <div data-reactid=".0.0.6.6">
                                        <span class="col-xs-9 col-md-11 col-sm-11 order-text" data-reactid=".0.0.6.6.0">
                                            应付金额：
                                        </span>
                                        <span class="col-xs-3 col-md-1 col-sm-1 price" data-reactid=".0.0.6.6.1">
                                            ¥{{ $v1->total }}
                                        </span>
                                    </div>
                                   
                                </div>
                                <div class="col-xs-12 col-md-3 col-sm-3 v2-order-pay-list" >
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div style="padding:40px;">
                    
                    <h1>您还没有订单,快去<a href="/home/list">下单</a>吧!</h1>
                </div>

                @endforelse





                 

            </div>




                    <div class="cear"></div>
            </div>
        </div>
                <div class="" style="text-align:center;">
                    <ul>
<!--                         <li class="oe">
                            <p class="pone">订购热线:4008-3-14159</p>
                            <p>订购邮箱</p>
                            <p>order@pantrysbest.com</p>
                            <p>北京市朝阳区神路街39号10幢3层4段92-93</p>
                         </li> -->
<!--                         <li>
                            <span>官方微博</span>
                            <small>|</small>
                            <span>官方微信</span>
                            <div class="cear"></div>
                            <div class="ku"></div>
                            <a  class="eweima">
                                <img src="{{asset('images/erweima.jpg')}}" alt="" width="60">
                            </a>
                        </li> -->
                        <li style="border-right:none">
                            <img src="{{asset('images/one.png')}}" alt="" height="60px">
                        </li>
                    </ul>
                    <div class="cear"></div>
                    <br>
                    <p class="bizhu" style="margin-top:10px">Copyright 2010-2016 派悦坊，Ltd 京ICP备12046340</p>
                </div>
        <div class="cear"></div>
    </div>
</div>
<!-- <div class="footer">
  
  
</div> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/lyc.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/homebase.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
