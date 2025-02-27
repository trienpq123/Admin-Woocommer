@extends('admin.index')
@section('articles')
    <div id="main" class="main">
        <div class="list-table">
            <div class="wrap-container">
                <div class="container">
                    <form action="{{ route('admin.permisson.permisson.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Quyền</label>
                            <input type="text" name="permission" class="form-control" placeholder="Nhập tên quyền">
                        </div>
                        <div class="form-group">
                            <label for="">Vai trò</label>
                            <select class="js-example-basic-multiple" name="role[]" id="" multiple="multiple">
                                @foreach ($role as $item)
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
            $(".js-example-basic-multiple").select2({
                tags: "true",
                placeholder: {
                    id: "-1",
                    text: "Select an option",
                },
                allowClear: true,
                width: '100%',
                selectionCssClass: " p-1 border-[1px] rounded-md w-full border-gray-500/40",
                createTag: function(params) {
                    var term = $.trim(params.term);
                    if (term === '') {
                        return null;
                    }
                    return {
                        id: term,
                        text: term,
                        value: true // add additional parameters
                    }
                }
            });
        })
    </script>
@endpush
