<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $table = 'cart'; // 确保模型与表名一致
    protected $fillable = ['varient_id', 'product_id', 'quantity']; // 填充属性
}
