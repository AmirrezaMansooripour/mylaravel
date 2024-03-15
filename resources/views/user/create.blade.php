<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        body {
            background: url("{{asset('back-image/back-user.jpg')}}");
            background-repeat: unset
        }
    </style>
</head>

<body dir="rtl">
    <div class="container">
        <div class="row">

            <div class="col-md-4 text-white"
                style="margin:auto;margin-top: 100px;height: 580px;background-color: rgb(58, 58, 241);border:rgb(58, 58, 241) 1px solid;border-radius: 7px">
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
        </div>
    </div>
    </div>
</body>

</html>
