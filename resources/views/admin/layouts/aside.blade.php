{{-- <div class="aside">
    <div class="logo">
        <img src="http://sinbad.anhcoder.com/assets/images/logo-light.png" alt="">
    </div>
    <div class="ladi-list menu">
        <ul>
            <li><a href="{{route('admin.DashboardAdmin')}}">
                <span class="box-iconls"><i class="fa-solid fa-house"></i>{{__('dashboardAdmin')}}</span>

            </a></li>
            <li>
                <a href="{{route('admin.filter.listFilter')}}">
                    <span class="box-iconls"><i class="fa-solid fa-house"></i>{{__('theFilter')}}</span>

                </a>
            </li>
            <li>
                <a href="{{route('admin.attr.listAttr')}}">
                    <span class="box-iconls"><i class="fa-solid fa-house"></i>{{__('theAttrOfCate')}}</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin.order.listOrder')}}">
                    <span class="box-iconls"><i class="fa-solid fa-house"></i>{{__('order')}}</span>

                </a>
                <div class="menu-child">
                    <ul>
                        <li><a href="#">{{__('order_list')}}</a></li>
                        <li><a href="#">{{__('order_delivered')}}</a></li>
                        <li><a href="#">{{__('order_processing')}}</a></li>
                        <li><a href="#">{{__('order_yet_finished')}}</a></li>
                        <li><a href="#">{{__('order_cod')}}</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{Route('admin.product.listProduct')}}">
                    <span class="box-iconls"><i class="fa-solid fa-house"></i></span> {{__('product')}}
                </a>
            </li>
            <li>
                <a href="{{route('admin.category.listCategory')}}"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('category')}}</a>
            </li>
            <li><a href="#"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('customer')}}</a></li>
            <li><a href="{{route('admin.menu.listMenu')}}"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('Menu')}}</a></li>
            <li><a href="{{route('admin.pages.listPages')}}"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('page')}}</a></li>
            <li><a href="{{route('admin.banner.listBanner')}}"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('banner')}}</a></li>
            <li><a href="#"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('contact')}}</a></li>
            <li><a href="{{route('admin.news.listNews')}}"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('news')}}</a></li>
            <li><a href="{{route('admin.brand.listBrand')}}"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>Quản lý thương hiệu</a></li>
            <li><a href="#"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('config')}}</a></li>
            <li><a href="#"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>Config</a></li>
            <li>
                <a href="#"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('seo')}}</a>
                <div class="menu-child">
                    <ul>
                        <li><a href="#">SEO Sản Phẩm</a></li>
                        <li><a href="#">SEO Danh Mục</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('permissions')}}</a>
                <div class="menu-child">
                    <ul>
                        <li><a href="{{route('admin.roles.role.index')}}">{{__('role')}}</a></li>
                        <li><a href="{{route('admin.permisson.permisson.index')}}">{{__('permission')}}</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{route('admin.User.User.index')}}"><span class="box-iconls"><i class="fa-solid fa-house"></i></span>{{__('user')}}</a>

            </li>
        </ul>
    </div>
</div> --}}
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="">
                <i class="bi bi-grid"></i>
                <span>Quản lý khuyến mãi</span>
            </a>
        </li>
        <!-- End Khuyến mãi -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Danh mục</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.category.listCategory') }}">
                        <i class="bi bi-circle"></i><span>Danh sách danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.addCategory') }}">
                        <i class="bi bi-circle"></i> Thêm danh mục mới</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#product" data-bs-toggle="collapse" href="#">
                <i class="ri-t-shirt-line"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="product" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product.addProduct') }}">
                        <i class="bi bi-circle"></i><span>Thêm sản phẩm</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#attribute" data-bs-toggle="collapse" href="#">
                <i class="ri-sparkling-2-fill"></i><span>Quản lý thuộc tính</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="attribute" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.attr.listAttr') }}">
                        <i class="bi bi-circle"></i><span>Danh sách thuộc tính</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Thêm thuộc tính</span>
                    </a>
                </li>

            </ul>
        </li>
    
      

        <li class="nav-heading">Quản lý trang</li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.pages.listPages') }}">
                <i class="ri-pages-line"></i><span>Trang</span>
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user" data-bs-toggle="collapse" href="">
                <i class="bi bi-gem"></i><span>Quản lý người dùng</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.roles.role.index')}}">
                        <i class="bi bi-circle"></i><span>Phân quyền</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.User.User.index')}}">
                        <i class="bi bi-circle"></i><span>Quản lý User</span>
                    </a>
                </li>
             
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#menu" data-bs-toggle="collapse" href="">
                <i class="bi bi-gem"></i><span>Quản lý menu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="menu" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admin.menu.listMenu')}}">
                        <i class="bi bi-circle"></i><span>Xem menu</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.menu.addMenu')}}">
                        <i class="bi bi-circle"></i><span>Thêm menu</span>
                    </a>
                </li>
             
            </ul>
        </li>
    
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.order.listOrder')}}">
                <i class="bi bi-question-circle"></i>
                <span>Đơn hàng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.order.listOrder')}}">
                <i class="bi bi-question-circle"></i>
                <span>Bình luận</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.order.listOrder')}}">
                <i class="bi bi-question-circle"></i>
                <span>Đánh giá</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.order.listOrder')}}">
                <i class="bi bi-question-circle"></i>
                <span>Ticket/Hỗ trợ</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.system.config') }}">
                <i class="ri-settings-5-line"></i>
                <span>Cấu hình hệ thống</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
