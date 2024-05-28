@extends('admin.index')
@section('css')
    <style>
        .bootstrap-tagsinput input{
            border: unset !important;
        }
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #4154f1 !important;
            background-color: hsl(220, 100%, 98%);
            padding: 0.2rem;
            border-radius: 4px
        }
    </style>
@endsection
@section('articles')
    <div class="main" id="main">

        <div class="alert alert-primary alert-dismissible fade show alert-fixed" role="alert">
            A simple primary alert—check it out!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="pagetitle">
            <h1>Thuộc tính</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Thuộc tính</li>
                    <li class="breadcrumb-item active">Danh sách</li>
                </ol>
            </nav>
        </div>
        <div class="list-table">

            <button href="" class="btn btn-add" data-name="add-attr" data-bs-toggle="modal"
                data-bs-target="#form-add">Thêm thuộc tính mới</button>
            <div class="modal fade" id="form-add" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Thêm thuộc tính</h5>
                            <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.attr.putEditAttr') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="list-attr">
                                    <div class="list-item">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">Tên thuộc tính</label>
                                                    <input type="text" placeholder="Nhập tên thuộc tính"
                                                        class="form-control name" id="slug"
                                                        name="attr[option][1][name]">
                                                    <p class="name-error text text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Giá trị thuộc tính</label>
                                                    <input type="text" placeholder="Nhập tên thuộc danh mục"
                                                        class="form-control" id="slug" name="attr[option][1][position]"
                                                        data-role="tagsinput">
                                                    <p class="name-error text text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="remove item-attr"><span><i
                                                            class="ri-close-circle-line"></i></span></div>
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label for="">Ảnh đại diện</label>
                                            <input type="file" name="attr[option][1][file]" class="file-change"
                                                id="file" />
                                            <div class="ladi-box">
                                                <div class="preview-image">
                                                    <img src="https://www.apple.com/ac/structured-data/images/knowledge_graph_logo.png?202209082218"
                                                        class="1" width="60" alt="Ảnh thuộc tính">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        {{-- <div class="form-group">
                                            <input type="radio" name="status[]" id="status" class="status"
                                                value="0" style="width:auto;"><label for="">Ẩn</label>
                                            <input type="radio" name="status[]" id="status" class="status"
                                                value="1" style="width:auto;" checked> <label for="">Hiện</label>
                                        </div> --}}
                                    </div>

                                </div>
                               
                              
                                <button type="button" class="btn btn-action-append">Thêm thuộc tính</button>
                                <hr>
                                <div class="form-group">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="modal-footer">

                        </div> --}}
                    </div>
                </div>
            </div>
            <button class="btn  delete-checkbox btn-danger" id="delete-checkbox" disabled data-name="popup-delete-checkbox"
                data-bs-toggle="modal" data-bs-target="#popup-delete">Xoá</button>
            <div class="table">

                <table id="table">

                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class='item-check-all' id="item-check-all" name="item-check-all">
                            </th>
                            <th>Tên thuộc tính</th>
                            <th>Giá trị</th>
                            <th></th>
                            {{-- <th></th> --}}
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    {{-- <tbody>
            @php
            $i = 0;
            @endphp
            @foreach ($listFilter as $item)
                <tr>
                    <td>
                        <input type="checkbox" id="item-check" name="item-check[]" value="{{$item->filter_id}}">
                </td>
                <td></td>
                <td class="badge badge-soft-info">{{$item->filter_name}}</td>
                <td>{{$item->slug}}</td>
                <td><a class="btn-edit" data-name="edit-product" data-id="{{$item->filter_id}}">Chỉnh sửa</a></td>
                <td><a class="btn-delete">Xoá</a></td>
                </tr>

                @endforeach
                </tbody> --}}
                    {{-- @if (count($listAttr) > 0)
                        <tfoot>
                            <tr>
                                <td><input type="checkbox" name="" id="" class="check-all"></td>
                            </tr>
                        </tfoot>
                    @endif --}}
                </table>
            </div>

        </div>
    </div>
    <div class="modal fade" id="form-edit" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm thuộc tính</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="list-attr">
                            <div class="list-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Tên thuộc tính</label>
                                            <input type="text" placeholder="Nhập tên thuộc tính"
                                                class="form-control name" id="name_attr" name="attr[option][1][name]">
                                            <p class="name-error text text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Giá trị thuộc tính</label>
                                            <input type="text" placeholder="Nhập tên thuộc danh mục"
                                                class="form-control" id="value_attr" name="attr[option][1][position]"
                                                data-role="tagsinput">
                                            <p class="name-error text text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        {{-- <div class="remove item-attr"><span><i class="ri-close-circle-line"></i></span>
                                        </div> --}}
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh đaị diện</label>
                                    <input type="file" name="attr[option][1][file]" class="file-change" id="file" />
                                    <div class="ladi-box">
                                        <div class="preview-image">
                                            <img src="https://www.apple.com/ac/structured-data/images/knowledge_graph_logo.png?202209082218"
                                                class="1" width="60" alt="Ảnh thuộc tính">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <input type="radio" name="status[]" id="status" class="status"
                                        value="0" style="width:auto;"><label for="">Ẩn</label>
                                    <input type="radio" name="status[]" id="status" class="status"
                                        value="1" style="width:auto;" checked> <label for="">Hiện</label>
                                </div> --}}
                            </div>

                        </div>
                        {{-- <button type="button" class="btn btn-action-append">Thêm thuộc tính</button> --}}
                        <hr>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">

                </div> --}}
            </div>
        </div>
    </div>
    <div class="modal fade" id="popup-delete" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title">Bạn có chắc chắn xoá các thuộc tính đã chọn?</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ri-close-line"></i></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <span><i class=" ri-alert-line"></i></span>
                        <p>Bạn có chắc chắn muốn xoá những phần đã chọn?</p>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    <button type="button" class="btn btn-danger" data-name="popup-delete" data-bs-dismiss="modal">Xác
                        nhận</button>
                </div>
                {{-- <div class="modal-footer">

                </div> --}}
            </div>
        </div>
    </div>
