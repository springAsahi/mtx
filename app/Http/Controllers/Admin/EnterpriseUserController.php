<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 16:06
 */

namespace app\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\EnterpriseUser;
use Illuminate\Http\Request;

class EnterpriseUserController extends Controller
{
    //列表
    public function index(Request $request){
        $page = $request->input('page');
        $limit = $request->input('limit');
        $data = EnterpriseUser::paginate($limit,['*'],'',$page);
        return response()->json([
            'status' => true,
            'msg' => 'success',
            'data' => $data
        ]);
    }
    //修改
    public function update(Request $request, $id){
        $pwd = $request->input('pwd');
        $phone = $request->input('phone');
        $data = EnterpriseUser::find($id);
        $data->pwd = $pwd;
        $data->password = md5(md5($pwd));
        $data->phone = $phone;
        if ($data->save()){
            return response()->json([
                'status' => true,
            ]);
        }
        return response()->json([
            'status' => false,
        ]);
    }
//    //删除
//    public function delete(Request $request, $id){
//
//    }
}