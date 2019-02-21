@extends('home.parent')

@section('body')
<script type="text/javascript" src="{{ asset('js/itemjs/jquery-1.8.3.min.js') }}"></script>
<div class="visible-xs" style="height: 85px;"></div>
<div class="container" id="user-container">
<div class="col-md-2 col-sm-2 hidden-xs user-sidebar-column">
<div class="user-sidebar-tab">
<a href="/home/heart">个人中心</a>
</div>
<div class="user-sidebar-tab">
<a href="/home/privateorder">我的订单</a>
</div>
<div class="user-sidebar-tab" >
<a id="" href="/home/enshrine" >我的收藏</a>
</div>
<div class="user-sidebar-tab">
<a href="/home/buycar">购物车</a>
</div>
<!-- <div class="user-sidebar-tab">
<a id="" href="{{ url('/home/myfoot') }}">我的足迹</a>
</div> -->
<!-- /.user-sidebar-tab -->
<!-- /  %a{href: '/personal-information', class: (@selected_tab == 'personal-information') ? 'selected' : nil} 个人信息 -->

<div class="user-sidebar-tab">
<a href="/home/editpassword">修改密码</a>
</div>
<div class="user-sidebar-tab">
<a class="selected" href="/home/heart">个人信息</a>
</div>
</div>
@if (count($errors) > 0)
	<div>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach	
		</ul>
	</div>
@endif	

<div class="col-md-10 col-sm-10 col-xs-12">
<div class="title">个人信息</div>
<form name="myform" accept-charset="UTF-8" action="/home/upuser/{{ $data->id }}" class="customer-info-form" methods="post">
    <input type="hidden" nam='_token' value='{{csrf_token()}}'>
    <input type="hidden" name='_method' value='PUT'>
  
<div style="display:none">
	<input name="utf8" value="✓" type="hidden">
	<input name="authenticity_token" value="C8yPx8vEEGsTA7cLTfcFfUbja7QngKnoxzdoMpAs9Pk=" type="hidden">
</div>
<div class="col-xs-12 input_label">
姓名：
</div>
<div class="col-xs-12 input_prompt">
白金卡顾客将会收到拥有此姓名实体专属会员卡
</div>
<div class="col-xs-12 input_prompt">
注册后用户名不可更改!
</div>
<div class="col-xs-12">
<input class="form-control input_text is_required" id="users_name" disabled name="username" value="{{ $data->username }}" type="text">
<div class="input_error"></div>
<die><span id="tname" style="color:red"></span></die>
</div>
    
<div class="col-xs-12 input_label">
您的生日：
</div>
<div class="col-xs-12 input_prompt">
金卡，白金卡会员生日当月送惊喜礼券！
</div>
<div class="col-xs-12">
<input type="text" name='birth' id='bir' value='{{ $data->birth }}' >
<div class="input_error"></div>
<die><span id="tbir" style="color:red"></span></die>
</div>
<div class="col-xs-12 input_label">
您的两位亲友的生日：
</div>
<div class="col-xs-12 input_prompt">
金卡，白金卡会员生日当月送惊喜礼券！
</div>
<div class="col-xs-12 input_label">
第一位：
</div>
<div class="col-xs-12">
<input id='kin1' type="text" name='kin1' value='{{ $data->kin1 }}'>
<div class="input_error"></div>
<die><span id="tkin1" style="color:red"></span></die>
</div>
<div class="col-xs-12 input_label">
第二位：
</div>
<div class="col-xs-12">
<input id='kin2' type="text" name='kin2' value='{{ $data->kin2 }}'>
<div class="input_error"></div>
<die><span id="tkin2" style="color:red"></span></die>
</div>
<div class="col-xs-12 input_label">
您常用的电子邮箱：
</div>
<div class="col-xs-12">
<input id='email' class="form-control input_text is_required" value='{{ $data->email }}' id="users_email" name="email" type="text">
<div class="input_error"></div>
<die><span id="temail" style="color:red"></span></die>
</div>
<div class="col-xs-12 input_label">
您常用的收件地址:
</div>
<div class="col-xs-12">
<input class="form-control input_text is_required" value='{{ $data->address }}' id="users_address" name="address" type="text">
<div class="input_error"></div>
</div>

<div class="col-xs-12 input_label">
您的特殊要求：
</div>
<div class="col-xs-12">
<input class="form-control input_text" value='{{ $data->special }}' id="users_demand" name="special" type="text">
</div>
<input class="col-md-offset-5 col-md-3 col-xs-12 btn green-save-btn"  type="submit" value='保存'>
</form>
</div>
 <script type="text/javascript">

	// var nid = document.getElementById('users_name');
	// var name = document.myform.username.value;
	// console.log(name);
	$("#users_name").blur(function(){
		var name = $(this).val();
		// console.log(name);
		var pattern =/^\w{2-18}$/;
        if(!pattern.test(name)){
            $("#tname").text("姓名为2-18字母数字下划线");
		}else{
			$("#tname").text("");
		}
	});
	$('#bir').blur(function(){
		var birth = $(this).val();
		var pattern =/^(\d{4})-(0\d{1}|1[0-2])-(0\d{1}|[12]\d{1}|3[01])$/;
		// console.log(birth);
		if(!pattern.test(birth)){
			$("#tbir").text('生日格式:如2008-08-08');
		}else{
			$("#tbir").text("");
		}
	});
	$('#kin1').blur(function(){
		var kin1 = $(this).val();
		var pattern =/^(\d{4})-(0\d{1}|1[0-2])-(0\d{1}|[12]\d{1}|3[01])$/;
		// console.log(birth);
		if(!pattern.test(kin1)){
			$("#tkin1").text('生日格式:如2008-08-08');
		}else{
			$("#tkin1").text("");
		}
	});
	$('#kin2').blur(function(){
		var kin2 = $(this).val();
		var pattern =/^(\d{4})-(0\d{1}|1[0-2])-(0\d{1}|[12]\d{1}|3[01])$/;
		// console.log(birth);
		if(!pattern.test(kin2)){
			$("#tkin2").text('生日格式:如2008-08-08');
		}else{
			$("#tkin2").text("");
		}
	});
	// !/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email)
	$('#email').blur(function(){
		var email = $(this).val();
		var pattern =/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		// console.log(birth);
		if(!pattern.test(email)){
			$("#temail").text('邮箱格式:如12345@qq.com');
		}else{
			$("#temail").text("");
		}
	});
</script>

@stop