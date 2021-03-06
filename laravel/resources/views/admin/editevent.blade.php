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
            <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 修改活动</strong></div>
                <div class="body-content">
                 <form method="post" class="form-x" action="/admin/event/{{ $event->id }}">  
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <input type='hidden' name='_method' value="PUT">


                    <div class="form-group">
                        <div class="label">
                            <label>活动图片：</label>
                        </div>
                        <div class="field">
                            <input type="file" id="pic" style="display:none;"  value="{{ $event->pic }}"  name="pic"  />
                            <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="{{asset('images/event/'.$event->pic )}}" height="43px" style="overflow:hidden;border-redius:40 40;">
                            @if (session('meg'))
                                <h4 style="padding-top:6px;color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ session('meg') }}</h4>
                            @endif 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="label">
                            <label>活动时间：</label>
                        </div>
                        <div class="field">
                            <input type="text" class="input w50" value="{{ $event->time }}" name="time" data-validate="required:请输入活动时间" />
                            <div class="tips"></div>
                        </div>
                    </div>    

                    
                    <div class="form-group">
                        <div class="label">
                          <label>活动规则：</label>
                        </div>
                        <div class="field">
                          <textarea class="input" name="rule"  data-validate="required:请输入活动规则">{{ $event->rule }}</textarea>
                          <div class="tips"></div>
                        </div>
                      </div>         


                    <div class="form-group">
                        <div class="label">
                            <label></label>
                        </div>
                        <div class="field">
                            <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
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
    </body>
</html>