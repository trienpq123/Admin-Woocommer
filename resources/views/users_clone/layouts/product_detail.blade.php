@extends('users.index')
@section('main')
    <main>
        <div class="breadcrumb-shop">
            <div class="container">
                <ol class="breadcrumb breadcrumb-arrows">
                    <li itemprop="itemListElement">
                        <a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                    </li>



                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="https://xgear.net/collections/laptop" target="_self" itemprop="item">
                            <span itemprop="name">Laptop</span>
                        </a>
                    </li>

                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"
                            content="https://xgear.net/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn">
                            <span itemprop="name">{{ $product->name_product }}</span>
                        </span>
                    </li>

                </ol>
            </div>
        </div>
        <section id="product-template" class="product-page">
            <div class="container">
                <div class="row-left-list d-flex">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 order-mb-3 pd-right-0">
                        <div class="bg-while height-100">
                            <div class="d-flex row-left-list">
                                <div
                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-mb-1 gallery-product-template pd-right-0">
                                    <div class="d-flex-wrap d-flex sticky-gallery">
                                        <div id="sl-product-thumb" class="product-thumb hidden-xs" data-widththumb="false">
                                            <div id="slider-thumb"
                                                class="slider-mobile d-flex-slick slider-nav"
                                                data-lg="6" data-md="6" data-sm="5" data-vertical="false">            
                                                @if ($product->images->count() > 0)
                                                    @foreach ($product->images as $image)
                                                    <div class="item item-owl "
                                                    data-slick-index="0" aria-hidden="false"
                                                    tabindex="0">
                                                    <a href="javascript:void(0)" class="product__thumbnail"
                                                        tabindex="0">
                                                        <img alt="{{ $product->name_product }}"
                                                            class="lazyload-cus dt-width-100"
                                                            src="{{ $image->link_img }}"
                                                           />
                                                    </a>
                                                </div>
                                                    @endforeach
                                                @endif                                        
                                                       
                                            </div>
                                        </div>
                                        <div class="product-relative" style="position: relative; width: 100%; order: 1;">
                                            <div class="product-gallery d-flex-slick slider-for"
                                                data-allin="1" data-widthgallery="false">
                                                @if (count($product->images) > 0)
                                                    @foreach ($product->images as $image)
                                                        
                                                    <div class="item item-owl "
                                                        data-pos="0"
                                                        data-img="{{$image->link_img}}"
                                                        data-slick-index="0" aria-hidden="false"
                                                       
                                                        tabindex="0">
                                                        <a href="{{$image->link_img}}"
                                                            data-fancybox="gallery" class="product__thumbnail"
                                                            tabindex="0">
                                                            <img alt="{{ $product->name_product }}"
                                                                class="product-image-feature dt-width-100 lazyload bigloaded"
                                                                src="{{$image->link_img}}"
                                                                data-src="{{$image->link_img}}"
                                                                >
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                @endif
                                                  
                                               
                                            </div>
                                        </div>



                                    </div>
                                    <ul class="config-tags-p product-layouts">
                                        <li>
                                            <img width="32" height="32" loading="lazy" fetchpriority="low"
                                                decoding="async"
                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                alt="i5 12450HX">
                                            <span>i5 12450HX</span>
                                        </li>
                                        <li>
                                            <img width="32" height="32" loading="lazy" fetchpriority="low"
                                                decoding="async"
                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                alt="12GB DDR5">
                                            <span>12GB DDR5</span>
                                        </li>
                                        <li>
                                            <img width="32" height="32" loading="lazy" fetchpriority="low"
                                                decoding="async"
                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                alt="RTX 2050">
                                            <span>RTX 2050</span>
                                        </li>
                                        <li>
                                            <img width="32" height="32" loading="lazy" fetchpriority="low"
                                                decoding="async"
                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                alt="15.6" fhd="" 144hz"="">
                                            <span>15.6" FHD 144Hz</span>
                                        </li>
                                        <li>
                                            <img width="32" height="32" loading="lazy" fetchpriority="low"
                                                decoding="async"
                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_6_icon.png?v=2316"
                                                alt="2.4 kg">
                                            <span>2.4 kg</span>
                                        </li>
                                        <li>
                                            <img width="32" height="32" loading="lazy" fetchpriority="low"
                                                decoding="async"
                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_7_icon.png?v=2316"
                                                alt="60Whr">
                                            <span>60Whr</span>
                                        </li>
                                    </ul>

                                </div>
                                <style>
                                    .config-tags-p {
                                        display: flex;
                                        flex-wrap: wrap;
                                        column-gap: 10px;
                                        margin: 0;
                                        padding: 0;
                                        list-style: none;
                                        max-width: 600px;
                                        flex-direction: row;
                                        justify-content: space-evenly;
                                        line-height: 2;
                                    }

                                    .config-tags-p li img {
                                        max-width: 25px;
                                        width: auto;
                                        height: auto;
                                        display: inline-block;
                                    }

                                    .config-tags-p li span {
                                        font-size: 14px;
                                        font-weight: 600;
                                    }

                                    .config-tags-p li {
                                        width: 150px;
                                        display: block;
                                    }

                                    @media only screen and (max-width: 600px) {
                                        .config-tags-p li img {
                                            max-width: 15px;
                                            width: auto;
                                            height: auto;
                                            display: inline-block;
                                        }

                                        .config-tags-p li span {
                                            font-size: 10px;
                                            font-weight: 600;
                                        }
                                    }
                                </style>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 order-mb-2 pd-right-0">
                                    <div class="product-content">
                                        <div class="pro-content-head clearfix">
                                            <div class="head-product-title">
                                                <h1 data-available="Còn hàng" class="green">
                                                    {{ $product->name_product }}
                                                    <span class="tags-status">
                                                    </span>

                                                </h1>
                                            </div>
                                            <div style="color: rgb(51, 51, 51); opacity: 1;"
                                                handle="laptop-gaming-lenovo-loq-15iax9-83gs001svn"
                                                class="pageviewsbigpen laptop-gaming-lenovo-loq-15iax9-83gs001svn">
                                                <span data-id="1052765387" data-date="2024-01-18 18:02"
                                                    class="itempageview" style="color:#f00;font-size:1.1em">65585</span>
                                                lượt xem |
                                                <span style="color:#f00;font-size:1.1em;display:none"
                                                    class="itemsell">2392</span>
                                                <div class="haravan-product-reviews-badge hrv-product-reviews-star text-left"
                                                    data-id="1052765387" data-score="true"
                                                    data-url="laptop-gaming-lenovo-loq-15iax9-83gs001svn"><span
                                                        class="ratingcount"></span></div>
                                            </div>
                                            <div class="d-flex product-info">
                                                <div class="pro-brand"><span>Thương hiệu: </span><a class="title"
                                                        rel="nofollow" href="/collections/vendors?q=lenovo">Lenovo</a>
                                                </div>
                                                <span class="line-info">|</span>
                                                <div class="pro-type"><span>Loại: </span><a class="title" rel="nofollow"
                                                        href="/collections/types?q=laptop">Laptop</a></div>


                                            </div>
                                            <div id="pro-price">
                                                <span class="price-now">17,590,000₫</span>
                                                <span class="price-compare"><del>25,990,000₫</del></span>












































                                            </div>

                                            <div class="tags-baohanh">



                                                <a href="javascript:void(0)">Bảo hành 24 tháng chính hãng.</a>



                                                <a href="javascript:void(0)">Đã bao gồm VAT</a>




































                                            </div>
                                        </div>

                                        <div class="bg-countdown-product" data-id="1052765387" data-stock-max="40"
                                            data-available="true" data-sold-quantity="">
                                            <div class="count-down-index d-flex d-flex-center">
                                                <span>Kết thúc trong: </span>
                                                <ul class="countdown-deal d-flex d-flex-center js-center"
                                                    data-countdown="Dec 10,  23:59:59">
                                                    <li><strong class="days">00</strong><small>Ngày</small></li>
                                                    <li><strong class="hours">09</strong><small>Giờ</small></li>
                                                    <li><strong class="minutes">30</strong><small>Phút</small></li>
                                                    <li><strong class="seconds">06</strong><small>Giây</small></li>
                                                </ul>
                                            </div>
                                            <div class="fl_progressbar_group">
                                                <div class="fl_label"><img width="16" height="16"
                                                        alt="Flash sale"
                                                        src="https://file.hstatic.net/200000713019/file/flash-sale_a881187085374b689b2dff6b34de3083.png"><span>Đã
                                                        bán <b>31</b> sản phẩm</span></div>
                                                <div class="fl_progressbar">
                                                    <div class="fl_percent" style="width: 78%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="notify-form" class="notify-form" style="display: none;">
                                        <form>
                                            <h4><b>ĐĂNG KÝ NHẬN THÔNG TIN KHI CÓ HÀNG</b></h4>
                                            <input type="hidden" id="productName"
                                                oninput="{{ $product->name_product }}" readonly=""
                                                value="{{ $product->name_product }}">
                                            <input type="hidden" id="productPrice" oninput="17,590,000₫" readonly=""
                                                value="17,590,000₫">
                                            <input type="hidden" id="productLink" oninput="" readonly=""
                                                value="https://xgear.net/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn">
                                            <input placeholder="Họ và tên" id="name">
                                            <input placeholder="Số điện thoại" type="tel" id="phone">
                                            <input placeholder="Email" id="mail">
                                            <button id="submit">ĐĂNG KÝ NHẬN THÔNG TIN</button>
                                        </form>
                                    </div>

                                    <div class="hrv-pmo-coupon" data-hrvpmo-layout="grids"></div>
                                    <form id="add-item-form" action="/cart/add" method="post"
                                        class="variants clearfix">
                                        <div class="select hidden">
                                            <div class="selector-wrapper"><label>Khuyến mãi</label><span
                                                    class="custom-dropdown custom-dropdown--white"><select
                                                        class="single-option-selector custom-dropdown__select custom-dropdown__select--white"
                                                        data-option="option1" id="product-select-option-0">
                                                        <option value="Giá sốc ( Không bao gồm ưu đãi thêm )">Giá sốc (
                                                            Không bao gồm ưu đãi thêm )</option>
                                                        <option value="Miễn phí nâng cấp 20GB Ram DDR5 hoặc quà tặng">Miễn
                                                            phí nâng cấp 20GB Ram DDR5 hoặc quà tặng</option>
                                                        <option value="Trả góp 0%">Trả góp 0%</option>
                                                    </select></span></div><select id="product-select" name="id"
                                                style="display: none;">
                                                <option value="1125385582" data-available="true"
                                                    data-variant="Giá sốc ( Không bao gồm ưu đãi thêm )">Giá sốc ( Không
                                                    bao gồm ưu đãi thêm )</option>
                                                <option value="1123285891" data-available="true"
                                                    data-variant="Miễn phí nâng cấp 20GB Ram DDR5 hoặc quà tặng">Miễn phí
                                                    nâng cấp 20GB Ram DDR5 hoặc quà tặng</option>
                                                <option value="1126286921" data-available="true"
                                                    data-variant="Trả góp 0%">Trả góp 0%</option>
                                            </select>
                                        </div>
                                        <div class="data-attribute-product" style="display: none;" data-attribute="{{json_encode($product->attribute)}}" data-variants="{{json_encode($product->variants)}}"></div>
                                        <div class="row">
                                            @if (isset($product->attribute) && !is_null($product->attribute) )
                                                @foreach ($product->attribute as $index => $item)
                                                <div class="select-swatch clearfix col-xs-12 col-md-12 col-sm-12">
                                                    <div id="variant-swatch-0" class="swatch clearfix type-image"
                                                        data-option="option1" data-option-index="0">
                                                        <div class="header">{{$item['name']}}: <span class="color-text"></span></div>
                                                        <div class="select-swap">

                                                            @if (!is_null($item['title']))
                                                          
                                                                @foreach ($item['title'] as $key => $value)
                                                                    @php
                                                                        $name = removeVietnameseAccents($item['name']);
                                                                        $attribute = removeVietnameseAccents($value);
                                                                        // dd($attribute)
                                                                    @endphp
                                                                <div data-value="{{$attribute}}" class="n-sd swatch-element color {{$attribute}}  ">
                                                                    <input class="variant-0 color-change" id="swatch-{{$index}}-{{$attribute}}"
                                                                        type="radio" name="option{{$index}}" value="{{$value}}"
                                                                        data-vhandle="{{$attribute}}" {{$key == 0 ? 'checked' : ''}}>
                                                                    <label class="{{$attribute}} {{$key == 0 ? 'sd' : ''}}" for="swatch-{{$index}}-{{$attribute}}"
                                                                        data-price="{{$product['variants'][$key]['price']}}" data-price-old="{{$product['variants'][$key]['price_old']}}">
                                                                        <span class="variant-img"><img alt="{{$value}}"
                                                                                src="//product.hstatic.net/200000837185/product/black_afd40304f8cc4518bd938f393f3ecab7_icon.png"
                                                                                width="30"
                                                                                height="30"></span><span>{{$value}}</span>
                                                                    </label>
                                                                </div>
                                                                    
                                                                @endforeach
                                                            @endif


                                                            {{-- <div data-value="Trắng" class="n-sd swatch-element color trang  ">
                                                                <input class="variant-0 color-change" id="swatch-0-trang"
                                                                    type="radio" name="option1" value="Trắng"
                                                                    data-vhandle="trang">
                                                                <label class="trang" for="swatch-0-trang"
                                                                    data-price="1,750,000₫">
                                                                    <span class="variant-img"><img alt="Trắng"
                                                                            src="//product.hstatic.net/200000837185/product/white_275f429b4fad447b89042844d1381d76_icon.png"
                                                                            width="30"
                                                                            height="30"></span><span>Trắng</span>
                                                                </label>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif
                                            {{-- <div class="select-swatch clearfix col-xs-12 col-md-12 col-sm-12">
                                                <div id="variant-swatch-0" class="swatch clearfix type-image"
                                                    data-option="option1" data-option-index="0">
                                                    <div class="header">Màu sắc: <span class="color-text"></span></div>
                                                    <div class="select-swap">


                                                        <div data-value="Đen" class="n-sd swatch-element color den  ">
                                                            <input class="variant-0 color-change" id="swatch-0-den"
                                                                type="radio" name="option1" value="Đen"
                                                                data-vhandle="den" checked="">
                                                            <label class="den sd" for="swatch-0-den"
                                                                data-price="1,750,000₫">
                                                                <span class="variant-img"><img alt="Đen"
                                                                        src="//product.hstatic.net/200000837185/product/black_afd40304f8cc4518bd938f393f3ecab7_icon.png"
                                                                        width="30"
                                                                        height="30"></span><span>Đen</span>
                                                            </label>
                                                        </div>


                                                        <div data-value="Trắng" class="n-sd swatch-element color trang  ">
                                                            <input class="variant-0 color-change" id="swatch-0-trang"
                                                                type="radio" name="option1" value="Trắng"
                                                                data-vhandle="trang">
                                                            <label class="trang" for="swatch-0-trang"
                                                                data-price="1,750,000₫">
                                                                <span class="variant-img"><img alt="Trắng"
                                                                        src="//product.hstatic.net/200000837185/product/white_275f429b4fad447b89042844d1381d76_icon.png"
                                                                        width="30"
                                                                        height="30"></span><span>Trắng</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 selector-actions d-flex d-flex-center">
                                                <div class="quantity-area">
                                                    <input type="button" value="–"
                                                        onclick="minusQuantity(this)"
                                                        class="qty-btn qtyminus" fdprocessedid="fzg9i">
                                                    <input type="text" id="quantity" name="quantity" value="1"
                                                        min="1" class="quantity-selector" fdprocessedid="b2cgok">
                                                    <input type="button" value="+"
                                                        onclick="plusQuantity(this)"
                                                        class="qty-btn qtyplus" fdprocessedid="n92ga6">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">




                                              --}}
                                                <script>
                                                    var liAllLength = $(".pproduct-promo-body-data li").length || 0;
                                                    if (liAllLength > 3) {
                                                        var liHideLength = liAllLength - 3;
                                                        var readMore =
                                                            `<li class="pproduct-promo-body-data-more"><a href="javascript:void(0);">Xem thêm ${liHideLength} ưu đãi khác <i class="fa fa-chevron-down"></a></li>`;
                                                        $(".pproduct-promo-body-data").append(readMore);
                                                    }
                                                    $("body").on("click", ".pproduct-promo-body-data-more a", function(e) {
                                                        e.preventDefault();
                                                        $(this).remove();
                                                        $(".pproduct-promo-body-data li").show();
                                                    })
                                                </script>
                                                <style>
                                                    .payment-vnpay li:before {
                                                        content: url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48' width='15' height='15'%3E%3Cpath fill='%234caf50' d='M44 24c0 11.045-8.955 20-20 20S4 35.045 4 24 12.955 4 24 4s20 8.955 20 20z'/%3E%3Cpath fill='%23ccff90' d='M34.602 14.602 21 28.199l-5.602-5.598-2.797 2.797L21 33.801l16.398-16.402-2.796-2.797z'/%3E%3C/svg%3E);
                                                        margin-right: 4px;
                                                        position: relative;
                                                        top: 2px;
                                                    }
                                                </style>
                                            </div>
                                            <div class="col-xs-12 selector-actions d-flex d-flex-center pd-top-10">
                                                <div class="wrap-addcart" style=" ">
                                                    <button type="button" id="add-to-cart"
                                                        class="flex-addcart-mb  add-to-cart-style" name="add"
                                                        fdprocessedid="bi5dsx">
                                                        <strong>Thêm vào giỏ</strong>
                                                        <span>Giao Tận Nơi Hoặc Nhận Tại Cửa Hàng</span>
                                                    </button>
                                                    <button type="button" id="buynow-combo"
                                                        class="flex-addcart-mb mg-top-10  add-to-combo-style hidden"
                                                        name="add">
                                                        <strong>Mua combo</strong>
                                                        <span>Ưu đãi khi mua kèm các sản phẩm khác</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="tragops" style=" ">

                                                <a href="/pages/dang-ky-mua-tra-gop" class="tragop-link"
                                                    data-product-name="{{ $product->name_product }}"
                                                    data-product-price="17,590,000₫"
                                                    data-product-image="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_master.png">
                                                    <strong>TRẢ GÓP (HDSAISON)</strong>
                                                    <br>
                                                    <span>Duyệt nhanh qua điện thoại</span>
                                                </a>


                                                <a href="/pages/dang-ky-mua-tra-gop" class="tragop-link"
                                                    data-product-name="{{ $product->name_product }}"
                                                    data-product-image="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_master.png">
                                                    <strong>TRẢ GÓP QUA THẺ</strong>
                                                    <br>
                                                    <span>Visa, Mastercard, JCB(Từ 3 triệu)</span>
                                                </a>

                                            </div>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var tragopLinks = document.querySelectorAll('.tragop-link');
                                                    tragopLinks.forEach(function(link) {
                                                        link.addEventListener('click', function(event) {
                                                            event.preventDefault();
                                                            var productName = this.getAttribute('data-product-name');
                                                            var productPrice = this.getAttribute('data-product-price');
                                                            var productImage = this.getAttribute('data-product-image');
                                                            if (parseFloat(productPrice.replace(/[^\d.]/g, '')) < 2500000) {
                                                                alert(
                                                                    'Sản phẩm này không đủ điều kiện trả góp.Trả góp áp dụng với sản phẩm trên 2,500,000đ triệu'
                                                                );
                                                            } else {
                                                                var queryParams = 'product=' + encodeURIComponent(productName) + '&price=' +
                                                                    encodeURIComponent(productPrice) + '&image=' + encodeURIComponent(
                                                                        productImage);
                                                                window.location.href = 'https://xgear.net/pages/dang-ky-mua-tra-gop?' +
                                                                    queryParams;
                                                            }
                                                        });
                                                    });
                                                });
                                            </script>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var tragopLinks = document.querySelectorAll('.tragop-link-2');

                                                    // Hàm để tìm giá của biến thể theo tên
                                                    function findVariantPriceByName(variantName) {
                                                        var variants = document.querySelectorAll('input[type="radio"][name="option1"]');
                                                        var price = '';
                                                        variants.forEach(function(radio) {
                                                            if (radio.nextElementSibling && radio.nextElementSibling.innerText.includes(
                                                                    variantName)) {
                                                                price = radio.nextElementSibling.getAttribute('data-price') ||
                                                                    '0'; // Đặt giá mặc định là 0 nếu không tìm thấy
                                                            }
                                                        });
                                                        return price;
                                                    }

                                                    tragopLinks.forEach(function(link) {
                                                        link.addEventListener('click', function(event) {
                                                            event.preventDefault();

                                                            var productName = this.getAttribute('data-product-name');
                                                            var productImage = this.getAttribute('data-product-image');

                                                            // Lấy giá trị của biến thể đang được chọn
                                                            var selectedRadio = document.querySelector(
                                                                'input[type="radio"][name="option1"]:checked');
                                                            var selectedVariantValue = selectedRadio ? selectedRadio.value :
                                                                'N/A'; // Lấy giá trị của biến thể đang chọn

                                                            // Tìm giá của biến thể đang chọn
                                                            var variantPrice = '';
                                                            if (selectedRadio) {
                                                                var selectedLabel = selectedRadio.nextElementSibling;
                                                                variantPrice = selectedLabel ? selectedLabel.getAttribute('data-price') ||
                                                                    '0' : '0';
                                                            }

                                                            // Tìm giá của biến thể "Trả góp 0%"
                                                            var credit0PercentPrice = findVariantPriceByName('Trả góp 0%');

                                                            console.log('Selected Variant Value:', selectedVariantValue);
                                                            console.log('Variant Price:', variantPrice);
                                                            console.log('Trả góp 0% Price:', credit0PercentPrice);

                                                            // Kiểm tra giá trả góp 0% để đảm bảo đúng định dạng
                                                            var credit0PercentPriceNumber = parseFloat(credit0PercentPrice.replace(
                                                                /[^\d.]/g, ''));
                                                            if (isNaN(credit0PercentPriceNumber) || credit0PercentPriceNumber === 0) {
                                                                console.warn('Giá trả góp 0% không hợp lệ hoặc không tìm thấy');
                                                            }

                                                            // Kiểm tra giá biến thể đang chọn
                                                            var variantPriceNumber = parseFloat(variantPrice.replace(/[^\d.]/g, ''));
                                                            if (variantPriceNumber < 2500000) {
                                                                alert(
                                                                    'Sản phẩm này không đủ điều kiện trả góp. Trả góp áp dụng với sản phẩm trên 2,500,000đ'
                                                                );
                                                            } else {
                                                                var queryParams = 'product=' + encodeURIComponent(productName) +
                                                                    '&price=' + encodeURIComponent(variantPrice) +
                                                                    '&image=' + encodeURIComponent(productImage) +
                                                                    '&selected_variant=' + encodeURIComponent(selectedVariantValue) +
                                                                    '&credit0_percent_price=' + encodeURIComponent(credit0PercentPrice);
                                                                window.location.href = 'https://xgear.net/pages/khuyen-mai-demo?' +
                                                                    queryParams;
                                                            }
                                                        });
                                                    });
                                                });
                                            </script>

                                        </div>
                                    </form>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var availability = document.querySelector('h1').getAttribute('data-available');
                                        // Kiểm tra điều kiện hiển thị form
                                        if (availability === 'Tạm hết hàng' || document.querySelector('.status-label.coming-soon-green')) {
                                            document.getElementById('notify-form').style.display = 'block';
                                        }

                                        // Xử lý sự kiện khi submit form
                                        document.getElementById('submit').addEventListener('click', function(event) {
                                            event.preventDefault();

                                            const fullname = document.getElementById('name').value;
                                            const phone = document.getElementById('phone').value;
                                            const mail = document.getElementById('mail').value;

                                            if (fullname && phone && mail) {
                                                alert('Đăng ký thành công! Chúng tôi sẽ thông báo khi sản phẩm có hàng.');
                                                resetForm(); // Gọi hàm resetForm() sau khi đăng ký thành công
                                            } else {
                                                alert('Vui lòng điền đầy đủ thông tin.');
                                            }
                                        });

                                        // Hàm để reset form
                                        function resetForm() {
                                            document.getElementById('name').value = '';
                                            document.getElementById('phone').value = '';
                                            document.getElementById('mail').value = '';
                                        }
                                    });;

                                    const productname = document.getElementById("productName");
                                    const productprice = document.getElementById("productPrice");
                                    const productlink = document.getElementById("productLink");
                                    const fullname = document.getElementById("name");
                                    const phone = document.getElementById("phone");
                                    const mail = document.getElementById("mail");
                                    const submit = document.getElementById("submit");

                                    // Tự động điền tên và giá sản phẩm vào biểu mẫu
                                    productName.value =
                                        "{{ $product->name_product }}";
                                    productPrice.value = "17,590,000₫";
                                    productLink.value = window.location.href;

                                    submit.addEventListener("click", () => {
                                        if (fullname.value && phone.value && mail.value) {
                                            const data = {
                                                productName: productname.value,
                                                productPrice: productprice.value,
                                                productLink: productlink.value,
                                                name: fullname.value,
                                                phone: phone.value,
                                                mail: mail.value,
                                            };
                                            postData(data);
                                        } else {
                                            alert("Vui lòng điền đầy đủ thông tin.");
                                        }
                                    });

                                    async function postData(data) {
                                        const formData = new FormData();
                                        formData.append("entry.1238526203", data.productName);
                                        formData.append("entry.1259895126", data.productPrice);
                                        formData.append("entry.499649339", data.productLink);
                                        formData.append("entry.1546891301", data.name);
                                        formData.append("entry.670025582", data.phone);
                                        formData.append("entry.616266990", data.mail);

                                        fetch(
                                            "https://docs.google.com/forms/d/e/1FAIpQLSf2Qydq91nJW5Ne_0lFV2uZe7rU9cS83Nl2rBjMK9XDN5-5pg/formResponse", {
                                                method: "POST",
                                                body: formData,
                                                mode: "no-cors",
                                            }
                                        );
                                    }
                                </script>
                                <script>
                                    // Hàm để copy mã giảm giá vào clipboard
                                    function copyDiscountCode() {
                                        var discountCode = document.getElementById("discountCode").innerText;

                                        // Sao chép nội dung mã giảm giá vào clipboard
                                        navigator.clipboard.writeText(discountCode)
                                            .then(function() {
                                                // Thông báo cho người dùng biết mã đã được sao chép thành công
                                                alert("Mã giảm giá đã được sao chép: " + discountCode);
                                            })
                                            .catch(function(error) {
                                                console.error("Không thể sao chép mã giảm giá: ", error);
                                            });
                                    }
                                </script>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var swatchElements = document.querySelectorAll('.swatch-element');
                                        var specialDeal = document.querySelector('.special-deal');

                                        function checkSpecialDeal() {
                                            var selectedElement = document.querySelector('.swatch-element input[type="radio"]:checked');
                                            if (selectedElement) {
                                                var selectedValue = selectedElement.value;
                                                if (selectedValue.includes("Giá sốc")) {
                                                    specialDeal.style.display = 'block'; // Hiển thị special-deal
                                                } else {
                                                    specialDeal.style.display = 'none'; // Ẩn special-deal
                                                }
                                            }
                                        }

                                        // Kiểm tra khi trang được load
                                        checkSpecialDeal();

                                        // Gắn sự kiện khi người dùng chọn các tùy chọn
                                        swatchElements.forEach(function(swatchElement) {
                                            swatchElement.addEventListener('click', function() {
                                                checkSpecialDeal();
                                            });
                                        });
                                    });
                                </script>
                                <style>
                                    .dlpm-heading {
                                        display: none;
                                    }

                                    .notify-form {
                                        border: 1px solid #ccc;
                                        padding: 20px;
                                        margin-top: 20px;
                                        background-color: #f9f9f9;
                                    }

                                    .notify-form h2 {
                                        margin-top: 0;
                                    }

                                    .notify-form label {
                                        display: block;
                                        margin-bottom: 5px;
                                    }

                                    .notify-form input {
                                        width: 100%;
                                        padding: 10px;
                                        margin-bottom: 10px;
                                        border: 1px solid #ccc;
                                    }

                                    .notify-form button {
                                        padding: 10px 20px;
                                        background-color: #28a745;
                                        color: white;
                                        border: none;
                                        cursor: pointer;
                                    }

                                    .notify-form button:hover {
                                        background-color: #218838;
                                    }

                                    .discount-container {
                                        display: flex;
                                        width: 50%;
                                        background-color: #fff;
                                        margin-top: 10px;
                                        padding: 5px;
                                        border-radius: 8px;
                                        box-shadow: 0 2px 4px rgb(0 0 0 / 30%);
                                        flex-direction: row;
                                    }

                                    .discount-code {
                                        display: none;
                                        font-size: 18px;
                                        font-weight: bold;
                                        color: #333;
                                        margin-bottom: 20px;
                                    }

                                    .copy-button {
                                        padding: 5px 10px;
                                        background-color: #007bff;
                                        color: #fff;
                                        border: none;
                                        border-radius: 4px;
                                        cursor: pointer;
                                        transition: background-color 0.3s ease;
                                    }

                                    .copy-button:hover {
                                        background-color: #0056b3;
                                    }

                                    .infor-discount {
                                        display: flex;
                                        flex-direction: column;
                                    }

                                    .img-discount {
                                        display: flex;
                                        align-items: center;
                                    }

                                    .payment-vnpay li:before {
                                        content: url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48' width='15' height='15'%3E%3Cpath fill='%234caf50' d='M44 24c0 11.045-8.955 20-20 20S4 35.045 4 24 12.955 4 24 4s20 8.955 20 20z'/%3E%3Cpath fill='%23ccff90' d='M34.602 14.602 21 28.199l-5.602-5.598-2.797 2.797L21 33.801l16.398-16.402-2.796-2.797z'/%3E%3C/svg%3E);
                                        margin-right: 4px;
                                        position: relative;
                                        top: 2px;
                                    }
                                    .special-deal {
                                        margin: 5px 0px;
                                        background: linear-gradient(45deg, rgb(208 2 27), rgb(255 97 116));
                                        color: rgb(255, 255, 255);
                                        border-radius: 5px;
                                        padding: 10px;
                                        line-height: 1;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                    }

                                    span.special-price-now {
                                        font-size: 24px;
                                        color: #ffffff;
                                        font-weight: 700;
                                        margin-left: 10px;
                                    }

                                    .tooltip {
                                        visibility: hidden;
                                        width: auto;
                                        background-color: black;
                                        color: #fff;
                                        text-align: center;
                                        border-radius: 5px;
                                        padding: 5px;
                                        position: absolute;
                                        z-index: 1;
                                        bottom: 88%;
                                        /* Đặt vị trí của tooltip phía trên phần tử */
                                        left: 50%;
                                        /* margin-left: -90px; /* Căn giữa tooltip */
                                        opacity: 0;
                                        */ transition: opacity 0.3s;
                                    }

                                    .tooltip::after {
                                        content: "";
                                        position: absolute;
                                        top: 100%;
                                        /* Đặt mũi tên ở dưới tooltip */
                                        left: 50%;
                                        margin-left: -5px;
                                        border-width: 5px;
                                        border-style: solid;
                                        border-color: black transparent transparent transparent;
                                    }

                                    .special-deal:hover .tooltip {
                                        visibility: visible;
                                        opacity: 1;
                                    }

                                    svg {
                                        fill: #d70018;
                                        width: 20px;
                                        margin-right: 5px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 order-mb-3 pd-right-0 mg-top-15-sm-xs">
                    <div class="bg-while height-100">
                        <div class="service-product">
                            <div class="head-title">
                                Cam kết bán hàng
                            </div>
                            <ul>
                                <li class="item">
                                    <img width="25" height="25"
                                        src="https://file.hstatic.net/200000837185/file/payment-method-pay-svgrepo-com_e04150442c1a474a988ca139daf53e5d.svg"
                                        alt="Hàng chính hãng.Mới 100%">
                                    <span class="content">Hàng chính hãng.Mới 100%</span>
                                </li>
                                <li class="item">
                                    <img width="25" height="25"
                                        src="https://file.hstatic.net/200000713019/file/policy_header_image_3_4d4c94de9c514e37ae4414e4de773c06.png"
                                        alt="Hỗ trợ trả góp">
                                    <span class="content">Hỗ trợ trả góp</span>
                                </li>
                                <li class="item">
                                    <img width="25" height="25"
                                        src="https://file.hstatic.net/200000837185/file/file-alt-svgrepo-com_8f775ecb322744979cf29a43c09091b2.svg"
                                        alt="Giao hàng ngay (nội thành HN &amp; TP.HCM)">
                                    <span class="content">Giao hàng ngay (nội thành HN &amp; TP.HCM)</span>
                                </li>
                                <li class="item">
                                    <img width="25" height="25"
                                        src="https://file.hstatic.net/200000837185/file/search-file-svgrepo-com_88e5c3f8d8a6498e81fd854c0156db82.svg"
                                        alt="Đổi trả trong 7 ngày đầu nếu có lỗi phần cứng từ NXS.">
                                    <span class="content">Đổi trả trong 7 ngày đầu nếu có lỗi phần cứng từ NXS.</span>
                                </li>
                            </ul>
                        </div>









                        <div class="promotion-tab">
                            <div class="head-title"><img width="22"
                                    src="https://file.hstatic.net/200000837185/file/gift-svgrepo-com__2__d5aa647a1b5d4e77a5ad7805d40e4472.svg">
                                Ưu đãi thêm
                            </div>
                            <div class="tab-content-promotion">
                                <ul>
                                    <li><a href="https://promotions.lenovo.com/vn/en" target="_blank" rel="noopener">Nhận
                                            ngay phiên bản Minecraft giới hạn và độc quyền mừng sinh nhật lần thứ 15 (15/7 -
                                            31/8/2024)</a></li>
                                    <li><a href="https://xgear.net/products/chuot-gaming-rapoo-v16-rgb">Tặng chuột gaming
                                            Rapoo V16</a></li>
                                    <li><span style="color: #ff0000;"><strong>Tặng Voucher 300.000 đ khi nâng cấp
                                                Ram&nbsp;</strong></span></li>
                                    <li><a href="https://xgear.net/products/tai-nghe-in-ear-rapoo-vm150">Tặng Tai nghe
                                            in-ear Rapoo VM150</a></li>
                                    <li><a href="https://xgear.net/products/lot-chuot-dareu-esp-101-black-350x300x5mm">Tặng
                                            lót chuột Dareu ESP 101</a></li>
                                    <li><a href="https://xgear.net/products/tui-chong-soc-15-6-cao-cap-xgear"
                                            target="_blank" rel="noopener noreferrer">Tặng Túi chống sốc cao cấp</a></li>
                                    <li><a href="https://xgear.net/products/balo-lenovo-ideapad-gaming-backpack">Balo
                                            Lenovo ideapad gaming backpack.</a></li>
                                    <li><a href="https://xgear.net/collections/gaming-gear">Giảm ngay 50.000đ khi mua thêm
                                            Gaming Gear.</a></li>
                                    <li><a href="https://xgear.net/collections/man-hinh">Giảm ngay 100.000đ khi mua thêm
                                            Màn hình.</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="contents">
                    <div class="col-md-9 col-sm-9 col-xs-12 order-mb-3 mg-top-30 mg-top-15-mb pd-right-0">
                        <div class="bg-while">
                            <div class="title-head-tab">
                                Mô tả sản phẩm
                            </div>
                            <div class="product-description-tab">
                                <div class="content-entry add-height-img max-height-ct lazyload-addclass">
                                    <div class="more-description">


                                        <div id="ega-uti-editable-content" data-platform="haravan" data-id="1052765387">
                                            <h2 style="text-align: center;">Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN –
                                                Laptop chuẩn màn hình 100% sRGB</h2>
                                            <ul>
                                                <li>Hiệu năng ấn tượng với CPU Intel Core i5-12450HX + GPU RTX 2050
                                                    4GB&nbsp;cân các tác vụ văn phòng, chiến game mượt mà</li>
                                                <li>Thiết kế chất lượng và mạnh mẽ, trang nhã, màu bạc nổi bật giúp máy hạn
                                                    chế bám mồ hôi và dấu vân tay</li>
                                                <li>Màn hình 15.6 inch FHD cùng tần số quét 144Hz chuẩn 100% sRGB tuyệt
                                                    đẹp,&nbsp;bắt kịp mọi thao tác của đối thủ</li>
                                                <li>Dung lượng 12GB SO-DIMM DDR5-4800, xử lý tốt đa nhiệm, bạn có thể nâng
                                                    cấp tối đa đến 32GB RAM</li>
                                                <li>Thời lượng pin trung bình với mức dung lượng 60Whr</li>
                                                <li>Bàn phím keyboard tích hợp đèn LED White&nbsp;Backlit thuận tiện để giải
                                                    trí và làm việc</li>
                                                <li>Giá bán: 17,590,000₫</li>
                                            </ul>
                                            <div>
                                                <div class="youtube-embed-wrapper"
                                                    style="position: relative; padding-bottom: 56.25%; height: 0px;">
                                                    <iframe width="640" height="360"
                                                        src="https://www.youtube.com/embed/P19UMRDXpww" frameborder="0"
                                                        style="aspect-ratio: 16 / 9; width: 100%; height: 100%; position: absolute;"
                                                        class="iframe-youtube-embed"></iframe>
                                                </div>
                                            </div>
                                            <p>&nbsp;</p>
                                            <p><strong>Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN&nbsp;</strong>là mẫu
                                                laptop gaming sở hữu hiệu năng mạnh mẽ, được tối ưu để mang tới trải nghiệm
                                                chơi game tốt nhất cho người dùng. Đi kèm là khả năng xử lý đồ họa xuất sắc,
                                                chất lượng hình ảnh vượt trội để phục vụ cho game thủ và nhà sáng tạo. Thiết
                                                kế thân thiện với concept cùng giá bán 17,590,000₫ sẽ phù hợp với cả người
                                                dùng phổ thông thay vì chỉ game thủ.</p>
                                            <p><img src="//file.hstatic.net/200000837185/file/08_lenovo_loq_15irx9_hero_immersive_display_0c54527dd1dd424b87a9880a9fca100a_1024x1024.png"
                                                    width="600" height="600"
                                                    class="dt-width-auto lazyload-description"></p>
                                            <h2>Thiết kế đầy tinh tế và thanh lịch</h2>
                                            <ul>
                                                <li><strong>Kiểu dáng cuốn mắt:</strong> Máy được hoàn thiện với các góc
                                                    cạnh được làm bo tròn một cách tỉ mỉ, tạo nên một vẻ ngoài đẹp mắt và
                                                    sang trọng. Mặt A được phủ lớp sơn màu Storm Grey độc đáo, tạo nên một
                                                    sự thu hút mạnh mẽ từ cái nhìn đầu tiên. Điểm nhấn của thiết kế là logo
                                                    mới được đặt ở góc cạnh, không chỉ làm tăng tính nhận diện thương hiệu
                                                    mà còn tạo nên một điểm nhấn độc đáo trên máy tính</li>
                                                <li><strong>Hệ thống tản nhiệt thông minh</strong>
                                                    <ul>
                                                        <li>Tản nhiệt mát mẻ với sự hiện diện của 4 ống dẫn nhiệt, mang đến
                                                            khả năng tản nhiệt nhanh chóng và hiệu quả cao cho các thành
                                                            phần bên trong máy</li>
                                                        <li>Hệ thống tản nhiệt được thiết kế với quạt kép bố trí theo hướng
                                                            ngược nhau, ngăn chặn hiệu ứng của luồng khí nóng thổi vào vùng
                                                            làm việc của người dùng. Đồng thời đưa khí mát vào bên trong và
                                                            không khí nóng được trực tiếp thổi ra ngoài, giúp giảm nhiệt độ
                                                            của laptop xuống thấp hơn khoảng 2 độ C và giảm độ ồn lên đến
                                                            2dB so với thế hệ trước</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Chất liệu chắc chắn:</strong> Lenovo LOQ 15IAX9
                                                    83GS001SVN&nbsp;được làm từ chất liệu kim loại cao cấp không chỉ đem đến
                                                    vẻ đẹp thẩm mỹ mà còn tạo ra sự bền bỉ, chắc chắn, hạn chế được trầy
                                                    xước cũng như bụi bẩn bám vào máy</li>
                                            </ul>
                                            <p><img src="//file.hstatic.net/200000837185/file/17_lenovo_loq_15irx9_hero_nahimic_74d57f9aeebf4b049214e347e2d88e7f_1024x1024.png"
                                                    width="600" height="600"
                                                    class="dt-width-auto lazyload-description"></p>
                                            <p>&nbsp;</p>
                                            <ul>
                                                <li><strong>Các cổng kết nối đầy đủ:</strong> Các thao tác và không gian của
                                                    bạn sẽ không bị giới hạn mà được thoải mái mở rộng nhờ các cổng kết nối
                                                    đa dạng, thuận tiện cho việc kết nối với các thiết bị ngoại vi. Máy sở
                                                    hữu các cổng như USB Type-A, HDMI 2.1, cổng Ethernet, cổng nguồn, USB
                                                    Type-C, Jack Audio 3.5mm,... giúp bạn đắm chìm hơn trong các bộ phim,
                                                    tựa game và âm nhạc trên màn ảnh lớn cùng bạn bè và gia đình</li>
                                                <li><strong>Trọng lượng vừa phải:</strong> Laptop sở hữu kích thước 359.6 x
                                                    264.8 x 22.1mm và nặng 2.4kg, tuy không quá nhỏ gọn nhưng lại rất phù
                                                    hợp với laptop gaming thế hệ mới. Bạn vẫn có thể cất gọn vào balo và
                                                    thoải mái mang máy tính theo bên mình mọi lúc mọi nơi</li>
                                                <li><strong>Màn hình sắc nét:</strong> Máy trang bị tấm nền IPS trên màn
                                                    hình 15.6 inch viền siêu mỏng. Thiết kế này vừa mang đến không gian hiển
                                                    thị rộng lớn, vừa cho hình ảnh chất lượng đến từ mọi góc nhìn. Các nội
                                                    dung hiển thị được tối ưu hóa ở độ phân giải Full HD 1920 x 1080 vô cùng
                                                    sắc nét cùng độ phủ màu 100% sRGB hứa hẹn cung cấp không gian giải trí,
                                                    gaming đắm chìm với hình ảnh sống động và mãn nhãn nhất</li>
                                                <li><strong>Cấu hình cực đỉnh</strong>
                                                    <ul>
                                                        <li>CPU Intel Core i5 1245HX với 8 nhân 12 luồng, trong đó 4 nhân P
                                                            với tốc độ lên đến 4.40 GHz và khả năng tiêu thụ tối đa 157W
                                                            điện. Nhờ sức mạnh này, bạn có thể thỏa sức chơi game,
                                                            livestream, chỉnh sửa video hay thực hiện các công việc nặng một
                                                            cách dễ dàng. Đặc biệt, loạt tính năng thông minh từ Intel như
                                                            Thread Director và Turbo Boost không chỉ tối ưu hóa trải nghiệm
                                                            chơi game mà còn giúp tăng tốc độ khung hình, giảm thiểu hiện
                                                            tượng lag giật, giúp chơi game mượt mà hơn bao giờ hết</li>
                                                        <li>RAM 12GB cho bạn làm đa nhiệm siêu mượt mà, bạn hoàn toàn có thể
                                                            mở hàng chục tabs mà không lo máy gặp các tình trạng như load
                                                            lại trang hay giật, đơ máy</li>
                                                        <li>Ổ cứng SSD dung lượng 512GB đảm bảo cung cấp đủ không gian lưu
                                                            trữ để người sử dụng thoải mái ở mức cơ bản. Đồng thời tăng khả
                                                            năng khởi động nhanh chóng và tải chương trình một cách nhanh
                                                            gọn</li>
                                                        <li>Sử dụng nền tảng Lenovo AI Engine cùng hỗ trợ từ con chip AI
                                                            LA1, máy tính tự động học hỏi thói quen sử dụng của người dùng,
                                                            sau đó tự động phân tích và điều chỉnh phần cứng của máy dựa
                                                            trên các ứng dụng hay trò chơi mà bạn thường xuyên sử dụng, từ
                                                            đó tối ưu hóa hiệu suất của CPU và GPU một cách thông minh và
                                                            hiệu quả nhất. Nhờ tính năng này, bạn không cần phải mất công
                                                            thiết lập cấu hình thủ công, máy tính sẽ tự động điều chỉnh để
                                                            đảm bảo mang đến trải nghiệm tốt nhất khi sử dụng</li>
                                                        <li>Card đồ họa RTX 20&nbsp;series vừa lý tưởng cho game thủ vừa là
                                                            công cụ mạnh mẽ cho người sáng tạo nội dung. Với GPU NVIDIA
                                                            GeForce RTX 2050, laptop man đến trải nghiêm đỉnh cao của kiến
                                                            trúc Ampere - thế hệ thứ hai của NVIDIA với các công nghệ tiên
                                                            tiến như nhân RT mới, nhân Tensor mới và các tính năng AI tiên
                                                            tiến. Các tính năng này không chỉ tạo ra hình ảnh đẹp và mượt mà
                                                            trong các tựa game mà còn giúp tối ưu hóa hiệu suất khi sáng tạo
                                                            nội dung.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <p>&nbsp;</p>
                                            <p><img src="//file.hstatic.net/200000837185/file/01_lenovo_loq_15irx9_closeup_intel_cpu_239946c6e0b4455d93f0032a5a694b4d_1024x1024.png"
                                                    width="600" height="600"
                                                    class="dt-width-auto lazyload-description"></p>
                                            <p><img src="//file.hstatic.net/200000837185/file/03_lenovo_loq_15irx9_closeup_nvidia_gpu_3cc2f53b27a34d4792bb181c479c8f2e_1024x1024.png"
                                                    width="600" height="600"
                                                    class="dt-width-auto lazyload-description"></p>
                                            <p>&nbsp;</p>
                                            <ul>
                                                <li><strong>Khả năng xử lý đỉnh cao</strong>
                                                    <ul>
                                                        <li>Thực hiện tốt các công việc đòi hỏi đến đồ họa cao như chỉnh sửa
                                                            video, thiết kế đồ họa hay làm việc trên các dự án sáng tạo</li>
                                                        <li>Chơi tốt các tựa game như GO, GTA, V,... ở mức setting cao.</li>
                                                        <li>Khởi động nhanh chóng, thao tác mượt mà</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><strong>Màn hình rực rỡ, chuẩn màu</strong>
                                                    <ul>
                                                        <li>Màn hình kích thước 15.6 inch với độ phân giải Full HD cho mọi
                                                            hình ảnh hiển thị một cách chân thật, sắc nét nhất</li>
                                                        <li>Viền màn hình mỏng nhẹ cùng độ phủ màu 100% sRGB giúp màn hình
                                                            hiển thị tốt, màu sắc hiện ra đặc biệt đẹp, giúp thực hiện tốt
                                                            các công việc như thiết kế hay chỉnh sửa ảnh.</li>
                                                        <li>Công nghệ NVIDIA G-SYNC và Advanced Optimus giúp đồng bộ khung
                                                            hình của trò chơi với màn hình, loại bỏ hiện tượng giật hình và
                                                            xé hình, mang lại trải nghiệm chơi game mượt mà và không gây khó
                                                            chịu</li>
                                                        <li>Màn hình IPS mang lại góc nhìn rộng và màu sắc sống động, giúp
                                                            bạn thưởng thức hình ảnh chân thực và chi tiết. Với độ sáng 300
                                                            nits, đủ sáng để người dùng hoàn toàn sử dụng trong mọi môi
                                                            trường ánh sáng gắt mà hình ảnh vẫn rõ nét</li>
                                                        <li>Tần số quét 144Hz của màn hình tạo ra một trải nghiệm mượt mà
                                                            chống lag giật khi chơi các tựa game tốc chiến, bắn súng. Tần
                                                            quét càng cao sẽ giúp giảm hiện tượng mờ hình và cung cấp hình
                                                            ảnh rõ nét và mượt mà hơn</li>
                                                        <li>Màu sắc hình ảnh tươi mới, sống động</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <p><img src="//file.hstatic.net/200000837185/file/14_lenovo_loq_15irx9_closeup_keyboard_61e868dfafc74a719163c2ab359b98a0_1024x1024.png"
                                                    width="600" height="600"
                                                    class="dt-width-auto lazyload-description"></p>
                                            <p>&nbsp;</p>
                                            <ul>
                                                <li><strong>Âm thanh xuất sắc</strong>
                                                    <ul>
                                                        <li>Hệ thống loa kép 2W cực chất</li>
                                                        <li>Công nghệ âm thanh Nahimic Audio mang đến trải nghiệm âm thanh
                                                            3D sống động, giúp nâng cao trải nghiệm, sự tập trung trong từng
                                                            trận đấu</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><strong>Bàn phím và touchpad</strong>
                                                    <ul>
                                                        <li>Bàn phím keyboard cùng hành trình phím sâu cho cảm giác gõ tốt,
                                                            tích hợp đèn nền RGB hỗ trợ quá trình sử dụng trong điều kiện
                                                            thiếu sáng</li>
                                                        <li>Touchpad rộng rãi, thao tác dễ dàng</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><strong>Thời lượng pin tốt</strong>
                                                    <ul>
                                                        <li>Thời lượng pin trung bình với mức dung lượng 60Whr</li>
                                                        <li>Công nghệ sạc nhanh 140W</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><strong>Cổng kết nối hiện đại, đa dạng</strong>
                                                    <ul>
                                                        <li>Cạnh trái: 1x USB 3.2 Gen 2 Type-C, 1x khe cắm thẻ nhớ SD, 1x
                                                            Jack Audio 3.5</li>
                                                        <li>Cạnh phải: 1x USB 3.2 Gen 1 Type-A, 1x HDMI 2.0, 1x Ethernet
                                                            RJ45</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li><strong>Tính năng khác</strong>
                                                    <ul>
                                                        <li>Wifi 6E</li>
                                                        <li>Bluetooth 5.2</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <p><span style="font-family:tahoma,arial,helvetica,sans-serif">Laptop Gaming
                                                    Lenovo LOQ 15IAX9 83GS001SVN với đầy đủ các cổng kết nối, phù hợp với
                                                    nhiều lại thiết bị ngoại vi:</span></p>
                                            <p><span style="font-family:tahoma,arial,helvetica,sans-serif">1. USB 3.2 Gen
                                                    1</span><br><span
                                                    style="font-family:tahoma,arial,helvetica,sans-serif">2. USB 3.2 Gen
                                                    2&nbsp;</span><br><span
                                                    style="font-family:tahoma,arial,helvetica,sans-serif">3. USB 3.2 Gen
                                                    2&nbsp;</span><br><span
                                                    style="font-family:tahoma,arial,helvetica,sans-serif">4. Ethernet
                                                    (RJ-45)</span><br><span
                                                    style="font-family:tahoma,arial,helvetica,sans-serif">5.
                                                    HDMI®</span><br><span
                                                    style="font-family:tahoma,arial,helvetica,sans-serif">6. Power
                                                    connector</span><br><span
                                                    style="font-family:tahoma,arial,helvetica,sans-serif">7. USB-C® 3.2 Gen
                                                    2</span><br><span
                                                    style="font-family:tahoma,arial,helvetica,sans-serif">8. Headphone /
                                                    microphone combo jack (3.5mm)</span></p>
                                            <p><img style="null;cursor: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAB/VJREFUWEe91ntQVPcVB/Dvb58sLMvdFwvsLm8QJkUtxhqiHTMasf2jj8yktZrpNFEMaE1AMPio1DHjGx/EGlIfNVo1grFqEBSxA4oBNXFB5SH4AHZh5RUQdtld2Mf9de46OnYmVrDqnTl/3d/9nc+ee879LeHz+eViofCCfXh4AwA3XvFFpk1N+nbOnDlTj3x11HDlytU/AWh4lQai0aj3HissTBEIRfRcaakzd+u2NQ6HYysAz6uAEADptTWGvOyP3mezVuYQKRNEli5deuX77w0fAGh62QgOMOtMSXFZ0eE8+uZbSVBpQqENTyRHCwodO3ZsXz0y4s4DwL4sCAfQbs3d0uHovUMHeoz48OM0sCwLYw8g8ZWT9IzMb69fv8FV4+7LQHAAkpaa2jcxPpTpvVtNPCKGrli+mHCIistNNDQ6EQcOHLTvzNu10sWyuwDQFwnhAEieNbMqdeH8pPqKQ0QmVyIwPIbOeSfZe+/W3XbaOSgAXyAmSzOXV9y82bAAQOuLQniTaDSavSXFpxYU/m0FgkKCCRH40tm/no1xEXrvfYfThYrLt2hk7ETs3nPA9nn+nmUsy+55EdXwJuAmob6uNu+zNYtobKSOKDUa9Fnd9L15vyGBSubxj73Z1Eb77UJ4PCCZWavKGm7dWQjA9P9U4xEguaT45Lmyr/fSIIWYKNWBsA2zdPLM32HYasT0Ka+RRwttjmFcuNpEY+ISsGvXvsH83QezAOx/XsSjfXW5W9a1ux50UHbI7AXwRD50xjsLiMvlxL07jTQ+QoFwbeDD9YSgpv4etTlFsDscWLps7Znbd1pSAZjHCnkEIKmpC/peT4hkOm9VEblSDaVahdAJM+hf12wmv5g9nb494010m9vwVlICEfJ53jwWm4NWfteMcXFx2Jb394F9+4+lAzg0FsQjAJJnTa9asiglqabsMGGUKq4ZIQ1JoKfPVJDxExJx6VIFXbTw97BZLdAHM4iPetigXDWu1jZTD0+M/n4LsrLXF91rNaUB6BoN5DEgWKPeW1r6r5Qvc1dRvV5L1EFB8A2MoJXVdZjyxs+JxWpFZeUl6IJl9L25v0S7sQNvJU2ARCzy7tFvGaJV15oQFxeHTblf9B08fHIJgMJnIR4DAGQ0NVTv2JqTRWMiQohKo4EgIJjWN3cQrS4GKrUSLfda0dvbi4aGGzTr47kQCoUI8JNg0vhYAkq91ai61kAFYn+Y73cje+Xm420m858B9D4N8iQgubjoyLnybwqoyp/vbUQqltHuASeIgCF+fn7g83kwmUyw2exoaGyksVEapC+Zh9YWM6ZOfg1ymdS7X+8DC71ScxtxceOwbtPnPUcKiuYDOPNjiCcBui0bV7dTez91PTARBTeKbj6V68Jws85MJBIJIiMjUVdXD5ttyIsYGBhAZ6eZrsr+gGiD1ZT1sJg2+SfEPjwCw41meqKoHGFh4chenbuZZdmVzwKQtA//2DdlYizTXl9NGKUalmGWxiX+lHx9ohoqlQos60F0TAxqDDWw2+3eGB4ehvm+mSZNScDWDRmkoOA0DVbJodUwxFBvpPfaf8Bn+f9MeNofnScrgFkzp1VlpqckXS4+4h1FDxHS2MTXsTP/BNHrtXC5XNDp9ejt6UFXV7c3ORc8HoE2REE3rl2M2/XNUCukpO+HfrT2OOkX/yi8Vnuj8Wej6QFwk1B+viAlf30ODQvTEX9GgcDoeLpu45eIiookHMDpdGL8+PEwGAwYGRnxHgcDgxb6ScZcyPwkiNYqyeDgIK7WNFFGHYb305Zz05A/KgA3CXcbL2zftHolYsKDvaPI6KPo6k93IyI8grjdbnDB9QPDMDAa28DnC6jR2Iqay0dJaUkFjQ3XkCHrEAyNHbS2rsV5qLAohJvS0QKSi0/tK608exqMDyUqTRAUoVF047ZDYBjlY4DH46Y6nd7bhKb2dpI8czL9w7uzIXQPw+Nyks6uHmpx+SFn/c4THeaud//Xt+C/egCAbsuGbBPfZYW910QUKjX8NHr61fFywhf4wuNxw+PxeIMrv8ViRV9/P/3m2HZ0GDsQFsQQi8WCa9fvUr6vAlmrNv8WQNFYACRt4by+pEnxTNsNbhKUEMpUNCg0FGX/voyW1g60d3TjwYAVQqEAQqGIaAIZeurYdnLx/EWq1Si85W9o6afnL17rPXu+UgfANRYA3p4xtXpFVsobFScPE4UqELfbH9C4uAgoVCrIFQpEROrABPiTNtN9NN8xIjJcS21DdgQHiIll0II2030KSRDSP1mXZ7XZMsfyKfauDdao91VfPDY/N2cVbE4gOlRNxCIhBCIRRCIRbA4XtdhHEMDIoQhUIkAux0BfH+IjQojVakVtg5EOOAi25O1LBHB9zICHk1C+I2NRBo3QSIivj5Dr9IchEEAgFD4O7iwQicXo6LbQGdMnect/r9NBC06U3fzOUDfxWcm9h+mPLJq99i8fna2rMYCwLlDWA1A3+ISFXCqGTCohfD4f3hBwKCG3DRVJFfCRiCGSBWNx5qfLAGx/XoBK5icp0IeoY6W+4pAAmZSnkPkhQOYHp9ONIbsdhHUD1ANC3fAR8qBgfGF1sNBHx8PYZXXvP3RcD6D7eQFPPicFEA0glgt/P58YBSMbF+AviZL6SpQKxh9SXx9QSsF63AgOi8Tp0oslrUbzr0aT/GmvYLTPqgHEcMHj8cbJZb4xPL4gqrdvIAdAyWg3+Q8bAnJOOqUB+QAAAABJRU5ErkJggg==&quot;) 0 0, auto !important;"
                                                    class="aligncenter wp-image-39893 size-full sweezy-custom-cursor-default-hover dt-width-auto lazyload-description"
                                                    src="https://product.hstatic.net/200000837185/product/loq-15iax9-overviewpic_7d7cfa528ef643f1ac4c6b0b12dea416.jpg"
                                                    width="600" height="600"></p>
                                            <p><span style="font-size:14pt"><strong><span
                                                            style="font-family:tahoma,arial,helvetica,sans-serif">Tóm lại,
                                                            Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN là một sự kết hợp
                                                            hoàn hảo giữa thiết kế đẹp mắt, hiệu suất mạnh mẽ, và tính di
                                                            động. Đây là một sự lựa chọn đáng cân nhắc cho những người đam
                                                            mê game và công việc đồ họa.</span></strong></span></p>
                                            <p></p>
                                            <table cellspacing="0" cellpadding="0" border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>CPU</td>
                                                        <td>Intel® Core™ i5-12450HX, 8C (4P + 4E) / 12T, P-core up to
                                                            4.4GHz, E-core up to 3.1GHz, 12MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VGA</td>
                                                        <td>NVIDIA® GeForce RTX™ 2050 4GB GDDR6, Boost Clock 1575MHz, TGP
                                                            65W</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RAM</td>
                                                        <td>1x 12GB SO-DIMM DDR5-4800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SSD</td>
                                                        <td>512GB SSD M.2 2242 PCIe® 4.0x4 NVMe®, 2 slots</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Màn hình</td>
                                                        <td>15.6" FHD (1920x1080) IPS 300nits Anti-glare, 100% sRGB, 144Hz,
                                                            G-SYNC®</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hệ điều hành</td>
                                                        <td>Windows® 11 Home Single Language, English</td>
                                                    </tr>
                                                    <tr>
                                                        <td>LAN</td>
                                                        <td>100/1000M (RJ-45)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wireless Lan</td>
                                                        <td>Wi-Fi® 6, 11ax 2x2 + BT5.1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cổng kết nối</td>
                                                        <td>1x USB 3.2 Gen 1 2x USB 3.2 Gen 2 1x USB-C® 3.2 Gen 2 (support
                                                            data transfer, Power Delivery 140W and DisplayPort™ 1.4) 1x
                                                            HDMI®, up to 8K/60Hz 1x Ethernet (RJ-45) 1x Headphone /
                                                            microphone combo jack (3.5mm) 1x Power connector</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bàn phím</td>
                                                        <td>White Backlit, English</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pin</td>
                                                        <td>Integrated 60Wh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trọng lượng</td>
                                                        <td>2.4 Kg</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kích thước</td>
                                                        <td>359.6 x 264.8 x 22.1-25.2 mm</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <p style="text-align: center;"><strong>HÌNH ẢNH THỰC TẾ Lenovo LOQ dòng
                                                        15IAX9 tại Xgear:</strong></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6272_be7e4e676c7b48ea8ae9b280d0d8e056_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6273_049b8d8c66fe4ec79cab6fd27ca7e794_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6274-2_f6cb545c053a47689904a663174fe4e7_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6275_dca896d8556b4cef9ad7d95f5a66c02d_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6277_26e9d1f445ff483eb3c17e6b2eb37a59_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6279_9a6df4403b934179951d5c3b3f757183_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6281_15cdcce2b14142a780cb0eb96ede4f15_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6282_021d44cd32944c629b921c68233a9664_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6284_bcd98e4440434cf4af098d58024d24c2_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6285_531bd2da3b574942bf28642e3d41aab8_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                                <p style="text-align: center;"><img
                                                        src="//file.hstatic.net/200000837185/file/img_6287_82360bdd2373481c80fe14c0c60da71b_grande.jpg"
                                                        width="600" height="600"
                                                        class="dt-width-auto lazyload-description"></p>
                                            </div>
                                        </div>


                                        <script>
                                            $('#ega-uti-editable-content h2').filter(function() {
                                                return $(this).text().trim() === '';
                                            }).remove();
                                            $('#ega-uti-editable-content img').each(function() {
                                                if ($(this).parents('h2').length > 0) {
                                                    let strimage = $(this).parents('h2').html();
                                                    $(strimage).insertBefore($(this).parents('h2'));
                                                    $(this).parents('h2').remove();
                                                }
                                            })
                                            $('#ega-uti-editable-content h2').each(function() {
                                                let strtext = $(this).text();
                                                $(this).text(strtext)
                                            })
                                            if ($('#ega-uti-editable-content table table').length > 1) {
                                                let $table = $('#ega-uti-editable-content table:first');
                                                $("<table class='newtable'></table>").insertBefore('#ega-uti-editable-content table:first');
                                                $table.find('tr td tr').each(function() {
                                                    $('.newtable').append($(this).clone(true))
                                                })
                                                $table.remove()
                                            }
                                        </script>
                                        <style>
                                            #ega-uti-editable-content h2 {
                                                margin-top: 25px;
                                                margin-bottom: 15px
                                            }

                                            #ega-uti-editable-content {
                                                font-size: 16px;
                                            }

                                            #ega-uti-editable-content img {
                                                display: block;
                                                margin: auto;
                                                margin-bottom: 10px;
                                            }

                                            #ega-uti-editable-content .container {
                                                width: auto !important;

                                            }

                                            #ega-uti-editable-content h2,
                                            #ega-uti-editable-content h3 {
                                                font-size: 16px;
                                                font-weight: 600;
                                                color: #d0021b;
                                                text-align: center !important;
                                            }

                                            #ega-uti-editable-content h3 {
                                                text-align: left !important;
                                                display: inline-block;
                                            }

                                            #ega-uti-editable-content h22:after,
                                            #ega-uti-editable-content h3:after {
                                                content: "";
                                                margin-top: 3px;
                                                bottom: px;
                                                width: 150px;
                                                border-top: 2px solid #d0021b;
                                                text-align: center;
                                                margin-left: auto;
                                                margin-right: auto;
                                                height: 2px;
                                                display: block;
                                            }

                                            #ega-uti-editable-content h2 {
                                                position: relative;
                                                border-radius: 0;
                                                background: #fff;
                                                z-index: 1;
                                                padding: 5px;
                                            }

                                            #ega-uti-editable-content h2:before {
                                                content: '';
                                                position: absolute;
                                                top: calc(-1* 1px);
                                                left: 2px;
                                                background: #fff;
                                                z-index: -1;
                                                height: calc(100% + 2px);
                                                width: calc(100% - 4px);
                                            }

                                            #ega-uti-editable-content h2:after {
                                                content: '';
                                                position: absolute;
                                                top: calc(-1 * 3px);
                                                left: calc(-1 * 3px);
                                                height: calc(100% + 3px * 2);
                                                width: calc(100% + 3px * 2);
                                                background: linear-gradient(60deg, #ffab00, #ff00bb, #03dc55, #ffffff, #000000, #000000, #000000, #6fba82);
                                                border-radius: 3px;
                                                z-index: -2;

                                                background-size: 300% 300%;
                                            }


                                            #ega-uti-editable-content h3:after {
                                                width: 50px;
                                                margin-left: 0;
                                                margin-right: auto;
                                            }

                                            #ega-uti-editable-content li {
                                                list-style-type: none;

                                            }

                                            #ega-uti-editable-content li:before {
                                                display: inline-block;
                                                font: normal normal normal 14px / 1 FontAwesome;
                                                font-size: inherit;
                                                text-rendering: auto;
                                                -webkit-font-smoothing: antialiased;
                                                -moz-osx-font-smoothing: grayscale;
                                                content: "\f046";
                                                color: #d0021b;
                                                margin-right: 10px;
                                            }

                                            #ega-uti-editable-content li ul {
                                                margin-top: 15px;
                                            }

                                            #ega-uti-editable-content li ul li:before {
                                                display: inline-block;
                                                font: normal normal normal 14px / 1 FontAwesome;
                                                font-size: inherit;
                                                text-rendering: auto;
                                                -webkit-font-smoothing: antialiased;
                                                -moz-osx-font-smoothing: grayscale;
                                                content: "\f013";
                                                color: #d0021b;
                                                margin-right: 15px;
                                                font-size: 11px;
                                                line-height: 22px;
                                            }
                                        </style>


                                        <strong style="margin-top:15px">Những sản phẩm tương tự:</strong>
                                        <ul id="product-related">
                                            <li class="articleid1053294894"> <a class="link"
                                                    href="/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w"
                                                    title="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11"><img
                                                        class=" img-first" width="50px"
                                                        src="//product.hstatic.net/200000837185/product/xgeart-laptop-gaming-asus-tuf-a15-win11-thum_292a011e4ee54fc0bf3b94ab4cea6739_medium.jpg">
                                                    Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F
                                                    144Hz/RTX3050 4GB/Win11</a>
                                                <noscript>
                                                    <div data-id="1053294894" class="d-flex-column item-owl pd-left--15">
                                                        <div class="product-block item">
                                                            <div class="product-img  has-hover"
                                                                data-frame="other_Đ&#227; bao gồm VAT RTX 2050 other_Bảo h&#224;nh 24 th&#225;ng ch&#237;nh h&#227;ng. screen_15.6&quot; FHD 144Hz chip_R5 7535HS vga_RTX 3050 011w ram_8GB DDR5 weight_2.3 kg pin_48Whr sd_512GB SSD hz_144Hz mh_15.6 inch cpu_Ryzen 5 frame_gi&#225; hot frame_BH 2 năm key_office 2019">
                                                                <a href="/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w"
                                                                    title="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11"
                                                                    class="image-resize ">
                                                                    <div class="product-sale"><span>-36%</span></div>
                                                                    <img class="lazyload dt-width-100 img-first"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/xgeart-laptop-gaming-asus-tuf-a15-win11-thum_292a011e4ee54fc0bf3b94ab4cea6739_large.jpg"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/xgeart-laptop-gaming-asus-tuf-a15-win11-thum_292a011e4ee54fc0bf3b94ab4cea6739_medium.jpg"
                                                                        alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11" />
                                                                    <img class="lazyload dt-width-100 img-hover hidden-xs"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/laptop-asus-tuf-gaming-a15-fa506nc-hn011w.jpg-2_059dcfef49d847bdaab5309024e1b438_large.jpg"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/laptop-asus-tuf-gaming-a15-fa506nc-hn011w.jpg-2_059dcfef49d847bdaab5309024e1b438_large.jpg"
                                                                        alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                                        alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                                        alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                                        alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11" />
                                                                </a>
                                                                <div class="button-loop-pro hidden-xs hidden-sm">
                                                                    <button class="btn-quickview"
                                                                        onclick="window.wd.scofield.quickview('/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w?view=quickview-nochoose')"
                                                                        type="button">
                                                                        <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                            width="16" height="16"
                                                                            alt="Xem nhanh">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <strong class="pro-name"><a
                                                                        href="/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w"
                                                                        title="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11">
                                                                        Laptop Asus TUF Gaming A15 FA506NC HN011W R5
                                                                        7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11
                                                                    </a></strong>
                                                                <div class="d-flex js-between d-flex-center">
                                                                    <ul class="list-variants d-flex d-flex-wrap image">
                                                                    </ul>
                                                                </div>
                                                                <div class="box-pro-prices">
                                                                    <p class="pro-price">
                                                                        <span>
                                                                            16,890,000₫ </span>
                                                                        <del class="compare-price">26,290,000₫</del>
                                                                    </p>
                                                                </div>
                                                                <ul class="hash-tag-loop">
                                                                </ul>
                                                                <ul class="config-tags">
                                                                    <div class="field-1">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                                alt="R5 7535HS">
                                                                            <span>R5 7535HS</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                                alt="8GB DDR5">
                                                                            <span>8GB DDR5</span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="field-2">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                                alt="RTX 3050">
                                                                            <span>RTX 3050</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                                alt="15.6" FHD 144Hz">
                                                                            <span>15.6" FHD 144Hz</span>
                                                                        </li>
                                                                    </div>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </noscript>
                                            </li>
                                            <li class="articleid1052806754"> <a class="link"
                                                    href="/products/laptop-gigabyte-g5-mf-f2vn313sh"
                                                    title="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11"><img
                                                        class=" img-first" width="50px"
                                                        src="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_medium.png">
                                                    Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F
                                                    144Hz/RTX4050 6GB/Win11</a>
                                                <noscript>
                                                    <div data-id="1052806754" class="d-flex-column item-owl pd-left--15">
                                                        <div class="product-block item">
                                                            <div class="product-img  has-hover"
                                                                data-frame="other_Đ&#227; bao gồm VAT other_Bảo h&#224;nh 24 th&#225;ng ch&#237;nh h&#227;ng. 313SH G5 MF screen_15.6&quot; FHD 144Hz ram_16GB DDR4 vga_RTX 4050 chip_i5 12450H voucher_200k pin_54Whr weight_1.9 kg mh_15.6 inch hz_144Hz cpu_Intel Core i5 sd_512GB SSD frame_gigabyte VC 500K frame_BH 2 năm frame_Gigabyte-bộ-qu&#224; key_office 2019">
                                                                <a href="/products/laptop-gigabyte-g5-mf-f2vn313sh"
                                                                    title="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                                    class="image-resize ">
                                                                    <div class="product-sale"><span>-28%</span></div>
                                                                    <img class="lazyload dt-width-100 img-first"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_large.png"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_medium.png"
                                                                        alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="lazyload dt-width-100 img-hover hidden-xs"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                                        alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                                        alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_33_grande.png?v=2316"
                                                                        alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                                        alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                </a>
                                                                <div class="button-loop-pro hidden-xs hidden-sm">
                                                                    <button class="btn-quickview"
                                                                        onclick="window.wd.scofield.quickview('/products/laptop-gigabyte-g5-mf-f2vn313sh?view=quickview-nochoose')"
                                                                        type="button">
                                                                        <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                            width="16" height="16"
                                                                            alt="Xem nhanh">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <strong class="pro-name"><a
                                                                        href="/products/laptop-gigabyte-g5-mf-f2vn313sh"
                                                                        title="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                                        Laptop Gaming Gigabyte G5 MF F2VN313SH i5
                                                                        12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11
                                                                    </a></strong>
                                                                <div class="d-flex js-between d-flex-center">
                                                                    <ul class="list-variants d-flex d-flex-wrap image">
                                                                    </ul>
                                                                </div>
                                                                <div class="box-pro-prices">
                                                                    <p class="pro-price">
                                                                        <span>
                                                                            19,390,000₫ </span>
                                                                        <del class="compare-price">26,990,000₫</del>
                                                                    </p>
                                                                </div>
                                                                <ul class="hash-tag-loop">
                                                                </ul>
                                                                <ul class="config-tags">
                                                                    <div class="field-1">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                                alt="i5 12450H">
                                                                            <span>i5 12450H</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                                alt="16GB DDR4">
                                                                            <span>16GB DDR4</span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="field-2">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                                alt="RTX 4050">
                                                                            <span>RTX 4050</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                                alt="15.6" FHD 144Hz">
                                                                            <span>15.6" FHD 144Hz</span>
                                                                        </li>
                                                                    </div>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </noscript>
                                            </li>
                                            <li class="articleid1052765399"> <a class="link"
                                                    href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001rvn"
                                                    title="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11"><img
                                                        class=" img-first" width="50px"
                                                        src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15iax9-83gs001rvnthum_44211c3ac9a04d3ba68bfa0dad344280_medium.png">
                                                    Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6
                                                    FHD 144Hz/RTX3050 6GB/Win11</a>
                                                <noscript>
                                                    <div data-id="1052765399" class="d-flex-column item-owl pd-left--15">
                                                        <div class="product-block item">
                                                            <div class="product-img  has-hover"
                                                                data-frame="other_Đ&#227; bao gồm VAT other_Bảo h&#224;nh 24 th&#225;ng ch&#237;nh h&#227;ng. chip_i5 12450HX vga_RTX 3050 screen_15.6&quot; FHD 144Hz RVN 1RVN RTX 3050 ram_12GB DDR5 pin_60Whr weight_2.4 kg cpu_Intel Core i5 sd_512GB SSD mh_15.6 inch hz_144Hz frame_BH 2 năm key_office 2019">
                                                                <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001rvn"
                                                                    title="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11"
                                                                    class="image-resize ">
                                                                    <div class="product-sale"><span>-11%</span></div>
                                                                    <img class="lazyload dt-width-100 img-first"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15iax9-83gs001rvnthum_44211c3ac9a04d3ba68bfa0dad344280_large.png"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15iax9-83gs001rvnthum_44211c3ac9a04d3ba68bfa0dad344280_medium.png"
                                                                        alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11" />
                                                                    <img class="lazyload dt-width-100 img-hover hidden-xs"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001rvn_cd8deef16ce249c888720c3ecdca34b7_large.png"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001rvn_cd8deef16ce249c888720c3ecdca34b7_large.png"
                                                                        alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                                        alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                                        alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11" />
                                                                </a>
                                                                <div class="button-loop-pro hidden-xs hidden-sm">
                                                                    <button class="btn-quickview"
                                                                        onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15iax9-83gs001rvn?view=quickview-nochoose')"
                                                                        type="button">
                                                                        <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                            width="16" height="16"
                                                                            alt="Xem nhanh">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <strong class="pro-name"><a
                                                                        href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001rvn"
                                                                        title="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                                        Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5
                                                                        12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11
                                                                    </a></strong>
                                                                <div class="d-flex js-between d-flex-center">
                                                                    <ul class="list-variants d-flex d-flex-wrap image">
                                                                    </ul>
                                                                </div>
                                                                <div class="box-pro-prices">
                                                                    <p class="pro-price">
                                                                        <span>
                                                                            20,490,000₫ </span>
                                                                        <del class="compare-price">22,990,000₫</del>
                                                                    </p>
                                                                </div>
                                                                <ul class="hash-tag-loop">
                                                                </ul>
                                                                <ul class="config-tags">
                                                                    <div class="field-1">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                                alt="i5 12450HX">
                                                                            <span>i5 12450HX</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                                alt="12GB DDR5">
                                                                            <span>12GB DDR5</span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="field-2">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                                alt="RTX 3050">
                                                                            <span>RTX 3050</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                                alt="15.6" FHD 144Hz">
                                                                            <span>15.6" FHD 144Hz</span>
                                                                        </li>
                                                                    </div>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </noscript>
                                            </li>
                                            <li class="articleid1052751837"> <a class="link"
                                                    href="/products/laptop-gaming-asus-tuf-a15-fa507nu-lp131w"
                                                    title="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11"><img
                                                        class=" img-first" width="50px"
                                                        src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-asus-a15-fa507-thum_5c0612de82084fb681a253b17191c9db_medium.jpg">
                                                    Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F
                                                    144Hz/RTX4050 6GB/Win11</a>
                                                <noscript>
                                                    <div data-id="1052751837"
                                                        class="d-flex-column item-owl pd-left--15">
                                                        <div class="product-block item">
                                                            <div class="product-img  has-hover"
                                                                data-frame="other_Đ&#227; bao gồm VAT other_Bảo h&#224;nh 24 th&#225;ng ch&#237;nh h&#227;ng. chip_R5 7535HS ram_16GB DDR5 vga_RTX 4050 screen_15.6&quot; FHD 144Hz 131W pin_90WHrs weight_2.2 kg sale_giai_phong sd_1TB SSD hz_144Hz mh_15.6 inch cpu_Ryzen 5 frame_BH 2 năm frame_gi&#225; hot status_Chỉ b&#225;n online key_office 2019">
                                                                <a href="/products/laptop-gaming-asus-tuf-a15-fa507nu-lp131w"
                                                                    title="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                                    class="image-resize ">
                                                                    <div class="product-sale"><span>-22%</span></div>
                                                                    <img class="lazyload dt-width-100 img-first"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-asus-a15-fa507-thum_5c0612de82084fb681a253b17191c9db_large.jpg"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-asus-a15-fa507-thum_5c0612de82084fb681a253b17191c9db_medium.jpg"
                                                                        alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="lazyload dt-width-100 img-hover hidden-xs"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/laptopgamingasustufa15fa507nu-lp131w_49f909367cd34d85935fb04b8f553568_large.png"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/laptopgamingasustufa15fa507nu-lp131w_49f909367cd34d85935fb04b8f553568_large.png"
                                                                        alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                                        alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                                        alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                                        alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11" />
                                                                </a>
                                                                <div class="button-loop-pro hidden-xs hidden-sm">
                                                                    <button class="btn-quickview"
                                                                        onclick="window.wd.scofield.quickview('/products/laptop-gaming-asus-tuf-a15-fa507nu-lp131w?view=quickview-nochoose')"
                                                                        type="button">
                                                                        <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                            width="16" height="16"
                                                                            alt="Xem nhanh">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <strong class="pro-name"><a
                                                                        href="/products/laptop-gaming-asus-tuf-a15-fa507nu-lp131w"
                                                                        title="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                                        Laptop Gaming Asus TUF A15 FA507NU LP131W R5
                                                                        7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11
                                                                    </a></strong>
                                                                <div class="d-flex js-between d-flex-center">
                                                                    <ul class="list-variants d-flex d-flex-wrap image">
                                                                    </ul>
                                                                </div>
                                                                <div class="box-pro-prices">
                                                                    <p class="pro-price">
                                                                        <span>
                                                                            23,980,000₫ </span>
                                                                        <del class="compare-price">30,590,000₫</del>
                                                                    </p>
                                                                </div>
                                                                <ul class="hash-tag-loop">
                                                                </ul>
                                                                <ul class="config-tags">
                                                                    <div class="field-1">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                                alt="R5 7535HS">
                                                                            <span>R5 7535HS</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                                alt="16GB DDR5">
                                                                            <span>16GB DDR5</span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="field-2">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                                alt="RTX 4050">
                                                                            <span>RTX 4050</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                                alt="15.6" FHD 144Hz">
                                                                            <span>15.6" FHD 144Hz</span>
                                                                        </li>
                                                                    </div>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </noscript>
                                            </li>
                                            <li class="articleid1052751712"> <a class="link"
                                                    href="/products/laptop-gaming-msi-katana-15-b13vfk-676vn"
                                                    title="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11"><img
                                                        class=" img-first" width="50px"
                                                        src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vfk-676vn-thum_ec7be8307d5946caa8cf677c21291008_medium.jpg">
                                                    Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD
                                                    144Hz/RTX4060 8GB/Win11</a>
                                                <noscript>
                                                    <div data-id="1052751712"
                                                        class="d-flex-column item-owl pd-left--15">
                                                        <div class="product-block item">
                                                            <div class="product-img  has-hover"
                                                                data-frame="other_Đ&#227; bao gồm VAT other_Bảo h&#224;nh 24 th&#225;ng ch&#237;nh h&#227;ng. screen_15.6&quot; FHD 144Hz chip_i7 13620H ram_16GB DDR5 vga_RTX 4060 676VN weight_2.25 kg pin_53.5Whr fvga_1TB SSD fvga_Intel Core i7 fvga_RTX 4060 fvga_15.6 inch frame_BH 2 năm key_office 2019 deal_26.390.000đ">
                                                                <a href="/products/laptop-gaming-msi-katana-15-b13vfk-676vn"
                                                                    title="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11"
                                                                    class="image-resize ">
                                                                    <div class="product-sale"><span>-13%</span></div>
                                                                    <img class="lazyload dt-width-100 img-first"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vfk-676vn-thum_ec7be8307d5946caa8cf677c21291008_large.jpg"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vfk-676vn-thum_ec7be8307d5946caa8cf677c21291008_medium.jpg"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11" />
                                                                    <img class="lazyload dt-width-100 img-hover hidden-xs"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/katana-13th-5_c375ac7a2fca41eb8458d62ab3d2239a_large.jpg"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/katana-13th-5_c375ac7a2fca41eb8458d62ab3d2239a_large.jpg"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11" />
                                                                </a>
                                                                <div class="button-loop-pro hidden-xs hidden-sm">
                                                                    <button class="btn-quickview"
                                                                        onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-katana-15-b13vfk-676vn?view=quickview-nochoose')"
                                                                        type="button">
                                                                        <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                            width="16" height="16"
                                                                            alt="Xem nhanh">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <strong class="pro-name"><a
                                                                        href="/products/laptop-gaming-msi-katana-15-b13vfk-676vn"
                                                                        title="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                                        Laptop Gaming MSI Katana 15 B13VFK 676VN i7
                                                                        13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11
                                                                    </a></strong>
                                                                <div class="d-flex js-between d-flex-center">
                                                                    <ul class="list-variants d-flex d-flex-wrap image">
                                                                    </ul>
                                                                </div>
                                                                <div class="box-pro-prices">
                                                                    <p class="pro-price">
                                                                        <span>
                                                                            27,890,000₫ </span>
                                                                        <del class="compare-price">31,990,000₫</del>
                                                                    </p>
                                                                </div>
                                                                <ul class="hash-tag-loop">
                                                                </ul>
                                                                <ul class="config-tags">
                                                                    <div class="field-1">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                                alt="i7 13620H">
                                                                            <span>i7 13620H</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                                alt="16GB DDR5">
                                                                            <span>16GB DDR5</span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="field-2">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                                alt="RTX 4060">
                                                                            <span>RTX 4060</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                                alt="15.6" FHD 144Hz">
                                                                            <span>15.6" FHD 144Hz</span>
                                                                        </li>
                                                                    </div>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </noscript>
                                            </li>
                                            <li class="articleid1052751195"> <a class="link"
                                                    href="/products/laptop-gaming-msi-katana-15-b13vek-252vn"
                                                    title="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"><img
                                                        class=" img-first" width="50px"
                                                        src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_medium.jpg">
                                                    Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD
                                                    144Hz/RTX4050 6GB/Win11</a>
                                                <noscript>
                                                    <div data-id="1052751195"
                                                        class="d-flex-column item-owl pd-left--15">
                                                        <div class="product-block item">
                                                            <div class="product-img  has-hover"
                                                                data-frame="other_Bảo h&#224;nh 24 th&#225;ng ch&#237;nh h&#227;ng. other_Đ&#227; bao gồm VAT ram_8GB DDR5 screen_15.6&quot; FHD 144Hz chip_i7 13620H vga_RTX 4050 252VN weight_2.25 kg pin_53.5Whr fvga_15.6 inch fvga_RTX 4050 fvga_Intel Core i7 fvga_512GB SSD fvga_144Hz fvga_8GB RAM sale_giai_phong frame_BH 2 năm frame_gi&#225; hot frame_m&#234; euro2024 status_Chỉ b&#225;n online key_office 2019">
                                                                <a href="/products/laptop-gaming-msi-katana-15-b13vek-252vn"
                                                                    title="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                                    class="image-resize ">
                                                                    <div class="product-sale"><span>-19%</span></div>
                                                                    <img class="lazyload dt-width-100 img-first"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_large.jpg"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_medium.jpg"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="lazyload dt-width-100 img-hover hidden-xs"
                                                                        width="260" height="260"
                                                                        src="https://file.hstatic.net/200000397757/file/lazyload_e95df2e69ca44092831654bec491fb77_large.jpg"
                                                                        data-src="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                                        data-mobile="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11" />
                                                                    <img class="pproduct-frame"
                                                                        src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                                        alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11" />
                                                                </a>
                                                                <div class="button-loop-pro hidden-xs hidden-sm">
                                                                    <button class="btn-quickview"
                                                                        onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-katana-15-b13vek-252vn?view=quickview-nochoose')"
                                                                        type="button">
                                                                        <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                            width="16" height="16"
                                                                            alt="Xem nhanh">
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <strong class="pro-name"><a
                                                                        href="/products/laptop-gaming-msi-katana-15-b13vek-252vn"
                                                                        title="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                                        Laptop Gaming MSI Katana 15 B13VEK 252VN i7
                                                                        13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11
                                                                    </a></strong>
                                                                <div class="d-flex js-between d-flex-center">
                                                                    <ul class="list-variants d-flex d-flex-wrap image">
                                                                    </ul>
                                                                </div>
                                                                <div class="box-pro-prices">
                                                                    <p class="pro-price">
                                                                        <span>
                                                                            23,290,000₫ </span>
                                                                        <del class="compare-price">28,790,000₫</del>
                                                                    </p>
                                                                </div>
                                                                <ul class="hash-tag-loop">
                                                                </ul>
                                                                <ul class="config-tags">
                                                                    <div class="field-1">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                                alt="i7 13620H">
                                                                            <span>i7 13620H</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                                alt="8GB DDR5">
                                                                            <span>8GB DDR5</span>
                                                                        </li>
                                                                    </div>
                                                                    <div class="field-2">
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                                alt="RTX 4050">
                                                                            <span>RTX 4050</span>
                                                                        </li>
                                                                        <li>
                                                                            <img width="32" height="32"
                                                                                loading="lazy" fetchpriority="low"
                                                                                decoding="async"
                                                                                src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                                alt="15.6" FHD 144Hz">
                                                                            <span>15.6" FHD 144Hz</span>
                                                                        </li>
                                                                    </div>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </noscript>
                                            </li>
                                        </ul>
                                        <script id="relatedscript">
                                            if ($('#product-related').length == 0) {
                                                $(`<strong style="margin-top:15px">Những sản phẩm tương tự:</strong>
<ul id="product-related"></ul>`).insertBefore('#relatedscript')

































                                                let urlsearch = '/search?view=productrelated&q=filter=(collectionid:product=1003966237)'

                                                let related = ""

                                                function getarticlerelated(page) {
                                                    jQuery.get(urlsearch + "&page=" + page, function(re) {
                                                        related += re;
                                                        if (re.match(/articleid/g).length == 50) {
                                                            getarticlerelated(page + 1);
                                                        } else {
                                                            renderarticlerelated();
                                                            debugger
                                                            $("#owl-collection-related").html('')
                                                            $('#product-related noscript').each(function() {

                                                                $("#owl-collection-related").append($(this).html());
                                                            });

                                                            $("#owl-collection-related").addClass('slick-callback');
                                                            $.ajax({
                                                                type: "GET",
                                                                url: window.wd.collectionurl,
                                                                success: function(data) {
                                                                    $("#owl-collection-related").append(data);
                                                                    let arr = []
                                                                    $("#owl-collection-related .item-owl").each(function() {
                                                                        let id = $(this).attr('data-id')
                                                                        if (!arr.includes(id)) {
                                                                            arr.push(id)
                                                                        } else {
                                                                            $(this).remove();
                                                                        }
                                                                    })
                                                                }
                                                            }).done(() => {
                                                                setTimeout(function() {
                                                                    window.wd.scofield.slidercallback();
                                                                }, 2000)

                                                            });


                                                        }
                                                    })
                                                }
                                                getarticlerelated(1)

                                                function renderarticlerelated() {

                                                    const names = related.match(/articleid[0-9]+/g)
                                                    const targetName = 'articleid1052765387';
                                                    const indexBob = names.indexOf(targetName);
                                                    const totalget = 3;
                                                    let startIndex = Math.max(indexBob - totalget, 0);
                                                    let nextitem = totalget
                                                    if (indexBob - totalget < 0) {
                                                        nextitem = nextitem + ((indexBob - totalget) * -1)
                                                    }
                                                    if (indexBob + totalget > (names.length - 1)) {
                                                        let cal = (indexBob + totalget) - (names.length - 1)
                                                        startIndex = Math.max(startIndex - cal, 0);
                                                    }
                                                    let endIndex = Math.min(indexBob + nextitem + 1, names.length);
                                                    let closestNames = names.slice(startIndex, endIndex);
                                                    closestNames.splice(closestNames.indexOf(targetName), 1);
                                                    $('#product-related').append($(`<ul>${related}</ul>`).find("." + closestNames.join(',.')))
                                                }
                                            }
                                        </script>
                                        <style>
                                            #product-related {
                                                padding-left: 0 !important
                                            }

                                            #product-related li:before {
                                                display: inline-block;
                                                font: normal normal normal 14px / 1 FontAwesome;
                                                font-size: inherit;
                                                text-rendering: auto;
                                                -webkit-font-smoothing: antialiased;
                                                -moz-osx-font-smoothing: grayscale;
                                                content: "\f013";
                                                color: #d0021b;
                                                margin-right: 15px;
                                                font-size: 11px;
                                                line-height: 22px;
                                            }
                                        </style>
                                    </div>
                                </div>
                                <div class="view-all-btn">
                                    <button fdprocessedid="wjt49u">
                                        <i class="fa fa-plus-circle"></i> Xem thêm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 order-mb-3 mg-top-30 mg-top-15-mb pd-right-0">
                        <div class="bg-while tskttable">
                            <div class="title-head-tab">
                                Thông số kỹ thuật
                            </div>
                            <div class="product-parameter">
                                <div class="content-param max-height-ct">
                                    <div class="more-description">
                                        <table cellspacing="0" cellpadding="0" border="1">
                                            <tbody>
                                                <tr>
                                                    <td>CPU</td>
                                                    <td>Intel® Core™ i5-12450HX, 8C (4P + 4E) / 12T, P-core up to 4.4GHz,
                                                        E-core up to 3.1GHz, 12MB</td>
                                                </tr>
                                                <tr>
                                                    <td>VGA</td>
                                                    <td>NVIDIA® GeForce RTX™ 2050 4GB GDDR6, Boost Clock 1575MHz, TGP 65W
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>RAM</td>
                                                    <td>1x 12GB SO-DIMM DDR5-4800</td>
                                                </tr>
                                                <tr>
                                                    <td>SSD</td>
                                                    <td>512GB SSD M.2 2242 PCIe® 4.0x4 NVMe®, 2 slots</td>
                                                </tr>
                                                <tr>
                                                    <td>Màn hình</td>
                                                    <td>15.6" FHD (1920x1080) IPS 300nits Anti-glare, 100% sRGB, 144Hz,
                                                        G-SYNC®</td>
                                                </tr>
                                                <tr>
                                                    <td>Hệ điều hành</td>
                                                    <td>Windows® 11 Home Single Language, English</td>
                                                </tr>
                                                <tr>
                                                    <td>LAN</td>
                                                    <td>100/1000M (RJ-45)</td>
                                                </tr>
                                                <tr>
                                                    <td>Wireless Lan</td>
                                                    <td>Wi-Fi® 6, 11ax 2x2 + BT5.1</td>
                                                </tr>
                                                <tr>
                                                    <td>Cổng kết nối</td>
                                                    <td>1x USB 3.2 Gen 1 2x USB 3.2 Gen 2 1x USB-C® 3.2 Gen 2 (support data
                                                        transfer, Power Delivery 140W and DisplayPort™ 1.4) 1x HDMI®, up to
                                                        8K/60Hz 1x Ethernet (RJ-45) 1x Headphone / microphone combo jack
                                                        (3.5mm) 1x Power connector</td>
                                                </tr>
                                                <tr>
                                                    <td>Bàn phím</td>
                                                    <td>White Backlit, English</td>
                                                </tr>
                                                <tr>
                                                    <td>Pin</td>
                                                    <td>Integrated 60Wh</td>
                                                </tr>
                                                <tr>
                                                    <td>Trọng lượng</td>
                                                    <td>2.4 Kg</td>
                                                </tr>
                                                <tr>
                                                    <td>Kích thước</td>
                                                    <td>359.6 x 264.8 x 22.1-25.2 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="view-all-btn bcxyz">
                                    <button class="bcxyz" fdprocessedid="y8r0l">
                                        <i class="fa fa-plus-circle"></i> Xem thêm
                                    </button>
                                </div>
                            </div>
                        </div>

                        <script>
                            let find = true;
                            if ($('#ega-uti-editable-content table').length > 0) {
                                $('#ega-uti-editable-content table').each(function() {
                                    if ($(this).find('tr:first td').length === 2 && find && $(this).find('tr:first img').length == 0 &&
                                        $(this).find('tr:first td:last').text().trim() != "") {
                                        $(this).removeAttr('style');
                                        $(this).find('td').removeAttr('style');
                                        $('.product-parameter .more-description').html($(this).clone(true));
                                        find = false;
                                    } else if ($(this).find('tr:first td').length === 2 && $(this).find('tr:first img').length == 0 &&
                                        $(this).find('tr:first td:last').text().trim() != "") {
                                        $(this).remove()
                                    }
                                });
                                if (find) {
                                    $('.tskttable').remove()
                                }


                            }
                        </script>
                        <div class="latest-articles">
                            <h2>Bài viết mới nhất</h2>
                            <!-- Thay thế bằng handle blog của bạn -->



                            <div class="list-news-latest">
                                <div class="item-article d-flex">
                                    <div class="post-image">
                                        <a href="/blogs/tin-tuc-cong-nghe/phan-mem-kahoot-la-gi">
                                            <img class="dt-width-100" height="60" width="100"
                                                src="//file.hstatic.net/200000837185/article/kahoot_4edce2c06f42433899eeac49e08745bb_small.jpg"
                                                alt="Phần Mềm Kahoot Là Gì? Hướng Dẫn Cách Sử Dụng Hiệu Quả">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title-article-side">
                                            <a href="/blogs/tin-tuc-cong-nghe/phan-mem-kahoot-la-gi">Phần Mềm Kahoot Là
                                                Gì? Hướng Dẫn Cách Sử Dụng Hiệu Quả</a>
                                        </h3>
                                        <span class="date">
                                            20.08.2024
                                        </span>
                                    </div>
                                </div>
                                <div class="item-article d-flex">
                                    <div class="post-image">
                                        <a href="/blogs/tin-tuc-cong-nghe/xmp-la-gi">
                                            <img class="dt-width-100" height="60" width="100"
                                                src="//file.hstatic.net/200000837185/article/xmp-la-gi-2_53a26ad4ebb2420481acd5d320636f8b_small.png"
                                                alt="XMP Là Gì? Có Thực Sự Cần Thiết Cho RAM Hay Không?">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title-article-side">
                                            <a href="/blogs/tin-tuc-cong-nghe/xmp-la-gi">XMP Là Gì? Có Thực Sự Cần Thiết
                                                Cho RAM Hay Không?</a>
                                        </h3>
                                        <span class="date">
                                            13.08.2024
                                        </span>
                                    </div>
                                </div>
                                <div class="item-article d-flex">
                                    <div class="post-image">
                                        <a
                                            href="/blogs/tin-tuc-cong-nghe/dai-tiec-rog-khai-deal-tuu-truong-tang-balo-tai-nghe-chat">
                                            <img class="dt-width-100" height="60" width="100"
                                                src="//file.hstatic.net/200000837185/article/kv_1_1_8235e022fa774a12a048ce8123e842b6_small.jpg"
                                                alt="ĐẠI TIỆC ROG - KHAI DEAL TỰU TRƯỜNG TẶNG BALO, TAI NGHE CHẤT">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title-article-side">
                                            <a
                                                href="/blogs/tin-tuc-cong-nghe/dai-tiec-rog-khai-deal-tuu-truong-tang-balo-tai-nghe-chat">ĐẠI
                                                TIỆC ROG - KHAI DEAL TỰU TRƯỜNG TẶNG BALO, TAI NGHE CHẤT</a>
                                        </h3>
                                        <span class="date">
                                            02.08.2024
                                        </span>
                                    </div>
                                </div>
                                <div class="item-article d-flex">
                                    <div class="post-image">
                                        <a href="/blogs/tin-tuc-cong-nghe/dang-ky-series-nhan-qua-tang-chat-tu-asus">
                                            <img class="dt-width-100" height="60" width="100"
                                                src="//file.hstatic.net/200000837185/article/1_1_525f58cb49f9419cbddd351ce9c16da9_small.png"
                                                alt="Đăng ký Series - Nhận quà tặng chất từ Asus">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title-article-side">
                                            <a href="/blogs/tin-tuc-cong-nghe/dang-ky-series-nhan-qua-tang-chat-tu-asus">Đăng
                                                ký Series - Nhận quà tặng chất từ Asus</a>
                                        </h3>
                                        <span class="date">
                                            02.08.2024
                                        </span>
                                    </div>
                                </div>
                                <div class="item-article d-flex">
                                    <div class="post-image">
                                        <a
                                            href="/blogs/tin-tuc-cong-nghe/bung-no-thang-gigabyte-qua-to-boc-tham-trung-lon-xe-may-honda-vision">
                                            <img class="dt-width-100" height="60" width="100"
                                                src="//file.hstatic.net/200000837185/article/giga_vuong__1_-01_2899237d23f147e48bc0db721ded8a76_small.png"
                                                alt="BÙNG NỔ THÁNG GIGABYTE - QUÀ TO BỐC THĂM TRÚNG LỚN XE MÁY HONDA VISION">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title-article-side">
                                            <a
                                                href="/blogs/tin-tuc-cong-nghe/bung-no-thang-gigabyte-qua-to-boc-tham-trung-lon-xe-may-honda-vision">BÙNG
                                                NỔ THÁNG GIGABYTE - QUÀ TO BỐC THĂM TRÚNG LỚN XE MÁY HONDA VISION</a>
                                        </h3>
                                        <span class="date">
                                            02.08.2024
                                        </span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 order-mb-4 mg-top-30 mg-top-15-mb pd-right-0">



                    <script id="ratingdataproduct">
                        window.ratingdata = {
                            "1052765387": [
                                ["22/02/2024 09:30:25", "Thanh Tâm", "5", "Laptop này rất tốt với giá cả phải chăng.",
                                    "Cảm ơn quý khách đã dành thời gian để đánh giá sản phẩm của chúng tôi.", "", "",
                                    "Đang quan tâm"
                                ],
                                ["23/02/2024 09:30:25", "Minh Hạnh", "5", "Thiết kế đẹp và cấu hình mạnh mẽ.",
                                    "Chúng tôi rất trân trọng những lời đánh giá của quý khách về sản phẩm của chúng tôi.", "", "",
                                    "Đang quan tâm"
                                ],
                                ["24/02/2024 09:30:25", "Đức Anh", "5", "Màn hình sắc nét và âm thanh tốt.",
                                    "Đánh giá của quý khách là động lực để chúng tôi cải thiện sản phẩm và dịch vụ của mình.", "",
                                    "", "Đang quan tâm"
                                ],
                                ["25/02/2024 09:30:25", "Quang Huy", "5", "Pin khá lâu và dễ dàng mang theo.",
                                    "Chúng tôi sẽ tiếp tục nỗ lực để mang đến cho quý khách những sản phẩm và dịch vụ tốt nhất.",
                                    "", "", "Đang dùng"
                                ],
                                ["26/02/2024 09:30:25", "Thùy Linh", "5", "Tuyệt vời cho công việc và giải trí hàng ngày.",
                                    "Một lần nữa, chúng tôi xin chân thành cảm ơn quý khách đã đánh giá sản phẩm của chúng tôi.",
                                    "", "", "Đang dùng"
                                ],
                                ["27/02/2024 09:30:25", "Trung Kiên", "5", "Laptop này rất tốt với giá cả phải chăng.",
                                    "Cảm ơn quý khách đã dành thời gian để đánh giá sản phẩm của chúng tôi.", "", "", "Đang dùng"
                                ],
                                ["28/02/2024 09:30:25", "Ngọc Ánh", "5", "Thiết kế đẹp và cấu hình mạnh mẽ.",
                                    "Chúng tôi rất trân trọng những lời đánh giá của quý khách về sản phẩm của chúng tôi.", "", "",
                                    "Đang dùng"
                                ],
                                ["29/02/2024 09:30:25", "Hải Yến", "5", "Màn hình sắc nét và âm thanh tốt.",
                                    "Đánh giá của quý khách là động lực để chúng tôi cải thiện sản phẩm và dịch vụ của mình.", "",
                                    "", "Đang dùng"
                                ],
                                ["01/03/2024 09:30:25", "Thịnh Đức", "5", "Pin khá lâu và dễ dàng mang theo.",
                                    "Chúng tôi sẽ tiếp tục nỗ lực để mang đến cho quý khách những sản phẩm và dịch vụ tốt nhất.",
                                    "", "", "Đang dùng"
                                ],
                                ["02/03/2024 09:30:25", "Hồng Ngọc", "5", "Tuyệt vời cho công việc và giải trí hàng ngày.",
                                    "Một lần nữa, chúng tôi xin chân thành cảm ơn quý khách đã đánh giá sản phẩm của chúng tôi.",
                                    "", "", "Đang dùng"
                                ]
                            ],
                            "star": 5,
                            "total": 10
                        }
                    </script>






















                    <div itemscope="" itemtype="http://schema.org/Product" data-id="1052765387" data-create=""
                        data-brand="Xgear" id="hrv-product-reviews" style="padding-top:20px;display:table;width:100%"
                        class="bg-white p-2 p-lg-3 mt-3 container hrv-product-reviews hrv-reviews-product">

                        <meta id="metaname" itemprop="name" content="{{ $product->name_product }}">
                        <meta itemprop="sku" content="">
                        <meta itemprop="brand" content="Lenovo">
                        <meta itemprop="description"
                            content="Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN – Laptop chuẩn màn hình 100% sRGBHiệu năng ấn tượng với CPU Intel Core i5-12450HX + GPU RTX 2050 4GB&nbsp;cân các tác vụ văn phòng, chiến game mượt màThiết kế chất lượng và mạnh mẽ, trang nhã, màu bạc nổi bật giúp máy hạn chế bám mồ hôi và dấu vân tayMàn hình 15.6 inch FHD cùng tần số quét 144Hz chuẩn 100% sRGB tuyệt đẹp,&nbsp;bắt kịp mọi thao tác của đối thủDung lượng 12GB SO-DIMM DDR5-4800, xử lý tốt đa nhiệm, bạn có thể nâng cấp tối đa đến 32GB RAMThời lượng pin trung bình với mức dung lượng 60WhrBàn phím keyboard tích hợp đèn LED White&nbsp;Backlit thuận tiện để giải trí và làm việcGiá bán: [price]&nbsp;Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN&nbsp;là mẫu laptop gaming sở hữu hiệu năng mạnh mẽ, được tối ưu để mang tới trải nghiệm chơi game tốt nhất cho người dùng. Đi kèm là khả năng xử lý đồ họa xuất sắc, chất lượng hình ảnh vượt trội để phục vụ cho game thủ và nhà sáng tạo. Thiết kế thân thiện với concept cùng giá bán [price] sẽ phù hợp với cả người dùng phổ thông thay vì chỉ game thủ.Thiết kế đầy tinh tế và thanh lịchKiểu dáng cuốn mắt: Máy được hoàn thiện với các góc cạnh được làm bo tròn một cách tỉ mỉ, tạo nên một vẻ ngoài đẹp mắt và sang trọng. Mặt A được phủ lớp sơn màu Storm Grey độc đáo, tạo nên một sự thu hút mạnh mẽ từ cái nhìn đầu tiên. Điểm nhấn của thiết kế là logo mới được đặt ở góc cạnh, không chỉ làm tăng tính nhận diện thương hiệu mà còn tạo nên một điểm nhấn độc đáo trên máy tínhHệ thống tản nhiệt thông minhTản nhiệt mát mẻ với sự hiện diện của 4 ống dẫn nhiệt, mang đến khả năng tản nhiệt nhanh chóng và hiệu quả cao cho các thành phần bên trong máyHệ thống tản nhiệt được thiết kế với quạt kép bố trí theo hướng ngược nhau, ngăn chặn hiệu ứng của luồng khí nóng thổi vào vùng làm việc của người dùng. Đồng thời đưa khí mát vào bên trong và không khí nóng được trực tiếp thổi ra ngoài, giúp giảm nhiệt độ của laptop xuống thấp hơn khoảng 2 độ C và giảm độ ồn lên đến 2dB so với thế hệ trướcChất liệu chắc chắn: Lenovo LOQ 15IAX9 83GS001SVN&nbsp;được làm từ chất liệu kim loại cao cấp không chỉ đem đến vẻ đẹp thẩm mỹ mà còn tạo ra sự bền bỉ, chắc chắn, hạn chế được trầy xước cũng như bụi bẩn bám vào máy&nbsp;Các cổng kết nối đầy đủ: Các thao tác và không gian của bạn sẽ không bị giới hạn mà được thoải mái mở rộng nhờ các cổng kết nối đa dạng, thuận tiện cho việc kết nối với các thiết bị ngoại vi. Máy sở hữu các cổng như USB Type-A, HDMI 2.1, cổng Ethernet, cổng nguồn, USB Type-C, Jack Audio 3.5mm,... giúp bạn đắm chìm hơn trong các bộ phim, tựa game và âm nhạc trên màn ảnh lớn cùng bạn bè và gia đìnhTrọng lượng vừa phải: Laptop sở hữu kích thước 359.6 x 264.8 x 22.1mm và nặng 2.4kg, tuy không quá nhỏ gọn nhưng lại rất phù hợp với laptop gaming thế hệ mới. Bạn vẫn có thể cất gọn vào balo và thoải mái mang máy tính theo bên mình mọi lúc mọi nơiMàn hình sắc nét: Máy trang bị tấm nền IPS trên màn hình 15.6 inch viền siêu mỏng. Thiết kế này vừa mang đến không gian hiển thị rộng lớn, vừa cho hình ảnh chất lượng đến từ mọi góc nhìn. Các nội dung hiển thị được tối ưu hóa ở độ phân giải Full HD 1920 x 1080 vô cùng sắc nét cùng độ phủ màu 100% sRGB hứa hẹn cung cấp không gian giải trí, gaming đắm chìm với hình ảnh sống động và mãn nhãn nhấtCấu hình cực đỉnhCPU Intel Core i5 1245HX với 8 nhân 12 luồng, trong đó 4 nhân P với tốc độ lên đến 4.40 GHz và khả năng tiêu thụ tối đa 157W điện. Nhờ sức mạnh này, bạn có thể thỏa sức chơi game, livestream, chỉnh sửa video hay thực hiện các công việc nặng một cách dễ dàng. Đặc biệt, loạt tính năng thông minh từ Intel như Thread Director và Turbo Boost không chỉ tối ưu hóa trải nghiệm chơi game mà còn giúp tăng tốc độ khung hình, giảm thiểu hiện tượng lag giật, giúp chơi game mượt mà hơn bao giờ hếtRAM 12GB cho bạn làm đa nhiệm siêu mượt mà, bạn hoàn toàn có thể mở hàng chục tabs mà không lo máy gặp các tình trạng như load lại trang hay giật, đơ máyỔ cứng SSD dung lượng 512GB đảm bảo cung cấp đủ không gian lưu trữ để người sử dụng thoải mái ở mức cơ bản. Đồng thời tăng khả năng khởi động nhanh chóng và tải chương trình một cách nhanh gọnSử dụng nền tảng Lenovo AI Engine cùng hỗ trợ từ con chip AI LA1, máy tính tự động học hỏi thói quen sử dụng của người dùng, sau đó tự động phân tích và điều chỉnh phần cứng của máy dựa trên các ứng dụng hay trò chơi mà bạn thường xuyên sử dụng, từ đó tối ưu hóa hiệu suất của CPU và GPU một cách thông minh và hiệu quả nhất. Nhờ tính năng này, bạn không cần phải mất công thiết lập cấu hình thủ công, máy tính sẽ tự động điều chỉnh để đảm bảo mang đến trải nghiệm tốt nhất khi sử dụngCard đồ họa RTX 20&nbsp;series vừa lý tưởng cho game thủ vừa là công cụ mạnh mẽ cho người sáng tạo nội dung. Với GPU NVIDIA GeForce RTX 2050, laptop man đến trải nghiêm đỉnh cao của kiến trúc Ampere - thế hệ thứ hai của NVIDIA với các công nghệ tiên tiến như nhân RT mới, nhân Tensor mới và các tính năng AI tiên tiến. Các tính năng này không chỉ tạo ra hình ảnh đẹp và mượt mà trong các tựa game mà còn giúp tối ưu hóa hiệu suất khi sáng tạo nội dung.&nbsp;&nbsp;Khả năng xử lý đỉnh caoThực hiện tốt các công việc đòi hỏi đến đồ họa cao như chỉnh sửa video, thiết kế đồ họa hay làm việc trên các dự án sáng tạoChơi tốt các tựa game như GO, GTA, V,... ở mức setting cao.Khởi động nhanh chóng, thao tác mượt màMàn hình rực rỡ, chuẩn màuMàn hình kích thước 15.6 inch với độ phân giải Full HD cho mọi hình ảnh hiển thị một cách chân thật, sắc nét nhấtViền màn hình mỏng nhẹ cùng độ phủ màu 100% sRGB giúp màn hình hiển thị tốt, màu sắc hiện ra đặc biệt đẹp, giúp thực hiện tốt các công việc như thiết kế hay chỉnh sửa ảnh.Công nghệ NVIDIA G-SYNC và Advanced Optimus giúp đồng bộ khung hình của trò chơi với màn hình, loại bỏ hiện tượng giật hình và xé hình, mang lại trải nghiệm chơi game mượt mà và không gây khó chịuMàn hình IPS mang lại góc nhìn rộng và màu sắc sống động, giúp bạn thưởng thức hình ảnh chân thực và chi tiết. Với độ sáng 300 nits, đủ sáng để người dùng hoàn toàn sử dụng trong mọi môi trường ánh sáng gắt mà hình ảnh vẫn rõ nétTần số quét 144Hz của màn hình tạo ra một trải nghiệm mượt mà chống lag giật khi chơi các tựa game tốc chiến, bắn súng. Tần quét càng cao sẽ giúp giảm hiện tượng mờ hình và cung cấp hình ảnh rõ nét và mượt mà hơnMàu sắc hình ảnh tươi mới, sống động&nbsp;Âm thanh xuất sắcHệ thống loa kép 2W cực chấtCông nghệ âm thanh Nahimic Audio mang đến trải nghiệm âm thanh 3D sống động, giúp nâng cao trải nghiệm, sự tập trung trong từng trận đấuBàn phím và touchpadBàn phím keyboard cùng hành trình phím sâu cho cảm giác gõ tốt, tích hợp đèn nền RGB hỗ trợ quá trình sử dụng trong điều kiện thiếu sángTouchpad rộng rãi, thao tác dễ dàngThời lượng pin tốtThời lượng pin trung bình với mức dung lượng 60WhrCông nghệ sạc nhanh 140WCổng kết nối hiện đại, đa dạngCạnh trái: 1x USB 3.2 Gen 2 Type-C, 1x khe cắm thẻ nhớ SD, 1x Jack Audio 3.5Cạnh phải: 1x USB 3.2 Gen 1 Type-A, 1x HDMI 2.0, 1x Ethernet RJ45Tính năng khácWifi 6EBluetooth 5.2Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN với đầy đủ các cổng kết nối, phù hợp với nhiều lại thiết bị ngoại vi:1. USB 3.2 Gen 12. USB 3.2 Gen 2&nbsp;3. USB 3.2 Gen 2&nbsp;4. Ethernet (RJ-45)5. HDMI®6. Power connector7. USB-C® 3.2 Gen 28. Headphone / microphone combo jack (3.5mm)Tóm lại, Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN là một sự kết hợp hoàn hảo giữa thiết kế đẹp mắt, hiệu suất mạnh mẽ, và tính di động. Đây là một sự lựa chọn đáng cân nhắc cho những người đam mê game và công việc đồ họa.####CPUIntel® Core™ i5-12450HX, 8C (4P + 4E) / 12T, P-core up to 4.4GHz, E-core up to 3.1GHz, 12MBVGANVIDIA® GeForce RTX™ 2050 4GB GDDR6, Boost Clock 1575MHz, TGP 65WRAM1x 12GB SO-DIMM DDR5-4800SSD512GB SSD M.2 2242 PCIe® 4.0x4 NVMe®, 2 slotsMàn hình15.6 FHD (1920x1080) IPS 300nits Anti-glare, 100% sRGB, 144Hz, G-SYNC®Hệ điều hànhWindows® 11 Home Single Language, EnglishLAN100/1000M (RJ-45)Wireless LanWi-Fi® 6, 11ax 2x2 + BT5.1Cổng kết nối1x USB 3.2 Gen 1 2x USB 3.2 Gen 2 1x USB-C® 3.2 Gen 2 (support data transfer, Power Delivery 140W and DisplayPort™ 1.4) 1x HDMI®, up to 8K/60Hz 1x Ethernet (RJ-45) 1x Headphone / microphone combo jack (3.5mm) 1x Power connectorBàn phímWhite Backlit, EnglishPinIntegrated 60WhTrọng lượng2.4 KgKích thước359.6 x 264.8 x 22.1-25.2 mmHÌNH ẢNH THỰC TẾ Lenovo LOQ dòng 15IAX9 tại Xgear:">
                        <meta itemprop="image"
                            content="https://product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236.png">
                        <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="VND">
                            <meta itemprop="priceValidUntil" content="2024-09-05 ">
                            <link itemprop="url"
                                href="https://xgear.net/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn">
                            <meta itemprop="price" content="17590000">
                            <link itemprop="itemCondition" href="http://schema.org/NewCondition">
                            <link itemprop="availability" href="http://schema.org/InStock">
                        </span>



                        <div id="hrv-product-reviews-sub" style="width:100%">
                            <div class="hrv-product-reviews-summary" id="hrv-product-reviews-summary">
                                <div class="flex" itemscope="" itemprop="aggregateRating"
                                    itemtype="http://schema.org/aggregateRating">

                                    <div class="hrv-prv-summary-score">
                                        <h3>5</h3>

                                        <meta itemprop="itemreviewed" content="{{ $product->name_product }}">
                                        <meta itemprop="reviewCount" content="10">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        <meta itemprop="worstRating" content="1">
                                        <div>(10 đánh giá)</div>
                                        <div id="hrv-prv-summary-star" class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                    </div>
                                    <div class="hrv-prv-detail-score">
                                        <div class="score5"><i class="star-on-png"></i><i class="star-on-png"></i><i
                                                class="star-on-png"></i><i class="star-on-png"></i><i
                                                class="star-on-png"></i><span>(10 đánh giá)</span></div>
                                        <div class="score4"><i class="star-on-png"></i><i class="star-on-png"></i><i
                                                class="star-on-png"></i><i class="star-on-png"></i><i
                                                class="star-off-png"></i></div>
                                        <div class="score3"><i class="star-on-png"></i><i class="star-on-png"></i><i
                                                class="star-on-png"></i><i class="star-off-png"></i><i
                                                class="star-off-png"></i></div>
                                        <div class="score2"><i class="star-on-png"></i><i class="star-on-png"></i><i
                                                class="star-off-png"></i><i class="star-off-png"></i><i
                                                class="star-off-png"></i></div>
                                        <div class="score1"><i class="star-on-png"></i><i class="star-off-png"></i><i
                                                class="star-off-png"></i><i class="star-off-png"></i><i
                                                class="star-off-png"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hrv-product-reviews-head" style="display: block;">
                                Có <span>10</span> đánh giá trên sản phẩm “<strong>Laptop Gaming Lenovo LOQ 15IAX9
                                    83GS001SVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11</strong>”
                            </div>

                            <div class="hrv-product-reviews-list fixheight" id="hrv-product-reviews-list">
                                <button id="btnseemoreReview" fdprocessedid="rvlm7u"><span>Xem thêm đánh
                                        giá↓</span></button><button class="buycreaterating fixpos"
                                    fdprocessedid="0liqsv"><span>Tạo đánh giá</span></button>
                                <div id="02032024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Hồng Ngọc"><cite>Hồng Ngọc</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang dùng" class="status">Đang dùng</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Tuyệt vời cho công việc và giải trí hàng ngày.</p>

                                            <time>02/03/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Một lần nữa, chúng tôi xin chân thành cảm ơn quý khách đã đánh giá sản phẩm của
                                            chúng tôi.</p>
                                    </div>
                                </div>
                                <div id="01032024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Thịnh Đức"><cite>Thịnh Đức</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang dùng" class="status">Đang dùng</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Pin khá lâu và dễ dàng mang theo.</p>

                                            <time>01/03/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Chúng tôi sẽ tiếp tục nỗ lực để mang đến cho quý khách những sản phẩm và dịch vụ
                                            tốt nhất.</p>
                                    </div>
                                </div>
                                <div id="29022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Hải Yến"><cite>Hải Yến</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang dùng" class="status">Đang dùng</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Màn hình sắc nét và âm thanh tốt.</p>

                                            <time>29/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Đánh giá của quý khách là động lực để chúng tôi cải thiện sản phẩm và dịch vụ của
                                            mình.</p>
                                    </div>
                                </div>
                                <div id="28022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Ngọc Ánh"><cite>Ngọc Ánh</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang dùng" class="status">Đang dùng</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Thiết kế đẹp và cấu hình mạnh mẽ.</p>

                                            <time>28/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Chúng tôi rất trân trọng những lời đánh giá của quý khách về sản phẩm của chúng
                                            tôi.</p>
                                    </div>
                                </div>
                                <div id="27022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Trung Kiên"><cite>Trung Kiên</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang dùng" class="status">Đang dùng</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Laptop này rất tốt với giá cả phải chăng.</p>

                                            <time>27/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Cảm ơn quý khách đã dành thời gian để đánh giá sản phẩm của chúng tôi.</p>
                                    </div>
                                </div>
                                <div id="26022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Thùy Linh"><cite>Thùy Linh</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang dùng" class="status">Đang dùng</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Tuyệt vời cho công việc và giải trí hàng ngày.</p>

                                            <time>26/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Một lần nữa, chúng tôi xin chân thành cảm ơn quý khách đã đánh giá sản phẩm của
                                            chúng tôi.</p>
                                    </div>
                                </div>
                                <div id="25022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Quang Huy"><cite>Quang Huy</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang dùng" class="status">Đang dùng</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Pin khá lâu và dễ dàng mang theo.</p>

                                            <time>25/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Chúng tôi sẽ tiếp tục nỗ lực để mang đến cho quý khách những sản phẩm và dịch vụ
                                            tốt nhất.</p>
                                    </div>
                                </div>
                                <div id="24022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Đức Anh"><cite>Đức Anh</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang quan tâm" class="status">Đang quan tâm</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Màn hình sắc nét và âm thanh tốt.</p>

                                            <time>24/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Đánh giá của quý khách là động lực để chúng tôi cải thiện sản phẩm và dịch vụ của
                                            mình.</p>
                                    </div>
                                </div>
                                <div id="23022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Minh Hạnh"><cite>Minh Hạnh</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang quan tâm" class="status">Đang quan tâm</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Thiết kế đẹp và cấu hình mạnh mẽ.</p>

                                            <time>23/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Chúng tôi rất trân trọng những lời đánh giá của quý khách về sản phẩm của chúng
                                            tôi.</p>
                                    </div>
                                </div>
                                <div id="22022024093025" class="review-bigpen" itemprop="review"
                                    itemtype="http://schema.org/Review" itemscope="">
                                    <div class="reviewitemhead">

                                        <p class="hrv-product-reviews-author"><span itemprop="author"
                                                itemtype="http://schema.org/Person" itemscope="" class="author">
                                                <img src="https://theme.hstatic.net/1000233137/1000650361/14/no_avatar.gif?v=75124"
                                                    height="20px" width="20px">
                                                <meta itemprop="name" content="Thanh Tâm"><cite>Thanh Tâm</cite>
                                            </span> </p>
                                        <div class="hrv-product-reviews-star">
                                            <i data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i><i data-alt="1" class="star-on-png"></i><i
                                                data-alt="1" class="star-on-png"></i><i data-alt="1"
                                                class="star-on-png"></i>
                                        </div>
                                        <span data-content="Đang quan tâm" class="status">Đang quan tâm</span>
                                    </div>
                                    <div class="rowbigpen ">

                                        <div>
                                            <p itemprop="description">Laptop này rất tốt với giá cả phải chăng.</p>

                                            <time>22/02/2024 09:30:25</time>
                                        </div>
                                        <div style="display:none;" itemtype="http://schema.org/Rating"
                                            itemprop="reviewRating" itemscope="">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="bestRating" content="5">
                                            <span itemprop="ratingValue" content="5">5</span>
                                        </div>
                                    </div>
                                    <div class="bigpen-reply">
                                        <div class="bigpen-brand">Xgear</div>
                                        <p>Cảm ơn quý khách đã dành thời gian để đánh giá sản phẩm của chúng tôi.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="hrv-product-reviews-form" id="hrv-product-reviews-form">
                                <h3 class="font-coiny">Viết đánh giá</h3>
                                <form id="hrv-product-reviews-frm"
                                    url="https://script.google.com/macros/s/AKfycbynbN2mHWHaWlfMgF5qtBXR25R8sYENxFGd0nP8JQt3C5uVFMJyjRhVXxPIW6QZj4KJ/exec"
                                    name="hrv-product-reviews-frm">
                                    <input name="id" type="hidden" value="1052765387">
                                    <input name="productname" type="hidden" value="{{ $product->name_product }}">
                                    <div class="flex">
                                        <fieldset class="p-1 border-0 text-left">
                                            <div id="dvName">
                                                <input name="name" required="" type="text"
                                                    placeholder="Tên của bạn (>3 ký tự và < 20 ký tự)"
                                                    autocomplete="off" class="p-2 border rounded-10 w-100"
                                                    fdprocessedid="22c9e">
                                            </div>
                                        </fieldset>
                                        <fieldset class="p-1 border-0 text-left">
                                            <div id="dvEmail">
                                                <input name="email" type="email" placeholder="xinchao@gmail.com"
                                                    autocomplete="off" class="p-2 border rounded-10 w-100"
                                                    fdprocessedid="g9vzi8">
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="flex">
                                        <fieldset class="p-1 border-0 text-left">
                                            <div id="dvimg">
                                                <select name="status" class="p-2 border rounded-10 w-100"
                                                    fdprocessedid="izduh">
                                                    <option value="Đã mua tại Xgear">Đã mua tại Xgear</option>
                                                    <option value="Đang dùng">Đang dùng sản phẩm</option>
                                                    <option value="Đang quan tâm">Đang quan tâm sản phẩm</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="p-1 border-0 text-left">
                                            <div id="dvEmail">
                                                <input name="phone" type="number" placeholder="Số điện thoại"
                                                    autocomplete="off" class="p-2 border rounded-10 w-100"
                                                    fdprocessedid="p7zhhk">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <fieldset id="hrv_product_reviews_form_fieldset_rate"
                                        class="p-1 pt-2 border-0 text-left"><label>Đánh giá</label>
                                        <div id="dvRating">
                                            <i data-value="1" class="star-on-png"></i>
                                            <i data-value="2" class="star-on-png"></i>
                                            <i data-value="3" class="star-on-png"></i>
                                            <i data-value="4" class="star-on-png"></i>
                                            <i data-value="5" class="star-on-png"></i>

                                            <input id="url" name="url" type="hidden"
                                                value="https://xgear.net/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn">
                                        </div>
                                    </fieldset>

                                    <input id="dvscore" name="score" type="hidden" value="5">
                                    <fieldset class="p-1 border-0 text-left">
                                        <div id="dvBody">
                                            <textarea name="body" required="" rows="5" minlength="3" maxlength="1000"
                                                placeholder="Viết nội dung đánh giá ở đây (>3 ký tự và < 1000 ký tự)" class="p-2 border rounded-10 w-100"></textarea>
                                        </div>
                                    </fieldset>

                                    <div class="flex">
                                        <fieldset class="p-1 border-0 text-left">
                                            <div id="dvimg"><input name="filedata" id="uploadfile"
                                                    type="file" class="p-2 border rounded-10 w-100">
                                            </div>
                                        </fieldset>
                                        <fieldset class="p-1 border-0 text-left">
                                            <div id="dvytb"><input name="youtube" type="text"
                                                    placeholder="Link video (Nếu có)"
                                                    class="p-2 border rounded-10 w-100" fdprocessedid="e8rdsc">
                                            </div>
                                        </fieldset>
                                    </div>

                                    <input type="submit" style="background:#f52813" id="btnSubmitReview"
                                        value="Gửi đánh giá" width="80" fdprocessedid="f28eld">
                                </form><br>
                                <div class="hrv-product-reviews-form" id="hrv-product-reviews-thanks"
                                    style="display:none; padding-top:20px">
                                    <b>Cám ơn bạn đã gửi đánh giá sản phẩm!</b>
                                </div><br>
                            </div>

                        </div>
                    </div>
                    <script>
                        function getcss(filename) {
                            jQuery('head').append(`<link href='${getcdn(filename)}' rel='stylesheet' type='text/css'  media='all'  />`)
                        }
                        var getcdn = function(filename) {
                            var url = "https://theme.hstatic.net/1000233137/1000650361/14/";
                            return url + filename + "?v=" + (new Date().toISOString().split(":")[0].replace(/[^a-zA-Z0-9]+/g, ''));
                        }

                        let cssfile = 'bigpenreview.scss.css'
                        let jsfile = getcdn('bigpenreview.js');

                        getcss(cssfile)
                        $.getScript(jsfile);
                        $(".buycreaterating").click(function() {
                            $(this).hide()
                            $('#hrv-product-reviews-form').attr("style", "display:block !important")
                        })
                        $('.product-detail-main .haravan-product-reviews-badge').click(function() {
                            window.location.href = window.location.href.split('#')[0] + "#hrv-product-reviews-sub"
                        })
                    </script>
                    <style>
                        .buycreaterating {
                            margin: 20px auto;
                            color: #fff
                        }

                        .bigpen-brand,
                        .buycreaterating {
                            background: #f86239;
                        }

                        .hrv-prv-detail-score .score2,
                        .hrv-prv-detail-score .score1 {
                            display: none;
                        }

                        .hrv-product-reviews-star {
                            display: inline;
                        }

                        #detail-product .pageviewsbigpen {
                            font-size: 12px
                        }

                        #detail-product .star-on-png {
                            width: 13px;
                            height: 13px
                        }

                        .hrv-product-reviews {
                            background: #fff;

                        }

                        .ratingcount,
                        .ratingscore {
                            vertical-align: bottom;
                        }

                        #btnnewreview,
                        #btnSubmitReview {
                            margin-top: 0 !important;
                            background: var(--mainColor) !important;
                            border-radius: 10px;
                            font-weight: bold;
                        }

                        .product-layout_col-right i+.ratingcount:after {
                            content: " đánh giá";
                        }

                        .hrv-product-reviews-form h3 {
                            color: var(--mainColor);
                            font-weight: bold;
                        }

                        .ratingscore {
                            color: #f00;
                        }

                        .bigpen-brand {
                            background: transparent;
                            color: #c38533;
                            padding: 0;
                            background-image: url(https://theme.hstatic.net/200000837185/1001187855/14/favicon.png?v=1455);
                            background-repeat: no-repeat;
                            background-size: contain;
                            background-position: left;
                            padding-left: 25px;

                        }
                    </style>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 order-mb-5 mg-top-30 mg-top-15-mb pd-right-0">
                    <div id="section-related" class="d-none-button-mb">
                        <div class="bg-while">
                            <div class="top-title">
                                <h2 class="title-section">
                                    <span>Sản phẩm liên quan</span>
                                </h2>
                                <p></p>
                            </div>
                            <div id="owl-collection-related"
                                class="d-flex-slick mg-left--15 slick-callback slick-initialized slick-slider slick-dotted"
                                data-md="5" data-sm="3" data-xs="2" data-slides-md="5"
                                data-slides-tablet="3" data-slides-xs="2" data-slides-md-scroll="5"
                                data-slides-tablet-scroll="3" data-slides-xs-scroll="2" data-dots="true"
                                data-autoplay="false" data-infinite="false" data-custom-arrows="true"><button
                                    type="button" class="slick-prev slick-arrow custom-style slick-disabled"
                                    aria-label="Previous" aria-disabled="true" style="display: block;"><span
                                        class="arrow-custom arrow-left">
                                        <div class="arrow-top"></div>
                                        <div class="arrow-bottom"></div>
                                    </span></button>
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 1464px; transform: translate3d(0px, 0px, 0px);">
                                        <div data-id="1053294894"
                                            class="d-flex-column item-owl pd-left--15 slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide00"
                                            aria-describedby="slick-slide-control00">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT RTX 2050 other_Bảo hành 24 tháng chính hãng. screen_15.6&quot; FHD 144Hz chip_R5 7535HS vga_RTX 3050 011w ram_8GB DDR5 weight_2.3 kg pin_48Whr sd_512GB SSD hz_144Hz mh_15.6 inch cpu_Ryzen 5 frame_giá hot frame_BH 2 năm key_office 2019">
                                                    <a href="/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w"
                                                        title="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-36%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/xgeart-laptop-gaming-asus-tuf-a15-win11-thum_292a011e4ee54fc0bf3b94ab4cea6739_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/xgeart-laptop-gaming-asus-tuf-a15-win11-thum_292a011e4ee54fc0bf3b94ab4cea6739_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/xgeart-laptop-gaming-asus-tuf-a15-win11-thum_292a011e4ee54fc0bf3b94ab4cea6739_medium.jpg"
                                                            alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptop-asus-tuf-gaming-a15-fa506nc-hn011w.jpg-2_059dcfef49d847bdaab5309024e1b438_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/laptop-asus-tuf-gaming-a15-fa506nc-hn011w.jpg-2_059dcfef49d847bdaab5309024e1b438_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptop-asus-tuf-gaming-a15-fa506nc-hn011w.jpg-2_059dcfef49d847bdaab5309024e1b438_large.jpg"
                                                            alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                            alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w"
                                                            title="Laptop Asus TUF Gaming A15 FA506NC HN011W R5 7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11"
                                                            tabindex="0"> Laptop Asus TUF Gaming A15 FA506NC HN011W R5
                                                            7535HS/8GG/512GB/15.6 F 144Hz/RTX3050 4GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                16,890,000₫ </span>
                                                            <del class="compare-price">26,290,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="R5 7535HS">
                                                                <span>R5 7535HS</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="8GB DDR5">
                                                                <span>8GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 3050">
                                                                <span>RTX 3050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="1052806754"
                                            class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="1" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide01">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. 313SH G5 MF screen_15.6&quot; FHD 144Hz ram_16GB DDR4 vga_RTX 4050 chip_i5 12450H voucher_200k pin_54Whr weight_1.9 kg mh_15.6 inch hz_144Hz cpu_Intel Core i5 sd_512GB SSD frame_gigabyte VC 500K frame_BH 2 năm frame_Gigabyte-bộ-quà key_office 2019">
                                                    <a href="/products/laptop-gigabyte-g5-mf-f2vn313sh"
                                                        title="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-28%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_medium.png"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_33_grande.png?v=2316"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gigabyte-g5-mf-f2vn313sh?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gigabyte-g5-mf-f2vn313sh"
                                                            title="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                            tabindex="0"> Laptop Gaming Gigabyte G5 MF F2VN313SH i5
                                                            12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                19,390,000₫ </span>
                                                            <del class="compare-price">26,990,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i5 12450H">
                                                                <span>i5 12450H</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="16GB DDR4">
                                                                <span>16GB DDR4</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 4050">
                                                                <span>RTX 4050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="1052765399"
                                            class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="2" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide02">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. chip_i5 12450HX vga_RTX 3050 screen_15.6&quot; FHD 144Hz RVN 1RVN RTX 3050 ram_12GB DDR5 pin_60Whr weight_2.4 kg cpu_Intel Core i5 sd_512GB SSD mh_15.6 inch hz_144Hz frame_BH 2 năm key_office 2019">
                                                    <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001rvn"
                                                        title="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-11%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15iax9-83gs001rvnthum_44211c3ac9a04d3ba68bfa0dad344280_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15iax9-83gs001rvnthum_44211c3ac9a04d3ba68bfa0dad344280_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15iax9-83gs001rvnthum_44211c3ac9a04d3ba68bfa0dad344280_medium.png"
                                                            alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001rvn_cd8deef16ce249c888720c3ecdca34b7_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001rvn_cd8deef16ce249c888720c3ecdca34b7_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001rvn_cd8deef16ce249c888720c3ecdca34b7_large.png"
                                                            alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15iax9-83gs001rvn?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001rvn"
                                                            title="Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5 12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11"
                                                            tabindex="0"> Laptop Gaming Lenovo LOQ 15IAX9 83GS001RVN i5
                                                            12450HX/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11
                                                        </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                20,490,000₫ </span>
                                                            <del class="compare-price">22,990,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i5 12450HX">
                                                                <span>i5 12450HX</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="12GB DDR5">
                                                                <span>12GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 3050">
                                                                <span>RTX 3050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="1052751837"
                                            class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="3" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide03">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. chip_R5 7535HS ram_16GB DDR5 vga_RTX 4050 screen_15.6&quot; FHD 144Hz 131W pin_90WHrs weight_2.2 kg sale_giai_phong sd_1TB SSD hz_144Hz mh_15.6 inch cpu_Ryzen 5 frame_BH 2 năm frame_giá hot status_Chỉ bán online key_office 2019">
                                                    <a href="/products/laptop-gaming-asus-tuf-a15-fa507nu-lp131w"
                                                        title="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-22%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-asus-a15-fa507-thum_5c0612de82084fb681a253b17191c9db_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-asus-a15-fa507-thum_5c0612de82084fb681a253b17191c9db_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-asus-a15-fa507-thum_5c0612de82084fb681a253b17191c9db_medium.jpg"
                                                            alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptopgamingasustufa15fa507nu-lp131w_49f909367cd34d85935fb04b8f553568_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/laptopgamingasustufa15fa507nu-lp131w_49f909367cd34d85935fb04b8f553568_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptopgamingasustufa15fa507nu-lp131w_49f909367cd34d85935fb04b8f553568_large.png"
                                                            alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                            alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-asus-tuf-a15-fa507nu-lp131w?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-asus-tuf-a15-fa507nu-lp131w"
                                                            title="Laptop Gaming Asus TUF A15 FA507NU LP131W R5 7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                            tabindex="0"> Laptop Gaming Asus TUF A15 FA507NU LP131W R5
                                                            7535HS/16GB/1TB/15.6 F 144Hz/RTX4050 6GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                23,980,000₫ </span>
                                                            <del class="compare-price">30,590,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="R5 7535HS">
                                                                <span>R5 7535HS</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="16GB DDR5">
                                                                <span>16GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 4050">
                                                                <span>RTX 4050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="1052751712"
                                            class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="4" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide04">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. screen_15.6&quot; FHD 144Hz chip_i7 13620H ram_16GB DDR5 vga_RTX 4060 676VN weight_2.25 kg pin_53.5Whr fvga_1TB SSD fvga_Intel Core i7 fvga_RTX 4060 fvga_15.6 inch frame_BH 2 năm key_office 2019 deal_26.390.000đ">
                                                    <a href="/products/laptop-gaming-msi-katana-15-b13vfk-676vn"
                                                        title="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-13%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vfk-676vn-thum_ec7be8307d5946caa8cf677c21291008_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vfk-676vn-thum_ec7be8307d5946caa8cf677c21291008_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vfk-676vn-thum_ec7be8307d5946caa8cf677c21291008_medium.jpg"
                                                            alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/katana-13th-5_c375ac7a2fca41eb8458d62ab3d2239a_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/katana-13th-5_c375ac7a2fca41eb8458d62ab3d2239a_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/katana-13th-5_c375ac7a2fca41eb8458d62ab3d2239a_large.jpg"
                                                            alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-katana-15-b13vfk-676vn?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-msi-katana-15-b13vfk-676vn"
                                                            title="Laptop Gaming MSI Katana 15 B13VFK 676VN i7 13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11"
                                                            tabindex="0"> Laptop Gaming MSI Katana 15 B13VFK 676VN i7
                                                            13620H/16GB/1TB/15.6 FHD 144Hz/RTX4060 8GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                27,890,000₫ </span>
                                                            <del class="compare-price">31,990,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i7 13620H">
                                                                <span>i7 13620H</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="16GB DDR5">
                                                                <span>16GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 4060">
                                                                <span>RTX 4060</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="1052751195" class="d-flex-column item-owl pd-left--15 slick-slide"
                                            data-slick-index="5" aria-hidden="true" style="width: 244px;"
                                            tabindex="-1" role="tabpanel" id="slick-slide05"
                                            aria-describedby="slick-slide-control01">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR5 screen_15.6&quot; FHD 144Hz chip_i7 13620H vga_RTX 4050 252VN weight_2.25 kg pin_53.5Whr fvga_15.6 inch fvga_RTX 4050 fvga_Intel Core i7 fvga_512GB SSD fvga_144Hz fvga_8GB RAM sale_giai_phong frame_BH 2 năm frame_giá hot frame_mê euro2024 status_Chỉ bán online key_office 2019">
                                                    <a href="/products/laptop-gaming-msi-katana-15-b13vek-252vn"
                                                        title="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                        class="image-resize " tabindex="-1">
                                                        <div class="product-sale"><span>-19%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_medium.jpg"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-katana-15-b13vek-252vn?view=quickview-nochoose')"
                                                            type="button" tabindex="-1">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-msi-katana-15-b13vek-252vn"
                                                            title="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                            tabindex="-1"> Laptop Gaming MSI Katana 15 B13VEK 252VN i7
                                                            13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                23,290,000₫ </span>
                                                            <del class="compare-price">28,790,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i7 13620H">
                                                                <span>i7 13620H</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="8GB DDR5">
                                                                <span>8GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 4050">
                                                                <span>RTX 4050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>










                                <button type="button" class="slick-next slick-arrow custom-style" aria-label="Next"
                                    style="display: block;" aria-disabled="false"><span
                                        class="arrow-custom arrow-right">
                                        <div class="arrow-top"></div>
                                        <div class="arrow-bottom"></div>
                                    </span></button>
                                <ul class="slick-dots" style="display: block;" role="tablist">
                                    <li class="slick-active" role="presentation"><button type="button"
                                            role="tab" id="slick-slide-control00" aria-controls="slick-slide00"
                                            aria-label="1 of 2" tabindex="0" aria-selected="true"
                                            fdprocessedid="25luso">1</button></li>
                                    <li role="presentation"><button type="button" role="tab"
                                            id="slick-slide-control01" aria-controls="slick-slide05"
                                            aria-label="2 of 2" tabindex="-1">2</button></li>
                                </ul>
                                <div data-id="1052765384" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. vga_RTX 2050 ram_8GB DDR5 screen_15.6&quot; FHD 144Hz chip_i5 12450HX RTX 2050 promo_lenovo ofvn fvn weight_2.4 kg pin_60Whr hz_144Hz mh_15.6 inch cpu_Intel Core i5 sd_512GB SSD frame_BH 2 năm frame_mê euro2024 status_Chỉ bán online 0fvn key_office 2019">
                                            <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs000fvn"
                                                title="Laptop Gaming Lenovo LOQ 15IAX9 83GS000FVN i5 12450HX/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-32%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/thum-rgb_ccb9a470c6f24f99a2649701b925dd3f_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/thum-rgb_ccb9a470c6f24f99a2649701b925dd3f_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/thum-rgb_ccb9a470c6f24f99a2649701b925dd3f_medium.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000FVN i5 12450HX/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs000fvn_f6b049802bec4883ab722b38c7e6cf1a_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs000fvn_f6b049802bec4883ab722b38c7e6cf1a_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs000fvn_f6b049802bec4883ab722b38c7e6cf1a_large.png"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000FVN i5 12450HX/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000FVN i5 12450HX/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000FVN i5 12450HX/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15iax9-83gs000fvn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15iax9-83gs000fvn"
                                                    title="Laptop Gaming Lenovo LOQ 15IAX9 83GS000FVN i5 12450HX/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                    Laptop Gaming Lenovo LOQ 15IAX9 83GS000FVN i5 12450HX/8GB/512GB/15.6 FHD
                                                    144Hz/RTX2050 4GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        17,390,000₫ </span>
                                                    <del class="compare-price">25,690,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="i5 12450HX">
                                                        <span>i5 12450HX</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="8GB DDR5">
                                                        <span>8GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="RTX 2050">
                                                        <span>RTX 2050</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1052765387" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz chip_i5 12450HX vga_RTX 2050 SVN 1SVN RTX 2050 promo_lenovo ram_12GB DDR5 pin_60Whr weight_2.4 kg mh_15.6 inch sd_512GB SSD cpu_Intel Core i5 hz_144Hz frame_BH 2 năm frame_Nâng cấp 20GB RAM key_office 2019">
                                            <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn"
                                                title="{{ $product->name_product }}" class="image-resize ">
                                                <div class="product-sale"><span>-32%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_medium.png"
                                                    alt="{{ $product->name_product }}">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear1_61e207c9b4a3471b871c6c3298dad0c9_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear1_61e207c9b4a3471b871c6c3298dad0c9_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear1_61e207c9b4a3471b871c6c3298dad0c9_large.png"
                                                    alt="{{ $product->name_product }}">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="{{ $product->name_product }}">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_29_grande.png?v=2316"
                                                    alt="{{ $product->name_product }}">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="{{ $product->name_product }}">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn"
                                                    title="{{ $product->name_product }}">
                                                    Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN i5 12450HX/12GB/512GB/15.6
                                                    FHD 144Hz/RTX2050 4GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        17,590,000₫ </span>
                                                    <del class="compare-price">25,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="i5 12450HX">
                                                        <span>i5 12450HX</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="12GB DDR5">
                                                        <span>12GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="RTX 2050">
                                                        <span>RTX 2050</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1055474879" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="frame_BH 2 năm screen_15.6&quot; FHD 144Hz hz_144Hz other_Bảo hành 24 tháng chính hãng. weight_2.38 kg pin_63Whr ssd_512GB other_Đã bao gồm VAT vga_Geforce RTX 3050 6GB mh_15.6 inch ram_12GB DDR5 7HVN HVN chip_R5 7235HS key_office 2019 deal_19.790.000">
                                            <a href="/products/laptop-gaming-lenovo-loq-15arp9-83jc007hvn"
                                                title="Laptop Gaming Lenovo LOQ 15ARP9 83JC007HVN R5 7235HS/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-29%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc007hvn-thum_ac4ea830f7914ecf9e2546285913c81d_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc007hvn-thum_ac4ea830f7914ecf9e2546285913c81d_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc007hvn-thum_ac4ea830f7914ecf9e2546285913c81d_medium.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007HVN R5 7235HS/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc007hvn-1_109af62b5cd7485591fbecdd27668c98_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc007hvn-1_109af62b5cd7485591fbecdd27668c98_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc007hvn-1_109af62b5cd7485591fbecdd27668c98_large.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007HVN R5 7235HS/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007HVN R5 7235HS/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007HVN R5 7235HS/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15arp9-83jc007hvn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15arp9-83jc007hvn"
                                                    title="Laptop Gaming Lenovo LOQ 15ARP9 83JC007HVN R5 7235HS/12GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                    Laptop Gaming Lenovo LOQ 15ARP9 83JC007HVN R5 7235HS/12GB/512GB/15.6 FHD
                                                    144Hz/RTX3050 6GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        19,990,000₫ </span>
                                                    <del class="compare-price">27,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="R5 7235HS">
                                                        <span>R5 7235HS</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="12GB DDR5">
                                                        <span>12GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="Geforce RTX 3050 6GB">
                                                        <span>Geforce RTX 3050 6GB</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1053620641" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="vga_AMD Radeon other_Đã bao gồm VAT ram_16GB DDR5 chip_Z1 Extreme screen_8.8&quot; WQXGA 144Hz other_Bảo hành 24 tháng chính hãng.">
                                            <a href="/products/may-choi-game-lenovo-legion-go"
                                                title="Máy chơi game Lenovo Legion Go 8APU1 83E1004KVN"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-3%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/may-choi-game-lenovo-legion-go_96b42e353cd24a2191c27ed966de8318_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/may-choi-game-lenovo-legion-go_96b42e353cd24a2191c27ed966de8318_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/may-choi-game-lenovo-legion-go_96b42e353cd24a2191c27ed966de8318_medium.jpg"
                                                    alt="Máy chơi game Lenovo Legion Go 8APU1 83E1004KVN">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/may-choi-game-lenovo-legion-go-8.8-amd-ryzen-z1-extreme-16gb-512gb_f6186bc9fb4642efa24b4d766117c4dd_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/may-choi-game-lenovo-legion-go-8.8-amd-ryzen-z1-extreme-16gb-512gb_f6186bc9fb4642efa24b4d766117c4dd_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/may-choi-game-lenovo-legion-go-8.8-amd-ryzen-z1-extreme-16gb-512gb_f6186bc9fb4642efa24b4d766117c4dd_large.jpg"
                                                    alt="Máy chơi game Lenovo Legion Go 8APU1 83E1004KVN">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/may-choi-game-lenovo-legion-go?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a href="/products/may-choi-game-lenovo-legion-go"
                                                    title="Máy chơi game Lenovo Legion Go 8APU1 83E1004KVN"> Máy chơi game
                                                    Lenovo Legion Go 8APU1 83E1004KVN </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        21,290,000₫ </span>
                                                    <del class="compare-price">21,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="Z1 Extreme">
                                                        <span>Z1 Extreme</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="16GB DDR5">
                                                        <span>16GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="AMD Radeon">
                                                        <span>AMD Radeon</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="8.8" wqxga="" 144hz"="">
                                                        <span>8.8" WQXGA 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1054858343" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz weight_2.38 kg ssd_512GB frame_BH 2 năm mh_15.6 inch other_Bảo hành 24 tháng chính hãng. pin_63Whr ram_24GB DDR5 hz_144Hz vga_Geforce RTX 3050 6GB 7JVN hot frame_Lenovo-VC-300K chip_R5 7235HS key_office 2019">
                                            <a href="/products/laptop-gaming-lenovo-loq-15arp9-83jc007jvn"
                                                title="Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-21%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9xgear-1_thum_xgear_98f117c5f4164466a75ad92ea334340e_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9xgear-1_thum_xgear_98f117c5f4164466a75ad92ea334340e_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9xgear-1_thum_xgear_98f117c5f4164466a75ad92ea334340e_medium.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-83jc007jvn-xgear-6_db95392952ea4ec0bba44d927c23076a_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-83jc007jvn-xgear-6_db95392952ea4ec0bba44d927c23076a_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-83jc007jvn-xgear-6_db95392952ea4ec0bba44d927c23076a_large.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_17_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15arp9-83jc007jvn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15arp9-83jc007jvn"
                                                    title="Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD 144Hz/RTX3050 6GB/Win11">
                                                    Laptop Gaming Lenovo LOQ 15ARP9 83JC007JVN R5 7235HS/24GB/512GB/15.6 FHD
                                                    144Hz/RTX3050 6GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        21,990,000₫ </span>
                                                    <del class="compare-price">27,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="R5 7235HS">
                                                        <span>R5 7235HS</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="24GB DDR5">
                                                        <span>24GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="Geforce RTX 3050 6GB">
                                                        <span>Geforce RTX 3050 6GB</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1054552641" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="screen_15.6&quot; FHD 144Hz other_Đã bao gồm VAT ssd_512GB hz_144Hz other_Bảo hành 24 tháng chính hãng. mh_15.6 inch weight_2.38 kg pin_63Whr cpu_Ryzen 7 85VN vga_RTX 4050 3VVN frame_BH 2 năm ram_12GB DDR5 chip_R7 7435HS key_office 2019">
                                            <a href="/products/laptop-gaming-lenovo-loq-15arp9-83jc003vvn"
                                                title="Laptop Gaming Lenovo LOQ 15ARP9 83JC003VVN R7 7435HS /12GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-17%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003vvn-thum_34816c9b8d004af8acddc44a521432ae_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003vvn-thum_34816c9b8d004af8acddc44a521432ae_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003vvn-thum_34816c9b8d004af8acddc44a521432ae_medium.png"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003VVN R7 7435HS /12GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003vvn-14_5bc90baae53148feae1af436c77f2e68_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003vvn-14_5bc90baae53148feae1af436c77f2e68_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003vvn-14_5bc90baae53148feae1af436c77f2e68_large.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003VVN R7 7435HS /12GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003VVN R7 7435HS /12GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003VVN R7 7435HS /12GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15arp9-83jc003vvn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15arp9-83jc003vvn"
                                                    title="Laptop Gaming Lenovo LOQ 15ARP9 83JC003VVN R7 7435HS /12GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                    Laptop Gaming Lenovo LOQ 15ARP9 83JC003VVN R7 7435HS /12GB/512GB/15.6
                                                    FHD 144Hz/RTX4050 6GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        23,990,000₫ </span>
                                                    <del class="compare-price">28,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="R7 7435HS">
                                                        <span>R7 7435HS</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="12GB DDR5">
                                                        <span>12GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="RTX 4050">
                                                        <span>RTX 4050</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1052765388" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. chip_i5 12450HX screen_15.6&quot; FHD 144Hz ram_16GB DDR5 vga_RTX 4050 0RVN promo_lenovo RVN weight_2.4 kg pin_60Whr sale_giai_phong cpu_Intel Core i5 hz_144Hz mh_15.6 inch sd_512GB SSD frame_BH 2 năm frame_mê euro2024 key_office 2019">
                                            <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs000rvn"
                                                title="Laptop Gaming Lenovo LOQ 15IAX9 83GS000RVN i5 12450HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-9%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/thum-rgb_97c9e5478710453ea72377f18abc167b_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/thum-rgb_97c9e5478710453ea72377f18abc167b_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/thum-rgb_97c9e5478710453ea72377f18abc167b_medium.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000RVN i5 12450HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15irx983gs000rvn_a17029ab89fe49b6afbf20bdff26ac02_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15irx983gs000rvn_a17029ab89fe49b6afbf20bdff26ac02_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15irx983gs000rvn_a17029ab89fe49b6afbf20bdff26ac02_large.png"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000RVN i5 12450HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000RVN i5 12450HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS000RVN i5 12450HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15iax9-83gs000rvn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15iax9-83gs000rvn"
                                                    title="Laptop Gaming Lenovo LOQ 15IAX9 83GS000RVN i5 12450HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                    Laptop Gaming Lenovo LOQ 15IAX9 83GS000RVN i5 12450HX/16GB/512GB/15.6
                                                    FHD 144Hz/RTX4050 6GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        24,490,000₫ </span>
                                                    <del class="compare-price">26,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="i5 12450HX">
                                                        <span>i5 12450HX</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="16GB DDR5">
                                                        <span>16GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="RTX 4050">
                                                        <span>RTX 4050</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1054551796" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="3YVN chip_R7 7435HS vga_RTX 4060 screen_15.6&quot; FHD 144Hz mh_15.6 inch other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. cpu_Ryzen 7 ram_24GB DDR5 ssd_512GB hz_144Hz weight_2.38 kg pin_63Whr frame_giá hot frame_BH 2 năm frame_Lenovo-VC-300K key_office 2019 deal_27.590.000đ">
                                            <a href="/products/laptop-gaming-lenovo-loq-15arp9-83jc003yvn"
                                                title="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-15%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9xgear-1_thum_xgear_dc441204f19e491e939dea4ad3d429ea_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9xgear-1_thum_xgear_dc441204f19e491e939dea4ad3d429ea_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9xgear-1_thum_xgear_dc441204f19e491e939dea4ad3d429ea_medium.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003yvn-1_63786f4f561e4ed8a587d9b9c226baff_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003yvn-1_63786f4f561e4ed8a587d9b9c226baff_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-lenovo-loq-15arp9-83jc003yvn-1_63786f4f561e4ed8a587d9b9c226baff_large.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_17_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15arp9-83jc003yvn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15arp9-83jc003yvn"
                                                    title="Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD 144Hz/RTX4060 8GB/Win11">
                                                    Laptop Gaming Lenovo LOQ 15ARP9 83JC003YVN R7 7435HS/24GB/512GB/15.6 FHD
                                                    144Hz/RTX4060 8GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        27,890,000₫ </span>
                                                    <del class="compare-price">32,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="R7 7435HS">
                                                        <span>R7 7435HS</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="24GB DDR5">
                                                        <span>24GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="RTX 4060">
                                                        <span>RTX 4060</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div data-id="1053358462" class="d-flex-column item-owl pd-left--15">
                                    <div class="product-block item">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Đã bao gồm VAT chip_i7 13650HX screen_15.6&quot; FHD 144Hz vga_RTX 4050 6GB D5VN 5VN other_Bảo hành 24 tháng chính hãng. ram_16GB DDR5 pin_60Whr weight_2.38 kg sale_giai_phong sd_512GB SSD mh_15.6 inch cpu_Intel Core i7 hz_144Hz hot frame_giá hot frame_BH 2 năm frame_mê euro2024 key_office 2019">
                                            <a href="/products/laptop-gaming-lenovo-loq-15irx9-83dv00d5vn"
                                                title="Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-21%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/thum-rgb_22af2b7bcd1b495c8d12d43aa31c0c6a_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/thum-rgb_22af2b7bcd1b495c8d12d43aa31c0c6a_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/thum-rgb_22af2b7bcd1b495c8d12d43aa31c0c6a_medium.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/aminglenovoloq15iax983gs001rvn_87b38ada3a0a497fb28729959873bd53_master_c60bdda64e93418e923091c907d240ee_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/aminglenovoloq15iax983gs001rvn_87b38ada3a0a497fb28729959873bd53_master_c60bdda64e93418e923091c907d240ee_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/aminglenovoloq15iax983gs001rvn_87b38ada3a0a497fb28729959873bd53_master_c60bdda64e93418e923091c907d240ee_large.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                <img class="pproduct-frame"
                                                    src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                    alt="Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15irx9-83dv00d5vn?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15irx9-83dv00d5vn"
                                                    title="Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                    Laptop Gaming Lenovo LOQ 15IRX9 83DV00D5VN i7 13650HX/16GB/512GB/15.6
                                                    FHD 144Hz/RTX4050 6GB/Win11 </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        28,590,000₫ </span>
                                                    <del class="compare-price">35,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <div class="field-1">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                            alt="i7 13650HX">
                                                        <span>i7 13650HX</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                            alt="16GB DDR5">
                                                        <span>16GB DDR5</span>
                                                    </li>
                                                </div>
                                                <div class="field-2">
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                            alt="RTX 4050 6GB">
                                                        <span>RTX 4050 6GB</span>
                                                    </li>
                                                    <li>
                                                        <img width="32" height="32" loading="lazy"
                                                            fetchpriority="low" decoding="async"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                            alt="15.6" fhd="" 144hz"="">
                                                        <span>15.6" FHD 144Hz</span>
                                                    </li>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 order-mb-6 mg-top-30 mg-top-15-mb pd-right-0">
                    <div class="side-section d-none-button-mb" id="product-sider-seen">
                        <div class="bg-while">
                            <div class="top-title">
                                <h4 class="title-section">
                                    <span>Sản phẩm đã xem</span>
                                </h4>
                                <p></p>
                            </div>
                            <div class="special-product d-flex-slick mg-left--15 slick-callback slick-initialized slick-slider slick-dotted"
                                id="result-pd-seen" data-md="5" data-sm="3" data-xs="2"
                                data-slides-md="5" data-slides-tablet="3" data-slides-xs="2"
                                data-slides-md-scroll="5" data-slides-tablet-scroll="3" data-slides-xs-scroll="2"
                                data-dots="true" data-autoplay="false" data-infinite="false"
                                data-custom-arrows="true"><button type="button"
                                    class="slick-prev slick-arrow custom-style slick-disabled" aria-label="Previous"
                                    aria-disabled="true" style="display: block;"><span
                                        class="arrow-custom arrow-left">
                                        <div class="arrow-top"></div>
                                        <div class="arrow-bottom"></div>
                                    </span></button>
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 2440px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide30"
                                            aria-describedby="slick-slide-control30">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT">
                                                    <a href="/products/ban-phim-choi-game-co-e-dra-ek375-alpha"
                                                        title="Bàn phím chơi game cơ E-DRA EK375 - Alpha"
                                                        class="image-resize " tabindex="0">

                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/486_375a3_9fb7d41694434afba00403dcf35bdcb9_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/486_375a3_9fb7d41694434afba00403dcf35bdcb9_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/486_375a3_9fb7d41694434afba00403dcf35bdcb9_medium.jpg"
                                                            alt="Bàn phím chơi game cơ E-DRA EK375 - Alpha">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/486_375a1_40f7bfa3183f49c691dea8959741c8a8_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/486_375a1_40f7bfa3183f49c691dea8959741c8a8_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/486_375a1_40f7bfa3183f49c691dea8959741c8a8_large.jpg"
                                                            alt="Bàn phím chơi game cơ E-DRA EK375 - Alpha">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/ban-phim-choi-game-co-e-dra-ek375-alpha?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/ban-phim-choi-game-co-e-dra-ek375-alpha"
                                                            title="Bàn phím chơi game cơ E-DRA EK375 - Alpha"
                                                            tabindex="0"> Bàn phím chơi game cơ E-DRA EK375 - Alpha
                                                        </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                570,000₫ </span>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                        </div>
                                                        <div class="field-2">
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="1" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide31">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. 313SH G5 MF screen_15.6&quot; FHD 144Hz ram_16GB DDR4 vga_RTX 4050 chip_i5 12450H voucher_200k pin_54Whr weight_1.9 kg mh_15.6 inch hz_144Hz cpu_Intel Core i5 sd_512GB SSD frame_gigabyte VC 500K frame_BH 2 năm frame_Gigabyte-bộ-quà key_office 2019">
                                                    <a href="/products/laptop-gigabyte-g5-mf-f2vn313sh"
                                                        title="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-28%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/gigabye_g5_bebff32dc8244d358d8003d316af2e02_medium.png"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptopgaminggigabyteg5mf-f2vn313sh_64c8df901347462e9d3de98b0f7e3221_large.png"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_33_grande.png?v=2316"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gigabyte-g5-mf-f2vn313sh?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gigabyte-g5-mf-f2vn313sh"
                                                            title="Laptop Gaming Gigabyte G5 MF F2VN313SH i5 12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11"
                                                            tabindex="0"> Laptop Gaming Gigabyte G5 MF F2VN313SH i5
                                                            12450H/16GB/512GB/15.6 F 144Hz/RTX4050 6GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                19,390,000₫ </span>
                                                            <del class="compare-price">26,990,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i5 12450H">
                                                                <span>i5 12450H</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="16GB DDR4">
                                                                <span>16GB DDR4</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 4050">
                                                                <span>RTX 4050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="2" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide32">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="ram_8GB DDR4 other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz vga_RTX 3050 chip_i7 13620H weight_1.86 kg pin_52.4Whr fvga_15.6 inch fvga_512GB SSD fvga_Intel Core i7 fvga_RTX 3050 fvga_8GB RAM fvga_144Hz frame_Nâng cấp 16GB RAMLaptop other_Bảo hành 24 tháng chính hãng. key_office 2019 deal_18.790.000">
                                                    <a href="/products/laptop-gaming-msi-thin-15-b13uc-1411vn"
                                                        title="Laptop Gaming MSI Thin 15 B13UC 1411VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX3050 4GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-14%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptop_gaming_msi_thin__d892e3db849e4029a2ccfb700edfbc51_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/laptop_gaming_msi_thin__d892e3db849e4029a2ccfb700edfbc51_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptop_gaming_msi_thin__d892e3db849e4029a2ccfb700edfbc51_medium.jpg"
                                                            alt="Laptop Gaming MSI Thin 15 B13UC 1411VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX3050 4GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/24950_laptop_msi_thin_a15_b7uc_026vn_1_56ef6247bd9c4214bbac07bc00ef5ed5_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/24950_laptop_msi_thin_a15_b7uc_026vn_1_56ef6247bd9c4214bbac07bc00ef5ed5_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/24950_laptop_msi_thin_a15_b7uc_026vn_1_56ef6247bd9c4214bbac07bc00ef5ed5_large.jpg"
                                                            alt="Laptop Gaming MSI Thin 15 B13UC 1411VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX3050 4GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_32_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Thin 15 B13UC 1411VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX3050 4GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Thin 15 B13UC 1411VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX3050 4GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-thin-15-b13uc-1411vn?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-msi-thin-15-b13uc-1411vn"
                                                            title="Laptop Gaming MSI Thin 15 B13UC 1411VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX3050 4GB/Win11"
                                                            tabindex="0"> Laptop Gaming MSI Thin 15 B13UC 1411VN i7
                                                            13620H/8GB/512GB/15.6 FHD 144Hz/RTX3050 4GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                18,990,000₫ </span>
                                                            <del class="compare-price">21,990,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i7 13620H">
                                                                <span>i7 13620H</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="8GB DDR4">
                                                                <span>8GB DDR4</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 3050">
                                                                <span>RTX 3050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="3" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide33">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT ram_8GB DDR4 vga_RTX 2050 chip_i5 12450H screen_15.6&quot; FHD 144Hz weight_1.86 kg pin_52.4Whr fvga_512GB SSD fvga_144Hz fvga_15.6 inch fvga_8GB RAM fvga_RTX 2050 fvga_Intel Core i5 frame_Nâng cấp 16GB RAMLaptop other_Bảo hành 24 tháng chính hãng. key_office 2019 deal_14.790.000đ">
                                                    <a href="/products/laptop-gaming-msi-thin-15-b12ucx-1419vn"
                                                        title="Laptop Gaming MSI Thin 15 B12UCX 1419VN i5 12450H/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11"
                                                        class="image-resize " tabindex="0">

                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptop_gaming_msi_thin__84c8ddcb8885495cabcc869e7a666ed4_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/laptop_gaming_msi_thin__84c8ddcb8885495cabcc869e7a666ed4_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptop_gaming_msi_thin__84c8ddcb8885495cabcc869e7a666ed4_medium.jpg"
                                                            alt="Laptop Gaming MSI Thin 15 B12UCX 1419VN i5 12450H/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/24950_laptop_msi_thin_a15_b7uc_026vn_1__1__7b1a13cbb145466b8df8a06fe39346f5_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/24950_laptop_msi_thin_a15_b7uc_026vn_1__1__7b1a13cbb145466b8df8a06fe39346f5_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/24950_laptop_msi_thin_a15_b7uc_026vn_1__1__7b1a13cbb145466b8df8a06fe39346f5_large.jpg"
                                                            alt="Laptop Gaming MSI Thin 15 B12UCX 1419VN i5 12450H/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_32_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Thin 15 B12UCX 1419VN i5 12450H/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Thin 15 B12UCX 1419VN i5 12450H/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-thin-15-b12ucx-1419vn?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-msi-thin-15-b12ucx-1419vn"
                                                            title="Laptop Gaming MSI Thin 15 B12UCX 1419VN i5 12450H/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11"
                                                            tabindex="0"> Laptop Gaming MSI Thin 15 B12UCX 1419VN i5
                                                            12450H/8GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                14,890,000₫ </span>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i5 12450H">
                                                                <span>i5 12450H</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="8GB DDR4">
                                                                <span>8GB DDR4</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 2050">
                                                                <span>RTX 2050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                            data-slick-index="4" aria-hidden="false" style="width: 244px;"
                                            tabindex="0" role="tabpanel" id="slick-slide34">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT other_Bảo hành 12 tháng chính hãng. screen_16&quot; FHD 165Hz ram_8GB DDR5 vga_RTX 4050 chip_R5 7535HS R5M4 RTX 4050 weight_2.7 kg pin_57Whr cpu_Ryzen 5 mh_16 inch sd_512GB SSD hz_165Hz frame_gift AMD Hè vui key_office 2019">
                                                    <a href="/products/laptop-acer-nitro-16-phoenix-an16-41-r5m4"
                                                        title="Laptop Acer Nitro 16 Phoenix AN16 41 R5M4 R5 7535HS/8GB/512GB/16F 165Hz/RTX4050 6GB/Win11"
                                                        class="image-resize " tabindex="0">
                                                        <div class="product-sale"><span>-15%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptop-acer-nitro-16-phoenix-an16-41-r5m4_2e032c4df2e0478a8b32be1bce858374_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/laptop-acer-nitro-16-phoenix-an16-41-r5m4_2e032c4df2e0478a8b32be1bce858374_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptop-acer-nitro-16-phoenix-an16-41-r5m4_2e032c4df2e0478a8b32be1bce858374_medium.jpg"
                                                            alt="Laptop Acer Nitro 16 Phoenix AN16 41 R5M4 R5 7535HS/8GB/512GB/16F 165Hz/RTX4050 6GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptopacernitro16phoenixan16-41-r5m4_e42cb621bc9248bbad98fa783418e9cb_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/laptopacernitro16phoenixan16-41-r5m4_e42cb621bc9248bbad98fa783418e9cb_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptopacernitro16phoenixan16-41-r5m4_e42cb621bc9248bbad98fa783418e9cb_large.png"
                                                            alt="Laptop Acer Nitro 16 Phoenix AN16 41 R5M4 R5 7535HS/8GB/512GB/16F 165Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Acer Nitro 16 Phoenix AN16 41 R5M4 R5 7535HS/8GB/512GB/16F 165Hz/RTX4050 6GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-acer-nitro-16-phoenix-an16-41-r5m4?view=quickview-nochoose')"
                                                            type="button" tabindex="0">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-acer-nitro-16-phoenix-an16-41-r5m4"
                                                            title="Laptop Acer Nitro 16 Phoenix AN16 41 R5M4 R5 7535HS/8GB/512GB/16F 165Hz/RTX4050 6GB/Win11"
                                                            tabindex="0"> Laptop Acer Nitro 16 Phoenix AN16 41 R5M4 R5
                                                            7535HS/8GB/512GB/16F 165Hz/RTX4050 6GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                25,790,000₫ </span>
                                                            <del class="compare-price">30,490,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="R5 7535HS">
                                                                <span>R5 7535HS</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="8GB DDR5">
                                                                <span>8GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 4050">
                                                                <span>RTX 4050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="16" fhd="" 165hz"="">
                                                                <span>16" FHD 165Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide" data-slick-index="5"
                                            aria-hidden="true" style="width: 244px;" tabindex="-1" role="tabpanel"
                                            id="slick-slide35" aria-describedby="slick-slide-control31">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz chip_i5 12450HX vga_RTX 2050 SVN 1SVN RTX 2050 promo_lenovo ram_12GB DDR5 pin_60Whr weight_2.4 kg mh_15.6 inch sd_512GB SSD cpu_Intel Core i5 hz_144Hz frame_BH 2 năm frame_Nâng cấp 20GB RAM key_office 2019">
                                                    <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn"
                                                        title="{{ $product->name_product }}" class="image-resize "
                                                        tabindex="-1">
                                                        <div class="product-sale"><span>-32%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear_thum_ec73b3a6ad2348d3b9d3cd4a0dcaf236_medium.png"
                                                            alt="{{ $product->name_product }}">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear1_61e207c9b4a3471b871c6c3298dad0c9_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear1_61e207c9b4a3471b871c6c3298dad0c9_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15arp9-xgear1_61e207c9b4a3471b871c6c3298dad0c9_large.png"
                                                            alt="{{ $product->name_product }}">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="{{ $product->name_product }}">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_29_grande.png?v=2316"
                                                            alt="{{ $product->name_product }}">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="{{ $product->name_product }}">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn?view=quickview-nochoose')"
                                                            type="button" tabindex="-1">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn"
                                                            title="{{ $product->name_product }}" tabindex="-1"> Laptop
                                                            Gaming Lenovo LOQ 15IAX9 83GS001SVN i5
                                                            12450HX/12GB/512GB/15.6 FHD 144Hz/RTX2050 4GB/Win11
                                                        </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                17,590,000₫ </span>
                                                            <del class="compare-price">25,990,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i5 12450HX">
                                                                <span>i5 12450HX</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="12GB DDR5">
                                                                <span>12GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 2050">
                                                                <span>RTX 2050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide" data-slick-index="6"
                                            aria-hidden="true" style="width: 244px;" tabindex="-1" role="tabpanel"
                                            id="slick-slide36">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Bảo hành 36 tháng chính hãng. other_Đã bao gồm VAT sale_giai_phong">
                                                    <a href="/products/man-hinh-gaming-msi-g272qpf-e2-27-rapid-ips-wqhd-2k-180hz-1ms-gtg-119-srgb"
                                                        title="Màn hình Gaming MSI G274QPF E2 (27″/Rapid IPS/ WQHD 2K/ 180Hz/ 1ms GTG/ 119% sRGB)"
                                                        class="image-resize " tabindex="-1">
                                                        <div class="product-sale"><span>-7%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/1024__75__94a854da2c7d4923b9bdb37c5d864f66_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/1024__75__94a854da2c7d4923b9bdb37c5d864f66_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/1024__75__94a854da2c7d4923b9bdb37c5d864f66_medium.png"
                                                            alt="Màn hình Gaming MSI G274QPF E2 (27″/Rapid IPS/ WQHD 2K/ 180Hz/ 1ms GTG/ 119% sRGB)">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/1024__79__787d3fd4769542f7ad9f85024f1952fb_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/1024__79__787d3fd4769542f7ad9f85024f1952fb_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/1024__79__787d3fd4769542f7ad9f85024f1952fb_large.png"
                                                            alt="Màn hình Gaming MSI G274QPF E2 (27″/Rapid IPS/ WQHD 2K/ 180Hz/ 1ms GTG/ 119% sRGB)">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/man-hinh-gaming-msi-g272qpf-e2-27-rapid-ips-wqhd-2k-180hz-1ms-gtg-119-srgb?view=quickview-nochoose')"
                                                            type="button" tabindex="-1">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/man-hinh-gaming-msi-g272qpf-e2-27-rapid-ips-wqhd-2k-180hz-1ms-gtg-119-srgb"
                                                            title="Màn hình Gaming MSI G274QPF E2 (27″/Rapid IPS/ WQHD 2K/ 180Hz/ 1ms GTG/ 119% sRGB)"
                                                            tabindex="-1"> Màn hình Gaming MSI G274QPF E2 (27″/Rapid IPS/
                                                            WQHD 2K/ 180Hz/ 1ms GTG/ 119% sRGB) </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                6,990,000₫ </span>
                                                            <del class="compare-price">7,490,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                        </div>
                                                        <div class="field-2">
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide" data-slick-index="7"
                                            aria-hidden="true" style="width: 244px;" tabindex="-1" role="tabpanel"
                                            id="slick-slide37">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Đã bao gồm VAT other_Bảo hành 36 tháng chính hãng.">
                                                    <a href="/products/man-hinh-msi-g255f-24-5-ips-fullhd-180hz"
                                                        title="Màn hình MSI G255F (24.5″/ IPS/ FullHD/ 180Hz/ 1ms GTG/ 99% sRGB)"
                                                        class="image-resize " tabindex="-1">
                                                        <div class="product-sale"><span>-21%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/manhinhmsig255f-24.5-ips-fullhd-180hz-1msgtg-99-srgb-_2f1db47ad7674bae8c20feab6fbf05cf_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/manhinhmsig255f-24.5-ips-fullhd-180hz-1msgtg-99-srgb-_2f1db47ad7674bae8c20feab6fbf05cf_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/manhinhmsig255f-24.5-ips-fullhd-180hz-1msgtg-99-srgb-_2f1db47ad7674bae8c20feab6fbf05cf_medium.png"
                                                            alt="Màn hình MSI G255F (24.5″/ IPS/ FullHD/ 180Hz/ 1ms GTG/ 99% sRGB)">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/manhinhmsig255f-24.5-ips-fullhd-180hz-1msgtg-99-srgb-_5a298f087bbd49b39cf1ca644a4b2ccd_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/manhinhmsig255f-24.5-ips-fullhd-180hz-1msgtg-99-srgb-_5a298f087bbd49b39cf1ca644a4b2ccd_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/manhinhmsig255f-24.5-ips-fullhd-180hz-1msgtg-99-srgb-_5a298f087bbd49b39cf1ca644a4b2ccd_large.png"
                                                            alt="Màn hình MSI G255F (24.5″/ IPS/ FullHD/ 180Hz/ 1ms GTG/ 99% sRGB)">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/man-hinh-msi-g255f-24-5-ips-fullhd-180hz?view=quickview-nochoose')"
                                                            type="button" tabindex="-1">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/man-hinh-msi-g255f-24-5-ips-fullhd-180hz"
                                                            title="Màn hình MSI G255F (24.5″/ IPS/ FullHD/ 180Hz/ 1ms GTG/ 99% sRGB)"
                                                            tabindex="-1"> Màn hình MSI G255F (24.5″/ IPS/ FullHD/ 180Hz/
                                                            1ms GTG/ 99% sRGB) </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                3,150,000₫ </span>
                                                            <del class="compare-price">3,990,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                        </div>
                                                        <div class="field-2">
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide" data-slick-index="8"
                                            aria-hidden="true" style="width: 244px;" tabindex="-1" role="tabpanel"
                                            id="slick-slide38">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Bảo hành 36 tháng chính hãng. other_Đã bao gồm VAT frame_giá hot">
                                                    <a href="/products/man-hinh-philips-27m1n3200za-27-ips-fhd-1ms-165hz"
                                                        title="Màn hình Philips 27M1N3200ZA (27″ IPS FHD 1ms 165hz)"
                                                        class="image-resize " tabindex="-1">
                                                        <div class="product-sale"><span>-35%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/00za-27-ips-fhd-1ms-165hz-thum_1e1dbb53a66443338d7aead307b0a02f_master_c071fed1d9374129a996536bc87388d7_large.png"
                                                            data-src="//product.hstatic.net/200000837185/product/00za-27-ips-fhd-1ms-165hz-thum_1e1dbb53a66443338d7aead307b0a02f_master_c071fed1d9374129a996536bc87388d7_large.png"
                                                            data-mobile="//product.hstatic.net/200000837185/product/00za-27-ips-fhd-1ms-165hz-thum_1e1dbb53a66443338d7aead307b0a02f_master_c071fed1d9374129a996536bc87388d7_medium.png"
                                                            alt="Màn hình Philips 27M1N3200ZA (27″ IPS FHD 1ms 165hz)">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/72986_man_hinh_philips_27m1n3200za_850x850_1_c987aafb7e57440aa87bcc90ab4028e7_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/72986_man_hinh_philips_27m1n3200za_850x850_1_c987aafb7e57440aa87bcc90ab4028e7_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/72986_man_hinh_philips_27m1n3200za_850x850_1_c987aafb7e57440aa87bcc90ab4028e7_large.jpg"
                                                            alt="Màn hình Philips 27M1N3200ZA (27″ IPS FHD 1ms 165hz)">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                            alt="Màn hình Philips 27M1N3200ZA (27″ IPS FHD 1ms 165hz)">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/man-hinh-philips-27m1n3200za-27-ips-fhd-1ms-165hz?view=quickview-nochoose')"
                                                            type="button" tabindex="-1">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/man-hinh-philips-27m1n3200za-27-ips-fhd-1ms-165hz"
                                                            title="Màn hình Philips 27M1N3200ZA (27″ IPS FHD 1ms 165hz)"
                                                            tabindex="-1"> Màn hình Philips 27M1N3200ZA (27″ IPS FHD 1ms
                                                            165hz) </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                3,190,000₫ </span>
                                                            <del class="compare-price">4,890,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                        </div>
                                                        <div class="field-2">
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex-column item-owl pd-left--15 slick-slide" data-slick-index="9"
                                            aria-hidden="true" style="width: 244px;" tabindex="-1" role="tabpanel"
                                            id="slick-slide39">
                                            <div class="product-block item">
                                                <div class="product-img  has-hover"
                                                    data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR5 screen_15.6&quot; FHD 144Hz chip_i7 13620H vga_RTX 4050 252VN weight_2.25 kg pin_53.5Whr fvga_15.6 inch fvga_RTX 4050 fvga_Intel Core i7 fvga_512GB SSD fvga_144Hz fvga_8GB RAM sale_giai_phong frame_BH 2 năm frame_giá hot frame_mê euro2024 status_Chỉ bán online key_office 2019">
                                                    <a href="/products/laptop-gaming-msi-katana-15-b13vek-252vn"
                                                        title="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                        class="image-resize " tabindex="-1">
                                                        <div class="product-sale"><span>-19%</span></div>
                                                        <img class="lazyload dt-width-100 img-first bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/xgear-laptop-gaming-msi-katana-15-b13vek-252vn-thum_dc3c786073e24bc6a150f21a7440ddf6_medium.jpg"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                            width="260" height="260"
                                                            src="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                            data-src="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                            data-mobile="//product.hstatic.net/200000837185/product/katana-13th-5_a66307f9d805486187e1c882db24d021_large.jpg"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_6_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_3_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                        <img class="pproduct-frame"
                                                            src="//theme.hstatic.net/200000837185/1001221874/14/pproduct_frame_image_2_grande.png?v=2316"
                                                            alt="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11">
                                                    </a>
                                                    <div class="button-loop-pro hidden-xs hidden-sm">
                                                        <button class="btn-quickview"
                                                            onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-katana-15-b13vek-252vn?view=quickview-nochoose')"
                                                            type="button" tabindex="-1">
                                                            <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                                width="16" height="16" alt="Xem nhanh">
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <strong class="pro-name"><a
                                                            href="/products/laptop-gaming-msi-katana-15-b13vek-252vn"
                                                            title="Laptop Gaming MSI Katana 15 B13VEK 252VN i7 13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11"
                                                            tabindex="-1"> Laptop Gaming MSI Katana 15 B13VEK 252VN i7
                                                            13620H/8GB/512GB/15.6 FHD 144Hz/RTX4050 6GB/Win11 </a></strong>
                                                    <div class="d-flex js-between d-flex-center">
                                                        <ul class="list-variants d-flex d-flex-wrap image">
                                                        </ul>
                                                    </div>
                                                    <div class="box-pro-prices">
                                                        <p class="pro-price">
                                                            <span>
                                                                23,290,000₫ </span>
                                                            <del class="compare-price">28,790,000₫</del>
                                                        </p>
                                                    </div>
                                                    <ul class="hash-tag-loop">
                                                    </ul>
                                                    <ul class="config-tags">
                                                        <div class="field-1">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_1_icon.png?v=2316"
                                                                    alt="i7 13620H">
                                                                <span>i7 13620H</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_2_icon.png?v=2316"
                                                                    alt="8GB DDR5">
                                                                <span>8GB DDR5</span>
                                                            </li>
                                                        </div>
                                                        <div class="field-2">
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_4_icon.png?v=2316"
                                                                    alt="RTX 4050">
                                                                <span>RTX 4050</span>
                                                            </li>
                                                            <li>
                                                                <img width="32" height="32" loading="lazy"
                                                                    fetchpriority="low" decoding="async"
                                                                    src="//theme.hstatic.net/200000837185/1001221874/14/config_tags_image_5_icon.png?v=2316"
                                                                    alt="15.6" fhd="" 144hz"="">
                                                                <span>15.6" FHD 144Hz</span>
                                                            </li>
                                                        </div>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><button type="button" class="slick-next slick-arrow custom-style"
                                    aria-label="Next" style="display: block;" aria-disabled="false"><span
                                        class="arrow-custom arrow-right">
                                        <div class="arrow-top"></div>
                                        <div class="arrow-bottom"></div>
                                    </span></button>
                                <ul class="slick-dots" style="display: block;" role="tablist">
                                    <li class="slick-active" role="presentation"><button type="button"
                                            role="tab" id="slick-slide-control30" aria-controls="slick-slide30"
                                            aria-label="1 of 2" tabindex="0" aria-selected="true"
                                            fdprocessedid="jm7c">1</button></li>
                                    <li role="presentation"><button type="button" role="tab"
                                            id="slick-slide-control31" aria-controls="slick-slide35"
                                            aria-label="2 of 2" tabindex="-1">2</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <style>
            section#product-template {
                max-width: 1280px;
                margin: 0 auto;
            }

            .col-lg-9.col-md-9.col-sm-12.col-xs-12.order-mb-3.pd-right-0 {
                width: 100%;
            }

            .col-lg-3.col-md-3.col-sm-12.col-xs-12.order-mb-3.pd-right-0.mg-top-15-sm-xs {
                display: none;
            }

            .contents {
                display: flex;
            }

            @media screen and (max-width: 600px) {
                .contents {
                    flex-direction: column-reverse;
                }
            }

            .bg-countdown-product {
                width: 100%;
            }

            .count-down-index.d-flex.d-flex-center {
                display: flex;
                justify-content: space-between;
            }

            .tab-content-promotion table td {
                width: 15%;
            }

            .latest-articles {
                margin-top: 5px;
                background: white;
                padding: 10px;
                border-radius: 5px;
            }

            .latest-articles h2 {
                text-transform: uppercase;
                font-size: 17px;
                font-weight: bold;
                margin-bottom: 15px;
            }

            .list-news-latest .item-article {
                margin-bottom: 10px;
                width: 100%;
                flex: 0 0 100%;
            }

            .list-news-latest .item-article .post-image {
                width: 25%;
            }

            .list-news-latest .item-article .post-content {
                width: 70%;
                margin-left: 10px;
            }

            .list-news-latest .item-article .post-content .title-article-side {
                font-size: 14px;
                margin-bottom: 1px;
            }

            .list-news-latest .item-article .post-content .date {
                font-size: 12px;
            }

            #product-template .product-description-tab .max-height-ct,
            #product-template .product-parameter .max-height-ct.content-entry.add-height-img.max-height-ct.lazyload-addclass {
                height: 925px;
            }
        </style>
    </main>
@endsection
