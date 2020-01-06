<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-12-31
 * Time: 13:38
 */

namespace app\Http\Controllers\Home;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('home.index');
    }
}