@extends('admin.index')
@section('css')

@endsection
@section('articles')
    <div id="main" class="main">
        <div class="pagetitle">
            <h1>Cấu hình hệ thống</h1>
     
        </div>
        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="infor-tab" data-bs-toggle="tab" data-bs-target="#bordered-infor"
                    type="button" role="tab" aria-controls="infor" aria-selected="false" tabindex="-1">Website</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="attr-tab" data-bs-toggle="tab" data-bs-target="#bordered-attr" type="button"
                    role="tab" aria-controls="attr" aria-selected="true">Nội dung khác</button>
            </li>

        </ul>
        <form action="" id="form-add" enctype="multipart/form-data"
            method="post">
            @csrf
            <div class="tab-content" id="borderedTabContent">
                <div class="tab-pane fade  show active" id="bordered-infor" role="tabpanel" aria-labelledby="infor-tab"
                    tabindex="0">
                    <div class="grid grid-tempalte-colum-7-3 gap-16">
                        <div class="form-left">
                            <div class="form-group">
                                <label for="">Tên website</label>
                                <input type="text" placeholder="Nhập tên website" class="form-control name"
                                    name="name_site" value="{{$system->name_site ? $system->name_site : ''}}">
                                @if ($errors->has('name'))
                                    <p class="text alert-danger fs-8" style="font-size: 12px">{{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Facebook / Messenger</label>
                                <input type="text" placeholder="URL: Https://www.facebook.com/abc" class="form-control"
                                    name="facebook" value="{{$system->facebook ? $system->facebook : ''}}">
                                @if ($errors->has('facebook'))
                                    <span class="text alert-danger fs-8"
                                        style="font-size: 12px">{{ $errors->first('facebook') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Zalo</label>
                                <input type="text" placeholder="URL: Https://www.zalo.me/0123456789" class="form-control"
                                    name="zalo" value="{{$system->zalo ? $system->zalo : ''}}">
                                @if ($errors->has('zalo'))
                                    <span class="text alert-danger fs-8"
                                        style="font-size: 12px">{{ $errors->first('zalo') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Instargam</label>
                                <input type="text" placeholder="URL: Https://www.instagram.com/user" class="form-control"
                                    name="instagram" value="{{$system->instagram ? $system->instagram : ''}}">
                                @if ($errors->has('instagram'))
                                    <span class="text alert-danger fs-8"
                                        style="font-size: 12px">{{ $errors->first('instagram') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Youtube</label>
                                <input type="text" placeholder="URL: Https://www.instagram.com/user" class="form-control"
                                    name="youtube" value="{{$system->youtube ? $system->youtube : ''}}">
                                @if ($errors->has('youtube'))
                                    <span class="text alert-danger fs-8"
                                        style="font-size: 12px">{{ $errors->first('youtube') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" placeholder="abc@gmail.com" class="form-control"
                                    name="email" value="{{$system->email ? $system->email : ''}}">
                                @if ($errors->has('email'))
                                    <span class="text alert-danger fs-8"
                                        style="font-size: 12px">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="number" placeholder="+84 123 456 789" class="form-control"
                                    name="phone" value="{{$system->hotline ? $system->hotline : ''}}">
                                @if ($errors->has('phone'))
                                    <span class="text alert-danger fs-8"
                                        style="font-size: 12px">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Cấu hình footer</label>
                                <textarea name="footer" class="form-control"  cols="30" rows="10">{{$system->footer ? $system->footer : ''}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">SEO</label>
                                <div class="form-group">
                                    <label for="">Tiêu Đề <span class="text-gray">(Nên để dưới 70 ký tự)</span>
                                    </label>
                                    <input type="text" name="meta_title" class="meta_title form-control" id="meta_title"
                                        value="{{$system->meta_title ? $system->meta_title : ''}}">
                                    <span class="text text-danger fs-8" style="font-size: 12px">Vượt quá 156 ký tự</span>
                                </div>
                                <div class="form-group">
                                    <label class="label">Keywords</label>
                                    <input type="text" name="meta_keywords" class="meta_keywords form-control"
                                        id="meta_keywords" value="{{$system->meta_keyword ? $system->meta_keyword : ''}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả <span class="text-gray">(Nên để dưới 320 ký tự)</span>
                                    </label>
                                    <input type="text" name="meta_description" class="meta_description form-control"
                                        id="meta_description" value="{{$system->meta_description ? $system->meta_description : ''}}">
                                </div>

                            </div>

                        </div>

                        <div class="form-right">

                            <div class="form-group">
                                <label for="">Logo</label>
                                <input type="file" name="logo" id="" class="add-file" id="upload-file"
                                    accept="image/*">
                                <p class="image-error text text-danger"></p>
                                <div class="form-group" id="show-file-logo"
                                    style="width:120px;height:120px; padding: 8px;background-color:#d9e1ef;">
                                    <img src="{{ $system->logo ? $system->logo : '' }}" alt="{{$system->name_site}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Favicon</label>
                                <input type="file" name="favicon" id="" class="add-file-favicon" id="upload-file-favicon"
                                    accept="image/*">
                                <p class="image-error text text-danger"></p>
                                <div class="form-group" id="show-file-favicon"
                                    style="width:120px;height:120px; padding: 8px;background-color:#d9e1ef;">
                                    <img src="{{ $system->favicon ? $system->favicon : '' }}" alt="">
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bordered-attr" role="tabpanel" aria-labelledby="attr-tab"
                    tabindex="0">

                    <div class="form-group">
                        <label for="">Chèn code trong head (Google Analytis,...)</label>
                        <input type="text"  class="form-control"
                            name="google_analytics" value="{{$system->google_analytics ? $system->google_analytics : ''}}">
                        @if ($errors->has('google_analytics'))
                            <span class="text alert-danger fs-8"
                                style="font-size: 12px">{{ $errors->first('google_analytics') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Chèn code trong body (Tag Maganger, pixels...)</label>
                        <input type="text"  class="form-control"
                            name="google_tag" value="{{$system->google_tag ? $system->google_tag : ''}}">
                        @if ($errors->has('google_tag'))
                            <span class="text alert-danger fs-8"
                                style="font-size: 12px">{{ $errors->first('google_tag') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Google Map</label>
                        <input type="text"  class="form-control"
                            name="google_map" value="{{$system->google_map ? $system->google_map : ''}}">
                        @if ($errors->has('google_map'))
                            <span class="text alert-danger fs-8"
                                style="font-size: 12px">{{ $errors->first('google_map') }}</span>
                        @endif
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
            $(".add-file-favicon").change(function(event) {
                console.log(event.target.files);
                if (event.target.files && event.target.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {

                        var imageURL = event.target.result;
                        console.log(imageURL);
                        $('#show-file-favicon').addClass('active');
                        $("#show-file-favicon img").attr("src", imageURL);
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
