@extends('admin.index')
@section('articles')
    <div class="list-table">
        <div class="main" id="main">
            <div class="alert alert-primary alert-dismissible fade show alert-fixed" role="alert">
                A simple primary alert—check it out!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="pagetitle">
                <h1>Mã Khuyến Mãi</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item">Mã Khuyến Mãi</li>
                        <li class="breadcrumb-item active">Thêm Mã Khuyến Mãi mới</li>
                    </ol>
                </nav>
            </div>
            <form id="form-add" action="{{ route('admin.promotion.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="grid grid-tempalte-colum-7-3 gap-16">
                    <div class="form-left">
                        <div class="form-group">
                            <label for="">Tên Mã Khuyến Mãi</label>
                            <input type="text" placeholder="Nhập tên Mã Khuyến Mãi" class="form-control name"
                                name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Code</label>
                            <input type="text" placeholder="Nhập code" class="form-control code" name="code"
                                value="{{ old('code') }}">
                        </div>
                        <div class="form-group">
                            <label for="type">Loại giảm giá</label>
                            <select name="type" class="form-select" id="type">
                                <option value="">Chọn loại giảm giá</option>
                                <option value="1">Giá giá theo % giá trị đơn hàng</option>
                                <option value="2">Giảm giá tiền</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="discount">Gía giảm</label>
                            <input type="text" class="form-control" name="discount" id="discount">
                        </div>

                        <div class="form-group">
                            <label for="id_product">Sản phẩm</label>
                            <select class="id_product form-select" id="id_product[]" name="id_product[]" multiple="multiple">
                                <option value="">Chưa có</option>
                                @if (count($product) > 0)
                                    @foreach ($product as $item)
                                        <option value="{{ $item->id_product }}">{{ $item->name_product }}</option>
                                    @endforeach
                                @endif
                            </select>
                     
                        </div>



                    </div>
                    <div class="form-right">
                        <div class="form-group">
                            <input type="radio" name="status" id="status" class="status" value="0"
                                style="width:auto;"><label for="">Ẩn</label>
                            <input type="radio" name="status" checked id="status" class="status" value="1"
                                style="width:auto;"> <label for="">Hiện</label>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <label for="date-start">Ngày bắt đầu</label>
                                <input type="datetime-local" class="form-control" name="date_start" id="date-start">
                                <p class="date-start-error text text-danger">Chưa chọn ngày bắt đầu</p>
                            </div>
                            <div class="col-lg-12">
                                <label for="date-start">Ngày kết thúc</label>
                                <input type="datetime-local" class="form-control" name="date_end" id="date-end">
                                <p class="date-start-error text text-danger">Chưa chọn ngày kết thúc</p>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Xác nhận</button>
            </form>
        </div>
    </div>
@endsection

@push('script-action')
<script>
    $(document).ready(function() {
        $('.form-select').select2();
    });
</script>
@endpush
