<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Sửa phòng</title>
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
                        <h4 class="page-title">Sửa đặt phòng</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Sửa đặt phòng
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
                            <form class="form-horizontal" action="{{route('booking.update', $item->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h4 class="card-title">Thông tin đặt phòng</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">
                                            Tên khách hàng</label>
                                        <div class="col-sm-9">
                                            <input name="customer_name" value="{{$item->bookingDetail->customer_name}}" type="text" class="form-control"
                                                id="fname" placeholder="Nhập tên khách hàng" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">
                                            Số điện thoại</label>
                                        <div class="col-sm-9">
                                            <input name="phone_number" value="{{$item->bookingDetail->phone_number}}" type="text" required
                                                class="form-control" id="fname" placeholder="Nhập số điện thoại" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Phòng</label>
                                        <div class="col-md-9">
                                            <select name="room_id[]"
                                                class="select2 form-select shadow-none mt-3"
                                                multiple="multiple" required
                                                style="height: 36px; width: 100%"
                                            >
                                                <option value="">Select</option>
                                                @foreach($rooms as $room)
                                                    <option {{ in_array($room->id, $item->bookingDetail->rooms->pluck('id')->toArray()) ? 'selected' : '' }}
                                                            value="{{$room->id}}">{{$room->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Trạng thái phòng</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <select name="booking_status"
                                                    class="select2 form-select shadow-none"
                                                    style="width: 100%; height: 36px"
                                                >
                                                    <option value="1" {{$item->booking_status == 1 ? 'selected' : ''}}>Chưa nhận phòng</option>
                                                    <option value="2" {{$item->booking_status == 2 ? 'selected' : ''}}>Đã nhận phòng</option>
                                                    <option value="3" {{$item->booking_status == 3 ? 'selected' : ''}}>Đã trả phòng</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-end control-label col-form-label">Hình thức đặt phòng</label>
                                        <div class="col-md-9">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" value="hour"
                                                    id="customControlValidation1" name="booking_category" {{$item->bookingDetail->booking_category == 'hour' ? 'checked' : ''}}  required />
                                                <label class="form-check-label mb-0" for="customControlValidation1">Theo
                                                    giờ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" value="day" {{$item->bookingDetail->booking_category == 'day' ? 'checked' : ''}}
                                                    id="customControlValidation2" name="booking_category" required />
                                                <label class="form-check-label mb-0"
                                                    for="customControlValidation2">Theo ngày</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Khoảng thời gian</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" name="period_time" class="form-control" value="{{$item->bookingDetail->period_time}}" required/>
{{--                                                <input--}}
{{--                                                    type="datetime-local" required--}}
{{--                                                    class="form-control" placeholder="mm/dd/yyyy hh:mm:ss"/>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Tổng thời gian dự kiến</label>
                                        <div class="col-sm-9">
                                            <input name="total_time" value="{{$item->bookingDetail->total_time}}" required
                                                type="number" class="form-control" placeholder="Nhập tổng thời gian dự kiến" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Tổng tiền phòng</label>
                                        <button type="button" id="total" class="btn btn-primary col-sm-2">
                                            Tính tiền
                                        </button>
                                        <div class="col-sm-7">
                                            <input name="booking_price" value="{{$item->bookingDetail->booking_price}}" type="number"
                                                class="form-control" placeholder="Nhập tổng tiền phòng" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Số tiền khách cần trả</label>
                                        <div class="col-sm-8">
                                            <input name="total_amount" value="{{$item->total_amount}}" type="number"
                                                   class="form-control" placeholder="Nhập số tiền khách cần trả" required/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Người lớn</label>
                                        <div class="col-sm-9">
                                            <input name="adult" value="{{$item->bookingDetail->adult}}"
                                                type="number" class="form-control" placeholder="Nhập người lớn" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Trẻ em</label>
                                        <div class="col-sm-9">
                                            <input name="kid" value="{{$item->bookingDetail->kid}}" type="number"
                                                class="form-control" placeholder="Nhập trẻ em" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Ghi chú</label>
                                        <div class="col-sm-9">
                                            <textarea name="description" placeholder="Nhập ghi chú"
                                                class="form-control">{{$item->bookingDetail->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body text-center">
                                        <button type="submit" class="btn btn-primary">
                                            Sửa đặt phòng
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
        $(function() {
            $('input[name="period_time"]').daterangepicker({
                timePicker: true,
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear',
                    format: 'DD/MM/YYYY hh:mm A'
                }
            }, function(start, end, label) {
                var hours = end.diff(start, 'hours');
                var days = end.diff(start, 'days');
                var bookingType = $('input[name="booking_category"]:checked').val();
                if (bookingType === 'day') {
                    $('input[name="total_time"]').val(days);
                } else if (bookingType === 'hour') {
                    $('input[name="total_time"]').val(hours);
                }
            });

            $('input[name="period_time"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY hh:mm A') + ' - ' + picker.endDate.format('DD/MM/YYYY hh:mm A'));
            });

            $('input[name="period_time"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

            $('input[name="booking_category"]').change(function() {
                var startEnd = $('input[name="period_time"]').data('daterangepicker');
                console.log(startEnd.endDate, startEnd.startDate);
                var hours = startEnd.endDate.diff(startEnd.startDate, 'hours');
                var days = startEnd.endDate.diff(startEnd.startDate, 'days');
                var bookingType = $(this).val();
                if (bookingType === 'day') {
                    $('input[name="total_time"]').val(days);
                } else if (bookingType === 'hour') {
                    $('input[name="total_time"]').val(hours);
                }
            });
        });
        var rooms = @json($rooms);
        var categories = @json($categories);
        $(document).ready(function() {
            // Bắt sự kiện click trên nút "Tính tiền"
            $('#total').click(function(e) {
                e.preventDefault(); // Ngăn chặn hành vi mặc định của nút submit

                // Lấy tất cả các id phòng đã được chọn
                var selectedRoomIds = $('select[name="room_id[]"]').val();
                console.log(selectedRoomIds);
                // Duyệt qua từng id phòng
                var total = 0;
                var bookingType = $('input[name="booking_category"]:checked').val();
                $.each(selectedRoomIds, function(index, roomId) {
                    // Tại đây, bạn có thể sử dụng roomId để lấy giá của phòng tương ứng
                    // Ví dụ: bạn có thể gọi AJAX để lấy giá từ server
                    var room = rooms.find(function(room) {
                        return room.id == roomId;
                    });
                    // Kiểm tra nếu tìm thấy phòng
                    if (room) {
                        // Lấy giá phòng
                        var category = categories.find(function(category) {
                            return category.id == room.category_id;
                        });
                        if (bookingType === 'day') {
                            total += $('input[name="total_time"]').val() * category.daily_price;
                        } else if (bookingType === 'hour') {
                            total += $('input[name="total_time"]').val() * category.hourly_price;
                        }
                        // var price = category.price;

                        // total += price;
                        // Cập nhật giá phòng vào input

                    }
                });
                $('input[name="booking_price"]').val(total);
                $('input[name="total_amount"]').val(total);
            });
        });
    </script>
</body>

</html>
