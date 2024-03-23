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
                                    <li><a href="#"><span><i class="ri-search-line"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
    $('.pro-quantity-view span.icon-plus2').click(function(){
        alert(123);
        let value = $(this).parent().find('base-input-number__input').val();
        $(this).parent().find('.base-input-number__input').val(parseInt(value)+1);
        console.log(value,123)
    })
</script>

</html>
