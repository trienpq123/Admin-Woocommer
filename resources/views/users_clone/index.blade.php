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
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=fallback"
        as="style" type="text/css" rel="preload stylesheet">
    <link href="//theme.hstatic.net/200000837185/1001187855/14/plugin-style.css?v=1944" rel="preload stylesheet"
        as="style" type="text/css">
    <link href="//theme.hstatic.net/200000837185/1001187855/14/styles-new.scss.css?v=1944" rel="preload stylesheet"
        as="style" type="text/css">
    <link rel="preload" as="image" type="image/jpg" href="//hstatic.net/0/0/global/noDefaultImage6_grande.gif"
        media="(max-width: 480px)">
    <link href="//theme.hstatic.net/200000837185/1001187855/14/styles-index.scss.css?v=1944" rel="preload stylesheet"
        as="style" type="text/css">

    <link href="//theme.hstatic.net/200000837185/1001187855/14/cus.scss.css?v=1944" rel="preload stylesheet"
        as="style" type="text/css">

    <link href="https://file.hstatic.net/200000525917/file/jquery-script_a06dbb9a942a4a2c8e459410c8a19bc1.js"
        rel="preload prefetch" as="script" type="text/javascript">
    <script type="text/javascript"
        src="https://file.hstatic.net/200000525917/file/jquery-script_a06dbb9a942a4a2c8e459410c8a19bc1.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <div class="wrapper">

        <style>
            .top-header.topbar-banner.d-lg-block.d-xl-block.d-none {
                display: flex;
                background: #fff;
            }
        </style>

        @include('users.components.header')

        @yield('main')

        @include('users.components.footer')
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    function minusQuantity(button) {
        let quantity = $('#quantity').val();
        quantity--;
        if (quantity < 1) {
            quantity = 1;
        }
        $('#quantity').val(quantity)
    }

    function plusQuantity(button) {
        let quantity = $('#quantity').val();
        quantity++;
        $('#quantity').val(quantity)
    }
    $(document).ready(function() {
        $('.slick-banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            fade: true,

        });
        // $('.slider-nav').slick({
        //     slidesToShow: 3,
        //     slidesToScroll: 1,
        //     asNavFor: '.slider-for',
        //     dots: false,
        //     centerMode: true,
        //     focusOnSelect: true
        // });
        $('.swatch-element').click(function() {
            let select_swatchs = $(this).parent();
            console.log(select_swatchs);
            $(this).parent().find('.swatch-element label').removeClass('sd');
            $(this).parent().find('.swatch-element input').prop('checked', true);


            console.log(this);
            $(this).find('label').addClass('sd');
            // select_swatchs.each(function(index,element) {
            //     console.log('Vị trí:' + index);
            //     console.log('Element:' + element);
            // })
            let element = inndexPriceProductDetail();
            console.log(element)
            let price = parseInt(element.price.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }));
            let price_old = parseInt(element.price_old.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }));

            let priceNow = $('#product-template #pro-price .price-now');
            let priceCompare = $('#product-template #pro-price .price-compare');

            if (price_old > 0) {
                priceNow.text(price_old + 'đ');
                priceCompare.html('<del>' + price + ' đ</del');
            } else {
                priceNow.text(price);
                priceCompare.text('');
            }
        })
        // FORMART
        function formatCurrencyVND(amount) {
            return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + " ₫";
        }
        // Xử lý số lượng sản phẩm

        // Xử lý in giá tiền ra giao diện khi chọn sản phẩm
        function inndexPriceProductDetail() {
            let array_attribute = [];
            let select_swatchs = $('.select-swap');
            let data_variants = $('.data-attribute-product').data('variants');

            select_swatchs.each(function(index, element) {
                console.log('Vị trí:' + index);
                console.log('Element:' + element);
                let value = $(element).find('label.sd').parent().find('input').val();
                array_attribute.push(value);
            });

            for (let element of data_variants) {
                console.log(element);
                let checkArrayVariants = JSON.stringify(array_attribute) === JSON.stringify(element.title);
                if (checkArrayVariants) {
                    return element; // Trả về element khi tìm thấy
                }
            }
            return null; // Trả về null nếu không tìm thấy kết quả phù hợp
        }


    });
</script>
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

    // PRODUCT DETAILT
    // XU LY SLIDER ANH
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        // transition: 'fade',
        // fade:true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true
    });
    // END PRODUCT DETAIL
</script>
{{-- <script>
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
</script> --}}

</html>
