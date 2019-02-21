<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class LoginController extends Controller
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
        return view('home.login',[
            'link'=>$link,
            'tot'=>$tot,
            'list'=>$list,
            'cont'=>$cont
        ]);
    }

    public function logout()
    {
        // dd(123);
        session()->forget('user');

        return redirect('/home');
    }

    public function login(Request $request)
    {
        $data = $request->except('_token');
        $name = $data['username'];
        // dd($name);
        $password = $data['password'];

        if (!empty($name)) {
            if (!empty($password)) {
                $pass = DB::table('user')->where('username',$name)->value('password');
                    // dd($pass);
                if (!$pass) {
                    return redirect()->back()->with('account','该用户名不存在!');
                }else if($pass==$password){
                    //登陆成功返回页面
                    $user = DB::table('user')
                        ->join('userinfo','user.id','=','userinfo.uid')
                        ->select('user.username','user.level','user.limits','user.integral','user.memberno','userinfo.*')
                        ->where('user.username',$name)
                        ->get();
                    $request->session()->push('user', $user);
                    // $da = $request->session()->get('user');
                    // dd($da);
                    return redirect('/home');
                        // dd($user);
                    // return redirect()->back()->with('warning','登陆正常!');
                }else{
                    return redirect()->back()->with('warning','用户名或密码不正确!');
                }
            }else{
                return redirect()->back()->with('pass','密码不能为空!');
            }
        }else{
            return redirect()->back()->with('account','用户名不能为空!');
        }

    }

}
