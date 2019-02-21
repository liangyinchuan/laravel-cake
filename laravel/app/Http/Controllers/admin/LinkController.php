<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LinkController extends Controller
{
    public function index()
    {
    	$list=DB::table('link')->paginate(7);
    	return view('admin.link',['list'=>$list]);
    }
    public function create()
    {
    	return view('admin.addlink');
    }
    public function store(Request $request)
    {
    	$data=$request->except('_token');

   		$id=DB::table('link')->insertGetId($data);
   	if($id>0)
   	{
   		return redirect('/admin/link');
   	}else{
   		return redirect("admin/create");
   	}
   }
   public function destroy($id)
   {
   		$row = DB::table('link')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('/admin/link');
    	}
   }
   public function edit($id)
    {
    	$user = DB::table('link')->where('id',$id)->first();
    	return view('admin.editlink',['link'=>$user]);
    }

    public function update($id,Request $request)
    {
    	$data = $request->only('name','url');
    	$row = DB::table('link')->where('id',$id)->update($data);
    	if($row>0){
    		return redirect('/admin/link');
    	}
    }
}
