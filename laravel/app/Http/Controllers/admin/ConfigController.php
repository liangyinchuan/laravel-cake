<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// use Intervention\Image\ImageManagerStatic as Image;
class ConfigController extends Controller
{
    public function index()
    {
        $list=DB::table('config')->get()->first();
        if($list){
            $logo = $list->logo;
        }else{
            $logo = 'y.jpg';
        }
        return view('admin.config',['config'=>$list,'logo'=>$logo]);
    }
    public function update($id,Request $request)
    {
        $data=$request->only('title','description','keywords','status');
         // dd('lyc');
       
         // 判断是否有数据传入
        if ($request->hasFile('logo')) {
            //判断传入数据是否有效
            if ($request->file('logo')->isValid()) {
                 // 获取文件类型
                $file = $request->file('logo');

                $ext = $file->getClientOriginalExtension();

                $picname = time().rand(1000,9999).'.'.$ext;

                $file->move('./uploads/',$picname);

                 if($file->getError()>0){
                     $data['logo']="y.jpg";
                }else{
                     $data['logo']=$picname;
                }
            }else{
              $data['logo']="y.jpg";
            }
        }else{
            $data['logo']="y.jpg";
        }

        $insert = DB::table('config')->where('id',$id)->first();
        // dd($insert);
        if(!empty($insert)){
            if ($data['logo']=='y.jpg') {
                $data['logo']=$insert->logo;
                // dd($data['logo']);
            }
            $row=DB::table('config')->where('id',$id)->update($data);
            if($row>0){
                return redirect('admin/config');
            }else{
                return redirect('admin/config');
            }

        }else{
            // dd($data);
            DB::table('config')->insertGetId($data);
            return redirect('admin/config');
        }
    }
}