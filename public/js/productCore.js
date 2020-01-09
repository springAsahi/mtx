layui.use(['layer','table','form','jquery'], function(){
    var table = layui.table,
        layer = layui.layer,
        form  = layui.form,
        $ = layui.jquery;
    //渲染表格
    table.render({
        elem: '#list'
        ,url:'/mtx/admin/product/list'
        ,width : 1000
        // ,height: 490
        ,align :"center"
        ,where:{
            product_type : 'core'
        }
        ,page: true //开启分页
        ,cols: [[
            {field:'id', width:"7%", title: 'ID', }
            ,{field:'product_name', width:"15%", title: '产品名称'}
            ,{field:'product_img_url', width:"12%", title: '产品图片',templet(d){
                    return "<img width='100%' src="+ d.product_img_url+">"
                }}
            ,{field:'lowest_order_number', width:"15%", title: '起订量量'}
            ,{field:'price_low', width:"18%", title: '最低价格',templet(d) {
                    return d.price_low / 100;
                }}
            ,{field:'price_high', width:"18%", title: '最高价格',templet(d) {
                    return d.price_high / 100;
                }}
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
            content: '/mtx/public/page/productCore.html',
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
            $.post('/mtx/admin/product/delete/'+obj.data.id,{ },function (res) {
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
            content: '/mtx/public/page/productCore.html',
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