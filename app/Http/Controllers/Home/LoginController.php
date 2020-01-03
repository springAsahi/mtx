<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-12-30
 * Time: 14:36
 */
namespace app\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\EnterpriseUser;
use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    //注册
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'enterprise_name' => 'required',
            'real_name' => 'required',
            'enterprise_duty' => 'required',
            'phone' => 'required|digits:11',
            'username' => 'required',
            'password' => 'required',
            'pwd' => 'required',
        ],[
            'required' => ':attribute 不能为空',
            'digits'   => ':attribute 长度不符合要求,必须为数字',
        ],[
            'enterprise_name' => '企业名称',
            'real_name' => '姓名',
            'enterprise_duty' => '职务',
            'phone' => '手机号',
            'username' => '用户名',
            'password' => '密码',
            'pwd' => '确认密码',
        ]);
        if ($validator->fails()) {
            return redirect('/home/register')->with('registerStatus',$validator->errors()->first());
        }
        if ($request->input('password') != $request->input('pwd')){
            return redirect('/home/register')->with('registerStatus','密码不一致');
        }
        $data = $request->all();
        $data['password'] = md5(md5($data['password']));
        if (EnterpriseUser::create($data)){
            return redirect('/home/login')->with('loginStatus','注册成功，请登录');
        }else{
            return redirect('/home/register')->with('registerStatus','注册失败，请重新注册');
        }
    }
    //登录
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $data = EnterpriseUser::where("username",$username)->where("password",md5(md5($password)))->first();
        if (empty($data)){
            return redirect('/home/login')->with('loginStatus','用户名或密码错误');
        }else{
//            $request->session()->put('token',$data->id);
            return redirect('/home/index')->with('loginStatus','登录成功');
        }
    }
}