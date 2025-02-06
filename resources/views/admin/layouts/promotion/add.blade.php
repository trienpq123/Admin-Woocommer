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
                        <li class="breadcrumb-item"><a href="{{ route('admin.promotion.index') }}">{{__('promotion.breadcrum.index')}}</a></li>
                        <li class="breadcrumb-item active">{{__('promotion.breadcrum.create')}}</li>
                    </ol>
                </nav>
            </div>
            <form id="form-add" action="{{ route('admin.promotion.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="grid grid-tempalte-colum-7-3 gap-16">
                    <div class="form-left">
                        <div class="form-group">
                            <label for="">{{__('promotion.name.title')}}</label>
                            <input type="text" placeholder="{{__('promotion.name.placeholder')}}" class="form-control name"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <p class="name-error alert-danger">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">{{__('promotion.code.title')}}</label>
                            <input type="text" placeholder="{{__('promotion.code.placeholder')}}" class="form-control code" name="code"
                                value="{{ old('code') }}">
                        </div>
                        <div class="form-group">
                            <label for="type">{{__('promotion.select.title')}}</label>
                            <select name="type" class="form-select" id="type" value="{{old('type')}}">
                                <option value="">{{__('promotion.select.placeholder')}}</option>
                                <option value="1">{{__('promotion.select.option.1')}}</option>
                                <option value="2">{{__('promotion.select.option.2')}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="discount">{{__('promotion.discount.title')}}</label>
                            <input type="text" class="form-control CurrencyInput" name="discount" id="discount" placeholder="{{__('promotion.discount.placeholder')}}" value="{{ old('discount') }}">
                            @error('discount')
                                <p class="discount-error alert-danger">{{ $errors->first('discount') }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="id_product">{{__('promotion.category.title')}}</label>
                            <select class="id_product form-select" id="id_product[]" name="id_product[]"
                                multiple="multiple" value="{{old('id_product[]')}}">
                                <option value="">{{__('promotion.category.placeholder')}}</option>
                                @if (count($product) > 0)
                                    @foreach ($product as $item)
                                        <option value="{{ $item->id_product }}">{{ $item->name_product }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('id_product')
                                <p class="id_product-error alert-danger">{{ $errors->first('id_product') }}</p>
                            @enderror

                        </div>
                    </div>
                    <div class="form-right">
                        <div class="form-group">
                            <input type="radio" name="status" id="status" class="status" value="{{old('status') ?? 0}}"
                                style="width:auto;"><label for="">{{__('promotion.status.hide')}}</label>
                            <input type="radio" name="status" checked id="status" class="status" value="{{old('status') ?? 1}}"
                                style="width:auto;" > <label for="">{{__('promotion.status.show')}}</label>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <label for="date-start">{{__('promotion.date_start.title')}}</label>
                                <input type="datetime-local" class="form-control" name="date_start" id="date-start" value="{{old('date_start')}}">
                                <p class="date-start-error text text-danger">{{__('promotion.date_start.placeholder')}}</p>
                                @error('date_start')
                                    <p class="date-start-error alert-danger">{{ $errors->first('date_start') }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label for="date-start">{{__('promotion.date_end.titßle')}}</label>
                                <input type="datetime-local" class="form-control" name="date_end" id="date-end" {{old('date_end')}}>
                                <p class="date-end-error text text-danger">{{__('promotion.date_end.placeholder')}}</p>
                                @error('date_end')
                                    <p class="date-end-error alert-danger">{{ $errors->first('date_end') }}</p>
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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            let a = $('.id_product.form-select').select2();


            // $('#type.form-select').change(function(){

            // })
        });
        // Convert Number Pricing
        // $('input.CurrencyInput').on('blur', function() {
        //     const value = this.value.replace(/,/g, '');
        //     this.value = parseFloat(value).toLocaleString('vi', {
        //         style: 'currency',
        //         currency: 'VND',
        //         maximumFractionDigits: 0,
        //         minimumFractionDigits: 0,

        //     });
        // });
    </script>
@endpush
