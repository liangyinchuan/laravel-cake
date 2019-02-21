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
    <div class="panel-head"><strong class="icon-reorder"> 收藏列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <table class="table table-hover text-center">
      <tr>
        <th width="10%">序号</th>
        <th width="20%">收藏商品图</th>
        <th width="20%">商品名称</th>
        <th width="20%">收藏次数</th>
        <th width="20%">热卖</th>
        <!-- <th width="10%">订单状态</th> -->
        <th width="20%">操作</th>
      </tr>
      <volist name="list" id="vo">
      <!-- {{ $m=1 }} -->
      @foreach ($enshrine as $v)
      <tr>
        <td>{{ $m++ }}</td>
        <td>1</td>
        <td>{{ $v->goodsname }}</td>
        <td>{{ $v->goods_count }}</td>
        <td sfrm="{{ empty($v->hot)?'1':'0' }}">{{ empty($v->hot)?'否':'是' }}</td>
        <!-- <td></td> -->
        <td>
            <div class="button-group">
                <a class="button border-main" href="##########">
                    <span class="hot" nm="{{ $v->goodsname }}" sfrm="{{ empty($v->hot)?'1':'0' }}"> {{ empty($v->hot)?'加入热卖':'取消热卖' }}</span>
                </a>
            </div>
        </td>
      </tr>
      @endforeach
      
        <!-- <tr><td colspan="7"><h2 style="text-align:center;color:red;">没有您想要的信息<h2></td></tr> -->
      <script type="text/javascript">
          $('.hot').click(function(){
            var sfrm = $(this).attr('sfrm');
            var nm = $(this).attr('nm');
            var self = $(this);
            $.get('/admin/hot',{rm:sfrm,nm:nm},function(data){
              if(data==1){
                var haha = self.parents('td').prev('td')
                var ss = haha.attr('sfrm');
                var sf = ss==1?0:1;
                haha.attr('sfrm',sf);
                self.attr('sfrm',sf);
                var aa = ss==1?"是":'否';
                haha.html(aa)
                var z = sfrm==1?"取消热卖":'加入热卖';
                self.html(z);
              }
            })
          })
      </script>

    </table>
        <div class="pagelist" style="float:right;margin-right:13%;"> 
            {{ $enshrine->links() }}
        </div>

  </div>
</form>
</body>
</html>