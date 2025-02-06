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
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/media.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <header class="topbar">
            <!-- LOGO -->
        </header>
        <main>
            <div class="container">
                @yield('content')
                {{-- PRODUCT --}}
                <div class="product">
                    <div class="col-sm-12">
                        <h2 class="text-center">
                            <a href="#" class="text-2xl font-semibold leading-none tracking-tight">{{$category->name_category}}</a>
                        </h2>
                    </div>
                    </div>
                    <div class="row">
                        @foreach ($category->product as $item)
                            <x-product-item :item="$item" />
                        @endforeach
                    </div>
                </div>
                {{-- END PRODUCT --}}
                {{-- BLOG --}}
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="../assets/images/small/img-1.jpg" alt="" class="img-fluid">
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-secondary px-3">Food</span></li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                            </ul>
                                        </div><!--end meta-box-->            
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end blog-card-->                                   
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
    
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="../assets/images/small/img-7.jpg" alt="" class="img-fluid">
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-purple px-3">Interior</span></li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                            </ul>
                                        </div><!--end meta-box-->            
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end blog-card-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
    
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-card">
                                        <img src="../assets/images/small/img-6.jpg" alt="" class="img-fluid">
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-success px-3">Food</span></li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                            </ul>
                                        </div><!--end meta-box-->            
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div><!--end blog-card-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->                           
                    </div>
                </div>
                {{-- END BLOG --}}

            </div>
        </main>
    </div>


    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/pages/jquery.eco_dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    {{-- Slider Banner --}}
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000
            })
        })
    </script>
</body>

</html>
