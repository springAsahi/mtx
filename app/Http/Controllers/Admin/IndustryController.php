<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 16:02
 */

namespace app\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\IndustryData;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function update(Request $request){
        $auto_parts = $request->input('auto_parts');
        $wooden_furniture = $request->input('wooden_furniture');
        $agricultural_by_product = $request->input('agricultural_by_product');
        $optical_electronics = $request->input('optical_electronics');
        $medical_care_apparatus = $request->input('medical_care_apparatus');
        $craft_gifts = $request->input('craft_gifts');
        $chemical_industry = $request->input('chemical_industry');
        $light_industry_textile = $request->input('light_industry_textile');
        $other = $request->input('other');
        $data = IndustryData::first();
        if (empty($data)){
            $data = new IndustryData();
            $data->auto_parts = $auto_parts;
            $data->wooden_furniture = $wooden_furniture;
            $data->agricultural_by_product = $agricultural_by_product;
            $data->optical_electronics = $optical_electronics;
            $data->medical_care_apparatus = $medical_care_apparatus;
            $data->craft_gifts = $craft_gifts;
            $data->chemical_industry = $chemical_industry;
            $data->light_industry_textile = $light_industry_textile;
            $data->other = $other;
            if ($data->save()){
                return view('admin/index',[
                    'status' => true
                ]);
            }
        }else{
            $data->auto_parts = $auto_parts;
            $data->wooden_furniture = $wooden_furniture;
            $data->agricultural_by_product = $agricultural_by_product;
            $data->optical_electronics = $optical_electronics;
            $data->medical_care_apparatus = $medical_care_apparatus;
            $data->craft_gifts = $craft_gifts;
            $data->chemical_industry = $chemical_industry;
            $data->light_industry_textile = $light_industry_textile;
            $data->other = $other;
            if ($data->save()){
                return view('admin/index',[
                    'status' => true
                ]);
            }
        }
        return view('admin/index',[
            'status' => false
        ]);
    }
}