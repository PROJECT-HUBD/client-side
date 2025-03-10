<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_main extends Model
{
    use HasFactory;

    protected $table = 'product_main';
    protected $fillable = ['product_id', 'product_name', 'originalPrice', 'discountPrice'];
}
