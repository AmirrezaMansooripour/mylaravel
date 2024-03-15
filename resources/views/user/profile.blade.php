@extends('layout.master')
@section('title')
    mySite
@endsection
@section('style')
    <style>
        body {
            background-color: rgb(79, 79, 241);
            text-align: right;
        }
    </style>
@endsection

@section('body')
    <div class="container-flud">
        <div style="height: 500px;background-image: url(back-image/back-profile-image.jpg)">
            <div class="container">
                <br>
                <h1 style="text-align: center;">
                    <svg style="max-height: 160px;border: 2px black solid;border-radius: 100px"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M256 288A144 144 0 1 0 256 0a144 144 0 1 0 0 288zm-94.7 32C72.2 320 0 392.2 0 481.3c0 17 13.8 30.7 30.7 30.7H481.3c17 0 30.7-13.8 30.7-30.7C512 392.2 439.8 320 350.7 320H161.3z" />
                    </svg>
                </h1>
                <h5 style="text-align: center">نام کاربری</h5>
                <a style="margin-right: 43.7%" href="/user/update"><button style="" class="btn btn-info">ویرایش
                        مشخصات</button></a>
                <br>
                <br>
                <div class="row" style="margin-top: 150px">
                    <div class="col">
                        <div class="card-deck">
                            <div class="card" style="background-color: aqua">
                                <div class="card-body">
                                    <h5 class="card-text">تعداد بلاگ های شما:</h5>
                                    <h5 class="card-text">تعداد مقالات های شما:</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-deck">
                            <div class="card" style="background-color: aqua">
                                <div class="card-body">
                                    <h5 class="card-text">سابقه ادمینی :</h5>
                                    <h5 class="card-text">سابقه ادمین محتوا:</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-deck">
                            <div class="card" style="background-color: aqua">
                                <div class="card-body">
                                    <h5 class="card-text">تعداد دنبال کننده شما:</h5>
                                    <h5 class="card-text">تعداد دنبال شونده های شما:</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
@endsection
