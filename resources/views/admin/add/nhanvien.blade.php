@extends('admin.layouts.main')

@section('main')

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Thêm nhân viên</header>
                <!-- <button id = "panel-button" 
                    class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                    data-upgraded = ",MaterialButton">
                    <i class = "material-icons">more_vert</i>
                </button>
                <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    data-mdl-for = "panel-button">
                    <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                    <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                    <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                </ul> -->
            </div>
            <div class="card-body row">
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="txtFirstName">
                        <label class="mdl-textfield__label">Họ và tên</label>
                    </div>
                </div>

                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text99">
                        <label class="mdl-textfield__label" for="text99">Số chứng minh thư/Thẻ căn cước</label>
                        <span class="mdl-textfield__error">Number required!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="email" id="txtemail">
                        <label class="mdl-textfield__label">Email</label>
                        <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="sample2" value="" readonly tabIndex="-1">
                        <label for="sample2" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="sample2" class="mdl-textfield__label">Giới tính</label>
                        <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="nam">Nam</li>
                            <li class="mdl-menu__item" data-val="nu">Nữ</li>
                            <li class="mdl-menu__item" data-val="khac">Khác...</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="text5">
                        <label class="mdl-textfield__label" for="text5">Số điện thoại</label>
                        <span class="mdl-textfield__error">Number required!</span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="txtCity">
                        <label class="mdl-textfield__label">City</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="date">
                        <label class="mdl-textfield__label">Ngày sinh</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="date1">
                        <label class="mdl-textfield__label">Depart</label>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="list2" value="" readonly tabIndex="-1">
                        <label for="list2" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="list2" class="mdl-textfield__label">Chức vụ</label>
                        <ul data-mdl-for="list2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="1">1</li>
                            <li class="mdl-menu__item" data-val="2">2</li>
                            <li class="mdl-menu__item" data-val="3">3</li>
                            <li class="mdl-menu__item" data-val="4">4</li>
                            <li class="mdl-menu__item" data-val="5">5</li>
                            <li class="mdl-menu__item" data-val="6">6</li>
                            <li class="mdl-menu__item" data-val="7">7</li>
                            <li class="mdl-menu__item" data-val="8">8</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                        <input class="mdl-textfield__input" type="text" id="list3" value="" readonly tabIndex="-1">
                        <label for="list3" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="list3" class="mdl-textfield__label">Phòng ban</label>
                        <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="1">Single</li>
                            <li class="mdl-menu__item" data-val="2">Double</li>
                            <li class="mdl-menu__item" data-val="3">Quad</li>
                            <li class="mdl-menu__item" data-val="4">King</li>
                            <li class="mdl-menu__item" data-val="5">Suite</li>
                            <li class="mdl-menu__item" data-val="6">Apartments</li>
                            <li class="mdl-menu__item" data-val="7">Villa</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                        <textarea class="mdl-textfield__input" rows="4" id="text7"></textarea>
                        <label class="mdl-textfield__label" for="text7">Địa chỉ</label>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20" id="bar-parent" >
                    <label class="control-label col-md-3">Upload ảnh đại diện</label>
                    <form id="my-awesome-dropzone" action="/target" class="dropzone form-horizontal"></form>
                </div>
                <div class="col-lg-12 p-t-20">
                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                        <textarea class="mdl-textfield__input" rows="4" id="education"></textarea>
                        <label class="mdl-textfield__label" for="text7">Ghi chú</label>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20 text-center">
                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Thêm</button>
                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Thoát</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection