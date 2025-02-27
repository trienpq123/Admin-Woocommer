@extends('admin.index')
@section('articles')
    <div class="main" id="main">
        <div class="list-table">
            <div class="wrap-container">

                <a href="{{ route('admin.comment.create') }}" class="btn btn-add" data-name="add-product">Tạo bình luận</a>
                <button class="btn btn-delete delete-checkbox" id="delete-checkbox" disabled
                    data-name="popup-delete-checkbox">Xoá</button>

                <div class="table">

                    <table id="table">

                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Đánh giá</th>
                                <th>Nguồn</th>
                                <th>Số sao</th>        
                                <th>Thời gian</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rates as $rate)
                            <tr>
                                <td><input type="checkbox" name="" id="" class="check-all"></td>
                                <td>
                                    <div class="d-flex gap-10 align-items-center">
                                        <img src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png" alt="" width="60px  ">
                                        <span>Nguyễn Minh Triển</span>
                                    </div>
                                </td>
                                <td>0123 456 789</td>
                                <td>Tuyệt vời</td>
                                <td><a href="">Iphone 15PRO MAX</a></td>
                                <td>{{$rate->rate;}}</td>
                                <td>{{$rate->created_at}}</td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('admin.rate.edit', ['id' => $rate->id])}}" class="btn-edit" data-name="edit-product" data-id="1">Chỉnh sửa</a>
                                        <a href="{{ route('admin.rate.delete', ['id' => $rate->id])}}" class="btn-delete">Xoá</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>

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
