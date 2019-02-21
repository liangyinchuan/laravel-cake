
<div class="container">
   <div class='product-category'>
		@foreach ($list as $v)
        <a class='tab' href='{{url("home/list/$v->name")}}'>{{$v->name}}</a>
			@if($v->name==$clsnm)
				
				<div class='product-set'>
				@foreach ($goods as $good)
					<div><a class='secondary-tab' href='#####'>{{$good->goodsname}}</a></div>
				@endforeach
				</div>
				
			@endif
		@endforeach
   </div>
<div id="load">
<div class="list">
@foreach ($goods as $good)
    <div class="listinfo ">
        <div class="left"><img src='{{asset("images/goods/$good->goodspics")}}' alt="" width="130px" height="130px"></div>
        <div class="between">
            <div class="one">{{$good->goodsname}}</div>
            <div class="two">￥{{$good->goodsprice}}</div>
            <div class="three">{{$good->goodsinfo}}</div>
            <div class="four"><a href="####">查看详情</a></div>
        </div>
        <div class="right">
          
          <div class="sg"><img src="{{asset('images/1.jpg')}}" width="35px" height="35px"></div>
        <div class="jian aa">-</div>
          <div class="aa" style="font-size:30px">0</div>
          <div class="jia aa">+</div>
          <div class="aaa"><span>加入购物车</span></div>
        </div>
    </div>
   @endforeach 
 </div>  

</div>
