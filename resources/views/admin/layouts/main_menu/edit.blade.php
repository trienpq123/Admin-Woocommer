@extends('admin.index')
@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
@endsection
@section('articles')
    <style>
        .block {
            margin: 5px 0;
            border: 1px solid #f1e8e2;
            background: #fff;
        }

        .block-title {
            font-family: Arial;
            font-size: 12px;
            color: #4c4743;
            padding: 0 10px;
            height: 33px;
            line-height: 33px;
            position: relative;
        }

        .sortable {
            list-style: none;
            padding-left: 0;
            padding: 8px !important;
            border-radius: 8px;
        }

        .sortable ul {
            margin-left: 25px;
            padding-right: unset !important
        }

        .ui-sortable-helper {
            box-shadow: rgba(0, 0, 0, 0.15) 0 3px 5px 0;
            width: 300px !important;
            height: 33px !important;
        }

        .sortable-placeholder {
            height: 35px;
            background: #e3dcd7;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .form-show {
            display: none;
        }

        .block {
            margin: 5px 0;
            border: 1px solid #f1e8e2;
            background: #fff;
        }

        .block-title {
            font-family: Arial;
            font-size: 12px;
            color: #4c4743;
            padding: 0 10px;
            height: 40px;
            line-height: 40px;
            position: relative;
        }

        .sortable {
            list-style: none;
            padding-left: 0;
        }

        .ui-sortable-helper {
            box-shadow: rgba(0, 0, 0, 0.15) 0 3px 5px 0;
            width: 300px !important;
            height: 30px !important;
        }

        .sortable-placeholder {
            height: 30px;
            background: #e3dcd7;
            margin-bottom: 2px;
            margin-top: 2px;
        }

        .sortable ul {
            padding: 7px;
            margin-left: 12px;
        }
    </style>
    <div id="main" class="main">
        <div class="wraper-container">
            {{-- <div class="action-link">
                <a href="{{ route('admin.menu.addMenu') }}" class="btn btn-add btn-success">Thêm menu</a>
            </div> --}}
            <br>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Trang
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <form action="" name="page">
                                        <ul class="list-group" id="menu-pages" data-bs-parent="#menu-toggle">

                                            @if (count($pages) > 0)
                                                @foreach ($pages as $page)
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" name="links[]"
                                                            data-link="{{ env('APP_URL') . '/page/' . $page->slug }}"
                                                            value="{{ $page->id_page }}" aria-label="...">
                                                        <label for="">{{ $page->title }}</label>
                                                    </li>
                                                @endforeach
                                            @endif

                                        </ul>
                                        <div class="text-right m-1 ">
                                            <button type="submit" name="Pagesubmit" class="btn btn-submit">Lưu</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#custom-link" aria-expanded="false" aria-controls="custom-link">
                                    Danh mục
                                </button>
                            </h2>
                            <div id="custom-link" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#custom-link" style="">
                                <div class="accordion-body">
                                    <form action="" name="category">
                                        <ul class="list-group" id="menu-category" data-bs-parent="#menu-toggle">

                                            @if (count($category) > 0)
                                                @foreach ($category as $item)
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="checkbox" name="links[]"
                                                            data-link="{{ env('APP_URL') . '/category/' . $item->slug }}"
                                                            value="{{ $item->id_category }}" aria-label="...">
                                                        <label for="">{{ $item->name_category }}</label>
                                                    </li>
                                                @endforeach
                                            @endif

                                        </ul>
                                        <div class="text-right m-1 ">
                                            <button type="submit" name="Pagesubmit" class="btn btn-submit">Lưu</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#custom-link" aria-expanded="false" aria-controls="custom-link">
                                    Custom Link
                                </button>
                            </h2>
                            <div id="custom-link" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#custom-link" style="">
                                <div class="accordion-body">
                                    <form action="" name="custom">
                                        <ul class="list-group" id="menu-pages" data-bs-parent="#menu-toggle">
                                            <li class="list-group-item">
                                                <label for="">Tiêu đề</label>
                                                <input type="text" class="form-control me-1" placeholder="Tên menu"
                                                    name="title">
                                            </li>
                                            <li class="list-group-item">
                                                <label for="">Đường dẫn</label>
                                                <input type="text" placeholder="#" class="form-control me-1"
                                                    name="link">
                                            </li>

                                        </ul>
                                        <div class="text-right m-1 ">
                                            <button type="submit" name="customLinkSubmit" value="customLinkSubmit"
                                                class="btn btn-submit">Lưu</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="box-white" style="background:#fff;padding:8px;">
                        <div class="d-flex justify-content-betweent"
                            style="justify-content: space-between; align-items: center">
                            <h3 class="ladi-title fs-14 fw-normal">Danh sách menu</h3>
                            <button class="btn btn-primary m-2" id="btn-save-menu" type="button"
                                data-name="btn-save-menu">Lưu
                                menu</button>
                        </div>
                        <ul class="sortable list-unstyled" id="sortable">
                            <x-listMenu :menu="$menu" />
                            {{-- @if (count($menu) > 0)
                                @foreach ($menu as $m)
                                    <li style="position: relative" id="sortableId" data-position-menu="{{ $m->position }}"
                                        data-id-menu="{{ $m->id_menu }}" data-parent-menu="{{ $m->parent_menu }}">
                                        <a class="btn btn-edit" data-name="edit-menu" data-id="{{ $m->id_menu }}"
                                            style="position:absolute; z-index: 99999; right: 35px; "><i
                                                class="fas fa-edit"></i></a>
                                        <a class="btn btn-delete" data-name="edit-menu" data-id="{{ $m->id_menu }}"
                                            style="position:absolute; z-index: 99999; right: 0; "><i class="fas fa-close"></i></a>
                                        <div class="block block-title">{{ $m->title }}</div>
                                        <ul class="sortable list-unstyled">
                                            @if (count($m->chirendMenu) > 0)
                                                @foreach ($m->chirendMenu as $cm)
                                                    <li style="position: relative" id="sortableId"
                                                        data-position-menu="{{ $cm->position }}" data-name="edit-product"
                                                        data-id="{{ $m->id_menu }}" data-id-menu="{{ $cm->id_menu }}"
                                                        data-parent-menu="{{ $cm->parent_menu }}">
                                                        <a class="btn btn-edit" data-name="edit-menu"
                                                            data-id="{{ $cm->id_menu }}"
                                                            style="position:absolute; z-index: 99999; right: 35px; "><i
                                                                class="fas fa-edit"></i></a>
                                                        <a class="btn btn-delete" data-name="edit-menu"
                                                            data-id="{{ $cm->id_menu }}"
                                                            style="position:absolute; z-index: 99999; right: 0; "><i
                                                                class="fas fa-close"></i></a>
                                                        <div style="position: relative" class="block block-title"
                                                            data-position-menu="{{ $cm->position }}"
                                                            data-id-menu="{{ $cm->id_menu }}"
                                                            data-parent-menu="{{ $cm->parent_menu }}">{{ $cm->title }}
                                                        </div>
                                                        <ul class="sortable list-unstyled"></ul>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                @endforeach
                            @endif --}}

                        </ul>
                    </div>


                </div>
            </div>

        </div>


        <div class="popup-modal edit-menu">
            <div class="box-alert">
                <div class="form-feild">
                    <div class="form-title">
                        <h2>Chỉnh sửa</h2>
                    </div>
                    <form id="form-edit" class="edit-menu" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên menu</label>
                            <input type="text" placeholder="Nhập tên menu" class="form-control name" id="slug"
                                onchange="ChangeToSlug()" name="name">
                            <p class="name-error text text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" placeholder="Đường dẫn" class="form-control slug" id="convert_slug"
                                name="slug">
                            <p class="name-error text text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label for="">Chọn menu cha</label>
                            <select type="text" class="form-control parent_menu" name="parent_menu" id="parent_menu">
                                <option value="">Chưa có</option>
                                @if (count($menu) > 0)
                                    @foreach ($menu as $item)
                                        <option value="{{ $item->id_menu }}">{{ $item->name_menu }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <p class="name-error text text-danger"></p>
                        </div>
                        <div class="form-group">
                            <label for="">Trỏ đến</label>
                            <select name="typeMenu" class="type_menu" id="">
                                <option value="">Chưa chọn</option>
                                <option value="1">Trang</option>
                                <option value="2">Danh mục</option>
                            </select>
                            <select name="url" class="type_inner" id="">
                                <option value="">Chưa chọn</option>

                            </select>
                            <p class="name-error text text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="status" id="status" class="status" value="0"
                                style="width:auto;"><label for="">Ẩn</label>
                            <input type="radio" name="status" checked id="status" class="status" value="1"
                                style="width:auto;"> <label for="">Hiện</label>
                        </div>
                        <div class="form-group">
                            <label for="">Vị trí menu</label>
                            <input type="number" name="position" class="position form-control" id="position" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-submit btn-add">
                                Xác nhận
                            </button>
                        </div>
                    </form>
                </div>
                <div class="btn-close">
                    <span><i class="fas fa-times"></i></span>
                </div>
            </div>
        </div>
        <div class="popup-modal add-menu">
            <div class="box-alert">
                <div class="form-feild">
                    <div class="form-title">
                        <h2>Thêm mới menu</h2>
                    </div>
                    <form action="{{ route('admin.menu.addTypeMenu') }}" method="post">
                        @csrf
                        <label for="">Tên menu</label>
                        <input type="text" class="form-control" name="title">
                        <button type="submit" class="btn btn-submit">Thêm</button>
                    </form>
                </div>
                <div class="btn-close">
                    <span><i class="fas fa-times"></i></span>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('script-action')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $('.sortable').sortable({
            connectWith: '.sortable',
            cursor: 'move',
            placeholder: 'sortable-placeholder',
            handle: '.block-title',
            cursorAt: {
                left: 150,
                top: 17
            },
            scroll: false,
            zIndex: 9999,
            distance: 25,
            delay: 100,
            forceHelperSize: true,
            update: function(event, ui) {
                const itemPosition = ui.item.index();
                const parent = ui.item.parent().parent();
                const parentPosition = parent.attr('data-id-menu') ? parent.attr('data-id-menu') :
                    'undefined'; // Nếu parent nằm trong một sortable khác
                const option = {
                    id: ui.item.attr('data-id-menu'),
                    title: ui.item.attr('data-title'),
                    url: ui.item.attr('data-url'),
                    position: itemPosition,
                    parent: parentPosition
                };
                if (parentPosition !== undefined) {
                    console.log("Parent position:", parentPosition);
                }
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "{{ route('admin.menu.updateTypeMenu', ['id' => 3]) }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        data: option
                    },
                    success: function(res) {
                        console.log(res)
                    }
                })
            },
            receive: function(e, ui) {
                const newIndex = $(ui.item).parent().children().index(ui.item);
                // console.log("New position in parent:", newIndex);
            }
        });
        $('.sortable').disableSelection();
        // DropDown detailt menu
        $(document).on('click', '.actions .drop-down', function() {
            $(this).parent().parent().find('.form-show').first().slideToggle();
        })
        // Khi thêm URl mới vào


        $('.accordion-body form').submit(function(e) {
            e.preventDefault();
            let typeForm = $(this).attr('name');
            let item = '';
            let option = {}
            let array = [];
            switch (typeForm) {
                case "page":
                    let checkbox = $(this).find('input[type="checkbox"]:checked');
                    for (let i = 0; i < checkbox.length; i++) {
                        let value = $(checkbox[i]).val();
                        let link = $(checkbox[i]).attr('data-link');
                        let title = $(checkbox[i]).parent().find('label').text();
                        option = {
                            id: value,
                            title: title,
                            link: link,
                            type: "page"
                        }
                        if (array.length > 0) {
                            console.log(option, array)
                            // if (!array.find((val) => val.id === option.id )) {
                            //     array.push(option);
                            //     item += `
                        //             <li style="position: relative" id="sortableId" data-position="" data-id-menu=""
                        //                 data-parent-menu="">
                        //                 <div class="block block-title">${title}</div>
                        //                 <div class="type-page"><span>Page</span></div>
                        //                 <div class="actions">
                        //                     <span class="drop-down"><i class=" ri-arrow-down-s-line"></i></span>
                        //                 </div>
                        //                 <div class="form-show">
                        //                     <button type="button" class="btn btn-outline-danger text-right m-2">Xoá bỏ</button>
                        //                     <form action="" method="post">
                        //                         @csrf
                        //                         <div class="form-group">
                        //                             <label for="url">URL</label>
                        //                             <input type="text" id="url" name="url" placeholder="#" value="${link}">
                        //                         </div>
                        //                         <div class="form-group">
                        //                             <label for="title">Nhãn Đều Hướng</label>
                        //                             <input type="text" id="title" name="title" placeholder="Tiêu đề" value="${title}">
                        //                         </div>
                        //                         <div class="form-group">
                        //                             <button type="submit" name="updateMenuForm" class="btn btn-primary">Save</button>
                        //                             <button type="button" class="btn btn-outline-danger">Huỷ</button>
                        //                         </div>
                        //                     </form>
                        //                 </div>
                        //             </li>
                        //     `
                            // }
                        } else {
                            array.push(option);
                            item += `
                                        <li style="position: relative" id="sortableId" data-position="" data-id-menu=""
                                            data-parent-menu="">
                                            <div class="block block-title">${title}</div>
                                            <div class="type-page"><span>category</span></div>
                                            <div class="actions">
                                                <span class="drop-down"><i class=" ri-arrow-down-s-line"></i></span>
                                            </div>
                                            <div class="form-show">
                                                <button type="button" class="btn btn-outline-danger text-right m-2">Xoá bỏ</button>
                                                <form action="" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="url">URL</label>
                                                        <input type="text" id="url" name="url" placeholder="#" value="${link}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Nhãn Đều Hướng</label>
                                                        <input type="text" id="title" name="title" placeholder="Tiêu đề" value="${title}">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="updateMenuForm" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-outline-danger">Huỷ</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                `
                        }
                    }
                    console.log(array)
                    break;
                case "custom":
                    let title = $(this).find('input[name="title"]').val();
                    let link = $(this).find('input[name="link"]').val();
                    option = {
                        title: title,
                        link: link,
                        type: "custom"
                    }
                    array.push(option)
                    item += `
                                        <li style="position: relative" id="sortableId" data-position="" data-id-menu=""
                                            data-parent-menu="">
                                            <div class="block block-title">${title}</div>
                                            <div class="type-page"><span>Page</span></div>
                                            <div class="actions">
                                                <span class="drop-down"><i class=" ri-arrow-down-s-line"></i></span>
                                            </div>
                                            <div class="form-show">
                                                <button type="button" class="btn btn-outline-danger text-right m-2">Xoá bỏ</button>
                                                <form action="" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="url">URL</label>
                                                        <input type="text" id="url" name="url" placeholder="#" value="${link}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Nhãn Đều Hướng</label>
                                                        <input type="text" id="title" name="title" placeholder="Tiêu đề" value="${title}">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="updateMenuForm" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-outline-danger">Huỷ</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                `
                    break;
                case "category":
                    alert("category")
                    let checkboxes = $(this).find('input[type="checkbox"]:checked');
                    for (let i = 0; i < checkboxes.length; i++) {
                        let value = $(checkboxes[i]).val();
                        let link = $(checkboxes[i]).attr('data-link');
                        let title = $(checkboxes[i]).parent().find('label').text();
                        option = {
                            id: value,
                            title: title,
                            link: link,
                            type: "category"
                        }
                        if (array.length > 0) {
                            console.log(option, array)
                            if (!array.find((val) => val.id === option.id)) {
                                array.push(option);
                                item += `
                                        <li style="position: relative" id="sortableId" data-position="" data-id-menu=""
                                            data-parent-menu="">
                                            <div class="block block-title">${title}</div>
                                            <div class="type-page"><span>Page</span></div>
                                            <div class="actions">
                                                <span class="drop-down"><i class=" ri-arrow-down-s-line"></i></span>
                                            </div>
                                            <div class="form-show">
                                                <button type="button" class="btn btn-outline-danger text-right m-2">Xoá bỏ</button>
                                                <form action="" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="url">URL</label>
                                                        <input type="text" id="url" name="url" placeholder="#" value="${link}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Nhãn Đều Hướng</label>
                                                        <input type="text" id="title" name="title" placeholder="Tiêu đề" value="${title}">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="updateMenuForm" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-outline-danger">Huỷ</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                `
                            } else {
                                alert("Đã tồn tại")
                            }
                        } else {
                            array.push(option);
                            item += `
                                        <li style="position: relative" id="sortableId" data-position="" data-id-menu=""
                                            data-parent-menu="">
                                            <div class="block block-title">${title}</div>
                                            <div class="type-page"><span>Page</span></div>
                                            <div class="actions">
                                                <span class="drop-down"><i class=" ri-arrow-down-s-line"></i></span>
                                            </div>
                                            <div class="form-show">
                                                <button type="button" class="btn btn-outline-danger text-right m-2">Xoá bỏ</button>
                                                <form action="" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="url">URL</label>
                                                        <input type="text" id="url" name="url" placeholder="#" value="${link}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title">Nhãn Đều Hướng</label>
                                                        <input type="text" id="title" name="title" placeholder="Tiêu đề" value="${title}">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="updateMenuForm" class="btn btn-primary">Save</button>
                                                        <button type="button" class="btn btn-outline-danger">Huỷ</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                `
                        }
                    }
                    break;
                default:
                    break;
            }
            $('.sortable').first().append(item);
            console.log(array)
            $.ajax({
                method: "POST",
                url: "{{ route('admin.menu.creatingMenu') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    data: array
                },
                success: function(res) {
                    console.log(res);
                }
            })
        })
    </script>
@endpush
