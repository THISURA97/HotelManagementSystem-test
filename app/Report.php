<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = "stocks";
    protected $fillable = [
        'product_id','section','category','product','total_stock','total_assign'
    ];
}
