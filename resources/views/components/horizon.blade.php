<div class="sidebar-widget product-sidebar mb-4">
    <div class="single-post clearfix">
        <div class="image">
            @if ($product->attributes && $product->attributes->first())
                @foreach ($product->attributes->take(2) as $key => $image)
                    <img class="{{ $key + 1 == 1 ? 'default-img' : 'hover-img' }}"
                        src="{{ asset('files/product/' . $image->image) }}" alt="{{ $product->name }}">
                @endforeach
            @else
                <img class="default-img" src="{{ asset('noAvatar.png') }}" alt="{{ $product->name }}">
            @endif
        </div>
        <div class="content pt-10">
            <h5><a href="{{ route('product.view', $product->slugs) }}">{{ $product->name }}</a>
            </h5>
            <p class="price mb-0 mt-5">৳ {{ number_format($product->getFinalPrice()) }}</p>
            <div class="product-rate" style="margin-left: 11px">
                <div class="product-rating" style="width:{{ $product->getRating() }}%"></div>
            </div>
        </div>
    </div>
</div>
