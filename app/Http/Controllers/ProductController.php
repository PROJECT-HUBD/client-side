<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // 首頁 顯示商品（飾品4個） 
    public function home(){
        $accessories = Product::whereBetween('product_id', ['pa001', 'pa004'])
        ->orderBy('product_id', 'asc')->get();

        $clothes = Product::whereBetween('product_id', ['pl001', 'pl004'])
        ->orderBy('product_id', 'asc')->get();

        return view('home', compact('accessories', 'clothes'));
    }
}
