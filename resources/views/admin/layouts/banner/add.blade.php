@extends('admin.index')
@section('articles')
    <div class="list-table">
        <div class="main" id="main">
            <div class="alert alert-primary alert-dismissible fade show alert-fixed" role="alert">
                A simple primary alert—check it out!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="pagetitle">
                <h1>banner</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item">banner</li>
                        <li class="breadcrumb-item active">Thêm banner mới</li>
                    </ol>
                </nav>
            </div>




            <form id="form-add" enctype="multipart/form-data" method="post">
                @csrf
                <div class="grid gap-16">

                    <div class="form-group">
                        <label for="">Tên ALT</label>
                        <input type="text" placeholder="Nhập tên ALT" class="form-control name" id="slug"
                            name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <p class="name-error alert-danger">{{ $errors->first('name') }}</p>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="">Thứ tự</label>
                        <input type="number" placeholder="Thứ tự hiển thị" class="form-control name" name="index"
                            value="{{ old('index') }}">
                        @if ($errors->has('index'))
                            <p class="index-error alert-danger">{{ $errors->first('index') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="image" id="" class="add-file" id="upload-file"
                            accept="image/*">
                        <p class="image-error text text-danger"></p>
                        <div id="show-image" style="display:flex;align-items:center;flex-wrap: wrap; gap:10px;">
                            {{-- RENDER IMAGE --> JAVASCRIPT -- Line 202 --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="status" id="status" class="status" value="0"
                            style="width:auto;"><label for="">Ẩn</label>
                        <input type="radio" name="status" checked id="status" class="status" value="1"
                            style="width:auto;"> <label for="">Hiện</label>
                    </div>

                </div>
                <button type="submit" class="btn btn-submit">Xác nhận</button>
            </form>
        </div>
    </div>
@endsection

@push('script-action')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".add-file").change(function(event) {
                console.log(event.target.files);
                if (event.target.files && event.target.files.length > 0) {
                    let show_image = $('#show-image');
                    let image = '';
                    for (let i = 0; i < event.target.files.length; i++) {
                        console.log(event.target.files);
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            var imageURL = event.target.result;
                            console.log(imageURL);
                            image = ` <div class="form-group image-item" 
                                            style="width:120px;height:120px; padding: 8px;background-color:#d9e1ef;">
                                            <img src="${imageURL}" alt="" style="height:100%; object-fit:cover;"
                                          
                                        </div>`
                            show_image.html(image)
                        };
                        reader.readAsDataURL(event.target.files[i]);
                    }
                }
            });
        });
    </script>
@endpush
