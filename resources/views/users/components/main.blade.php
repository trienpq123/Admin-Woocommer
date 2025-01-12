@extends('users.index')
@section('main')
    <main>
        <h1 class="hidden">Xgear</h1>
        <section id="home-slider" class=" mg-0-mb">
            <div class="container pd-0-mb">
                <div class=" d-flex row-left-list">
                    {{-- @php
                dd($category)
            @endphp --}}
                    <x-user-nav :data="$category" />
                    <div class="col-md-12 col-xs-12 col-sm-12 mg-top-15 pd-right-0 mg-top-5-mb">
                        <div class=" d-flex-slick slick-banner ">
                            {{-- <button type="button" class="custom-style"> --}}
                            @if (count($banners) > 0)
                                @foreach ($banners as $item)
                                    <div>
                                        <a href="/collections/scar" title="{{ $item->title }}"
                                            tabindex="{{ $item->index }}">
                                            <img class="dt-width-100 lazyload bigloaded" width="1920" height="550"
                                                alt="{{ $item->title }}" src="{{ $item->link_img }}"
                                                data-src="{{ $item->link_img }}" data-mobile="{{ $item->link_img }}">
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- BANNER CATEGORY --}}
        @if (count($banners) > 0)
            <section data-include="section-banner-group" class="pd-top-15" id="section-banner-group">
                <div class="container">
                    <div class="bg-color-while">
                        <div class="d-flex row-left-list scroll-x-mb">
                            @foreach ($banners as $item)
                                <div class="item-banner">
                                    <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs000fvn">
                                        <img class="dt-width-100 lazyload bigloaded" width="400" height="200"
                                            src="{{ $item->link_img }}" data-src="{{ $item->link_img }}"
                                            alt="{{ $item->title }}">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{-- END BANNER --}}
        {{-- LIST CATEGORY --}}
        <section id="section-category" class="pd-top-30" data-include="section-category">
            <div class="container">
                <div class="bg-color-while">
                    <div id="category-banner" class="d-flex row-left-list scroll-x-mb scroll-x-tablet">
                        @if (count($listCategory) > 0)
                            @foreach ($listCategory as $item)
                                <div class="item banner-hover">
                                    <div class="box-cat">
                                        <a href="{{ env('BASE_URL') . '/category/' . $item->slug }}" class="img-cat">
                                            <img class="dt-width-100 lazyload bigloaded"
                                                data-src="{{ $item->image_category }}" src="{{ $item->image_category }}"
                                                width="110" height="110" alt="Laptop">
                                        </a>
                                        <div class="banner-content">
                                            <a href="{{ env('BASE_URL') . '/category/' . $item->slug }}">Laptop</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
        {{-- END LIST CATEGORY --}}
        {{-- TIME EVENT SALE  --}}
        <section id="section-flash-sale" class="pd-top-30" data-include="section-flash-sale">
            <div class="container">
                <div class="bg-flash-sale pd-flash-sale">
                    <div class="wd-top-title wd-heading-flash-sale d-flex d-flex-center js-between">
                        <h2 class="title-section mg-0">
                            <span><img width="30" height="13"
                                    src="https://file.hstatic.net/200000713019/file/flashsale-hot_6f59fac9870c4452bbed862ad7020f15.webp"
                                    alt="Sản phẩm khuyến mãi">Sản phẩm khuyến mãi</span>
                        </h2>
                        <div class="list-item-notify">
                            <ul class="list-product-suggess d-flex-slick text-center js-center slick-initialized slick-slider"
                                data-allin="1">
                                <div class="slick-list" style="padding: 0px 50px;">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 0px; transform: translate3d(170px, 0px, 0px);">
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <ul class="countdown-deal d-flex d-flex-center js-center">
                            <li><strong class="days">00</strong><small>Ngày</small></li>
                            <li><strong class="hours">09</strong><small>Giờ</small></li>
                            <li><strong class="minutes">09</strong><small>Phút</small></li>
                            <li><strong class="seconds">06</strong><small>Giây</small></li>
                        </ul>
                    </div>
                    <div id="owl-collection-flash-sale"
                        class="d-flex-slick slick-callback  left-dot-15 mg-top-15 mg-left--15 slick-initialized slick-slider slick-dotted"
                        data-md="5" data-xs="2" data-sm="3" data-slides-md="5" data-slides-tablet="3"
                        data-slides-xs="2" data-slides-md-scroll="5" data-slides-tablet-scroll="3" data-slides-xs-scroll="2"
                        data-dots="true" data-autoplay="false" data-infinite="true" data-custom-arrows="true">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 1115px; transform: translate3d(0px, 0px, 0px);">
                                <div class="d-flex-column item-owl pd-left--15 slick-slide slick-current slick-active"
                                    data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel"
                                    id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 223px;">
                                    <div class="product-block item item-fls" data-id="1052752033" data-stock-max="40"
                                        data-available="true" data-sold-quantity="">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR4 chip_i5 12450H screen_15.6&quot; FHD 144Hz vga_RTX 2050 841VN RTX 2050 voucher_100k">
                                            <a href="/products/laptop-gaming-msi-gf63-thin-12ucx-841vn"
                                                title="Laptop Gaming MSI GF63 Thin 12UCX 841VN" class="image-resize "
                                                tabindex="0">
                                                <div class="product-sale"><span>-23%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-gf63-thin-12ucx-841vn_92e01269182544feb02df6d975ec0f77_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-gf63-thin-12ucx-841vn_92e01269182544feb02df6d975ec0f77_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-msi-gf63-thin-12ucx-841vn_92e01269182544feb02df6d975ec0f77_medium.jpg"
                                                    alt="Laptop Gaming MSI GF63 Thin 12UCX 841VN">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptopgamingmsigf63thin12ucx841vn_f4a3b87b04af47868d0aedf3849afb39_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptopgamingmsigf63thin12ucx841vn_f4a3b87b04af47868d0aedf3849afb39_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgamingmsigf63thin12ucx841vn_f4a3b87b04af47868d0aedf3849afb39_large.png"
                                                    alt="Laptop Gaming MSI GF63 Thin 12UCX 841VN">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-gf63-thin-12ucx-841vn?view=quickview-nochoose')"
                                                    type="button" tabindex="0">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-msi-gf63-thin-12ucx-841vn"
                                                    title="Laptop Gaming MSI GF63 Thin 12UCX 841VN" tabindex="0">
                                                    Laptop Gaming MSI GF63 Thin 12UCX 841VN </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>14,990,000₫</span>
                                                    <del class="compare-price">19,362,500₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                                        alt="i5 12450H">
                                                    <span>i5 12450H</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                                        alt="8GB DDR4">
                                                    <span>8GB DDR4</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                                        alt="RTX 2050">
                                                    <span>RTX 2050</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                                        alt="15.6" fhd="" 144hz"="">
                                                    <span>15.6" FHD 144Hz</span>
                                                </li>
                                            </ul>
                                            <div class="fl_progressbar_group">
                                                <div class="fl_label"><img width="16" height="16"
                                                        alt="Flash sale"
                                                        src="https://file.hstatic.net/200000713019/file/flash-sale_a881187085374b689b2dff6b34de3083.png"><span>Đã
                                                        bán <b>11</b> sản phẩm</span></div>
                                                <div class="fl_progressbar">
                                                    <div class="fl_percent" style="width: 28%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                    data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel"
                                    id="slick-slide11" style="width: 223px;">
                                    <div class="product-block item item-fls" data-id="1052751426" data-stock-max="40"
                                        data-available="true" data-sold-quantity="">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT vga_RTX 3050 screen_15.6&quot; FHD 144Hz chip_i5 11400H ram_8GB DDR4 54MV RTX 3050 voucher_100k">
                                            <a href="/products/laptop-acer-nitro-5-an515-57-54mv"
                                                title="Laptop Gaming Acer Nitro 5 Eagle AN515 57 54MV / 553E"
                                                class="image-resize " tabindex="0">
                                                <div class="product-sale"><span>-34%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-nitro-5-eagle-an515-57-54mv_f99c3aed665f49a1b9065587e1c30929_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-nitro-5-eagle-an515-57-54mv_f99c3aed665f49a1b9065587e1c30929_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-acer-nitro-5-eagle-an515-57-54mv_f99c3aed665f49a1b9065587e1c30929_medium.jpg"
                                                    alt="Laptop Gaming Acer Nitro 5 Eagle AN515 57 54MV / 553E">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptopgamingacernitro5eaglean515-57-54mv_4a7f9aeba6be4f3a967bd114c6c20e29_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptopgamingacernitro5eaglean515-57-54mv_4a7f9aeba6be4f3a967bd114c6c20e29_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgamingacernitro5eaglean515-57-54mv_4a7f9aeba6be4f3a967bd114c6c20e29_large.png"
                                                    alt="Laptop Gaming Acer Nitro 5 Eagle AN515 57 54MV / 553E">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-acer-nitro-5-an515-57-54mv?view=quickview-nochoose')"
                                                    type="button" tabindex="0">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a href="/products/laptop-acer-nitro-5-an515-57-54mv"
                                                    title="Laptop Gaming Acer Nitro 5 Eagle AN515 57 54MV / 553E"
                                                    tabindex="0"> Laptop Gaming Acer Nitro 5 Eagle AN515 57 54MV
                                                    / 553E
                                                </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>16,590,000₫</span>
                                                    <del class="compare-price">24,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                                        alt="i5 11400H">
                                                    <span>i5 11400H</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                                        alt="8GB DDR4">
                                                    <span>8GB DDR4</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                                        alt="RTX 3050">
                                                    <span>RTX 3050</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                                        alt="15.6" fhd="" 144hz"="">
                                                    <span>15.6" FHD 144Hz</span>
                                                </li>
                                            </ul>
                                            <div class="fl_progressbar_group">
                                                <div class="fl_label"><img width="16" height="16"
                                                        alt="Flash sale"
                                                        src="https://file.hstatic.net/200000713019/file/flash-sale_a881187085374b689b2dff6b34de3083.png"><span>Đã
                                                        bán <b>19</b> sản phẩm</span></div>
                                                <div class="fl_progressbar">
                                                    <div class="fl_percent" style="width: 48%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                    data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel"
                                    id="slick-slide12" style="width: 223px;">
                                    <div class="product-block item item-fls" data-id="1052765387" data-stock-max="40"
                                        data-available="true" data-sold-quantity="">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz chip_i5 12450HX vga_RTX 2050 SVN 1SVN RTX 2050 promo_lenovo ram_12GB DDR5">
                                            <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn"
                                                title="Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN" class="image-resize "
                                                tabindex="0">
                                                <div class="product-sale"><span>-32%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15irx9-83gs000rvn_a89858de8f1940e0bb8cfb3d21a43710_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15irx9-83gs000rvn_a89858de8f1940e0bb8cfb3d21a43710_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-lenovo-loq-15irx9-83gs000rvn_a89858de8f1940e0bb8cfb3d21a43710_medium.jpg"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001svn_06db8759fb094732945ae31f68173c72_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001svn_06db8759fb094732945ae31f68173c72_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgaminglenovoloq15iax983gs001svn_06db8759fb094732945ae31f68173c72_large.png"
                                                    alt="Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn?view=quickview-nochoose')"
                                                    type="button" tabindex="0">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-lenovo-loq-15iax9-83gs001svn"
                                                    title="Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN" tabindex="0">
                                                    Laptop Gaming Lenovo LOQ 15IAX9 83GS001SVN </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>17,790,000₫</span>
                                                    <del class="compare-price">25,990,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                                        alt="i5 12450HX">
                                                    <span>i5 12450HX</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                                        alt="12GB DDR5">
                                                    <span>12GB DDR5</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                                        alt="RTX 2050">
                                                    <span>RTX 2050</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                                        alt="15.6" fhd="" 144hz"="">
                                                    <span>15.6" FHD 144Hz</span>
                                                </li>
                                            </ul>
                                            <div class="fl_progressbar_group">
                                                <div class="fl_label"><img width="16" height="16"
                                                        alt="Flash sale"
                                                        src="https://file.hstatic.net/200000713019/file/flash-sale_a881187085374b689b2dff6b34de3083.png"><span>Đã
                                                        bán <b>14</b> sản phẩm</span></div>
                                                <div class="fl_progressbar">
                                                    <div class="fl_percent" style="width: 35%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                    data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel"
                                    id="slick-slide13" style="width: 223px;">
                                    <div class="product-block item item-fls" data-id="1053294894" data-stock-max="40"
                                        data-available="true" data-sold-quantity="">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Đã bao gồm VAT RTX 2050 other_Bảo hành 24 tháng chính hãng. screen_15.6&quot; FHD 144Hz chip_R5 7535HS vga_RTX 3050 011w ram_8GB DDR5">
                                            <a href="/products/laptop-asus-tuf-gaming-a15-fa506nc-hn011w"
                                                title="Laptop Asus TUF Gaming A15 FA506NC HN011W" class="image-resize "
                                                tabindex="0">
                                                <div class="product-sale"><span>-29%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/gamingasustuff15fx506hf-hn078w_03d9a7a4f38c43528846d034c0e2a5d0_master_14cdbc463b504fe5815847d0b5f59490_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/gamingasustuff15fx506hf-hn078w_03d9a7a4f38c43528846d034c0e2a5d0_master_14cdbc463b504fe5815847d0b5f59490_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/gamingasustuff15fx506hf-hn078w_03d9a7a4f38c43528846d034c0e2a5d0_master_14cdbc463b504fe5815847d0b5f59490_medium.jpg"
                                                    alt="Laptop Asus TUF Gaming A15 FA506NC HN011W">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/gamingasustuff15fx506hf-hn078w_57a6188212aa4f89b206591c60a6220d_master_44c5546a193b4d0f8c5433cb916ea092_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/gamingasustuff15fx506hf-hn078w_57a6188212aa4f89b206591c60a6220d_master_44c5546a193b4d0f8c5433cb916ea092_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/gamingasustuff15fx506hf-hn078w_57a6188212aa4f89b206591c60a6220d_master_44c5546a193b4d0f8c5433cb916ea092_large.jpg"
                                                    alt="Laptop Asus TUF Gaming A15 FA506NC HN011W">
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
                                                    title="Laptop Asus TUF Gaming A15 FA506NC HN011W" tabindex="0">
                                                    Laptop Asus TUF Gaming A15 FA506NC HN011W </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>18,690,000₫</span>
                                                    <del class="compare-price">26,237,500₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                                        alt="R5 7535HS">
                                                    <span>R5 7535HS</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                                        alt="8GB DDR5">
                                                    <span>8GB DDR5</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                                        alt="RTX 3050">
                                                    <span>RTX 3050</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                                        alt="15.6" fhd="" 144hz"="">
                                                    <span>15.6" FHD 144Hz</span>
                                                </li>
                                            </ul>
                                            <div class="fl_progressbar_group">
                                                <div class="fl_label"><img width="16" height="16"
                                                        alt="Flash sale"
                                                        src="https://file.hstatic.net/200000713019/file/flash-sale_a881187085374b689b2dff6b34de3083.png"><span>Đã
                                                        bán <b>16</b> sản phẩm</span></div>
                                                <div class="fl_progressbar">
                                                    <div class="fl_percent" style="width: 40%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex-column item-owl pd-left--15 slick-slide slick-active"
                                    data-slick-index="4" aria-hidden="false" tabindex="0" role="tabpanel"
                                    id="slick-slide14" style="width: 223px;">
                                    <div class="product-block item item-fls" data-id="1052751750" data-stock-max="40"
                                        data-available="true" data-sold-quantity="">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. screen_15.6&quot; FHD 144Hz ram_8GB DDR5 chip_i7 12650H vga_RTX 4060 267VN voucher_500k">
                                            <a href="/products/laptop-gaming-msi-cyborg-15-a12vf-267vn"
                                                title="Laptop Gaming MSI Cyborg 15 A12VF 267VN" class="image-resize "
                                                tabindex="0">
                                                <div class="product-sale"><span>-25%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-cyborg-15-a12vf-267vn_f760a50ce7b3475d94ad98e1c09ee6ec_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-cyborg-15-a12vf-267vn_f760a50ce7b3475d94ad98e1c09ee6ec_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-msi-cyborg-15-a12vf-267vn_f760a50ce7b3475d94ad98e1c09ee6ec_medium.jpg"
                                                    alt="Laptop Gaming MSI Cyborg 15 A12VF 267VN">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/cyborg-12th-1_c77dea17c5d24a039b0ab3bf727fd078_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/cyborg-12th-1_c77dea17c5d24a039b0ab3bf727fd078_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/cyborg-12th-1_c77dea17c5d24a039b0ab3bf727fd078_large.jpg"
                                                    alt="Laptop Gaming MSI Cyborg 15 A12VF 267VN">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-cyborg-15-a12vf-267vn?view=quickview-nochoose')"
                                                    type="button" tabindex="0">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-msi-cyborg-15-a12vf-267vn"
                                                    title="Laptop Gaming MSI Cyborg 15 A12VF 267VN" tabindex="0">
                                                    Laptop Gaming MSI Cyborg 15 A12VF 267VN </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>22,990,000₫</span>
                                                    <del class="compare-price">30,490,000₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                                        alt="i7 12650H">
                                                    <span>i7 12650H</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                                        alt="8GB DDR5">
                                                    <span>8GB DDR5</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                                        alt="RTX 4060">
                                                    <span>RTX 4060</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                                        alt="15.6" fhd="" 144hz"="">
                                                    <span>15.6" FHD 144Hz</span>
                                                </li>
                                            </ul>
                                            <div class="fl_progressbar_group">
                                                <div class="fl_label"><img width="16" height="16"
                                                        alt="Flash sale"
                                                        src="https://file.hstatic.net/200000713019/file/flash-sale_a881187085374b689b2dff6b34de3083.png"><span>Đã
                                                        bán <b>37</b> sản phẩm</span></div>
                                                <div class="fl_progressbar">
                                                    <div class="fl_percent" style="width: 93%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="slick-dots" role="tablist">
                            <li class="slick-active" role="presentation"><button type="button" role="tab"
                                    id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 1"
                                    tabindex="0" aria-selected="true">1</button></li>
                        </ul>
                    </div>
                    <div class="text-center btn-view-all">
                        <a class="btn" href="/collections/san-pham-khuyen-mai">
                            Xem tất cả »
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- END TIME EVENT SALE --}}

        <section class="section_collection_group pd-top-30" data-include="section-collection-group-1">
            <div class="container">
                @if (count($catProduct) > 0)
                    @foreach ($catProduct as $item)
                        <div class="bg-color-while">
                            <div class="wd-top-title d-flex d-flex-center js-between">
                                <h2 class="title-section">
                                    <span>{{ $item->name_category }}</span>
                                </h2>

                                @if (count($item->category) > 0)
                                    <ul class="menu-col d-flex scroll-x-mb scroll-x-tablet">
                                        @foreach ($item->category as $cate)
                                            <li><a
                                                    href="{{ env('BASE_URL') . '/category/' . $cate->slug }}">{{ $cate->name_category }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div class="d-flex d-flex-wrap row-left-list">
                                @if (count($item->product) > 0)
                                    @foreach ($item->product as $product)
                                        {{-- <div
                                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                                    <div class="product-block item loop-border">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz ram_8GB DDR4 chip_R5 5500U vga_GTX 1650 R05G GTX 1650">
                                            <a href="/products/laptop-gaming-acer-aspire-7-a715-42g-r05g"
                                                title="Laptop Gaming Acer Aspire 7 A715 42G R05G"
                                                class="image-resize ">
                                                <div class="product-sale"><span>-37%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_medium.jpg"
                                                    alt="Laptop Gaming Acer Aspire 7 A715 42G R05G">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
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
                                            <strong class="pro-name"><a
                                                    href="/products/laptop-gaming-acer-aspire-7-a715-42g-r05g"
                                                    title="Laptop Gaming Acer Aspire 7 A715 42G R05G">{{ $product->name_product }}</a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                @php
                                                    $variants = $product->variants;
                                                    // dd($variants);
                                                    $price = null;
                                                    $PriceProductDiscount = null;
                                                    foreach ($variants as $key => $value) {
                                                        if ($value['price'] > 0) {
                                                            if (
                                                                $price === null ||
                                                                $value['price'] < $price
                                                            ) {
                                                                $PriceProductDiscount = $value['price'];
                                                                $price = $value['price_old'];
                                                            }
                                                        }
                                                        
                                                    }
                                                @endphp
                                                <p class="pro-price">
                                                    @if (isset($price) && $price > 0)
                                                        <span>
                                                            {{ number_format($price, 0, ',', ',') }}₫ </span>
                                                        <del
                                                            class="compare-price">{{ number_format($PriceProductDiscount, 0, ',', ',') }}₫</del>
                                                    @endif
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                                        alt="R5 5500U">
                                                    <span>R5 5500U</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                                        alt="8GB DDR4">
                                                    <span>8GB DDR4</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                                        alt="GTX 1650">
                                                    <span>GTX 1650</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                                        alt="15.6" fhd="" 144hz"="">
                                                    <span>15.6" FHD 144Hz</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                                        <x-product-item :data="$product" />
                                    @endforeach
                                @endif
                                <div
                                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                                    <div class="product-block item loop-border">
                                        <div class="product-img  has-hover"
                                            data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR4 screen_14&quot; FHD 60Hz chip_i5 1335U vga_Iris Xe Graphics 438VN Iris Xe Graphics">
                                            <a href="/products/laptop-msi-modern-15-b13m-i5"
                                                title="Laptop MSI Modern 15 B13M 438VN" class="image-resize ">
                                                <div class="product-sale"><span>-21%</span></div>
                                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                                    height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptop-msi-modern-15-b13m-438vn_bfde7f349ff34c33bbc97bf3f0405453_large.jpg"
                                                    data-src="//product.hstatic.net/200000837185/product/laptop-msi-modern-15-b13m-438vn_bfde7f349ff34c33bbc97bf3f0405453_large.jpg"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-msi-modern-15-b13m-438vn_bfde7f349ff34c33bbc97bf3f0405453_medium.jpg"
                                                    alt="Laptop MSI Modern 15 B13M 438VN">
                                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                                    width="260" height="260"
                                                    src="//product.hstatic.net/200000837185/product/laptopmsimodern15b13m438vn_8a172eb1758647c0bb9cf3573c70a2eb_large.png"
                                                    data-src="//product.hstatic.net/200000837185/product/laptopmsimodern15b13m438vn_8a172eb1758647c0bb9cf3573c70a2eb_large.png"
                                                    data-mobile="//product.hstatic.net/200000837185/product/laptopmsimodern15b13m438vn_8a172eb1758647c0bb9cf3573c70a2eb_large.png"
                                                    alt="Laptop MSI Modern 15 B13M 438VN">
                                            </a>
                                            <div class="button-loop-pro hidden-xs hidden-sm">
                                                <button class="btn-quickview"
                                                    onclick="window.wd.scofield.quickview('/products/laptop-msi-modern-15-b13m-i5?view=quickview-nochoose')"
                                                    type="button">
                                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                                        width="16" height="16" alt="Xem nhanh">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <strong class="pro-name"><a href="/products/laptop-msi-modern-15-b13m-i5"
                                                    title="Laptop MSI Modern 15 B13M 438VN"> Laptop MSI Modern 15
                                                    B13M
                                                    438VN
                                                </a></strong>
                                            <div class="d-flex js-between d-flex-center">
                                                <ul class="list-variants d-flex d-flex-wrap image">
                                                </ul>
                                            </div>
                                            <div class="box-pro-prices">
                                                <p class="pro-price">
                                                    <span>
                                                        13,790,000₫ </span>
                                                    <del class="compare-price">17,487,500₫</del>
                                                </p>
                                            </div>
                                            <ul class="hash-tag-loop">
                                            </ul>
                                            <ul class="config-tags">
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                                        alt="i5 1335U">
                                                    <span>i5 1335U</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                                        alt="8GB DDR4">
                                                    <span>8GB DDR4</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                                        alt="Iris Xe Graphics">
                                                    <span>Iris Xe Graphics</span>
                                                </li>
                                                <li>
                                                    <img width="32" height="32" loading="lazy"
                                                        fetchpriority="low" decoding="async"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                                        alt="14" fhd="" 60hz"="">
                                                    <span>14" FHD 60Hz</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR4 chip_i5 12450H screen_15.6&quot; FHD 144Hz vga_RTX 2050 841VN RTX 2050 voucher_100k">
                            <a href="/products/laptop-gaming-msi-gf63-thin-12ucx-841vn"
                                title="Laptop Gaming MSI GF63 Thin 12UCX 841VN" class="image-resize ">
                                <div class="product-sale"><span>-23%</span></div>
                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-gf63-thin-12ucx-841vn_92e01269182544feb02df6d975ec0f77_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-gf63-thin-12ucx-841vn_92e01269182544feb02df6d975ec0f77_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-msi-gf63-thin-12ucx-841vn_92e01269182544feb02df6d975ec0f77_medium.jpg"
                                    alt="Laptop Gaming MSI GF63 Thin 12UCX 841VN">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/laptopgamingmsigf63thin12ucx841vn_f4a3b87b04af47868d0aedf3849afb39_large.png"
                                    data-src="//product.hstatic.net/200000837185/product/laptopgamingmsigf63thin12ucx841vn_f4a3b87b04af47868d0aedf3849afb39_large.png"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgamingmsigf63thin12ucx841vn_f4a3b87b04af47868d0aedf3849afb39_large.png"
                                    alt="Laptop Gaming MSI GF63 Thin 12UCX 841VN">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-gf63-thin-12ucx-841vn?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-gaming-msi-gf63-thin-12ucx-841vn"
                                    title="Laptop Gaming MSI GF63 Thin 12UCX 841VN"> Laptop Gaming MSI GF63
                                    Thin
                                    12UCX 841VN </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        14,990,000₫ </span>
                                    <del class="compare-price">19,362,500₫</del>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="i5 12450H">
                                    <span>i5 12450H</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="8GB DDR4">
                                    <span>8GB DDR4</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt="RTX 2050">
                                    <span>RTX 2050</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" 144hz"="">
                                    <span>15.6" FHD 144Hz</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT chip_R5 7535HS screen_15.6&quot; FHD 144Hz vga_ RX6550M ram_16GB DDR5 010VN">
                            <a href="/products/laptop-gaming-msi-bravo-15-b7ed-010vn"
                                title="Laptop Gaming MSI Bravo 15 B7ED 010VN" class="image-resize ">
                                <div class="product-sale"><span>-23%</span></div>
                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/laptopgamingmsibravo15b7ed010vn_3a69315f74c5460087c825e3c377c4f7_large.png"
                                    data-src="//product.hstatic.net/200000837185/product/laptopgamingmsibravo15b7ed010vn_3a69315f74c5460087c825e3c377c4f7_large.png"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgamingmsibravo15b7ed010vn_3a69315f74c5460087c825e3c377c4f7_medium.png"
                                    alt="Laptop Gaming MSI Bravo 15 B7ED 010VN">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/laptopgamingmsibravo15b7ed010vn_bdf59fdd13af48f692504cac5b5cfc2f_large.png"
                                    data-src="//product.hstatic.net/200000837185/product/laptopgamingmsibravo15b7ed010vn_bdf59fdd13af48f692504cac5b5cfc2f_large.png"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgamingmsibravo15b7ed010vn_bdf59fdd13af48f692504cac5b5cfc2f_large.png"
                                    alt="Laptop Gaming MSI Bravo 15 B7ED 010VN">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-bravo-15-b7ed-010vn?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-gaming-msi-bravo-15-b7ed-010vn"
                                    title="Laptop Gaming MSI Bravo 15 B7ED 010VN"> Laptop Gaming MSI Bravo
                                    15 B7ED
                                    010VN </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        15,490,000₫ </span>
                                    <del class="compare-price">19,987,500₫</del>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="R5 7535HS">
                                    <span>R5 7535HS</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="16GB DDR5">
                                    <span>16GB DDR5</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt=" RX6550M">
                                    <span> RX6550M</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" 144hz"="">
                                    <span>15.6" FHD 144Hz</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="other_Đã bao gồm VAT other_Bảo hành 12 tháng chính hãng. vga_RTX 2050 screen_15.6&quot; FHD 60Hz ram_8GB DDR4 chip_i5 13420H 53PZ RTX 2050 voucher_100k">
                            <a href="/products/laptop-gaming-acer-aspire-5-a515-58gm-53pz"
                                title="Laptop Gaming Acer Aspire 5 A515 58GM 53PZ" class="image-resize ">
                                <div class="product-sale"><span>-29%</span></div>
                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-5-a515-58gm-53pz_a04d1c8814eb4e18a5ed0ec6a3a9ba99_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-5-a515-58gm-53pz_a04d1c8814eb4e18a5ed0ec6a3a9ba99_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-5-a515-58gm-53pz_a04d1c8814eb4e18a5ed0ec6a3a9ba99_medium.jpg"
                                    alt="Laptop Gaming Acer Aspire 5 A515 58GM 53PZ">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/acer-gaming-aspire-5-2023-a515-58gm-1_ecb9cfc9ec84409baa3e754c0c487a81_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/acer-gaming-aspire-5-2023-a515-58gm-1_ecb9cfc9ec84409baa3e754c0c487a81_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/acer-gaming-aspire-5-2023-a515-58gm-1_ecb9cfc9ec84409baa3e754c0c487a81_large.jpg"
                                    alt="Laptop Gaming Acer Aspire 5 A515 58GM 53PZ">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-acer-aspire-5-a515-58gm-53pz?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-gaming-acer-aspire-5-a515-58gm-53pz"
                                    title="Laptop Gaming Acer Aspire 5 A515 58GM 53PZ"> Laptop Gaming Acer
                                    Aspire
                                    5 A515 58GM 53PZ </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        15,590,000₫ </span>
                                    <del class="compare-price">21,990,000₫</del>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="i5 13420H">
                                    <span>i5 13420H</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="8GB DDR4">
                                    <span>8GB DDR4</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt="RTX 2050">
                                    <span>RTX 2050</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" 60hz"="">
                                    <span>15.6" FHD 60Hz</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR4 vga_RTX 2050 chip_i5 13420H screen_15.6&quot; FHD 60Hz 59LJ RTX 2050">
                            <a href="/products/laptop-gaming-acer-aspire-5-a515-58gm-59lj"
                                title="Laptop Gaming Acer Aspire 5 A515 58GM 59LJ"
                                class="image-resize ">
                                <div class="product-sale"><span>-24%</span></div>
                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/laptop-acer-gaming-aspire-5-a515-58gm-59lj_35a6f820a1124a3d987a88b28684c06d_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/laptop-acer-gaming-aspire-5-a515-58gm-59lj_35a6f820a1124a3d987a88b28684c06d_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-acer-gaming-aspire-5-a515-58gm-59lj_35a6f820a1124a3d987a88b28684c06d_medium.jpg"
                                    alt="Laptop Gaming Acer Aspire 5 A515 58GM 59LJ">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/acer-gaming-aspire-5-2023-a515-58gm-1_e7aa3ec1f51645e297bff7d7f3afb1a5_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/acer-gaming-aspire-5-2023-a515-58gm-1_e7aa3ec1f51645e297bff7d7f3afb1a5_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/acer-gaming-aspire-5-2023-a515-58gm-1_e7aa3ec1f51645e297bff7d7f3afb1a5_large.jpg"
                                    alt="Laptop Gaming Acer Aspire 5 A515 58GM 59LJ">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-acer-aspire-5-a515-58gm-59lj?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-gaming-acer-aspire-5-a515-58gm-59lj"
                                    title="Laptop Gaming Acer Aspire 5 A515 58GM 59LJ"> Laptop Gaming Acer
                                    Aspire
                                    5 A515 58GM 59LJ </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        15,590,000₫ </span>
                                    <del class="compare-price">20,490,000₫</del>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="i5 13420H">
                                    <span>i5 13420H</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="8GB DDR4">
                                    <span>8GB DDR4</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt="RTX 2050">
                                    <span>RTX 2050</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" 60hz"="">
                                    <span>15.6" FHD 60Hz</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. ram_8GB DDR4 vga_RTX 2050 screen_15.6&quot; FHD 144Hz chip_i5 11400H 014w RTX 2050">
                            <a href="/products/laptop-gaming-asus-tuf-f15-fx506hf-hn014w"
                                title="Laptop Gaming Asus TUF F15 FX506HF HN014W" class="image-resize ">
                                <div class="product-sale"><span>-22%</span></div>
                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-asus-tuf-f15-fx506hf-hn014w_63bf0172230143c8bd394df446256b7e_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-asus-tuf-f15-fx506hf-hn014w_63bf0172230143c8bd394df446256b7e_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-asus-tuf-f15-fx506hf-hn014w_63bf0172230143c8bd394df446256b7e_medium.jpg"
                                    alt="Laptop Gaming Asus TUF F15 FX506HF HN014W">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/laptopgamingasustuff15fx506hf-hn014w_a7eb100964e94fa1ab5a13188e9c6f76_large.png"
                                    data-src="//product.hstatic.net/200000837185/product/laptopgamingasustuff15fx506hf-hn014w_a7eb100964e94fa1ab5a13188e9c6f76_large.png"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptopgamingasustuff15fx506hf-hn014w_a7eb100964e94fa1ab5a13188e9c6f76_large.png"
                                    alt="Laptop Gaming Asus TUF F15 FX506HF HN014W">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-asus-tuf-f15-fx506hf-hn014w?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-gaming-asus-tuf-f15-fx506hf-hn014w"
                                    title="Laptop Gaming Asus TUF F15 FX506HF HN014W"> Laptop Gaming Asus
                                    TUF F15
                                    FX506HF HN014W </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        15,690,000₫ </span>
                                    <del class="compare-price">19,987,500₫</del>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="i5 11400H">
                                    <span>i5 11400H</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="8GB DDR4">
                                    <span>8GB DDR4</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt="RTX 2050">
                                    <span>RTX 2050</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" 144hz"="">
                                    <span>15.6" FHD 144Hz</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR4 chip_i7 11800H vga_RTX 3050 screen_15.6&quot; FHD 144Hz status_Ngừng kinh doanh">
                            <a href="/products/laptop-msi-gaming-gf63-thin-11uc-1228vn"
                                title="Laptop MSI Gaming GF63 Thin 11UC 1228VN" class="image-resize ">

                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/aming-msi-gf63-thin-12uc-887vn_dd412668aeeb4822b6608c9a7633df82_master_792688c94dc4440cb34ebe2d79729591_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/aming-msi-gf63-thin-12uc-887vn_dd412668aeeb4822b6608c9a7633df82_master_792688c94dc4440cb34ebe2d79729591_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/aming-msi-gf63-thin-12uc-887vn_dd412668aeeb4822b6608c9a7633df82_master_792688c94dc4440cb34ebe2d79729591_medium.jpg"
                                    alt="Laptop MSI Gaming GF63 Thin 11UC 1228VN">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/text_ng_n_9__1_10_d53af7f56d37488ca8d2ab61a425fd4f_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/text_ng_n_9__1_10_d53af7f56d37488ca8d2ab61a425fd4f_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/text_ng_n_9__1_10_d53af7f56d37488ca8d2ab61a425fd4f_large.jpg"
                                    alt="Laptop MSI Gaming GF63 Thin 11UC 1228VN">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-msi-gaming-gf63-thin-11uc-1228vn?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-msi-gaming-gf63-thin-11uc-1228vn"
                                    title="Laptop MSI Gaming GF63 Thin 11UC 1228VN"> Laptop MSI Gaming
                                    GF63 Thin
                                    11UC 1228VN </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        15,990,000₫ </span>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="i7 11800H">
                                    <span>i7 11800H</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="8GB DDR4">
                                    <span>8GB DDR4</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt="RTX 3050">
                                    <span>RTX 3050</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" 144hz"="">
                                    <span>15.6" FHD 144Hz</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="other_Bảo hành 24 tháng chính hãng. other_Đã bao gồm VAT ram_8GB DDR5 chip_i5 12450H screen_15.6&quot; FHD 144Hz vga_RTX 2050 281VN RTX 2050">
                            <a href="/products/laptop-gaming-msi-cyborg-15-a12ucx-281vn"
                                title="Laptop Gaming MSI Cyborg 15 A12UCX 281VN" class="image-resize ">

                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-cyborg-15-a12ucx-281vn_d531c09d1dff44e791c69640c72dab04_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/laptop-gaming-msi-cyborg-15-a12ucx-281vn_d531c09d1dff44e791c69640c72dab04_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-msi-cyborg-15-a12ucx-281vn_d531c09d1dff44e791c69640c72dab04_medium.jpg"
                                    alt="Laptop Gaming MSI Cyborg 15 A12UCX 281VN">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/cyborg-12th-1_fcfc1d0efcea45e182c33181337c69dd_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/cyborg-12th-1_fcfc1d0efcea45e182c33181337c69dd_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/cyborg-12th-1_fcfc1d0efcea45e182c33181337c69dd_large.jpg"
                                    alt="Laptop Gaming MSI Cyborg 15 A12UCX 281VN">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-gaming-msi-cyborg-15-a12ucx-281vn?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-gaming-msi-cyborg-15-a12ucx-281vn"
                                    title="Laptop Gaming MSI Cyborg 15 A12UCX 281VN"> Laptop Gaming MSI
                                    Cyborg 15
                                    A12UCX 281VN </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        15,990,000₫ </span>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="i5 12450H">
                                    <span>i5 12450H</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="8GB DDR5">
                                    <span>8GB DDR5</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt="RTX 2050">
                                    <span>RTX 2050</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" 144hz"="">
                                    <span>15.6" FHD 144Hz</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                    <div class="product-block item loop-border">
                        <div class="product-img  has-hover"
                            data-frame="screen_15.6&quot; FHD OLED other_Đã bao gồm VAT other_Bảo hành 24 tháng chính hãng. chip_i5 13500H vga_Iris Xe Graphics Iris Xe Graphics 1114w ram_16GB DDR4 voucher_100k">
                            <a href="/products/laptop-asus-vivobook-15-oled-a1505va-l1114w"
                                title="Laptop Asus VivoBook 15 OLED A1505VA L1114W"
                                class="image-resize ">
                                <div class="product-sale"><span>-22%</span></div>
                                <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                    height="260"
                                    src="//product.hstatic.net/200000837185/product/laptop-asus-vivobook-15x-a1505va-l1114w_e2ab1843014149a5aa86726fc2fc4188_large.jpg"
                                    data-src="//product.hstatic.net/200000837185/product/laptop-asus-vivobook-15x-a1505va-l1114w_e2ab1843014149a5aa86726fc2fc4188_large.jpg"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptop-asus-vivobook-15x-a1505va-l1114w_e2ab1843014149a5aa86726fc2fc4188_medium.jpg"
                                    alt="Laptop Asus VivoBook 15 OLED A1505VA L1114W">
                                <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded"
                                    width="260" height="260"
                                    src="//product.hstatic.net/200000837185/product/laptopasusvivobook15oleda1505va-l1114w_aaf1cb744ede44e49cb1ca4409bb181d_large.png"
                                    data-src="//product.hstatic.net/200000837185/product/laptopasusvivobook15oleda1505va-l1114w_aaf1cb744ede44e49cb1ca4409bb181d_large.png"
                                    data-mobile="//product.hstatic.net/200000837185/product/laptopasusvivobook15oleda1505va-l1114w_aaf1cb744ede44e49cb1ca4409bb181d_large.png"
                                    alt="Laptop Asus VivoBook 15 OLED A1505VA L1114W">
                            </a>
                            <div class="button-loop-pro hidden-xs hidden-sm">
                                <button class="btn-quickview"
                                    onclick="window.wd.scofield.quickview('/products/laptop-asus-vivobook-15-oled-a1505va-l1114w?view=quickview-nochoose')"
                                    type="button">
                                    <img src="https://file.hstatic.net/200000525917/file/search-icon_61351aaf4f2a4ba0b163434492c75c0d.svg"
                                        width="16" height="16" alt="Xem nhanh">
                                </button>
                            </div>
                        </div>
                        <div class="product-detail">
                            <strong class="pro-name"><a
                                    href="/products/laptop-asus-vivobook-15-oled-a1505va-l1114w"
                                    title="Laptop Asus VivoBook 15 OLED A1505VA L1114W"> Laptop Asus
                                    VivoBook 15
                                    OLED A1505VA L1114W </a></strong>
                            <div class="d-flex js-between d-flex-center">
                                <ul class="list-variants d-flex d-flex-wrap image">
                                </ul>
                            </div>
                            <div class="box-pro-prices">
                                <p class="pro-price">
                                    <span>
                                        16,390,000₫ </span>
                                    <del class="compare-price">20,987,500₫</del>
                                </p>
                            </div>
                            <ul class="hash-tag-loop">
                            </ul>
                            <ul class="config-tags">
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                        alt="i5 13500H">
                                    <span>i5 13500H</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                        alt="16GB DDR4">
                                    <span>16GB DDR4</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                        alt="Iris Xe Graphics">
                                    <span>Iris Xe Graphics</span>
                                </li>
                                <li>
                                    <img width="32" height="32" loading="lazy"
                                        fetchpriority="low" decoding="async"
                                        src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                        alt="15.6" fhd="" oled"="">
                                    <span>15.6" FHD OLED</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                            </div>
                            <div class="text-center btn-view-all-tab">
                                <a class="btn btn-all-tab" href="/collections/laptop">
                                    Xem tất cả »
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
    </main>
@endsection
