<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class RegisterController extends Controller
{

    public function index()
    {
        $ad = $_SERVER['REMOTE_ADDR'];
        $uid = session()->get('uid','-1'.$ad);
        $list = DB::table('goodsclass')->select('name')->get();
        // dd($uid);
        $tot = DB::select("select count(*) as cot from shopcar where uid=?",[$uid]);
        $tot = empty($tot)?0:$tot;
        $cont = DB::select("select count(*) as cont,goodsid,goodnum,pic from shopcar where uid=? group by goodsid,goodnum,pic",[$uid]);
        
        $link = DB::table('link')->get();
        return view('home.register',[
            'link'=>$link,
            'tot'=>$tot,
            'list'=>$list,
            'cont'=>$cont
        ]);
    }


    public function register(Request $request)
    {
        $data = $request->except('_token');
        // dd($data);
        $limit = $data['limit'];
        $username = $data['username'];
        $phone = $data['phone'];
        $password = $data['password'];
        $repassword = $data['repassword'];
        // dd($name);
        if (empty($username)) {
            // dd(23456);
            return redirect('/home/register')->with('ema','用户名不能为空!');
        }else if (empty($phone)) {
            return redirect('/home/register')->with('pho','手机号不能为空!');
        }else if (empty($password)) {
            return redirect('/home/register')->with('pas','密码不能为空!');
        }else if (empty($repassword)) {
            return redirect('/home/register')->with('rep','请再次输入密码!');
        }else if ($password!=$repassword) {
            return redirect('/home/register')->with('rep','两次输入密码不一致!');
        }else{
            $emai = DB::table('user')->where('username',$username)->first();
            $phon = DB::table('userinfo')->where('phone',$phone)->first();
            // dd($emai);
            if ($emai) {
                return redirect('/home/register')->with('ema','该用户名已被注册!');
            }else if ($phon) {
                return redirect('/home/register')->with('pho','该手机号已被注册!');
            }else{
                // 验证可以被注册
                $user['username'] = $username; 
                $user['limits'] = $limit;
                $user['memberno'] = $phone;
                $user['password'] = $password; 
                $userinfo['phone'] = $phone;
                $uid = DB::table('user')->insertGetId($user);
                $userinfo['uid'] = $uid;
                DB::table('userinfo')->insert($userinfo);
                $data = DB::table('user')->where('username',$username)->first();

                return redirect('/home/login');

            }
        }

    }

}
