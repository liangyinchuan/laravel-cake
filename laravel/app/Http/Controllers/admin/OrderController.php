<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
{
     public function index(Request $request)
    {

        $where = [];
        $db = DB::table('order');
                // ->join('user','user.id','=','order.uid');
        if($request->has('username')){
            $username = $request->input('username');
            $db->where('username','like',"%{$username}%");
            $where['username'] = $username;
        }

        if($request->has('orderno')){
            $orderno = $request->input('orderno');
            $db->where('orderno','like',"%{$orderno}%");
            $where['orderno'] = $orderno;
        }
        $list = $db->paginate(4);
        // dd($list);
        return view('admin.order',['list'=>$list,'where'=>$where]);
       
    }

    public function show($orderno)
    {

        // $order = DB::table('order')->where('orderno',$orderno)->first();
        // $ordergoods = DB::table('ordergoods')->where('orderno',$orderno)->get();
        $ordergoods = DB::table('ordergoods')
            ->join('order', 'ordergoods.orderno', '=', 'order.orderno')
            ->join('goods', 'ordergoods.goodsid', '=', 'goods.id')
            ->select('ordergoods.price','ordergoods.quantity','goods.goodsname','goods.goodsinfo','goods.goodspics','order.*')
            ->where('order.orderno',$orderno)
            ->get();
            $status = $ordergoods[0]->status;
            if($status==1) {
                $status='未付款';
            }else if($status==2) {
                $status='已付款';
            }else if($status==3) {
                $status='未发货';
            }else if($status==4) {
                $status='已发货';
            }else if($status==5) {
                $status='已收货';
            }

            $paytype = $ordergoods[0]->paytype;
            if($paytype==1) {
                $paytype='支付宝';
            }else if($paytype==2) {
                $paytype='微信';
            }else if($paytype==3) {
                $paytype='货到付款';
            }

        // dd($ordergoods[0]->status);
        return view('admin.orderinfo',['orderinfo'=>$ordergoods,'status'=>$status,'paytype'=>$paytype]);

    }

}
