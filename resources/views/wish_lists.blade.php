@extends('layouts.app')

@section('title', '收藏清單')
@section('meta_description', '收藏清單')
@section('meta_keywords', '收藏清單')


@section('content')


<main class="px-32 pt-20 pb-5 max-md:px-5 max-md:py-10">
   

    <div id="wishlist-container">
        @include('partials.wishlist-items')
    </div>
  

</main>


@endsection


@push('scripts')

<script src="{{ asset('vendor/livewire/livewire.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.remove-wishlist-btn').forEach(button => {
            button.addEventListener('click', function () {
                let productId = this.dataset.productId;
                fetch("{{ route('wishlist.remove') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ product_id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "removed") {
                        // 重新加載收藏清單
                        reloadWishlist();
                    }
                });
            });
        });
    });

    function reloadWishlist() {
        fetch("{{ route('wish_lists') }}")
            .then(response => response.text())
            .then(html => {
                document.getElementById("wishlist-container").innerHTML = new DOMParser()
                    .parseFromString(html, "text/html")
                    .querySelector("#wishlist-container").innerHTML;
            });
    }
</script>
@endpush