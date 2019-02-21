<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UploadRotationController extends Controller
{
    //
    //显示上传页面
    public function index()
    {
        return view('admin.uploadrotation');
    }   

    public function doUploadRotation(Request $request)
    {
        // $data['pic'] = $request->file('pic');
        // dd($data);
        // 定义文件类型
        $type = array('image/jpeg','image/png','image/gif');
        // 定义文件目录
        $url = url('/images/goods/');
      
        // 判断是否有数据传入
        if ($request->hasFile('pic')) {

            //判断传入数据是否有效
            if ($request->file('pic')->isValid()) {
                
                // 获取文件类型
                $file = $request->file('pic');
                $filetype = $file->getClientMimeType(); 

                // 判断文件类型是否匹配
                if(in_array($filetype, $type)){
                    $ext = $file->getClientOriginalExtension();
                    
                    do{
                        $filename=time().rand(1000,9999).'.'.$ext;
                    }while(file_exists($url.$filename));

                    $file->move('./images/rotation',$filename);
                    $data = $request->only('goodsid','goodsname');
                    $data['pic'] = $filename;
                    $id = DB::table('rotation')->insertGetId($data);

                    if($file->getError()>0){
                        return redirect()->back()->with('meg','图片上传失败!');
                    }else{
                        return view('admin.uploadrotation');
                    }

                }else{
                    return redirect()->back()->with('meg','您传入的文件不是图片,目前系统支持png,jpg,jpeg,gif格式!');
                }
            }else{
                return redirect()->back()->with('meg','您传入的文件无效');
            }
        }else{
            return redirect()->back()->with('meg','您好像错过了什么没有上传!');
        }

    }

        // $name = $file->getClientOriginalName();  //获取上传文件的源文件名
        // $ext = $file->getClientOriginalExtension();  //获取源文件后缀
        // $type = $file->getClientMimeType();          //获取源文件类型
        // $err = $file->getError();                    //获取源文件错误号
        // getClientSize()                              //获取源文件大小
        // dd($err);


}
