<?php
namespace App\Http\Models;


class Brand extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'brands';
    protected $fillable = array('name', 'created_at_ip', 'updated_at_ip');
}