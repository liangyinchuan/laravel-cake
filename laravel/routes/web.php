<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('aa',function(){
	return view("home.code");
});

// 验证码
Route::get('/capch/{tmp}','admin\LoginController@capch');
// 登录
Route::get('admin/login','admin\LoginController@index');
Route::post('admin/login','admin\LoginController@dologin');
// 退出
Route::get('admin/logout','admin\LoginController@logout');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	//后台首页
	Route::get('/', function () {
	    return view('admin.index');
	});
	// 活动管理
	Route::resource('/event','admin\EventController');
	// 用户
	Route::resource('/lyc','admin\UserController');
	// 订单
	Route::resource('/order','admin\OrderController');
	// 轮播图
	Route::resource('/rotation','admin\RotationController');
	//轮播图片路由
    Route::get('/uploadrotation','admin\UploadRotationController@index');
    Route::post('/uploadrotation','admin\UploadRotationController@doUploadRotation');

    //hot

	// 统计
	Route::get('count','admin\CountController@count');
	Route::get('cont','admin\CountController@cont');

	//友情链接
	Route::resource('/link','admin\LinkController');
	// 网站配置
	Route::resource('/config','admin\ConfigController');
	// 用户详情
	Route::resource('/userinfo','admin\UserinfoController');

	// 商品管理路由
    Route::resource('/goods','admin\GoodsController');
    Route::resource('/delgoods','admin\DelGoodsController');

	// 商品分类路由
	Route::resource('/goodsclass','admin\GoodsClassController');

    // 商品收藏
    Route::resource('/enshrine','admin\EnshrineController');
    Route::get('hot','admin\EnshrineController@hot');
    // 更改密码
    Route::resource('/changepassword','admin\ChangePasswordController');
});

Route::group(['middleware'=>'checkstatus'],function(){

// 前台
Route::get('/',function (){
	return redirect('/home');
});
	
	// 首页
	Route::get('/home','home\IndexController@index');
	
	// 寻找我们
	Route::get('/home/find','home\IndexController@find');

	// 商品列表路由
	Route::get('/home/list/{clsnm?}','home\IndexController@list');
	Route::post('/home/jrgwc',"home\IndexController@jrgwc");
	
	// 用户详情
	Route::get('/home/load/{clsnm?}','home\IndexController@load');

	// 购物车
	Route::post('/home/buycar','home\BuyCarController@add');
	Route::get('/home/buycar','home\BuyCarController@pay');
	Route::post('/home/buycar/jian','home\BuyCarController@jian');
	Route::post('/home/delete','home\BuyCarController@delete');

	// 前台活动页面
	Route::get('/home/event','home\EventController@event');

	// 付款
	Route::get('/home/code',"home\CodeController@code");
	Route::get("/home/qcode/{total}","home\CodeController@qcode");


	// 返回注册页面
	Route::get('/home/register','home\RegisterController@index');
	Route::post('/home/register','home\RegisterController@register');

	// 订单
	Route::post('/home/order','home\OrderController@store');
	Route::get('/home/order/{orderno}','home\OrderController@index');

	//关于路由
	Route::get('/home/women','home\WomenController@women');
 	Route::get('/home/huiyuan','home\HuiyuanController@huiyuan');
 	Route::get('/home/liping','home\LipingController@liping');
	
	// 派送须知
	Route::get('/home/send','home\SendController@send');
	
Route::group(['prefix'=>'home','middleware'=>'home'],function(){
	// 商品收藏路由
	Route::post('sc',"home\IndexController@sc");
	
	// 退出
	Route::get('/logout','home\LoginController@logout');

	 //用户收藏
    Route::resource('/enshrine','home\EnshrineController');
     //个人中心
    Route::resource('/heart','home\HeartController');
    // 更改用户信息
    Route::resource('/upuser','home\UpuserController');
    // 我的足迹
    // Route::resource('/myfoot','home\MyfootController');    

    //个人订单
    Route::resource('/privateorder','home\PrivateOrderController');

    // 修改密码
    Route::resource('/editpassword','home\EditPasswordController');
});

    // 404返回错误页面
    Route::get('/home/error',function (){
    	return view('home.error');
    });



	// 返回注册页面
	Route::get('/home/register','home\RegisterController@index');
	Route::post('/home/register','home\RegisterController@register');

	//返回登录页面
	Route::get('/home/login','home\LoginController@index');
	// 登录控制器
	Route::post('/home/login','home\LoginController@login');



	// 测试路由  完成后必须删除
	Route::resource('/test',"home\IndexController");
});

	// 维护路由
	Route::get('/maintain',function (){
		return view('home.maintain');
	});