@endsection

@push('script-action')
    <script>
        $(document).ready(function() {


            $('body').on('change', 'input[type="checkbox"]', function() {
                var anyChecked = $('input[type="checkbox"]:checked').length

                // Kiểm tra xem có checkbox nào được chọn hay không
                if (anyChecked > 0) {
                    // Nếu có checkbox được chọn, loại bỏ thuộc tính "disable" khỏi button (nếu có)
                    $('#delete-checkbox').removeAttr('disabled');
                } else {
                    // Nếu không có checkbox được chọn, thêm thuộc tính "disable" vào button (nếu chưa có)
                    $('#delete-checkbox').attr('disabled', 'disabled');
                }
            });
            let array = [];


            getDataTable();
            // Render ra dữ liệu table
            function getDataTable() {
                $('#table').DataTable({
                    "ajax": {
                        type: "GET",
                        url: "{{ route('admin.attr.apiListAttr') }}",
                        beforeSend: function() {
                            $('#loader').addClass('active')
                        },
                        dataSrc: 'data',
                        complete: function() {
                            setTimeout(() => {
                                $('#loader').removeClass('active')
                            }, 2000);
                        }
                    },
                    "columns": [{
                            data: null,
                            render: function(data, type, row, meta) {
                                // console.log(data);

                                return `<input type="checkbox" class='item-check' id="item-check" name="item-check[]" value="${data.id_attr}">`
                            },
                            orderable: false
                        },
                        {
                            data: null,
                            render: function(data, type, row, meta) {

                                return `<span>${data.name}</span>`
                            }
                        },
                        {
                            data: null,
                            render: function(data, type, row, meta) {

                                let span_value = '';
                                for (let i = 0; i < data.attributevalue.length; i++) {
                                    span_value +=
                                        `<span class="badge badge-soft-info">${data.attributevalue[i].value}</span>`
                                }
                                return span_value != '' ? span_value : '';
                                // return `<a class="btn-edit"  data-name="edit-product" data-id="${data.id_category}">Chỉnh sửa</a>`
                                // return data.attributevalue[0].value ? data.attributevalue[0].value : '';
                            }
                        },
                        {
                            data: null,
                            render: function(data, type, row, meta) {
                                // console.log(data);
                                return `<div class="d-flex align-items-center btn-action">
                                            <button  data-bs-toggle="modal" data-bs-target="#form-edit" class="btn-edit"  data-name="edit-product" data-id="${data.id_attr}"><i class="ri-edit-box-line"></i></button>
                                            <a href="{{ route('admin.attr.deleteAttrSet') }}?id=${data.id_attr}" class="btn btn-delete" id="action-delete"  data-id="${data.id_attr}"><i class="ri-delete-bin-5-line"></i></a>
                                        </div>`
                            }
                        },

                    ],
                    language: {
                        "search": "Tìm kiếm",
                        "Show": "Hiển thị",
                        "lengthMenu": "Hiển thị _MENU_ trang",
                        "infoEmpty": "Trang 0 to 0 of 0 trang",
                        "infoFiltered": "(Đã lọc của _MAX_ tổng trang)",
                        "info": "Đang hiển thị _START_ đến _END_ của _TOTAL_ trang",
                        paginate: {
                            "first": "Trang Đầu",
                            "previous": "Trang trước",
                            "next": "Trang tiếp",
                            "last": "Trang cuối"
                        },
                    },


                })
            }
            $('body').on('click', '.btn-edit', function() {
                let name = $(this).attr('data-name');
                let id = $(this).attr('data-id');
                $('.popup-modal' + '.' + name).toggleClass('active');

                $('.btn-close').click(function() {
                    $('.popup-modal').removeClass('active');
                });
                $('.btn-agree').click(function() {
                    $('.popup-modal').removeClass('active');
                });

                $.ajax({
                    url: "{{ route('admin.attr.editAttr') }}",
                    dataType: "json",
                    method: "GET",
                    beforeSend: function() {
                        $('#loader').addClass('active')
                    },
                    complete: function() {
                        $('#loader').removeClass('active')
                    },
                    data: {
                        id: id
                    },
                    success: (res) => {
                        // console.log(res);
                        $('#form-edit form').attr('action',
                            `{{ route('admin.attr.putEditAttr') }}?id=${id}`);
                        let name = $("#form-edit .name").val(res.data.name);
                        console.log(res.data.image)
                        $('.preview-image img').attr('src',res.data.image);
                        // console.log(res.data.attributevalue)
                        $("#form-edit input[data-role=tagsinput]").tagsinput('removeAll')
                        let attr_array = res.data.attributevalue;

                        for (let i = 0; i < attr_array.length; i++) {
                            $("#form-edit input[data-role=tagsinput]").tagsinput('add',
                                attr_array[i].value);
                        }
                        $('#form-edit input[data-role=tagsinput]').on('beforeItemRemove',
                            function(event) {
                                var tag = event.item;
                                // Do some processing here
                                // console.log(tag);
                                var ajaxData = {
                                    id_attr: id,
                                    value: tag,
                                    _token: "{{ csrf_token() }}"
                                }

                              
                                if (!event.options || !event.options.preventPost) {
                                    $.ajax({
                                        url: "{{ route('admin.attr.deleteAttr') }}",
                                        method: "delete",
                                        data: ajaxData,
                                        beforeSend: function() {
                                            $('#loader').addClass('active')
                                        },
                                        complete: function() {
                                            $('#loader').removeClass('active')
                                        },
                                        success: (res) => {
                                            // getDataTable();

                                            if (res.status == 200) {
                                                $('#table').DataTable().ajax
                                                    .reload();
                                            }
                                        }
                                    })
                                }
                            });







                       

                    }
                })


         
            })



            // Checkbox
            $('body').on('change', '#item-check', function(e) {
                e.preventDefault();
                if ($(this).is(':checked')) {


                    array = array.filter((arr) => arr !== $(this).val());
                    array.push($(this).val())

                } else {

                    array = array.filter((arr) => arr !== $(this).val());
                    console.log($(this).val());

                }

            })

            // Tích vào là tất cả checkbox tích
            $('.item-check-all').change(function() {

                if ($(this).is(':checked')) {
                    if ($(this).prop('checked')) {
                        $('.item-check').not(this).prop('checked', true)
                    }


                    let getValueCheckbox = document.querySelectorAll('#item-check');

                    for (let i = 0; i < getValueCheckbox.length; i++) {
                        array = array.filter((arr) => arr !== getValueCheckbox[i].value);
                        array.push(getValueCheckbox[i].value)



                    }
                } else {
                    $('.item-check').not(this).prop('checked', false)
                    array = [];
                }
            })

            $('.delete-checkbox').click(function() {
                let name = $(this).attr('data-name');
                $('.popup-modal' + '.' + name).toggleClass('active');
                // $('.popup-modal').click(function(){
                //     $('.popup-modal').removeClass('active');
                // });
                $('.btn-close').click(function() {
                    $('.popup-modal').removeClass('active');
                });
            })

            $('.action-delete').click(function() {
                $('.popup-modal').removeClass('active');
            })

            $('#popup-delete button[data-name="popup-delete"]').click(function() {

                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.attr.deleteMore') }}",
                    beforeSend: function() {
                        $('#loader').addClass('active')
                    },
                    complete: function() {
                        $('#loader').removeClass('active')
                    },
                    data: {
                        data: array,
                        _token: "{{ csrf_token() }}"
                    },
                    success: (res) => {
                        if (res.status == 200) {
                            $('#table').DataTable().ajax
                                .reload();
                        }
                    }

                })
            });

            // $('#form-add').submit(function(e) {
            //     e.preventDefault();
            //     let filter = $('.filter :selected');
            //     let name_category = $('.form-control.name').val();
            //     let slug_category = $('.slug').val();
            //     let desc_category = CKEDITOR.instances.desc.getData();
            //     let image_category = $('input[type=file]')[0].files[0];
            //     let parent_category = $('.parent_category').val();
            //     console.log(image_category)
            //     let status_category = $('.status').val()
            //     var formData = new FormData();
            //     formData.append('desc', desc_category)
            //     formData.append('image', $('input[type=file]')[0].files[0]);
            //     formData.append('name', name_category)
            //     formData.append('slug', slug_category)
            //     formData.append('status', status_category)
            //     formData.append('parent_category', parent_category)
            //     formData.append('_token', "{{ csrf_token() }}")
            //     let status = $('.status').val();
            //     idFilter = [];
            //     filter.each(function(i, f) {
            //         return idFilter.push(f.value)
            //     })
            //     formData.append('idFilter', idFilter)
            //     $.ajax({
            //         type: "POST",
            //         url: "{{ route('admin.category.postAddCategory') }}",
            //         data: formData,
            //         success: (res) => {
            //             if (res.status == 404) {
            //                 console.log(res)
            //                 validator(res.status, res.message)

            //             } else {
            //                 console.log(res)
            //                 $('#table').DataTable().destroy()
            //                 getDataTable();
            //                 $('.alert').toggleClass('active')
            //                 $('.popup-modal').removeClass('active');
            //             }
            //         },
            //         cache: false,
            //         contentType: false,
            //         processData: false,
            //         error: (errors) => {
            //             return errors
            //         }

            //     })
            // })


        })
        $('.btn.btn-action-append').click(function() {
            let num_position_attr = $('input.name').length + 1;
            let html = ` <div class="list-item">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="">Tên thuộc tính</label>
                                                    <input type="text" placeholder="Nhập tên thuộc tính"
                                                        class="form-control " id="slug" name="attr[option][` +
                num_position_attr + `][name]" value="2">
                                                    <p class="name-error text text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Giá trị thuộc tính</label>
                                                    <input type="text" placeholder="Nhập tên thuộc danh mục"
                                                        class="form-control " id="slug" name="attr[option][` +
                num_position_attr + `][position]"
                                                        data-role="tagsinput">
                                                    <p class="name-error text text-danger"></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="remove item-attr"><span>X</span></div>
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label for="">Ảnh đaị diện</label>
                                            <input type="file" name="attr[option][` + num_position_attr + `][file]" class="file" id="file"
                                                accept="image/*" />
                                            <div class="ladi-box">
                                                <div class="preview-image">
                                                    <img src="https://www.apple.com/ac/structured-data/images/knowledge_graph_logo.png?202209082218"
                                                        class="1" width="60" alt="Ảnh thuộc tính">
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                `;
            $('.list-attr').append(html);
            $('input[data-role=tagsinput]').tagsinput({
                confirmKeys: [13, 188, 'Enter']
            });
            $('.remove.item-attr span').click(function() {
                $(this).parents('.list-item').remove()
            })


        })
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <script>
        // $(function() {
        //     $('input')
        //         .on('change', function(event) {
        //             var $element = $(event.target);
        //             var $container = $element.closest('.example');

        //             if (!$element.data('tagsinput')) return;

        //             var val = $element.val();
        //             if (val === null) val = 'null';
        //             var items = $element.tagsinput('items');

        //             $('code', $('pre.val', $container)).html(
        //                 $.isArray(val) ?
        //                 JSON.stringify(val) :
        //                 '"' + val.replace('"', '\\"') + '"'
        //             );
        //             $('code', $('pre.items', $container)).html(
        //                 JSON.stringify($element.tagsinput('items'))
        //             );
        //         })
        //         .trigger('change');
        // });
       
    </script>
@endpush
