<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class GoodsClassController extends Controller
{
    //
    public function index(Request $request)
    {
        // 获取商品类
        $goodsclass = DB::table('goodsclass');
        $list = $goodsclass->paginate(4);
        // dd($list);
        return view('admin.goodsclasslist',['list'=>$list]);
    }

    public function create()
    {
        // $data = DB::table('goodsclass')->get();
        return view('admin.addgoodsclass');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        // dd($data);
        $type = array('image/jpeg','image/png','image/gif');
        // 定义文件目录
        $url = url('/images/goods/');
      
        // 判断是否有数据传入
        if ($request->hasFile('pic')) {

            //判断传入数据是否有效
            if ($request->file('pic')->isValid()) {
                
                // 获取文件类型
                $fileb = $request->file('pic');
                $filetypeb = $fileb->getClientMimeType(); 

                // 判断文件类型是否匹配
                if(in_array($filetypeb, $type)){
                    $extb = $fileb->getClientOriginalExtension();
                    
                    do{
                        $filebname=time().rand(1000,9999).'.'.$extb;
                    }while(file_exists($url.$fileb));
                    $fileb->move('./images/goods',$filebname);
                    

                    $data['pic'] = $filebname;

                    if($fileb->getError()>0){
                        return redirect()->back()->with('meg','添加商品分类图标失败!请重新添加!');
                    }

                }else{
                    return redirect()->back()->with('meg','您传入的文件不是图片,目前系统支持png,jpg,jpeg,gif格式!');
                }
            }else{
                return redirect()->back()->with('meg','您上传的文件无效!');
            }
        }
        // dd($data);
        $id = DB::table('goodsclass')->insertGetId($data);
        if (!$id>0) {
            return redirect()->back()->with('meg','该商品已经存在!请重新添加!');
            die;
        }else{
            return redirect('/admin/goodsclass/');
        }
    }

    

    public function edit($id)
    {
        $goodsclass = DB::select("select id,name,pic from goodsclass where id=?",[$id]);
        // dd($goodsclass[0]);
        return view('admin.editgoodsclass',['goodsclass'=>$goodsclass[0]]);
    }

    public function update($id,Request $request)
    {
        $data = $request->except('_token','_method');
        // dd($data);
        
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

                    $file->move('./images/goods',$filename);
                    $data['pic'] = $filename;

                    if($file->getError()>0){
                        return redirect()->back()->with('meg','商品分类图标上传失败!');
                    }

                }else{
                    return redirect()->back()->with('meg','您传入的文件不是图片,目前系统支持png,jpg,jpeg,gif格式!');
                }
            }else{
                return redirect()->back()->with('meg','您传入的图标无效,请重新上传!');
            }
        }

        $row = DB::table('goodsclass')->where('id',$id)->update($data);
        if($row>0){
            return redirect('/admin/goodsclass/');
        }else{
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        // dd($id);
        $row = DB::table('goodsclass')->where('id',$id)->delete();
        if($row>0){
            return redirect('/admin/goodsclass/');
        }
    }



}
