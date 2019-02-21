<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ChangePasswordController extends Controller
{
    //
    public function index(Request $request)
    {
        $v = $request->session()->get('adminuser.id');
    	$name = $request->session()->get('adminuser.username');
    	return view('admin.changepassword',['id'=>$v,'name'=>$name]);
    }

    public function update($id,Request $request)
    {
        // dd($id);
        $user = DB::table('user')->where('id',$id)->first();
        $p = $user->password;
        $data = $request->input();
        // dd($data);
        $password = $data['passworded'];
        $newpassword = $data['newpassword'];
        $renewpassword = $data['renewpassword'];
        // dd($renewpassword);
        if (empty($password) || empty($newpassword) || empty($renewpassword)) {
            return back()->with('ok','好像忘记了什么没有填哦!');
        }else{

            if ($password!=$p) {
                return back()->with('ok','原密码错误!');

            }else if($newpassword!=$renewpassword){
                return back()->with('ok','两次新密码输入不一致!请重新输入!');

            }else{
                $pass['password'] = $newpassword;
                $id = DB::table('user')->where('id',$id)->update($pass);
                return back()->with('ok','密码修改成功!');
            }


        }



    }



}
