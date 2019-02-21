<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/pintuer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/pintuer.js')}}"></script>
</head>
<body>
    <form name="myform" action="" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    <form method="get" action="/admin/order" id="listform">
        <div class="panel admin-panel">
            <div class="panel-head"><strong class="icon-reorder"> 订单详情</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
            <table class="table table-hover text-center">
                <tr>
                    <th width="5%">商品名</th>
                    <th width="10%">商品图片</th>
                    <th width="10%">商品信息</th>
                    <th width="10%">商品价格</th>
                    <th width="10%">商品数量</th>
                    <th width="10%">合计</th>
                </tr>
                <volist name="list" id="vo">
                @foreach ($orderinfo as $v)
                <tr>
                    <td style="text-align:left; padding-left:40px;">{{ $v->goodsname }}</td>
                    <td>
                        <img src='{{ asset("/images/goods/$v->goodspics") }}' alt="没找到!" width="75px" height="40px">
                    </td>
                    <td>{{ $v->goodsinfo }}</td>
                    <td>{{ $v->price }}</td>
                    <td>{{ $v->quantity }}</td>
                    <td>
                        ￥ {{ ($v->price)*($v->quantity) }}   
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
        <h3 style="float:right;margin-right:5%;">总计:&nbsp;￥ {{ $v->total }}</h3 style="float:right;">
    </form>
    <div class="padding border-bottom">&nbsp;</div>
    <div class="padding border-bottom">
        <h3>
            <span>订单号:&nbsp;{{ $v->orderno }}</span>
            <span style="margin-left:15%;">订单状态:&nbsp;{{ $status }}</span>
            <span style="margin-left:15%;">收货方式:&nbsp;{{ ($v->gain)==1?'自提':'送货' }}</span>
            <span style="margin-left:15%;">付款方式:&nbsp;{{ $paytype }}</span>
        </h3>
    </div>
    <h4 style="padding:20px;padding-left:10%">
        <span>收货人:&nbsp;{{ $v->gainname }}</span>
        <span style="margin-left:15%;" >联系电话:&nbsp;{{ $v->phone }}</span>
    </h4>
    <h4 style="padding:20px;padding-left:10%">
        <span>收货地址:&nbsp;{{ $v->address }}</span>
    </h4>
    <h4 style="padding:20px;padding-left:10%">
        <span>买家要求:&nbsp;{{ ($v->hidden)==1?'显示商品价格':'隐藏商品价格' }}&nbsp;{{ ($v->userinfo)==1?'显示买家信息':'隐藏买家信息' }}</span>
    </h4>
    <h4 style="padding:20px;padding-left:10%">
        <span>买家备注:&nbsp;{{ $v->remark }}</span>
    </h4>

</body>
</html>