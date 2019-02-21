<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
    	$where = [];
    	$ob = DB::table('user');
    	if ($request->input('username')) {

    		$username = $request->input('username');
    		$ob->where('username','like',"%{$username}%");
    		$where['username'] = $username;
    	}

    	if ($request->input('memberno')) {

    		$memberno = $request->input('memberno');
    		$ob->where('memberno','like',"%{$memberno}%");
    		$where['memberno'] = $memberno;
    	}

    	if ($request->input('level')) {

    		$level = $request->input('level');
    		$ob->where('level','=',"{$level}");
    		$where['level'] = $level;
    	}

    	if ($request->input('limits')) {
            $limits = $request->input('limits');
            // dd($limits);
    		$ob->where('limits','=',"{$limits}");
    		$where['limits'] = $limits;
    	}
    	
    	
    	// dd($where);
    	$list = $ob->paginate(4);
    	return view('admin.userlist',['list'=>$list, 'where'=>$where]);
    }

    public function create()
    {
    	return view('admin.adduser');
    }

    public function store(Request $request)
    {
    	$data = $request->except('_token');
        $username = $data['username'];
        $ok = DB::table('user')->where('username',$username)->first();
        // dd($ok);
        if (!$ok) {
            $id = DB::table('user')->insertGetId($data);
            $info['phone'] = $id;
            $info['uid'] = $id;
            // dd($info);
            DB::table('userinfo')->insert($info);
            return redirect('/admin/lyc/create');
        }else{
            return redirect()->back()->with('ok','该用户名已被使用!请换一个试试!');
        }
    }

    public function edit($id)
    {
    	$user = DB::select("select id,limits,username from user where id=?",[$id]);
    	// $user = DB::table('user')->where('id',$id)->first();
    	// dd($user[0]);
    	return view('admin.edituser',['user'=>$user[0]]);
    }

    public function update($id,Request $request)
    {
    	$data = $request->only('username','limits');
    	$row = DB::table('user')->where('id',$id)->update($data);
    	if($row>0){
    		return redirect('/admin/lyc/');
    	}else{
    		return redirect()->back();
    	}
    }

    public function destroy($id)
    {
    	$row = DB::table('user')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('/admin/lyc/');
    	}
    }

}
