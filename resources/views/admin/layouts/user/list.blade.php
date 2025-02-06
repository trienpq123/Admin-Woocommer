@extends('admin.index')
@section('css')
    <style>
        table tr td span {
            display: block;
            float: left;
            width: max-content;
            margin: 4px 0 !important;
        }
    </style>
@endsection
@section('articles')
    <div id="main" class="main">
        <div class="list-table">
            <div class="wrap-container">
                @if (auth()->user()->can('user.add') || auth()->user()->hasRole('Super Admin'))
                    <a href="{{ route('admin.User.User.create') }}" class="btn btn-add" data-name="add-product">Thêm mới</a>
                @endif
                <button class="btn btn-delete delete-checkbox" id="delete-checkbox" disabled
                    data-name="popup-delete-checkbox">Xoá</button>

                <div class="table">

                    <table id="table">

                        <thead>
                            <tr>
                                <th>STT</th>

                                <th>Ảnh đại diện</th>
                                <th>Họ Và Tên</th>
                                <th>Bộ phận</th>
                                <th>Chức Vụ</th>
                                @if (auth()->user()->can('user.edit') || auth()->user()->hasRole('Super Admin'))
                                <th></th>
                                @endif
                                @if (auth()->user()->can('user.delete') || auth()->user()->hasRole('Super Admin'))
                                    <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($User as $item)
                                <tr>

                                    <td>
                                        <input type="checkbox" class="item-check" name="item-check[]"
                                            value="{{ $item['id'] }}">
                                    </td>
                                    <td>
                                        <img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png"
                                            alt="Profile" class="rounded-circle" width="40px" height="40px">
                                    </td>
                                    <td>{{ $item->name . '-' . $item->id }}</td>
                                    <td>{{ $item->Teams->name }}</td>
                                    <td class="{{ $item->getRoleNames()->count() > 0 ? ' text-center' : '' }}">
                                        @foreach ($item->getRoleNames() as $role)
                                            <span class="badge badge-soft-info"> {{ $role }}</span>
                                        @endforeach
                                    </td>

                                    {{-- @if ($item->getPermissionNames()->count() > 0)
                                        <td>
                                            @foreach ($item->getPermissionNames() as $permission)
                                                <span class="badge badge-soft-info">{{ $permission }}</span>
                                            @endforeach
                                        </td>
                                    @else
                                        <td></td>
                                    @endif --}}
                                    @if (Auth::user()->isAdmin() || Auth::user()->hasPermissionTo('user.edit'))
                                    <td><a href="{{ route('admin.User.User.edit', ['id' => $item->id]) }}" class="btn-edit"
                                            data-name="edit-product" data-id="{{ $item->id }}"><span><i
                                                    class="ri-edit-box-line"></i></span></a></td>
                                    @endif
                                    {{-- class="btn-edit"  --}}

                                    @if (Auth::user()->isAdmin() || Auth::user()->hasPermissionTo('user.delete'))
                                        <td><a href="{{ route('admin.User.User.delete', ['id' => $item->id]) }}"
                                                class="btn-delete"><span><i class="ri-delete-bin-2-line"></i></span></a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <td><input type="checkbox" name="checkAll" id="checkAll" class="check-all"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="popup-modal" id="popup-delete">
                    <div class="box-alert">
                        <div class="alert-item">
                            <span><i class="fas fa-trash-alt"></i></span>
                        </div>
                        <div class="alert-item">
                            <p>Bạn có chắc chắn là muốn xoá?</p>
                        </div>
                        <div class="alert-item">
                            <div class="flex justify-content-center align-items-center">
                                <div class="action flex justify-content-center align-items-center">
                                    <div class="action-agree">
                                        Chấp nhận
                                    </div>
                                    <div class="action-delete">
                                        Huỷ bỏ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-close">
                            <span><i class="fas fa-times"></i></span>
                        </div>
                    </div>

                </div>
                <div class="popup-modal popup-delete-checkbox" data-name="delete-check">
                    <div class="box-alert">
                        <div class="alert-item">
                            <span><i class="fas fa-trash-alt"></i></span>
                        </div>
                        <div class="alert-item">
                            <p>Bạn có chắc chắn là muốn xoá?</p>
                        </div>
                        <div class="alert-item">
                            <div class="flex justify-content-center align-items-center">
                                <div class="action flex justify-content-center align-items-center">
                                    <div class="action-agree" data-name="action-check">
                                        Xác nhận
                                    </div>
                                    <div class="action-delete">
                                        Huỷ bỏ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-close">
                            <span><i class="fas fa-times"></i></span>
                        </div>
                    </div>

                </div>
                {{-- <div class="popup-modal edit-product" >
                <div class="box-alert">
                    <div class="form-feild">
                        <div class="form-title">
                            <h2>Chỉnh sửa</h2>
                        </div>
                        <form class="form-edit" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Tên Thương Hiệu</label>
                                <input type="text" placeholder="Nhập tên Thương Hiệu" class="form-control edit_name" id="slug" onchange="ChangeToSlug()" name="name">
                                <p class="name-error text text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" placeholder="Nhập tên Thương Hiệu" class="form-control edit_slug"  id="convert_slug" name="slug">
                                <p class="slug-error text text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh đại diện</label>
                                <input type="file" name="image" id="" class="file edit_file" id="upload-file">
                                <p class="image-error text text-danger"></p>
                                <div class="form-group" id="show-file" style="width:120px;height:120px; padding-top: 8px">
                                    <img src="https://www.apple.com/ac/structured-data/images/knowledge_graph_logo.png?202209082218" class="1"  alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="status" id="status" class="edit_status" value="0" style="width:auto;"><label for="">Ẩn</label>
                                <input type="radio" name="status"  id="status" class="edit_status" value="1"   style="width:auto;"> <label for="">Hiện</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit">
                                    Xác nhận
                                </button>
                            </div>
                        </form>
                    </div>
    
    
                    <div class="btn-close">
                        <span><i class="fas fa-times"></i></span>
                    </div>
    
                </div>
    
            </div> --}}

            </div>
        </div>
    </div>
