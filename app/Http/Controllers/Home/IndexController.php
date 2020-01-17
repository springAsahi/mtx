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

class IndexController extends Controller
{
    public function index(){
        $rollData     = RollData::get();
        $industryDataOne = IndustryData::find(1);
        $industryDataTwo = IndustryData::find(2);
        return view('home.index',[
            'rollData'     => $rollData,
            'industryDataOne' => $industryDataOne,
            'industryDataTwo' => $industryDataTwo
        ]);
    }
}