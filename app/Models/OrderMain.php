<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMain extends Model
{
    protected $table = 'order_main';
    protected $fillable = ['trade_No', 'member_ID', 'total_price_with_discount', 'payment_type', 'trade_status', 'order_id'];
}
