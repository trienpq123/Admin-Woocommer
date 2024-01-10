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
        </li><!-- End Dashboard Nav -->

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
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href="components-badges.html">
                        <i class="bi bi-circle"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href="components-breadcrumbs.html">
                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href="components-buttons.html">
                        <i class="bi bi-circle"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href="components-cards.html">
                        <i class="bi bi-circle"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href="components-carousel.html">
                        <i class="bi bi-circle"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href="components-list-group.html">
                        <i class="bi bi-circle"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href="components-modal.html">
                        <i class="bi bi-circle"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href="components-tabs.html">
                        <i class="bi bi-circle"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href="components-pagination.html">
                        <i class="bi bi-circle"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href="components-progress.html">
                        <i class="bi bi-circle"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href="components-spinners.html">
                        <i class="bi bi-circle"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href="components-tooltips.html">
                        <i class="bi bi-circle"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href="forms-editors.html">
                        <i class="bi bi-circle"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href="forms-validation.html">
                        <i class="bi bi-circle"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

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
                        <i class="bi bi-circle"></i><span>Người dùng</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Phân quyền</span>
                    </a>
                </li>
             
            </ul>
        </li><!-- End Icons Nav -->
        <!-- End Type Page -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

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
