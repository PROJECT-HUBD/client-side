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

        if (!Auth::check()) {
            $this->wishlistItems = collect(); // 未登入時，清空收藏清單
            return;
        }

        $this->wishlistItems = Wishlist::where('member_id', Auth::id())->with('product')->get();
    }


    public function toggleWishlist($productId)
    {
        if (!Auth::check()) {
            session()->flash('error', '請先登入！');
            return;
        }

        $wishlistItem = Wishlist::where('member_id', Auth::id())->where('product_id', $productId)->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            session()->flash('success', '已從收藏清單移除');
        } else {
            Wishlist::create([
                'member_id' => Auth::id(),
                'product_id' => $productId,
            ]);
            session()->flash('success', '已加入收藏清單');
        }

        // 重新載入收藏清單
        $this->wishlistItems = Wishlist::where('member_id', Auth::id())->with('product')->get();
    }




    public function removeFromWishlist($productId)
    {
        Wishlist::where('member_id', Auth::id())->where('product_id', $productId)->delete();
        $this->wishlistItems = Wishlist::where('member_id', Auth::id())->with('product')->get();
        session()->flash('success', '已從收藏清單移除');
    }

    public function render()
    {
        if (!Auth::check()) {
            session()->flash('error', '請先登入才能查看收藏清單');
            return view('livewire.wishlist-component', ['wishlistItems' => collect()]);
        }

        return view('livewire.wishlist-component');
    }
}
