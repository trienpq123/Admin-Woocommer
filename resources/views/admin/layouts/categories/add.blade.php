@extends('admin.index')
@section('css')
    <style>
        .bootstrap-tagsinput {
            width: 100%;
        }

        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #4154f1 !important;
            background-color: hsl(220, 100%, 98%);
            padding: 0.2rem;
            border-radius: 4px;
            width: 100%;
        }
    </style>
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
        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="infor-tab" data-bs-toggle="tab" data-bs-target="#bordered-infor"
                    type="button" role="tab" aria-controls="infor" aria-selected="false" tabindex="-1">Thông
                    tin</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="attr-tab" data-bs-toggle="tab" data-bs-target="#bordered-attr" type="button"
                    role="tab" aria-controls="attr" aria-selected="true">Thuộc tính</button>
            </li>

        </ul>
        <form action="{{ route('admin.category.postAddCategory') }}" id="form-add" enctype="multipart/form-data"
            method="post">
            @csrf
            <div class="tab-content" id="borderedTabContent">
                <div class="tab-pane fade  show active" id="bordered-infor" role="tabpanel" aria-labelledby="infor-tab"
                    tabindex="0">
                    <div class="grid grid-tempalte-colum-7-3 gap-16">
                        <div class="form-left">
                            <div class="form-group">
                                <label for="">Thêm danh mục</label>
                                <input type="text" placeholder="Nhập tên danh mục" class="form-control name"
                                    id="slug" onkeydown="ChangeToSlug()" name="name">
                                @if ($errors->has('name'))
                                    <p class="text alert-danger fs-8" style="font-size: 12px">{{ $errors->first('name') }}
                                    </p>
                                @endif

                                <label for="">Đường dẫn</label>
                                <input type="text" placeholder="Đường dẫn" class="form-control slug" id="convert_slug"
                                    name="slug">
                                @if ($errors->has('slug'))
                                    <p class="text alert-danger fs-8" style="font-size: 12px">{{ $errors->first('slug') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">URL muốn đến</label>
                                <input type="text" placeholder="URL: Https://www.example.com" class="form-control"
                                    name="url">
                                @if ($errors->has('url'))
                                    <span class="text alert-danger fs-8"
                                        style="font-size: 12px">{{ $errors->first('slug') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <textarea name="desc_short" class="desc_short form-control" id="desc_short" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">SEO</label>
                                <div class="form-group">
                                    <label for="">Tiêu Đề <span class="text-gray">(Nên để dưới 70 ký tự)</span>
                                    </label>
                                    <input type="text" name="meta_title" class="meta_title form-control" id="meta_title"
                                        cols="30" rows="10">
                                    <span class="text text-danger fs-8" style="font-size: 12px">Vượt quá 156 ký tự</span>
                                </div>
                                <div class="form-group">
                                    <label class="label">Keywords</label>
                                    <input type="text" name="meta_keywords" class="meta_keywords form-control"
                                        id="meta_keywords" cols="30" rows="10">
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả <span class="text-gray">(Nên để dưới 320 ký tự)</span>
                                    </label>
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
                                    <input type="radio" name="status" checked id="status" class="status"
                                        value="1" style="width:auto;"> <label for=""
                                        class="ms-1">Hiện</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Chọn danh mục cha</label>
                                <select class="js-example-disabled-results parent_category form-control"
                                    name="parent_category">
                                    <option value="">Danh mục cha</option>
                                    @foreach ($listCategory as $category)
                                        <option value="{{ $category->id_category }}"> {{ $category->name_category }}
                                        </option>
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
                                    accept="image/*">
                                <p class="image-error text text-danger"></p>
                                <div class="form-group" id="show-file"
                                    style="width:120px;height:120px; padding: 8px;background-color:#d9e1ef;">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Tags</label>
                                <input type="text" name="tags" data-role="tagsinput" class="form-control" />
                                <p class="text-gray text-break fs-6">Mỗi tags cách nhau bởi dấu phẩy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bordered-attr" role="tabpanel" aria-labelledby="attr-tab"
                    tabindex="0">

                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Chọn thuộc tính"
                                name="attr[id_attr]">
                                @if (count($attr) > 0)
                                    <option selected="">Chọn thuộc tính</option>
                                    @foreach ($attr as $item)
                                        <option value="{{ $item->id_attr }}">{{ $item->name }}</option>
                                    @endforeach
                                @endif

                            </select>
                            <label for="floatingSelect">Chọn thuộc tính</label>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="list-attr">
                                <div class="attr-item row d-flex fl-wrap align-items-center">
                                    <div class="col-lg-2 ">

                                        <input type="text" name="attr[option][1][name]" class="form-control "
                                            placeholder="Tên thuộc tính">

                                    </div>
                                    <div class="col-lg-8">

                                        <input type="text" name="attr[option][1][value]" class="form-control"
                                            placeholder="Giá trị thuộc tính" data-role="tagsinput">

                                    </div>
                                    <div class="col-lg-2 text-right">
                                        <div class="btn btn-danger delete-attr">Xoá</div>
                                    </div>
                                </div>

                            </div>
                            <div class="attr-action text-right mt-3 mb-1">
                                <button type="button" class="btn btn-submit btn-action-append attr">Thêm mới</button>
                            </div>
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
            $(".add-file").change(function(event) {
                console.log(event.target.files);
                if (event.target.files && event.target.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {

                        var imageURL = event.target.result;
                        console.log(imageURL);
                        $('#show-file').addClass('active');
                        $("#show-file img").attr("src", imageURL);
                    };
                    reader.readAsDataURL(event.target.files[0]);
                }
            });
            // Xử lý thuộc tính
            $('.btn.btn-submit.btn-action-append.attr').click(function() {
                let num_position_attr = $('.attr-item').length + 1;
                console.log(num_position_attr);
                let EAttr_element = `
                    <div class="attr-item row d-flex fl-wrap align-items-center">
                        <div class="col-lg-2 ">
                  
                                <input type="text" name="attr[option][` + num_position_attr + `][name]" class="form-control"
                                placeholder="Tên thuộc tính">
                
                        </div>  
                        <div class="col-lg-8">
                          
                                <input type="text" name="attr[option][` + num_position_attr + `][value]" class="form-control"
                                placeholder="Giá trị thuộc tính" data-role="tagsinput">
                        </div>
                        
                        <div class="col-lg-2 text-right">
                            <div class="btn btn-danger delete-attr">Xoá</div>
                        </div>
                    `;

                $('.list-attr').append(EAttr_element);
                $('input[data-role=tagsinput]').tagsinput({
                    confirmKeys: [13, 188, 'Enter']
                });
            })

            $('body').on('click', '.delete-attr', function() {
                $(this).parents('.attr-item').remove();
            })

        });
    </script>
@endpush
