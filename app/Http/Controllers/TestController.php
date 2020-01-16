<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-12-30
 * Time: 15:22
 */

namespace App\Http\Controllers;


use App\Models\Users;

class TestController extends Controller
{
    public function test(){
        echo number_format("1000000");
        die('test');
    }
}