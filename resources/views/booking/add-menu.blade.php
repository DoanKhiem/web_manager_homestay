<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Thêm menu đặt phòng</title>
    @include('layouts.head')



    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layouts.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layouts.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Thêm menu đặt phòng</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Thêm menu đặt phòng
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="card">
                        <form class="form-horizontal" action="{{route('booking.menu.store')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Danh sách menu đặt phòng</h4>
                                @foreach($menus as $menu)
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">
                                        <input type="checkbox" name="checkbox-{{$menu->id}}" class="checkbox checkbox-{{$menu->id}} form-check-input" style="margin-right: 10px"/>
                                        {{$menu->name}} ({{$menu->price}} VNĐ)
                                    </label>
                                    <div class="col-sm-5">
                                        <input value="{{$menu->price}}" type="number" class="form-control price-{{$menu->id}}" style="display: none"/>
                                        <input name="quantity-{{$menu->id}}" value="0" min="0" type="number" class="input form-control input-{{$menu->id}}"  placeholder="Nhập số lượng"/>
                                    </div>
                                    <label for="fname" class="col-sm-2 text-end control-label col-form-label">
                                        Thành tiền:
                                    </label>
                                    <div class="col-sm-2">
                                        <input name="total-{{$menu->id}}" value="0" disabled type="number" class="form-control total-{{$menu->id}}"/>
                                    </div>
                                </div>
                                @endforeach

                                <h2>Tổng tiền:</h2><input class="total">
                            </div>
                            <div class="border-top">
                                <div class="card-body text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Đặt phòng
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('layouts.footer-info')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
@include('layouts.footer')

<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $(".demo").each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr("data-control") || "hue",
            position: $(this).attr("data-position") || "bottom left",

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ", " + opacity;
                if (typeof console === "object") {
                    console.log(value);
                }
            },
            theme: "bootstrap",
        });
    });
    /*datwpicker*/
    jQuery(".mydatepicker").datepicker();
    jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
    });
    var quill = new Quill("#editor", {
        theme: "snow",
    });
</script>


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(document).ready(function() {
        function calculateTotal() {
            var total = 0;

            // Duyệt qua tất cả các checkbox
            $('.checkbox').each(function() {
                // Lấy index từ class của checkbox
                var index = $(this).attr('class').split(' ')[1].split('-')[1];

                // Nếu checkbox được tích
                if ($(this).is(':checked')) {
                    // Lấy giá trị của input tương ứng
                    var quantity = $('.input-' + index).val();

                    // Lấy giá của menu tương ứng
                    var price = $('.price-' + index).val();

                    // Cộng dồn vào tổng giá trị
                    total += quantity * price;

                    $('.total-'+ index).val(quantity * price);
                }
            });

            // Cập nhật tổng giá trị vào input total
            $('.total').val(total);
        }
        // Khi checkbox thay đổi
        $('.checkbox').change(calculateTotal);

        // Khi giá trị của input thay đổi
        $('.input').on('input', calculateTotal);

        // Khi checkbox thay đổi
        $('.checkbox').change(function() {
            // Lấy index từ class của checkbox
            var index = $(this).attr('class').split(' ')[1].split('-')[1];
            console.log(index);
            // Lấy input tương ứng
            var input = $('.input-' + index);
            var total = $('.total-' + index);
            // Nếu checkbox được tích
            if ($(this).is(':checked')) {
                // Đặt thuộc tính required cho input
                input.attr('required', 'required');
            } else {
                // Gỡ bỏ thuộc tính required khỏi input
                input.removeAttr('required');

                // Đặt giá trị của input thành rỗng
                input.val(0);

                // Đặt giá trị của input total thành rỗng
                total.val(0);
            }
        });
    });
</script>
</body>

</html>
