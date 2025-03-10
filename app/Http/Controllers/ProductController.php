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

    // 分類_飾品頁 顯示商品
    // public function categoriesAcc(Request $request){

    //     // 取得 `category_id = 201` 的商品，並進行分頁（每頁顯示 12 件）
    //     $products = Product::where('category_id', 201)
    //     ->orderBy('product_id', 'asc')
    //     ->paginate(12); // Laravel 內建的分頁

    //     return view('categories_accessories', compact('products'));
    // }

    // 分類_服飾頁 顯示商品
    public function categoriesClo(){}

    // 新增...
    public function test(){
        // 新增商品的增刪修查
    }
}
