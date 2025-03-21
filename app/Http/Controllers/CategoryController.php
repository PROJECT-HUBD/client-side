<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductMain; // Assuming you need to import the ProductMain model
class CategoryController extends Controller
{
    public function shortSleeves()
{
    {
        return redirect()->route('categories_clothes');
    }
}


    public function longSleeves()
    {
        return redirect()->route('categories_clothes');
    }


   
    public function jacket()
    {
        return redirect()->route('categories_clothes');
    }
    
}
