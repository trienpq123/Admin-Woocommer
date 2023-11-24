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

        <form action="{{ route('admin.category.postAddCategory') }}" id="form-add" enctype="multipart/form-data"
            method="post">
            @csrf
            <div class="grid grid-tempalte-colum-7-3 gap-16">
                <div class="form-left">
                    <div class="form-group">
                        <label for="">Thêm danh mục</label>
                        <input type="text" placeholder="Nhập tên danh mục" class="form-control name" id="slug"
                            onkeydown="ChangeToSlug()" name="name">
                        <p class="name-error alert-danger"></p>
                        <label for="">Đường dẫn</label>
                        <input type="text" placeholder="Đường dẫn" class="form-control slug" id="convert_slug"
                            name="slug">
                        @if ($errors->has('slug'))
                            <span class="text alert-danger fs-8" style="font-size: 12px">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">URL muốn đến</label>
                        <input type="text" placeholder="URL: Https://www.example.com" class="form-control"
                            name="url">
                        @if ($errors->has('url'))
                            <span class="text alert-danger fs-8" style="font-size: 12px">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <textarea name="desc_short" class="desc_short form-control" id="desc_short" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">SEO</label>
                        <div class="form-group">
                            <label for="">Tiêu Đề <span class="text-gray">(Nên để dưới 70 ký tự)</span> </label>
                            <input type="text" name="meta_title" class="meta_title form-control" id="meta_title"
                                cols="30" rows="10">
                            <span class="text text-danger fs-8" style="font-size: 12px">Vượt quá 156 ký tự</span>
                        </div>
                        <div class="form-group">
                            <label class="label">Keywords</label>
                            <input type="text" name="meta_keywords" class="meta_keywords form-control" id="meta_keywords"
                                cols="30" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả <span class="text-gray">(Nên để dưới 320 ký tự)</span> </label>
                            <input type="text" name="meta_description" class="meta_description form-control"
                                id="meta_description">
                        </div>

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
                                style="width:auto;"> <label for="" class="ms-1">Hiện</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Chọn danh mục cha</label>
                        <select class="js-example-disabled-results parent_category form-control" name="parent_category">
                            <option value="">Danh mục cha</option>
                            @foreach ($listCategory as $category)
                                <option value="{{ $category->id_category }}"> {{ $category->name_category }} </option>
                                {{-- @php
                                    $categories = $category->childrendCategory;
                                @endphp

                                @while (count($categories) > 0)
                                    @foreach ($categories as $child)
                                        <option value="{{ $child->id_category }}">------{{ $child->name_category }}</option>
                                    @endforeach

                                    @php
                                        $categories = $categories->flatMap->childrendCategory;
                                    @endphp
                                @endwhile --}}
                            @endforeach
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
@push('script-action')
    <script>
        $(document).ready(function() {
            // SELECT 2
            $('.js-example-disabled-results').select2();
            // Render Image khi upload

        });
    </script>
    
@endpush
