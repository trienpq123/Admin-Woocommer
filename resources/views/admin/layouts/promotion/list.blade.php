@extends('admin.index')
@section('articles')
    <div class="main" id="main">
        <div class="list-table">
            <div class="wrap-container">

                <a href="{{ route('admin.promotion.create') }}" class="btn btn-add" data-name="add-product">Thêm mới</a>
                {{-- <a href="{{route('admin.product.addProduct')}}" class="btn btn-add">Thêm mới</a> --}}
                <button class="btn btn-delete delete-checkbox" id="delete-checkbox" disabled
                    data-name="popup-delete-checkbox">Xoá</button>

                <div class="table">

                    <table id="table">

                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu Đề</th>
                                <th>Loại giảm giá</th>
                                <th>Mức giảm giá</th>
                                <th>Thời gian bắt đầu</th>
                                <th>Thời gian kết thúc</th>
                                <th>Tình trạng</th>
                                <th>Ẩn/Hiện</th>
                                <th></th>
                                {{-- <th></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($promotion) > 0)
                                @foreach ($promotion as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ $item->title }}

                                        </td>
                                        <td>

                                            @if ($item->type == 1)
                                                Giảm giá theo % đơn hàng
                                            @else
                                                Giá tiền
                                            @endif
                                        </td>
                                        <td>

                                            @if ($item->type == 1)
                                                {{ $item->discount }}%
                                            @else
                                                {{ $item->discount }}đ
                                            @endif
                                        </td>
                                        <td>{{ $item->from }}</td>
                                        <td>{{ $item->to }}</td>
                                        <td>
                                            @php
                                                // dd($item->from, $timeNow);
                                            @endphp
                                            @if ($item->from <= $timeNow && $item->to >= $timeNow)
                                                <div class="badge bg-success">Đủ điều kiện</div>
                                            @else
                                                <div class="badge bg-warning">Không đủ điều kiện</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 0)
                                                <div class="badge bg-danger">Chưa chạy</div>
                                            @else
                                                <div class="badge bg-success">Đang chạy</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center btn-action">
                                                <span><a href="{{route('admin.promotion.edit',['id' => $item->id])}}" class="btn-edit"><i
                                                            class="ri-edit-box-line"></i></a></span>
                                                <span><a href="{{route('admin.promotion.delete',['id' => $item->id])}}"><i class="ri-delete-bin-5-line"></i></a></span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

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
