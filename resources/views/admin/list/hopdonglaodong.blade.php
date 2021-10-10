@extends('admin.layouts.main')

@section('main')

<!-- start Payment Details -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card  card-box">
            <div class="card-head">
                <header>Danh sách hợp đồng lao động</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table display product-overview mb-30" id="support_table5">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Status</th>
                                    <th>Phone</th>
                                    <th>Room Type</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Jens Brincker</td>
                                    <td>23/05/2016</td>
                                    <td>27/05/2016</td>
                                    <td>
                                        <span class="label label-sm label-success">paid</span>
                                    </td>
                                    <td>123456789</td>
                                    <td>Single</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mark Hay</td>
                                    <td>24/05/2017</td>
                                    <td>26/05/2017</td>
                                    <td>
                                        <span class="label label-sm label-warning">unpaid </span>
                                    </td>
                                    <td>123456789</td>
                                    <td>Double</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Anthony Davie</td>
                                    <td>17/05/2016</td>
                                    <td>21/05/2016</td>
                                    <td>
                                        <span class="label label-sm label-success ">paid</span>
                                    </td>
                                    <td>123456789</td>
                                    <td>Queen</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>David Perry</td>
                                    <td>19/04/2016</td>
                                    <td>20/04/2016</td>
                                    <td>
                                        <span class="label label-sm label-danger">unpaid</span>
                                    </td>
                                    <td>123456789</td>
                                    <td>King</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Anthony Davie</td>
                                    <td>21/05/2016</td>
                                    <td>24/05/2016</td>
                                    <td>
                                        <span class="label label-sm label-success ">paid</span>
                                    </td>
                                    <td>123456789</td>
                                    <td>Single</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Alan Gilchrist</td>
                                    <td>15/05/2016</td>
                                    <td>22/05/2016</td>
                                    <td>
                                        <span class="label label-sm label-warning ">unpaid</span>
                                    </td>
                                    <td>123456789</td>
                                    <td>King</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mark Hay</td>
                                    <td>17/06/2016</td>
                                    <td>18/06/2016</td>
                                    <td>
                                        <span class="label label-sm label-success ">paid</span>
                                    </td>
                                    <td>123456789</td>
                                    <td>Single</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Sue Woodger</td>
                                    <td>15/05/2016</td>
                                    <td>17/05/2016</td>
                                    <td>
                                        <span class="label label-sm label-danger">unpaid</span>
                                    </td>
                                    <td>123456789</td>
                                    <td>Double</td>
                                    <td>
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>
<!-- end Payment Details -->

@endsection