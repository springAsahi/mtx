<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>吉林省帮客跨境电商综合服务平台</title>
    <link rel="stylesheet" href="/mtx/public/css/reset.css">
    <link rel="stylesheet" href="/mtx/public/css/common.css">
    <link rel="stylesheet" href="/mtx/public/css/index.css">
</head>

<body>
<div class="wrap">
    <div class="main__head">
        <div class="head__con">
            <h1><a href=""><img src="/mtx/public/img/logo.jpg"><i>吉林省帮客跨境电商综合服务平台</i></a></h1>
            <ul class="tab__nav">
                <li>
                    <a class="tab__nav-show" href="{{ url('home/index') }}">行业数据</a>
                </li>
                <li>
                    <a href="{{ url('home/product/service') }}">服务类产品</a>
                </li>
                <li>
                    <a href="{{ url('home/product/core') }}">核心产品</a>
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
    <div class="main__title"><img src="/mtx/public/img/data-banner.jpg" alt=""></div>
    <div class="main__con">
        <ul class="box__list">
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/01.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->auto_parts) ? $industryDataOne->auto_parts / 100 : '0' ,2)}}</p>
                </div>
                <section>
                    <h4>汽车配件</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->auto_parts) ? $industryDataTwo->auto_parts / 100 : '0' ,2)}}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/02.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->wooden_furniture) ? $industryDataOne->wooden_furniture / 100 : '0' ,2)}}</p>
                </div>
                <section>
                    <h4>木质家具</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->wooden_furniture) ? $industryDataTwo->wooden_furniture / 100 : '0',2) }}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/03.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->agricultural_by_product) ? $industryDataOne->agricultural_by_product / 100 : '0' ,2)}}</p>
                </div>
                <section>
                    <h4>农副产品</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->agricultural_by_product) ? $industryDataTwo->agricultural_by_product / 100 : '0',2) }}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/04.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->optical_electronics) ? $industryDataOne->optical_electronics / 100 : '0' ,2)}}</p>
                </div>
                <section>
                    <h4>光学电子</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->optical_electronics) ? $industryDataTwo->optical_electronics / 100 : '0' ,2)}}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/05.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->medical_care_apparatus) ? $industryDataOne->medical_care_apparatus / 100 : '0',2) }}</p>
                </div>
                <section>
                    <h4>医疗器械</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->medical_care_apparatus) ? $industryDataTwo->medical_care_apparatus / 100 : '0' ,2)}}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/06.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->craft_gifts) ? $industryDataOne->craft_gifts / 100 : '0',2 )}}</p>
                </div>
                <section>
                    <h4>工艺礼品</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->craft_gifts) ? $industryDataTwo->craft_gifts / 100 : '0' ,2)}}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/07.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->chemical_industry) ? $industryDataOne->chemical_industry  / 100 : '0',2) }}</p>
                </div>
                <section>
                    <h4>化学工业</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->chemical_industry) ? $industryDataTwo->chemical_industry  / 100 : '0',2)  }}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/08.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->light_industry_textile) ?  $industryDataOne->light_industry_textile / 100 : '0' ,2)}}</p>
                </div>
                <section>
                    <h4>轻工纺织</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->light_industry_textile) ?  $industryDataTwo->light_industry_textile / 100 : '0',2 )}}</h5>
                </section>
            </li>
            <li>
                <div class="item__color">
                    <h3>
                        <img src="/mtx/public/img/09.png" alt="">
                    </h3>
                    <p>${{ number_format(isset($industryDataOne->other) ? $industryDataOne->other / 100 : '0' ,2)}}</p>
                </div>
                <section>
                    <h4>其他行业</h4>
                    <h5>长春市跨境电商线上成交总额${{ number_format(isset($industryDataTwo->other) ? $industryDataTwo->other / 100 : '0' ,2)}}</h5>
                </section>
            </li>
        </ul>
        <div class="roll__msg">
            <div class="roll__wrap">
                <ul class="roll__list">
                    @foreach($rollData as $key => $value)
                        <li>{{ $value->deal_time }}，{{ $value->product_name }}，{{ $value->trade_name }}，${{ $value->amount / 100 }}，{{ $value->country }}，{{ $value->corporate_name }}</li>
                    @endforeach
                </ul>
            </div>

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