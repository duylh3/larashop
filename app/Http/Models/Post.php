<?php
/**
 * Created by PhpStorm.
 * User: Hiraky
 * Date: 29/03/2016
 * Time: 05:31
 */

namespace App\Http\Models;


class Post extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'posts';
    protected $fillable = array('url', 'title', 'description','content','blog','created_at_ip', 'updated_at_ip');
}