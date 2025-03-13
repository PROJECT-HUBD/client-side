<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain;

class HomeController extends Controller
{
    // 首頁 顯示商品（飾品＋服飾各四個） 
    public function home()
    {
        $accessories = ProductMain::whereBetween('product_id', ['pa001', 'pa004'])
            ->orderBy('product_id', 'asc')->get();

        $clothes = ProductMain::whereBetween('product_id', ['pl001', 'pl004'])
            ->orderBy('product_id', 'asc')->get();

        return view('home', compact('accessories', 'clothes'));
    }
}
