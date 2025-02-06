<div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
    <!-- Change Password Form -->
    <form>
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="currentPassword"
                class="col-md-4 col-lg-3 col-form-label">{{ __('profile.currentPassword') }}</label>
            <div class="col-md-8 col-lg-9">
                <input name="password" type="password" class="form-control"
                    id="currentPassword">
                <div>
                    <span class="text text-danger password"></span>
                </div>
            </div>
        </div>



        <div class="row mb-3">
            <label for="newPassword"
                class="col-md-4 col-lg-3 col-form-label">{{ __('profile.newPassword') }}</label>
            <div class="col-md-8 col-lg-9">
                <input name="newpassword" type="password" class="form-control"
                    id="newPassword">
                <div>
                    <span class="badge text text-danger"></span>
                </div>
            </div>
        </div>


        <div class="row mb-3">
            <label for="renewPassword"
                class="col-md-4 col-lg-3 col-form-label">{{ __('profile.reNewPassword') }}</label>
            <div class="col-md-8 col-lg-9">
                <input name="renewpassword" type="password" class="form-control"
                    id="renewPassword">
                <div>
                    <span class="text text-danger renewpassword"></span>
                </div>
            </div>
        </div>



        <div class="">
            <button type="submit"
                class="btn btn-primary">{{ __('basic.save') }}</button>
            <span class="text text-success fs-small badge"></span>
        </div>
    </form><!-- End Change Password Form -->

</div>