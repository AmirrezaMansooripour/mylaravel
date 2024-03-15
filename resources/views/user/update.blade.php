@extends('layout.master')
@section('title')
    mySite
@endsection
@section('style')
    <style>
        body {
            background: url('back-image/back-image.jpg');
            background-repeat: unset
        }
    </style>
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-white"
                style="margin:auto;margin-top: 10px;height: 590px;background-color: rgb(58, 58, 241);border:rgb(58, 58, 241) 1px solid;border-radius: 7px">
                <form action="/home" style="margin-top:13px">
                    <div class="form-group">
                        <label style="margin-left: 240px" for="user">نام کاربری سابق:</label>
                        <input type="username" name="user" class="form-control"
                            placeholder="نام کاربری قدیمی خود را وارد کنید" id="user">
                    </div>
                    <div class="form-group">
                        <label style="margin-left: 240px" for="user">نام کاربری جدید:</label>
                        <input type="username" name="user" class="form-control"
                            placeholder="نام کاربری جدید خود را وارد کنید" id="user">
                    </div>
                    <div class="form-group">
                        <label style="margin-left: 270px" for="emailOld">ایمیل سابق:</label>
                        <input type="email" name="emailOld" class="form-control" placeholder="ایمیل سابق خود را وارد کنید"
                            id="emailOld">
                    </div>
                    <div class="form-group">
                        <label style="margin-left: 274px" for="emailNew">ایمیل جدید:</label>
                        <input type="email" name="emailNew" class="form-control" placeholder="ایمیل جدید خود را وارد کنید"
                            id="emailNew">
                    </div>
                    <div class="form-group">
                        <label for="passwordOld" style="margin-left: 250.2px">رمز عبور سابق:</label>
                        <input type="password" name="passOld" class="form-control"
                            placeholder="رمز عبور سابق خود را وارد کنید" id="passOld">
                    </div>
                    <div class="form-group">
                        <label for="passwordNew" style="margin-left: 250.2px">رمز عبور جدید:</label>
                        <input type="password" name="passNew" class="form-control" placeholder="رمز عبور خود را وارد کنید"
                            id="passNew">
                    </div>
                    <div class="form-group form-check" style="text-align: right">


                        <button type="submit" class="btn btn-primary btn-block">ثبت نام</button>
                        <br>
                </form>
            </div>
        </div>
        </div>
        </div>
@endsection
