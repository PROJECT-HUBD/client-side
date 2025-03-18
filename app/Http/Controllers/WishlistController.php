<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;


class WishlistController extends Controller
{
    // 取得使用者的收藏清單
    public function index()
    {
        //未登入，Laravel 會拋出錯誤
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }


        $wishlistItems = Wishlist::where('member_id', Auth::id())->with('product')->get();
        return response()->json($wishlistItems);
    }

    
    // 新增收藏
    public function store(Request $request)
    {
        //未登入，Laravel 會拋出錯誤
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $request->validate([
            'product_id' => 'required|exists:products,product_id',
        ]);

        Wishlist::firstOrCreate([
            'member_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return response()->json(['success' => true, 'message' => '已加入收藏清單']);
    }

    // 移除收藏
    public function destroy($id)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        $wishlistItem = Wishlist::where('member_id', Auth::id())->where('product_id', $id)->first();
    
        if (!$wishlistItem) {
            return response()->json(['error' => '收藏項目不存在'], 404);
        }
    
        $wishlistItem->delete();
    
        return response()->json(['success' => true, 'message' => '已移除收藏']);
    }
}
