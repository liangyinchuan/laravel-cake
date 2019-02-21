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
                <th width="5%">ID</th>
                <th width="20%">活动图片</th>
                <th width="15%">活动时间</th>
                <th width="30%">活动规则</th>
                <th width="*">操作</th>
            </tr>
            @foreach($list as $v)
            <tr>
                <td>{{ $v->id }}</td>     
                <td><img src="{{ asset('images/event/'.$v->pic) }}" alt="" width="120" height="62" /></td>     
                <td>{{ $v->time }}</td>
                <td>{{ $v->rule }}</td>
                <td><div class="button-group">
                    <a class="button border-main" href="/admin/event/{{ $v->id }}/edit">
                            <span class="icon-edit"></span> 修改活动
                        </a> 
                    <a class="button border-red" href="javascript:void(0)" onclick="return del({{ $v->id }})"><span class="icon-trash-o"></span>取消活动</a>
                </div></td>
            </tr>
            @endforeach
            
            </table>
             {{ $list->links() }}
        </div>

        <script type="text/javascript">
        function del(id){
        	if(confirm("您确定要删除吗?")){
                var ob = document.myform;
                ob.action = '/admin/event/'+id;
                ob.submit();
        	}
        }
        </script>
            <div class="pagelist" style="float:right;margin-right:13%;"> 
            
            </div>
    </body>
</html>