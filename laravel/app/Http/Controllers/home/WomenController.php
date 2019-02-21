<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class WomenController extends Controller
{
    public function women()
    {
		$config=DB::table('config')->get()[0];
		$title = $config->title;
		$keywords = $config->keywords;
		$description = $config->description;
		$status = $config->status;
		$logo = $config->logo;
        $list = DB::table('goodsclass')->select('name')->get();
		$data = session()->get('user');
		$data?($user = $data[0][0]->username):($user=null);
		// $logo = null;
		// dd($logo);
		$link = DB::table('link')->get();
    	return view('home.women',[
            'link'=>$link,
    		"title"=>$title,
			'user'=>$user,
			"keywords"=>$keywords,
			"description"=>$description,
			"status"=>$status,
			"logo"=>$logo,
			"list"=>$list

			]);
    }
}



  
