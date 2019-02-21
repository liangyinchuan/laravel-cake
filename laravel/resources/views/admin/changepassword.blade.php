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
        <div class="panel admin-panel">
          <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改密码</strong></div>
          <div class="body-content">
            @if(session('ok'))
                <script type="text/javascript">
                    alert("{{ session('ok') }}");
                </script>
            @endif
            <div class="form-group" style="padding-left:20px;">
                <h1>{{ isset($name)?'尊敬的[管理员]'. $name ."您好!请完成以下步骤更改密码!":'' }}</h1>
            </div>
            
            <form method="post" class="form-x" action="/admin/changepassword/{{ $id }}"> 
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
              <input type="hidden" name="_method" value="PUT"> 
              <div class="form-group">
                <div class="label">
                  <label>原密码：</label>
                </div>
                <div class="field">
                  <input type="password" class="input w50" value="" name="passworded" data-validate="required:请输入原密码!" />
                  <div class="tips"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="label">
                  <label>新密码：</label>
                </div>
                <div class="field">
                  <input type="password" class="input w50" value="" name="newpassword" data-validate="required:请输入新密码!" />
                  <div class="tips"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="label">
                  <label>重复新密码：</label>
                </div>
                <div class="field">
                  <input type="password" class="input w50" value="" name="renewpassword" data-validate="required:请再次输入新密码!" />
                  <div class="tips"></div>
                </div>
              </div>
            
              

             

              <div class="clear"></div>
         
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