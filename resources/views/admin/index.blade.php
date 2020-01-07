@extends('admin.layui')
@section('content')
    <form class="layui-form">
        <div class="layui-form-item">
            <label class="layui-form-label">汽配</label>
            <div class="layui-input-block">
                <input type="text" name="auto_parts" value="{{ isset($data->auto_parts) ? $data->auto_parts/ 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入汽配" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">木制家具</label>
            <div class="layui-input-block">
                <input type="text" name="wooden_furniture" value="{{ isset($data->wooden_furniture) ? $data->wooden_furniture / 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入木制家具" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">农副产品</label>
            <div class="layui-input-block">
                <input type="text" name="agricultural_by_product" value="{{ isset($data->agricultural_by_product) ? $data->agricultural_by_product / 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入农副产品" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">光学电子</label>
            <div class="layui-input-block">
                <input type="text" name="optical_electronics" value="{{ isset($data->optical_electronics) ? $data->optical_electronics / 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入光学电子" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">医疗器械</label>
            <div class="layui-input-block">
                <input type="text" name="medical_care_apparatus" value="{{ isset($data->medical_care_apparatus) ? $data->medical_care_apparatus / 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入医疗器械" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">工艺礼品</label>
            <div class="layui-input-block">
                <input type="text" name="craft_gifts" required value="{{ isset($data->craft_gifts) ? $data->craft_gifts / 100 : 0 }}" style="width: 300px"  lay-verify="required|number" placeholder="请输入工艺礼品" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">化学工业</label>
            <div class="layui-input-block">
                <input type="text" name="chemical_industry" value="{{ isset($data->chemical_industry) ? $data->chemical_industry / 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入化学工业" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">轻工纺织</label>
            <div class="layui-input-block">
                <input type="text" name="light_industry_textile" value="{{ isset($data->light_industry_textile) ? $data->light_industry_textile  / 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入轻工纺织" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">其它</label>
            <div class="layui-input-block">
                <input type="text" name="other" value="{{ isset($data->other) ?  $data->other / 100 : 0 }}" required style="width: 300px"  lay-verify="required|number" placeholder="请输入其它" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>

    <script>
        //Demo
        layui.use('form', function(){
            var form = layui.form;
            var $    = layui.jquery;
            //监听提交
            form.on('submit(formDemo)', function(data){
                var values = data.field;
                $.each(values,function(i,val) {
                    values[i] = val * 100;
                });
                $.post("/mtx/admin/industry/update",{values},function (res) {
                    layer.msg(res.msg);
                })
                return false;

            });
        });
    </script>
@endsection