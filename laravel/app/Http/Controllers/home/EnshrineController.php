<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class EnshrineController extends Controller
{
    // public function show(Request $request)
    public function index()
    {
        $data = session()->get('user');
        $data?($uid = $data[0][0]->uid):($uid=null);

    	$enshrine = DB::table('enshrine')
    	          ->join('user','user.id','=','enshrine.uid')
                  ->join('goods','enshrine.goodsid','=','goods.id')
                  ->where('enshrine.uid',$uid)
                  ->select('enshrine.id as enid','enshrine.*','goods.*','user.*')
    	          ->get();
// dd($enshrine);
        $data = session()->get('user');
        $data?($user = $data[0][0]->username):($user=null);
// <<<<<<< HEAD
                  // dd($enshrine);
        // $list = DB::table('user')->where('id',$id)->get(); 
        $link = DB::table('link')->get();
// =======

        $lists = DB::table('goodsclass')->select('name')->get(); 
                 
// >>>>>>> d4fee6504dd0effc2a68d6b6c02d0b0f388d8086
        return view('home.enshrine',[
            'link'=>$link,         
            'user'=>$user,
            'enshrine'=>$enshrine,
            'lists'=>$lists
            ]);
    }

    public function destroy($id)
    {
        // dd($id)s;
    	$list = DB::table('enshrine')->where('id',$id)->delete();

    	if($list>0){
            return redirect('home/enshrine');
    	}else{
		    return redirect('home/enshrine');
    	}

    }
}
