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
<form method="get" action="/admin/lyc" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li style="font-size:30px;">搜索：</li>
        <li>用户
          <input name="username" type="text" class="input" onchange="changesearch()" style="width:110px; line-height:17px; display:inline-block">
          &nbsp;&nbsp;
          会员编号
          <input name="memberno" type="text" class="input" onchange="changesearch()" style="width:110px; line-height:17px; display:inline-block">
          &nbsp;&nbsp;
          会员等级
          <input name="level" type="text" class="input" onchange="changesearch()" style="width:60px; line-height:17px; display:inline-block">
          权限属性        
          <select name="limits" class="input" onchange="changesearch()"  style="width:76px; line-height:17px;display:inline-block">
                <option value="">选择</option>
                <option value="1">会员</option>
                <option value="2">管理员</option>
          </select>
        </li>
        <li>
          <input type="submit" class="button border-main icon-search" value="搜索" ></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="10%" style="text-align:left; padding-left:40px;">ID</th>
        <th width="10%">用户名</th>
        <th width="10%">会员编号</th>
        <th width="10%">会员等级</th>
        <th width="10%">权限属性</th>
        <th width="10%">积分</th>
        <th width="310">操作</th>
      </tr>
      <volist name="list" id="vo">
      @forelse ($list as $v)
      <tr>
        <td style="text-align:left; padding-left:40px;">{{ $v->id }}</td>
        <td>{{ $v->username }}</td>
        <td>{{ $v->memberno }}</td>
        <td>{{ $v->level }}</td>
        <td>{{ ($v->limits)==2?'管理员':"会员" }}</td>
        <td>{{ $v->integral }}</td>
        <td>
            <div class="button-group">
            	<a class="button border-main" href="/admin/userinfo/{{ $v->id }}">
                    <span class="icon-edit"></span> 用户详情
                </a> 
                <a class="button border-main" href="/admin/lyc/{{ $v->id }}/edit">
                    <span class="icon-edit"></span> 修改
                </a> 
                <a class="button border-red" href="javascript:void(0)" onclick="return del({{ $v->id }})">
                    <span class="icon-trash-o"></span> 删除
                </a> 
                 
            </div>
        </td>
      </tr>
      @empty
      	<tr><td colspan="7"><h2 style="text-align:center;color:red;">没有您想要的信息<h2></td></tr>
      @endforelse


    </table>
                <div class="pagelist" style="float:right;margin-right:13%;"> 
                    <!-- <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a>  -->
                  <!--   {{ $list->links() }} -->
                    {{ $list }}
                
                </div>
  </div>
</form>
<script type="text/javascript">

//搜索
function changesearch(){	
		
}

//单个删除
function del(id){
	if(confirm("您确定要删除吗?")){
        var form = document.myform;
        form.action = '/admin/lyc/'+id;
        form.submit()
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

</script>
</body>
</html>