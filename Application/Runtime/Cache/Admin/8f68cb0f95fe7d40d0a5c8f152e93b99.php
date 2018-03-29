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
                    <label for="role" class="layui-form-label">
                        <span class="x-red">*</span>上级权限
                    </label>
                    <div class="layui-input-inline">
                      <select name="parent_id">
                        <option value="0">顶级权限</option>
                        <?php foreach($parentData as $v):?>
                        <option value="<?php echo $v['id']?>"><?php echo str_repeat('-', 8*$v['level']).$v['pri_name']; ?></option>
                       <?php endforeach;?>
                      </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>权限名称
                    </label>
                    <div class="layui-input-inline">
                      <input type="text" id="pri_name" name="pri_name" required="" lay-verify="required"
                        autocomplete="off" class="layui-input">
                    </div>        
                </div>
                 <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>模块名称
                    </label>
                    <div class="layui-input-inline">
                      <input type="text" id="module_name" name="module_name"  
                        autocomplete="off" class="layui-input">
                    </div>        
                </div>
                 <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>控制器名称
                    </label>
                    <div class="layui-input-inline">
                      <input type="text" id="controller_name" name="controller_name" required="" 
                        autocomplete="off" class="layui-input">
                    </div>        
                </div>
                 <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>方法名称
                    </label>
                    <div class="layui-input-inline">
                         <input type="text" id="action_name" name="action_name" required="" 
                        autocomplete="off" class="layui-input">
                    </div>        
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        增加
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
              form.on('submit(add)', function(data){
                console.log(data.field);
                
                $.ajax({
                    url:"<?php echo U('add')?>",
                    data:data.field,
                    dataType:'JSON',
                    type:'POST',
                    success:function(ret)
                    {
                       if(ret.status==1)
                       {
                             layer.alert("增加成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);
                    parent.location.reload()
                    });
                        }
                        else
                        {
                    
                             layer.alert("ret.info", {icon: 6},function () {
             
                       });
                        }
                    },
            
                });
                //发异步，把数据提交给php
              
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