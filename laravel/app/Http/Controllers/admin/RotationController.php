<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

//轮播控制器
class RotationController extends Controller
{
    //轮播列表展示
    public function index(Request $request)
    {

    	$ob = DB::table('rotation')->paginate(4);
    	
    	$list = $ob;
    	return view('admin.rotationlist',['list'=>$list]);
    }

    //删除轮播图
    public function destroy($id)
    {
    	$row = DB::table('rotation')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('/admin/rotation/');
    	}
    }

}
