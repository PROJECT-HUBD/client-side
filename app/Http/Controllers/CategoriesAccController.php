<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain;

class CategoriesAccController extends Controller
{
    public function categoriesAcc()
    {
        // 取得所有商品，並根據 product_id 排序
        $accessories = ProductMain::where('product_id', 'LIKE', 'pa%')
            ->orderBy('product_id', 'asc')->get();

        // 傳遞到 Blade 模板
        return view('categories_accessories', compact('accessories'));
    }
}
