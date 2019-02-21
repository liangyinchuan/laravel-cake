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
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span></strong>友情链接</div>
  <div class="body-content">
    <form method="post" class="form-x" action="/admin/link">  
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      <div class="form-group">
        <div class="label">
          <label>名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>url地址：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="url" class="input tips" style="width:25%; float:left;"   placeholder="http://www..."  value=""  data-toggle="hover" data-place="right" data-validate="required:请输入网站地址" />
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

</body></html>