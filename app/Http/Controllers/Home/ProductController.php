<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-12-31
 * Time: 14:32
 */

namespace app\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    //服务类产品
    public function service(){
        $data = Product::where('product_type','service')->paginate(10);
        return view('home.productService',[
            'data' => $data
        ]);
    }
    //核心产品
    public function core(){
        $data = Product::where('product_type','core')->paginate(10);
        return view('home.productCore',[
            'data' => $data
        ]);
    }
    //服务类产品详情
    public function serviceDetails($id){
        $data = Product::find($id);
        return view('home.serviceDetails',[
            'data' => $data
        ]);
    }
}