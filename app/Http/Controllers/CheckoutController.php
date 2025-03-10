<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkOut(Request $request)
    {
        // 獲取傳遞過來的商品資料
        $productList = $request->input('productList');

        // 確保商品資料是正確的
        dd($productList);  // 使用 dd() 調試，查看資料是否成功傳送

        // 如果資料正確，傳遞到視圖
        return view('checkout', compact('productList'));
    }
}
