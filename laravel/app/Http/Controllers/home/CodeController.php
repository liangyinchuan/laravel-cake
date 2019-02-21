<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Endroid\QrCode\QrCode;
use DB;

class CodeController extends Controller
{
    public function code()
    {
    	$qrCode = new QrCode();
$qrCode
    ->setText('https://wx.tenpay.com/f2f?p=YABeLxVWSLLfALwQ2idJObK49PqLVubjBoT0D%2BHWHu3Ok7XWh%2FW3T32mm8a2rqZpS0awwCfFdt7YTFaxTibwC5C%2FiSUQ%2BcqOQ3pHm4SLflOqk7%2FItxjc%2BV%2FnS3cx5v4syWUd6DjK4cGxLL8%2FBloBoRw8nTEnvS0ixqBv7Fc33no%3D
')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])
    ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
    // ->setLabel("Hello ")
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;
	$content = $qrCode->get();
	return response($content)->header("Content-Type",'image/png');
	
    }
    public function qcode($total)
    {
        // dd($total);
        $ad = $_SERVER['REMOTE_ADDR'];
        $data = session()->get('user');
        if ($data) {
            # code...
            $data?($uid = $data[0][0]->uid):($uid='-1'.$ad);
            // dd($uid);
            $integral = DB::select('select integral from user where id=?',[$uid])[0]->integral;
            // $integral = DB::select('select  from user where id=?',[$uid]);
            $newintegral = $integral + $total;
            // dd($newintegral);
            $row = DB::update('update user set integral = ? where id = ?',[$newintegral,$uid]);
        }

    	$list = DB::table('goodsclass')->select('name')->get();
        
        $data = session()->get('user');
        $data?($user = $data[0][0]->username):($user=null);

        $config=DB::table('config')->get();


    	return view("home.code",[
            'user'=>$user,
            'list'=>$list,
            'config'=>$config
            ]);
    }
}
