<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;


class WishlistComponent extends Component
{


    public $wishlistItems;

    public function mount()
    {
        $this->wishlistItems = Wishlist::where('member_id', Auth::id())->with('product')->get();
    }

    //新增收藏品
    public function addToWishlist($productId)
    {
        //先檢查有沒有登入
        if (!Auth::check()) {
            session()->flash('error', '請先登入');
            return;
        }
    
        // 檢查商品是否已收藏
        if (!Wishlist::where('member_id', Auth::id())->where('product_id', $productId)->exists()) {
            Wishlist::create([
                'member_id' => Auth::id(),
                'product_id' => $productId,
            ]);
        }
    
        $this->wishlistItems = Wishlist::where('member_id', Auth::id())->with('product')->get();
        session()->flash('success', '已加入收藏清單！');
    }

    public function removeFromWishlist($productId)
    {
        Wishlist::where('member_id', Auth::id())->where('product_id', $productId)->delete();
        $this->wishlistItems = Wishlist::where('member_id', Auth::id())->with('product')->get();
    }

    public function render()
    {
        return view('livewire.wishlist-component');
    }
}
