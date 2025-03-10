<?php

namespace App\Http\Controllers;
use App\Models\ProductMain;
use App\Models\ProductSpec;
use Illuminate\Http\Request;
use App\Models\Cart;


class CartController extends Controller
{
    public function getProductData(Request $request)
    {
        // 獲取所有購物車條目
        $cartItems = Cart::all();

        $productData = [];

        foreach ($cartItems as $cartItem) {
            // 獲取與 cart 表中 varient_id 和 product_id 匹配的 size 和 color
            $productSpec = ProductSpec::where('varient_id', $cartItem->varient_id)->first();
            $productMain = ProductMain::where('product_id', $cartItem->product_id)->first();
          

            // 拼裝資料
            $productData[] = [
                'product_img' => $productMain ? $productMain->product_img : null,
                'product_name' =>$cartItem->product_name,
                'product_size' => $productSpec ? $productSpec->product_size : null,
                'product_color' => $productSpec ? $productSpec->product_color : null,
                'quantity' => $cartItem->quantity,
                'original_price' => $productMain ? $productMain->product_price : null,
                
            ];
          
        }
         // 使用 dd() 來調試並檢查 productData 是否正確
         dd($productData);

        // 返回資料
        return response()->json($productData);
    }
}
