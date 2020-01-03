<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <link rel="stylesheet" href="/mtx/public/css/reset.css">
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
            color: #f13206;
        }

        form {
            padding: 20px 0;
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
            background: #f13206;
            color: #fff;
            border-radius: 5px;
        }
    </style>
</head>

<body>
<div class="logan__wrap">
    <h2>注册</h2>
    <form action="{{ url('/home/register') }}" method="post">
        <section>
            <input type="text" name="enterprise_name" id="" placeholder="企业名称（必填）">
        </section>
        <section>
            <input type="text" name="real_name" id="" placeholder="姓名（必填）">
        </section>
        <section>
            <input type="text" name="enterprise_duty" id="" placeholder="职务（必填）">
        </section>
        <section>
            <input type="text" name="phone" id="" placeholder="手机号（必填）">
        </section>
        <section>
            <input type="text" name="username" id="" placeholder="用户名（必填）">
        </section>
        <section>
            <input type="password" name="password" id="" placeholder="密码（必填）">
        </section>
        <section style="margin-bottom: 50px;">
            <input type="password" name="pwd" id="" placeholder="确认密码（必填）">
        </section>
        <section>
            <input type="submit" value="注册">
        </section>
    </form>
</div>

@if(!empty(session('registerStatus')))
    {{--{{ dump(session('loginStatus')) }}--}}
    <script>
        alert("{{ session('registerStatus') }}");
    </script>
@endif
</body>

</html>