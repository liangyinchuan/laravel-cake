
@extends('home.parent')

@section('body')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/pintuer.js') }}"></script>
<div class="visible-xs" style="height: 85px;"></div>
<div id="v2-orders-container">
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-2 hidden-xs user-sidebar-column">
<div class="user-sidebar-tab">
<a  id="" href="{{url('/home/heart') }}">个人中心</a>
</div>
<div class="user-sidebar-tab">
<a id="" href="{{url('/home/privateorder') }}">我的订单</a>
</div>
<div class="user-sidebar-tab" >
<a id="" href="/home/enshrine" >我的收藏</a>
</div>
<div class="user-sidebar-tab">
<a id="" href="/home/buycar">购物车</a>
</div>
<div class="user-sidebar-tab">
<a id="" class="selected" href="{{ url('/home/myfoot') }}">我的足迹</a>
</div>
<!-- /.user-sidebar-tab -->
<!-- /  %a{href: '/personal-information', class: (@selected_tab == 'personal-information') ? 'selected' : nil} 个人信息 -->
<div class="user-sidebar-tab">
<a id="" href="/home/editpassword">修改密码</a>
</div>
<div class="user-sidebar-tab">
<a id="" href="{{url('/home/upuser') }}">个人信息</a>
</div>
</div>
<div class="col-md-10 col-sm-10">
<form action="" method="post" name='myform'>
	<input type="hidden" name='_token' value='{{ csrf_token() }}'>
	<input type="hidden" name='_method' value='DELETE'>
</form>
<div class="panel admin-panel">
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">序号</th>
      <th width="20%">图片</th>
      <th width="15%">商品名称</th>
      <th width="20%">商品价格</th>
      <th width="10%">商品状态</th>
      <th width="15%">商品详情</th>
      <th width="15%">删除足迹</th>
    </tr>
    <!-- {{ $m=1 }} -->

    <tr>
      <td>{{ $m++ }}</td>     
      <td></td>     
      <td></td>
      <td></td>
      <td></td>
      <td><div class="button-group">
      <a class="button border-red" href="javascript:fun()" ><span class="icon-trash-o"></span> 查看详情</a>
      </div></td>
      <td><div class="button-group">
      <a class="button border-red" href="" ><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
  </table>
  <script type="text/javascript">
        	function fun(id)
        	{
        		if(confirm('确定删除吗？')){
        			var form = document.myform;
        			form.action = '/home/enshrine/'+id;
        			form.submit();
        		}
        	} 
   </script>
</div>
</div>
@stop
