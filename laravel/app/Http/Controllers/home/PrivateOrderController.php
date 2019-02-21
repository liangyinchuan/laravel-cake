<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class PrivateOrderController extends Controller
{
    public function index()
    {
        $ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        $uid = $data?($data[0][0]->uid):('-1'.$ad);

        $orders = DB::table('order')->where('uid',$uid);
        $order = DB::table('order')->where('uid',$uid);
        if(empty($orders->first())){
            $ordergoods = $order->get();

            // dd($order);
            
        }else{
            $order = $order->get();
// dd($order);
        foreach($order as $v){
            $orderno = $v->orderno;

            $ordergoods[$orderno] = DB::table('ordergoods')
                ->join('order','ordergoods.orderno','=','order.orderno')
                ->join('goods','ordergoods.goodsid','=','goods.id')
                ->where('order.orderno','=',$orderno)
                ->select('goods.*',"ordergoods.quantity",'ordergoods.time','order.*')
                ->get();

            // dd($iiii);
            $ordergoods[$orderno][0]->num = DB::select("select sum(quantity) as num from ordergoods where orderno = ?",[$orderno])[0]->num;
            // $iiii++;
        }

        }



        // dd($ordergoods);

        $list = DB::table('goodsclass')->select('name')->get();
        $tot = DB::select("select count(*) as cot from shopcar where uid=?",[$uid]);

        $data?($user = $data[0][0]->username):($user=null);

        // $num = DB::select('select count("quantity") as num from ordergoods where orderno=?',[$orderno])[0]->num;
        // dd($num);
        $link = DB::table('link')->get();
        return view('home.privateorder',[
            'link'=>$link,
            'user'=>$user,
            // 'num'=>$num,
            'order'=>$ordergoods,
            'tot'=>$tot,
            'list'=>$list
            ]);
    }

    public function store(Request $request)
    {
    	$ad = $_SERVER['REMOTE_ADDR'];
        $uid = session('uid','-1'.$ad);

    	$data = DB::table('shopcar')
    		->join('goods','shopcar.goodsid','=','goods.id')
			->select(DB::raw('count(*) as cont,uid,goodsid'),'goods.*')
			->where('uid', '=', $uid)
			->groupBy('goodsid')
			->get();

		$order = $request->except('_token');

		$orderno = date ( "Ymd" ).rand(10000,99999);

        $total = DB::select("select sum(goodnum) as sum from shopcar where uid='$uid'")[0]->sum;
        $order['uid'] = $uid;
        $order['orderno'] = $orderno;
        $order['total'] = $total;
        $time = date('Y-m-d');
        // dd($time);

        DB::table('order')->insert($order);
        foreach ($data as $k => $v) {
        	$goodsid = $v->goodsid;
        	$price = $v->goodsprice;
        	$quantity = $v->cont;
        	$ordergoods['time'] = $time;
        	$ordergoods['orderno'] = $orderno;
        	$ordergoods['goodsid'] = $goodsid;
        	$ordergoods['price'] = $price;
        	$ordergoods['quantity'] = $quantity;
        	DB::table('ordergoods')->insert($ordergoods);
        }

        DB::table('shopcar')->where('uid',$uid)->delete();
        return redirect("/home/order/$orderno");
    }
}
