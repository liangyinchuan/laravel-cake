<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }
    public function info()
    {
    	return view('admin.info');
    }
}
