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


<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 添加商品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/admin/goodsclass" enctype="multipart/form-data">  
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
      <div>
        @if (session('meg'))
            <h1 style="text-align:center;color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ session('meg') }}</h1>
        @endif
        @if (session('ok'))
        <h1 style='color:green;text-align:center;'>{{ session('ok') }}</h1>
        @endif
      </div>

      <div class="form-group">
        <div class="label">
          <label>商品分类名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>     
   
        <div class="form-group">
            <div class="label">
                <label>商品分类图标：</label>
            </div>
            <div class="field">
                <input type="file" id="pics" style="display:none;" name="pic"  data-validate="required:请选择商品分类图标!" />
                <input type="button" class="button bg-blue margin-left" id="images" value="+ 浏览上传"  style="float:left;">

            </div>
        </div>

        <script type="text/javascript">
          
            $('#images').click(function(){
                $("#pics").click();
            });
        </script>

          
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
  </body>
</html>