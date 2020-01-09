<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 15:52
 */

namespace app\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\IndustryData;
use App\Service\UploadService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //主页
    public function index(){
        $data = IndustryData::first();
        return view('admin/index',[
            'data' => $data
        ]);
    }
    //上传图片
    public function uploadImg(Request $request){
        $file = $request->file('file');
        return UploadService::upload_img($file);
    }
}