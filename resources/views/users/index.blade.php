<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    {{-- REMIX ICON --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
        integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('./assets/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/css/animation.css') }}">
</head>

<body>
    <div class="wrapper">
        {{-- HEADER --}}
        <header id="header">
            <div class="wrap-container">
                <div class="header grid grid-template-colums-large-auto-8 align-items-center">
                    <div class="header-left">
                        <div class="logo">
                            <img src="https://p7.hiclipart.com/preview/598/963/723/computer-icons-web-page-world-wide-web.jpg"
                                alt="" width="40px" height="40px">
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="flex align-items-center justify-content-space-betweent">
                            <div class="navigation-menu">
                                <ul class="flex gap-4 align-items-center">
                                    <li>
                                        <a href="#">Trang chủ </a><span><i
                                                class="ri-arrow-down-s-line"></i></span>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">
                                                    Submenu 1.1
                                                    <span>NEW</span>
                                                </a>

                                            </li>
                                            <li>
                                                <a href="#">
                                                    Submenu 1.2
                                                    <span>NEW</span>
                                                </a>
                                            </li>
                                            <li><a href="#">Submenu 1.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Giới thiệu </a><span><i
                                                class="ri-arrow-down-s-line"></i></span></li>
                                    <li><a href="#">Về chúng tôi </a><span><i
                                                class="ri-arrow-down-s-line"></i></span></li>
                                </ul>
                            </div>
                            <div class="navigation-btn">
                                <ul class="flex gap-4 align-items-center">
                                    <li>
                                        <a href="javascript:void(0)"><span><i class="ri-heart-line"></i></span></a>
                                        <span class="count">0</span>
                                    </li>
                                    <li class="cart">
                                        <a href="javascript:void(0)"><span><i
                                                    class="ri-shopping-cart-line"></i></span></a>
                                        <span class="count">0</span>
                                        <div class="cart-views">
                                            <div class="cart-head">
                                                <div class="cart-title">
                                                    <h2>GIỎ HÀNG CỦA TÔI</h2>
                                                </div>
                                                <div class="cart-close"><i class="ri-close-line"></i></div>
                                            </div>
                                            <hr>
                                            <div class="cart-body">
                                                <div class="list-cart">
                                                    <div class="cart-item">
                                                        <div class="cart-image">
                                                            <img src="https://product.hstatic.net/200000549029/product/15_ed24ddf5dff74fe7a42f08c4ce9e03ad_medium.jpg"
                                                                alt="" width="80px">
                                                        </div>
                                                        <div class="cart-infor">
                                                            <div class="infor-row">
                                                                <div class="content">
                                                                    <h3 class="title">Chân váy midi</h3>
                                                                    <div class="type">
                                                                        <span>Silver</span>
                                                                        <span>Size: 40</span>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-remove"><i class="ri-close-line"></i>
                                                                </div>
                                                                <div class="pro-quantity-view">
                                                                    <span class="icon-minus2 minus-btn">-</span>
                                                                    <input type="text" min="1"
                                                                        name="updates[]"
                                                                        class="base-input-number__input qty-value"
                                                                        max="50" value="1">
                                                                    <span class="icon-plus2 plud-btn">+</span>
                                                                </div>
                                                            </div>

                                                            <div class="infor-row">
                                                                <div class="price"><b>1.000.000₫</b></div>
                                                            </div>
                                                            <div class="infor-row">
                                                                <span>Tổng tiền: <b>1.000.000₫</b></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item">
                                                        <div class="cart-image">
                                                            <img src="https://product.hstatic.net/200000549029/product/15_ed24ddf5dff74fe7a42f08c4ce9e03ad_medium.jpg"
                                                                alt="" width="80px">
                                                        </div>
                                                        <div class="cart-infor">
                                                            <div class="infor-row">
                                                                <div class="content">
                                                                    <h3 class="title">Chân váy midi</h3>
                                                                    <div class="type">
                                                                        <span>Silver</span>
                                                                        <span>Size: 40</span>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-remove"><i class="ri-close-line"></i>
                                                                </div>
                                                                <div class="pro-quantity-view">
                                                                    <span class="icon-minus2 minus-btn">-</span>
                                                                    <input type="text" min="1"
                                                                        name="updates[]"
                                                                        class="base-input-number__input qty-value"
                                                                        max="50" value="1">
                                                                    <span class="icon-plus2 plud-btn">+</span>
                                                                </div>
                                                            </div>

                                                            <div class="infor-row">
                                                                <div class="price"><b>1.000.000₫</b></div>
                                                            </div>
                                                            <div class="infor-row">
                                                                <span>Tổng tiền: <b>1.000.000₫</b></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="searching">
                                        <a href="#"><span><i class="ri-search-line"></i></span></a>
                                        <div class="popup-search">
                                            <div class="form-search">
                                                <form action="">
                                                    <input type="text" placeholder="Nhập keywords...">
                                                    <button class="btn-search"><i class="ri-search-line"></i></button>

                                                </form>
                                                <div class="result">
                                                    <ul>
                                                        <li>
                                                            <div class="images">
                                                                <img src="https://i.ytimg.com/vi/9tuZcqTGbhY/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDdr3R1_Q4b3zRNWHxwkAn5yINJng"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-right">
                                                                <h3 class="title">Tên sản phẩm 1</h3>
                                                                <p class="sub-title">Lorem ipsum dolor sit amet,
                                                                    consectetur adipisicing elit. Quidem, porro nisi!
                                                                    Minima magni, eius mo</p>
                                                                <div class="action-link">
                                                                    <a href="#">Xem thêm</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- BANNER --}}
        <div id="banner">
            <div class="list-banner">
                <div class="banner-item">
                    <img width="100%" style="object-fit:cover"
                        src="data:image/jpeg;base64,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"
                        alt="">
                </div>
            </div>
        </div>
        <div id="main">
            <section id=" category">
                <div class="grid category-list">
                    <div class="category-item">
                        <div class="category-image">
                            <img src="https://images.thinkgroup.vn/unsafe/360x360/filters:quality(100)/https://media-api-beta.thinkpro.vn/media/core/products/2023/3/30/vo-case-Razer-Tomahawk-Mini-ITX-thinkpro-01.png"
                                alt="">
                        </div>
                        <div class="category-title">
                            <h3>CPU</h3>
                        </div>
                    </div>
                    <div class="category-item">
                        <div class="category-image">
                            <img src="https://images.thinkgroup.vn/unsafe/360x360/filters:quality(100)/https://media-api-beta.thinkpro.vn/media/core/products/2023/3/30/vo-case-Razer-Tomahawk-Mini-ITX-thinkpro-01.png"
                                alt="">
                        </div>
                        <div class="category-title">
                            <h3>LAPTOP</h3>
                        </div>
                    </div>
                    <div class="category-item">
                        <div class="category-image">
                            <img src="https://png.pngtree.com/png-clipart/20230206/ourmid/pngtree-cell-phone-mockup-png-image_6584021.png"
                                alt="">
                        </div>
                        <div class="category-title">
                            <h3>ĐIỆN THOẠI</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section id="flash-sale">
                <div class="flex sale">
                    <div class="ladi-title">
                        <h2>GIẢM GIÁ VÀNG</h2>
                    </div>
                    <div class="count-date">
                        <span id="day">00</span> :
                        <span id="hour">00</span> :
                        <span id="minute">00</span> :
                        <span id="second">00</span>
                    </div>
                </div>
                <div class="grid list-product">
                    <div class="product-item">
                        <div class="product-image">
                            <img src="https://hoanghapccdn.com/media/product/250_4429_hhpc_white_13900k_sky_two_ha1s.jpg"
                                alt="">
                        </div>
                        <div class="product-body">
                            <div class="title">
                                <h3>HHPC BLACK WHITE CORE i5 13600K | 32G DDR5 | NVIDIA RTX 4070 Ti SUPER 16G</h3>
                            </div>
                            <div class="price">
                                <p><span class="new">52.990.000 đ</span></p>
                                <p><span class="old">(59.990.000 đ)</span></p>
                            </div>
                        </div>
                        <div class="product-foot flex">
                            <p>
                                <span style="color: #0DB866;"><i class="icons icon-check"></i> Còn hàng</span>
                            </p>
                            <a href="#">
                                ĐẶT HÀNG
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image">
                            <img src="https://hoanghapccdn.com/media/product/250_4429_hhpc_white_13900k_sky_two_ha1s.jpg"
                                alt="">
                        </div>
                        <div class="product-body">
                            <div class="title">
                                <h3>HHPC BLACK WHITE CORE i5 13600K | 32G DDR5 | NVIDIA RTX 4070 Ti SUPER 16G</h3>
                            </div>
                            <div class="price">
                                <p><span class="new">52.990.000 đ</span></p>
                                <p><span class="old">(59.990.000 đ)</span></p>
                            </div>
                        </div>
                        <div class="product-foot flex">
                            <p>
                                <span style="color: #0DB866;"><i class="icons icon-check"></i> Còn hàng</span>
                            </p>
                            <a href="#">
                                ĐẶT HÀNG
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image">
                            <img src="https://hoanghapccdn.com/media/product/250_4429_hhpc_white_13900k_sky_two_ha1s.jpg"
                                alt="">
                        </div>
                        <div class="product-body">
                            <div class="title">
                                <h3>HHPC BLACK WHITE CORE i5 13600K | 32G DDR5 | NVIDIA RTX 4070 Ti SUPER 16G</h3>
                            </div>
                            <div class="price">
                                <p><span class="new">52.990.000 đ</span></p>
                                <p><span class="old">(59.990.000 đ)</span></p>
                            </div>
                        </div>
                        <div class="product-foot flex">
                            <p>
                                <span style="color: #0DB866;"><i class="icons icon-check"></i> Còn hàng</span>
                            </p>
                            <a href="#">
                                ĐẶT HÀNG
                            </a>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-image">
                            <img src="https://hoanghapccdn.com/media/product/250_4429_hhpc_white_13900k_sky_two_ha1s.jpg"
                                alt="">
                        </div>
                        <div class="product-body">
                            <div class="title">
                                <h3>HHPC BLACK WHITE CORE i5 13600K | 32G DDR5 | NVIDIA RTX 4070 Ti SUPER 16G</h3>
                            </div>
                            <div class="price">
                                <p><span class="new">52.990.000 đ</span></p>
                                <p><span class="old">(59.990.000 đ)</span></p>
                            </div>
                        </div>
                        <div class="product-foot flex">
                            <p>
                                <span style="color: #0DB866;"><i class="icons icon-check"></i> Còn hàng</span>
                            </p>
                            <a href="#">
                                ĐẶT HÀNG
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // Show giỏ hàng
    $('.navigation-btn ul li.cart a').click(function() {
        $('.cart-views').toggleClass('show');
    })
    $('.cart-views .cart-close').click(function() {
        $('.cart-views').toggleClass('show');
    })
    // Quanlity cart
    $('.pro-quantity-view span.icon-plus2').click(function() {
        alert(123);
        let value = $(this).parent().find('base-input-number__input').val();
        $(this).parent().find('.base-input-number__input').val(parseInt(value) + 1);

    })

    $('.navigation-btn ul li.searching').click(function() {
        $('.popup-search').toggleClass('active');
    })
</script>

</html>
