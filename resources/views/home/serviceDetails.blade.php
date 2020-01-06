<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>吉林省帮客跨境电商综合服务平台</title>
    <link rel="stylesheet" href="/mtx/public/css/reset.css">
    <link rel="stylesheet" href="/mtx/public/css/common.css">
    <style>
        .main__con {
            width: 790px !important;

        }

        .return__list {
            width: 790px;
            height: 36px;
            border-bottom: 1px solid #aaa;
            text-align: right;
            line-height: 36px;
            margin-bottom: 20px;
        }

        .return__list a {
            color: #aaa;
        }

        .product__msg {
            width: 100%;
            display: flex;

        }

        .product__msg img {
            width: 290px;
            height: 290px;
            margin-right: 20px;
        }

        .product__msg h2 {
            font: bold 16px/50px arial;
        }

        .product__msg h3 {
            color: #aaa;
            line-height: 24px;
        }

        .product__msg h4 {
            color: #aaa;
            line-height: 24px;
        }

        .product__msg h5 {
            color: #aaa;
            line-height: 24px;
        }

        .product__msg h5 i {
            font: bold 16px/24px arial;
            color: #f00;
        }

        .detail__title {
            line-height: 50px;
            text-align: center;
            color: #aaa;
            font-size: 14px;
        }

        .product__detail {
            width: 790px;
        }

        .product__detail img {
            width: 790px;
            height: auto;
        }
    </style>
</head>

<body>
<div class="wrap">
    <div class="main__head">
        <div class="head__con">
            <h1><a href=""><img src="/mtx/public/img/logo.jpg"><i>吉林省帮客跨境电商综合服务平台</i></a></h1>
            <ul class="tab__nav">
                <li>
                    <a href="{{ url('home/index') }}">行业数据</a>
                </li>
                <li>
                    <a class="tab__nav-show" href="{{ url('home/product/service') }}">服务类产品</a>
                </li>
                <li>
                    <a href="{{ url('home/product/core') }}">核心产品</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main__title"><img src="/mtx/public/img/core-banner.jpg" alt=""></div>
    <div class="main__con">
        <div class="return__list">
            <a href="{{ url('home/product/service') }}">返回列表</a>
        </div>
        <div class="product__msg">
            <img src="{{ $data->product_img_url }}" alt="">
            <div>
                <h2>{{ $data->product_name }}</h2>
                <h3>规格：{{ $data->product_standards }}</h3>
                {{--<h4>起订量：产品起订量</h4>--}}
                <h5>价格：<i>￥{{ $data->price_low }}-{{ $data->price_high }}</i></h5>
            </div>
        </div>
        <section class="detail__title">————&nbsp;产品详情&nbsp;————</section>
        <div class="product__detail">
            {!! $data->product_details !!}
        </div>

    </div>
    <div class="main__footer">
        <div class="footer__con">
            <section>
                <img src="/mtx/public/img/logo.jpg" alt="">
                <h2>吉林省帮客跨境电商综合服务平台</h2>
            </section>
            <p>备案号：吉ICP备案130026502号</p>
        </div>

    </div>
</div>
<script src="/mtx/public/js/jq.js"></script>
<script>
    setInterval(function () {
        $('.roll__list').animate({
            marginTop: "-26px"
        }, 400, function () {
            $(this).css({ marginTop: "0" }).find("li:first").appendTo(this);
        });
    }, 3000);
</script>
</body>

</html>