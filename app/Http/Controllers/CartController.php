<?php

namespace App\Http\Controllers;
use App\Models\ProductMain;
use App\Models\ProductSpec;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;



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
                // ['quantity' => $item['quantity']
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



    public function updateCart(Request $request)
    {
        // 確保請求不是空的
        $cartData = $request->json()->all();

        if (empty($cartData)) {
            Log::error("❌ cartData 為空或 null！");
            return response()->json(['message' => '無效的請求！'], 400);
        }

        // 解析請求數據
        $productId = $cartData['product_id'] ?? null;
        $quantity = $cartData['quantity'] ?? null;
        $productSize = $cartData['product_size'] ?? null;
        $productColor = $cartData['product_color'] ?? null;

        if (!$productId || !$quantity || !$productSize || !$productColor) {
            return response()->json(['message' => '缺少必要參數！'], 400);
        }

        // 更新資料庫
        $updated = DB::table('cart')
            ->where('product_id', $productId)
            ->update([
                'quantity' => $quantity,
                'product_size' => $productSize,
                'product_color' => $productColor
            ]);

        if ($updated) {
            Log::info("✅ 商品 {$productId} 更新成功！", $cartData);
            return response()->json(['message' => '購物車更新成功！'], 200);
        } else {
            return response()->json(['message' => '購物車更新失敗或無變更！'], 500);
        }
    }
}

