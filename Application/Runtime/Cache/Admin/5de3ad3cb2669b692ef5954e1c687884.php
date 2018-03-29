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
    </head>
    
    <body>
        <div class="x-body">
            <form class="layui-form"  >
                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>属性名称：
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="username" name="attr_name" required="" lay-verify="required" value="<?php echo $data['attr_name']; ?>"
                               autocomplete="off" class="layui-input">
                    </div>

                </div>

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        属性类型：
                    </label>
                    <div >

                        <input type="radio" value="唯一" name="attr_type"   title="唯一" <?php if($data['attr_type'] == '唯一') echo 'checked="checked"'; ?>    />
                        <input type="radio" value="可选" name="attr_type"  title="可选"  <?php if($data['attr_type'] == '可选') echo 'checked="checked"'; ?>  />

                    </div>

                </div>

                <div class="layui-form-item">
                    <label for="username" class="layui-form-label">
                        <span class="x-red">*</span>属性可选值：
                    </label>
                    <div class="layui-input-block">
                        <textarea rows="6" cols="60" name="attr_option_values"  placeholder="可选属性用英语逗号隔开" class="layui-textarea"><?php echo $data['attr_option_values']; ?></textarea>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">	所属类型：</label>
                    <div class="layui-input-inline">
                        <?php buildSelect('Type', 'type_id', 'id', 'type_name', $data['type_id']); ?>
                    </div>

                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="save" lay-submit="">
                        修改
                    </button>
                </div>
            </form>
        </div>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8">
        </script>
        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;

              //监听提交
              form.on('submit(save)', function(data){
                console.log(data.field);
                //发异步，把数据提交给php
                $.ajax({
                    url:"<?php echo U('edit')?>",
                    data:data.field,
                    dataType:'JSON',
                    type:'POST',
                    success:function(ret)
                    {
                        if(ret.status==1)
                        {
                            layer.alert("保存成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);
                     parent.location.reload();
                        }); 
                        }
                        else
                        {
                            layer.msg(ret.info, {icon: 1});
                        }
                    },
                });
                
                
                
               
                return false;
              });
              
              
            });
        </script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>

</html>