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
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改商品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/admin/delgoods/{{ $goods->id }}" enctype="multipart/form-data">  
        <input type="hidden" name="_method" value="PUT">  
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
      <div>
        @if (session('meg'))
            <h1 style="text-align:center;color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ session('meg') }}</h1>
        @endif
<!--         @if (session('ok'))
        <h1 style='color:green;text-align:center;'>{{ session('ok') }}</h1>
        @endif -->
      </div>

      <div class="form-group">
        <div class="label">
          <label>商品名称：</label>
        </div>
        <div class="field">
          <input type="text" style="margin-right:100px;" class="input w50" value="{{ $goods->goodsname }}" name="goodsname" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>     
      <div class="form-group">
        <div class="label">
          <label>商品价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="{{ $goods->goodsprice }}" name="goodsprice" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>    

      <div class="form-group">
        <div class="label">
          <label>商品状态：</label>
        </div>
        <div class="field">
            <select name="status" class="input" onchange="changesearch()"  style="width:100px; line-height:17px;display:inline-block">
                <option value="1">---正常---</option>
                <option selected value="2">---下架---</option>
                <option value="3">---新品---</option>
            </select>
        </div>
      </div>  

        <div class="form-group">
            <div class="label">
                <label>商品大图：</label>
            </div>
            <div class="field">
                <input type="file" id="picb" style="display:none;" name="goodspicb"/>
                <input type="button" class="button bg-blue margin-left" id="imageb" value="+ 浏览上传"  style="float:left;">

            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>商品小图：</label>
            </div>
            <div class="field">
                <input type="file" id="pics" style="display:none;" name="goodspics"/>
                <input type="button" class="button bg-blue margin-left" id="images" value="+ 浏览上传"  style="float:left;">

            </div>
        </div>

        <script type="text/javascript">
            $('#imageb').click(function(){
                $("#picb").click();
            });
            $('#images').click(function(){
                $("#pics").click();
            });
        </script>  

      <div class="form-group">
        <div class="label">
          <label>商品简介：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="goodsinfo" style="height:120px;" value="">{{ $goods->goodsinfo }}</textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>商品描述：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="gocarinfo" style="height:120px;" value="">{{ $goods->gocarinfo }}</textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>商品备注：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="remark" style="height:120px;" value="">{{ $goods->remark }}</textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>商品配料：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="dosing" style="height:120px;">{{ $goods->dosing }}</textarea>
          <div class="tips"></div>
        </div>
      </div>
      
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