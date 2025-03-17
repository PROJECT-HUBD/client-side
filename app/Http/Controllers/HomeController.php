<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain;
use App\Models\Banner;

class HomeController extends Controller
{
    public function home()
    {
        // 取得 banner
        $banners = Banner::whereIn('banner_id',[1, 2, 3])->orderBy('banner_id')->get();

        // 取得主打商品（外套6件）
        $hitItems = ProductMain::with(['specs' => function ($query) {
            $query->select('product_id', 'product_color')->distinct();
        }])
            ->whereBetween('product_id', ['pj001', 'pj006'])
            ->orderBy('product_id', 'asc')
            ->get();

        // 確保所有顏色統一轉小寫，避免大小寫問題
        $hitItems->each(function ($item) {
            $item->specs->transform(function ($spec) {
                $spec->product_color = strtolower(trim($spec->product_color)); // 轉小寫 + 去除空格
                return $spec;
            });
        });

        // 首頁 顯示商品（飾品＋服飾各4個） 
        $accessories = ProductMain::whereBetween('product_id', ['pa001', 'pa004'])
            ->orderBy('product_id', 'asc')->get();

        $clothes = ProductMain::whereBetween('product_id', ['pl001', 'pl004'])
            ->orderBy('product_id', 'asc')->get();

        return view('home', compact('banners', 'accessories', 'clothes', 'hitItems'));
    }
}
