@extends('admin.layui')
@section('content')
    <fieldset class="layui-elem-field layui-field-title" >
        <legend>企业用户</legend>
    </fieldset>
    <div style="float: left;  margin-left: 5%; ">
        <table id="list"  lay-filter="test"  >

        </table>
    </div>
    <script type="text/html" id="barDemo">
        {{--<a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>--}}
        <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
        {{--<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>--}}
    </script>
    <script src="/mtx/public/js/enterpriseUser.js"></script>
@endsection