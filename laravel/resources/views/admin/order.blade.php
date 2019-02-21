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
    <div class="panel-head"><strong class="icon-reorder"> 订单列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li style="font-size:30px;">搜索：</li>
        <li>用户名
          <input name="username" type="text" class="input" onchange="changesearch()" style="width:110px; line-height:17px; display:inline-block">
          &nbsp;&nbsp;
          订单号
          <input name="orderno" type="text" class="input" onchange="changesearch()" style="width:110px; line-height:17px; display:inline-block">
          &nbsp;&nbsp;

        </li>
        <li>
          <input type="submit" class="button border-main icon-search" value="搜索" ></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="5%">订单号</th>
        <th width="10%">用户名</th>
        <th width="10%">商品总价</th>
        <th width="10%">收货人</th>
        <th width="10%">订单状态</th>
        <th width="10%">操作</th>
      </tr>
      <volist name="list" id="vo">
      @foreach ($list as $v)
      <tr>
        <td style="text-align:left; padding-left:40px;">{{ $v->orderno }}</td>
        <td>{{ $v->username }}</td>
        <td>{{ $v->total }}</td>
        <td>{{ $v->gainname }}</td>
        <td>{{ $v->status }}</td>
        <td>
            <div class="button-group">
                <a class="button border-main" href="/admin/order/{{ $v->orderno }}">
                    <span class="icon-edit"></span> 查看详情
                </a> 
            </div>
        </td>
      </tr>
      @endforeach
      	<!-- <tr><td colspan="7"><h2 style="text-align:center;color:red;">没有您想要的信息<h2></td></tr> -->


    </table>
        <div class="pagelist" style="float:right;margin-right:13%;"> 
            {{ $list->appends($where)->links() }}
        </div>

  </div>
</form>
</body>
</html>