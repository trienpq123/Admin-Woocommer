<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/media.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <header class="topbar">
            <!-- LOGO -->
        </header>
        <main id="product-detail">
            <div class="container">
                @yield('content')
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Procuct-Detail</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Procuct-Detail</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="zoom-image">
                                            <div class="product-imgs slider-for">
                                                @foreach ($product->images as $item)
                                                    <div class="product-img">
                                                        <img src="{{ $item->link_img }}"
                                                            alt="{{ $product->name_product }}"
                                                            class="img-fluid mx-auto d-block">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="thumb-image">
                                            <div class="product-imgs slider-nav">
                                                @foreach ($product->images as $item)
                                                    <div class="product-img border  " style="height: 100px">
                                                        <img src="{{ $item->link_img }}"
                                                            alt="{{ $product->name_product }}"
                                                            class="img-fluid mx-auto d-block">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 ">
                                        <div class="single-pro-detail">
                                            <p class="mb-1">{{ $product->category->name_category }}</p>
                                            <div class="custom-border mb-3"></div>
                                            <h3 class="pro-title">{{ $product->name_product }}</h3>
                                            {{-- <p class="text-muted mb-0">{{$product->p_desc_short}}</p>  --}}
                                            <ul class="list-inline mb-2 product-review">
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="mdi mdi-star-half text-warning"></i></li>
                                                <li class="list-inline-item">4.5 (30 reviews)</li>
                                            </ul>
                                            @php
                                                $price_product = collect($product->variants)
                                                    ->sortBy('price')
                                                    ->toArray();
                                            @endphp
                                            @if ($price_product[0]['price_old'] > 0)
                                                <h2 class="pro-price">
                                                    {{ number_format($price_product[0]['price_old'], 0, ',', ',') }}
                                                    <span><del>{{ number_format($price_product[0]['price'], 0, ',', ',') }}</del></span><span
                                                        class="text-danger font-weight-bold ml-2">50% Off</span>
                                                </h2>
                                            @endif
                                            @php
                                                echo html_entity_decode($product->p_desc_short);
                                            @endphp

                                            @foreach ($product->attribute as $item)
                                                @php
                                                    $modife_class = preg_replace(
                                                        '/[^A-Za-z0-9\-]/',
                                                        '',
                                                        $product->attribute($item['name'])->name,
                                                    );
                                                @endphp
                                                <div class="row">
                                                    <h6 class="text-muted font-13 d-inline-block align-middle mr-2">
                                                        {{ $product->attribute($item['name'])->name }}:
                                                    </h6>
                                                    <div class="row mb-2">
                                                        @foreach ($item['title'] as $v)
                                                            @php
                                                                $modife_class =
                                                                    $modife_class .
                                                                    preg_replace('/[^A-Za-z0-9\-]/', '', $v);
                                                            @endphp
                                                            <button type="button" id=""
                                                                class=" btn mr-1 ml-1 mb-1 btn-light waves-effect waves-light {{ $modife_class }}">{{ $v }}</button>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="quantity mt-3 ">
                                                <input class="form-control" type="number" min="0" value="0"
                                                    id="example-number-input">
                                                <a href=""
                                                    class="btn btn-gradient-primary text-white px-4 d-inline-block"><i
                                                        class="mdi mdi-cart mr-2"></i>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="shadow-lg p-4">
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-toggle="tab" href="#description" role="tab"
                                        aria-selected="true">Chi tiết sản phẩm</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#review" role="tab"
                                        aria-selected="false">Đánh giá</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane p-3 active" id="description" role="tabpanel">
                                    <p class="text-muted mb-0">
                                        @php
                                            echo html_entity_decode($product->p_desc);
                                        @endphp
                                    </p>
                                </div>
                                <div class="tab-pane p-3" id="review" role="tabpanel">
                                    <p class="text-muted mb-0">
                                        @php
                                            echo html_entity_decode($product->p_desc);
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div id="product-relate">
                            <h4 class="text-left">Sản phẩm liên quan</h4>

                                <div class="row">
                                    @foreach ($productRelated as $item)
                                        <x-product-item :item="$item" />
                                    @endforeach
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>


    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    {{-- <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.eco_dashboard.init.js') }}"></script> --}}

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    {{-- Slider Banner --}}
    <script>
        $(document).ready(function() {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav',
                autoplay: true,
                autoplaySpeed: 2000,
                centerMode: true,
                focusOnSelect: true,
                touchMove: true,
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                focusOnSelect: true,
                touchMove: true,
                arrows: false
            });

        });
    </script>
</body>

</html>
