@extends('admin.index')
@section('articles')
<div class="main" id="main">
    <div class="list-table">
        <div class="wrap-container">

            <a href="{{route('admin.product.addProduct')}}" class="btn btn-add" data-name="add-product">Thêm mới</a>
            {{-- <a href="{{route('admin.product.addProduct')}}" class="btn btn-add">Thêm mới</a> --}}
            <button class="btn btn-delete delete-checkbox" id="delete-checkbox" disabled data-name="popup-delete-checkbox">Xoá</button>

            <div class="table">

                <table id="table">

                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu Đề</th>
                            <th>Tình trạng</th>
                            <th>Ẩn/Hiện</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chạy đợt 1</td>
                            <td>Đang áp dụng</td>
                            <td>Chấp nhận</td>
                            <td><button class="btn-edit" data-name="edit-product" data-id="1">Chỉnh sửa</button></td>
                            <td><button class="btn-delete">Xoá</button></td>
                        </tr>
                    </tbody>

                    <tfoot>

                        <tr>
                            <td><input type="checkbox" name="" id="" class="check-all"></td>
                        </tr>


                    </tfoot>

                </table>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush