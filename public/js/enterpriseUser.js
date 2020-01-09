layui.use(['layer','table','form','jquery'], function(){
    var table = layui.table,
        layer = layui.layer,
        form  = layui.form,
        $ = layui.jquery;
    //渲染表格
    table.render({
        elem: '#list'
        ,url:'/mtx/admin/enterpriseUser/list'
        ,width : 1000
        // ,height: 490
        ,align :"center"
        ,page: true //开启分页

        ,cols: [[
            {field:'id', width:"7%", title: 'ID', }
            ,{field:'username', width:"15%", title: '用户名'}
            ,{field:'enterprise_name', width:"20%", title: '企业名称'}
            ,{field:'real_name', width:"10%", title: '姓名'}
            ,{field:'phone', width:"15%", title: '电话'}
            ,{field:'enterprise_duty', width:"23%", title: '企业职务'}
            ,{field: 'right',toolbar: '#barDemo',width:"10%",title: '操作', }
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
            // case 'del':
            //     del(obj);
            //     break;
            case 'edit':
                edit(obj);
                break;
        };
    });
    // //添加
    // $("#add").click(function () {
    //     layer.open({
    //         type: 2,
    //         title:"添加",
    //         area: ['400px', '450px'],
    //         content: '/JQvote/public/html/voteAdmin/add.html',
    //         closeBtn:1 ,
    //         btn:['保存','取消'],
    //         success: function(layero, index){
    //
    //         },
    //         yes:function (index,layero) {
    //             var body = layer.getChildFrame('body', index);
    //             var username  = body.find("#username").val();
    //             var unit_post = body.find("#unit_post").val();
    //             var head_portrait = body.find("#head_portrait").val();
    //             var brief_introduction = body.find("#brief_introduction").val();
    //             if (!username  || !head_portrait || !brief_introduction){
    //                 layer.msg("姓名，头像，个人简历均不能为空");
    //                 return false;
    //             }
    //             $.post("/JQvote/admin/vote/save",{
    //                 username:username,
    //                 unit_post:unit_post,
    //                 head_portrait:head_portrait,
    //                 brief_introduction:brief_introduction
    //             },function (res) {
    //                 if (res.status){
    //                     layer.msg(res.msg);
    //                     layer.close(index);

    //                 } else {
    //                     layer.msg(res.msg);
    //                 }
    //             })
    //         }
    //     });
    // })
    // //查看
    // function detail(obj){
    //     layer.open({
    //         type: 2,
    //         title:"查看",
    //         area: ['400px', '450px'],
    //         content: '/JQvote/public/html/voteAdmin/detail.html',
    //         closeBtn:1 ,
    //         btn:['确定'],
    //         success: function(layero, index){
    //             var body = layer.getChildFrame('body', index);
    //             body.find("#username").text(obj.data.username);
    //             body.find("#unit_post").text(obj.data.unit_post);
    //             body.find("#head_portrait").attr('src',obj.data.head_portrait);
    //             body.find("#brief_introduction").text(obj.data.brief_introduction);
    //             body.find("#created").text(obj.data.created_at);
    //         },
    //         yes:function (index,layero) {
    //             layer.close(index);
    //         }
    //     });
    // }
    // //删除
    // function del(obj){
    //     layer.confirm('真的删除行么', function(index){
    //         $.post('/JQvote/admin/vote/del',{id:obj.data.id},function (res) {
    //             if (res.status){
    //                 obj.del();//删除当前行
    //                 layer.close(index);//关闭当前子页面
    //                 layer.msg(res.msg);//弹出提示
    //             }else{
    //                 layer.close(index);//关闭当前子页面
    //                 layer.msg(res.msg);//弹出提示
    //             }
    //         });
    //     });
    // }
    //编辑
    function edit(obj){
        layer.open({
            type: 2,
            title:"修改",
            area: ['400px', '300px'],
            content: '/mtx/public/page/enterpriseUser.html',
            closeBtn:1 ,
            btn:['取消'],
            success: function(layero, index){
                var body = layer.getChildFrame('body', index);
                var iframe = window['layui-layer-iframe' + index];
                iframe.edit(obj.data);
            },
            yes:function (index,layero) {
                var body = layer.getChildFrame('body', index);
                layer.close(index);
            }
        });
    }
    //查看图片
    $("body").on('click','#head_portrait',function () {
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