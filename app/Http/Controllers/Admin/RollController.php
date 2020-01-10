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
    public function index(Request $request){
        $limit = $request->input('limit');
        $page = $request->input('page');
        $data = RollData::orderBy('created_at','desc')->paginate($limit,['*'],'',$page);
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
        $deal_time = $request->input('deal_time');
        $data = RollData::find($id);
        $data->corporate_name = $corporate_name;
        $data->product_name = $product_name;
        $data->trade_name = $trade_name;
        $data->deal_time = $deal_time;
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
    //添加
    public function save(Request $request){
        $corporate_name = $request->input('corporate_name');
        $product_name = $request->input('product_name');
        $trade_name = $request->input('trade_name');
        $country = $request->input('country');
        $amount = $request->input('amount');
        $deal_time = $request->input('deal_time');
        $data = new RollData();
        $data->corporate_name = $corporate_name;
        $data->product_name = $product_name;
        $data->trade_name = $trade_name;
        $data->country = $country;
        $data->deal_time = $deal_time;
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