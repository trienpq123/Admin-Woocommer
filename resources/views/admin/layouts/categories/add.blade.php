@extends('admin.index')
@section('css')
@endsection
@section('articles')
    <div id="main" class="main">
        <div class="pagetitle">
            <h1>Danh mục</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Danh mục</li>
                    <li class="breadcrumb-item active">Thêm danh mục</li>
                </ol>
            </nav>
        </div>

        <form action="{{route('admin.category.postAddCategory')}}" id="form-add" enctype="multipart/form-data" method="post">
            @csrf
            <div class="grid grid-tempalte-colum-7-3 gap-16">
                <div class="form-left">
                    <div class="form-group">
                        <label for="">Thêm danh mục</label>
                        <input type="text" placeholder="Nhập tên danh mục" class="form-control name" id="slug"
                            onkeydown="ChangeToSlug()" name="name">
                        <p class="name-error alert-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" placeholder="Nhập tên danh mục" class="form-control slug" id="convert_slug"
                            name="slug">
                        @if ($errors->has('slug'))
                            <span class="text alert-danger fs-6" style="font-size: 12px">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <textarea name="desc_short" class="desc_short" id="desc_short" cols="30" rows="10"></textarea>
                    </div>



                </div>

                <div class="form-right">
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div>
                            <input type="radio" name="status" id="status" class="status" value="0"
                                style="width:auto;"><label for="" class="ms-1">Ẩn</label>
                        </div>
                        <div>
                            <input type="radio" name="status" checked id="status" class="status" value="1"
                                style="width:auto;"> <label for="" class="ms-1" >Hiện</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Chọn danh mục cha</label>
                        <select class="js-example-basic-single parent_category form-control" name="parent_category">
                            <option>Danh mục cha</option>
                            <option value="0">A</option>
                            <option value="1">B</option>
                            <option value="1">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image" id="" class="add-file" id="upload-file"
                            accept="image/*" multiple>
                        <p class="image-error text text-danger"></p>
                        <div class="form-group" id="show-file" style="width:120px;height:120px; padding-top: 8px">
                            <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/t/_/t_m_18.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-submit">Xác nhận</button>

        </form>
    </div>
@endsection
