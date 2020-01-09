@extends('admin.layui')
@section('content')
    <fieldset class="layui-elem-field layui-field-title" >
        <legend>服务类产品列表</legend>
    </fieldset>
    <button type="button" style="float: left;margin-top: 10px;margin-left: 5%; " class="layui-btn layui-btn-normal" >新建产品</button>
    <div style="float: left;  margin-left: 5%; ">
        <table id="list"  lay-filter="test"  >

        </table>
    </div>
    <script type="text/html" id="barDemo">
        {{--<a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>--}}
        <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
    </script>
    <script src="/mtx/public/js/product.js"></script>
@endsection