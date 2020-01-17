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
        $first = IndustryData::first();
        if (empty($first)) {
            $first = new IndustryData();
        }
        $two = IndustryData::find(2);
        if (empty($two)) {
            $two = new IndustryData();
        }
        foreach ($values as $key => $value){
            if (substr($key,-1) == 1) {
                $k = substr($key,0,-1);
                $first->$k = $values[$key];
            }
            if (substr($key,-1) == 2){
                $e = substr($key,0,-1);
                $two->$e = $values[$key];
            }
        }
        if (!$first->save()){
            return response()->json([
                    'status' => false,
                    'msg'    => "失败"
                ]);
        }
        if (!$two->save()){
            return response()->json([
                'status' => false,
                'msg'    => "失败"
            ]);
        }
        return response()->json([
            'status' => true,
            'msg'    => "成功"
        ]);
//        $data = IndustryData::first();
//        $dataTwo = IndustryData::find(2);
//        if (empty($data)){
//            unset($first['id']);
//            if (!IndustryData::create($first)){
//                return response()->json([
//                    'status' => false,
//                    'msg'    => "失败"
//                ]);
//            }
//        }else{
//            if (!IndustryData::where("id",$first->id)->update($first)){
//                return response()->json([
//                    'status' => false,
//                    'msg'    => "失败"
//                ]);
//            }
//        }
//        if (empty($dataTwo)){
//            unset($two['id']);
//            if (!IndustryData::create($two)){
//                return response()->json([
//                    'status' => false,
//                    'msg'    => "失败"
//                ]);
//            }
//        }else{
//            if (!IndustryData::where("id",$two->id)->update($two)){
//                return response()->json([
//                    'status' => false,
//                    'msg'    => "失败"
//                ]);
//            }
//        }
//        return response()->json([
//            'status' => false,
//            'msg'    => "成功"
//        ]);
    }
}