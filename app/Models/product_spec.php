<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_spec extends Model
{
    use HasFactory;

    protected $table = 'product_spec';
    protected $fillable = ['varient_id', 'size', 'color'];
}
