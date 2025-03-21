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
            $orderMainData = $request->input('orderMainData'); // Remove extra space
        if ($request->has('orderMainData')) {
            // // Insert into `order_main` table
            $orderMain = new OrderMain();
            $orderMain->trade_No = $orderMainData['trade_No'];
            $orderMain->id = $orderMainData['id'];
            $orderMain->total_price_with_discount = $orderMainData['total_price_with_discount'];
            $orderMain->payment_type = $orderMainData['payment_type'];
            $orderMain->trade_status = $orderMainData['trade_status'];
            $orderMain->order_id = $orderMainData['order_id'];

            // Manually set created_at and updated_at
            $orderMain->created_at = now();
            $orderMain->updated_at = now();
            $orderMain->trade_Date = now();

            $orderMain->save();
            return response()->json(['res' => $orderMainData]);
        } else {
            return response()->json(['res' => "none"]);
        }

    
    }
//     productList: 
//     {order_id: 404,
// products:
// 0: {product_name: '女裝百褶拼接寬鬆上衣', product_size: 'S', product_color: 'Black', quantity: 1, product_price: 1640},
// 1: {product_name: '女裝不對稱異素材上衣', product_size: 'S', product_color: 'White',quantity: 1, product_price: 1640}}

public function InsertOrderDetail(Request $request)
{
    // Get the product list data from the request
    $productList = $request->input('productList');
    
    if ($request->has('productList')) {
        // Loop through each product in the products array
        foreach ($productList['products'] as $product) {
            // Create a new order detail entry for each product
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $productList['order_id'];  // Assign order_id from the parent object
           // $productList下面的'products'陣列
            $orderDetail->product_name = $product['product_name'];
            $orderDetail->product_size = $product['product_size'];
            $orderDetail->product_color = $product['product_color'];
            $orderDetail->quantity = $product['quantity'];
            $orderDetail->product_price = $product['product_price'];

            // Manually set created_at and updated_at
            $orderDetail->created_at = now();
            $orderDetail->updated_at = now();

            // Save the order detail to the database
            $orderDetail->save();
        }

        // Return the product list as a response
        return response()->json(['res' => $productList]);
    } else {
        return response()->json(['res' => "none"]);
    }
}
    public function DeleteCart(Request $request)
    {
        // Validate incoming request
        // $request->validate([
        //     'product_ids' => 'required|array',
        //     'product_ids.*' => 'required|integer',
        // ]);

        // Delete products from the cart by product_id
        foreach ($request->product_ids as $product_id) {
            Cart::where('product_id', $product_id)->delete();
        }

        return response()->json(['success' => true, 'message' => 'Cart items deleted successfully']);
    }
}
