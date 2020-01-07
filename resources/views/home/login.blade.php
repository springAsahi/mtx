<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href=/mtx/public/css/reset.css">
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: url(/mtx/public/img/login-bg.jpg) center center no-repeat;
            box-sizing: border-box;
            padding-top: 200px;
        }

        .logan__wrap {
            width: 400px;
            /* height: 300px; */
            background: #fff;
            margin: 0 auto;
            border-radius: 5px;
        }

        .logan__wrap h2 {
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #ccc;
            text-align: center;
            line-height: 50px;
            font-size: 16px;
            color: #036fd4;
        }

        form {
            padding: 30px 0;
        }

        form section {
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        form input[type=text],
        form input[type=password] {
            width: 360px;
            height: 26px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-indent: .5rem;
        }

        form input[type=submit] {
            width: 360px;
            height: 28px;
            background: #036fd4;
            color: #fff;
            border-radius: 5px;
        }

        .go__login {
            line-height: 30px;
            text-align: right;
            color: #f00;
        }

        .go__login a {
            padding-right: 10px;
            text-decoration: underline;
            color: #f00;

        }
    </style>
</head>

<body>
<div class="logan__wrap">
    <h2>吉林省帮客跨境电商综合服务平台用户登录</h2>
    <form action="{{ url('/home/login') }}" method="post">
        <section>
            <input type="text" name="username" id="" placeholder="请输入用户名">
        </section>
        <section>
            <input type="password" name="password" id="" placeholder="请输入密码">
        </section>
        <section>
            <input type="submit" value="登录">
        </section>
    </form>
    <div class="go__login">
        还没有注册？
        <a href="{{ url('/home/register') }}">注册一个</a>
    </div>
</div>

@if(!empty(session('loginStatus')))
    {{--{{ dump(session('loginStatus')) }}--}}
    <script>
        alert("{{ session('loginStatus') }}");
    </script>
@endif
</body>

</html>