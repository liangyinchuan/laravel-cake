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
<body >
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder">用户详情表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom" style="padding:50px;background-image:url('/images/bg.jpg');">
      
    <table class="text-left" style="font-size:20px;line-height:44px;">

        <tr>
            <th style="padding-right:100px;">用户名：</th>
            <td style="padding-right:100px;">{{ $list->username }}</td>
            <th style="padding-right:100px;">用户属性：</th>
            <td style="padding-right:100px;">{{ ($list->limits)==2?'管理员':'会员' }}</td>
        </tr>
        <tr>
            <th>用户ID：</th>
            <td>{{ $list->uid }}</td>
            <th>用户level：</th>
            <td>{{ $list->level }}</td>
        </tr>
        <tr>
            <th>用户编号：</th>
            <td><font color="#00CC99">{{ $list->memberno }}</font></td>
            <th>生日：</th>
            <td>{{ $list->birth }}</td>
        </tr>
        <tr>
          <th>用户电话：</th>
          <td><font color="#00CC99">{{ $list->phone }}</font></td>
            <th>积分：</th>
            <td>{{ $list->integral }}</td>
        </tr>
        <tr>
            <th>亲属1生日：</th>
            <td>{{ $list->kin1 }}</td>
        </tr>
        <tr>
            <th>亲属2生日：</th>
            <td>{{ $list->kin2 }}</td>
        </tr>
        <tr>
            <th>电子邮箱：</th> 
            <td>{{ $list->email }}</td>
        </tr>
        <tr>
            <th>地址：</th>
            <td>{{ $list->address }}</td>
        </tr>
        <tr>
            <th>特殊要求：</th>
            <td>{{ $list->special }}</td>
        </tr>


    </table>

    </div>


  </div>
</body>
</html>