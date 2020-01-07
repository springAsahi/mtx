<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 15:52
 */

namespace app\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\IndustryData;

class IndexController extends Controller
{
    //主页
    public function index(){
        $data = IndustryData::first();
        return view('admin/index',[
            'data' => $data
        ]);
    }
}