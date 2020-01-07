<?php
/**
 * Created by PhpStorm.
 * User: ccx
 * Date: 2020-01-02
 * Time: 10:12
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class IndustryData extends Model
{
    protected $table = 'industry_data';
    protected $fillable = ['auto_parts','wooden_furniture','agricultural_by_product','optical_electronics',
        'medical_care_apparatus','craft_gifts','chemical_industry','light_industry_textile','other'];
}