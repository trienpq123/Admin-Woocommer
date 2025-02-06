<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/css.css') }}">
    <!-- LINK CDN -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- CDN FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Favicons -->
    <link href="{{ asset('./admin/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('./admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('./admin/assets/css/style.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="{{ asset('admin/assets/js/boostrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    @notifyCss
</head>

<body>

    <main>
        
        <div class="container">
          

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Woocommerce</span>
                                </a>
                            </div>
                            <!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Đăng nhập</h5>
                                        <p class="text-center small">Nhập tài khoản và mật khẩu</p>
                                    </div>

                                    <form class="row g-3 needs-validation"  action="{{ route('loginPost') }}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                {{-- <span class="input-group-text" id="inputGroupPrepend">@</span> --}}
                                                <input type="email" name="email" class="form-control"
                                                    id="yourUsername" required="">
                                                <div class="invalid-feedback">Vui lòng nhập email</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Mật khẩu</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required="">
                                            <div class="invalid-feedback">Vui lòng nhập mật khẩu!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    
                                    </form>
                                    <div class="mt-3 text-left">
                                        <p class="mb-0">Chưa co tài khoản? <a href="pages-register.html"
                                                class="text-primary">Đăng ký</a></p>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0"> <a href="{{route('redirectToGoogle', ['driver' => 'google'])}}"
                                                class="text-primary">Đăng nhập Google</a></p>
                                    </div>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">Hệ thống của NMT</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
    <x-notify::notify />
    @notifyJs
</body>

</html>
