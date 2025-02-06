@extends('admin.index')
@section('articles')
    <div class="list-table">
        <div class="main" id="main">
            <div class="alert alert-primary alert-dismissible fade show alert-fixed" role="alert">
                A simple primary alert—check it out!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="pagetitle">
                <h1>Sản phẩm</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item">Sản phẩm</li>
                        <li class="breadcrumb-item active">
                            {{ $product && $product->name_product ? $product->name_product : '' }}</li>
                    </ol>
                </nav>
            </div>




            <form id="form-add" enctype="multipart/form-data" method="post">
                @csrf
                <div class="grid grid-tempalte-colum-7-3 gap-16">
                    <div class="form-left">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" placeholder="Nhập tên Sản phẩm" class="form-control name" id="slug"
                                onchange="ChangeToSlug()" name="name"
                                value="{{ $product->name_product ? $product->name_product : old('name') }}">
                            @if ($errors->has('name'))
                                <p class="name-error alert-danger">{{ $errors->first('name') }}</p>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" placeholder="Nhập tên Sản phẩm" class="form-control slug"
                                id="convert_slug" name="slug"
                                value="{{ $product->slug ? $product->slug : old('slug') }}">
                            @if ($errors->has('slug'))
                                <span class="text alert-danger fs-6"
                                    style="font-size: 12px">{{ $errors->first('slug') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Mã sản phẩm (SKU)</label>
                            <input type="text" placeholder="Nhập tên Sản phẩm" class="form-control product_sku"
                                id="product_sku" name="product_sku"
                                value="{{ $product->product_SKU ? $product->product_SKU : old('product_sku') }}">

                        </div>
                        <div class="form-group">
                            <label for="parent_category">Danh mục</label>
                            <select class="category form-select" id="parent_category" name="parent_category[]" multiple>
                                <option value="">Chưa có</option>
                                @if (count($listCategory) > 0)
                                    @foreach ($listCategory as $item)
                                        <option {{ $product->id_category == $item->id_category ? 'selected' : '' }}
                                            data-img="{{ $item->image_category }}" value={{ $item->id_category }}>
                                            {{ $item->name_category }}</option>
                                        @php
                                            $categories = $item->childrendCategory;
                                        @endphp
                                        @while (count($categories) > 0)
                                            @foreach ($categories as $child)
                                                <option value="{{ $child->id_category }}"
                                                    {{ $product->id_category == $child->id_category ? 'selected' : '' }}>
                                                    ------{{ $child->name_category }}</option>
                                            @endforeach
                                            @php
                                                $categories = $categories->flatMap->childrendCategory;
                                            @endphp
                                        @endwhile
                                    @endforeach
                                @endif

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="desc_short" class="desc_short" id="desc_short" cols="30" rows="10">{{ $product->p_desc_short ? $product->p_desc_short : old('desc_short') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="desc" class="desc" id="desc" cols="30" rows="10">{{ $product->p_desc ? $product->p_desc : old('desc') }}</textarea>
                        </div>

                        <div class="form-group">
                            <div class="flex align-items-center justify-content-space-betweent">
                                <label for="">Thêm thuộc tính</label>
                                <button type="button" class="btn btn-modal btn-primary ms-2" data-bs-toggle="modal"
                                    data-bs-target="#attribute">Thêm thuộc tính</button>
                            </div>
                            <table class="table">
                                <thead>
                                    <th>Tên thuộc tính</th>
                                </thead>
                                <tbody>
                                    @foreach ($product->attribute as $key => $p_variants)
                                        <tr>
                                            <td class="d-flex gap-10">
                                                <div class="type-attr me-2 col-lg-3">
                                                    <select name="attr[{{ $key }}][name]"
                                                        class="select_type form-select">
                                                        <option value="0">Chưa chọn</option>
                                                        @foreach ($listAttr as $count => $item)
                                                            <option
                                                                {{ $p_variants['name'] == $item->id_attr ? 'selected' : '' }}
                                                                value="{{ $item->id_attr }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="value-attr col-lg-7">
                                                    <input type="text" placeholder="Giá trị"
                                                        class="add-option form-control">
                                                    <div class="container-option">
                                                        @if (array_key_exists('title', $p_variants) && count($p_variants['title']) > 0)
                                                            @foreach ($p_variants['title'] as $p_option)
                                                                <div class="badge-2" id="btn-1">
                                                                    {{ $p_option }}<span class="close"
                                                                        data-value="{{ $p_option }}"
                                                                        data-id="btn-1">x</span>
                                                                </div>
                                                                <input hidden="" type="text"
                                                                    name="attr[{{ $key }}][title][]"
                                                                    value=" {{ $p_option }} ">
                                                            @endforeach
                                                        @endif
                                                        @php
                                                            // dd($p_variants['title']);
                                                        @endphp

                                                    </div>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot class="t-foot">
                                    <tr>
                                        <td colspan="3">
                                            <button type="button" class="btn btn-create">Thêm thuộc tính</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="form-group table-price">
                            <label for="">Chỉnh sửa bảng giá</label>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Mã sản phẩm</th>
                                        @foreach ($product->product_variants as $item)
                                            <th>{{ $item->attribute->name }}</th>
                                        @endforeach
                                        <th>Giá</th>
                                        <th>Giá giảm</th>
                                        <th>Hàng tồn kho</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (isset($product->variants) && count($product->variants) > 0)
                                        @foreach ($product->variants as $key => $variants)
                                            @php
                                                $modifer_class = '';
                                                if (is_array($variants['title'])) {
                                                    foreach ($variants['title'] as $value) {
                                                        if ($key >= 1) {
                                                            $modifer_class = $modifer_class . '-' . $value;
                                                        } else {
                                                            $modifer_class = $modifer_class . $value;
                                                        }
                                                    }
                                                } else {
                                                    $modifer_class = $variants['title'];
                                                }
                                            @endphp

                                            <tr class="td-variant-{{ $modifer_class }}">
                                                <td> <input type="checkbox">
                                                </td>

                                                @if (is_array($variants['title']))
                                                    @foreach ($variants['title'] as $value)
                                                        <td class="{{ $value }}">
                                                            {{ $value }}
                                                            <input type="text"
                                                                name="product[variants][{{ $key }}][title][]"
                                                                value="{{ $value }}">
                                                        </td>
                                                    @endforeach
                                                @else
                                                    <td class="{{ $variants['title'] }}">t
                                                        {{-- {{ $variants['title'] }} --}}
                                                        <input type="text" name="product[variants][][title][]"
                                                            value="{{ $variants['title'] }}">
                                                    </td>
                                                @endif


                                                <td>
                                                    <input type="number"
                                                        name="product[variants][{{ $key }}][price]"
                                                        value="{{ $variants['price'] }}" class="product_price">
                                                </td>
                                                <td>
                                                    <input type="number"
                                                        name="product[variants][{{ $key }}][price_old]"
                                                        value="{{ $variants['price_old'] }}" class="product_price_old">
                                                </td>
                                                <td>
                                                    <input type="number" value="{{ $variants['stock'] }}"
                                                        name="product[variants][{{ $key++ }}][stock]"
                                                        class="product_stock">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-right">
                        <div class="form-group">
                            <input type="radio" name="status" id="status" class="status" value="0"
                                style="width:auto;"><label for="">Ẩn</label>
                            <input type="radio" name="status" checked id="status" class="status" value="1"
                                style="width:auto;"> <label for="">Hiện</label>
                        </div>
                        <div class="form-group">
                            <label for="">Chọn thương hiệu</label>
                            <select class=" brand form-control" id="brand" name="idBrand">
                                <option>Chưa chọn thương hiệu</option>
                                @if (count($getBrands) > 0)
                                    @foreach ($getBrands as $item)
                                        <option data-img="{{ $item->logo_brand }}" value={{ $item->id_brand }}>
                                            {{ $item->name_brand }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image[]" id="" class="add-file" id="upload-file"
                                accept="image/*" multiple>
                            <p class="image-error text text-danger"></p>
                            <div id="show-image" style="display:flex;align-items:center;flex-wrap: wrap; gap:10px;">
                                {{-- RENDER IMAGE --> JAVASCRIPT -- Line 202 --}}
                                @if ($product->images->count() > 0)
                                    @foreach ($product->images as $item)
                                        <div class="form-group image-item"
                                            style="width:120px;height:120px; padding: 8px;background-color:#d9e1ef;">
                                            <img src="{{ $item->link_img }}" alt=""
                                                style="height:100%; object-fit:cover;">

                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                        <div class="product-option">
                            <label for="">Chọn Thông số kỹ thuật</label>
                            <div class="product-option__inner"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Xác nhận</button>
            </form>
        </div>
    </div>
@endsection

@push('script-action')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        CKEDITOR.replace('desc', {
            filebrowserUploadUrl: "{{ route('admin.uploadFile', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('desc_short', {
            filebrowserUploadUrl: "{{ route('admin.uploadFile', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script>
        $(document).ready(function() {

            btn_option = 1;
            let option_value = [];
            addOptionAttribute()
            removeOption()

            function InnerTableAttr(optionValue = [], row = null) {

                const table = $('.table-price table tbody');
                const thead = $('.table-price table thead');
                const rows = row.parents('tbody').find('tr');
                let tr = '';
                let row_html = '';
                //  XỬ LÝ VARIANT IN RA TABLE
                if (rows.length > 0) {

                    row_html += `<tr><th>Mã sản phẩm</th>`
                    rows.each(function(index) {
                        let row_value = $(this).find('select option:selected').text();
                        row_html += `<th>${row_value} + ${index}</th>`;
                    })
                    row_html += `<th>Giá</th>
                                    <th>Giá giảm</th>
                                    <th>Hàng tồn kho</th>
                        </tr>
                        `
                }
                // XỬ LÝ IN THUỘC TÍNH - VARIANT
                console.log(optionValue)
                if (optionValue.length > 0) {
                    optionValue.forEach((item, indexs) => {

                        let modifer_class = '';
                        if (typeof item === "string") {
                            let b = item.replace(/[^a-zA-Z-0-9]/g, "");
                            modifer_class = 'td-variant-' + item;
                        } else {
                            item.forEach((a, count) => {
                                let b = a.replace(/[^a-zA-Z-0-9]/g, "");
                                if (count + 1 === item.length) {
                                    modifer_class = modifer_class + '-' + b;
                                } else {
                                    modifer_class = 'td-variant-' + b;
                                }
                            })
                        }
                        // if (!table.find(`.${modifer_class}`).length > 0) {
                        tr += `<tr class="${modifer_class}">
                                            <td> <input type="checkbox" /> 
                                            </td>
                                        `
                        if (typeof item === "string") {
                            let b = item.replace(/[^a-zA-Z-0-9]/g, "");
                            tr += ` <td class="${b}">
                                            ${item}
                                            <input type="text" name="product[variants][${indexs}][title]" value="${item}" />
                                        </td>`
                            console.log(indexs)
                        } else {
                            item.forEach((a, counters) => {
                                let b = a.replace(/[^a-zA-Z-0-9]/g, "");
                                tr += ` <td class="${b}">
                                                ${a}
                                                <input type="text" name="product[variants][${indexs}][title][]" value="${a}" />
                                            </td>`
                            })
                            console.log(indexs)
                        }
                        tr += `                        
                                <td>
                                    <input type="number" name="product[variants][${indexs}][price]" value="0" class="product_price" />
                                </td>
                                <td>
                                    <input type="number" name="product[variants][${indexs}][price_old]" value="0" class="product_price_old" />
                                </td>
                                <td>
                                    <input type="number" value="50" name="product[variants][${indexs}][stock]" class="product_stock" />
                                </td>
                            </tr>`
                        // }

                    })
                }
                table.html(tr);
                thead.html(row_html);
            }

            function addOptionAttribute() {
                let get_add_size = document.querySelector('.add-option');
                $(document).on('keydown', '.add-option', function(e) {
                    let i = 1;

                    if (e.keyCode === 13 || e.keyCode === 32 || e.keyCode === 44) {
                        let value = this.value;
                        let create_button = document.createElement("div");
                        let create_span = document.createElement("span");
                        create_span.setAttribute("class", 'close');
                        create_span.setAttribute("data-value", value);
                        create_span.textContent = "x";
                        setValuteSizeButton = create_button.setAttribute("class", `badge-2`)
                        setValuteSizeButton = create_button.setAttribute("id", `btn-${btn_option++}`)
                        let getValueSizeButton = create_button.getAttribute("id");
                        create_span.setAttribute("data-id", getValueSizeButton);
                        create_button.textContent = value
                        create_button.appendChild(create_span)
                        let container_option = $(this).parent().find('.container-option');
                        container_option.append(create_button);
                        let get_tr = $(this).parents('tr')
                        let indexTr = get_tr.index();
                        let input =
                            `<input hidden type="text" name="attr[${indexTr}][title][]" value="${value}" />`
                        container_option.append(input);
                        let getIdAttr = get_tr.find('.select_type').val();
                        let tr = $(this).parents('tbody').find('tr');
                        let attribute = [];
                        let variants = [];
                        tr.each(function() {
                            let attribute_selected = $(this).find('.select_type option:selected')
                                .val();
                            let attribute_options = $(this).find('.container-option').find(
                                '.badge-2');
                            let attr = [];
                            if (attribute_options.length > 0) {
                                for (let i = 0; i < attribute_options.length; i++) {
                                    let item = {};
                                    let data_value = $(attribute_options[i]).find('span.close')
                                        .attr("data-value");
                                    item['title'] = attribute_selected;
                                    item['label'] = [{
                                        title: data_value
                                    }];
                                    if (attribute.length > 0) {
                                        let check = false;
                                        for (let j = 0; j < attribute.length; j++) {
                                            if (attribute[j]['title'] == item['title']) {
                                                attribute[j]['label'] = attribute[j]['label']
                                                    .concat(item['label'])
                                                check = true
                                                break
                                            }
                                        }
                                        if (!check) {
                                            attribute.push(item)
                                        }
                                    } else {
                                        attribute.push(item)
                                    }

                                    // attr.push(item)
                                }
                            }

                            // attribute.push(attr);
                        })
                        console.log(attribute);

                        function modifier(data) {
                            return data.map(a => a.label.map(b => b.title));
                        }
                        // reducer - to convert the data into desired format
                        function reducer(data) {
                            return data.reduce((a, b) => a.reduce((r, v) => r.concat(b.map(w => [].concat(v,
                                w))), []))
                        }
                        // output - resultant data
                        output = reducer(modifier(attribute))
                        console.log(output)
                        InnerTableAttr(output, tr)
                        this.value = "";

                    }

                    // console.log(attr)

                })

            }

            function removeOption() {
                $(document).on('click', '.badge-2 span.close', function() {
                    let value = $(this).attr('data-value');
                    value = value.replace(/[^a-zA-Z-0-9]/g, "")
                    console.log(value.length);
                    $(`.${value}`).html('');
                    $(this).parent().remove();
                })
            }

            $(".add-file").change(function(event) {
                console.log(event.target.files);
                if (event.target.files && event.target.files.length > 0) {
                    let show_image = $('#show-image');
                    let image = '';
                    for (let i = 0; i < event.target.files.length; i++) {
                        console.log(event.target.files);
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            var imageURL = event.target.result;
                            console.log(imageURL);
                            image = ` <div class="form-group image-item" 
                                            style="width:120px;height:120px; padding: 8px;background-color:#d9e1ef;">
                                            <img src="${imageURL}" alt="" style="height:100%; object-fit:cover;"
                                          
                                        </div>`
                            show_image.append(image)
                        };
                        reader.readAsDataURL(event.target.files[i]);
                    }
                }
            });
            // SELECT 2
            $('.category').select2({
                templateSelection: formatState
            });
            // Element Show Brand
            function formatState(state) {
                console.log(state.element.attributes[0].value);
                if (!state.id) {
                    return state.text;
                }

                var baseUrl = state.element.attributes[0].value;
                var $state = $(
                    '<span><img class="img-flag" /> <span></span></span>'
                );

                // Use .text() instead of HTML string concatenation to avoid script injection issues
                $state.find("span").text(state.text);
                $state.find("img").attr("src", baseUrl);

                return $state;
            };
            $('#brand').select2({
                templateSelection: formatState
            });
            $('.category').change(function() {
                let value = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.category.getChildCategory') }}",
                    data: {
                        id: value
                    },
                    success: (res) => {
                        if (res.status == 200) {
                            console.log(res.data)
                            filter = '';
                            res.data.forEach(function(item, index) {
                                let options = item.filter_category_option

                                if (options.length > 0) {
                                    console.log(options)
                                    options.forEach(function(option, counter) {
                                        filter += `<div class="form-group">
                                                    <label>${option.name}</label>
                                                    <input type="text" hidden name="product[filters][${counter}][id_filter_category_option]" value="${option.id_filter_category_option}" />
                                       `
                                        // CHƯA TÁCH MẢNG

                                        filter +=
                                            `<input type="text" class="form-control filter-${counter}" name="product[filters][${counter}][value]" value="${option.value}"  data-role="tagsinput"/>`
                                        filter += `</div>`
                                        $('input[data-role=tagsinput].filter-' +
                                            counter).tagsinput();
                                    })
                                } else {
                                    filter = '';
                                }

                            })
                            $('.product-option__inner').html(filter)

                        }
                    },
                    error: function() {
                        let filter = '';
                        $('.product-option__inner').html(filter)
                        console.log('ERROR MESSAGE')
                    }

                })

            })
        });
    </script>

    {{-- 1.1.2024 --}}
    <script>
        $(document).ready(function() {

            $('.btn.btn-create').click(function(e) {
                e.preventDefault();
                let html = '';
                $.ajax({
                    type: "get",
                    url: "{{ route('admin.attr.apiListAttr') }}",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: (res) => {
                        let attr = res.data;
                        let tr = $(this).parent().parent().parent().parent().find('tbody tr');
                        if (tr.length == attr.length) {
                            $(this).attr('disabled', true)
                        } else {
                            $(this).attr('disabled', false);
                        }
                        for (let i = 0; i < tr.length; i++) {
                            let selected_type = tr[i].querySelector('.select_type').value;

                            html = `<tr>
                                        <td class="d-flex gap-10">
                                            <div class="type-attr me-2 col-lg-3">
                                                <select name="attr[${i+1}][name]" class="select_type form-select">
                                                    <option value="0">Chưa chọn</option>
                                            `
                            for (let index = 0; index < attr.length; index++) {
                                const element = attr[index];

                                if (selected_type == element.id_attr) {
                                    html +=
                                        `<option disabled value="${element.id_attr}">${element.name}</option>`
                                } else {

                                    html +=
                                        `<option  value="${element.id_attr}">${element.name}</option>`
                                }
                            }
                            html += `
                                                </select>
                                            </div>
                                            <div class="value-attr col-lg-7">
                                                <input type="text" placeholder="Giá trị"
                                                    class="add-option form-control">
                                                <div class="container-option">
                                                    {{-- <button class="badge-2" data-id="16gb">16GB <span class="close">x</span></button> --}}

                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="btn btn-danger" onclick="removeAttr(this)"><span><i class="ri-delete-bin-2-fill"></i></span></div>
                                            </div>
                                            
                                        </td>

                                    </tr>`;
                        }
                        $(this).parent().parent().parent().parent().find('tbody').append(html);
                        $('.table-price table tbody').html('');
                    }
                })
            })
        })

        function removeAttr(tr) {
            console.log($(tr).parent().parent().parent().parent().find('tr').length)
            $(tr).parents('tr').remove()
            $.ajax({
                type: "get",
                url: "{{ route('admin.attr.apiListAttr') }}",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: (res) => {
                    console.log(res.data)
                    let attr = res.data;
                    let c_tr = $(tr).parent().parent().parent();
                    console.log(c_tr)
                    if (c_tr.length == attr.length) {
                        $('.btn.btn-create').attr('disabled', true);
                    } else {
                        $('.btn.btn-create').attr('disabled', false)
                    }
                }
            })

        }
    </script>
@endpush
