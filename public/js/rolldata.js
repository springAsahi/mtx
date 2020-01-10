layui.use(['layer','table','form','jquery','laydate'], function(){
    var table = layui.table,
        layer = layui.layer,
        form  = layui.form,
        laydate = layui.laydate,
        $ = layui.jquery;
    //常规用法
    laydate.render({
        elem: '#deal_time'
    });
    //渲染表格
    table.render({
        elem: '#list'
        ,url:'/mtx/admin/roll/list'
        ,width : 1000
        // ,height: 490
        ,align :"center"
        ,page: true //开启分页
        ,cols: [[
            {field:'id', width:"7%", title: 'ID', }
            ,{field:'corporate_name', width:"17%", title: '公司名称'}
            ,{field:'product_name', width:"16%", title: '产品名称'}
            ,{field:'trade_name', width:"17%", title: '行业名称'}
            ,{field:'country', width:"18%", title: '出口目的地国家'}
            ,{field:'amount', width:"10%", title: '金额'}
            // ,{field:'price_high', width:"23%", title: '最高价格'}
            ,{field: 'right',toolbar: '#barDemo',width:"15%",title: '操作', }
        ]]
        ,parseData: function(res){ //res 即为原始返回的数据
            return {
                "code": 0, //解析接口状态
                "msg" : "", //解析提示文本
                "count": res.data.total, //解析数据长度
                "data": res.data.data //解析数据列表
            };
        }
    });
    //监听事件
    table.on('tool(test)', function(obj){
        switch(obj.event){
            // case 'detail':
            //     detail(obj);
            //     break;
            case 'del':
                del(obj);
                break;
            case 'edit':
                edit(obj);
                break;
        };
    });
    //添加
    $("button[type=button]").click(function () {
        layer.open({
            type: 2,
            title:"添加",
            area: ['80%', '100%'],
            content: '/mtx/public/page/rolldata.html',
            closeBtn:1 ,
            btn:['取消'],
            success: function(layero, index){
                var iframe = window['layui-layer-iframe' + index];
                iframe.status('add');
            },
            yes:function (index,layero) {
                var body = layer.getChildFrame('body', index);
                layer.close(index);
            }
        });
    })
    //删除
    function del(obj){
        layer.confirm('真的删除行么', function(index){
            $.post('/mtx/admin/roll/delete/'+obj.data.id,{ },function (res) {
                if (res.status){
                    obj.del();//删除当前行
                    layer.close(index);//关闭当前子页面
                    layer.msg(res.msg);//弹出提示
                }else{
                    layer.close(index);//关闭当前子页面
                    layer.msg(res.msg);//弹出提示
                }
            });
        });
    }
    //编辑
    function edit(obj){
        layer.open({
            type: 2,
            title:"修改",
            area: ['80%', '100%'],
            content: '/mtx/public/page/rolldata.html',
            closeBtn:1 ,
            btn:['取消'],
            success: function(layero, index){
                var body = layer.getChildFrame('body', index);
                var iframe = window['layui-layer-iframe' + index];
                iframe.status('edit');
                iframe.edit(obj.data);

            },
            yes:function (index,layero) {
                var body = layer.getChildFrame('body', index);
                layer.close(index);
            }
        });
    }
    //查看图片
    $("body").on('click','img',function () {
        var src = $(this).attr('src');
        layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            skin: 'layui-layer-nobg', //没有背景色
            shadeClose: true,
            area: ['300px'],
            content: `<div><img style="width:100%;" src="${src}" /></div>` //这里content是一个普通的String
        });
    });
})