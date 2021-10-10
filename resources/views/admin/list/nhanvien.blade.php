@extends('admin.layouts.main')

@section('main')

<ul class="nav nav-pills nav-pills-rose">
    <li class="nav-item tab-all"><a class="nav-link active show"
        href="#tab1" data-toggle="tab">List View</a></li>
    <li class="nav-item tab-all"><a class="nav-link" href="#tab2"
        data-toggle="tab">Grid View</a></li>
</ul>
<div class="tab-content tab-space">
    <div class="tab-pane active show" id="tab1">
        <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card-head">
                    <header>All Bookings</header>
                </div>
                
                <div class="card-body ">
                    <div class="row p-b-20">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="new_booking.html" id="addRow" class="btn btn-info">
                                    Add New <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-right">
                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable">
                        <table class="table table-hover table-checkable order-column full-width" id="example4">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="center"> Họ tên </th>
                                    <th class="center"> Giới tính </th>
                                    <th class="center"> Số điện thoại </th>
                                    <th class="center"> Email </th>
                                    <th class="center"> Địa chỉ </th>
                                    <th class="center">Ngày sinh</th>
                                    <th class="center"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img sorting_1">
                                        <img src="{{ url('admin') }}/assets/img/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Rajesh</td>
                                    <td class="center">Chef</td>
                                    <td class="center"><a href="tel:4444565756">
                                            4444565756 </a></td>
                                    <td class="center"><a href="mailto:shuxer@gmail.com">
                                            rajesh@gmail.com </a></td>
                                    <td class="center">22,tilak appt. surat</td>
                                    <td class="center">22 Feb 2000</td>
                                    <td class="center">
                                        <a href="edit_staff.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </a>
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
    <div class="tab-pane" id="tab2">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header bg-b-purple">
                                <div class="user-name">Họ tên</div>
                                <div class="name-center">chức vụ</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig1.jpg" class="user-img"
                                alt="">
                            <p>
                                phòng ban <br />
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header cyan-bgcolor">
                                <div class="user-name">Smita Patil</div>
                                <div class="name-center">Housekeeper</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig2.jpg" class="user-img"
                                alt="">
                            <p>
                                45, Krishna Tower, Near Bus Stop, Satellite,  <br />Ahmedabad
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header light-dark-bgcolor">
                                <div class="user-name">John Smith</div>
                                <div class="name-center">Cook</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig3.jpg" class="user-img"
                                alt="">
                            <p>
                                456, Estern evenue, Courtage area,  <br />New York
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header bg-b-orange">
                                <div class="user-name">Pooja Patel</div>
                                <div class="name-center">General Manager</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig4.jpg" class="user-img"
                                alt="">
                            <p>
                                A-103, shyam gokul flats, Mahatma Road <br />Mumbai
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header bg-b-green">
                                <div class="user-name">Smita Patil</div>
                                <div class="name-center">Housekeeper</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig5.jpg" class="user-img"
                                alt="">
                            <p>
                                45, Krishna Tower, Near Bus Stop, Satellite,  <br />Ahmedabad
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header bg-b-danger">
                                <div class="user-name">John Smith</div>
                                <div class="name-center">Cook</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig6.jpg" class="user-img"
                                alt="">
                            <p>
                                456, Estern evenue, Courtage area,  <br />New York
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header bg-b-black">
                                <div class="user-name">Pooja Patel</div>
                                <div class="name-center">General Manager</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig7.jpg" class="user-img"
                                alt="">
                            <p>
                                A-103, shyam gokul flats, Mahatma Road <br />Mumbai
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header bg-b-yellow">
                                <div class="user-name">Smita Patil</div>
                                <div class="name-center">Housekeeper</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig8.jpg" class="user-img"
                                alt="">
                            <p>
                                45, Krishna Tower, Near Bus Stop, Satellite,  <br />Ahmedabad
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="m-b-20">
                        <div class="doctor-profile">
                        <div class="profile-header bg-b-pink">
                                <div class="user-name">John Smith</div>
                                <div class="name-center">Cook</div>
                            </div>
                            <img src="{{ url('admin') }}/assets/img/user/usrbig9.jpg" class="user-img"
                                alt="">
                            <p>
                                456, Estern evenue, Courtage area,  <br />New York
                            </p>
                            <div>
                                <p>
                                    <i class="fa fa-phone"></i><a href="tel:(123)456-7890">
                                        (123)456-7890</a>
                                </p>
                            </div>
                            <div class="profile-userbuttons">
                                <a href="staff_profile.html"
                                    class="btn btn-circle deepPink-bgcolor btn-sm">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection