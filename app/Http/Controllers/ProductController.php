<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain; // 確保這裡的 Model 與你的資料表對應


class ProductController extends Controller
{
    //收藏清單需要
    public function show($id)
    {
        // 取得商品資訊
        $product = ProductMain::where('product_id', $id)->firstOrFail();

        // 回傳視圖並傳遞商品資訊
        return view('product_details', compact('product'));
    }

    
    //00000000000000000000000000000000000000000000000000000000000
}
