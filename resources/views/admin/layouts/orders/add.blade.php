@extends('admin.index')
@section('articles')
    <div id="main" class="main">
        <div class="pagetitle">
            <h1>Đơn hàng</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Thêm đơn hàng</li>
                </ol>
            </nav>
        </div>

        <form action="{{route('admin.order.orderAddStore')}}" method="post" id="form-add">
            <div class="grid grid-tempalte-colum-7-3 gap-16">
                <div class="form-left">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Họ</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class=" mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tên</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="last_name" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" name="email" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" mb-3">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="inputPhone" class="col-sm-2 col-form-label">Tỉnh</label>
                                <div class="col-sm-12">
                                    <select name="province" id="" class="form-select">
                                        <option value="">Chưa chọn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="inputPhone" class="col-sm-2 col-form-label">Quận/Huyện</label>
                                <div class="col-sm-12">
                                    <select name="district" id="" class="form-select">
                                        <option value="">Chưa chọn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="inputPhone" class="col-sm-2 col-form-label">Địa chỉ cụ thể</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-right">
                    <div class="form-group">
                        <label for="checkBoxOrder" class="col-form-label">Tình trạng đơn hàng</label>
                        <div class="col-sm-12 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="statusOrder" id="statusOrder1"
                                    value="0" checked="">
                                <label class="form-check-label" for="statusOrder1">
                                    Chưa giao hàng
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="statusOrder" id="statusOrder2"
                                    value="1">
                                <label class="form-check-label" for="statusOrder2">
                                    Đang giao hàng
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="statusOrder" id="statusOrder2"
                                    value="2">
                                <label class="form-check-label" for="statusOrder2">
                                    Đã nhận hàng
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class=" col-form-label">Chọn sản phẩm</label>
                        <select class="col-sm-12 form-select" name="product[name]" id="product">
                            <option value="">Chưa chọn sản phẩm</option>
                            @if ($products)
                                @foreach ($products as $item)
                                    @php
                                        $attributes = is_array($item->attribute) ? json_encode($item->attribute) : '[]';
                                        $variants = is_array($item->variants) ? json_encode($item->variants) : '[]';
                                    @endphp
                                    <option value="{{ $item->id_product }}" data-attribute="{{ $attributes }}"
                                        data-variants="{{ $variants }}">{{ $item->name_product }}</option>
                                @endforeach
                            @endif
                        </select>

                    </div>

                    

                </div>
            </div>
            <button type="submit" class="btn btn-submit">Xác nhận</button>
        </form>


    </div>
@endsection

@push('script-action')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // PROCESS SELECT PRODUCT
            $('select#product').change(function() {
                var formAdd = $('form#form-add .form-right');
                var selectedProduct = $(this).find('option:selected');
                var attributes = selectedProduct.data('attribute');
              
                let attributes_data = attributes[0].title
                let option = '';
                option += `
                      <div class="form-group">
                        <select class="col-sm-12 form-select" name="product[attributes]" id="attributes">
                                <option value="">Chọn thuộc tính</option>`
                attributes_data.forEach((element,index) => {
                    console.log(element,index);
                    option += `<option value="${index}">${element}</option>`
                })
                option += `</select>
                    </div>
                `;
                formAdd.append(option);
                // Update form
                // Cho render ra chọn màu sắch
                //...
            })

            $('body').on('change','#attributes',function() {
                var formAdd = $('form#form-add .form-right');
                var index = $(this).find('option:selected').val();
                var variants = $('select#product').find('option:selected').data('variants');
                
                console.log(variants)
                let option = '';
                option+= `
                <div class="form-group">
                        <label for="inputText" class=" col-form-label">Thông tin chi tiết sản phẩm</label>
                        <div class="row">
                            <div class="col-md-6 fs-6">Giá</div>
                            <div class="col-md-6"><span class="badge border-success border-1 text-success">${variants[index].price}</span></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Giá giảm</div>
                            <div class="col-md-6"><span class="badge border-success border-1 text-success">${variants[index].price_old}</span></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">Hàng tồn kho</div>
                            <div class="col-md-6"><span class="badge border-success border-1 text-success">${variants[index].stock}</span></div>
                        </div>
                    </div>
                `
                formAdd.append(option);

            }) 

            

        });
    </script>
@endpush
