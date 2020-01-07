<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">--}}
    <title>后台管理</title>
    <link rel="stylesheet" href="//layui.hcwl520.com.cn/layui/css/layui.css?v=201811010202">
    {{--<link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css"  media="all">--}}
    <script src="//layui.hcwl520.com.cn/layui/layui.js?v=201811010202"></script>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
</head>
<style>
    .pagination{display:inline-block;padding-left:0;margin:22px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;line-height:1.6;text-decoration:none;color:#3097d1;background-color:#fff;border:1px solid #ddd;margin-left:-1px}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-bottom-right-radius:4px;border-top-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#216a94;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;background-color:#3097d1;border-color:#3097d1;cursor:default}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;background-color:#fff;border-color:#ddd;cursor:not-allowed}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:6px;border-top-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-bottom-right-radius:6px;border-top-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:3px;border-top-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-bottom-right-radius:3px;}
</style>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        {{--<ul class="layui-nav layui-layout-left">--}}
        {{--<li class="layui-nav-item"><a href="">控制台</a></li>--}}
        {{--<li class="layui-nav-item"><a href="">商品管理</a></li>--}}
        {{--<li class="layui-nav-item"><a href="">用户</a></li>--}}
        {{--<li class="layui-nav-item">--}}
        {{--<a href="javascript:;">其它系统</a>--}}
        {{--<dl class="layui-nav-child">--}}
        {{--<dd><a href="">邮件管理</a></dd>--}}
        {{--<dd><a href="">消息管理</a></dd>--}}
        {{--<dd><a href="">授权管理</a></dd>--}}
        {{--</dl>--}}
        {{--</li>--}}
        {{--</ul>--}}
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    {{--<img src="http://t.cn/RCzsdCq" class="layui-nav-img">--}}

                </a>
                {{--<dl class="layui-nav-child">--}}
                {{--<dd><a href="">基本资料</a></dd>--}}
                {{--<dd><a href="">安全设置</a></dd>--}}
                {{--</dl>--}}
            </li>
            <li class="layui-nav-item"><a href="{{ url('admin/loginOut') }}">退出</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test"  id="left_menu">
                <li class="layui-nav-item"><a href="{{ url('admin/index') }}">首页</a></li>
            </ul>
        </div>
    </div>

    <div class="layui-body" style="left: 300;">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;"> @yield('content')</div>
    </div>

    <div style="width: 100% ;left: 0;" class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
    <script>
        $("#left_menu").find('a').each(function () {
            var left_menu_url = $(this).attr('href');

            if (GetUrlRelativePath() == left_menu_url) {

                var tagName = $(this).parent().prop('tagName');

                if (tagName == 'DD') {
                    $(this).parents('li').addClass('layui-nav-itemed')
                    $(this).parent().addClass('layui-nav-itemed layui-this')
                }
                if (tagName == 'LI') {
                    $(this).parent().addClass('layui-nav-itemed layui-this');
                }
            }
        });
        function GetUrlRelativePath() {
            var url = document.location.toString();
            var arrUrl = url.split("//");

            var start = arrUrl[1].indexOf("/");
            var relUrl = arrUrl[1].substring(start);//stop省略，截取从start开始到结尾的所有字符

            if (relUrl.indexOf("?") != -1) {
                relUrl = relUrl.split("?")[0];
            }
            return "http://{{  $_SERVER['SERVER_NAME'] }}"+relUrl;
        }
    </script>
    <script >
        //JavaScript代码区域
        layui.use(['element','form','jquery'], function(){
            var element = layui.element,
                form = layui.form,
                $ = layui.$;

                //演示动画
            //
                $('.site-doc-icon .layui-anim').on('mouseover', function(){
                    var othis = $(this), anim = othis.data('anim');
                        id = othis['0'].id;
                    //停止循环
                    if(othis.hasClass('layui-anim-loop')){
                        return othis.removeClass(anim);
                    }
                    othis.removeClass(anim);

                    setTimeout(function(){
                        othis.addClass(anim);
                    });
                });

        });
    </script>
    {{--@if(session('prompt'))--}}
        {{--<script>--}}
            {{--layui.use('layer', function(){--}}
                {{--var layer = layui.layer;--}}

                {{--layer.msg("{{ session('prompt') }}");--}}
            {{--});--}}
        {{--</script>--}}
    {{--@endif--}}
</div>
</body>

</html>