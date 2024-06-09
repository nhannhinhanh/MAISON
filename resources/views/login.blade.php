
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAISON-Login</title>
    <link rel="stylesheet" href="{{ asset('backend/asset/css/style2.css') }}">
    <link rel="icon" href="{{asset('frontend/asset/images/logo.png')}}" type="image/x-icon" />
</head>
<body class="login-page">
    <div class="login-container">
        <h1>MAISON</h1>
        <form action="/check_login" method="post" class="login-form">
            <input type="text" name="email" placeholder="Email" class="login-input">
            <input type="password" name="password" placeholder="Mật khẩu" class="login-input">
            <button type="submit" class="login-button">Đăng nhập</button>
            @csrf
        </form>
    </div>
</body>
</html>
