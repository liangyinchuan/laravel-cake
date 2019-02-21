<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class EditPasswordController extends Controller
{

    public function index()
    {
        $ad = $_SERVER['REMOTE_ADDR'];
        // $uid = session()->get('uid','-1'.$ad);
       
        $data = session()->get('user');
        $data?($uid = $data[0][0]->uid):($uid='-1'.$ad);

        $list = DB::table('goodsclass')->select('name')->get();
        // dd($list);

        $tot = DB::select("select count(*) as cot from shopcar where uid=?",[$uid]);
        $tot = empty($tot)?0:$tot;
        $cont = DB::select("select count(*) as cont,goodsid,goodnum,pic from shopcar where uid=? group by goodsid,goodnum,pic",[$uid]);
        $data = session()->get('user');
        $data?($user = $data[0][0]->username):($user=null);
        // $id = $data[0][0]->uid
        // dd($uid);
        $link = DB::table('link')->get();
        return view('home.editpassword',[
            'link'=>$link,
            'uid'=>$uid,
            'user'=>$user,
            'tot'=>$tot,
            'list'=>$list,
            'cont'=>$cont
        ]);
    }


    public function update($id,Request $request)
    {
        // dd($id);
        $user = DB::table('user')->where('id',$id)->first();
        $p = $user->password;
        $data = $request->input();
        // dd($data);
        $password = $data['passworded'];
        $newpassword = $data['newpassword'];
        $renewpassword = $data['renewpassword'];
        // dd($renewpassword);
        if (empty($password) || empty($newpassword) || empty($renewpassword)) {
            return back()->with('ok','好像忘记了什么没有填哦!');
        }else{

            if ($password!=$p) {
                return back()->with('ok','原密码错误!');

            }else if($newpassword!=$renewpassword){
                return back()->with('ok','两次新密码输入不一致!请重新输入!');

            }else{
                $pass['password'] = $newpassword;
                $id = DB::table('user')->where('id',$id)->update($pass);
                return back()->with('oks','密码修改成功!');
            }
        }
    }

}















