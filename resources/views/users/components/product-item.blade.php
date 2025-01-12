@php
    $price_product = collect($item->variants)->sortBy('price')->toArray();
@endphp
<div class="col-lg-3 ">
    <div class="card e-co-product">
        <a href="{{ route('product.detail', ['slug' => $item->slug]) }}">
            <img src="{{ $item->images[0]->link_img }}" alt="" class="img-fluid">
        </a>
        <div class="card-body product-info">
            <a href="{{ route('product.detail', ['slug' => $item->slug]) }}" class="product-title">{{ $item->name_product }}</a>
            <div class="d-flex justify-content-between my-2">
                @if(count($price_product) > 0 && $price_product[0]['price_old'] > 0)
                    <p class="product-price">{{ number_format($price_product[0]['price_old'], 0, ',', ',') }}đ <span class="ml-2"><del>{{ number_format($price_product[0]['price'], 0, ',', ',') }}</del></span></p>
                @else
                    @if (count($price_product) > 0 && $price_product[0]['price'] > 0)
                        <p class="product-price">{{ number_format($price_product[0]['price'], 0, ',', ',') }}đ</p>
                    @else
                        <p class="product-price">Liên hệ</p>
                    @endif
                @endif
                <ul class="list-inline mb-0 product-review align-self-center">
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                    </li>
                </ul>
            </div>
            <button
                class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                    class="mdi mdi-cart mr-1"></i> Add To Cart</button>
            <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
            <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->