@endsection

@push('script-action')
    <script>
        $(document).ready(function() {
            $('#table').DataTable()
            $('.check-all').click(function() {
                if (this.checked) {
                    $('.btn.btn-delete.delete-checkbox').prop('disabled', false);
                } else {
                    $('.btn.btn-delete.delete-checkbox').prop('disabled', true);
                }
                $('.item-check').prop('checked', this.checked);
            });

            $('.item-check').click(function() {
                if (this.checked) {
                    $('.btn.btn-delete.delete-checkbox').prop('disabled', false);
                } else {
                    $('.btn.btn-delete.delete-checkbox').prop('disabled', true);
                }
                if ($('.item-check:checked').length === $('.item-check').length) {
                    $('.check-all').prop('checked', true);
                } else {
                    $('.check-all').prop('checked', false);
                }
            });
            $('.delete-checkbox').click(function() {
                let name = $(this).attr('data-name');
                $('.popup-modal' + '.' + name).toggleClass('active');
                $('.btn-close').click(function() {
                    $('.popup-modal').removeClass('active');
                });
            })

            $('.action-delete').click(function() {
                $('.popup-modal').removeClass('active');
            })

            $('.action-agree').click(function() {

                const token = $('meta[name="api-token"]').attr('content');
                let array = []
                let getValueCheckbox = document.querySelectorAll('.item-check');

                for (let i = 0; i < getValueCheckbox.length; i++) {
                    if (getValueCheckbox[i].checked) {
                        array.push(getValueCheckbox[i].value);
                    }
                }
                const url = `{{ route('user.auth.user.destroy') }}`
                console.log(url + 123);
                $.ajax({
                    type: "delete",
                    url: url,
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: JSON.stringify({
                        ids: array
                    }),
                    success: (res) => {
                        if (res.status == 200) {
                            $('#table').DataTable().ajax().reload()

                            location.reload();
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }

                })
            });
        })
    </script>
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // SELECT 2
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
