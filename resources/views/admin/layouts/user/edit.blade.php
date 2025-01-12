@extends('admin.index')
@section('articles')
    <div id="main" class="main">
        <div class="list-table">
            <div class="wrap-container">
                <div class="container">
                    <form action="{{ route('admin.User.User.update', ['id' => $User->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png"
                                    alt="Profile" class="rounded-circle" width="240px" height="240px">
                            </div>
                            {{-- <div class="pb-2 text-center">
                                <label type="button" for="upload-image" class="btn btn-primary btn-sm"
                                    title="Upload new profile image"><i class="bi bi-upload"></i></label>
                                <input hidden type="file" name="image-avatar" id="upload-image" accept="image/*">
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                        class="bi bi-trash"></i></a>
                            </div> --}}

                        </div>
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input disabled type="text" name="fullName" id="" class="form-control"
                                placeholder="Nhập tên quyền" value={{ $User->name }}>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input disabled type="text" name="email" id="" class="form-control"
                                placeholder="Nhập email. vd:abc@gmail.com" value={{ $User->email }}>
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input disabled type="text" name="facebook" id="" class="form-control"
                                placeholder="Link Facebook">
                        </div>
                        <div class="form-group">
                            <label for="">Zalo</label>
                            <input disabled type="text" name="zalo" id="" class="form-control"
                                placeholder="Zalo">
                        </div>
                        <div class="form-group">
                            <label for="">Twitter</label>
                            <input disabled type="text" name="twitter" id="" class="form-control"
                                placeholder="Link Twitter">
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <select class="js-example-basic-multiple-1" name="role[]" id="" multiple="multiple">
                                @foreach ($role as $item)
                                    <option value="{{ $item->id }}" {{ $User->hasRole($item->id) ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Cấp Quyền</label>
                            <select class="js-example-basic-multiple-2" name="permission[]" multiple="multiple">
                                @foreach ($permission as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $User->permissions->contains('id', $item->id) ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                 
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
