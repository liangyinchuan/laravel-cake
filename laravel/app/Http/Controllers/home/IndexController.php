<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;


class IndexController extends Controller
{
    public function index(Request $request)
    {

        $data = session()->get('user');
        // dd($data);
        $data?($user = $data[0][0]->username):($user=null);
        
        // dd($user);
        // $rotation = DB::table('rotation')->get();
        $rotation = DB::table('rotation')
            ->join('goods', 'rotation.goodsid', '=', 'goods.id')
            ->select('rotation.*', 'goods.*')
            ->get();
            // dd($rotation);
        $list = DB::table('goodsclass')->select('name')->get();
        $goodsclass=DB::table('goodsclass')->get();
        $config=DB::table('config')->get();
        $goods=DB::table('goods')->where('status','=','3')->get();
        $hot=DB::table('goods')->where('hot','=','1')->get();
        // dd($hot);
        $link = DB::table('link')->get();

        // dd($link);

        return view('home.index',[
            'user'=>$user,
            'list'=>$list,
            'link'=>$link,
            'rotation'=>$rotation,
            'hot'=>$hot,
            'goodsclass'=>$goodsclass,
            'goods'=>$goods,
            'config'=>$config
            ]);
    }
    public function find()
    {
        $ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad); 

        $list = DB::table('goodsclass')->select('name')->get();
        $goodsclass=DB::table('goodsclass')->get();
        $config=DB::table('config')->get();
        $tot = DB::select("select count(*) as cot from shopcar where uid=?",[$uid]);
        $data = session()->get('user');
        // dd($data);
        $data?($user = $data[0][0]->username):($user=null);
        $link = DB::table('link')->get();
        
        return view('home.find',[
            'link'=>$link,
            'user'=>$user,
            'tot'=>$tot,
            'list'=>$list,
            'goodsclass'=>$goodsclass,
            'config'=>$config
        ]);
    }


     public function list($clsnm='圣诞精选')
    {   
        $ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad);
        
        $tot = DB::select("select count(*) as cot from shopcar where uid=?",[$uid]);
        $cont = DB::select("select count(*) as cont,goodsid from shopcar where uid=? group by goodsid",[$uid]);
        // $aa = DB::table('shopcar')->select('count(*) as cont')->where('uid',$uid)->groupBy('goodsid')->get();
        $list = DB::table('goodsclass')->select('name')->get();
        $goods = DB::table('goods')->where('classname',$clsnm)->get();
        $goods = $goods ->where('status','!=','2');
        $data = session()->get('user');
        // dd($data);
        $data?($user = $data[0][0]->username):($user=null);
        // dd($list,$goods,$cont);
        $link = DB::table('link')->get();
        return view('home.goodslist',[
            'link'=>$link,
            'user'=>$user,
            'list'=>$list,
            'goods'=>$goods,
            'tot'=>$tot,
            'cont'=>$cont
        ])->with(['clsnm'=>$clsnm]);
    }
     public function load($clsnm)
    {   
        $gif = DB::table('goods')->where('goodsname',"$clsnm")->first();
        $data = session()->get('user');
        // dd($data);
        $data?($user = $data[0][0]->username):($user=null);
        $link = DB::table('link')->get();
        // dd($list,$goods);
        return view('home.goodsinfo',[
            'link'=>$link,
            'user'=>$user,
            'gif'=>$gif
        ]);
    }
	public function jrgwc(Request $Request)
	{
        $ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad);
        
        $price = $Request->price;
        $gid = $Request->gid;
         $pic = DB::table('goods')->where('id',"$gid")->first()->goodspics;
        $num = $Request->num;
        for($a=0;$a<$num;$a++){
            DB::insert("insert into shopcar(goodsid,goodnum,uid,pic) value('$gid','$price','$uid','$pic')");
        }
	}
    public function sc(Request $Request)
    {
        // return(session()->get('user')[0][0]->uid);
        if ($uid = $Request->session()->get('user')[0][0]->uid) {
            $dt = date("Y-m-d");
            $gid = $Request->gid;
            DB::insert("insert into enshrine(goodsid,uid,enshtime) values('$gid','$uid','$dt')");
            return $uid;
        }else{
            return 0;
        }
    }
}
