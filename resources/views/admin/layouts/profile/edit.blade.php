@extends('admin.index')
@section('articles')
    <div class="main" id="main">
        <form action="{{route('admin.profile.edit',['id' => $user->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="avatar" style="position: relative;text-align: center;padding:8px;">
                <label for="file-avatar" style="position:relative">
                    <img src="https://scontent.fsgn2-7.fna.fbcdn.net/v/t39.30808-6/426539556_2122356894793063_8021389660936418681_n.jpg?stp=cp6_dst-jpg&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=5APFRr_2Ww0AX-HeCPE&_nc_ht=scontent.fsgn2-7.fna&oh=00_AfAQqofK_N_dPw70dZuivFUz-Bj_yqyHLvbXokiAmz8lxQ&oe=65FDA276"
                        alt="" width="140" height="140" style="border-radius: 50%">
                    <div class="btn btn-primary btn-upload" style="position: absolute;bottom: 0;right: 0;padding:4px 8px;background:#333;border:unset;border-radius:100px">
                        <i class="fa fa-upload"></i>
                    </div>
                </label>
                <input hidden type="file" name="file-avatar" id="file-avatar">
            </div>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input disabled type="text" class="form-control" value="{{$user->name}}" name="full_name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input disabled type="text" class="form-control" value="{{$user->email}}" name="email">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text"  class="form-control" value="{{$user->phone}}" name="url">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text"  class="form-control" value="{{$user->address}}" name="url">
            </div>
            <div class="form-group">
                <label for="">Gioi tinh</label>
                <select name="gender" id="" class="form-control">
                    <option value="1">Nam</option>
                    <option value="0">Nu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ngày sinh</label>
                <input type="date"  class="form-control" value="{{$user->birthday}}" name="url">
            </div>

            <div class="form-group">
                <label for="">Tình trạng</label>
                <select name="status" id="" class="form-control">
                    <option value="0">Chưa phê duyệt</option>
                    <option value="1">Phê duyệt</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-submit">
                    Xác nhận
                </button>
            </div>
        </form>
    </div>
@endsection

@push('script-action')
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
@endpush
