<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/font-awesome/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body style="background: url('{{ asset('assets') }}/photo/login.jpg');background-size: 100%">
    <div class="login-box">
        <div class="well well-sm center"
            style="width: 25%;margin: auto;padding:4px 11px;margin-top: 111px;text-align: center;">
            <h3 class="center">مرحبا بك في نظام ادارة الصيدلية</h3>
        </div>

        <div class="well well-sm" style="width: 25%;margin:auto;padding: 22px;margin-top: 22px;z-index: 6">
            <p class="login-box-msg">تسجيل الدخول</p>

            <form action="{{ route('admin.login.store') }}" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="كلمة المرور" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                @error('password')
                    <span class="text-danger ">{{ $message }}</span>
                @enderror

                <button type="submit" class="btn btn-primary btn-block btn-flat">تسجيل الدخول</button>
            </form>
        </div>
        <br>
        <div class="alert alert-danger" id="error" style="width: 25%;margin: auto;display: none;"></div>
        <div style="position: fixed;;top:0;background: rgba(0,0,0,0.7); width: 100%;height: 100%;z-index: -1"></div>

    </div>
    <script src='{{ asset('assets') }}/js/jquery.js'></script>
    <script src='{{ asset('assets') }}/js/bootstrap.min.js'></script>
</body>

</html>
