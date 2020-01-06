<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-12-31
 * Time: 13:38
 */

namespace app\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\IndustryData;
use App\Models\RollData;

class Index extends Controller
{
    public function index(){
        $rollData     = RollData::get();
        $industryData = IndustryData::first();
        return view('home.index',[
            'rollData'     => $rollData,
            'industryData' => $industryData
        ]);
    }
}