<?php

namespace App\Http\Controllers;
use App\Models\ProductMain;
use App\Models\ProductSpec;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function getCartData(Request $request)
    {
        // 獲取所有購物車條目
        $cartItems = Cart::all();

        $productData = [];

        foreach ($cartItems as $cartItem) {
            // 獲取與 cart 表中 varient_id 和 product_id 匹配的 size 和 color
            $productSpec = ProductSpec::where('product_id', $cartItem->product_id)->first();
            $productMain = ProductMain::where('product_id', $cartItem->product_id)->first();
          

            // 拼裝資料
            $productData[] = [
                'product_img' => $productMain ? $productMain->product_img : null,
                'product_name' =>$cartItem->product_name,
                'product_size' => $cartItem->product_size,
                'product_color' => $cartItem->product_color,
                'quantity' => $cartItem->quantity,
                'product_price' => $productMain ? $productMain->product_price : null,
                'product_id' => $cartItem->product_id,
                
            ];
          
        }
         

        // 返回資料
        return response()->json($productData);
    }// end of getCartData

    public function insertCart(Request $request) {
        // dump($request->all());
        $cartItems = $request->input('cartItems');
        if($request->has('cartItems')){
            return response()->json(['res'=> $cartItems]);
        }

        foreach ($cartItems as $item) {
            DB::table('cart')->updateOrInsert(
                // ['product_id' => $item['product_id'], 'product_size' => $item['product_size'], 'product_color' => $item['product_color']],
                // ['quantity' => $item['quantity']]
                ['product_id' => $item['product_id']],
                [
                    'quantity' => $item['quantity'],
                    'product_size' => $item['product_size'],
                    'product_color' => $item['product_color'],
                   
                ]
            );
        }
      
    
        return response()->json(['message' => '購物車更新成功！'], 200);
    }
}
