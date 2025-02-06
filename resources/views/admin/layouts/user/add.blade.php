@extends('admin.index')
@section('articles')
    <div class="main" id="main">
        <div class="list-table">
            <div class="wrap-container">



                <div class="container">
                    <form action="{{ route('admin.User.User.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png"
                                    alt="Profile" class="rounded-circle" width="240px" height="240px">
                            </div>
                            <div class="pb-2 text-center">
                                <label type="button" for="upload-image" class="btn btn-primary btn-sm"
                                    title="Upload new profile image"><i class="bi bi-upload"></i></label>
                                <input hidden type="file" name="image-avatar" id="upload-image" accept="image/*">
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                        class="bi bi-trash"></i></a>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.fullName') }}</label>
                            <input type="text" name="fullName" id="" class="form-control"
                                placeholder="Enter your {{ __('auth.fullName') }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.email') }}</label>
                            <input type="text" name="email" id="" class="form-control"
                                placeholder="enter your {{ __('auth.fullName') }}. vd:abc@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.phone') }}</label>
                            <input type="text" name="password" id="" class="form-control"
                                placeholder="Nhập {{ __('auth.phone') }}. vd: 0123456789">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.password') }}</label>
                            <input type="password" name="password" id="" class="form-control"
                                placeholder="Nhập mật khẩu: trên 8 ký tự">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.re_password') }}</label>
                            <input type="password" name="re_password" id="" class="form-control"
                                placeholder="{{ __('auth.re_password') }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.teams') }}</label>
                            <select  name="teams" id=""  class="form-control  form-select">
                                @foreach ($teams as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.role') }}</label>
                            <select class="js-example-basic-multiple-1" name="role[]" id="" multiple="multiple">
                                @foreach ($role as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">{{ __('auth.permission') }}</label>
                            <select class="js-example-basic-multiple-2" name="permission[]" id=""
                                multiple="multiple">
                                @foreach ($permission as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-submit">Xác nhận</button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>
@endsection

@push('script-action')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // SELECT 2
            $('.js-example-basic-multiple-1').select2();
            $('.js-example-basic-multiple-2').select2();
       
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#upload-image').on('change', function(event) {
               
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('.profile-card img').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
