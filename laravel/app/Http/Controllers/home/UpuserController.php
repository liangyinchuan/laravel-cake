<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UpuserController extends Controller
{
    //  public function index($id)
    // {
    //     $data = DB::table('userinfo')
    //           ->join('user','userinfo.uid','=','user.id')
    //           // ->join('userinfo','userinfi.uid','=','user','user.id')
    //           ->where('userinfo.uid',$id)
    //           ->first();
    //    // dd($data);
    //         return view('home.upuser',['data'=>$data]);
    //         // return view('home.upuser',['data'=>$data]);
        
    // }

    public function edit($id)
    {
        // dd($id);
        $data = session()->get('user');
        $data?($user = $data[0][0]->username):($user=null);
        $data = DB::table('userinfo')
              ->join('user','userinfo.uid','=','user.id')
              // ->join('userinfo','userinfi.uid','=','user','user.id')
              ->where('userinfo.uid',$id)
              ->first();
        $lists = DB::table('goodsclass')->select('name')->get();
       // dd($data);
        $link = DB::table('link')->get();
        return view('home.upuser',[
            'link'=>$link,
            'user'=>$user,
            'lists'=>$lists,
            'data'=>$data
        ]);
            // return view('home.upuser',['data'=>$data]);
        
    }

    public function show($id,Request $request)
    {
        //  $this->validate($request,[
          
        //     'birth' => 'required|regex:/^[1-2][0-9][0-9][0-9][-](([0][2]))[-](([2][9]))$/',
        //     'username' => 'required|regex:/^\w{2-18}$/'
            
        // ],[
        //     'birth.required'=>'生日不能为空',
        //     'birth.regex'=>'生日格式如1992-01-01',
        //     'username.required' =>'姓名不能为空'
            
        // ]);
        $list = $request->only('username','email','address','special','birth','kin1','kin2');
        $db = DB::table('user')
            // ->join('user','user.id','=','userinfo.uid')
            ->join('userinfo','userinfo.uid','=','user.id')
            ->where('uid',$id)
            ->update($list);
        if($db>0){
            // echo "<script>alert('保存成功')</script>";
            return redirect('/home/heart')->with("alert('保存成功')");
            // return view('home.upuser');
        }else{
            return redirect('/home/upuser');
        }
    }
}
