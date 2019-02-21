<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="{{ asset('css/pintuer.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/pintuer.js') }}"></script>
</head>
<body>
<form action='/link' method='post' name='myform'>
  <input type='hidden' name='_token' value='{{ csrf_token() }}'>
  <input type='hidden' name='_method' value='DELETE'>
</form>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 友情列表</strong></div>
  <div class="padding border-bottom">  
 
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th >ID</th>
      <th >名称</th>
      <th >地址</th>
      <th >操作</th>
    </tr>
    @foreach($list as $v)
    <tr>
      <td>{{ $v->id }}</td>     
      <td>{{ $v->name }}</td>
      <td>{{ $v->url }}</td>
      <td><div class="button-group">
      <a class="button border-main" href="/admin/link/{{ $v->id }}/edit"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="javascript:doDel({{ $v->id }})"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
    @endforeach

  </table>
  {{ $list->links() }}
<script type="text/javascript">
function doDel(id){
	if(confirm("您确定要删除吗?")){
	   var form = document.myform;
     form.action = 'link/'+id;
    form.submit()
	}
}
</script>

</body></html>