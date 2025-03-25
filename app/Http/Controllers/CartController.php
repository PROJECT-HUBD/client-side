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

    public function insertCart(Request $request)
    {
        try {
            $isAccessory = str_starts_with($request->product_id, 'pa');

            $data = $request->validate([
                'product_id' => 'required|string',
                'product_color' => $isAccessory ? 'nullable' : 'required|string',
                'product_size' => $isAccessory ? 'nullable' : 'required|string',
                'quantity' => 'required|integer|min:1',
            ]);

            $userId = auth()->id() ?? null;
          
          if (!$userId) {
              return response()->json(['error' => '請先登入以加入購物車'], 401);
          }

            $existing = DB::table('cart')
                ->where('id', $userId)
                ->where('product_id', $data['product_id'])
                ->where('product_color', $data['product_color'])
                ->where('product_size', $data['product_size'])
                ->first();

            if ($existing) {
                DB::table('cart')
                    ->where('id', $existing->id)
                    ->update([
                        'quantity' => $existing->quantity + $data['quantity'],
                        'updated_at' => now(),
                    ]);
            } else {
                DB::table('cart')->insert([
                    'id' => $userId,
                    'product_id' => $data['product_id'],
                    'product_name' => ProductMain::where('product_id', $data['product_id'])->value('product_name'),
                    'product_color' => $data['product_color'],
                    'product_size' => $data['product_size'],
                    'quantity' => $data['quantity'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            return response()->json(['message' => '購物車更新成功！'], 200);

        } catch (\Throwable $e) {
            return response()->json(['error' => 'Server error', 'message' => $e->getMessage()], 500);
        }
    }

    public function updateCart(Request $request)
    {
        // 確保請求不是空的
        $cartData = $request->json()->all();

        if (empty($cartData)) {
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
            return response()->json(['message' => '購物車更新成功！'], 200);
        } else {
            return response()->json(['message' => '購物車更新失敗或無變更！'], 500);
        }
    }
}
