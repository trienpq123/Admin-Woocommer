@extends('admin.index')
@section('articles')
    <div class="main" id="main">
        <form action="{{route('admin.rate.update',$rate->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input disabled type="text" class="form-control" value="Nguỹen6 Minh Triển" name="full_names">
            </div>
            <div class="form-group">
                <label for="">Đánh giá</label>
                <textarea disabled name="text" id="" cols="30" rows="10">Bình luận 1</textarea>
            </div>
            <div class="form-group">
                <label for="">Mức sao</label>
                <input type="number" name="rate" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nguồn</label>
                <input type="text" disabled class="form-control" value="https://www.example.com" name="url">
            </div>
            <div class="form-group">
                <label for="">Tình trạng</label>
                <select name="status" id="" class="form-control">
                    <option {{$rate->status == 0 ? 'selected' : ''}} value="0">Chưa phê duyệt</option>
                    <option {{$rate->status == 1 ? 'selected' : ''}} value="1">Phê duyệt</option>
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
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
@endpush
