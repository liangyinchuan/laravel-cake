<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script src = "{{asset('js/Chart.bundle.js')}}"></script>
<script src = "{{asset('js/jquery.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/app.v2.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('js\calendar/bootstrap_calendar.css') }}" type="text/css" cache="false" />
       
        <section class="vbox">
       
          
            <div class="m-b-md">
              <h3 class="m-b-none">Workset</h3>
              <small>Welcome back, Noteman</small> </div>
            <section class="panel panel-default">
              <div class="row m-l-none m-r-none bg-light lter">
                <div class="col-sm-6 col-md-4 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-male fa-stack-1x text-white"></i> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="uhl">{{$cnt}}</strong></span> <small class="text-muted text-uc">用户量</small> </a> </div>
                <div class="col-sm-6 col-md-4 padder-v b-r b-light lt"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i class="fa fa-bug fa-stack-1x text-white"></i> <span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#fff" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="2000" data-target="#bugs" data-update="3000"></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="bugs">{{$a}}(元)</strong></span> <small class="text-muted text-uc">月销售额</small> </a> </div>
                <div class="col-sm-6 col-md-4 padder-v b-r b-light"> <span class="fa-stack fa-2x pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i> <span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="3000" data-target="#firers" data-update="5000"></span> </span> <a class="clear" href="#"> <span class="h3 block m-t-xs"><strong id="firers">{{$j}}元</strong></span> <small class="text-muted text-uc">今日销售额</small> </a> </div>
               
              </div>
			 <script>
			
			 function getDays(){
var date = new Date();
 
//获取年份
var year = date.getFullYear();
 
//获取当前月份
var mouth = date.getMonth() + 1;
 
//定义当月的天数；
var days ;
 
//当月份为二月时，根据闰年还是非闰年判断天数
if(mouth == 2){
        days= year % 4 == 0 ? 29 : 28;
         
    }
    else if(mouth == 1 || mouth == 3 || mouth == 5 || mouth == 7 || mouth == 8 || mouth == 10 || mouth == 12){
        //月份为：1,3,5,7,8,10,12 时，为大月.则天数为31；
        days= 31;
    }
    else{
        //其他月份，天数为：30.
        days= 30;
         
    }
     
    //输出天数
    return days;
}
			 </script>
            </section>
            <div class="row">
              <div class="col-md-12">
                <section class="panel panel-default">
                  <header class="panel-heading font-bold">单位（/万元）</header>
                  
                    <!-- <div id="flot-1ine" style="height:210px"></div> -->
                    <canvas id="myChart" width="1020" height="300"></canvas>
  <script>
  var data = eval({{$d}});
  //alert(data);

	var days = [];		
for(var i=1 ;i<=getDays();i++)
{
	var s = days.length;
	days[s] = i;
}

var lineChartData = {  
//表的X轴参数
labels : days,
datasets : [
    {
                 //点的外边框颜色
        data : data[0] ,
		 backgroundColor: [
			                "BLUE",
							
			                
			            ]
		
    }
  ]
  
}
   

    window.onload = function(){
        var ctx = document.getElementById("myChart").getContext("2d");
        window.myLine  = new Chart(ctx,{
			    type: 'line',
			    data: lineChartData,
				  options: {
        legend: {
            display: true,
            labels: {
                fontColor: 'white'
            }
        }
}
			});  
    }
setInterval(function(){
	var ct = document.getElementById("myChart").getContext("2d");
	$.ajax({
		url:'{{url("admin/cont")}}',
		type:"get",
		success:function(data){
			
			ct.clearRect(0,0,720,240);
			var dat = JSON.parse(data);
			//alert(dat[2]);
			$("#uhl").html(function(){return dat[2]});
			$("#bugs").html(function(){return dat[1]+'(元)'});
			$("#firers").html(function(){return dat[3]+'(元)'});
			var lineChartData = {  
//表的X轴参数
labels : days,
datasets : [
    {
                 //点的外边框颜色
        data : dat[0] ,
		 backgroundColor: [
			                "BLUE",
							
			                
			            ]
		
    }
  ]
}
   
        var ctx = document.getElementById("myChart").getContext("2d");
        window.myLine  = new Chart(ctx,{
			    type: 'line',
			    data: lineChartData,
           options: {
        legend: {
            display: true,
            labels: {
                fontColor: 'white'
            }
        }
}
			});  
    
		}
	});
	
},30000);
</script>
				
				
				
</div>
                  
         
    

