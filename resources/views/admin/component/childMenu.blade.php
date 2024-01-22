<ol class="dd-list">
    @foreach ($menu as $item)
        <li class="dd-item" data-id="{{ $item->id_menu }}" data-position="{{$item->position}}" data-title="{{$item->title}}" data-parent="{{$item->parent_menu}}">

            <div class="dd-handle">{{ $item->title }}</div>
            <div class="type-page"><span>Page</span></div>
            <button data-action="expand" type="button"style="display: none;">Expand</button>
            <div class="actions">
                <span class="drop-down"><i class=" ri-arrow-down-s-line"></i></span>
            </div>
            <div class="form-show">
                <button type="button" class="btn btn-outline-danger text-right m-2">Xoá bỏ</button>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" id="url" name="url" placeholder="#" value="{{ $item->url }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Nhãn Đều Hướng</label>
                        <input type="text" id="title" name="title" placeholder="Tiêu đề"
                            value="{{ $item->title }}">
                    </div>
                    <input type="text" name="id_menu" value="{{ $item->id_menu }}" hidden>
                    <div class="form-group">
                        <button type="submit" name="updateMenuForm" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-outline-danger">Huỷ</button>
                    </div>
                </form>
            </div>
            @if ($item->chirendMenu->count() > 0)
                <x-childMenu :menu="$item->chirendMenu" />
            @endif

        </li>
    @endforeach
</ol>
