<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BuyCarController extends Controller
{
    public function add(Request $Request)
    {
        $price = $Request->price;
    	$pic = $Request->pic;
    	$gnm = $Request->gid;
        // return $pic;
    	$ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad);
    	// return '-1'.$ad;
    	DB::insert('insert into shopcar(goodsid, uid ,goodnum ,pic) values(?, ? ,? ,?)', [$gnm, $uid, $price, $pic]);
    }
    public function jian(Request $Request)
    {
    	// return 1234;
    	$gnm = $Request->gid;
    	$ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad);
    	// return "delete from shopcar where uid=$uid and goodsid=$gnm limit 1";
    	return DB::delete("delete from shopcar where uid='{$uid}' and goodsid=$gnm limit 1");
    }
    public function pay()
    {
    	$ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad);
        $list = DB::table('goodsclass')->select('name')->get();
        $tot = DB::select("select count(*) as cot from shopcar where uid=?",[$uid]);
        // $info = DB::select("select goodnum,pic from shopcar where uid=?",[$uid]);
        $cont = DB::select("select count(*) as cont,goodsid,goodnum,pic from shopcar where uid=? group by goodsid,goodnum,pic",[$uid]);
    	// dd($list,$tot,$cont);
        $data = session()->get('user');
        // dd($data);
        $data?($user = $data[0][0]->username):($user=null);

        $link = DB::table('link')->get();
        return view('home.goodscar',[
            'link'=>$link,
            'user'=>$user,
            'tot'=>$tot,
            'list'=>$list,
            'cont'=>$cont,
            'sun'=>0
        ]);
    }
    public function delete(Request $Request)
    {
        $ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad);
        $gid = $Request->gsid;
        return DB::delete("delete from shopcar where uid=? and goodsid=?",[$uid,$gid]);
    }
}
