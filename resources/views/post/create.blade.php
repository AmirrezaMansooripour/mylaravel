@extends('layout.master')
@section('title')
    mySite
@endsection
@section('style')
    <style>
        body {
            background: url("{{asset('back-image/back-user.jpg')}}");
            background-repeat: unset;
            text-align: right;
        }
    </style>
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-white"
                style="margin:auto;margin-top: 100px;height: 580px;background-color: rgb(58, 58, 241);border:rgb(58, 58, 241) 1px solid;border-radius: 7px">
                <form action="/post/page" method="GET" style="margin-top:13px">
                    <div class="form-group">
                        <label for="usr">تیتر:</label>
                        <input type="text" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="comment">توضیحات درباره مشکل شما:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="my-input">فایل:</label>
                        <input type="file" class="form-control-file border">
                    </div>
                    <label for="">دسته بندی موضوع:</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                    <br>
                    <label for="">نوع محتوا را انتخاب کنید:</label>
                    <div class="form-check d-inline">
                        <label class="form-check-label">
                        </label>
                        <input style="margin-right: 31px" type="radio" class="form-check-input" name="optradio">بلاگ

                    </div>
                    <div class="form-check d-inline">
                        <label class="form-check-label">
                        </label>
                        <input style="margin-right: 45px" type="radio" class="form-check-input" name="optradio">مقاله
                    </div>
                    <button type="btn" class="btn btn-primary btn-block">ساخت محتوا</button>

                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
