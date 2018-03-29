<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <title>
           商城管理后台
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/Public/Admin/css/x-admin.css" media="all">
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8">
        </script>
    </head>
    
    <body>
        <div class="x-body">
            <form class="layui-form"  id="GoodsFrom" enctype="multipart/form-data" >
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                <div class="layui-tab">
                    <ul class="layui-tab-title">
                        <li class="layui-this">通用信息</li>
                        <li>商品描述</li>
                        <li>商品属性</li>
                        <li>商品相册</li>

                    </ul>

                    <div class="layui-tab-content">

                        <div class="layui-tab-item layui-show">

                            <div class="layui-form-item">

                                <label for="username" class="layui-form-label">
                                    <span class="x-red">*</span>主分类：
                                </label>
                                <div class="layui-input-inline">
                                    <select name="cat_id">
                                        <option value=" ">选择分类</option>
                                        <?php foreach ($catData as $k => $v): if($v['id'] == $data['cat_id']) $select = 'selected="selected"'; else $select = ''; ?>
                                        <option <?php echo $select; ?> value="<?php echo $v['id']; ?>"><?php echo str_repeat('-', 8*$v['level']) . $v['cat_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>

                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    扩展分类：
                                </label>
                                <div class="layui-input-inline" >

                                    <a class="layui-btn" id="addCatSelect"  ><i class="layui-icon">&#xe654;</i>添加一个分类</a>
                                </div>
                                <div class="layui-input-inline"  id="selectList">
                                    <!-- 如果有原分类就循环输出，否则默认输出一个下拉框 -->
                                    <?php if($gcData): ?>
                                    <?php foreach ($gcData as $k1 => $v1): ?>

                                        <select name="ext_cat_id[]" class="selectItem">
                                            <option value=" ">选择分类</option>
                                            <?php foreach ($catData as $k => $v): if($v['id'] == $v1['cat_id']) $select = 'selected="selected"'; else $select = ''; ?>
                                            <option <?php echo $select; ?> value="<?php echo $v['id']; ?>"><?php echo str_repeat('-', 8*$v['level']) . $v['cat_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    <?php endforeach; ?>
                                    <?php else: ?>

                                        <select name="ext_cat_id[]" class="selectItem">
                                            <option value="">选择分类</option>
                                            <?php foreach ($catData as $k => $v): ?>
                                            <option <?php echo $select; ?> value="<?php echo $v['id']; ?>"><?php echo str_repeat('-', 8*$v['level']) . $v['cat_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    <?php endif; ?>

                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    所在品牌：
                                </label>
                                <div class="layui-input-inline">
                                    <?php buildSelect('brand', 'brand_id', 'id', 'brand_name', $data['brand_id']); ?>
                                </div>

                            </div>

                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    <span class="x-red">*</span>  商品名称：
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text" name="goods_name"  required="" lay-verify="required" value="<?php echo $data['goods_name'];?>"
                                           autocomplete="off" class="layui-input">
                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    logo：
                                </label>
                                <div class="layui-input-inline">
                                    <?php showImage($data['mid_logo']); ?><br />
                                    <input type="file" name="logo"  >
                                </div>

                            </div>

                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    <span class="x-red">*</span>市场售价：
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text" name="market_price" required="" lay-verify="required" placeholder="$" value="<?php echo $data['market_price']; ?>"
                                           autocomplete="off" class="layui-input">
                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    <span class="x-red">*</span>本店售价：
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text" name="shop_price"  required="" lay-verify="required" placeholder="$" value="<?php echo $data['shop_price']; ?>"
                                           autocomplete="off" class="layui-input">
                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    是否上架：
                                </label>
                                <div class="layui-input-block">

                                    <input type="radio" name="is_on_sale" value="是"   title="是"  <?php if($data['is_on_sale'] == '是') echo 'checked="checked"'; ?>  />
                                    <input type="radio" name="is_on_sale" value="否"  title="否"   <?php if($data['is_on_sale'] == '否') echo 'checked="checked"'; ?> />

                                </div>

                            </div>
                            <div class="layui-form-item">
                                <div class="layui-inline">
                                    <label class="layui-form-label">促销价格：</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="promote_price" placeholder="$" required="" lay-verify="required" value="<?php echo $data['promote_price']; ?>"
                                               autocomplete="off" class="layui-input">
                                    </div>
                                    <label class="layui-form-label">促销时间：</label>
                                    <div class="layui-input-inline" style="width: 140px;">
                                        <input type="text" id="promote_start_date" name="promote_start_date"    autocomplete="off" class="layui-input" value="<?php echo $data['promote_start_date']; ?>">
                                    </div>
                                    <div class="layui-form-mid">-</div>
                                    <div class="layui-input-inline" style="width: 140px;">
                                        <input type="text" id="promote_end_date" name="promote_end_date"   autocomplete="off" class="layui-input" value="<?php echo $data['promote_end_date']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    推荐到楼层:
                                </label>
                                <div class="layui-input-block">

                                    <input type="radio" name="is_floor" value="是" title="是" <?php if($data['is_floor'] == '是') echo 'checked="checked"'; ?> />
                                    <input type="radio" name="is_floor" value="否" title="否" <?php if($data['is_floor'] == '否') echo 'checked="checked"'; ?> />

                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    是否新品：
                                </label>
                                <div class="layui-input-block">

                                    <input type="radio" name="is_new" value="是" title="是"  <?php if($data['is_new'] == '是') echo 'checked="checked"'; ?>/>
                                    <input type="radio" name="is_new" value="否" title="否" <?php if($data['is_new'] == '否') echo 'checked="checked"'; ?>/>


                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    是否精品：
                                </label>
                                <div >
                                    <input type="radio" name="is_best" value="是" title="是"  <?php if($data['is_best'] == '是') echo 'checked="checked"'; ?>/>
                                    <input type="radio" name="is_best" value="否" title="否" <?php if($data['is_best'] == '否') echo 'checked="checked"'; ?> />


                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    是否热卖：
                                </label>
                                <div >

                                    <input type="radio" name="is_hot" value="是" title="是" <?php if($data['is_hot'] == '是') echo 'checked="checked"'; ?> />
                                    <input type="radio" name="is_hot" value="否" title="否" <?php if($data['is_hot'] == '否') echo 'checked="checked"'; ?> />


                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="username" class="layui-form-label">
                                    排序：
                                </label>
                                <div class="layui-input-inline">
                                    <input type="text" name="sort_num" value="<?php echo $data['sort_num']; ?>"   required="" lay-verify="required"
                                           autocomplete="off" class="layui-input">
                                </div>

                            </div>
                            <div class="layui-form-item">
                                <label for="L_repass" class="layui-form-label">
                                </label>
                                <button  class="layui-btn" lay-filter="save" lay-submit="">
                                   修改
                                </button>
                            </div>
                        </div>
                        <div class="layui-tab-item">




                            <script id="demo-add" name="goods_desc" type="text/plain"></script>
                            <button  class="layui-btn" lay-filter="save" lay-submit="">
                               修改
                            </button>
                        </div>


                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <label class="layui-form-label">	商品类型：</label>
                                <div class="layui-input-inline">
                                    <?php buildSelect('Type', 'type_id', 'id', 'type_name', I('get.type_id'),'selectChange'); ?>
                                </div>

                            </div>
                            <ul id="attr_list">
                                <!-- 循环所有原属性值 -->
                                <?php
 $attrId = array(); foreach ($gaData as $k => $v): if(in_array($v['attr_id'], $attrId)) $opt = '-'; else { $opt = '+'; $attrId[] = $v['attr_id']; } ?>
                                <div class="layui-form-item">
                                    <input type="hidden" name="goods_attr_id[]" value="<?php echo $v['id']; ?>" />
                                    <?php if($v['attr_type'] == '可选'): ?>
                                    <a class="layui-btn " onclick="addAttrSelect(this)" >[<?php echo $opt; ?>]</a>
                                    <?php endif; ?>
                                    <label for="username" class="layui-form-label"> <?php echo $v['attr_name']; ?>:</label>
                                    <?php if($v['attr_option_values']): $attr = explode(',', $v['attr_option_values']); ?>
                                    <div class="layui-input-inline">
                                    <select name="attr_value[<?php echo $v['attr_id']; ?>][]">
                                        <option value="">请选择</option>
                                        <?php foreach ($attr as $k1 => $v1): if($v1 == $v['attr_value']) $select = 'selected="selected"'; else $select = ''; ?>
                                        <option <?php echo $select; ?> value="<?php echo $v1; ?>"><?php echo $v1; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                        </div>
                                    <?php else: ?>
                                    <div class="layui-input-block"> <input  class="layui-input" type="text" name="attr_value[<?php echo $v['attr_id']; ?>][]" value="<?php echo $v['attr_value']; ?>" /></div>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach; ?>
                            </ul>
                            <div class="layui-form-item">
                                <label for="L_repass" class="layui-form-label">
                                </label>
                                <button  class="layui-btn" lay-filter="save" lay-submit="">
                                   修改
                                </button>
                                <div style="margin-bottom: 150px;height: 1px;"></div>
                            </div>
                        </div>

                        <div class="layui-tab-item">
                            <a class="layui-btn" id="btn_add_pic" ><i class="layui-icon">&#xe654;</i>添加一张</a>
                            <hr />
                            <ul id="ul_pic_list"></ul>
                            <hr />
                            <ul id="old_pic_list">
                                <?php foreach ($gpData as $k => $v): ?>
                                <li>
                                    <a pic_id="<?php echo $v['id']; ?>" class="btn_del_pic"  onclick="delOldPic()"   class="layui-btn" value="删除" ></a><br />
                                    <?php showImage($v['mid_pic'], 150); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <button  class="layui-btn" lay-filter="save" lay-submit="">
                               修改
                            </button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
        <!-- 配置文件 -->
        <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.config.js"></script>
        <!-- 编辑器源码文件 -->
        <script type="text/javascript" src="/Public/Admin/js/ueditor/ueditor.all.min.js"></script>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8">
        </script>
        <script>
            function addAttrSelect(a)
            {
                // $(a)  --> 把a转换成jquery中的对象，然后才能调用jquery中的方法
                // 先获取所在的li
                var li = $(a).parent();
                if($(a).text() == '[+]')
                {
                    var newLi = li.clone();
                    // +变-
                    newLi.find("a").text('[-]');
                    // 新的放在li后面
                    li.after(newLi);
                }
                else
                    li.remove();

                form.render();
            }

            // 删除图片
            function  delOldPic (){
                if(confirm('确定要删除吗？'))
                {
                    // 先选中删除按钮所在的li标签
                    var li = $(this).parent();
                    // 从这个按钮上获取pic_id属性
                    var pid = $(this).attr("pic_id");
                    /**
                     php中的大U函数三个参数：
                     U('ajaxDelPic')                    ==>   /index.php/Admin/Goods/ajaxDelPic.html
                     U('ajaxDelPic?id=1')                  ==>   /index.php/Admin/Goods/ajaxDelPic/id/1.html
                     U('ajaxDelPic', array('id'=>1))      ==>   /index.php/Admin/Goods/ajaxDelPic/id/1.html
                     U('ajaxDelPic', array('id'=>1), FALSE)      ==>   /index.php/Admin/Goods/ajaxDelPic/id/1
                     **/
                    $.ajax({
                        type : "GET",
                        url : "<?php echo U('ajaxDelPic', '', FALSE); ?>/picid/"+pid,
                        success : function(data)
                        {
                            // 把图片从页面中删除掉
                            li.remove();
                        }
                    });
                }
            };
            layui.use(['laydate','element','laypage','layer','form'], function(){
                $ = layui.jquery;//jquery
                laydate = layui.laydate;//日期插件
                lement = layui.element();//面包导航
                laypage = layui.laypage;//分页
                layer = layui.layer;//弹出层
                form = layui.form();
                //自定义验证规则
                form.verify({
                    nikename: function(value){
                        if(value.length < 5){
                            return '昵称至少得5个字符啊';
                        }
                    }
                    ,pass: [/(.+){6,12}$/, '密码必须6到12位']
                    ,repass: function(value){
                        if($('#L_pass').val()!=$('#L_repass').val()){
                            return '两次密码不一致';
                        }
                    }
                });

                //监听提交
                form.on('submit(save)', function(data){

                    var formData = new FormData($("#GoodsFrom")[0]);



                    $.ajax({
                        url:"<?php echo U('edit')?>",
                        data:formData,
                        dataType:'JSON',
                        type:'POST',
                        contentType: false, //必须
                        processData: false, //必须
                        success:function(ret)
                        {
                            if(ret.status==1)
                            {
                                layer.alert("修改成功", {icon: 6},function () {
                                    // 获得frame索引
                                    var index = parent.layer.getFrameIndex(window.name);
                                    //关闭当前frame
                                    parent.layer.close(index);
                                    parent.location.reload()
                                });
                            }
                            else
                            {

                                layer.alert(ret.info, {icon: 6},function () {

                                });
                            }
                        },

                    });
                    //发异步，把数据提交给php

                    return false;
                });

                form.on('select(selectChange)', function(data){

                    console.log(data);
                    // 获取当前选中的类型的id
                    var typeId = data.value;
                    // 如果选择了一个类型就执行AJAX取属性
                    if(typeId > 0)
                    {
                        // 根据类型ID执行AJAX取出这个类型下的属性，并获取返回的JSON数据
                        $.ajax({
                            type : "GET",
                            url : "<?php echo U('ajaxGetAttr', '', FALSE); ?>/type_id/"+typeId,
                            dataType : "json",
                            success : function(data)
                            {
                                /** 把服务器返回的属性循环拼成一个LI字符串，并显示在页面中 **/
                                var li = "";
                                // 循环每个属性
                                $(data).each(function(k,v){
                                    li += '<div class="layui-form-item">';

                                    // 如果这个属性类型是可选的就有一个+
                                    if(v.attr_type == '可选')
                                        li += '<a class="layui-btn " onclick="addAttrSelect(this)" >[+]</a>';
                                    // 属性名称
                                    li +=' <label for="username" class="layui-form-label">'+v.attr_name + ' :</label> ';
                                    // 如果属性有可选值就做下拉框，否则做文本框
                                    if(v.attr_option_values == "")
                                        li += ' <div class="layui-input-block"><input type="text" name="attr_value['+v.id+'][]" class="layui-input" /></div>';
                                    else
                                    {
                                        li += '  <div class="layui-input-inline"><select name="attr_value['+v.id+'][]"><option value="">请选择...</option>';
                                        // 把可选值根据,转化成数组
                                        var _attr = v.attr_option_values.split(',');
                                        // 循环每个值制作option
                                        for(var i=0; i<_attr.length; i++)
                                        {
                                            li += '<option value="'+_attr[i]+'">';
                                            li += _attr[i];
                                            li += '</option>';
                                        }
                                        li += '</select></div>';
                                    }

                                    li += '</div>'
                                });
                                // 把拼好的LI放到 页面中
                                $("#attr_list").html(li);
                                form.render();
                            }
                        });
                    }
                    else
                        $("#attr_list").html("");  // 如果选的是请 选择就直接清空
                });

                $('#addCatSelect').click(function () {
                    console.log($('.selectItem').eq(0).clone());
                    var li=$('.selectItem').eq(0).clone();
                    li.find('option:selected').removeAttr('selected');
                    $('#selectList').append(li);

                    form.render();
                });



//修改一张
                $("#btn_add_pic").click(function(){
                    var file = '<li><input type="file" name="pic[]" /></li>';
                    $("#ul_pic_list").append(file);
                });

                var ue_add = UE.getEditor('demo-add', {
                    autoHeightEnabled: true,

                    autoFloatEnabled: true,

                    initialFrameWidth: 950,

                    initialFrameHeight:483
                    ,toolbars: [[

                        'undo', 'redo' , '|',

                        'bold', 'forecolor' , 'removeformat', 'autotypeset', 'pasteplain' , '|', '|',

                        'justifyleft', 'justifycenter' , '|',

                        'link', 'unlink' ,  '|',

                        'insertimage', 'insertvideo' , '|',

                        'wordimage', '|' ,

                        'inserttable', 'insertrow' , 'deleterow', 'insertcol', 'deletecol' , 'mergecells', 'splittocells', '|' , 'mybtn1','mydialog1'

                    ]]

                });
                ue_add.addListener("ready", function () {

                    ue_add.setContent('<?php echo ($data['goods_desc']); ?>');

                });


                var start = {
                    istime: true,
                    format: 'YYYY-MM-DD hh:mm',
                    max: '2099-06-16 23:59:59',
                    istoday: true,
                    choose: function (datas) {
                        end.min = datas; //开始日选好后，重置结束日的最小日期
                    }
                };

                var end = {
                    istime: true,
                    format: 'YYYY-MM-DD hh:mm',
                    max: '2099-06-16 23:59:59',
                    istoday: true,
                    choose: function (datas) {
                        start.max = datas; //结束日选好后，重置开始日的最大日期
                    }
                };

                document.getElementById('promote_start_date').onclick = function () {
                    start.elem = this;
                    laydate(start);
                };
                document.getElementById('promote_end_date').onclick = function () {
                    end.elem = this;
                    laydate(end);
                };


            });
        </script>

    </body>

</html>