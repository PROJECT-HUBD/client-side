<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain;

class CategoriesCloController extends Controller
{
    public function categoriesClo()
    {
        $longs = ProductMain::where('product_id', 'LIKE', 'pl%')
            ->orderBy('product_id', 'asc')->get();

        $jackets = ProductMain::where('product_id', 'LIKE', 'pj%')
            ->orderBy('product_id', 'asc')->get();

        return view('categories_clothes', compact('longs', 'jackets'));
    }
}
