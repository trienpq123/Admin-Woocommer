<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/css.css') }}">
    <!-- LINK CDN -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- CDN FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Favicons -->
    <link href="{{ asset('./admin/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('./admin/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('./admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('./admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('./admin/assets/css/style.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="{{ asset('admin/assets/js/boostrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" /> --}}



    @yield('css')

</head>

<body>
    <div id="loader">
        <div class="loader"></div>
    </div>
    @include('admin.layouts.aside')
    @include('admin.component.header_bar')
    @include('admin.layouts.articles')

</body>
{{-- <script src="{{ asset('../../assets/js/js.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
<script src="{{ asset('./admin/assets/js/js.js') }}"></script>
{{-- <script>
    $(document).ready(function() {
        $('.aside ul li a').click(function() {
            $('.menu-child').toggleClass('active');
        })

        $('table .btn-delete').click(function() {
            $('#popup-delete').toggleClass('active');
            // $('.popup-modal').click(function(){
            //     $('.popup-modal').removeClass('active');
            // });
            $('.btn-close').click(function() {
                $('.popup-modal').removeClass('active');
            });
            $('.btn-agree').click(function() {
                $('.popup-modal').removeClass('active');
            });
        })
        $('.btn-add').click(function() {
            let name = $(this).attr('data-name');
            $('.popup-modal' + '.' + name).toggleClass('active');
            // $('.popup-modal').click(function(){
            //     $('.popup-modal').removeClass('active');
            // });
            $('.btn-close').click(function() {
                $('.popup-modal').removeClass('active');
            });
            $('.btn-agree').click(function() {
                $('.popup-modal').removeClass('active');
            });

        })
        // $('.btn-edit').click(function() {
        //     let name=$(this).attr('data-name');
        //     $('.popup-modal'+'.'+name).toggleClass('active');
        //     // $('.popup-modal').click(function(){
        //     //     $('.popup-modal').removeClass('active');
        //     // });
        //     $('.btn-close').click(function(){
        //         $('.popup-modal').removeClass('active');
        //     });
        //     $('.btn-agree').click(function(){
        //         $('.popup-modal').removeClass('active');
        //     });
        // })

    })
    //    let myChart =  document.getElementById('chart-view').getContext('2d');
    //    console.log(myChart)
    //    const data = {
    //     labels: ['Tháng 1', 'February', 'March', 'April', 'May', 'June', 'July'],
    //     datasets: [{
    //         label: 'Thống Kê Doanh Thu',
    //         data: [65, 59, 80, 81, 26, 55, 40],
    //         fill: false,
    //         borderColor: 'rgb(75, 192, 192)',
    //     }]
    //     };

    //    const config = {
    //     type: 'line',
    //     data: data,
    //     options: {
    //         transitions: {
    //         show: {
    //             animations: {
    //             x: {
    //                 from: 0
    //             },
    //             y: {
    //                 from: 0
    //             }
    //             }
    //         },
    //         hide: {
    //             animations: {
    //             x: {
    //                 to: 0
    //             },
    //             y: {
    //                 to: 0
    //             }
    //             }
    //         }
    //         }
    //     }
    // };
    //     let PopChart = new Chart(myChart,config)
</script>
 --}}



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script src="{{ asset('admin/assets/js/ckeditor/ckeditor.js') }}"></script>

{{-- <script src="//cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script> --}}

@stack('javascript')


<script type="text/javascript" src="{{ asset('admin/assets/js/ckfinder/ckfinder.js') }}"></script>

{{-- <script>
    var editor = CKEDITOR.replace('desc')

    CKEDITOR.replace('desc_short')

    CKEDITOR.config.imageUploadUrl = '{{ route('admin.uploadFile') . '?type=Images&&_token=' . csrf_token() }}';

    CKEDITOR.config.filebrowserUploadMethod = 'form';

    // CKFinder.setupCKEditor(editor);
</script> --}}
<script type="text/javascript">
    function ChangeToSlug() {
        var slug;

        //Lấy text từ thẻ input title
        slug = document.getElementById("slug").value;
        slug = slug.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('convert_slug').value = slug;
    }
</script>

{{-- 
<script>
    function ChangeToSlug()

    {

        var slug;



        //Lấy text từ thẻ input title 

        slug = document.getElementById("title").value;

        slug = slug.toLowerCase();

        //Đổi ký tự có dấu thành không dấu

        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');

        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');

        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');

        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');

        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');

        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');

        slug = slug.replace(/đ/gi, 'd');

        //Xóa các ký tự đặt biệt

        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');

        //Đổi khoảng trắng thành ký tự gạch ngang

        slug = slug.replace(/ /gi, "-");

        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang

        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng

        slug = slug.replace(/\-\-\-\-\-/gi, '-');

        slug = slug.replace(/\-\-\-\-/gi, '-');

        slug = slug.replace(/\-\-\-/gi, '-');

        slug = slug.replace(/\-\-/gi, '-');

        //Xóa các ký tự gạch ngang ở đầu và cuối

        slug = '@' + slug + '@';

        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        //In slug ra textbox có id “slug”

        document.getElementById('slug').value = slug;

    }



    function formatVND() {



        var price = document.getElementById("price_product").value;



        var formatNumber = price.toLocaleString('it-IT', {
            style: 'currency',
            currency: 'VND'
        });

        price = formatNumber;

    }
</script> --}}

//
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="{{ asset('admin/assets/js/boostrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('admin/assets/js/boostrap-tagsinput/bootstrap-tagsinput-angular.js') }}"></script>
//
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
//
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>


<!-- Template Main JS File -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>



@stack('script-action')

</html>
