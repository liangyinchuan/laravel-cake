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
    <form action="" method="post" name="myform">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    <div class="panel admin-panel">
      <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
      <div class="padding border-bottom">  
      </div>
      <table class="table table-hover text-center">
        <tr>
          <th width="15%">轮播图ID</th>
          <th width="10%">商品ID</th>
          <th width="20%">商品名称</th>
          <th width="20%">轮播商品图片</th>
          <th width="*">删除轮播图</th>
        </tr>
       @forelse ($list as $v)
        <tr>
            <td>{{ $v->id }}</td>     
            <td>{{ $v->goodsid }}</td>     
            <td>{{ $v->goodsname }}</td>
            <td><img src="{{ asset('images/rotation/'.$v->pic) }}" alt="" width="120" height="62" /></td>     
            <td><div class="button-group">
            <!-- <a class="button border-main" href="/admin/rotation/{{ $v->id }}/edit"><span class="icon-edit"></span>更换图片</a> -->
            <a class="button border-red" href="javascript:void(0)" onclick="return del({{ $v->id }})"><span class="icon-trash-o"></span>删除图片</a>
            </div></td>
        </tr>
        @empty
            <tr><td colspan="7"><h2 style="text-align:center;color:red;">没有查到您想要的信息!<h2></td></tr>
        @endforelse
        
      </table>
    </div>
    <script type="text/javascript">
    function del(id){
    	if(confirm("您确定要删除吗?")){
            var ob = document.myform;
            ob.action = '/admin/rotation/'+id;
            ob.submit();
    	}
    }
    </script>
        <div class="pagelist" style="float:right;margin-right:13%;"> 
            <!-- <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a>  -->
          <!--   {{ $list->links() }} -->
            {{ $list }}
        
        </div>
  </body>
</html>