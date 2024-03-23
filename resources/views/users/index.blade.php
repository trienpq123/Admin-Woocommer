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
                                        <a href="#">Trang chủ </a><span><i class="ri-arrow-down-s-line"></i></span>
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
                                    <li><a href="#">Giới thiệu </a><span><i class="ri-arrow-down-s-line"></i></span></li>
                                    <li><a href="#">Về chúng tôi </a><span><i class="ri-arrow-down-s-line"></i></span></li>
                                </ul>
                            </div>
                            <div class="navigation-btn">
                                <ul class="flex gap-4 align-items-center">
                                    <li>
                                        <a href="#"><span><i class="ri-heart-line"></i></span></a>

                                    </li>
                                    <li><a href="#"><span><i class="ri-shopping-cart-line"></i></span></a></li>
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

</html>
