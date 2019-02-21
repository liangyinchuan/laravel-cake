// $('.product-category>.tab').click(function(){
// 	// $(this).next('div').stop(true).slideToggle();
//     $(this).siblings('div').hide();
//     $(this).next('div').stop(true).fadeIn();
// });
$('.jian').click(function(){
      // console.log(12);
      var gsnm = $(this).attr('name');
      // alert(gsnm)
      var self = $(this);
      $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
          type:'post',
         url:'/home/buycar/jian',
         data:{gid:gsnm},
         success:function(data)
         {
            if(data>0){
                var num = parseInt(self.next('div').html());
                var carnum = parseInt($('.carnum').html());
                if(num>0){
                    num--;
                    carnum--;
                }
            self.next('div').html(num);
            $('.carnum').html(carnum)
            }
         }

      }); 
        
        // console.log(num);
});
$('.jia').click(function(){
      // console.log(12);
      var gsnm = $(this).attr('name');
      var picc = $(this).attr('pic');
      var pric = $(this).attr('price');
      var self = $(this);
      // alert(picc)
      // alert(gsnm);
     $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         // async:false
         type:'post',
         url:'/home/buycar',
         data:{gid:gsnm,price:pric,pic:picc},
         success:function(dt)
         {
                // console.log(dt);
                var num = parseInt(self.prev('div').html());
                 var carnum = parseInt($('.carnum').html());
            if(carnum<99){
                num++;
                carnum++;
                var pic = self.prev('div').prev('div').prev('div');
                pic.show().animate({
                    "top" : -90 - 170 * self.parent().parent().index(),
                    "left" : -17,
                    "width" : 20,
                    "height" : 20
                },300,function(){
                    $(this).hide().css({"top":40,"left":0,"width" : 35,"height" : 35})
                });
            }else{
                alert('订单中商品过多，请先支付！')
            }
        self.prev('div').html(num);
         $('.carnum').html(carnum);
         }
        });
        
        
});
$('.secondary-tab').click(function(){
    $('.list').hide();
    var clsnm = $(this).html();
    // console.log(clsnm);
    
    if($('.'+clsnm).length){
        $($('.'+clsnm)).show();
    }else{
      // alert(clsnm);
        $('#load').load("/home/load/"+clsnm);
    }
});
$('.four,.left').click(function(){
   var idd = $(this).attr('idd');
   $("#"+idd).click();
});
$('.aaa').click(function(){
    // $(this).prev('div').click();
     var gsnm = $(this).prev('div').attr('name');
      var picc = $(this).prev('div').attr('pic');
      var pric = $(this).prev('div').attr('price');
      var self = $(this).prev('div');
      // alert(picc)
      // alert(gsnm);
     $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         // async:false
         type:'post',
         url:'/home/buycar',
         data:{gid:gsnm,price:pric,pic:picc},
         success:function(dt)
         {
                // console.log(dt);
                var num = parseInt(self.prev('div').html());
                 var carnum = parseInt($('.carnum').html());
            if(carnum<99){
                num++;
                carnum++;
                var pic = self.prev('div').prev('div').prev('div');
                pic.show().animate({
                    "top" : -90 - 170 * self.parent().parent().index(),
                    "left" : -17,
                    "width" : 20,
                    "height" : 20
                },300,function(){
                    $(this).hide().css({"top":40,"left":0,"width" : 35,"height" : 35})
                });
            }else{
                alert('订单中商品过多，请先支付！')
            }
        self.prev('div').html(num);
         $('.carnum').html(carnum);
           window.location.href="/home/buycar"
         }
        });
        
  
});
$("#pic2").click(function(){
    $("#pic1").click();
})
$(".sa").click(function(){
    // console.log(123);
    $(".sa").attr('id','');
    $(this).attr('id','border');
    var num = $(this).attr('num');
    $('#paytype').val(num);
});
$("[gsid]").click(function(){
    var gid = $(this).attr('gsid');
    // console.log(gid);
    var self = $(this);
    $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         type:'post',
         url:'/home/delete',
         data:{gsid:gid},
         success:function(data){
            
            if(data){
              
               var num = parseInt(self.prev("span").prev("span").prev('span').html());
               var num1 = parseInt($('.carnum').html());
               // console.log(num,num1);
               $('.carnum').html(num1-num);
               var py = parseInt($('.ppy').html());
                var pp = parseInt(self.prev("span").prev('span').html());
                // console.log(py,pp)
                $('.ppy').html(py-pp);
                self.parent('div').remove();
               if(num1-num==0){
                $('.man').replaceWith("<h2>没有商品加入购物车！！<span><a href='/home/list' style='color:green;' class='bck'>返回继续选购</a></span><h2>")
               }
            }
         }
    });
});
$('.ppy').html($('.sun').last().html());
