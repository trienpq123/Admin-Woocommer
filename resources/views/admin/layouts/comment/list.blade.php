@extends('admin.index')
@section('articles')
    <div class="main" id="main">
        <div class="list-table">
            <div class="wrap-container">

                <a href="{{ route('admin.promotion.create') }}" class="btn btn-add" data-name="add-product">Tạo bình luận</a>
                <button class="btn btn-delete delete-checkbox" id="delete-checkbox" disabled
                    data-name="popup-delete-checkbox">Xoá</button>

                <div class="table">

                    <table id="table">

                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tác giả</th>
                                <th>Bình luận</th>
                                <th>Nguồn</th>
                                <th>Thời gian</th>
                                <th>Ẩn/Hiện</th>
                                <th></th>
                                {{-- <th></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id="" class="check-all"></td>
                                <td>
                                    <div class="d-flex">
                                        <img src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png" alt="">
                                        <span>Nguyễn Minh Triển</span>
                                    </div>
                                </td>
                                <td>Nội dung bình luận</td>
                                <td><a href="#">ABC123</a></td>
                                <td>01/01/2022 </td>
                                <td>
                                    <a class="btn-edit" data-name="edit-product" data-id="1">Chỉnh sửa</a>
                                    <a class="btn-edit" data-name="edit-product" data-id="1">Xoá</a>
                                </td>

                            </tr>

                        </tbody>

                        {{-- <tfoot>

                            <tr>
                                <td><input type="checkbox" name="" id="" class="check-all"></td>
                            </tr>


                        </tfoot> --}}

                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('script-action')
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {

            $('#table').dataTable({
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

        })
    </script>
@endpush
