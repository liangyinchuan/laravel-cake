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
          <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>成员修改</strong></div>
          <div class="body-content">
            <form method="post" class="form-x" action="/admin/lyc/{{ $user->id }}"> 
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
              <input type="hidden" name="_method" value="PUT"> 
              <div class="form-group">
                <div class="label">
                  <label>姓名：</label>
                </div>
                <div class="field">
                  <input type="text" class="input w50" value="{{ $user->username }}" name="username" data-validate="required:请输入姓名" />
                  <div class="tips"></div>
                </div>
              </div>

            
              
              <if condition="$iscid eq 1">
                <div class="form-group">
                  <div class="label">
                    <label>权限：</label>
                  </div>
                  <div class="field">
                    <select name="limits" class="input w50" data-validate="required:请选择成员权限">
                      <option value="">-请选择-</option>
                      <option {{ ($user->limits==1)?'selected':'' }} value="1">会员</option>
                      <option {{ ($user->limits==2)?'selected':'' }} value="2">管理员</option>
                    </select>
                    <div class="tips"></div>
                  </div>
                </div>

              </if>
             

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