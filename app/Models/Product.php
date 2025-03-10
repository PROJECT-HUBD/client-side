<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product_main';
    protected $primaryKey = 'product_id';
    protected $keyType = 'string';
    public $timestamps = true;

    public $incrementing = false; // 禁止 Eloquent 自動遞增

    // 允許被批量填充的欄位
    protected $fillable = [
        'product_id',
        'category_id',
        'product_name',
        'product_price',
        'product_description',
        'product_img'
    ];
}
