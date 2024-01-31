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

        <form action="" method="post">
            <div class="grid grid-tempalte-colum-7-3 gap-16">
                <div class="form-left">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Họ</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class=" mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tên</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" mb-3">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control">
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
                                    <input type="text" class="form-control" name="street">
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
                                    value="1">
                                <label class="form-check-label" for="statusOrder2">
                                    Đã nhận hàng
                                </label>
                            </div>
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText" class=" col-form-label">Chọn sản phẩm</label>
                        <select class="col-sm-12 form-select" name="product" >
                            <option value="">Chưa chọn sản phẩm</option>
                            <option value="">Chưa chọn sản pshẩm</option>
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
@endpush
