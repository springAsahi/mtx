<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-12-30
 * Time: 16:43
 */
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //login
    public function login(Request $request){
        $username = $request->input('username');
    }
    //loginOut
    public function loginOut(){

    }
}