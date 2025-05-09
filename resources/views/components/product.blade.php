<div class="product-cart-wrap mb-30">
    <div class="product-img-action-wrap">
        <span class="oos"></span>
        <div class="product-img product-img-zoom">
            <a href="{{ route('product.view', $product->slugs) }}">
                @if ($product->images)
                    @foreach ($product->images as $key => $image)
                        <img class="{{ $key + 1 == 1 ? 'default-img' : 'hover-img' }}"
                            src="{{ asset('files/product/' . $image->image) }}" alt="{{ $product->name }}" loading="lazy">
                    @endforeach
                @endif
                @if ($product->attributes && $product->attributes->first())
                    @foreach ($product->attributes->take(2) as $key => $image)
                        <img class="{{ $key + 1 == 1 ? 'default-img' : 'hover-img' }}"
                            src="{{ asset('files/product/' . $image->image) }}" alt="{{ $product->name }}"
                            loading="lazy">
                    @endforeach
                @endif
            </a>
        </div>


        <div class="product-badges product-badges-position product-badges-mrg gap-1">
            @if ($product->stock() == 0)
                <span class="hot">
                    Stock out
                </span>
            @else
                @if ($product->featured == 1)
                    <span class="sale">
                        Featured
                    </span>
                @elseif ($product->popular == 1)
                    <span class="new">
                        Popular
                    </span>
                @endif
                @if ($product->shipping_fee == 1)
                    <span class="best">
                        Shipping free
                    </span>
                @endif
            @endif
        </div>
    </div>
    <div class="product-content-wrap">
        <div class="product-category">
            <a href="#">{{ $product->category ? $product->category->category_name : 'Random' }}</a>
        </div>
        <h2><a href="{{ route('product.view', $product->slugs) }}">{{ $product->name }}</a>
        </h2>


        <div class="d-flex gap-2 align-items-center">
            <div class="product-rate d-inline-block">
                <div class="product-rating" style="width:{{ $product->getRating() }}%">
                </div>
            </div>
            <span>({{ count($product->comments) }})</span>
        </div>
        <div class="product-price">
            <span>৳ {{ number_format($product->getFinalPrice()) }}</span>
            <span class="old-price">৳ {{ number_format($product->price, 0) }}</span>
        </div>

        <div class="product-action-1 show">
            <a href="{{ route('product.view', $product->slugs) }}" aria-label="Order now" class="action-btn hover-up"
                href="shop-cart.html"><i class="fi fi-rr-shopping-cart"></i></a>
        </div>
    </div>
</div>
