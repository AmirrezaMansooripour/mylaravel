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
    <div class="container" style="padding:50px">
        <div class="row">
            <div class="col-2 rounded-right" style="background-color: rgb(5, 159, 206)">
                <h1 style="text-align: center">
                    <svg style="max-height: 60px;border: 2px black solid;border-radius: 100px"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M256 288A144 144 0 1 0 256 0a144 144 0 1 0 0 288zm-94.7 32C72.2 320 0 392.2 0 481.3c0 17 13.8 30.7 30.7 30.7H481.3c17 0 30.7-13.8 30.7-30.7C512 392.2 439.8 320 350.7 320H161.3z" />
                    </svg>
                </h1>
                <h6 class="text-white">نام کاربری:</h6>
                <h6 class="text-white">زمان انتشار:</h6>
                <h6 class="text-white">تعداد بازدید:</h6>
            </div>
            <div class="col-7" style="background-color: rgb(21, 122, 189);border:2px black solide;border-radius:5px">
                <h1 style="text-align: center">
                    <img src="../user/back-image/back-image.jpg" style="max-height: 400px;text-align: center"
                        alt="">

                </h1>
                <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim dicta dolore,
                    eligendi sequi provident eos voluptate reprehenderit voluptatem, aut corporis itaque praesentium non
                    omnis totam nemo maxime repudiandae numquam neque.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim dicta dolore, eligendi sequi
                    provident eos voluptate reprehenderit voluptatem, aut corporis itaque praesentium non omnis totam
                    nemo maxime repudiandae numquam neque.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim dicta dolore, eligendi sequi
                    provident eos voluptate reprehenderit voluptatem, aut corporis itaque praesentium non omnis totam
                    nemo maxime repudiandae numquam neque.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim dicta dolore, eligendi sequi
                    provident eos voluptate reprehenderit voluptatem, aut corporis itaque praesentium non omnis totam
                    nemo maxime repudiandae numquam neque.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim dicta dolore, eligendi sequi
                    provident eos voluptate reprehenderit voluptatem, aut corporis itaque praesentium non omnis totam
                    nemo maxime repudiandae numquam neque.</p>

            </div>
            <div class="col-3">
                <div style="width: 100%">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">پست های مرتبط</h5>
                                <hr>
                                <p class="card-text"><img src="../user/back-image/back-image.jpg"
                                        style="max-height: 80px;text-align: center" alt="">
                                    Lorem ipsum dolor sit.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
