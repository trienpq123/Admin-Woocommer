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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="form-add" action="{{ route('admin.promotion.update', ['id' => $promotion->id]) }}"
                enctype="multipart/form-data" method="post">
                @csrf
                <div class="grid grid-tempalte-colum-7-3 gap-16">
                    <div class="form-left">
                        <div class="form-group">
                            <label for="">Tên Mã Khuyến Mãi</label>
                            <input type="text" placeholder="Nhập tên Mã Khuyến Mãi" class="form-control name"
                                name="name" value="{{ $promotion->title ?? old('name') }}">
                            @error('name')
                                <p class="name-error alert-danger">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Code</label>
                            <input type="text" placeholder="Nhập code" class="form-control code" name="code"
                                value="{{ $promotion->code ? $promotion->code : old('code') }}">
                            @error('code')
                                <p class="code-error alert-danger">{{ $errors->first('code') }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Loại giảm giá</label>
                            <select name="type" class="form-select" id="type">
                                <option value="">Chọn loại giảm giá</option>
                                <option {{ $promotion->type == 1 ? 'selected' : '' }} value="1">Giá giá theo % giá trị
                                    đơn hàng</option>
                                <option {{ $promotion->type == 2 ? 'selected' : '' }} value="2">Giảm giá tiền</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="discount">Gía giảm</label>
                            <input type="text" class="form-control" name="discount" id="discount"
                                value="{{ $promotion->discount ?? old('discount') }}">
                            @error('discount')
                                <p class="discount-error alert-danger">{{ $errors->first('discount') }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_product">Sản phẩm</label>
                            <select class="id_product form-select" id="id_product[]" name="id_product[]"
                                multiple="multiple">
                                <option value="">Chưa có</option>
                                @if (count($product) > 0)
                                    @foreach ($product as $item)
                                        @if (isset($product_selected) && count($product_selected) > 0)
                                            @foreach ($product_selected as $p_selected)
                                                <option
                                                    {{ $item->id_product == $p_selected->id_product ? 'selected' : '' }}
                                                    value="{{ $item->id_product }}">{{ $item->name_product }}</option>
                                            @endforeach
                                        @else
                                            <option value="{{ $item->id_product }}">{{ $item->name_product }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>

                        </div>



                    </div>
                    <div class="form-right">
                        <div class="form-group">
                            <input {{ $promotion->status == 0 ? 'checked' : '' }} type="radio" name="status"
                                id="status" class="status" value="0" style="width:auto;"><label
                                for="">Ẩn</label>
                            <input {{ $promotion->status == 1 ? 'checked' : '' }} type="radio" name="status"
                                id="status" class="status" value="1" style="width:auto;"> <label
                                for="">Hiện</label>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <label for="date-start">Ngày bắt đầu</label>
                                <input type="datetime-local" class="form-control" name="date_start" id="date-start"
                                    value="{{ $promotion->from ?? old('date_start') }}">
                                <p class="date-start-error text text-danger">Chưa chọn ngày bắt đầu</p>
                                @error('date_start')
                                    <p class="date-start-error alert-danger">{{ $errors->first('date_start') }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label for="date-start">Ngày kết thúc</label>
                                <input type="datetime-local" class="form-control" name="date_end" id="date-end"
                                    value="{{ $promotion->to ?? old('date_end') }}">
                                <p class="date-start-error text text-danger">Chưa chọn ngày kết thúc</p>
                                @error('date_end')
                                    <p class="date-start-error alert-danger">{{ $errors->first('date_end') }}</p>
                                @enderror
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
