@extends('admin.index')
@section('css')
    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: white !important;
            background-color: #0d6efd;
            padding: 0.2rem;
            border-radius: 4px
        }
    </style>
@endsection
@section('articles')
    <div class="main" id="main">
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
                            <form action="{{ route('admin.attr.postAddAttr') }}" method="post"
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
                                            <label for="">Ảnh đaị diện</label>
                                            <input type="file" name="attr[option][1][file]" class="file"
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
            <button class="btn btn-delete delete-checkbox" id="delete-checkbox" disabled
                data-name="popup-delete-checkbox">Xoá</button>

            <div class="table">

                <table id="table">

                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên thuộc tính</th>
                            <th>Giá trị</th>
                            <th>Ẩn/Hiện</th>
                            <th></th>
                            <th></th>
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
                    <form   enctype="multipart/form-data" method="POST">
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
                                        <div class="remove item-attr"><span><i class="ri-close-circle-line"></i></span>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh đaị diện</label>
                                    <input type="file" name="attr[option][1][file]" class="file" id="file" />
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
@endsection

@push('script-action')
    <script>
        $(document).ready(function() {


            // $('body').on('change', 'input[type="checkbox"]', function() {
            //     var anyChecked = $('input[type="checkbox"]:checked').length

            //     // Kiểm tra xem có checkbox nào được chọn hay không
            //     if (anyChecked > 0) {
            //         // Nếu có checkbox được chọn, loại bỏ thuộc tính "disable" khỏi button (nếu có)
            //         $('#delete-checkbox').removeAttr('disabled');
            //     } else {
            //         // Nếu không có checkbox được chọn, thêm thuộc tính "disable" vào button (nếu chưa có)
            //         $('#delete-checkbox').attr('disabled', 'disabled');
            //     }
            // });
            // let array = [];
            getDataTable();

            function getDataTable() {
                $('#table').DataTable({
                    "ajax": {
                        type: "GET",
                        url: "{{ route('admin.attr.apiListAttr') }}",
                        dataSrc: 'data'
                    },
                    "columns": [{
                            data: null,
                            render: function(data, type, row, meta) {
                            console.log(data);    

                                return `<input type="checkbox" class='item-check' id="item-check" name="item-check[]" value="${data.id_attr}">`
                            }
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
                                console.log(data);
                                return `<div class="d-flex align-items-center btn-action">
                                            <button  data-bs-toggle="modal" data-bs-target="#form-edit" class="btn-edit"  data-name="edit-product" data-id="${data.id_attr}"><i class="ri-edit-box-line"></i></button>
                                            <a href="" class="btn-delete"  data-id="${data.id_attr}"><i class="ri-delete-bin-5-line"></i></a>
                                        </div>`
                            }
                        },
                        {
                            data: null,
                            render: function(data, type, row, meta) {

                                return '';
                            }
                        }
                    ],
                    language: {
                        search: "Tìm kiếm",
                        Show: "Hiển thị"
                    },
                    paginate: {
                        first: "Trang Đầu",
                        previous: "Trang trước",
                        next: "Trang tiếp",
                        last: "Trang cuối"
                    }
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
                    data: {
                        id: id
                    },
                    success: (res) => {
                        $('#form-edit form').attr('action', `{{ route('admin.attr.putEditAttr') }}?id=${id}`);
                        let name = $("#form-edit .name").val(res.data.name);
                        console.log(res.data.attributevalue)
                        $("#form-edit input[data-role=tagsinput]").tagsinput('removeAll')
                        let attr_array = res.data.attributevalue;
                        
                        for (let i = 0; i < attr_array.length; i++) {
                            $("#form-edit input[data-role=tagsinput]").tagsinput('add', attr_array[i].value);
                        }
                        // $("#form-edit input[data-role=tagsinput]").val(attr_value);
                        // console.log($('#form-edit input[data-role=tagsinput]').tagsinput('items'))

                        $('#form-edit input[data-role=tagsinput]').on('beforeItemRemove', function(event) {
                            var tag = event.item;
                            // Do some processing here
                           console.log(tag);
                           var ajaxData = {
                                id_attr: id,
                                value: tag,
                                _token: "{{ csrf_token() }}"
                           }

                           console.log(ajaxData)
                            if (!event.options || !event.options.preventPost) {
                                $.ajax({
                                    url: "{{ route('admin.attr.deleteAttr') }}",
                                    method: "delete",
                                    data: ajaxData,
                                    success: (res) => {
                                        getDataTable();
                                        $('#table').DataTable().ajax.reload();
                                    }
                                }) 
                            }
                        });







                        // $(".edit_slug").val(res.data.slug);
                        // // let link_img = `<img src="${res.data.image_category}"/>`
                        // // $(".1").removeAttr("src");
                        // $(".1").attr("src", `${res.data.image_category}`);
                        // id_filter = [];
                        // for (let i = 0; i < res.listFilter.length; i++) {
                        //     id_filter.push(res.listFilter[i].id_filter)
                        // }
                        // $('.edit_filter').val(id_filter);
                        // $('.edit_filter').trigger('change');
                        // $('.edit_desc').val(res.data.desc_category);
                        // $('.edit_status').each(function(i, item) {
                        //     if (res.data.hide == item.value) {
                        //         item.checked = true;
                        //     }
                        // })
                        // $('.edit_parent_category option').each(function(i, item) {
                        //     console.log(item.value, res.data.parent_category)
                        //     if (parseInt(item.value) == res.data.parent_category) {
                        //         item.selected = true
                        //         console.log(item.value)
                        //         $('.edit_parent_category').val(item.value);
                        //         $('.edit_parent_category').trigger('change');
                        //     }
                        // })

                    }
                })


                //     // $('.form-edit').submit(function(e) {
                //     //     //  ).val();
                //     //     // let slug = $(".edit   // e.preventDefault();
                //     //     // var token =  $('input[name="_token"]').attr('value');
                //     //     // console.log(token);
                //     //     // let name = $(".edit_names"_slug").val();
                //     //     // let _parent = $(".edit_parent option:selected").val();
                //     //     // $.ajax({
                //     //     //     type:"POST",
                //     //     //     dataType:"JSON",
                //     //     //     url: "{{ route('admin.filter.putEditFilter') }}",
                //     //     //     data: {id:id,_token:"{{ csrf_token() }}",name:name,slug:slug,_parent:_parent},
                //     //     //     success: (res) => {
                //     //     //         // window.location.reload();
                //     //     //         // $('.table').html(res);
                //     //     //        console.log(res)

                //     //     //         if(res.status == 200 ){
                //     //     //             $('#table').DataTable().destroy()
                //     //     //             getDataTable();
                //     //     //             $('.alert').toggleClass('active')
                //     //     //             validator(res.status,res.message)
                //     //     //         }
                //     //     //         if(res.status == 404){
                //     //     //             validator(res.status,res.message)
                //     //     //         }
                //     //     //     }
                //     //     // })
                //     //     e.preventDefault();
                //     //     let filter = $('.edit_filter :selected');
                //     //     let name_category = $('.form-control.edit_name').val();
                //     //     console.log(name_category)
                //     //     let slug_category = $('.edit_slug').val();
                //     //     let desc_category = CKEDITOR.instances.desc.getData();
                //     //     let image_category = $('input[type=file].edit_file')[0].files[0];
                //     //     let parent_category = $('.edit_parent_category').val();
                //     //     console.log(parent_category)
                //     //     console.log(image_category)
                //     //     console.log(desc_category)
                //     //     let status_category = $('.edit_status:checked').val()
                //     //     console.log(status_category)
                //     //     var formData = new FormData();
                //     //     formData.append('desc', desc_category)
                //     //     formData.append('id', id)
                //     //     formData.append('image', $('input[type=file]')[0].files[0]);
                //     //     formData.append('name', name_category)
                //     //     formData.append('slug', slug_category)
                //     //     formData.append('status', status_category)
                //     //     formData.append('parent_category', parent_category)
                //     //     formData.append('_token', "{{ csrf_token() }}")
                //     //     let status = $('.status').val();
                //     //     idFilter = [];
                //     //     filter.each(function(i, f) {
                //     //         return idFilter.push(f.value)
                //     //     })
                //     //     console.log(idFilter)
                //     //     formData.append('idFilter', idFilter)

                //     //     $.ajax({
                //     //         type: "POST",
                //     //         url: "{{ route('admin.category.putEditCategory') }}",
                //     //         data: formData,
                //     //         success: (res) => {
                //     //             if (res.status == 404) {
                //     //                 console.log(res)
                //     //                 validator(res.status, res.message)

                //     //             } else {
                //     //                 console.log(res)
                //     //                 $('#table').DataTable().destroy()
                //     //                 getDataTable();
                //     //                 $('.alert').toggleClass('active')
                //     //                 $('.popup-modal').removeClass('active');
                //     //             }
                //     //         },
                //     //         cache: false,
                //     //         contentType: false,
                //     //         processData: false

                //     //     })
                //     // })
            })


            // $('body').on('click', 'table .btn-delete', function() {
            //     let id = $(this).attr('data-id');
            //     console.log(id)
            //     $('#popup-delete').toggleClass('active');
            //     $('.btn-close').click(function() {
            //         $('.popup-modal').removeClass('active');
            //     });
            //     $('.action-agree').click(function() {
            //         $('.popup-modal').removeClass('active');
            //         $.ajax({
            //             url: "{{ route('admin.category.deleteCategory') }}",
            //             type: "delete",
            //             data: {
            //                 data: [id],
            //                 _token: "{{ csrf_token() }}"
            //             },
            //             success: (res) => {
            //                 if (res.status == 200) {
            //                     console.log(res)
            //                     $('#table').DataTable().destroy()
            //                     getDataTable();
            //                     $('.alert').toggleClass('active')
            //                 }
            //             }
            //         })
            //     });
            // })


            // $('.check-all').change(function() {

            //     if ($(this).is(':checked')) {
            //         if ($(this).prop('checked')) {
            //             $('.item-check').not(this).prop('checked', true)
            //         }
            //         // $('tr input:checkbox').attr('checked','checked');

            //         let getValueCheckbox = document.querySelectorAll('#item-check');

            //         for (let i = 0; i < getValueCheckbox.length; i++) {

            //             array.push(getValueCheckbox[i].value);
            //             getValueCheckbox[i].addEventListener("click", function() {
            //                 if (this.checked) {
            //                     array.push(getValueCheckbox[i].value)
            //                 } else {
            //                     let array_new = array.filter(function(arr) {
            //                         return arr != getValueCheckbox[i].value;
            //                     })
            //                     array = array_new;
            //                 }
            //             })

            //         }
            //     } else {
            //         $('tr input:checkbox').removeAttr('checked');
            //         array = [];
            //     }
            // })
            // $('.delete-checkbox').click(function() {
            //     let name = $(this).attr('data-name');
            //     $('.popup-modal' + '.' + name).toggleClass('active');
            //     // $('.popup-modal').click(function(){
            //     //     $('.popup-modal').removeClass('active');
            //     // });
            //     $('.btn-close').click(function() {
            //         $('.popup-modal').removeClass('active');
            //     });


            // })

            $('.action-delete').click(function() {
                $('.popup-modal').removeClass('active');
            })

            // $('.action-agree').click(function() {
            //     let array = []
            //     let getValueCheckbox = document.querySelectorAll('#item-check');

            //     for (let i = 0; i < getValueCheckbox.length; i++) {
            //         if (getValueCheckbox[i].checked) {
            //             array.push(getValueCheckbox[i].value);
            //         }
            //     }
            //     $.ajax({
            //         type: "DELETE",
            //         url: "{{ route('admin.category.deleteCategory') }}",
            //         data: {
            //             data: array,
            //             _token: "{{ csrf_token() }}"
            //         },
            //         success: (res) => {
            //             if (res.status == 200) {
            //                 $('#table').DataTable().destroy()
            //                 getDataTable();
            //                 $('.alert').toggleClass('active')
            //                 $('.popup-modal').removeClass('active');
            //             }
            //         }

            //     })
            // });

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
                confirmKeys: [13, 188,'Enter']
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
        $("#file").change(function() {
            var file = this.files[0];
            var reader = new FileReader();
            console.log(file);
            reader.onload = function() {

                $(".preview-image img").attr("src", reader.result);
            };
            reader.readAsDataURL(file);
        });
    </script>
@endpush
