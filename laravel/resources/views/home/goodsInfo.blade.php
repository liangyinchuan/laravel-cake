
<div class="{{$gif->goodsname}} list">
        <link href="{{asset('css/jquery.slideBox.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('js/jquery-1.7.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.slideBox.js')}}" type="text/javascript"></script>
        <script>
            jQuery(function($){
            	$('#demo1').slideBox();
            	$('#demo2').slideBox({
            		direction : 'top',//left,top#方向
            		duration : 0.3,//滚动持续时间，单位：秒
            		easing : 'linear',//swing,linear//滚动特效
            		delay : 5,//滚动延迟时间，单位：秒
            		startIndex : 1//初始焦点顺序
            	});
            	$('#demo3').slideBox({
            		duration : 0.3,//滚动持续时间，单位：秒
            		easing : 'linear',//swing,linear//滚动特效
            		delay : 5,//滚动延迟时间，单位：秒
            		hideClickBar : false,//不自动隐藏点选按键
            		clickBarRadius : 10
            	});
            	$('#demo4').slideBox({
            		hideBottomBar : true//隐藏底栏
            	});
            });
        </script>
    </head>
    <body>
        <div style="">
            
            <div id="demo1" class="slideBox">
                <ul class="items">

                    <li><a href="#" title=""><img style="width:900px;height:500px;" src='{{asset("images/goods/$gif->goodspicb")}}'></a></li>
                    
                    <li><a href="#" title=""><img style="width:900px;height:500px;" src='{{asset("images/goods/$gif->goodspics")}}'></a></li>

                </ul>
            </div>
            <div style="float:right;margin-right:50px;margin-top:20px"><a id="sc" href="#" onclick="fun({{$gif->id}})">收藏商品<img src="{{asset('images/sc.gif')}}" alt=""></a></div>
            <div style="padding:0px;height:340px;">
                
                <div style="width:40%;padding:20px;float:left;">
                    <h3>{{$gif->goodsname}}</h3>
                    <h5>{{$gif->goodsinfo}}</h5>
                    <h5>
                        <span>温馨提示 : </span>
						{{$gif->remark}}
                    </h5>
                    <span>主要配料</span>
                    <div style="font-size:12px;">
					{{$gif->dosing}}
					</div>
                </div>
             
                <div style="border:0px solid red;margin:80px;padding:80px;float:right;">
                    <form action="#####">
                        ￥<span>{{$gif->goodsprice}}</span>&nbsp;
                        数量：<input id='nb' type="number" name="" value="1" min="1" step="1" style="width:50px;"><br><br>
                        <a id='ljgm' style="text-decoration:none;" href="####"><div style="display:inline;border:2px solid #9C1E2E;background-color:#9C1E2E;color:#FFFFF1;font-size:13px;padding:5px;border-radius:5px;width:80px;">立即购买</div></a>
                        <!-- <a id='jrgwc' style="text-decoration:none;" href="####"><div style="height:32px;border:2px solid #390C20;background-color:#390C20;color:#FFFFF1;padding:5px;border-radius:5px;" >加入购物车</div></a> -->
                        <input id='jrgwc' style="height:32px;border:2px solid #390C20;background-color:#390C20;color:#FFFFF1;padding:5px;border-radius:5px;" type="button" value="加入购物车">
                    </form>
                </div>
            </div>
<script type="text/javascript">
// window.onload = function(){
	$('#jrgwc').click(function(){
		var num = parseInt($('#nb').val());
		var gid = {{$gif->id}};
		var price = {{$gif->goodsprice}};
		// var pic = {{$gif->goodspics}};
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			},
			url:"/home/jrgwc",
			type:'post',
			async:"false",
			data:{num:num,gid:gid,price:price},
			success:function(data)
			{
				var cn = parseInt($('.carnum').html())+num;
				$('.carnum').html(cn);
				
			}
		})
	});
$('#ljgm').click(function(){
	var num = parseInt($('#nb').val());
		var gid = {{$gif->id}};
		var price = {{$gif->goodsprice}};
		// var pic = {{$gif->goodspics}};
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			},
			url:"/home/jrgwc",
			type:'post',
			async:"false",
			data:{num:num,gid:gid,price:price},
			success:function(data)
			{
				var cn = parseInt($('.carnum').html())+num;
				$('.carnum').html(cn);
				window.location.href="/home/buycar";
			}
		})
	
})
$('#sc').click(function(){
	var gid = {{$gif->id}};
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			},
			url:"/home/sc",
			type:'post',
			async:"false",
			data:{gid:gid},
			success:function(data)
			{
                console.log(data);
				if(data==0){
					alert("请先登录！")
				}
			}
		})
});

</script>
            <div style="border-top:1px solid #390C20;padding:10px;padding-top:0px;margin-top:20px;font-size:12px;">
                <h4 style="clear:both;">温馨提示</h4>
                1、蛋糕收到后在2-3小时食用最佳, 纸杯蛋糕收到后在1小时食用最佳，如果食用不完请冷藏保存，在24小时内食用完毕
                <br>
                2、如对上述食材有过敏经历者请选择其它款蛋糕
            </div>
        </div>
</div>