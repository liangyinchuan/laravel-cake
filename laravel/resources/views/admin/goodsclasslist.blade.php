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
<form name="myform" action="" method="post" enctype="multipart/form/data">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
<form method="get" action="/admin/goodsclass" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 商品分类列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    
    <table class="table table-hover text-center">
      <tr>
        <th width="20%">分类ID</th>
        <th width="20%">商品类名</th>
        <th width="20%">商品类图标</th>
        <th width="*">操作</th>
      </tr>
      <volist name="list" id="vo">
      @forelse ($list as $v)
      <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->name }}</td>
            <td><img src="{{ asset('images/goods/'.$v->pic) }}" alt="nothing" width="75px" height="40px"></td>
            <td>
                <div class="button-group">
                    <a class="button border-main" href="/admin/goodsclass/{{ $v->id }}/edit">
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
  if(confirm("您确定要删除该分类吗?将删除掉所属该类的所有商品!!!")){
        var form = document.myform;
        form.action = '/admin/goodsclass/'+id;
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