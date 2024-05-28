@extends('admin.index')
@section('css')
    <style>
        .bootstrap-tagsinput input{
            border: unset !important;
            width: 100%;
        }
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #000;
            padding: 4px;
            border: 1px solid #cdcdcd;
            border-radius: 4px;
        }

        .bootstrap-tagsinput {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            display: inline-block;
            padding: 4px 6px;
            color: #555;
            vertical-align: middle;
            border-radius: 4px;
            max-width: 100%;
            line-height: unset !important;
            cursor: text;
            width: 100%;
            padding: 6px 8px;
        }
    </style>
@endsection
@section('articles')
    <div id="main" class="main">
        <div class="list-table">
            <div class="wrap-container">



                <div class="container">
                    <form action="{{ route('admin.roles.role.update', ['id' => $role->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <input type="text" name="role_name" id="" class="form-control" placeholder="Chức vụ"
                                value="{{ $role->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Cấp Quyền</label>
                            <select class="js-example-basic-single" name="permission[]" id="" multiple>
                                @foreach ($permission as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $role->hasPermissionTo($item) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Thêm quyền khác</label>
                            <input type="text" class="form-control" data-role="tagsinput" name="permissions_new">
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
            $('.js-example-basic-single').select2({

            });
        });
    </script>
@endpush
