<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class EnshrineController extends Controller
{
    public function index()
    {
    	$enshrine = DB::table('enshrine')
        ->join('goods','goods.id','=','enshrine.goodsid')
        ->select(DB::raw('count(*) as goods_count,goodsname,hot'))
        ->orderBy('goods_count','desc')
        ->groupBy('goodsname')
        ->paginate(4);
        // ->get();
        
        // dd($enshrine);
        // $list = $enshrine->paginate(1);
    	return view("admin.enshrine",['enshrine'=>$enshrine]);
    }
    public function hot(Request $Request)
    {
        $rm = $Request->rm;
        $nm = $Request->nm;
       $dd = DB::update("update goods set hot=? where goodsname=?",[$rm,$nm]);
        return $dd;
    }
}
