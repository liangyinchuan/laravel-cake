<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" cntent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="{{ asset('css/pintuer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link data-turbolinks-track="true" href="{{ asset('Css/application-42defd1b11ba9a8c6eab7b7db18f7e3a.css') }}" media="all" rel="stylesheet" />
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/pintuer.js') }}"></script>  
</head>
<body style="height:200px;" >
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="/admin/config/{{ isset($config->id)?($config->id):1 }}">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='hidden' name='_method' value='PATCH'>
      <div class="form-group">
      <!-- <h1>
        @if (session('mes'))
          {{ session('mes') }}

        @endif
      </h1> -->
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" value="{{ isset($config->title)?($config->title):"" }}" data-validate="required:请填写网站标题!" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
          <div class="label">
              <label>图片LOGO：</label>
          </div>
          <div class="field">
              <input type="file" id="pic" style="display:none;" name="logo" {{ empty($config)?'(data-validate="required:请选择网站logo")':'' }} />
              <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img style="background-color:#9C1E2E;" src='{{ asset("./uploads/$logo") }}' width="160px" height="42px" alt="暂无logo">
              @if (session('meg'))
                  <h4 style="padding-top:6px;color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ session('meg') }}</h4>
              @endif
          </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <textarea class="input" name="keywords" style="height:80px" data-validate="required:请填写网站关键字!">{{ isset($config->keywords)?($config->keywords):"" }}</textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="description" data-validate="required:请填写完整的网站描述!" >{{ isset($config->description)?($config->description):"" }}</textarea>
          <div class="tips"></div>
        </div>
      </div>         

     <div class="form-group">
        <div class="label">
          <label>网站状态：</label>
        </div>

        <div class="field">
          <div class="button-group radio">
          
             
        
          <label class="button active"><span class="icon icon-times"></span>            
        
              <input name="status" value="1" type="radio">开启             
          </label>             
        
          <label class="button active"><span class="icon icon-times"></span>            
              <input name="status" value="2" type="radio">关闭
          </label>
          <div style="margin-left:200px;width:100px;text-align:center;background-color:{{ isset($config)?($config->status == 1?'#62F262':'#F28383'):'' }};border-redius:2px 2px;"> {{ isset($config)?($config->status == 1?'网站正常':'网站维护'):'' }}</div>         
           </div>       
        </div>
     </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit">修改</button>
          <button class="button bg-main icon-check-square-o" type="reset"> 重置</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  $('#image1').click(function(){
      $("#pic").click();
  });
</script>
</body></html>