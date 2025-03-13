<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\OrderMain;
use App\Models\OrderDetail;

class CheckoutController extends Controller
{
  

    public function InsertOrderMain(Request $request)
{
    // Validate incoming request
  

    // Insert into `order_main` table
    $orderMain = new OrderMain();
    $orderMain->trade_No = $request->trade_No;
    $orderMain->member_id = $request->member_id;
    $orderMain->total_price_with_discount = $request->total_price_with_discount;
    $orderMain->payment_type = $request->payment_type;
    $orderMain->trade_status = $request->trade_status;
    $orderMain->order_id = $request->order_id;
    $orderMain->save();

    return response()->json(['success' => true, 'message' => 'Order main inserted successfully']);
}

public function InsertOrderDetail(Request $request)
{
    // Validate incoming request
    $request->validate([
        'productList' => 'required|array',
        'productList.*.product_id' => 'required|integer',
        'productList.*.product_size' => 'required|string',
        'productList.*.product_color' => 'required|string',
        'productList.*.quantity' => 'required|integer',
        'productList.*.product_price' => 'required|numeric',
    ]);

    // Insert each product detail
    foreach ($request->productList as $product) {
        $orderDetail = new OrderDetail();
        $orderDetail->product_id = $product['product_id'];
        $orderDetail->product_size = $product['product_size'];
        $orderDetail->product_color = $product['product_color'];
        $orderDetail->quantity = $product['quantity'];
        $orderDetail->product_price = $product['product_price'];
        $orderDetail->save();
    }

    return response()->json(['success' => true, 'message' => 'Order details inserted successfully']);
}

public function DeleteCart(Request $request)
{
    // Validate incoming request
    $request->validate([
        'product_ids' => 'required|array',
        'product_ids.*' => 'required|integer',
    ]);

    // Delete products from the cart by product_id
    foreach ($request->product_ids as $product_id) {
        Cart::where('product_id', $product_id)->delete();
    }

    return response()->json(['success' => true, 'message' => 'Cart items deleted successfully']);
}
}
