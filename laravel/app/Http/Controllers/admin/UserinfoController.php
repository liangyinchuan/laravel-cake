<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UserinfoController extends Controller
{
    public function show($id)
    {

        //实例化要操作的表
        $list = DB::table('user')
            ->join('userinfo','user.id','=','userinfo.uid')
            ->select('user.username','user.level','user.limits','user.integral','user.memberno','userinfo.*')
            ->where('user.id','=',$id)
            ->first();

            // dd($list);

        // $db = DB::table('userinfo');
     
    	// $list=$db->where('uid','=',$id)->first();
      // dd($list);
    	return view('admin.userinfo',['list'=>$list]);
    }
   /* public function create()
    {
    	return view('admin.userinfoadd');
    }*/
    public function store(Request $request)
    {
    	$data=$request->except('_token');
      dd($data);

   		$id=DB::table('userinfo')->insertGetId($data);
     	if($id>0)
     	{
     		return redirect('/admin/userinfo');
     	}else{
     		return redirect("admin/create");
     	}
    }
    public function destroy($id)
   {
      $row = DB::table('userinfo')->where('id',$id)->delete();
      if($row>0){
        return redirect('/admin/info');
      }
   }
   public function edit($id)
    {
      $user = DB::table('userinfo')->where('id',$id)->first();
        return view('admin.userinfoedit',['userinfo'=>$user]);
    }

    public function update($id,Request $request)
    {
      $data = $request->only('uid','phone','birth','kin','email','address','spcial');
      $row = DB::table('userinfo')->where('id',$id)->update($data);
      if($row>0){
        return redirect('/admin/userinfo');
      }
    }
}
