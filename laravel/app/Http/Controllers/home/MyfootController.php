<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class MyfootController extends Controller
{
    public function index()
    {
    	$data = session()->get('user');
		$data?($user = $data[0][0]->username):($user=null);
		
    	return view('home.myfoot',['user'=>$user]);
    }
}
