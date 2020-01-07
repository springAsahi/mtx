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
        $values = $request->input('values');
        $data   = IndustryData::first();
        if (empty($data)){
            if (IndustryData::create($values)){
                return response()->json([
                   'status' => true,
                   'msg'   => '成功'
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'msg'    => "失败"
                ]);
            }
        }else{
            if (IndustryData::where("id",$data->id)->update($values)){
                return response()->json([
                    'status' => true,
                    'msg'   => '成功'
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'msg'    => "失败"
                ]);
            }
        }
    }
}