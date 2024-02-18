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
                        <li class="breadcrumb-item active">{{$product && $product->name_product ? $product->name_product : ''}}</li>
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
                                onchange="ChangeToSlug()" name="name" value="{{ $product->name_product ? $product->name_product : old('name') }}">
                            @if ($errors->has('name'))
                                <p class="name-error alert-danger">{{ $errors->first('name') }}</p>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" placeholder="Nhập tên Sản phẩm" class="form-control slug"
                                id="convert_slug" name="slug" value="{{ $product->slug ? $product->slug : old('slug') }}">
                            @if ($errors->has('slug'))
                                <span class="text alert-danger fs-6"
                                    style="font-size: 12px">{{ $errors->first('slug') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Mã sản phẩm (SKU)</label>
                            <input type="text" placeholder="Nhập tên Sản phẩm" class="form-control product_sku"
                                id="product_sku" name="product_sku" value="{{ $product->product_SKU ? $product->product_SKU : old('product_sku') }}">

                        </div>
                        <div class="form-group">
                            <label for="parent_category">Danh mục</label>
                            <select class="category form-select" id="parent_category" name="parent_category[]" >
                                <option value="">Chưa có</option>
                                @if (count($listCategory) > 0)
                                    @foreach ($listCategory as $item)
                                        <option {{$product->id_category == $item->id_category ? 'selected' : ''}}  data-img="{{ $item->image_category }}" value={{ $item->id_category }}>
                                            {{ $item->name_category }}</option>
                                    @endforeach
                                @endif

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="desc_short"  class="desc_short" id="desc_short" cols="30" rows="10">{{ $product->p_desc_short ? $product->p_desc_short : old('desc_short')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="desc" class="desc" id="desc" cols="30" rows="10">{{ $product->p_desc ? $product->p_desc : old('desc')}}</textarea>
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
                                    <tr>
                                        <td class="d-flex gap-10">
                                            <div class="type-attr me-2 col-lg-3">
                                                <select name="attr[].name" class="select_type form-select">
                                                    <option value="0">Chưa chọn</option>
                                                    @foreach ($listAttr as $key => $item)
                                                        <option value="{{ $item->id_attr }}">{{ $item->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="value-attr col-lg-7">
                                                <input type="text" placeholder="Giá trị" class="add-option form-control">
                                                <div class="container-option">
                                                    {{-- <button class="badge-2" data-id="16gb">16GB <span class="close">x</span></button> --}}

                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="btn btn-danger remove-attr" onclick="removeAttr(this)"><span><i
                                                            class="ri-delete-bin-2-fill"></i></span></div>
                                            </div>
                                        </td>

                                    </tr>
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

                                </thead>
                                <tbody>
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
                            <input type="file" name="image" id="" class="add-file" id="upload-file"
                                accept="image/*" multiple>
                            <p class="image-error text text-danger"></p>
                            <div id="show-image" style="display:flex;align-items:center;flex-wrap: wrap; gap:10px;">
                                {{-- RENDER IMAGE --> JAVASCRIPT -- Line 202 --}}
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
            // Render Image khi upload
            //   $('.category').select2({
            //     templateSelection: formatState
            // });
            btn_option = 1;
            let option_value = [];
            addOptionAttribute()
            removeOption()

            function InnerTableAttr(optionValue = [], row = null) {
                console.log(optionValue)
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

                    optionValue.forEach((item, index) => {

                        tr += `<tr>
                                        <td> <input type="checkbox" /> 
                                          
                                        </td>
                                    `

                        if (typeof item === "string") {
                            let b = item.replace(/[^a-zA-Z-0-9]/g, "");
                            tr += ` <td class="${b}">
                                        ${item}
                                        <input type="text" name="product[variants][${index}][title]" value="${item}" />
                                    </td>`
                        } else {
                            item.forEach((a) => {
                                let b = a.replace(/[^a-zA-Z-0-9]/g, "");
                                tr += ` <td class="${b}">
                                            ${a}
                                            <input type="text" name="product[variants][${index}][title][]" value="${a}" />
                                        </td>`
                            })
                        }


                        tr += `                        
                            <td>
                                <input type="number" name="product[variants][${index}][price]" value="100000" class="product_price" />
                            </td>
                            <td>
                                <input type="number" name="product[variants][${index}][price_old]" value="500000" class="product_price_old" />
                            </td>
                            <td>
                                <input type="number" value="50" name="product[variants][${index}][stock]" class="product_stock" />
                            </td>
                        </tr>`


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
            $('.js-example-basic-multiple-1').select2();
            $('.js-example-basic-multiple-2').select2();
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

                                        filter +=`<input type="text" class="form-control filter-${counter}" name="product[filters][${counter}][value]" value="${option.value}"  data-role="tagsinput"/>`
                                        filter += `</div>`
                                        $('input[data-role=tagsinput].filter-'+counter).tagsinput();
                                    })
                                }else{
                                    filter='';
                                }

                            })
                            $('.product-option__inner').html(filter)

                        }
                    },
                    error: function(){
                        let filter = '';
                        $('.product-option__inner').html(filter)
                        console.log('ERROR MESSAGE')
                    }
                    
                })

            })
            // $('.child-category-1').change(function() {
            //     let value = $(this).val();
            //     $.ajax({
            //         type: "GET",
            //         url: "{{ route('admin.category.getChildCategory') }}",
            //         data: {
            //             id: value
            //         },
            //         success: (res) => {
            //             console.log(res)
            //             let child_category = ''
            //             res.data.forEach(function(data, i) {
            //                 child_category +=
            //                     `<option value="${data.id_category}">${data.name_category}</option>`;
            //             });
            //             $('.child-category-2').html(child_category);
            //         }
            //     })

            // })



            // $('#form-add').submit(function(e) {
            //     e.preventDefault();
            //     let product_detail = [];
            //     $('.table-price table tbody tr').each(function(i, tr) {
            //         let SizeOfProductValue = '';
            //         let colorOfProductValue = '';
            //         let product_stock = '';
            //         let product_type_sku = '';
            //         let product_price = '';
            //         let product_price_old = '';
            //         let sizeOfProduct = tr.querySelector('.size')
            //         if (sizeOfProduct) {
            //             SizeOfProductValue = sizeOfProduct.value
            //         }

            //         let colorOfP = tr.querySelector('input[type=text].color')
            //         if (colorOfP) {
            //             colorOfProductValue = colorOfP.value;
            //         }
            //         let StockofProduct = tr.querySelector('input[type=number].product_stock')
            //         if (StockofProduct) {
            //             product_stock = StockofProduct.value
            //         }
            //         let TypeSkuOfProduct = tr.querySelector('input[type=text].product_type_sku');
            //         if (TypeSkuOfProduct) {
            //             product_type_sku = TypeSkuOfProduct.value;
            //         }
            //         let productPrice = tr.querySelector('input[type=number].product_price');
            //         if (productPrice) {
            //             product_price = productPrice.value;
            //         }
            //         let productPriceOld = tr.querySelector('input[type=number].product_price_old');
            //         if (productPriceOld) {
            //             product_price_old = productPriceOld.value;
            //         }

            //         let option = {
            //             SizeOfProductValue: SizeOfProductValue,
            //             colorOfProductValue: colorOfProductValue,
            //             product_stock: product_stock,
            //             product_type_sku: product_type_sku,
            //             product_price: product_price,
            //             product_price_old: product_price_old
            //         }
            //         product_detail.push(option)

            //     })

            //     let name_product = $('.form-control.name').val();
            //     let idBrand = [];
            //     $('.brand option:checked').each(function(i, item) {
            //         return idBrand.push(item.value)
            //     })
            //     let slug_product = $('.slug').val();
            //     let desc_product = CKEDITOR.instances.desc.getData();
            //     let desc_short_product = CKEDITOR.instances.desc_short.getData();
            //     let product_sku = $('.product_sku').val();
            //     let id_category = $('.category').val();
            //     let status_product = $('.status:checked').val();
            //     var formData = new FormData();

            //     for (let i = 0; i < $('input[type=file].add-file')[0].files.length; i++) {
            //         formData.append('image[]', $('input[type=file].add-file')[0].files[i]);
            //     }
            //     $('.table-price table tbody tr').each(function(i, tr) {
            //         let SizeOfProductValue = '';
            //         let colorOfProductValue = '';
            //         let product_stock = '';
            //         let product_type_sku = '';
            //         let product_price = '';
            //         let product_price_old = '';
            //         let sizeOfProduct = tr.querySelector('.size')

            //         if (sizeOfProduct) {
            //             SizeOfProductValue = sizeOfProduct.value
            //         }

            //         let colorOfP = tr.querySelector('input[type=text].color')
            //         if (colorOfP) {
            //             colorOfProductValue = colorOfP.value;
            //         }
            //         let StockofProduct = tr.querySelector('input[type=number].product_stock')
            //         console.log(StockofProduct)
            //         if (StockofProduct) {
            //             product_stock = StockofProduct.value
            //         }
            //         let TypeSkuOfProduct = tr.querySelector('input[type=text].product_type_sku');
            //         if (TypeSkuOfProduct) {
            //             product_type_sku = TypeSkuOfProduct.value;
            //         }
            //         let productPrice = tr.querySelector('input[type=number].product_price');
            //         if (productPrice) {
            //             product_price = productPrice.value;
            //         }
            //         let productPriceOld = tr.querySelector('input[type=number].product_price_old');
            //         if (productPriceOld) {
            //             product_price_old = productPriceOld.value;
            //         }

            //         let option = {
            //             SizeOfProductValue: SizeOfProductValue,
            //             colorOfProductValue: colorOfProductValue,
            //             product_stock: product_stock,
            //             product_type_sku: product_type_sku,
            //             product_price: product_price,
            //             product_price_old: product_price_old
            //         }
            //         product_detail.push(option)

            //     })
            //     let option = [];
            //     $('body .select-option').each(function(i, data) {
            //         option.push(data.value);
            //     })
            //     console.log(product_detail);
            //     formData.append('product_detail', JSON.stringify(product_detail))
            //     formData.append('desc', desc_product)
            //     formData.append('desc_short', desc_short_product)
            //     formData.append('name', name_product)
            //     formData.append('slug', slug_product)
            //     formData.append('status', status_product)
            //     formData.append('idBrand', idBrand)
            //     formData.append('product_sku', product_sku)
            //     formData.append('parent_category[]', id_category)
            //     formData.append('option', option)
            //     formData.append('_token', "{{ csrf_token() }}")
            //     $.ajax({
            //         type: "POST",
            //         url: "{{ route('admin.product.postAddProduct') }}",
            //         data: formData,
            //         success: (res) => {

            //             validator(res.status, res.message)
            //             if (res.status == 404) {
            //                 console.log(res)

            //             } else {
            //                 console.log(res.request)
            //                 // $('#table').DataTable().destroy()
            //                 // getDataTable();
            //                 // $('.alert').toggleClass('active')
            //                 // $('.popup-modal').removeClass('active');
            //             }
            //         },
            //         cache: false,
            //         contentType: false,
            //         processData: false

            //     })
            // })
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
                        // console.log(res.data)
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
                                                <select name="attr[${i+1}].name" class="select_type form-select">
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
