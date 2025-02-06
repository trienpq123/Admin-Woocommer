@if (count($data) > 0)
    <div class="submenu scroll">
        {{-- <div class="view-all visible-xs visible-sm">
        <span class="nav-menu-mb-close">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                class="">
                <g>
                    <g fill="#fff" fill-rule="evenodd" clip-rule="evenodd">
                        <path
                            d="M5.293 5.293a1 1 0 0 1 1.414 0l12 12a1 1 0 0 1-1.414 1.414l-12-12a1 1 0 0 1 0-1.414z"
                            fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                        <path
                            d="M18.707 5.293a1 1 0 0 0-1.414 0l-12 12a1 1 0 1 0 1.414 1.414l12-12a1 1 0 0 0 0-1.414z"
                            fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                    </g>
                </g>
            </svg>
        </span>
        <a href="/collections/laptop">Xem tất cả »</a>
    </div> --}}
        <div class="subMenuWrap">
            <ul class="submenu__list">
                <!--<li class="item-lv1 ">-->
                @foreach ($data as $item)
                    <li class="item-lv1 hasChild">
                        <a href="{{ $item->url }}" class=" item-link">
                            <span>{{ $item->title }}</span>
                            <i class="float-right fa fa-chevron-right"></i> </a>
                        @php
                            // dd($item->menu);
                        @endphp
                        @if (count($item->menu) > 0)
                            <ul class="subnav">
                                @foreach ($item->menu as $menu)
                                    <li class="item-lv2">
                                        <a href="{{ $menu->url }}" class=" item-link">{{ $menu->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
