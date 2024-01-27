<ul class="sortable list-unstyled">

    @if (count($menu) > 0)
        @foreach ($menu as $m)
            <li style="position: relative" id="sortableId" data-position="{{ $m->position }}"
                data-id-menu="{{ $m->id_menu }}" data-parent-menu="{{ $m->parent_menu }}" data-title="{{ $m->title }}" data-url="{{ $m->url }}">
                <div class="block block-title">{{ $m->title }}</div>
                <div class="type-page"><span>{{ $m->type }}</span></div>
                <div class="actions">
                    <span class="drop-down"><i class=" ri-arrow-down-s-line"></i></span>
                </div>
                <div class="form-show">
                    <button type="button" class="btn btn-outline-danger text-right m-2">Xoá bỏ</button>
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" id="url" name="url" placeholder="#"
                                value="{{ $m->url }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Nhãn Đều Hướng</label>
                            <input type="text" id="title" name="title" placeholder="Tiêu đề"
                                value="{{ $m->title }}">
                        </div>
                        <input type="text" name="id_menu" value="{{ $m->id_menu }}" hidden>
                        <div class="form-group">
                            <button type="submit" name="updateMenuForm" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-outline-danger">Huỷ</button>
                        </div>
                    </form>
                </div>
                <x-childMenu :menu="$m->chirendMenu" />
            </li>
        @endforeach
    @endif
</ul>
