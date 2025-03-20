<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain; // 確保這裡的 Model 與你的資料表對應

class ProductController extends Controller
{
    public function show($id)
    {
        $product = ProductMain::find($id);

        if (!$product) {
            return abort(404, 'Product not found');
        }

        return view('product_details', compact('product'));
    }
}

