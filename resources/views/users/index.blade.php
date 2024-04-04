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
</head>

<body>
    <div class="wrapper">

        <style>
            .top-header.topbar-banner.d-lg-block.d-xl-block.d-none {
                display: flex;
                background: #fff;
            }
        </style>
        <header id="header" class="site-header hSticky hSticky-nav hSticky-up" style="--height-header:108px">
            <div id="site-header-center" class="header-top">
                <div class="container">
                    <div class="row-left-list d-flex d-flex-center row-mb">
                        <div class="item-click-mb">
                            <span class="bars">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M30.933 4.267H1.067a1.067 1.067 0 0 0 0 2.133h29.866a1.067 1.067 0 0 0 0-2.133zM30.933 14.933H1.067a1.067 1.067 0 0 0 0 2.134h29.866a1.067 1.067 0 0 0 0-2.134zM30.933 25.6H1.067a1.067 1.067 0 0 0 0 2.133h29.866a1.067 1.067 0 0 0 0-2.133z"
                                            fill="#000000" opacity="1" data-original="#000000" class="">
                                        </path>
                                    </g>
                                </svg>
                                <span class="menu-items">Menu</span>
                            </span>
                        </div>
                        <div class="logo col-md-3 col-xs-3 col-sm-3 pd-right-0">
                            <a href="/">
                                <img class="dt-width-auto logo-shop" height="50" width="200"
                                    src="https://file.hstatic.net/200000837185/file/logo-web-white-2_d77f90f6d67c47bea3c129624300ba8f.png"
                                    alt="Xgear">
                            </a>
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6 pd-right-0">
                            <div class="site_search search-desktop">
                                <form action="/search" class="wanda-mxm-search">
                                    <div class="search-inner">
                                        <input name="q" autocomplete="off"
                                            class="searchinput input-search search-input" type="text" size="20"
                                            placeholder="MSI Gaming" aria-label="Search">
                                    </div>
                                    <button type="submit" class="btn-search" aria-label="Tìm kiếm">
                                        <img width="24" height="24"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/search-icon.svg?v=1944"
                                            alt="Tìm kiếm">
                                    </button>
                                </form>
                                <div class="smart-search-wrapper ajaxSearchResults">
                                    <div class="results-seach">
                                        <div class="title-search text-center">
                                            Kết quả tìm kiếm
                                        </div>
                                        <div class="group-head-smart d-flex">
                                            <span class="title-search-item-parent">Sản phẩm</span>
                                            <a class="total-product-result result-total-smart" href="/"></a>
                                        </div>
                                        <div class="product-result-data padding-15"></div>
                                        <div class="group-head-smart  d-flex">
                                            <span class="title-search-item-parent">Bài viết</span>
                                            <a class="total-article-result result-total-smart" href="/">Xem tất
                                                cả 10 bài viết</a>
                                        </div>
                                        <div class="article-result-data padding-15"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 group-icon-header col-xs-2 col-sm-3 pd-right-0 pd-0-mb">
                            <div class="cart-login-search align-items-center">
                                <ul class="list-inline list-unstyled mb-0 d-flex header-group-icon d-flex-center">
                                    <li class="list-inline-item mr-0 hidden-xs hidden-sm header-hotline">
                                        <a class="group-icon-item d-flex d-flex-center" href="tel:02871081881">
                                            <span class="box-icon">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/icons8-ringer-volume-30_b9afdf996b2c472ab02e81ece174af6b.png"
                                                    alt="Hotline">
                                            </span>
                                            <span class="box-text">
                                                Hotline
                                                <span class="small-text">02871081881</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0 hidden-xs hidden-sm header-store">
                                        <div class="list-inline-item-text">
                                            <button class="group-icon-item d-flex d-flex-center">
                                                <span class="box-icon">
                                                    <img width="24" height="24"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/location.svg?v=1944"
                                                        alt="Hệ thống cửa hàng">
                                                </span>
                                                <span class="box-text">
                                                    Hệ thống
                                                    <span class="small-text">cửa hàng<i class="fa fa-angle-down"
                                                            aria-hidden="true"></i></span>
                                                </span>
                                                <span class="box-arrow">
                                                    <svg viewBox="0 0 20 9" role="presentation">
                                                        <path
                                                            d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                                            fill="#161617"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="header-action_dropdown bg-grey-opacity">
                                                <div class="header-dropdown_content">
                                                    <div class="overflow-hidden relative-position">
                                                        <div class="account_header text-center">
                                                            <div class="account_title heading h2">Tìm cửa hàng gần bạn
                                                            </div>
                                                        </div>
                                                        <div class="group-store-header mg-top-15">
                                                            <div class="d-flex header-select-store">
                                                                <div class="form-group"><select name="change-tinh"
                                                                        class="change-tinh">
                                                                        <option value="all" selected="">Chọn
                                                                            tỉnh/thành phố</option>
                                                                        <option value="ho-chi-minh"
                                                                            data-tinh="Hồ Chí Minh">Hồ Chí Minh
                                                                        </option>
                                                                        <option value="ha-noi" data-tinh="Hà Nội">Hà
                                                                            Nội</option>
                                                                    </select></div>
                                                                <div class="form-group"><select name="select-quan"
                                                                        class="select-quan">
                                                                        <option value="all">Chọn Quận/huyện</option>
                                                                    </select></div>
                                                            </div>
                                                            <div class="address-count mg-top-15">
                                                                <div class="address-detail">
                                                                    <ul class="address-link">
                                                                        <li class="" data-tinh="ho-chi-minh"
                                                                            data-quan="quan-tan-binh">
                                                                            <a href="https://maps.app.goo.gl/H95CjkTsoemLFfPu6"
                                                                                target="_blank" class="iframe-map"
                                                                                rel="nofollow">
                                                                                <b>Hồ Chí Minh - Xgear HCM</b>
                                                                                <span>08 Tự Lập, Phường 4, Quận Tân
                                                                                    Bình</span>
                                                                                <span><i class="fa fa-phone"></i>
                                                                                    02871081881</span>
                                                                                <span>Thời gian hoạt động: 9:00 -
                                                                                    20:00</span>
                                                                            </a>
                                                                            <a class="infoLocation" target="_blank"
                                                                                href="https://maps.app.goo.gl/H95CjkTsoemLFfPu6"
                                                                                rel="nofollow">
                                                                                <i class="fa fa-location-arrow"></i>
                                                                                <span class="guideWay">Chỉ đường</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="" data-tinh="ha-noi"
                                                                            data-quan="quan-ba-dinh">
                                                                            <a href="https://maps.app.goo.gl/AfppVa2fWGBZmv4R8"
                                                                                target="_blank" class="iframe-map"
                                                                                rel="nofollow">
                                                                                <b>Hà Nội - Xgear Hà Nội</b>
                                                                                <span>10A1 Ngõ 49 Linh Lang, Ba
                                                                                    Đình</span>
                                                                                <span><i class="fa fa-phone"></i>
                                                                                    0972321881</span>
                                                                                <span>Thời gian hoạt động: 9:00 -
                                                                                    20:01</span>
                                                                            </a>
                                                                            <a class="infoLocation" target="_blank"
                                                                                href="https://maps.app.goo.gl/AfppVa2fWGBZmv4R8"
                                                                                rel="nofollow">
                                                                                <i class="fa fa-location-arrow"></i>
                                                                                <span class="guideWay">Chỉ đường</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <p class="no-store hidden">Hiện chưa có cửa hàng
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item mr-0 header-account">
                                        <div class="list-inline-item-text">
                                            <button class="group-icon-item d-flex d-flex-center">
                                                <span class="box-icon">
                                                    <img width="24" height="24"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/user-account.svg?v=1944"
                                                        alt="Tài khoản">
                                                </span>
                                                <span class="box-text hidden-xs">
                                                    Đăng nhập
                                                    <span class="small-text">Đăng ký<i class="fa fa-angle-down"
                                                            aria-hidden="true"></i></span>
                                                </span>
                                                <span class="box-arrow">
                                                    <svg viewBox="0 0 20 9" role="presentation">
                                                        <path
                                                            d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                                            fill="#ffffff"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="header-action_dropdown">
                                                <div class="header-dropdown_content">
                                                    <div class="overflow-hidden relative-position">
                                                        <div id="header-login-toggle"
                                                            class="site_account_modal translate-left active">
                                                            <div class="account_header text-center">
                                                                <div class="account_title heading h2">Đăng nhập tài
                                                                    khoản</div>
                                                                <p class="account_legend">Nhập email và mật khẩu của
                                                                    bạn:</p>
                                                            </div>
                                                            <div class="site_account_container">
                                                                <form accept-charset="UTF-8" action="/account/login"
                                                                    id="customer_login" method="post">
                                                                    <input name="form_type" type="hidden"
                                                                        value="customer_login">
                                                                    <input name="utf8" type="hidden"
                                                                        value="✓">
                                                                    <div class="form-control">
                                                                        <input type="email" placeholder="Email"
                                                                            name="customer[email]" autocomplete="on"
                                                                            required="required">
                                                                    </div>
                                                                    <div class="form-control">
                                                                        <input type="password" placeholder="Mật khẩu"
                                                                            name="customer[password]"
                                                                            autocomplete="on" required="required">
                                                                    </div>
                                                                    <div class="form-control">
                                                                        <button type="submit" class="btn-submit"
                                                                            id="form_submit-login">Đăng nhập</button>
                                                                    </div>

                                                                    <input id="73c26806e51b4df695b3623f227fe993"
                                                                        name="g-recaptcha-response" type="hidden"
                                                                        value="03AFcWeA4CoMyYxObZ9J9_B7yl2lPFQi3OyfCDdNU_55-SsDTr1rm6MCKPiqzo0l8nTwFYQs50rca7sAoQ_8oIt5W3xSrjI52CZHZock7yulNXif-71e_DPLRuTb2xxyjku9hvcQSSLhJKN5jP-jVqescCNtXIbShim99zqGPf-Ma2XT23p6w31Bikg6Z6dAxj_CEBRIKHerCJMUtQ93-wYFpo1qLNUSSbs1NBdqPBBZUbwItDDOrb9OhvkZ_R7D-94IEjVpLIzDOO61PPRtMaaaH3Llqxe4kAUq8AD76u2OqiBO-pOxMNI9L6KSNB3zU165awrVvXZCyLdPSRv_Fy2xIKZKdeWnh23csnl8QepSBZY2eVQ_8zFdeifIRbYSYoSSMcveMYm2lFS6jMg-mZUBP6R9UBSgxCnGz2UJ_esl3efRu2MYq5hURUeNihpTIhdgAPBAQf5XvAB6kOAoUuTYTam6mCIegh9MXWq9QXpGIt5XTLofpSzcj9YGlmhBUwIo8Zytzqe2Q-Iw7svybgfs55puEy4q25hTL7fXmJIr37rIgcuk-5KawO3zzdFZCg1LaRHVApt-H5iNrLt7ea7d6976beMg7-1n2RPE8pFg7hR4nOThShIUlo8rRrY3OMLDfFWpur2rWNbn6sbaAI7-qs9OEdygFi-w"><!--<script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script>--><!--<script>
                                                                            grecaptcha.ready(function() {
                                                                                grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                                                                    action: 'submit'
                                                                                }).then(function(token) {
                                                                                    document.getElementById('73c26806e51b4df695b3623f227fe993').value = token;
                                                                                });
                                                                            });
                                                                        </script>-->
                                                                </form>
                                                                <div class="site_account_secondary-action">
                                                                    <p>Khách hàng mới?
                                                                        <a class="link" href="/account/register">Tạo
                                                                            tài khoản</a>
                                                                    </p>
                                                                    <p>Quên mật khẩu?
                                                                        <button aria-controls="header-recover-panel"
                                                                            class="js-link link">Khôi phục mật
                                                                            khẩu</button>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="header-recovery-toggle"
                                                            class="site_account_modal translate-right">
                                                            <div class="account_header text-center">
                                                                <div class="account_title heading h2">Khôi phục mật
                                                                    khẩu</div>
                                                                <p class="account_legend">Nhập email của bạn:</p>
                                                            </div>
                                                            <div class="site_account_inner">
                                                                <form accept-charset="UTF-8" action="/account/recover"
                                                                    method="post">
                                                                    <input name="form_type" type="hidden"
                                                                        value="recover_customer_password">
                                                                    <input name="utf8" type="hidden"
                                                                        value="✓">
                                                                    <div class="form-control">
                                                                        <input type="email" placeholder="Email"
                                                                            name="email" autocomplete="on"
                                                                            required="required">
                                                                    </div>
                                                                    <div class="form-control">
                                                                        <button type="submit" class="btn-submit"
                                                                            id="form_submit-recover">Lấy mật
                                                                            khẩu</button>
                                                                    </div>

                                                                    <input id="11b7674bc782415b9896c089b7436ed2"
                                                                        name="g-recaptcha-response" type="hidden"
                                                                        value="03AFcWeA7GFq2113fhIoUHBaZHrKsNTz6V_GggPSqbM3f5GlZq5OsVSAT0YsMIJQ1fCFODTD-WRitEdk52U-aHmkWgBSsXS8jOI9f3dgTPSQhqPIHduWs4bwg9IkSZPSBo6ayCMOMijXR6_EnlciRd0C8GK3Gh3W1Jktc_rzvNMs6L3VH2yYDfzgSchH0bPtCY1Mp2ymGEAua1xVodFRcpImP61UJgOYFOw29cw6ClBLZjJtGG-XTrx9Ldpctn0H8nYDWUphGiHBtyFQ2rFIVb4OUjVHJR_iOgDOG5M-C407fdj56HbfrrVEW2X6HBi4Cg8AmenOTsYoY6wC9SJ5A04Ue20rfowsED9BXzXMGIxHjum6PHcVnN0Q3Sg-u1C6Wr8upFBREn0EDhjcMQonJTtHUeBR3RXi1Gqylxj4XeiQC3HFP5zFdLz6p99Zp7RFICrVXbUhHNFZkSmbjE6NlY6zIDVGT06vKXc09Dh_7UXD9vCXvjtt3pagUqyU3Qk6uoiuHVeVbdz0dip7KJna8qBBv7OV9Ho-x5kv1pSWWox2N6Pd36eeIAe3Dq2g7oJSx7Z5WrL8I__aKre8n8D7kjGvm4VYlo1mzxaiIQyx7gM99lSK5_VSZgeQOpHYwftWmueg0b6A5XDy5vZXozYns2hPa29CEMiRxINg"><!--<script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script>--><!--<script>
                                                                            grecaptcha.ready(function() {
                                                                                grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                                                                    action: 'submit'
                                                                                }).then(function(token) {
                                                                                    document.getElementById('11b7674bc782415b9896c089b7436ed2').value = token;
                                                                                });
                                                                            });
                                                                        </script>-->
                                                                </form>
                                                                <div class="site_account_secondary-action">
                                                                    <button aria-controls="header-login-panel"
                                                                        class="js-link link"><i
                                                                            class="fa fa-hand-o-left"
                                                                            aria-hidden="true"></i> Trở về đăng
                                                                        nhập</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item mr-0 header-cart">
                                        <div class="list-inline-item-text">
                                            <button class="group-icon-item d-flex d-flex-center">
                                                <span class="box-icon">
                                                    <img width="24" height="24"
                                                        src="//theme.hstatic.net/200000837185/1001187855/14/shopping-cart.svg?v=1944"
                                                        alt="Hệ thống cửa hàng">
                                                    <span class="js-number-cart number-cart">0</span>
                                                </span>
                                                <span class="box-text visible-lg">
                                                    Giỏ hàng
                                                </span>
                                                <span class="box-arrow">
                                                    <svg viewBox="0 0 20 9" role="presentation">
                                                        <path
                                                            d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                                            fill="#ffffff"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="header-action_dropdown">
                                                <div class="header-dropdown_content">
                                                    <div class="overflow-hidden relative-position">
                                                        <div class="account_header text-center">
                                                            <div class="account_title  h2 heading">Giỏ hàng</div>
                                                        </div>
                                                        <div class="cart-content" id="cart-mini-wanda">
                                                            <div class="cart-view clearfix">
                                                                <div class="cart-scroll">
                                                                    <table id="cart-view">
                                                                        <tbody>
                                                                            <tr class="list-item" data-line="1">
                                                                                <td class="img"><a
                                                                                        href="/products/man-hinh-msi-g274qpx-27-rapid-ips-2k-240hz-g-sync"
                                                                                        title="Màn hình MSI G274QPX 27&quot; Rapid IPS 2K 240Hz G-Sync"><img
                                                                                            src="//product.hstatic.net/200000837185/product/screenshot_2024-01-21_190223_d2b13d14c63c4b569adccecc8a164035_medium.png"
                                                                                            alt="Màn hình MSI G274QPX 27&quot; Rapid IPS 2K 240Hz G-Sync"></a>
                                                                                </td>
                                                                                <td class="item"><a
                                                                                        class="pro-title-view"
                                                                                        href="/products/man-hinh-msi-g274qpx-27-rapid-ips-2k-240hz-g-sync"
                                                                                        title="Màn hình MSI G274QPX 27&quot; Rapid IPS 2K 240Hz G-Sync">Màn
                                                                                        hình MSI G274QPX 27" Rapid IPS
                                                                                        2K 240Hz G-Sync</a><span
                                                                                        class="variant">Default
                                                                                        Title</span>
                                                                                    <div
                                                                                        class="quantity-area-cartmini d-flex d-flex-center">
                                                                                        <input type="text"
                                                                                            name="quantity_minicart"
                                                                                            value="1"
                                                                                            min="1"
                                                                                            class="quantity-mini"><span
                                                                                            class="pro-price-view">9,750,000₫</span>
                                                                                    </div><span
                                                                                        class="remove_link remove-cart"><a
                                                                                            href="javascript:void(0);"
                                                                                            onclick="window.wd.scofield.deletecart(1)"><i
                                                                                                class="fa fa-times"></i></a></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="list-item" data-line="2">
                                                                                <td class="img"><a
                                                                                        href="/products/man-hinh-do-hoa-asus-proart-pa328qv"
                                                                                        title="Màn hình đồ họa Asus ProArt PA328QV (32″/ WQHD 2K/ IPS/ 5ms/ 75Hz/100% sRGB)"><img
                                                                                            src="//product.hstatic.net/200000837185/product/asus-proart-pa328qv-01_compressed_8aa758b29e0843f987b78537be9d0b9c_medium.jpg"
                                                                                            alt="Màn hình đồ họa Asus ProArt PA328QV (32″/ WQHD 2K/ IPS/ 5ms/ 75Hz/100% sRGB)"></a>
                                                                                </td>
                                                                                <td class="item"><a
                                                                                        class="pro-title-view"
                                                                                        href="/products/man-hinh-do-hoa-asus-proart-pa328qv"
                                                                                        title="Màn hình đồ họa Asus ProArt PA328QV (32″/ WQHD 2K/ IPS/ 5ms/ 75Hz/100% sRGB)">Màn
                                                                                        hình đồ họa Asus ProArt PA328QV
                                                                                        (32″/ WQHD 2K/ IPS/ 5ms/
                                                                                        75Hz/100% sRGB)</a><span
                                                                                        class="variant">Default
                                                                                        Title</span>
                                                                                    <div
                                                                                        class="quantity-area-cartmini d-flex d-flex-center">
                                                                                        <input type="text"
                                                                                            name="quantity_minicart"
                                                                                            value="1"
                                                                                            min="1"
                                                                                            class="quantity-mini"><span
                                                                                            class="pro-price-view">13,590,000₫</span>
                                                                                    </div><span
                                                                                        class="remove_link remove-cart"><a
                                                                                            href="javascript:void(0);"
                                                                                            onclick="window.wd.scofield.deletecart(2)"><i
                                                                                                class="fa fa-times"></i></a></span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <span class="line"></span>
                                                                <table class="table-total">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left title-total">TỔNG
                                                                                TIỀN:</td>
                                                                            <td class="text-right"
                                                                                id="total-view-cart">23,340,000₫</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="/cart"
                                                                                    class="wanda-cart-url btn">Xem giỏ
                                                                                    hàng</a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="/checkout"
                                                                                    class="wanda-checkout-url btn">Thanh
                                                                                    toán</a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
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
            <div class="header-bottom hidden-sm hidden-xs">
                <div class="container">
                    <div class="d-flex  d-flex-center row-left-list">
                        <div class="navigation-category col-md-3 pd-right-0 index-tp">
                            <div class="head-title">
                                <div class="icon">
                                    <img width="24" height="24" alt="Danh mục sản phẩm"
                                        src="https://file.hstatic.net/200000713019/file/category_cc0fade29df84dbdbce905c303557980.png">
                                </div>
                                <span>Danh mục sản phẩm</span>
                            </div>
                            <div class="group-fixed-nav">
                                <nav class="nav-group">
                                    <ul class="navigation list-menu-nav scroll">
                                        <li class="mn-item active-nav has-child">
                                            <a href="/collections/laptop" class="menu-item__link item-link"
                                                title="Laptop">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/laptop-material-svgrepo-com_5b447a528b824e319403189dd194bc7c.svg"
                                                    alt="Laptop">
                                                <span>Laptop</span>
                                                <i class="float-right arrow-right"></i> </a>
                                            <div class="submenu scroll">
                                                <div class="view-all visible-xs visible-sm">
                                                    <span class="nav-menu-mb-close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                            height="20" x="0" y="0" viewBox="0 0 24 24"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <g>
                                                                <g fill="#fff" fill-rule="evenodd"
                                                                    clip-rule="evenodd">
                                                                    <path
                                                                        d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                    <path
                                                                        d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <a href="/collections/laptop">Xem tất cả »</a>
                                                </div>
                                                <div class="subMenuWrap">
                                                    <ul class="submenu__list">
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/" class=" item-link">
                                                                <span>Thương hiệu</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-acer"
                                                                        class=" item-link">ACER | PREDATOR</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-asus"
                                                                        class=" item-link">ASUS | ROG Gaming</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-msi"
                                                                        class=" item-link">MSI</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-lenovo"
                                                                        class=" item-link">LENOVO</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-gigabyte"
                                                                        class=" item-link">GIGABYTE | AORUS</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-hp"
                                                                        class=" item-link">HP | OMEN</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/laptop-msi" class=" item-link">
                                                                <span>MSI Gaming</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-van-phong-sanh-dieu"
                                                                        class=" item-link">Creator Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/laptop-msi-bravo-alpha-delta-series"
                                                                        class=" item-link">MSI AMD Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/gf-series"
                                                                        class=" item-link">GF / Cyborg Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/gp-series"
                                                                        class=" item-link">GP Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ge-series"
                                                                        class=" item-link">GE Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/gs-series"
                                                                        class=" item-link">GS Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/gt-series"
                                                                        class=" item-link">GT Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/msi-claw"
                                                                        class=" item-link">MSI Claw</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/laptop-asus" class=" item-link">
                                                                <span>ASUS | ROG Gaming</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/vivobook"
                                                                        class=" item-link">Vivobook</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tuf-series"
                                                                        class=" item-link">TUF Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/strix-g"
                                                                        class=" item-link">ROG Strix G</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/zephyrus"
                                                                        class=" item-link">ROG Zephyrus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/flow" class=" item-link">ROG
                                                                        Flow</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/scar" class=" item-link">ROG
                                                                        Scar</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/products/may-choi-game-asus-rog-ally"
                                                                        class=" item-link">ROG Ally</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/laptop-acer" class=" item-link">
                                                                <span>ACER | PREDATOR</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/aspire"
                                                                        class=" item-link">Aspire Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nitro-5"
                                                                        class=" item-link">Nitro Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/helios"
                                                                        class=" item-link">Helios Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/triton"
                                                                        class=" item-link">Triton Series</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/laptop-lenovo" class=" item-link">
                                                                <span>LENOVO Gaming</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ideapad-slim-5"
                                                                        class=" item-link">Slim 5</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/thinkpad"
                                                                        class=" item-link">ThinkPad</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/yoga"
                                                                        class=" item-link">Yoga</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ideapad-gaming"
                                                                        class=" item-link">IdeaPad</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/loq-series"
                                                                        class=" item-link">LOQ Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/legion-gaming"
                                                                        class=" item-link">Legion</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/laptop-gigabyte" class=" item-link">
                                                                <span>GIGABYTE Gaming</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/g5-series"
                                                                        class=" item-link">G5 Series</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/aorus"
                                                                        class=" item-link">Aorus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/aero"
                                                                        class=" item-link">Aero</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/laptop-hp" class=" item-link">
                                                                <span>HP Gaming</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/victus"
                                                                        class=" item-link">Victus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/omen"
                                                                        class=" item-link">Omen</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/laptop" class=" item-link">
                                                                <span>XEM TẤT CẢ LAPTOP</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mn-item  has-child">
                                            <a href="/collections/pc-gaming" class="menu-item__link item-link"
                                                title="Xgear PC">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/computer-and-monitor-svgrepo-com_2919cb4adb854d99b0b1ed6153ca24bf.svg"
                                                    alt="Xgear PC">
                                                <span>Xgear PC</span>
                                                <i class="float-right arrow-right"></i> </a>
                                            <div class="submenu scroll">
                                                <div class="view-all visible-xs visible-sm">
                                                    <span class="nav-menu-mb-close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                            height="20" x="0" y="0" viewBox="0 0 24 24"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <g>
                                                                <g fill="#fff" fill-rule="evenodd"
                                                                    clip-rule="evenodd">
                                                                    <path
                                                                        d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                    <path
                                                                        d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <a href="/collections/pc-gaming">Xem tất cả »</a>
                                                </div>
                                                <div class="subMenuWrap">
                                                    <ul class="submenu__list">
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="#" class=" item-link">
                                                                <span>PC theo hãng</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-asus"
                                                                        class=" item-link">PC Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-msi"
                                                                        class=" item-link">PC MSI</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-gigabyte"
                                                                        class=" item-link">PC Gigabyte</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="#" class=" item-link">
                                                                <span>PC Theo nhu cầu</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-do-hoa"
                                                                        class=" item-link">PC Đồ họa</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/xgear-pc"
                                                                        class=" item-link">PC Gaming</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-van-phong-1"
                                                                        class=" item-link">PC Văn phòng</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="#" class=" item-link">
                                                                <span>PC Theo giá</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-gia-duoi-10-trieu"
                                                                        class=" item-link">Giá dưới 10 triệu</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-gia-tu-15-trieu-25-trieu"
                                                                        class=" item-link">Từ 15 - 25 triệu</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-gia-tu-25-trieu-35-trieu"
                                                                        class=" item-link">Từ 25 - 35 triệu</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-gia-tren-35-trieu"
                                                                        class=" item-link">Trên 35 triệu</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/pc-amd" class=" item-link">
                                                                <span>PC CPU AMD</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-ryzen-5"
                                                                        class=" item-link">PC Ryzen 5</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-ryzen-7"
                                                                        class=" item-link">PC Ryzen 7</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/pc-cpu-intel" class=" item-link">
                                                                <span>PC CPU Intel</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-core-i3"
                                                                        class=" item-link">PC Core i3</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-core-i5"
                                                                        class=" item-link">PC Core i5</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/pc-core-i7"
                                                                        class=" item-link">PC Core i7</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/mini-pc" class=" item-link">
                                                                <span>Mini PC</span>
                                                            </a>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/pages/xay-dung-cau-hinh" class=" item-link">
                                                                <span>Xây dựng cấu hình</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mn-item  has-child">
                                            <a href="/collections/man-hinh" class="menu-item__link item-link"
                                                title="Màn hình">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/monitor-svgrepo-com_b087a7612e1d416e912b35f314f15d5a.svg"
                                                    alt="Màn hình">
                                                <span>Màn hình</span>
                                                <i class="float-right arrow-right"></i> </a>
                                            <div class="submenu scroll">
                                                <div class="view-all visible-xs visible-sm">
                                                    <span class="nav-menu-mb-close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                            height="20" x="0" y="0" viewBox="0 0 24 24"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <g>
                                                                <g fill="#fff" fill-rule="evenodd"
                                                                    clip-rule="evenodd">
                                                                    <path
                                                                        d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                    <path
                                                                        d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <a href="/collections/man-hinh">Xem tất cả »</a>
                                                </div>
                                                <div class="subMenuWrap">
                                                    <ul class="submenu__list">
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/man-hinh-theo-hang"
                                                                class=" item-link">
                                                                <span>Màn hình theo hãng</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-acer"
                                                                        class=" item-link">Màn hình Acer</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-asus"
                                                                        class=" item-link">Màn hình Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-dell"
                                                                        class=" item-link">Màn hình Dell</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-gigabyte"
                                                                        class=" item-link">Màn hình Gigabyte</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-msi"
                                                                        class=" item-link">Màn hình MSI</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-samsung"
                                                                        class=" item-link">Màn hình Samsung</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-philips"
                                                                        class=" item-link">Màn hình Philips</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/man-hinh-theo-nhu-cau"
                                                                class=" item-link">
                                                                <span>Màn hình theo nhu cầu</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-gaming"
                                                                        class=" item-link">Màn hình Gaming</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/man-hinh-do-hoa"
                                                                        class=" item-link">Màn hình Đồ họa</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/man-hinh-di-dong"
                                                                class=" item-link">
                                                                <span>Màn hình di động</span>
                                                            </a>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/phu-kien-man-hinh"
                                                                class=" item-link">
                                                                <span>Phụ kiện màn hình</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/gia-treo-man-hinh-human-motion"
                                                                        class=" item-link">Giá treo màn hình Human
                                                                        Motion</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/gia-treo-man-hinh-north-bayou"
                                                                        class=" item-link">Gía treo màn hình North
                                                                        Bayou</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mn-item  has-child">
                                            <a href="/collections/linh-kien" class="menu-item__link item-link"
                                                title="Linh Kiện">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/cpu-chip-01-svgrepo-com_990cdf4bd7784321bd417ccdf307ad8e.svg"
                                                    alt="Linh Kiện">
                                                <span>Linh Kiện</span>
                                                <i class="float-right arrow-right"></i> </a>
                                            <div class="submenu scroll">
                                                <div class="view-all visible-xs visible-sm">
                                                    <span class="nav-menu-mb-close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                            height="20" x="0" y="0" viewBox="0 0 24 24"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <g>
                                                                <g fill="#fff" fill-rule="evenodd"
                                                                    clip-rule="evenodd">
                                                                    <path
                                                                        d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                    <path
                                                                        d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class=""></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <a href="/collections/linh-kien">Xem tất cả »</a>
                                                </div>
                                                <div class="subMenuWrap">
                                                    <ul class="submenu__list">
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/cpu" class=" item-link">
                                                                <span>CPU</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/cpu-amd"
                                                                        class=" item-link">CPU AMD</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/cpu-intel"
                                                                        class=" item-link">CPU Intel</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/mainboard" class=" item-link">
                                                                <span>Mainboard</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/mainboard-asus"
                                                                        class=" item-link">Mainboard Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/mainboard-gigabyte"
                                                                        class=" item-link">Mainboard Gigabyte</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/mainboard-msi"
                                                                        class=" item-link">Mainboard MSI</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/vga" class=" item-link">
                                                                <span>Card màn hình VGA</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/vga-asus"
                                                                        class=" item-link">VGA ASUS</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/vga-gigabyte"
                                                                        class=" item-link">VGA Gigabyte</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/vga-msi"
                                                                        class=" item-link">VGA MSI</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/ram" class=" item-link">
                                                                <span>RAM</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ram-laptop"
                                                                        class=" item-link">RAM Laptop</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ram-pc"
                                                                        class=" item-link">RAM PC</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/ssd" class=" item-link">
                                                                <span>SSD</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ssd-120gb-128gb"
                                                                        class=" item-link">120GB - 128GB</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ssd-250gb-256gb"
                                                                        class=" item-link">250GB - 256GB</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ssd-500gb-512gb"
                                                                        class=" item-link">500GB - 512GB</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ssd-1tb-2tb"
                                                                        class=" item-link">1TB - 2TB</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/hdd" class=" item-link">
                                                                <span>HDD</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/hdd-laptop"
                                                                        class=" item-link">HDD Laptop</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/hdd-pc"
                                                                        class=" item-link">HDD PC</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/nguon-psu" class=" item-link">
                                                                <span>Nguồn máy tính PSU</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nguon-antec"
                                                                        class=" item-link">Nguồn Antec</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nguon-asus"
                                                                        class=" item-link">Nguồn Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nguon-cooler-master"
                                                                        class=" item-link">Nguồn Cooler Master</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nguon-corsair"
                                                                        class=" item-link">Nguồn Corsair</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nguon-deepcool"
                                                                        class=" item-link">Nguồn Deepcool</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nguon-gigabyte"
                                                                        class=" item-link">Nguồn Gigabyte</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/nguon-msi"
                                                                        class=" item-link">Nguồn MSI</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/tan-nhiet-cpu" class=" item-link">
                                                                <span>Tản nhiệt CPU</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-arctic"
                                                                        class=" item-link">Tản nhiệt Arctic</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-asus"
                                                                        class=" item-link">Tản nhiệt Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-cooler-master"
                                                                        class=" item-link">Tản nhiệt Cooler Master</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-corsair"
                                                                        class=" item-link">Tản nhiệt Corsair</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-deepcool"
                                                                        class=" item-link">Tản nhiệt Deepcool</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-gigabyte"
                                                                        class=" item-link">Tản nhiệt Gigabyte</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-noctua"
                                                                        class=" item-link">Tản nhiệt Noctua</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tan-nhiet-msi"
                                                                        class=" item-link">Tản nhiệt MSI</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/case-may-tinh" class=" item-link">
                                                                <span>Case máy tính</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-1st-player"
                                                                        class=" item-link">Case 1st Player</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-sama"
                                                                        class=" item-link">Case SAMA</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-deepcool"
                                                                        class=" item-link">Case Deepcool</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-cooler-master"
                                                                        class=" item-link">Case Cooler Master</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-msi"
                                                                        class=" item-link">Case MSI</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-hyte"
                                                                        class=" item-link">Case HYTE</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-corsair"
                                                                        class=" item-link">Case Corsair</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-asus"
                                                                        class=" item-link">Case Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-gigabyte"
                                                                        class=" item-link">Case Gigabyte</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/case-xigmatek"
                                                                        class=" item-link">Case Xigmatek</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/quat-case" class=" item-link">
                                                                <span>Quạt Case</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/quat-arctic"
                                                                        class=" item-link">Quạt Arctic</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/quat-cooler-master"
                                                                        class=" item-link">Quạt Cooler Master</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/quat-deepcool"
                                                                        class=" item-link">Quạt Deepcool</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/quat-msi"
                                                                        class=" item-link">Quạt MSI</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/quat-xigmatek"
                                                                        class=" item-link">Quạt Xigmatek</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mn-item  has-child">
                                            <a href="/collections/gaming-gear" class="menu-item__link item-link"
                                                title="Gaming Gear">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/keyboard-svgrepo-com_168b31415fc24bfc8431a4f2d6df698a.svg"
                                                    alt="Gaming Gear">
                                                <span>Gaming Gear</span>
                                                <i class="float-right arrow-right"></i> </a>
                                            <div class="submenu scroll">
                                                <div class="view-all visible-xs visible-sm">
                                                    <span class="nav-menu-mb-close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="20" height="20" x="0" y="0"
                                                            viewBox="0 0 24 24"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <g>
                                                                <g fill="#fff" fill-rule="evenodd"
                                                                    clip-rule="evenodd">
                                                                    <path
                                                                        d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class="">
                                                                    </path>
                                                                    <path
                                                                        d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class="">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <a href="/collections/gaming-gear">Xem tất cả »</a>
                                                </div>
                                                <div class="subMenuWrap">
                                                    <ul class="submenu__list">
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/ban-phim" class=" item-link">
                                                                <span>Bàn phím</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-dareu"
                                                                        class=" item-link">Bàn phím DareU</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-logitech"
                                                                        class=" item-link">Bàn phím Logitech</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-razer"
                                                                        class=" item-link">Bàn phím Razer</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-vgn"
                                                                        class=" item-link">Bàn phím VGN</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-akko"
                                                                        class=" item-link">Bàn phím Akko</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-asus"
                                                                        class=" item-link">Bàn phím Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-durgod"
                                                                        class=" item-link">Bàn phím Durgod</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-ikbc"
                                                                        class=" item-link">Bàn phím iKBC</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/ban-phim-rapoo"
                                                                        class=" item-link">Bàn phím Rapoo</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/chuot" class=" item-link">
                                                                <span>Chuột</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/chuot-logitech"
                                                                        class=" item-link">Chuột Logitech</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/chuot-razer"
                                                                        class=" item-link">Chuột Razer</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/chuot-dareu"
                                                                        class=" item-link">Chuột DareU</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/chuot-vgn"
                                                                        class=" item-link">Chuột VGN</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/chuot-asus"
                                                                        class=" item-link">Chuột Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/chuot-hyperx"
                                                                        class=" item-link">Chuột HyperX</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/chuot-rapoo"
                                                                        class=" item-link">Chuột Rapoo</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/tai-nghe" class=" item-link">
                                                                <span>Tai nghe</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tai-nghe-asus"
                                                                        class=" item-link">Tai nghe Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tai-nghe-hyperx"
                                                                        class=" item-link">Tai nghe HyperX</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tai-nghe-logitech"
                                                                        class=" item-link">Tai nghe Logitech</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tai-nghe-rapoo"
                                                                        class=" item-link">Tai nghe Rapoo</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/tai-nghe-razer"
                                                                        class=" item-link">Tai nghe Razer</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/lot-chuot" class=" item-link">
                                                                <span>Lót chuột</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/lot-chuot-dareu"
                                                                        class=" item-link">Lót chuột DareU</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/lot-chuot-asus"
                                                                        class=" item-link">Lót chuột Asus</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/lot-chuot-razer"
                                                                        class=" item-link">Lót chuột Razer</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/lot-chuot-logitech"
                                                                        class=" item-link">Lót chuột Logitech</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 ">-->
                                                        <li class="item-lv1 hasChild">
                                                            <a href="/collections/microphone" class=" item-link">
                                                                <span>Microphone</span>
                                                                <i class="float-right fa fa-chevron-right"></i> </a>
                                                            <ul class="subnav">
                                                                <li class="item-lv2">
                                                                    <a href="/collections/microphone-hyperx"
                                                                        class=" item-link">Microphone HyperX</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/microphone-razer"
                                                                        class=" item-link">Microphone Razer</a>
                                                                </li>
                                                                <li class="item-lv2">
                                                                    <a href="/collections/micro-thronmax"
                                                                        class=" item-link">Microphone Thronmax</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/loa" class=" item-link">
                                                                <span>Loa</span>
                                                            </a>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/tay-cam" class=" item-link">
                                                                <span>Tay cầm</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mn-item  has-child">
                                            <a href="/collections/phu-kien" class="menu-item__link item-link"
                                                title="Phụ kiện">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/backpack-bag-holidays-svgrepo-com_cf9a26a2c3e04a888f813d7c98bd90a9.svg"
                                                    alt="Phụ kiện">
                                                <span>Phụ kiện</span>
                                                <i class="float-right arrow-right"></i> </a>
                                            <div class="submenu scroll">
                                                <div class="view-all visible-xs visible-sm">
                                                    <span class="nav-menu-mb-close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="20" height="20" x="0" y="0"
                                                            viewBox="0 0 24 24"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <g>
                                                                <g fill="#fff" fill-rule="evenodd"
                                                                    clip-rule="evenodd">
                                                                    <path
                                                                        d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class="">
                                                                    </path>
                                                                    <path
                                                                        d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                        fill="#ffffff" opacity="1"
                                                                        data-original="#000000" class="">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <a href="/collections/phu-kien">Xem tất cả »</a>
                                                </div>
                                                <div class="subMenuWrap">
                                                    <ul class="submenu__list">
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/balo-tui-xach" class=" item-link">
                                                                <span>Balo</span>
                                                            </a>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/de-tan-nhiet" class=" item-link">
                                                                <span>Đế tản nhiệt</span>
                                                            </a>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/phu-kien-pc" class=" item-link">
                                                                <span>Phụ kiện PC</span>
                                                            </a>
                                                        </li>
                                                        <!--<li class="item-lv1 no-bold">-->
                                                        <li class="item-lv1 ">
                                                            <a href="/collections/thiet-bi-mang" class=" item-link">
                                                                <span>Thiết bị mạng</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mn-item  ">
                                            <a href="/collections/xgear-corner" class="menu-item__link item-link"
                                                title="Bàn/Ghế">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/chair-office-svgrepo-com__1__c53b5e823dd24b3d99f3621545b4ea92.svg"
                                                    alt="Bàn/Ghế">
                                                <span>Bàn/Ghế</span>
                                            </a>
                                        </li>
                                        <li class="mn-item  ">
                                            <a href="/collections/phan-mem" class="menu-item__link item-link"
                                                title="Phần mềm">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/app-apps-applications-tiles-svgrepo-com_8e0598988e62413eba422d6b96b4c502.svg"
                                                    alt="Phần mềm">
                                                <span>Phần mềm</span>
                                            </a>
                                        </li>
                                        <li class="mn-item  ">
                                            <a href="/pages/xay-dung-cau-hinh" class="menu-item__link item-link"
                                                title="Tự chọn cấu hình">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/gear-svgrepo-com_6b6445680ece44faa5788d8969a1fff1.svg"
                                                    alt="Tự chọn cấu hình">
                                                <span>Tự chọn cấu hình</span>
                                            </a>
                                        </li>
                                        <li class="mn-item  ">
                                            <a href="/pages/khuyen-mai" class="menu-item__link item-link"
                                                title="Khuyến mãi">
                                                <img width="24" height="24"
                                                    src="//file.hstatic.net/200000837185/file/icons8-sale-30_9693e75164554a859c9fb63763c2388f_icon.png"
                                                    alt="Khuyến mãi">
                                                <span>Khuyến mãi</span>
                                            </a>
                                        </li>
                                        <li class="mn-item  ">
                                            <a href="/collections/san-pham-ban-chay"
                                                class="menu-item__link item-link" title="Best seller">
                                                <img width="24" height="24"
                                                    src="https://file.hstatic.net/200000837185/file/sale-svgrepo-com_8d924f3baa48440e8241868f8dd82e13.svg"
                                                    alt="Best seller">
                                                <span>Best seller</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="sticky-overlay"></div>
                        <nav class="site-nav-menu col-md-9 pd-right-0">
                            <ul class="d-flex">
                                <li class="">
                                    <a href="http://xgear.net/pages/huong-dan-thanh-toan"><span class="icon"><img
                                                width="25" height="25"
                                                src="https://file.hstatic.net/200000837185/file/payment-method-pay-svgrepo-com_e04150442c1a474a988ca139daf53e5d.svg"
                                                alt="Hướng dẫn thanh toán"></span>Hướng dẫn thanh toán</a>
                                </li>
                                <li class="">
                                    <a href="/pages/huong-dan-tra-gop"><span class="icon"><img width="25"
                                                height="25"
                                                src="//file.hstatic.net/200000713019/file/policy_header_image_3_4d4c94de9c514e37ae4414e4de773c06_icon.png"
                                                alt="Hướng dẫn trả góp"></span>Hướng dẫn trả góp</a>
                                </li>
                                <li class="">
                                    <a href="http://xgear.net/pages/chinh-sach-bao-hanh"><span class="icon"><img
                                                width="25" height="25"
                                                src="https://file.hstatic.net/200000837185/file/file-alt-svgrepo-com_8f775ecb322744979cf29a43c09091b2.svg"
                                                alt="Chính sách bảo hành"></span>Chính sách bảo hành</a>
                                </li>
                                <li class="">
                                    <a href="/blogs/tin-tuc/tuyen-dung-nam-moi-co-hoi-moi-cong-viec-moi"><span
                                            class="icon"><img width="25" height="25"
                                                src="https://file.hstatic.net/200000837185/file/search-file-svgrepo-com_88e5c3f8d8a6498e81fd854c0156db82.svg"
                                                alt="Tuyển dụng"></span>Tuyển dụng</a>
                                </li>
                                <li class="">
                                    <a href="/blogs/all"><span class="icon"><img width="25" height="25"
                                                src="https://file.hstatic.net/200000837185/file/file-alt-svgrepo-com_8f775ecb322744979cf29a43c09091b2.svg"
                                                alt="Chia sẻ"></span>Chia sẻ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <h1 class="hidden">Xgear</h1>
            <section id="home-slider" class=" mg-0-mb">
                <div class="container pd-0-mb">
                    <div class=" d-flex row-left-list">
                        <div class="col-md-12 hidden-sm hidden-xs pd-right-0 z-index-high nav-category-group">
                            <nav class="nav-group">
                                <ul class="navigation list-menu-nav scroll">
                                    <li class="mn-item active-nav has-child">
                                        <a href="/collections/laptop" class="menu-item__link item-link"
                                            title="Laptop">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/laptop-material-svgrepo-com_5b447a528b824e319403189dd194bc7c.svg"
                                                alt="Laptop">
                                            <span>Laptop</span>
                                            <i class="float-right arrow-right"></i> </a>
                                        <div class="submenu scroll">
                                            <div class="view-all visible-xs visible-sm">
                                                <span class="nav-menu-mb-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                        height="20" x="0" y="0" viewBox="0 0 24 24"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <g fill="#fff" fill-rule="evenodd"
                                                                clip-rule="evenodd">
                                                                <path
                                                                    d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                                <path
                                                                    d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <a href="/collections/laptop">Xem tất cả »</a>
                                            </div>
                                            <div class="subMenuWrap">
                                                <ul class="submenu__list">
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/" class=" item-link">
                                                            <span>Thương hiệu</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-acer"
                                                                    class=" item-link">ACER | PREDATOR</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-asus"
                                                                    class=" item-link">ASUS | ROG Gaming</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-msi"
                                                                    class=" item-link">MSI</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-lenovo"
                                                                    class=" item-link">LENOVO</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-gigabyte"
                                                                    class=" item-link">GIGABYTE | AORUS</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-hp"
                                                                    class=" item-link">HP | OMEN</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/laptop-msi" class=" item-link">
                                                            <span>MSI Gaming</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-van-phong-sanh-dieu"
                                                                    class=" item-link">Creator Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/laptop-msi-bravo-alpha-delta-series"
                                                                    class=" item-link">MSI AMD Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/gf-series"
                                                                    class=" item-link">GF / Cyborg Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/gp-series"
                                                                    class=" item-link">GP Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ge-series"
                                                                    class=" item-link">GE Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/gs-series"
                                                                    class=" item-link">GS Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/gt-series"
                                                                    class=" item-link">GT Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/msi-claw"
                                                                    class=" item-link">MSI Claw</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/laptop-asus" class=" item-link">
                                                            <span>ASUS | ROG Gaming</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/vivobook"
                                                                    class=" item-link">Vivobook</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tuf-series"
                                                                    class=" item-link">TUF Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/strix-g"
                                                                    class=" item-link">ROG Strix G</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/zephyrus"
                                                                    class=" item-link">ROG Zephyrus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/flow" class=" item-link">ROG
                                                                    Flow</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/scar" class=" item-link">ROG
                                                                    Scar</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/products/may-choi-game-asus-rog-ally"
                                                                    class=" item-link">ROG Ally</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/laptop-acer" class=" item-link">
                                                            <span>ACER | PREDATOR</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/aspire"
                                                                    class=" item-link">Aspire Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/nitro-5"
                                                                    class=" item-link">Nitro Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/helios"
                                                                    class=" item-link">Helios Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/triton"
                                                                    class=" item-link">Triton Series</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/laptop-lenovo" class=" item-link">
                                                            <span>LENOVO Gaming</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/ideapad-slim-5"
                                                                    class=" item-link">Slim 5</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/thinkpad"
                                                                    class=" item-link">ThinkPad</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/yoga"
                                                                    class=" item-link">Yoga</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ideapad-gaming"
                                                                    class=" item-link">IdeaPad</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/loq-series"
                                                                    class=" item-link">LOQ Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/legion-gaming"
                                                                    class=" item-link">Legion</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/laptop-gigabyte" class=" item-link">
                                                            <span>GIGABYTE Gaming</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/g5-series"
                                                                    class=" item-link">G5 Series</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/aorus"
                                                                    class=" item-link">Aorus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/aero"
                                                                    class=" item-link">Aero</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/laptop-hp" class=" item-link">
                                                            <span>HP Gaming</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/victus"
                                                                    class=" item-link">Victus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/omen"
                                                                    class=" item-link">Omen</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/laptop" class=" item-link">
                                                            <span>XEM TẤT CẢ LAPTOP</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mn-item  has-child">
                                        <a href="/collections/pc-gaming" class="menu-item__link item-link"
                                            title="Xgear PC">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/computer-and-monitor-svgrepo-com_2919cb4adb854d99b0b1ed6153ca24bf.svg"
                                                alt="Xgear PC">
                                            <span>Xgear PC</span>
                                            <i class="float-right arrow-right"></i> </a>
                                        <div class="submenu scroll">
                                            <div class="view-all visible-xs visible-sm">
                                                <span class="nav-menu-mb-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                        height="20" x="0" y="0" viewBox="0 0 24 24"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <g fill="#fff" fill-rule="evenodd"
                                                                clip-rule="evenodd">
                                                                <path
                                                                    d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                                <path
                                                                    d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <a href="/collections/pc-gaming">Xem tất cả »</a>
                                            </div>
                                            <div class="subMenuWrap">
                                                <ul class="submenu__list">
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="#" class=" item-link">
                                                            <span>PC theo hãng</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-asus" class=" item-link">PC
                                                                    Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-msi" class=" item-link">PC
                                                                    MSI</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-gigabyte"
                                                                    class=" item-link">PC Gigabyte</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="#" class=" item-link">
                                                            <span>PC Theo nhu cầu</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-do-hoa"
                                                                    class=" item-link">PC Đồ họa</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/xgear-pc"
                                                                    class=" item-link">PC Gaming</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-van-phong-1"
                                                                    class=" item-link">PC Văn phòng</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="#" class=" item-link">
                                                            <span>PC Theo giá</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-gia-duoi-10-trieu"
                                                                    class=" item-link">Giá dưới 10 triệu</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-gia-tu-15-trieu-25-trieu"
                                                                    class=" item-link">Từ 15 - 25 triệu</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-gia-tu-25-trieu-35-trieu"
                                                                    class=" item-link">Từ 25 - 35 triệu</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-gia-tren-35-trieu"
                                                                    class=" item-link">Trên 35 triệu</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/pc-amd" class=" item-link">
                                                            <span>PC CPU AMD</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-ryzen-5"
                                                                    class=" item-link">PC Ryzen 5</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-ryzen-7"
                                                                    class=" item-link">PC Ryzen 7</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/pc-cpu-intel" class=" item-link">
                                                            <span>PC CPU Intel</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-core-i3"
                                                                    class=" item-link">PC Core i3</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-core-i5"
                                                                    class=" item-link">PC Core i5</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/pc-core-i7"
                                                                    class=" item-link">PC Core i7</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/mini-pc" class=" item-link">
                                                            <span>Mini PC</span>
                                                        </a>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/pages/xay-dung-cau-hinh" class=" item-link">
                                                            <span>Xây dựng cấu hình</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mn-item  has-child">
                                        <a href="/collections/man-hinh" class="menu-item__link item-link"
                                            title="Màn hình">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/monitor-svgrepo-com_b087a7612e1d416e912b35f314f15d5a.svg"
                                                alt="Màn hình">
                                            <span>Màn hình</span>
                                            <i class="float-right arrow-right"></i> </a>
                                        <div class="submenu scroll">
                                            <div class="view-all visible-xs visible-sm">
                                                <span class="nav-menu-mb-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                        height="20" x="0" y="0" viewBox="0 0 24 24"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <g fill="#fff" fill-rule="evenodd"
                                                                clip-rule="evenodd">
                                                                <path
                                                                    d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                                <path
                                                                    d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <a href="/collections/man-hinh">Xem tất cả »</a>
                                            </div>
                                            <div class="subMenuWrap">
                                                <ul class="submenu__list">
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/man-hinh-theo-hang"
                                                            class=" item-link">
                                                            <span>Màn hình theo hãng</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-acer"
                                                                    class=" item-link">Màn hình Acer</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-asus"
                                                                    class=" item-link">Màn hình Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-dell"
                                                                    class=" item-link">Màn hình Dell</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-gigabyte"
                                                                    class=" item-link">Màn hình Gigabyte</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-msi"
                                                                    class=" item-link">Màn hình MSI</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-samsung"
                                                                    class=" item-link">Màn hình Samsung</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-philips"
                                                                    class=" item-link">Màn hình Philips</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/man-hinh-theo-nhu-cau"
                                                            class=" item-link">
                                                            <span>Màn hình theo nhu cầu</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-gaming"
                                                                    class=" item-link">Màn hình Gaming</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/man-hinh-do-hoa"
                                                                    class=" item-link">Màn hình Đồ họa</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/man-hinh-di-dong" class=" item-link">
                                                            <span>Màn hình di động</span>
                                                        </a>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/phu-kien-man-hinh" class=" item-link">
                                                            <span>Phụ kiện màn hình</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/gia-treo-man-hinh-human-motion"
                                                                    class=" item-link">Giá treo màn hình Human
                                                                    Motion</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/gia-treo-man-hinh-north-bayou"
                                                                    class=" item-link">Gía treo màn hình North
                                                                    Bayou</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mn-item  has-child">
                                        <a href="/collections/linh-kien" class="menu-item__link item-link"
                                            title="Linh Kiện">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/cpu-chip-01-svgrepo-com_990cdf4bd7784321bd417ccdf307ad8e.svg"
                                                alt="Linh Kiện">
                                            <span>Linh Kiện</span>
                                            <i class="float-right arrow-right"></i> </a>
                                        <div class="submenu scroll">
                                            <div class="view-all visible-xs visible-sm">
                                                <span class="nav-menu-mb-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                        height="20" x="0" y="0" viewBox="0 0 24 24"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <g fill="#fff" fill-rule="evenodd"
                                                                clip-rule="evenodd">
                                                                <path
                                                                    d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                                <path
                                                                    d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <a href="/collections/linh-kien">Xem tất cả »</a>
                                            </div>
                                            <div class="subMenuWrap">
                                                <ul class="submenu__list">
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/cpu" class=" item-link">
                                                            <span>CPU</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/cpu-amd"
                                                                    class=" item-link">CPU AMD</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/cpu-intel"
                                                                    class=" item-link">CPU Intel</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/mainboard" class=" item-link">
                                                            <span>Mainboard</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/mainboard-asus"
                                                                    class=" item-link">Mainboard Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/mainboard-gigabyte"
                                                                    class=" item-link">Mainboard Gigabyte</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/mainboard-msi"
                                                                    class=" item-link">Mainboard MSI</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/vga" class=" item-link">
                                                            <span>Card màn hình VGA</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/vga-asus"
                                                                    class=" item-link">VGA ASUS</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/vga-gigabyte"
                                                                    class=" item-link">VGA Gigabyte</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/vga-msi"
                                                                    class=" item-link">VGA MSI</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/ram" class=" item-link">
                                                            <span>RAM</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/ram-laptop"
                                                                    class=" item-link">RAM Laptop</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ram-pc" class=" item-link">RAM
                                                                    PC</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/ssd" class=" item-link">
                                                            <span>SSD</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/ssd-120gb-128gb"
                                                                    class=" item-link">120GB - 128GB</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ssd-250gb-256gb"
                                                                    class=" item-link">250GB - 256GB</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ssd-500gb-512gb"
                                                                    class=" item-link">500GB - 512GB</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ssd-1tb-2tb"
                                                                    class=" item-link">1TB - 2TB</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/hdd" class=" item-link">
                                                            <span>HDD</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/hdd-laptop"
                                                                    class=" item-link">HDD Laptop</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/hdd-pc" class=" item-link">HDD
                                                                    PC</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/nguon-psu" class=" item-link">
                                                            <span>Nguồn máy tính PSU</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/nguon-antec"
                                                                    class=" item-link">Nguồn Antec</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/nguon-asus"
                                                                    class=" item-link">Nguồn Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/nguon-cooler-master"
                                                                    class=" item-link">Nguồn Cooler Master</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/nguon-corsair"
                                                                    class=" item-link">Nguồn Corsair</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/nguon-deepcool"
                                                                    class=" item-link">Nguồn Deepcool</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/nguon-gigabyte"
                                                                    class=" item-link">Nguồn Gigabyte</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/nguon-msi"
                                                                    class=" item-link">Nguồn MSI</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/tan-nhiet-cpu" class=" item-link">
                                                            <span>Tản nhiệt CPU</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-arctic"
                                                                    class=" item-link">Tản nhiệt Arctic</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-asus"
                                                                    class=" item-link">Tản nhiệt Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-cooler-master"
                                                                    class=" item-link">Tản nhiệt Cooler Master</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-corsair"
                                                                    class=" item-link">Tản nhiệt Corsair</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-deepcool"
                                                                    class=" item-link">Tản nhiệt Deepcool</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-gigabyte"
                                                                    class=" item-link">Tản nhiệt Gigabyte</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-noctua"
                                                                    class=" item-link">Tản nhiệt Noctua</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tan-nhiet-msi"
                                                                    class=" item-link">Tản nhiệt MSI</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/case-may-tinh" class=" item-link">
                                                            <span>Case máy tính</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-1st-player"
                                                                    class=" item-link">Case 1st Player</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-sama"
                                                                    class=" item-link">Case SAMA</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-deepcool"
                                                                    class=" item-link">Case Deepcool</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-cooler-master"
                                                                    class=" item-link">Case Cooler Master</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-msi"
                                                                    class=" item-link">Case MSI</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-hyte"
                                                                    class=" item-link">Case HYTE</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-corsair"
                                                                    class=" item-link">Case Corsair</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-asus"
                                                                    class=" item-link">Case Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-gigabyte"
                                                                    class=" item-link">Case Gigabyte</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/case-xigmatek"
                                                                    class=" item-link">Case Xigmatek</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/quat-case" class=" item-link">
                                                            <span>Quạt Case</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/quat-arctic"
                                                                    class=" item-link">Quạt Arctic</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/quat-cooler-master"
                                                                    class=" item-link">Quạt Cooler Master</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/quat-deepcool"
                                                                    class=" item-link">Quạt Deepcool</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/quat-msi"
                                                                    class=" item-link">Quạt MSI</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/quat-xigmatek"
                                                                    class=" item-link">Quạt Xigmatek</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mn-item  has-child">
                                        <a href="/collections/gaming-gear" class="menu-item__link item-link"
                                            title="Gaming Gear">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/keyboard-svgrepo-com_168b31415fc24bfc8431a4f2d6df698a.svg"
                                                alt="Gaming Gear">
                                            <span>Gaming Gear</span>
                                            <i class="float-right arrow-right"></i> </a>
                                        <div class="submenu scroll">
                                            <div class="view-all visible-xs visible-sm">
                                                <span class="nav-menu-mb-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                        height="20" x="0" y="0" viewBox="0 0 24 24"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <g fill="#fff" fill-rule="evenodd"
                                                                clip-rule="evenodd">
                                                                <path
                                                                    d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                                <path
                                                                    d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <a href="/collections/gaming-gear">Xem tất cả »</a>
                                            </div>
                                            <div class="subMenuWrap">
                                                <ul class="submenu__list">
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/ban-phim" class=" item-link">
                                                            <span>Bàn phím</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-dareu"
                                                                    class=" item-link">Bàn phím DareU</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-logitech"
                                                                    class=" item-link">Bàn phím Logitech</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-razer"
                                                                    class=" item-link">Bàn phím Razer</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-vgn"
                                                                    class=" item-link">Bàn phím VGN</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-akko"
                                                                    class=" item-link">Bàn phím Akko</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-asus"
                                                                    class=" item-link">Bàn phím Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-durgod"
                                                                    class=" item-link">Bàn phím Durgod</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-ikbc"
                                                                    class=" item-link">Bàn phím iKBC</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/ban-phim-rapoo"
                                                                    class=" item-link">Bàn phím Rapoo</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/chuot" class=" item-link">
                                                            <span>Chuột</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/chuot-logitech"
                                                                    class=" item-link">Chuột Logitech</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/chuot-razer"
                                                                    class=" item-link">Chuột Razer</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/chuot-dareu"
                                                                    class=" item-link">Chuột DareU</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/chuot-vgn"
                                                                    class=" item-link">Chuột VGN</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/chuot-asus"
                                                                    class=" item-link">Chuột Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/chuot-hyperx"
                                                                    class=" item-link">Chuột HyperX</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/chuot-rapoo"
                                                                    class=" item-link">Chuột Rapoo</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/tai-nghe" class=" item-link">
                                                            <span>Tai nghe</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/tai-nghe-asus"
                                                                    class=" item-link">Tai nghe Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tai-nghe-hyperx"
                                                                    class=" item-link">Tai nghe HyperX</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tai-nghe-logitech"
                                                                    class=" item-link">Tai nghe Logitech</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tai-nghe-rapoo"
                                                                    class=" item-link">Tai nghe Rapoo</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/tai-nghe-razer"
                                                                    class=" item-link">Tai nghe Razer</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/lot-chuot" class=" item-link">
                                                            <span>Lót chuột</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/lot-chuot-dareu"
                                                                    class=" item-link">Lót chuột DareU</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/lot-chuot-asus"
                                                                    class=" item-link">Lót chuột Asus</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/lot-chuot-razer"
                                                                    class=" item-link">Lót chuột Razer</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/lot-chuot-logitech"
                                                                    class=" item-link">Lót chuột Logitech</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 ">-->
                                                    <li class="item-lv1 hasChild">
                                                        <a href="/collections/microphone" class=" item-link">
                                                            <span>Microphone</span>
                                                            <i class="float-right fa fa-chevron-right"></i> </a>
                                                        <ul class="subnav">
                                                            <li class="item-lv2">
                                                                <a href="/collections/microphone-hyperx"
                                                                    class=" item-link">Microphone HyperX</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/microphone-razer"
                                                                    class=" item-link">Microphone Razer</a>
                                                            </li>
                                                            <li class="item-lv2">
                                                                <a href="/collections/micro-thronmax"
                                                                    class=" item-link">Microphone Thronmax</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/loa" class=" item-link">
                                                            <span>Loa</span>
                                                        </a>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/tay-cam" class=" item-link">
                                                            <span>Tay cầm</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mn-item  has-child">
                                        <a href="/collections/phu-kien" class="menu-item__link item-link"
                                            title="Phụ kiện">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/backpack-bag-holidays-svgrepo-com_cf9a26a2c3e04a888f813d7c98bd90a9.svg"
                                                alt="Phụ kiện">
                                            <span>Phụ kiện</span>
                                            <i class="float-right arrow-right"></i> </a>
                                        <div class="submenu scroll">
                                            <div class="view-all visible-xs visible-sm">
                                                <span class="nav-menu-mb-close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20"
                                                        height="20" x="0" y="0" viewBox="0 0 24 24"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve" class="">
                                                        <g>
                                                            <g fill="#fff" fill-rule="evenodd"
                                                                clip-rule="evenodd">
                                                                <path
                                                                    d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                                <path
                                                                    d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                                                    fill="#ffffff" opacity="1"
                                                                    data-original="#000000" class=""></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <a href="/collections/phu-kien">Xem tất cả »</a>
                                            </div>
                                            <div class="subMenuWrap">
                                                <ul class="submenu__list">
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/balo-tui-xach" class=" item-link">
                                                            <span>Balo</span>
                                                        </a>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/de-tan-nhiet" class=" item-link">
                                                            <span>Đế tản nhiệt</span>
                                                        </a>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/phu-kien-pc" class=" item-link">
                                                            <span>Phụ kiện PC</span>
                                                        </a>
                                                    </li>
                                                    <!--<li class="item-lv1 no-bold">-->
                                                    <li class="item-lv1 ">
                                                        <a href="/collections/thiet-bi-mang" class=" item-link">
                                                            <span>Thiết bị mạng</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mn-item  ">
                                        <a href="/collections/xgear-corner" class="menu-item__link item-link"
                                            title="Bàn/Ghế">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/chair-office-svgrepo-com__1__c53b5e823dd24b3d99f3621545b4ea92.svg"
                                                alt="Bàn/Ghế">
                                            <span>Bàn/Ghế</span>
                                        </a>
                                    </li>
                                    <li class="mn-item  ">
                                        <a href="/collections/phan-mem" class="menu-item__link item-link"
                                            title="Phần mềm">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/app-apps-applications-tiles-svgrepo-com_8e0598988e62413eba422d6b96b4c502.svg"
                                                alt="Phần mềm">
                                            <span>Phần mềm</span>
                                        </a>
                                    </li>
                                    <li class="mn-item  ">
                                        <a href="/pages/xay-dung-cau-hinh" class="menu-item__link item-link"
                                            title="Tự chọn cấu hình">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/gear-svgrepo-com_6b6445680ece44faa5788d8969a1fff1.svg"
                                                alt="Tự chọn cấu hình">
                                            <span>Tự chọn cấu hình</span>
                                        </a>
                                    </li>
                                    <li class="mn-item  ">
                                        <a href="/pages/khuyen-mai" class="menu-item__link item-link"
                                            title="Khuyến mãi">
                                            <img width="24" height="24"
                                                src="//file.hstatic.net/200000837185/file/icons8-sale-30_9693e75164554a859c9fb63763c2388f_icon.png"
                                                alt="Khuyến mãi">
                                            <span>Khuyến mãi</span>
                                        </a>
                                    </li>
                                    <li class="mn-item  ">
                                        <a href="/collections/san-pham-ban-chay" class="menu-item__link item-link"
                                            title="Best seller">
                                            <img width="24" height="24"
                                                src="https://file.hstatic.net/200000837185/file/sale-svgrepo-com_8d924f3baa48440e8241868f8dd82e13.svg"
                                                alt="Best seller">
                                            <span>Best seller</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12 mg-top-15 pd-right-0 mg-top-5-mb">
                            <div class=" d-flex-slick " data-allin="1" data-slides-md="1" data-slides-tablet="1"
                                data-slides-xs="1" data-slides-md-scroll="1" data-slides-tablet-scroll="1"
                                data-slides-xs-scroll="1" data-dots="true" data-autoplay="true"
                                data-infinite="true" data-custom-arrows="true" data-fade="true"><button
                                    type="button" class=" custom-style">
                                    <span class="arrow-custom arrow-left">
                                        <div class="arrow-top"></div>
                                        <div class="arrow-bottom"></div>
                                    </span></button>

                                <div>
                                    <a href="/collections/scar" title="ROG Strix Scar" tabindex="-1">
                                        <img class="dt-width-100 lazyload bigloaded" width="1920" height="550"
                                            alt="ROG Strix Scar"
                                            src="//file.hstatic.net/200000837185/file/fix_banner_hero_57554a8f26e84d3b89f459584574b15a_1024x1024.png"
                                            data-src="//file.hstatic.net/200000837185/file/fix_banner_hero_57554a8f26e84d3b89f459584574b15a_1024x1024.png"
                                            data-mobile="//file.hstatic.net/200000837185/file/fix_banner_hero_57554a8f26e84d3b89f459584574b15a_large.png">
                                    </a>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
    </div>
    </section>
    {{-- BANNER CATEGORY --}}
    <section data-include="section-banner-group" class="pd-top-15" id="section-banner-group">
        <div class="container">
            <div class="bg-color-while">
                <div class="d-flex row-left-list scroll-x-mb">
                    <div class="item-banner">
                        <a href="/products/laptop-gaming-lenovo-loq-15iax9-83gs000fvn">
                            <img class="dt-width-100 lazyload bigloaded" width="400" height="200"
                                src="https://file.hstatic.net/200000837185/file/loq_fvn_ea15305ad11c47b788cbbbab752d9c52.jpg"
                                data-src="https://file.hstatic.net/200000837185/file/loq_fvn_ea15305ad11c47b788cbbbab752d9c52.jpg"
                                alt="Laptop Lenovo LOQ">
                        </a>
                    </div>
                    <div class="item-banner">
                        <a href="/collections/pc-gaming">
                            <img class="dt-width-100 lazyload bigloaded" width="400" height="200"
                                src="https://file.hstatic.net/200000837185/file/pc_xi3_a8a51d0ef86149cfb84a92080817a1f5.jpg"
                                data-src="https://file.hstatic.net/200000837185/file/pc_xi3_a8a51d0ef86149cfb84a92080817a1f5.jpg"
                                alt="PC">
                        </a>
                    </div>
                    <div class="item-banner">
                        <a href="/collections/tuf-series">
                            <img class="dt-width-100 lazyload bigloaded" width="400" height="200"
                                src="https://file.hstatic.net/200000837185/file/tuf_gaming_55b67dcf57ad4f44aa3c1900cbe1fb99.jpg"
                                data-src="https://file.hstatic.net/200000837185/file/tuf_gaming_55b67dcf57ad4f44aa3c1900cbe1fb99.jpg"
                                alt="TUF Gaming">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- LIST CATEGORY --}}
    <section id="section-category" class="pd-top-30" data-include="section-category">
        <div class="container">
            <div class="bg-color-while">
                <div id="category-banner" class="d-flex row-left-list scroll-x-mb scroll-x-tablet">
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/laptop" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/laptop_0714425519fb42268523d14c4dff9554_compact.png"
                                    src="//file.hstatic.net/200000837185/file/laptop_0714425519fb42268523d14c4dff9554_compact.png"
                                    width="110" height="110" alt="Laptop">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/laptop">Laptop</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/xgear-pc" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/pc_6a03da302fb245b8b688d9182829c877_compact.png"
                                    src="//file.hstatic.net/200000837185/file/pc_6a03da302fb245b8b688d9182829c877_compact.png"
                                    width="110" height="110" alt="PC">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/xgear-pc">PC</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/man-hinh" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/man_hinh_38c9e1c109824ded9015de333bc2c198_compact.png"
                                    src="//file.hstatic.net/200000837185/file/man_hinh_38c9e1c109824ded9015de333bc2c198_compact.png"
                                    width="110" height="110" alt="Màn hình">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/man-hinh">Màn hình</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/linh-kien" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/linh_kien_89dd56bbce634a369dd183c768124ca5_compact.png"
                                    src="//file.hstatic.net/200000837185/file/linh_kien_89dd56bbce634a369dd183c768124ca5_compact.png"
                                    width="110" height="110" alt="Linh kiện">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/linh-kien">Linh kiện</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/pages/xay-dung-cau-hinh" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/tu_chon_cau_hinh_9fd05f3cee7e4254aacd257129e19a7b_compact.png"
                                    src="//file.hstatic.net/200000837185/file/tu_chon_cau_hinh_9fd05f3cee7e4254aacd257129e19a7b_compact.png"
                                    width="110" height="110" alt="Tự chọn cấu hình">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/pages/xay-dung-cau-hinh">Tự chọn cấu hình</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/phu-kien" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/phu_kien_67faae47cf8845b2a0cb5275f0dca88b_compact.png"
                                    src="//file.hstatic.net/200000837185/file/phu_kien_67faae47cf8845b2a0cb5275f0dca88b_compact.png"
                                    width="110" height="110" alt="Phụ kiện">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/phu-kien">Phụ kiện</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/gaming-gear" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png"
                                    src="//file.hstatic.net/200000837185/file/gaming_gear_b4b15044a0dd49febc5e6f818667fd39_compact.png"
                                    width="110" height="110" alt="Gaming Gear">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/gaming-gear">Gaming Gear</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/ram" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/ram_92b2c0d8edd64777b3e8133bcf4f30bd_compact.png"
                                    src="//file.hstatic.net/200000837185/file/ram_92b2c0d8edd64777b3e8133bcf4f30bd_compact.png"
                                    width="110" height="110" alt="RAM">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/ram">RAM</a>
                            </div>
                        </div>
                    </div>
                    <div class="item banner-hover">
                        <div class="box-cat">
                            <a href="https://x-gear.myharavan.com/collections/ssd" class="img-cat">
                                <img class="dt-width-100 lazyload bigloaded"
                                    data-src="//file.hstatic.net/200000837185/file/ssd_d28b7cb4bbff41d68096f28487735335_compact.png"
                                    src="//file.hstatic.net/200000837185/file/ssd_d28b7cb4bbff41d68096f28487735335_compact.png"
                                    width="110" height="110" alt="SSD">
                            </a>
                            <div class="banner-content">
                                <a href="https://x-gear.myharavan.com/collections/ssd">SSD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                    style="opacity: 1; width: 0px; transform: translate3d(170px, 0px, 0px);"></div>
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
                    data-slides-xs="2" data-slides-md-scroll="5" data-slides-tablet-scroll="3"
                    data-slides-xs-scroll="2" data-dots="true" data-autoplay="false" data-infinite="true"
                    data-custom-arrows="true">
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
                                        <strong class="pro-name"><a
                                                href="/products/laptop-acer-nitro-5-an515-57-54mv"
                                                title="Laptop Gaming Acer Nitro 5 Eagle AN515 57 54MV / 553E"
                                                tabindex="0"> Laptop Gaming Acer Nitro 5 Eagle AN515 57 54MV / 553E
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
    <section class="section_collection_group pd-top-30" data-include="section-collection-group-1">
        <div class="container">
            <div class="bg-color-while">
                <div class="wd-top-title d-flex d-flex-center js-between">
                    <h2 class="title-section">
                        Laptop
                    </h2>
                    <ul class="menu-col d-flex scroll-x-mb scroll-x-tablet">
                        <li><a href="/">Thương hiệu</a></li>
                        <li><a href="/collections/laptop-msi">MSI Gaming</a></li>
                        <li><a href="/collections/laptop-asus">ASUS | ROG Gaming</a></li>
                        <li><a href="/collections/laptop-acer">ACER | PREDATOR</a></li>
                        <li><a href="/collections/laptop-lenovo">LENOVO Gaming</a></li>
                        <li><a href="/collections/laptop-gigabyte">GIGABYTE Gaming</a></li>
                        <li><a href="/collections/laptop-hp">HP Gaming</a></li>
                    </ul>
                </div>
                <div class="d-flex d-flex-wrap row-left-list">
                    <div
                        class="d-flex-column mg-bottom-15 mg-bottom-10-mb col-lg-1 col-md-3 col-sm-4 col-xs-6 pd-right-0">
                        <div class="product-block item loop-border">
                            <div class="product-img  has-hover"
                                data-frame="other_Bảo hành 12 tháng chính hãng. other_Đã bao gồm VAT screen_15.6&quot; FHD 144Hz ram_8GB DDR4 chip_R5 5500U vga_GTX 1650 R05G GTX 1650">
                                <a href="/products/laptop-gaming-acer-aspire-7-a715-42g-r05g"
                                    title="Laptop Gaming Acer Aspire 7 A715 42G R05G" class="image-resize ">
                                    <div class="product-sale"><span>-37%</span></div>
                                    <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                        height="260"
                                        src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_large.jpg"
                                        data-src="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_large.jpg"
                                        data-mobile="//product.hstatic.net/200000837185/product/laptop-gaming-acer-aspire-7-a715-42g-r05g_57e9ef508ad2455ba4944e03b5b8f2a5_medium.jpg"
                                        alt="Laptop Gaming Acer Aspire 7 A715 42G R05G">
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                        title="Laptop Gaming Acer Aspire 7 A715 42G R05G"> Laptop Gaming Acer Aspire 7
                                        A715 42G R05G </a></strong>
                                <div class="d-flex js-between d-flex-center">
                                    <ul class="list-variants d-flex d-flex-wrap image">
                                    </ul>
                                </div>
                                <div class="box-pro-prices">
                                    <p class="pro-price">
                                        <span>
                                            12,890,000₫ </span>
                                        <del class="compare-price">20,490,000₫</del>
                                    </p>
                                </div>
                                <ul class="hash-tag-loop">
                                </ul>
                                <ul class="config-tags">
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="R5 5500U">
                                        <span>R5 5500U</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR4">
                                        <span>8GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="GTX 1650">
                                        <span>GTX 1650</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                        title="Laptop MSI Modern 15 B13M 438VN"> Laptop MSI Modern 15 B13M 438VN
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i5 1335U">
                                        <span>i5 1335U</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR4">
                                        <span>8GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="Iris Xe Graphics">
                                        <span>Iris Xe Graphics</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                            alt="14" fhd="" 60hz"="">
                                        <span>14" FHD 60Hz</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
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
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                <strong class="pro-name"><a href="/products/laptop-gaming-msi-gf63-thin-12ucx-841vn"
                                        title="Laptop Gaming MSI GF63 Thin 12UCX 841VN"> Laptop Gaming MSI GF63 Thin
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i5 12450H">
                                        <span>i5 12450H</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR4">
                                        <span>8GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="RTX 2050">
                                        <span>RTX 2050</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                <strong class="pro-name"><a href="/products/laptop-gaming-msi-bravo-15-b7ed-010vn"
                                        title="Laptop Gaming MSI Bravo 15 B7ED 010VN"> Laptop Gaming MSI Bravo 15 B7ED
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="R5 7535HS">
                                        <span>R5 7535HS</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="16GB DDR5">
                                        <span>16GB DDR5</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt=" RX6550M">
                                        <span> RX6550M</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                        title="Laptop Gaming Acer Aspire 5 A515 58GM 53PZ"> Laptop Gaming Acer Aspire
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i5 13420H">
                                        <span>i5 13420H</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR4">
                                        <span>8GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="RTX 2050">
                                        <span>RTX 2050</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    title="Laptop Gaming Acer Aspire 5 A515 58GM 59LJ" class="image-resize ">
                                    <div class="product-sale"><span>-24%</span></div>
                                    <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                        height="260"
                                        src="//product.hstatic.net/200000837185/product/laptop-acer-gaming-aspire-5-a515-58gm-59lj_35a6f820a1124a3d987a88b28684c06d_large.jpg"
                                        data-src="//product.hstatic.net/200000837185/product/laptop-acer-gaming-aspire-5-a515-58gm-59lj_35a6f820a1124a3d987a88b28684c06d_large.jpg"
                                        data-mobile="//product.hstatic.net/200000837185/product/laptop-acer-gaming-aspire-5-a515-58gm-59lj_35a6f820a1124a3d987a88b28684c06d_medium.jpg"
                                        alt="Laptop Gaming Acer Aspire 5 A515 58GM 59LJ">
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                        title="Laptop Gaming Acer Aspire 5 A515 58GM 59LJ"> Laptop Gaming Acer Aspire
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i5 13420H">
                                        <span>i5 13420H</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR4">
                                        <span>8GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="RTX 2050">
                                        <span>RTX 2050</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                        title="Laptop Gaming Asus TUF F15 FX506HF HN014W"> Laptop Gaming Asus TUF F15
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i5 11400H">
                                        <span>i5 11400H</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR4">
                                        <span>8GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="RTX 2050">
                                        <span>RTX 2050</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                <strong class="pro-name"><a href="/products/laptop-msi-gaming-gf63-thin-11uc-1228vn"
                                        title="Laptop MSI Gaming GF63 Thin 11UC 1228VN"> Laptop MSI Gaming GF63 Thin
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i7 11800H">
                                        <span>i7 11800H</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR4">
                                        <span>8GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="RTX 3050">
                                        <span>RTX 3050</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                        title="Laptop Gaming MSI Cyborg 15 A12UCX 281VN"> Laptop Gaming MSI Cyborg 15
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i5 12450H">
                                        <span>i5 12450H</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="8GB DDR5">
                                        <span>8GB DDR5</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="RTX 2050">
                                        <span>RTX 2050</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
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
                                    title="Laptop Asus VivoBook 15 OLED A1505VA L1114W" class="image-resize ">
                                    <div class="product-sale"><span>-22%</span></div>
                                    <img class="lazyload dt-width-100 img-first bigloaded" width="260"
                                        height="260"
                                        src="//product.hstatic.net/200000837185/product/laptop-asus-vivobook-15x-a1505va-l1114w_e2ab1843014149a5aa86726fc2fc4188_large.jpg"
                                        data-src="//product.hstatic.net/200000837185/product/laptop-asus-vivobook-15x-a1505va-l1114w_e2ab1843014149a5aa86726fc2fc4188_large.jpg"
                                        data-mobile="//product.hstatic.net/200000837185/product/laptop-asus-vivobook-15x-a1505va-l1114w_e2ab1843014149a5aa86726fc2fc4188_medium.jpg"
                                        alt="Laptop Asus VivoBook 15 OLED A1505VA L1114W">
                                    <img class="lazyload dt-width-100 img-hover hidden-xs bigloaded" width="260"
                                        height="260"
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
                                        title="Laptop Asus VivoBook 15 OLED A1505VA L1114W"> Laptop Asus VivoBook 15
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
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_1_icon.png?v=1944"
                                            alt="i5 13500H">
                                        <span>i5 13500H</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_2_icon.png?v=1944"
                                            alt="16GB DDR4">
                                        <span>16GB DDR4</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_4_icon.png?v=1944"
                                            alt="Iris Xe Graphics">
                                        <span>Iris Xe Graphics</span>
                                    </li>
                                    <li>
                                        <img width="32" height="32" loading="lazy" fetchpriority="low"
                                            decoding="async"
                                            src="//theme.hstatic.net/200000837185/1001187855/14/config_tags_image_5_icon.png?v=1944"
                                            alt="15.6" fhd="" oled"="">
                                        <span>15.6" FHD OLED</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center btn-view-all-tab">
                    <a class="btn btn-all-tab" href="/collections/laptop">
                        Xem tất cả »
                    </a>
                </div>
            </div>
        </div>
    </section>
    </main>
    <div class="prefooter-customer mg-top-30">
        <div class="container">
            <div class="bg-prefooter">
                <div class="d-flex row d-flex-center">
                    <div class="col-md-7 col-sm-7 col-xs-12 d-flex d-flex-center js-between">
                        <p class="title-regis">
                            Đăng kí nhận tin
                        </p>
                        <div class="form-ft-wanda">
                            <form accept-charset="UTF-8" action="/account/contact" class="contact-form"
                                method="post">
                                <input name="form_type" type="hidden" value="customer">
                                <input name="utf8" type="hidden" value="✓">
                                <div class="form-group mb-0 icon-email">
                                    <input type="hidden" id="contact_tags" name="contact[tags]"
                                        value="khách hàng tiềm năng-https://xgear.net/">
                                    <input type="email" required="required" autocomplete="on"
                                        name="contact[email]" id="contact_email_ft" placeholder="Email">
                                </div>
                                <button class="btn" type="submit"><i class="fa fa-paper-plane-o"
                                        aria-hidden="true"></i> Đăng ký</button>

                                <input id="f474cd9eb65a4f029b97a497fdc9edc1" name="g-recaptcha-response"
                                    type="hidden"
                                    value="03AFcWeA6csP6I0oK4GyZpt-MyAakXvQ10sjIuqvbkA3D1yWeywzzc_1Dv-TCemYNPZOfTyNjTH3lRZd3OEiIH9sCQ_iGHwguocD7eSMHgE9sDNSrHUtbVOZGA_o5kLvY7PftGPI_g-x7Au7AvfMvklQuayl1437lMey4nQsnNtuf2IxFUFYoNtFL_V9YmRFrnuq6Gjqj5NBer9MtBWyFtnjrPLcSQ3mlGrMmzrABhoVPff32vjU2IqF5kfY4oaSCwvlqiw2R4q1QeB_AWsyIlF1BX8L-rbJD2JuB2Klhc1mpqEFZ5Dx0zdiFKGMv04yODuRSutJoUR7_FJSvVLNPcpv6rWlcGTd7b7uTcP7FbRWd-cAgOV0qFycvP_98MR_RSJy7AGWrfFo1pFu_pzTMKblDDWx5c52PIW4DIPpHix4y1aYahJV1eI__XpKBT2fWgUNmVrnABaH8mNcxZ-ZAq8JrU0TeNu2-usNe0mctug1XMFpSc2PWto6mc2vly8-XIRfduQhK9FPk803FwE6gGLXA7qKGT29jeIanJGA3viRzmIywrlYzlQNQAQMgd2tZlzT--b_r7ngzvbz9o-hwQJjbTE05LHG6MNUhOaTAvaeUkwXCbHpWnYwsJViAynbmo-NdvmykMye91cwX8d3giDnSDbJYeKkWstA"><!--<script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script>--><!--<script>
                                        grecaptcha.ready(function() {
                                            grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                                action: 'submit'
                                            }).then(function(token) {
                                                document.getElementById('f474cd9eb65a4f029b97a497fdc9edc1').value = token;
                                            });
                                        });
                                    </script>-->
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <ul class="social-footer d-flex d-flex-center">
                            <li class="zalo"><a href="1" rel="nofollow"><img width="30"
                                        height="30" class="lazyload bigloaded"
                                        src="https://file.hstatic.net/200000397757/file/zalo-icon_0adb17d386cc4785b30ef66e470b4342.svg"
                                        data-src="https://file.hstatic.net/200000397757/file/zalo-icon_0adb17d386cc4785b30ef66e470b4342.svg"
                                        alt="Liên hệ với chúng tôi qua Zalo"></a></li>
                            <li class="tiktok"><a href="1" rel="nofollow"><img width="18"
                                        height="18" class="lazyload bigloaded"
                                        src="https://file.hstatic.net/200000525917/file/tik-tok_e914ba6238604946935723c6839cc211.svg"
                                        data-src="https://file.hstatic.net/200000525917/file/tik-tok_e914ba6238604946935723c6839cc211.svg"
                                        alt="Liên hệ với chúng tôi qua Tiktok"></a></li>
                            <li class="twitter"><a href="1" rel="nofollow"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li class="youtube"><a href="1" rel="nofollow"><i class="fa fa-youtube"
                                        aria-hidden="true"></i></a></li>
                            <li class="instagram"><a href="1" rel="nofollow"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                            <li class="facebook"><a href="1" rel="nofollow"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mg-0 pd-bt-50-mb">
        <div class="top-ft-wanda">
            <div class="container">
                <div class="d-flex row">
                    <div class="col-md-3 col-sm-6 col-xs-12 infomation mg-bottom-15">
                        <div class="title-footer">
                            <a href="/">
                                <img class="dt-width-auto logo-ft" height="50" width="200"
                                    src="//file.hstatic.net/200000837185/file/logo-web-white_30e3c74436a2411bb27fa7fd58ca82ec_grande.png"
                                    alt="Xgear">
                            </a>
                        </div>
                        <div class="infomation-wanda">
                            <p>
                                XGEAR - Chuyên cung cấp Laptop Gaming &amp; PC cao cấp chính hãng.
                            </p>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> HCM : 08 Tự Lập, Phường 4,
                                    Quận Tân Bình </li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội : 10A1 Ngõ 49 Linh
                                    Lang, Ba Đình</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a rel="nofollow"
                                        href="tel:02871081881">02871081881</a></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a rel="nofollow"
                                        href="mailto:sales@thenewxgear.com">sales@thenewxgear.com</a></li>
                                <li class="bocongthuong"><a rel="nofollow"
                                        href="http://online.gov.vn/Home/WebDetails/85783"><img
                                            class="lazyload bigloaded" width="120" height="45"
                                            src="https://file.hstatic.net/200000397757/file/dathongbao_48067cd02fae41b68bf0294777c39c94_compact.png"
                                            data-src="https://file.hstatic.net/200000397757/file/dathongbao_48067cd02fae41b68bf0294777c39c94_compact.png"
                                            alt="Bộ công thương"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 tablink mg-bottom-15">
                        <div class="title-footer">
                            <div class="h4">
                                Chính sách
                            </div>
                        </div>
                        <div class="footer-link-wanda">
                            <ul>
                                <li><a href="/search">Tìm kiếm</a></li>
                                <li><a href="/pages/lien-he">Liên hệ</a></li>
                                <li><a href="/pages/danh-sach-trung-tam-bao-hanh">Trung tâm bảo hành</a></li>
                            </ul>
                        </div>
                        <div class="title-footer">
                            <div class="h4" style="margin-top:20px">
                                Bài viết
                            </div>
                        </div>
                        <div class="footer-link-wanda">
                            <ul>
                                <li><a href="/blogs/huong-dan-thu-thuat">Hướng Dẫn &amp; Thủ Thuật</a></li>
                                <li><a href="/blogs/giai-tri-game">Giải Trí &amp; Game</a></li>
                                <li><a href="/blogs/tin-tuc-cong-nghe">Tin Tức Công Nghệ</a></li>
                                <li><a href="/blogs/tin-tuc">Tin tức</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 tablink mg-bottom-15">
                        <div class="title-footer">
                            <div class="h4">
                                Hướng dẫn
                            </div>
                        </div>
                        <div class="footer-link-wanda">
                            <ul>
                                <li><a href="http://xgear.net/pages/huong-dan-thanh-toan">Hướng dẫn thanh toán</a>
                                </li>
                                <li><a href="/pages/huong-dan-tra-gop">Hướng dẫn trả góp</a></li>
                                <li><a href="http://xgear.net/pages/chinh-sach-bao-hanh">Chính sách bảo hành</a></li>
                                <li><a href="/blogs/tin-tuc/tuyen-dung-nam-moi-co-hoi-moi-cong-viec-moi">Tuyển
                                        dụng</a></li>
                                <li><a href="/blogs/all">Chia sẻ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="title-footer">
                            <div class="h4">
                                Tổng đài hỗ trợ
                            </div>
                        </div>
                        <ul class="footer-support">
                            <li><span>Hồ Chí Minh</span> <a href="tel:093 373 1881">093 373 1881</a>
                                <span>(9h00-20h00)</span>
                            </li>
                            <li><span>Hà Nội</span> <a href="tel:097 232 1881">097 232 1881</a>
                                <span>(9h00-20h00)</span>
                            </li>
                            <li><span>Hot line</span> <a href="tel:028 7108 1881">028 7108 1881</a>
                                <span>(9h00-20h00)</span>
                            </li>
                        </ul>
                        <div class="title-footer">
                            <div class="h4">
                                Phương thức thanh toán
                            </div>
                        </div>
                        <div>
                            <img width="246" height="24"
                                src="https://theme.hstatic.net/1000379792/1000977285/14/footer_trustbadge.jpg?v=338"
                                alt="Phương thức thanh toán">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wanda">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 text-center">
                        <div class="text-copyright mb-0"><span>CÔNG TY TNHH THE NEW XGEAR - GPKD: 0316898252 do Sở
                                KH-ĐT TP.HCM cấp. ©Copyright by Xgear</span></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
<script src="{{ asset('assets/js/js.js') }}"></script>
{{-- <script type="text/javascript" src="//theme.hstatic.net/200000837185/1001187855/14/pluginscript.js?v=1944" defer></script>
<script type="text/javascript" src="//theme.hstatic.net/200000837185/1001187855/14/main-scripts.js?v=1944" defer></script>
<script type="text/javascript" defer src="//theme.hstatic.net/200000837185/1001187855/14/combo-app.js?v=1944"></script> --}}
</html>
