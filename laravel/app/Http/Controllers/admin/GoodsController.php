<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class GoodsController extends Controller
{
    //
    public function index(Request $request)
    {
        // 获取商品类
        $goodsclass = DB::table('goodsclass')->get();

        // 查询条件
        $where = [];
        $ob = DB::table('goods');
        if ($request->input('goodsname')) {

            $goodsname = $request->input('goodsname');
            $ob->where('goodsname','like',"%{$goodsname}%");
            $where['goodsname'] = $goodsname;
        }

        // dd($ob);
        if ($request->input('id')) {

            $id = $request->input('id');
            $ob->where('id','=',"{$id}");
            $where['id'] = $id;
        }

        if ($request->input('status')) {

            $status = $request->input('status');
            $ob->where('status','=',"{$status}");
            $where['status'] = $status;
        }

        if ($request->input('classname')) {

            $fid = $request->input('classname');
            $ob->where('classname','=',"{$fid}");
            $where['classname'] = $fid;
        }

        $list = $ob->where('status','!=','2')->paginate(4);
        return view('admin.goodslist',['list'=>$list, 'where'=>$where, 'goodsclass'=>$goodsclass]);
    }

    public function create()
    {
        $data = DB::table('goodsclass')->get();
        return view('admin.addgoods',['data'=>$data]);
    }

    public function store(Request $request)
    {



        $type = array('image/jpeg','image/png','image/gif');
        // 定义文件目录
        $url = url('/images/goods/');
      
        // 判断是否有数据传入
        if ($request->hasFile('goodspicb') && $request->hasFile('goodspics')) {

            //判断传入数据是否有效
            if ($request->file('goodspicb')->isValid() && $request->file('goodspics')->isValid()) {
                
                // 获取文件类型
                $fileb = $request->file('goodspicb');
                $files = $request->file('goodspics');
                $filetypeb = $fileb->getClientMimeType(); 
                $filetypes = $files->getClientMimeType(); 

                // 判断文件类型是否匹配
                if(in_array($filetypeb, $type) && in_array($filetypes, $type)){
                    $extb = $fileb->getClientOriginalExtension();
                    $exts = $files->getClientOriginalExtension();
                    
                    do{
                        $filebname=time().rand(1000,9999).'.'.$extb;
                    }while(file_exists($url.$fileb));
                    $fileb->move('./images/goods',$filebname);
                    
                    do{
                        $filesname=time().rand(1000,9999).'.'.$exts;
                    }while(file_exists($url.$files));
                    $files->move('./images/goods',$filesname);


                    $data = $request->except('_token');
                    $data['goodspicb'] = $filebname;
                    $data['goodspics'] = $filesname;

                    $id = DB::table('goods')->insertGetId($data);
                    if (!$id>0) {
                        return redirect()->back()->with('meg','该商品已经存在!请重新添加!');
                        die;
                    }
                    if($fileb->getError()>0 || $files->getError()>0 ){
                        return redirect()->back()->with('meg','添加商品失败!请重新添加!');
                    }else{
                        return redirect('admin/goods/create')->with('ok',"添加成功!");
                        // return view('admin/addgoods');
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

    

    public function edit($id)
    {
        $goods = DB::select("select id,status,goodsname,goodsprice,goodspicb,goodspics,goodsinfo,gocarinfo,remark,dosing from goods where id=?",[$id]);
        // dd($goods);
        return view('admin.editgoods',['goods'=>$goods[0]]);
    }

    public function update($id,Request $request)
    {
        $data = $request->except('_token','_method');
        // dd($data);
        
        $type = array('image/jpeg','image/png','image/gif');
        // 定义文件目录
        $url = url('/images/goods/');
      
        // 判断是否有数据传入
        if ($request->hasFile('goodspicb')) {

            //判断传入数据是否有效
            if ($request->file('goodspicb')->isValid()) {
                
                // 获取文件类型
                $fileb = $request->file('goodspicb');
                $filetypeb = $fileb->getClientMimeType(); 

                // 判断文件类型是否匹配
                if(in_array($filetypeb, $type)){
                    $extb = $fileb->getClientOriginalExtension();
                    
                    do{
                        $filenameb=time().rand(1000,9999).'.'.$extb;
                    }while(file_exists($url.$filenameb));

                    $fileb->move('./images/goods',$filenameb);
                    $data['goodspicb'] = $filenameb;

                    if($fileb->getError()>0){
                        return redirect()->back()->with('meg','商品大图上传失败!');
                    }

                }else{
                    return redirect()->back()->with('meg','您传入的文件不是图片,目前系统支持png,jpg,jpeg,gif格式!');
                }
            }else{
                return redirect()->back()->with('meg','您传入大图无效,请重新上传!');
            }
        }

            // 判断是否有数据传入
        if ($request->hasFile('goodspics')) {

            //判断传入数据是否有效
            if ($request->file('goodspics')->isValid()) {
                
                // 获取文件类型
                $files = $request->file('goodspics');
                $filetypes = $files->getClientMimeType(); 

                // 判断文件类型是否匹配
                if(in_array($filetypes, $type)){
                    $exts = $files->getClientOriginalExtension();
                    
                    do{
                        $filenames=time().rand(1000,9999).'.'.$exts;
                    }while(file_exists($url.$filenames));

                    $files->move('./images/goods',$filenames);
                    $data['goodspics'] = $filenames;

                    if($files->getError()>0){
                        return redirect()->back()->with('meg','商品小图上传失败!');
                    }

                }else{
                    return redirect()->back()->with('meg','您传入的文件不是图片,目前系统支持png,jpg,jpeg,gif格式!');
                }
            }else{
                return redirect()->back()->with('meg','您传入小图无效,请重新上传!');
            }
        }




        $row = DB::table('goods')->where('id',$id)->update($data);
        if($row>0){
            return redirect('/admin/goods/');
            // return redirect()->back();
        }else{
            return redirect()->back();
        }
    }



}
