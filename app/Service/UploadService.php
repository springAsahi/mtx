<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2019-11-15
 * Time: 12:14
 */

namespace App\Service;


class UploadService
{
    //上传图片，返回存储的图片路径及名称
    public static function upload_img($file)
    {
        // 检验一下上传的文件是否有效.
        if($file->isValid()){
            // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.
            $clientName = $file->getClientOriginalName();
            $mimeTye = $file->getMimeType();
            // 上传文件的后缀.
            $entension = $file->getClientOriginalExtension();
            if(!in_array($entension,['jpg','jpeg','png','JPG','JPEG','PNG'])){
                return response()->json([
                    'status' => false,
                    'code' => '201',
                    'msg' => 'file form is not jpg,jpeg,png,JPG,JPEG,PNG',
                    'entension' => $entension
                ]);
            }
            if (!in_array($mimeTye,['image/jpeg','image/png'])){
                return response()->json([
                    'status' => false,
                    'code' => '202',
                    'msg' => 'file type check fail'
                ]);
            }

            $newName = md5(date("Y-m-d H:i:s").$clientName).".".$entension;
            $path = $file->move(public_path('images'),$newName);
            $imgUrl = 'http://'.$_SERVER['HTTP_HOST'].'/mtx/public/images/'.$newName;

            return response()->json([
                'status' => true,
                'code' => '0',
                'msg' => 'success',
                'data' => [
                    'src' => $imgUrl
                ]
            ]);
        }else{
            return response()->json([
                'status' => false,
                'code' => '204',
                'msg' => 'upload invalid'
            ]);
        }
    }
}