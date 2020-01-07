<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 16:13
 */

namespace app\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\RollData;
use Illuminate\Http\Request;

class RollController extends Controller
{
    //列表
    public function index(){
        $data = RollData::all();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }
    //修改
    public function update(Request $request, $id){
        $corporate_name = $request->input('corporate_name');
        $product_name = $request->input('product_name');
        $trade_name = $request->input('trade_name');
        $country = $request->input('country');
        $amount = $request->input('amount');
        $data = RollData::find($id);
        $data->corporate_name = $corporate_name;
        $data->product_name = $product_name;
        $data->trade_name = $trade_name;
        $data->country = $country;
        $data->amount = $amount;
        if ($data->save()){
            return response()->json([
                'status' => true,
                'code' => '200',
                'msg' => 'success'
            ]);
        }
        return response()->json([
            'status' => false,
            'code' => '204',
            'msg' => 'fail'
        ]);
    }
    //删除
    public function delete($id){
        if (RollData::destroy($id)){
            return response()->json([
                'status' => true,
                'code' => '200',
                'msg' => 'success'
            ]);
        }
        return response()->json([
            'status' => false,
            'code' => '204',
            'msg' => 'fail'
        ]);
    }
}