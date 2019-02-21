<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class EventController extends Controller
{
    public function event()
    {
        $list = DB::table('goodsclass')->select('name')->get();
    	$config=DB::table('config')->get();
        $data = session()->get('user');
        $data?($user = $data[0][0]->username):($user=null);


        $event=DB::table('event')->get();

        $link = DB::table('link')->get();
        return view('home.event',[
            'link'=>$link,
            'config'=>$config,
            "list"=>$list,
            'user'=>$user,
    		'event'=>$event
    		]);
    }
}
