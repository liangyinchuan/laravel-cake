<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LipingController extends Controller
{
    public function liping()
    {
    	$config=DB::table('config')->get()[0];
		$title = $config->title;
		$keywords = $config->keywords;
		$description = $config->description;
		$status = $config->status;
        $list = DB::table('goodsclass')->select('name')->get();
		$logo = $config->logo;
		$data = session()->get('user');
		$data?($user = $data[0][0]->username):($user=null);
	
		// $logo = null;
		$link = DB::table('link')->get();
		// dd($logo);
    	return view('home.liping',[
            'link'=>$link,
    		"title"=>$title,
			'user'=>$user,
			"keywords"=>$keywords,
			"description"=>$description,
			"status"=>$status,
			"list"=>$list,
			"logo"=>$logo
			]);
    
    }
}
