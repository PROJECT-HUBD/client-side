<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\product_spec;
use App\Models\product_main;
use App\Models\product_img;

class ProductController extends Controller
{
    public function getProductData(Request $request)
    {
        // 获取所有购物车条目
        $cartItems = Cart::all();

        $productData = [];

        foreach ($cartItems as $cartItem) {
            // 1. 获取与 cart 表中 varient_id 和 product_id 匹配的 size 和 color
            $product_spec = product_spec::where('varient_id', $cartItem->varient_id)->first();
            $product_main = product_main::where('product_id', $cartItem->product_id)->first();
            $product_img = product_img::where('product_id', $cartItem->product_id)
                ->where('display_order', 1)
                ->first();

            // 拼装数据
            $productData[] = [
                'product_img_URL' => $product_img ? $product_img->img_URL : null,
                'product_name' => $product_main ? $product_main->product_name : null,
                'product_size' => $product_spec ? $product_spec->size : null,
                'product_color' => $product_spec ? $product_spec->color : null,
                'quantity' => $cartItem->quantity,
                'original_price' => $product_main ? $product_main->originalPrice : null,
                'discount_price' => $product_main ? $product_main->discountPrice : null,
            ];
        }

        // 返回数据
        return response()->json($productData);
    }
}