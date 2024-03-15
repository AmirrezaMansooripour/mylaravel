@extends('taklif.layout.maste')
@section('body')
<div class="container">
<form action="/home" method="GET" style="margin-top:13px">
                    <div class="form-group">
                        <label style="margin-left: 280px" for="user">نام کاربری:</label>
                        <input type="username" name="user" class="form-control"
                            placeholder="نام کاربری خود را وارد کنید" id="user">
                    </div>
                    <div class="form-group">
                        <label for="email" style="margin-left: 310px">ایمیل:</label>
                        <input type="email" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید"
                            id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone" style="margin-left: 257.3px">شماره موبایل:</label>
                        <input type="number" name="phone" class="form-control"
                            placeholder="شماره موبایل خود را وارد کنید" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="password" style="margin-left: 285px">رمز عبور :</label>
                        <input type="password" name="pass" class="form-control"
                            placeholder="شماره موبایل خود را وارد کنید" id="pass">
                    </div>
                    <div class="form-group">
                        <label for="password" style="margin-left: 255.6px"> تکرار رمز عبور:</label>
                        <input type="password" name="pass" class="form-control"
                            placeholder="شماره موبایل خود را وارد کنید" id="pass">
                    </div>
                    <div class="form-group form-check" style="text-align: right">
                        <label class="form-check-label">
                            <input class="form-check-input" name="a" style="margin-right: 110px" type="checkbox">
                            من را به
                            یاد
                            بیاور
                        </label>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">ثبت نام</button>
                </form>
</div>
@endsection