<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain;

class CategoriesCloController extends Controller
{
    public function categoriesClo()
    {
        $clothes = ProductMain::where('product_id', 'LIKE', 'pl%')
            ->orderBy('product_id', 'asc')->get();

        return view('categories_clothes', compact('clothes'));
    }
}
