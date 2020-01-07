<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 16:09
 */

namespace app\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //列表
    public function index(Request $request){
        $limit = $request->input('limit');
        $page = $request->input('page');
        $product_type = $request->input('product_type');
        $data = Product::where('product_type',$product_type)->orderBy('created_at','desc')->paginate($limit,['*'],'',$page);
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }
    //修改
    public function update(Request $request, $id){
        $product_name = $request->input('product_name');
        $product_img_url = $request->input('product_img_url');
        $product_standards = $request->input('product_standards');
        $price = $request->input('price');
        $price_low = $request->input('price_low');
        $price_high = $request->input('price_high');
        $product_details = $request->input('product_details');
        $details_link = $request->input('details_link');
        $lowest_order_number = $request->input('lowest_order_number');
        $data = Product::find($id);
        $data->product_name = $product_name;
        $data->product_img_url = $product_img_url;
        $data->product_standards = $product_standards;
        if ($data->product_type == Product::PRODUCT_TYPE_SERVICE){
            $data->price = $price * 100;
            $data->details_link = $details_link;
            $data->lowest_order_number = $lowest_order_number;
        }
        if ($data->product_type == Product::PRODUCT_TYPE_CORE){
            $data->product_details = $product_details;
            $data->price_low = $price_low * 100;
            $data->price_high = $price_high * 100;
        }
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
        if (Product::destroy($id)){
            return response()->json([
                'status' => true
            ]);
        }
        return response()->json([
            'status' => false
        ]);
    }
}