<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain;

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

