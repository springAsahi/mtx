<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 10:13
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    const PRODUCT_TYPE_SERVICE = 'service';
    const PRODUCT_TYPE_CORE = 'core';
}