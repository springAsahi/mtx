<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-12-30
 * Time: 16:43
 */
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //login
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $data = Users::where('username',$username)->where('password',md5(md5($password)))->first();
        if (empty($data)){
            return redirect()->route('adminLogin')->with('adminLoginStatus','username or password fail');
        }
        session(['adminToken',md5(md5($username.time().rand(100000,999999)))]);
        return redirect()->route('adminIndex')->with('adminLoginStatus','login success');
    }
    //loginOut
    public function loginOut(){
        session()->flush();
        return redirect()->route('adminLogin')->with('adminLoginStatus','login out success');
    }
}