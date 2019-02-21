<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class EventController extends Controller
{
   public function index()
   {
   		$list=DB::table('event')->paginate(5);
   		// dd($list);
   		return view('admin.event',['list'=>$list]);
   }
   public function create()
   {
   		return view('admin.eventadd');
   }
  	public function store(Request $request)
    {

    	if ($request->hasFile('pic')) {
            //判断传入数据是否有效
            if ($request->file('pic')->isValid()) {
                 // 获取文件类型
                $file = $request->file('pic');
                $ext = $file->getClientOriginalExtension();

            	$picname=time().rand(1000,9999).'.'.$ext;
            
                $file->move('./images/event/',$picname);
                $data=$request->except('_token');
                $data['pic']=$picname;
                $id=DB::table('event')->insertGetId($data);

                if($file->getError()>0){
                        return redirect()->back()->with('meg','图片上传失败!');
                    }else{
                       return redirect('admin/event');
                    }

                }else{
                    return redirect()->back()->with('meg','您传入的文件不是图片,目前系统支持png,jpg,jpeg,gif格式!');
                }
            }else{
                return redirect()->back()->with('meg','您传入的文件无效');
            }
		
   		
   	}
   public  function destroy($id)
  	{
   		$row = DB::table('event')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('/admin/event');
    	}
   }
   public function edit($id)
   {

        $user=DB::table('event')->where('id',$id)->first();

        return view('admin.editevent',['event'=>$user]);
   }
   public function update($id,Request $request)
    {
        $data = $request->except('_token','_method','pic');
        // dd($data);

        if ($request->hasFile('pic')) {
            //判断传入数据是否有效
            if ($request->file('pic')->isValid()) {
                 // 获取文件类型
                $file = $request->file('pic');

                $ext = $file->getClientOriginalExtension();

                $picname=time().rand(1000,9999).'.'.$ext;
            
                $file->move('./images/event/',$picname);

                $data['pic']=$picname;

                if($file->getError()>0){
                    
                        return redirect()->back()->with('meg','图片上传失败!');
                    }else{
                       return redirect('admin/event');
                    }

                }else{
                    return redirect()->back()->with('meg','您传入的文件不是图片,目前系统支持png,jpg,jpeg,gif格式!');
                }
            
            }
        
        $row = DB::table('event')->where('id',$id)->update($data);
        if($row>0){
            return redirect('/admin/event');
      }
    }
}
