<div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit" role="tabpanel">
    <!-- Profile Edit Form -->
    <form enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">{{ __('profile.profileImage') }}</label>
            <div class="col-md-8 col-lg-9">
                @if (Auth::user()->link_img)
                    <img src="{{ asset(Auth::user()->link_img) }}" alt="Profile">
                @else
                    <img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png"
                        alt="Profile">
                @endif
                <div class="pt-2">
                    <label for="upload-image" class="btn btn-primary btn-sm" title="Upload new profile image"><i
                            class="bi bi-upload"></i></label>
                    <input hidden type="file" name="image-avatar" id="upload-image" accept="image/*">

                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">{{ __('profile.fullName') }}</label>
            <div class="col-md-8 col-lg-9">
                <input name="fullName" type="text" class="form-control" id="fullName"
                    value="{{ Auth::user()->name }}">
                <div>
                    <span class=" text text-danger error-name">Lỗi</span>
                </div>
            </div>
        </div>


        <div class="row mb-3">
            <label for="Job" class="col-md-4 col-lg-3 col-form-label">{{ __('profile.role') }}</label>
            <div class="col-md-8 col-lg-9">
                @foreach (Auth::user()->roles as $role)
                    <span class="badge badge-success">
                        {{ $role->name }}
                    </span>
                @endforeach

            </div>
        </div>



        <div class="row mb-3">
            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">{{ __('profile.phone') }}</label>
            <div class="col-md-8 col-lg-9">
                <input name="phone" type="text" class="form-control" id="Phone"
                    value="{{ Auth::user()->phone }}">
                <div>
                    <span class=" text text-danger error-phone">Lỗi</span>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Email" class="col-md-4 col-lg-3 col-form-label">{{ __('profile.email') }}</label>
            <div class="col-md-8 col-lg-9">
                <input disabled name="email" type="email" class="form-control" id="Email"
                    value="{{ Auth::user()->email }}">
            </div>
        </div>


        <div class="">
            <button type="submit" class="btn btn-primary">{{ __('basic.save') }}</button>
        </div>
    </form><!-- End Profile Edit Form -->

</div>


