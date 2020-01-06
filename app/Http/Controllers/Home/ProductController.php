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
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //服务类产品
    public function service(){
        $data = Product::where('product_type',Product::PRODUCT_TYPE_SERVICE)->orderBy('created_at','desc')->paginate(10);
        return view('home/productService',[
            'data' => $data
        ]);
    }
    //核心产品
    public function core(){
        $data = Product::where('product_type',Product::PRODUCT_TYPE_CORE)->orderBy('created_at','desc')->paginate(10);
        return view('home/productCore',[
            'data' => $data
        ]);
    }
    //服务类产品详情
    public function serviceDetails($id){
        $data = Product::find($id);
        return view('home/productServiceDetails',[
            'data' => $data
        ]);
    }
}