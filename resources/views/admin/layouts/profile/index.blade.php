@extends('admin.index')
@section('articles')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            {{-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav> --}}
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            @if (Auth::user()->link_img)
                                <img src="{{ asset(Auth::user()->link_img) }}" alt="Profile">
                            @else
                                <img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png"
                                    alt="Profile">
                            @endif
                            <h2>{{ Auth::user()->name }}</h2>
                            <div class=" d-flex">
                                @foreach (Auth::user()->roles as $role)
                                    <span  class="badge badge-success m-1">
                                        {{ $role->name }}
                                    </span>
                                @endforeach
                            </div>
                            {{-- <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview"
                                        aria-selected="false" role="tab" fdprocessedid="hcbw6"
                                        tabindex="-1">{{ __('profile.overview') }}</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit"
                                        aria-selected="true" role="tab">{{ __('profile.edit') }}</button>
                                </li>

                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings"
                                        aria-selected="false" role="tab" tabindex="-1">Settings</button>
                                </li> --}}

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password"
                                        aria-selected="false" role="tab"
                                        tabindex="-1">{{ __('profile.changePasswordTitle') }}</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade profile-overview" id="profile-overview" role="tabpanel">

                                    <h5 class="card-title">{{ __('profile.productDetail') }}</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Company</div>
                                        <div class="col-lg-9 col-md-8">Cell phones</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">{{ __('profile.role') }}</div>
                                        <div class="col-lg-9 col-md-8">
                                            @foreach (Auth::user()->roles as $role)
                                                <span class="badge badge-success">
                                                    {{ $role->name }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">{{ __('profile.phone') }}</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">{{ __('profile.email') }}</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                    </div>

                                </div>


                                <x-editProfileComponent></x-editProfileComponent>



                                <x-changePasswordProfile></x-changePasswordProfile>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection

@push('script-action')
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script> --}}
    <script>
        $(document).ready(function() {
            // Form Change Password
            $('#profile-change-password form').submit(function(e) {
                e.preventDefault();
                var newPassword = $('#newPassword').val();
                var reNewPassword = $('#renewPassword').val();
                var password = $('#currentPassword').val();
                var token = $('meta[name="api-token"]').attr('content');
                $('.text-danger').text('');
                $('.text-success').text('');
                $.ajax({
                    url: '{{ route('admin.profile.updatePassword') }}',
                    type: 'PUT',
                    data: {
                        password: password,
                        newpassword: newPassword,
                        renewpassword: reNewPassword,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response.errors);
                        if (response.errors) {
                            $.each(response.errors, function(key, value) {
                                // Hiện thị lỗi
                                console.log(key + ": " + value);

                                $('.' + key).text(value);
                                $('.' + key).css('display', 'block');

                            });
                        } else {
                            console.log(response);
                            $('.text-success ').text(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            // Hiển thị lỗi
                            console.log(key + ": " + value);

                            $('.' + key).text(value[0]);
                            $('.' + key).css('display', 'block');

                        });
                    }
                })
            })
        })

        // Form Edit Profile
    </script>
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                // Lấy ảnh
                $('#upload-image').on('change', function(event) {

                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            $('#profile-edit  img').attr('src', e.target.result).show();
                        }
                        reader.readAsDataURL(file);
                    }
                });
                $('#profile-edit form').submit(function(e) {
                    e.preventDefault();
                    // alert(123);
                    var formData = new FormData();
                    var name = $('#profile-edit #fullName').val();
                    var phone = $('#profile-edit #Phone').val();
                    var email = $('#profile-edit #Email').val();
                    var file = $('#upload-image')[0].files[0];

                    formData.append('name', name);
                    formData.append('phone', phone);
                    formData.append('email', email);
                    formData.append('_method', 'PUT');
                    formData.append('file', file);

                    var token = $('meta[name="api-token"]').attr('content');
                    $('.text-danger').text('');
                    $('.text-success').text('');
                    $.ajaxSetup({
                        headers: {
                            'Authorization': 'Bearer ' + token,
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Accept': 'application/json'
                        }
                    });

                    $.ajax({
                        url: '{{ route('profile.auth.profile.editProfile') }}',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            console.log(response);

                        },
                        error: function(xhr, status, error) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                // Hiện thị lỗi
                                console.log(key + ": " + value);
                                console.log(
                                    '#profile-edit .text-danger.error-' +
                                    key);

                                $('#profile-edit .text-danger.error-' + key)
                                    .text(value[0]);
                                $('#profile-edit .text-danger.error-' + key)
                                    .css('display',
                                        'block');
                            });
                        }
                    })
                })
            })
        })
    </script>
@endpush
