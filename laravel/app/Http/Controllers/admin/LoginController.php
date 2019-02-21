<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\models\User;

//验证码的类
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    public function index()
    {
		return view('admin.login');
    }

    public function dologin(Request $request)
    {
         // dd($request->input('code'));
        $mycode = session()->get('milkcaptcha');
        if($mycode != $request->input('code')){
            return back()->with('msg','验证码错误！');
        }
        //实例化一个模型
    	$user = new User();
        //调用模型中的验证用户方法
    	$ob = $user->checkUser($request);
    
    	//根据验证结果处理
    	if($ob){
    		//如果都能通过，则把用户信息存储到session中
			session(['adminuser'=>$ob]);
			//重定向到后台页面
			return redirect('admin/');
    	}else{
			return back()->with('msg','登录失败：账号或者密码错误');
		}
    }

    public function logout()
    {
        // 销毁session
        session()->forget('adminuser');
        return redirect('admin/login');
    }

    public function capch($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session()->flash('milkcaptcha', $phrase);
        
        return response($builder->output())->header('content-type','image/jpeg');
    }
    
}
