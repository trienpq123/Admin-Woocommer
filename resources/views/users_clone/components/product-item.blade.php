@php
    $variants = $product->variants;
    // dd($variants);
    $price = null;
    $PriceProductDiscount = null;
    foreach ($variants as $key => $value) {
        if ($value['price'] > 0) {
            if ($price === null || $value['price'] < $price) {
                $PriceProductDiscount = $value['price'];
                $price = $value['price_old'];
            }
        }
    }
@endphp
<div class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
    <div class="product-block item loop-border">
        <div class="product-img  has-hover"
            data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz ram_8GB DDR4 chip_R5 5500U vga_GTX 1650 R05G GTX 1650">
            <a href="{{url('products', $product->slug)}}"
                title="Laptop Gaming Acer Aspire 7 A715 42G R05G" class="image-resize ">
                @if (isset($PriceProductDiscount) && $PriceProductDiscount > 0)
                    @php
                        $discount = ($price - $PriceProductDiscount) / $price * 100;
                    @endphp
                <div class="product-sale"><span>{{ number_format($discount, 0, ',', ',') }} %</span></div>
                @endif
                <img class="lazyload dt-width-100 img-first bigloaded" width="260" height="260"
                    src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_large.jpg"
                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_large.jpg"
                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_medium.jpg"
                    alt="Laptop Gaming Acer Aspire 7 A715 42G R05G">
                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260" height="260"
                    src="//product.hstatic.net/200000837185/product/laptopgamingaceraspire7a715-42g-r05g_d1b8b343a49c42dd96a95f43f102ca5c_large.png"
                    data-src="//product.hstatic.net/200000837185/product/laptopgamingaceraspire7a715-42g-r05g_d1b8b343a49c42dd96a95f43f102ca5c_large.png"
                    data-mobile="//product.hstatic.net/200000837185/product/laptopgamingaceraspire7a715-42g-r05g_d1b8b343a49c42dd96a95f43f102ca5c_large.png"
                    alt="Laptop Gaming Acer Aspire 7 A715 42G R05G">
            </a>
            <div class="button-loop-pro hidden-xs hidden-sm">
                <button class="btn-quickview"
                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-acer-aspire-7-a715-42g-r05g?view=quickview-nochoose')"
                    type="button">
                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                        width="16" height="16" alt="Xem nhanh">
                </button>
            </div>
        </div>
        <div class="product-detail">
            <strong class="pro-name"><a href="/products/laptop-gaming-acer-aspire-7-a715-42g-r05g"
                    title="Laptop Gaming Acer Aspire 7 A715 42G R05G">{{ $product->name_product }}</a></strong>
            <div class="d-flex js-between d-flex-center">
                <ul class="list-variants d-flex d-flex-wrap image">
                </ul>
            </div>
            <div class="box-pro-prices">

                <p class="pro-price">
                    @if (isset($price) && $price > 0)
                        <span>
                            {{ number_format($price, 0, ',', ',') }}₫ </span>
                        <del class="compare-price">{{ number_format($PriceProductDiscount, 0, ',', ',') }}₫</del>
                    @endif
                </p>
            </div>
            <ul class="hash-tag-loop">
            </ul>
            <ul class="config-tags">
                <li>
                    <img width="32" height="32" loading="lazy" fetchpriority="low" decoding="async"
                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                        alt="R5 5500U">
                    <span>R5 5500U</span>
                </li>
                <li>
                    <img width="32" height="32" loading="lazy" fetchpriority="low" decoding="async"
                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                        alt="8GB DDR4">
                    <span>8GB DDR4</span>
                </li>
                <li>
                    <img width="32" height="32" loading="lazy" fetchpriority="low" decoding="async"
                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                        alt="GTX 1650">
                    <span>GTX 1650</span>
                </li>
                <li>
                    <img width="32" height="32" loading="lazy" fetchpriority="low" decoding="async"
                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                        alt="15.6" fhd="" 144hz"="">
                    <span>15.6" FHD 144Hz</span>
                </li>
            </ul>
        </div>
    </div>
</div>
