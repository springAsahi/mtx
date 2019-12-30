<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (){
    return redirect('http://www.alinewstar.com/home.html');
});

Route::get('/test', 'TestController@test');

/*
 * 后台
 */

Route::get('/admin/login',function (){//登录页面
    return view('login/index');
})->name('adminLogin');

Route::post('/admin/login','Admin\LoginController@login');//提交登录

Route::namespace('Admin')->prefix('admin')->middleware('CheckAdmin')->group(function (){
    Route::get('loginOut','LoginController@loginOut');//退出登录
    //主页
    Route::get('index','IndexController@index')->name('index');//后台主页
});

/*
 * 前台
 */

Route::get('/home/login',function (){//登录页面
    return view('home/login');
})->name('homeLogin');

Route::get('/home/register',function (){//注册页面
    return view('home/register');
});

Route::post('/home/register','Home\LoginController@register');//注册
Route::post('/home/login','Home\LoginController@login');//登录

Route::namespace('Home')->prefix('home')->middleware('CheckHome')->group(function (){

});