@extends('admin.index')
@section('articles')
    <div class="list-table">
        <div class="main" id="main">
            {{-- <div class="alert alert-primary alert-dismissible fade show alert-fixed" role="alert">
                A simple primary alert—check it out!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> --}}
            <div class="pagetitle">
                <h1>{{__('promotion.title')}}</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item">{{__('promotion.breadcrum.index')}}</li>
                        <li class="breadcrumb-item active">{{__('promotion.breadcrum.edit')}}</li>
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
                            <label for="">{{__('promotion.name.title')}}</label>
                            <input type="text" placeholder="{{__('promotion.name.placeholder')}}" class="form-control name"
                                name="name" value="{{ $promotion->title ?? old('name') }}">
                            @error('name')
                                <p class="name-error alert-danger">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">{{__('promotion.code.title')}}</label>
                            <input type="text" placeholder="{{__('promotion.code.placeholder')}}" class="form-control code" name="code"
                                value="{{ $promotion->code ? $promotion->code : old('code') }}">
                            @error('code')
                                <p class="code-error alert-danger">{{ $errors->first('code') }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">{{__('promotion.select.title')}}</label>
                            <select name="type" class="form-select" id="type">
                                <option value="">{{__('promotion.select.placeholder')}}</option>
                                <option {{ $promotion->type == 1 ? 'selected' : '' }} value="1">{{__('promotion.select.option.1')}}</option>
                                <option {{ $promotion->type == 2 ? 'selected' : '' }} value="2">{{__('promotion.select.option.2')}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="discount">{{__('promotion.discount.title')}}</label>
                            <input type="text" class="form-control" name="discount" id="discount"
                                value="{{ $promotion->discount ?? old('discount') }}">
                            @error('discount')
                                <p class="discount-error alert-danger">{{ $errors->first('discount') }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_product">{{__('promotion.category.title')}}</label>
                            <select class="id_product form-select" id="id_product[]" name="id_product[]"
                                multiple="multiple">
                                <option value="">{{__('promotion.category.placeholder')}}</option>
                                @if (count($product) > 0)
                                    @foreach ($product as $item)
                                        <option value="{{ $item->id_product }}" {{in_array($item->id_product, $getPromotionProduct) ? 'selected' : ''}} >{{ $item->name_product }}</option>
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
