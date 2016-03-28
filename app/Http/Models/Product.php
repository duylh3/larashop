<?php
/**
 * Created by PhpStorm.
 * User: Hiraky
 * Date: 29/03/2016
 * Time: 05:30
 */

namespace App\Http\Models;


class Product extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = array('name', 'title', 'description','price','category_id','brand_id','created_at_ip', 'updated_at_ip');
}