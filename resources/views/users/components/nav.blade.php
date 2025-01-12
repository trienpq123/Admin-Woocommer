<div class="col-md-12 hidden-sm hidden-xs pd-right-0 z-index-high nav-category-group">
    <nav class="nav-group">
        <ul class="navigation list-menu-nav scroll">

            @foreach ($data as $item)
                <li class="mn-item active-nav has-child ">
                    <a href="/collections/laptop" class="menu-item__link item-link" title="{{ $item->title }}">
                        <img width="24" height="24" {{-- src="{{$item->image_category}}" --}}
                            src="https://file.hstatic.net/200000837185/file/computer-and-monitor-svgrepo-com_2919cb4adb854d99b0b1ed6153ca24bf.svg"
                            alt="{{ $item->title }}">
                        <span>{{ $item->title }}</span>
                        <i class="float-right arrow-right"></i> </a>

                    @if (count($item->chirendMenu) > 0)
                        {{-- @php
                            dd($item->chirendMenu);
                        @endphp --}}
                        <x-nav-level-1 :data="$item->chirendMenu" />
                    @endif
                </li>
            @endforeach

            {{-- <li class="mn-item  has-child">
                <a href="/collections/pc-gaming" class="menu-item__link item-link" title="Xgear PC">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/computer-and-monitor-svgrepo-com_2919cb4adb854d99b0b1ed6153ca24bf.svg"
                        alt="Xgear PC">
                    <span>Xgear PC</span>
                    <i class="float-right arrow-right"></i> </a>
                <div class="submenu scroll">
                    <div class="view-all visible-xs visible-sm">
                        <span class="nav-menu-mb-close">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <g fill="#fff" fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
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
                                        <a href="/collections/pc-gigabyte" class=" item-link">PC Gigabyte</a>
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
                                        <a href="/collections/pc-do-hoa" class=" item-link">PC
                                            Đồ họa</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/xgear-pc" class=" item-link">PC
                                            Gaming</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/pc-van-phong-1" class=" item-link">PC Văn phòng</a>
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
                                        <a href="/collections/pc-gia-duoi-10-trieu" class=" item-link">Giá dưới 10
                                            triệu</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/pc-gia-tu-15-trieu-25-trieu" class=" item-link">Từ 15 -
                                            25 triệu</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/pc-gia-tu-25-trieu-35-trieu" class=" item-link">Từ 25 -
                                            35 triệu</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/pc-gia-tren-35-trieu" class=" item-link">Trên 35
                                            triệu</a>
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
                                        <a href="/collections/pc-ryzen-5" class=" item-link">PC Ryzen 5</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/pc-ryzen-7" class=" item-link">PC Ryzen 7</a>
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
                                        <a href="/collections/pc-core-i3" class=" item-link">PC Core i3</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/pc-core-i5" class=" item-link">PC Core i5</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/pc-core-i7" class=" item-link">PC Core i7</a>
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
                <a href="/collections/man-hinh" class="menu-item__link item-link" title="Màn hình">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/monitor-svgrepo-com_b087a7612e1d416e912b35f314f15d5a.svg"
                        alt="Màn hình">
                    <span>Màn hình</span>
                    <i class="float-right arrow-right"></i> </a>
                <div class="submenu scroll">
                    <div class="view-all visible-xs visible-sm">
                        <span class="nav-menu-mb-close">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <g fill="#fff" fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
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
                                <a href="/collections/man-hinh-theo-hang" class=" item-link">
                                    <span>Màn hình theo hãng</span>
                                    <i class="float-right fa fa-chevron-right"></i> </a>
                                <ul class="subnav">
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-acer" class=" item-link">Màn hình Acer</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-asus" class=" item-link">Màn hình Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-dell" class=" item-link">Màn hình Dell</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-gigabyte" class=" item-link">Màn hình
                                            Gigabyte</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-msi" class=" item-link">Màn hình MSI</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-samsung" class=" item-link">Màn hình
                                            Samsung</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-philips" class=" item-link">Màn hình
                                            Philips</a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="item-lv1 ">-->
                            <li class="item-lv1 hasChild">
                                <a href="/collections/man-hinh-theo-nhu-cau" class=" item-link">
                                    <span>Màn hình theo nhu cầu</span>
                                    <i class="float-right fa fa-chevron-right"></i> </a>
                                <ul class="subnav">
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-gaming" class=" item-link">Màn hình Gaming</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/man-hinh-do-hoa" class=" item-link">Màn hình Đồ họa</a>
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
                                        <a href="/collections/gia-treo-man-hinh-human-motion" class=" item-link">Giá
                                            treo màn hình Human
                                            Motion</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/gia-treo-man-hinh-north-bayou" class=" item-link">Gía
                                            treo màn hình North
                                            Bayou</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="mn-item  has-child">
                <a href="/collections/linh-kien" class="menu-item__link item-link" title="Linh Kiện">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/cpu-chip-01-svgrepo-com_990cdf4bd7784321bd417ccdf307ad8e.svg"
                        alt="Linh Kiện">
                    <span>Linh Kiện</span>
                    <i class="float-right arrow-right"></i> </a>
                <div class="submenu scroll">
                    <div class="view-all visible-xs visible-sm">
                        <span class="nav-menu-mb-close">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <g fill="#fff" fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
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
                                        <a href="/collections/cpu-amd" class=" item-link">CPU
                                            AMD</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/cpu-intel" class=" item-link">CPU Intel</a>
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
                                        <a href="/collections/mainboard-asus" class=" item-link">Mainboard Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/mainboard-gigabyte" class=" item-link">Mainboard
                                            Gigabyte</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/mainboard-msi" class=" item-link">Mainboard MSI</a>
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
                                        <a href="/collections/vga-asus" class=" item-link">VGA
                                            ASUS</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/vga-gigabyte" class=" item-link">VGA Gigabyte</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/vga-msi" class=" item-link">VGA
                                            MSI</a>
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
                                        <a href="/collections/ram-laptop" class=" item-link">RAM Laptop</a>
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
                                        <a href="/collections/ssd-120gb-128gb" class=" item-link">120GB - 128GB</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ssd-250gb-256gb" class=" item-link">250GB - 256GB</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ssd-500gb-512gb" class=" item-link">500GB - 512GB</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ssd-1tb-2tb" class=" item-link">1TB - 2TB</a>
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
                                        <a href="/collections/hdd-laptop" class=" item-link">HDD Laptop</a>
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
                                        <a href="/collections/nguon-antec" class=" item-link">Nguồn Antec</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/nguon-asus" class=" item-link">Nguồn Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/nguon-cooler-master" class=" item-link">Nguồn Cooler
                                            Master</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/nguon-corsair" class=" item-link">Nguồn Corsair</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/nguon-deepcool" class=" item-link">Nguồn Deepcool</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/nguon-gigabyte" class=" item-link">Nguồn Gigabyte</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/nguon-msi" class=" item-link">Nguồn MSI</a>
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
                                        <a href="/collections/tan-nhiet-arctic" class=" item-link">Tản nhiệt
                                            Arctic</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tan-nhiet-asus" class=" item-link">Tản nhiệt Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tan-nhiet-cooler-master" class=" item-link">Tản nhiệt
                                            Cooler Master</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tan-nhiet-corsair" class=" item-link">Tản nhiệt
                                            Corsair</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tan-nhiet-deepcool" class=" item-link">Tản nhiệt
                                            Deepcool</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tan-nhiet-gigabyte" class=" item-link">Tản nhiệt
                                            Gigabyte</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tan-nhiet-noctua" class=" item-link">Tản nhiệt
                                            Noctua</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tan-nhiet-msi" class=" item-link">Tản nhiệt MSI</a>
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
                                        <a href="/collections/case-1st-player" class=" item-link">Case 1st Player</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-sama" class=" item-link">Case SAMA</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-deepcool" class=" item-link">Case Deepcool</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-cooler-master" class=" item-link">Case Cooler
                                            Master</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-msi" class=" item-link">Case MSI</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-hyte" class=" item-link">Case HYTE</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-corsair" class=" item-link">Case Corsair</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-asus" class=" item-link">Case Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-gigabyte" class=" item-link">Case Gigabyte</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/case-xigmatek" class=" item-link">Case Xigmatek</a>
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
                                        <a href="/collections/quat-arctic" class=" item-link">Quạt Arctic</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/quat-cooler-master" class=" item-link">Quạt Cooler
                                            Master</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/quat-deepcool" class=" item-link">Quạt Deepcool</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/quat-msi" class=" item-link">Quạt MSI</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/quat-xigmatek" class=" item-link">Quạt Xigmatek</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="mn-item  has-child">
                <a href="/collections/gaming-gear" class="menu-item__link item-link" title="Gaming Gear">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/keyboard-svgrepo-com_168b31415fc24bfc8431a4f2d6df698a.svg"
                        alt="Gaming Gear">
                    <span>Gaming Gear</span>
                    <i class="float-right arrow-right"></i> </a>
                <div class="submenu scroll">
                    <div class="view-all visible-xs visible-sm">
                        <span class="nav-menu-mb-close">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <g fill="#fff" fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
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
                                        <a href="/collections/ban-phim-dareu" class=" item-link">Bàn phím DareU</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-logitech" class=" item-link">Bàn phím
                                            Logitech</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-razer" class=" item-link">Bàn phím Razer</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-vgn" class=" item-link">Bàn phím VGN</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-akko" class=" item-link">Bàn phím Akko</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-asus" class=" item-link">Bàn phím Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-durgod" class=" item-link">Bàn phím Durgod</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-ikbc" class=" item-link">Bàn phím iKBC</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/ban-phim-rapoo" class=" item-link">Bàn phím Rapoo</a>
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
                                        <a href="/collections/chuot-logitech" class=" item-link">Chuột Logitech</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/chuot-razer" class=" item-link">Chuột Razer</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/chuot-dareu" class=" item-link">Chuột DareU</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/chuot-vgn" class=" item-link">Chuột VGN</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/chuot-asus" class=" item-link">Chuột Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/chuot-hyperx" class=" item-link">Chuột HyperX</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/chuot-rapoo" class=" item-link">Chuột Rapoo</a>
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
                                        <a href="/collections/tai-nghe-asus" class=" item-link">Tai nghe Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tai-nghe-hyperx" class=" item-link">Tai nghe HyperX</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tai-nghe-logitech" class=" item-link">Tai nghe
                                            Logitech</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tai-nghe-rapoo" class=" item-link">Tai nghe Rapoo</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/tai-nghe-razer" class=" item-link">Tai nghe Razer</a>
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
                                        <a href="/collections/lot-chuot-dareu" class=" item-link">Lót chuột DareU</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/lot-chuot-asus" class=" item-link">Lót chuột Asus</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/lot-chuot-razer" class=" item-link">Lót chuột Razer</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/lot-chuot-logitech" class=" item-link">Lót chuột
                                            Logitech</a>
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
                                        <a href="/collections/microphone-hyperx" class=" item-link">Microphone
                                            HyperX</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/microphone-razer" class=" item-link">Microphone
                                            Razer</a>
                                    </li>
                                    <li class="item-lv2">
                                        <a href="/collections/micro-thronmax" class=" item-link">Microphone
                                            Thronmax</a>
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
                <a href="/collections/phu-kien" class="menu-item__link item-link" title="Phụ kiện">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/backpack-bag-holidays-svgrepo-com_cf9a26a2c3e04a888f813d7c98bd90a9.svg"
                        alt="Phụ kiện">
                    <span>Phụ kiện</span>
                    <i class="float-right arrow-right"></i> </a>
                <div class="submenu scroll">
                    <div class="view-all visible-xs visible-sm">
                        <span class="nav-menu-mb-close">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <g fill="#fff" fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class="">
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
                <a href="/collections/xgear-corner" class="menu-item__link item-link" title="Bàn/Ghế">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/chair-office-svgrepo-com__1__c53b5e823dd24b3d99f3621545b4ea92.svg"
                        alt="Bàn/Ghế">
                    <span>Bàn/Ghế</span>
                </a>
            </li>
            <li class="mn-item  ">
                <a href="/collections/phan-mem" class="menu-item__link item-link" title="Phần mềm">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/app-apps-applications-tiles-svgrepo-com_8e0598988e62413eba422d6b96b4c502.svg"
                        alt="Phần mềm">
                    <span>Phần mềm</span>
                </a>
            </li>
            <li class="mn-item  ">
                <a href="/pages/xay-dung-cau-hinh" class="menu-item__link item-link" title="Tự chọn cấu hình">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/gear-svgrepo-com_6b6445680ece44faa5788d8969a1fff1.svg"
                        alt="Tự chọn cấu hình">
                    <span>Tự chọn cấu hình</span>
                </a>
            </li>
            <li class="mn-item  ">
                <a href="/pages/khuyen-mai" class="menu-item__link item-link" title="Khuyến mãi">
                    <img width="24" height="24"
                        src="//file.hstatic.net/200000837185/file/icons8-sale-30_9693e75164554a859c9fb63763c2388f_icon.png"
                        alt="Khuyến mãi">
                    <span>Khuyến mãi</span>
                </a>
            </li>
            <li class="mn-item  ">
                <a href="/collections/san-pham-ban-chay" class="menu-item__link item-link" title="Best seller">
                    <img width="24" height="24"
                        src="https://file.hstatic.net/200000837185/file/sale-svgrepo-com_8d924f3baa48440e8241868f8dd82e13.svg"
                        alt="Best seller">
                    <span>Best seller</span>
                </a>
            </li> --}}
        </ul>
    </nav>
</div>
