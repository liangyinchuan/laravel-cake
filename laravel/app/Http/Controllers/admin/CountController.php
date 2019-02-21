<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CountController extends Controller
{
    public function count()
    {
		$li = DB::select("select count(*) as cnt from user where limits=2");
		$cnt = $li[0]->cnt;
		$tm = date("Y-m");
		$list = DB::select("select time,sum(price*quantity) as sum from ordergoods  where time>$tm group by time");
		$aa = [];
		$a = 0;
		$p = count($list)-1;
		$j = $p+1==date('j')?intval($list[$p]->sum):0;
		foreach($list as $v){
			$a+=intval($v->sum);
			$aa[] = intval($v->sum)/10000;
		}
		
		$v = [$aa];
		$d = json_encode($v);
		//$d = $d.'"var a=123"';
		//dd($aa);
    	return view('admin.count',['d'=>$d,'cnt'=>$cnt,'a'=>$a,'j'=>$j]);
    }
	 public function cont()
    {
		
		$li = DB::select("select count(*) as cnt from user where limits=2");
		$cnt = intval($li[0]->cnt);
		$tm = date("Y-m");
		$list = DB::select("select time,sum(price*quantity) as sum from ordergoods  where time>$tm group by time");
		$aa = [];
		$a = 0;
		$j = 0;
		$p = count($list)-1;
		$j = $p+1==date('j')?intval($list[$p]->sum):0;
		foreach($list as $v){
			$a+=intval($v->sum);
			$aa[] = intval($v->sum)/10000;
		}
		
		$v = [$aa,$a,$cnt,$j];
		
		$d = json_encode($v);
		//$v = "{'m':'$v'}";
		
    	return $d;
    }
}
