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
    public function index(Request $request){
        $page = $request->input('page');
        $limit = $request->input('limit');
        $data = EnterpriseUser::paginate(15);

    }

    public function update(Request $request, $id){

    }
}