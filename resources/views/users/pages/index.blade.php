@extends('users.index')
@push('css')
    <link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endpush
@section('content')
    <main>

        {{-- Category --}}
        <div class="container">
            <div class="position-relative">
                <h2 class="text-center card-title font-bold">Danh mục</h2>
                <div class="row my-4 popuplar-category">
                    @include('components.user.category', ['listCategory' => $listCategory])
                </div>
                <div class="category-control">
                    <span class="control-btn prev">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="control-btn next">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </div>
            </div>
        </div>
        {{-- End Category --}}
        {{-- PRODUCT HOT --}}
        <section id="product-hot" class="bg-light">
            <div class="container">
                <div class="product product-hot">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="product-hot__content">
                                <h2 class="text-center card-title font-bold">Sản phẩm nổi bật</h2>
                                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique est ut augue vehicula, vitae convallis lectus consequat. Quisque sed dapibus nisi, ut venenatis nunc. Nam posuere mauris diam, in semper tellus cursus vel. Donec velit mi, dignissim quis sem sit amet, vestibulum luctus urna. Aliquam nisl lectus,lectus mauris tincidunt vulputate.</p>
                                <a href="#" class="action-btn text-2xl font-semibold leading-none tracking-tight">Khám
                                    phá thêm</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row product-list">
                                <div class="col-12 col-md-6">
                                    <div class="product-item">
                                        <div class="card">
                                            <div class="card-image">
                                                <a href="">
                                                    <img src="../assets/images/products/sp-1.jpg" alt=""
                  width="450" height="572"                                       class="img-fluid zoomIn">
                                                </a>
                                            </div>
                                            <div class="card-body product-info">
                                                <a href="" class="product-title">
                                                    <h3>Unique Bag (Gray)</h3>
                                                </a>
                                                <div class="product-price">
                                                    <span>$29.00</span>
                                                    <span class="old-price"><del>$39.00</del></span>
                                                </div>
                                            </div>
                                            {{-- Discount --}}
                                            <div class="percent discount">
                                                <span>-10%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="product-item">
                                        <div class="card">
                                            <div class="card-image">
                                                <a href="">
                                                    <img src="../assets/images/products/sp-1.jpg" alt=""
                  width="450" height="572"                                       class="img-fluid zoomIn">
                                                </a>
                                            </div>
                                            <div class="card-body product-info">
                                                <a href="" class="product-title">
                                                    <h3>Unique Bag (Gray)</h3>
                                                </a>
                                                <div class="product-price">
                                                    <span>$29.00</span>
                                                    <span class="old-price"><del>$39.00</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="product-item">
                                        <div class="card">
                                            <div class="card-image">
                                                <a href="">
                                                    <img src="../assets/images/products/product-2.png" alt=""
                                                        class="img-fluid zoomIn">
                                                </a>
                                            </div>
                                            <div class="card-body product-info">
                                                <a href="" class="product-title">
                                                    <h3>Unique Bag (Gray)</h3>
                                                </a>
                                                <div class="product-price">
                                                    <span>$29.00</span>
                                                    <span class="old-price"><del>$39.00</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- CLICK PREV NEXT --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-hot__control">
                                        <span class="control-btn prev">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                        <span class="control-btn next">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- END PRODUCT HOT --}}
        {{-- PRODUCT --}}
        @foreach ($catProduct as $cp)
            <section>
                <div class="container">
                    <div class="product">
                        <div class="col-sm-12">
                            <div class="section-title">
                                <h2>
                                    <a href="#" class="text-2xl font-semibold leading-none tracking-tight block-title">{{$cp->name_category}}</a>
                                </h2>
                                @if (count($cp->category) > 0)
                                <div class="menu-tab">
                                    <ul class="d-flex align-items-center" role="tablist">
                                        @foreach ($cp->category as $c)
                                            <li class="menu-tab_item">
                                                <a class=""   href="{{ route('category', ['slug' => $c->slug]) }}"
                                                    aria-controls="home" aria-selected="true">{{$c->name_category}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572" >
                                    <div class="loop-add-cart">
                                        <button class="btn btn-gradient-primary px-6 btn-sm waves-effect waves-light w-100"><i
                                                class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    </div>
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572">
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                                            class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572">
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                                            class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572">
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                                            class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572">
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                                            class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572">
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                                            class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572">
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                                            class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-3 ">
                            <div class="card e-co-product">
                                <a href="">
                                    <img src="../assets/images/products/sp-1.jpg" alt="" class="img-fluid" width="450" height="572">
                                </a>
                                <div class="card-body product-info">
                                    <a href="" class="product-title">Unique Bag (Gray)</a>
                                    <div class="d-flex justify-content-between my-2">
                                        <p class="product-price">$29.00 <span class="ml-2"><del>$49.00</del></span></p>
                                        <ul class="list-inline mb-0 product-review align-self-center">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-gradient-primary btn-round px-3 btn-sm waves-effect waves-light"><i
                                            class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                                    <button class="btn btn-gradient-pink  btn-sm waves-effect waves-light wishlist"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Wishlist"><i class="mdi mdi-heart"></i></button>
                                    <button class="btn btn-gradient-secondary  btn-sm waves-effect waves-light quickview"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Quickview"><i class="mdi mdi-magnify"></i></button>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div>
                </div>
            </section>
        @endforeach

        {{-- END PRODUCT --}}
        {{-- BLOG --}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog-card">
                                    <a href="">
                                        <div class="blog-image">
                                            <img src="../assets/images/products/product-mau.jpg" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-purple px-3">Food</span>
                                                </li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                            </ul>
                                        </div><!--end meta-box-->
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is
                                            reproduced
                                            below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </a>
                                </div><!--end blog-card-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog-card">
                                    <a href="">
                                        <div class="blog-image">
                                            <img src="../assets/images/products/product-mau.jpg" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-purple px-3">Food</span>
                                                </li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                            </ul>
                                        </div><!--end meta-box-->
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is
                                            reproduced
                                            below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </a>
                                </div><!--end blog-card-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="blog-card">
                                    <a href="">
                                        <div class="blog-image">
                                            <img src="../assets/images/products/product-mau.jpg" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="meta-box">
                                            <ul class="p-0 mt-4 list-inline">
                                                <li class="list-inline-item"><span class="badge badge-purple px-3">Food</span>
                                                </li>
                                                <li class="list-inline-item">26 mars 2019</li>
                                            </ul>
                                        </div><!--end meta-box-->
                                        <h4 class="mt-2 mb-3">
                                            <a href="">It is a long established fact that a reader will be</a>
                                        </h4>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is
                                            reproduced
                                            below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <a href="#" class="text-primary">Continue Reading <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </a>
                                </div><!--end blog-card-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div>
            </div>
        </section>
        {{-- END BLOG --}}
    </main>
@endsection
@push('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popuplar-category').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                dot: false,
                nextArrow: '.category-control .control-btn.next',
                prevArrow: '.category-control .control-btn.prev'
            })
            $('.product-list').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                dot: false,
                nextArrow: '.product-hot__control .control-btn.next',
                prevArrow: '.product-hot__control .control-btn.prev'
            })
            $('.menu-tab ul').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dot: false,
                arrows: false,
            })
            $('.banner').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dot: false,
                nextArrow: '#banner .control-btn.next',
                prevArrow: '#banner .control-btn.prev'
            })
        });
    </script>
@endpush
