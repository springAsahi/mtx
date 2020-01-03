<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 10:12
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EnterpriseUser extends Model
{
    protected $table = 'enterprise_user';
    protected $fillable = ['enterprise_name','real_name','enterprise_duty','phone','username','password','pwd'];
}