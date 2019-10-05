<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printt extends Model
{
    protected $fillable = ['product_id', 'section','category','product','total_stock','total_assign'];
}
