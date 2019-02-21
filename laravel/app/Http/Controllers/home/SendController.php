<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SendController extends Controller
{
    public function send()
    {
		$data = session()->get('user');
        $data?($user = $data[0][0]->username):($user=null);

        $list = DB::table('goodsclass')->select('name')->get();
    	$config=DB::table('config')->get();

        $link = DB::table('link')->get();
        
        return view('home.send',[
            'link'=>$link,
    		'config'=>$config,
			'user'=>$user,
    		"list"=>$list
    		]);
    }
}
