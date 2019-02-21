<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class HeartController extends Controller
{
     public function index()
    {
        $data = session()->get('user');
        $data?($user = $data[0][0]->username):($user=null);
        // dd($user);
        // $integral = 
        $list = DB::table('user')
              ->join('userinfo','user.id','=','userinfo.uid')
              ->where('user.username',$user)
              // ->select('user.*','userinfo.*')
              ->first(); 
              // dd($list);
        $lists = DB::table('goodsclass')->select('name')->get();
        // dd($list);
        $link = DB::table('link')->get();
        return view('home.heart', [
            'link'=>$link,
            'user'=>$user,
            'list'=>$list,
            'lists'=>$lists
            ]);
    }

    // public function edit($uid)
    // {
    //     $data = session()->get('user');
    //     $data?($user = $data[0][0]->username):($user=null);
    //     // dd($user);
    //     $list = DB::table('user')
    //           ->join('userinfo','user.id','=','userinfo.uid')
    //           ->where('user.username',$user)
    //           ->first(); 
    //     $lists = DB::table('goodsclass')->select('name')->get();
    //     dd($list);
    //     return view('home.upuser', [
    //         'user'=>$user,
    //         'data'=>$list,
    //         'lists'=>$lists
    //         ]);

    // }


}    
 
