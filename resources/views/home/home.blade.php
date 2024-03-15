@extends('layout.master')
@section('title')
    mySite
@endsection
@section('style')
    <style>
        body {
            background-image: url("{{asset('back-image/back-home.jpg')}}");
            text-align: right;
        }
    </style>
@endsection
@section('body')
    <div class="container" style="margin-top:30px">
        <p style="text-align: right" class="h2 text-white titr">جدید ترین مقالات :</p>
        <hr>
        <div class="row">
            <div class="col" style="margin: auto;">
                <div class="card" style="width: 20rem;margin: auto">
                    <div class="card-body matn">
                        <img class="card-img-top" src="{{asset('icon/blog.jpg')}}" alt="Card image cap">
                        <h5 class="card-title">
                            <h4>موضوع</h4>
                        </h5>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است. چاپگرها و متون بلکه روزنامه و</p>
                    </div>
                </div>
            </div>
            <div class="col" style="margin: auto">
                <div class="card" style="width: 20rem;margin: auto">
                    <div class="card-body matn">
                        <img class="card-img-top" src="{{asset('icon/blog.jpg')}}" alt="Card image cap">
                        <h5 class="card-title">
                            <h4>موضوع</h4>
                        </h5>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است. چاپگرها و متون بلکه روزنامه و</p>
                    </div>
                </div>
            </div>
            <div class="col" style="margin: auto">
                <div class="card" style="width: 20rem;margin: auto">
                    <div class="card-body matn">
                        <img class="card-img-top" src="{{asset('icon/blog.jpg')}}" alt="Card image cap">
                        <h5 class="card-title">
                            <h4>موضوع</h4>
                        </h5>
                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است. چاپگرها و متون بلکه روزنامه و</p>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <p style="text-align: right;display: inline;" class="h2 text-white titr">پر بازدیدترین بلاگ ها :</p>
        <a href="/post/create">
            <button style="display: inline" class="btn btn-primary">برای ساخت سوال خود اینجا کلیک کنید</button>
        </a>
        <hr style="width: 64%;margin-left:100%">
        <div class="row">
            <div class="col-4">
                <div class="col" style="margin: auto">
                    <div class="card" style="width: 20rem;margin: auto">
                        <div class="card-body matn">
                            <img class="card-img-top" src="{{asset('icon/blog.jpg')}}" alt="Card image cap">
                            <h5 class="card-title">
                                <h4>موضوع</h4>
                            </h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="col" style="margin: auto">
                    <div class="card" style="width: 20rem;margin: auto">
                        <div class="card-body matn">
                            <img class="card-img-top" src="{{asset('icon/blog.jpg')}}" alt="Card image cap">
                            <h5 class="card-title">
                                <h4>موضوع</h4>
                            </h5>
                            <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 20rem;margin: auto;height: 180px">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">صفحه های اجتماعی</li>
                        <li class="list-group-item"><img style="max-width: 210px;" src="{{asset('icon/sp.jpg')}}" alt="">
                        </li>

                    </ul>
                </div>
                <div class="col-4" style="margin-top: 12px">
                    <div class="card" style="width: 20rem;margin: auto;margin-top: 35.6px;height: 157px">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">آمار ها :</li>
                            <li class="list-group-item">تعداد بلاگ ها :</li>
                            <li class="list-group-item">تعداد کاربران :</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <p style="text-align: right" class="h2 text-white titr">جدید ترین ویدیو ها :</p>
        <hr>

        <div class="row">
            <div class="col-4" style="text-align:center">
                <video width="320" height="240" controls style="border: 1px black solid;border-radius: 5px">
                    <source src="icon/blog.jpg" type="video/jpg">
                    <source src="" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-4" style="text-align:center">
                <video width="320" height="240" controls style="border: 1px black solid;border-radius: 5px">
                    <source src="icon/blog.jpg" type="video/jpg">
                    <source src="" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-4" style="text-align:center">
                <video width="320" height="240" controls style="border: 1px black solid;border-radius: 5px">
                    <source src="icon/blog.jpg" type="video/jpg">
                    <source src="" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <br>
@endsection
