<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Đặt phòng</title>
    @include('layouts.head')

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
                        <h4 class="page-title">Đặt phòng</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Danh sách đặt phòng
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
                            <form class="form-horizontal" action="{{route('booking.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Thông tin đặt phòng</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">
                                            Tên khách hàng</label>
                                        <div class="col-sm-9">
                                            <input name="name" value="{{old('name')}}" type="text" class="form-control"
                                                id="fname" placeholder="Nhập tên khách hàng" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">
                                            Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input name="phone" value="{{old('phone')}}" type="text"
                                                class="form-control" id="fname" placeholder="Nhập số điện thoại" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Phòng</label>
                                        <div class="col-md-9">
                                            <select name="room_id" class="select2 form-select shadow-none"
                                                style="width: 100%; height: 36px">
                                                <option value="">Select</option>
                                                @foreach($rooms as $room)
                                                <option {{old('room_id') == $room->id ? 'selected' : ''}}
                                                    value="{{$room->id}}">{{$room->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Menu</label>
                                        <div class="col-md-9">
                                            <select name="menu_id" class="select2 form-select shadow-none"
                                                style="width: 100%; height: 36px">
                                                <option value="">Select</option>
                                                @foreach($menus as $menu)
                                                <option {{old('menu_id') == $menu->id ? 'selected' : ''}}
                                                    value="{{$menu->id}}">{{$menu->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-end control-label col-form-label">Hình thức đặt phòng</label>
                                        <div class="col-md-9">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    id="customControlValidation1" name="radio-stacked" checked required />
                                                <label class="form-check-label mb-0" for="customControlValidation1">Theo
                                                    giờ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input"
                                                    id="customControlValidation2" name="radio-stacked" required />
                                                <label class="form-check-label mb-0"
                                                    for="customControlValidation2">Theo ngày</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Ngày giờ đến</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input
                                                    type="datetime-local"
                                                    class="form-control" placeholder="mm/dd/yyyy hh:mm:ss"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Ngày giờ đi</label>
                                        <div class="col-sm-9">
                                            <input
                                                type="datetime-local"
                                                class="form-control" placeholder="mm/dd/yyyy hh:mm:ss"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Tổng thời gian dự kiến</label>
                                        <div class="col-sm-9">
                                            <input name="next_hour_price" value="{{old('next_hour_price')}}"
                                                type="number" class="form-control" placeholder="Nhập giá giờ sau" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Tổng tiền phòng</label>
                                        <div class="col-sm-9">
                                            <input name="daily_price" value="{{old('daily_price')}}" type="number"
                                                class="form-control" placeholder="Nhập giá ngày" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Người lớn</label>
                                        <div class="col-sm-9">
                                            <input name="holiday_surcharge" value="{{old('holiday_surcharge')}}"
                                                type="number" class="form-control" placeholder="Nhập phụ thu ngày lễ" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Trẻ em</label>
                                        <div class="col-sm-9">
                                            <input name="early_checkin" value="{{old('early_checkin')}}" type="number"
                                                class="form-control" placeholder="Nhập phụ thu nhận sớm" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Ghi chú</label>
                                        <div class="col-sm-9">
                                            <textarea name="description"
                                                class="form-control">{{old('description')}}</textarea>
                                        </div>
                                    </div>
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
</body>

</html>
