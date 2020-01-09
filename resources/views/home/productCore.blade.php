<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>吉林省帮客跨境电商综合服务平台</title>
    <link rel="stylesheet" href="/mtx/public/css/reset.css">
    <link rel="stylesheet" href="/mtx/public/css/common.css">
    <style>    .pagination{display:inline-block;padding-left:0;margin:22px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;line-height:1.6;text-decoration:none;color:#3097d1;background-color:#fff;border:1px solid #ddd;margin-left:-1px}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-bottom-right-radius:4px;border-top-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#216a94;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;background-color:#3097d1;border-color:#3097d1;cursor:default}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;background-color:#fff;border-color:#ddd;cursor:not-allowed}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:6px;border-top-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-bottom-right-radius:6px;border-top-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:3px;border-top-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-bottom-right-radius:3px;}</style>
    <style>
        .core__list {
            width: 1200px;

        }

        .core__list li {
            width: 390px;
            height: 460px;
            /* background: #f00; */
            margin: 0 5px 10px 5px;
            box-sizing: border-box;
            border: 1px solid #fff;
        }

        .core__list li:hover {
            border: 1px solid #f00;
        }

        .core__list li a {
            display: inline-block;
            width: 390px;
            height: 460px;
        }


        .core__list li img {
            width: 388px;
            height: 348px;
        }

        .core__list li section {
            box-sizing: border-box;
            padding: 0 .5rem;
        }

        .core__list li section h3 {
            display: flex;
            justify-content: space-between;
        }

        .core__list li section h3 i {
            font-size: 18px;
            font-weight: 600;
            color: #f00;
            line-height: 30px;
        }

        .core__list li section h3 em {
            font-size: 14px;
            color: #aaa;
            line-height: 30px;
        }

        .core__list li section h4 {
            font-size: 16px;
            font-weight: 600;
            color: #000;
        }

        .core__list li section h5 {
            font-size: 12px;

            color: #aaa;
            line-height: 24px;
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
                    <a href="{{ url('home/product/service') }}">服务类产品</a>
                </li>
                <li>
                    <a class="tab__nav-show" href="{{ url('home/product/core') }}">核心产品</a>
                </li>
                <li>
                    <a href="http://www.alinewstar.com/strategic.html">省外贸名人墙</a>
                </li>
                <li>
                    <a href="http://www.alinewstar.com/contact.html">联系我们</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main__title"><img src="/mtx/public/img/core-banner.jpg" alt=""></div>
    <div class="main__con">
        <ul class="core__list clearfix">
            @foreach($data as $key => $value)
            <li class="fl">
                <a href="{{ $value->details_link }}">
                    <div>
                        <img src="{{ $value->product_img_url }}" alt="">
                    </div>
                    <section>
                        <h3><i>${{ $value->price_low / 100 }}-{{ $value->price_high / 100 }}</i><em>MOP：{{ $value->lowest_order_number }}</em></h3>
                        <h4>{{ $value->product_name }}</h4>
                        <h5>{{ $value->product_standards }}</h5>
                    </section>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="main__current">
            {{ $data->links() }}
            {{--<section>--}}
                {{--<a href="">首页</a>--}}
                {{--<a href="">前一页</a>--}}
            {{--</section>--}}
            {{--<section>--}}
                {{--<a href="" class="page-active">1</a>--}}
                {{--<a href="">2</a>--}}
                {{--<a href="">3</a>--}}
                {{--<a href="">4</a>--}}
            {{--</section>--}}
            {{--<section>--}}
                {{--<a href="">后一页</a>--}}
                {{--<a href="">尾页</a>--}}
            {{--</section>--}}

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