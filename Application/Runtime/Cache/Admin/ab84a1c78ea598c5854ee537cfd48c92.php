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
            <form action="" method="post" class="layui-form layui-form-pane">
                <div class="layui-form-item">
                    <label for="name" class="layui-form-label">
                        <span class="x-red">*</span>角色名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="name" name="role_name" required="" lay-verify="required"  value="<?php echo $data['role_name']?>"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">
                        拥有权限
                    </label>
                    <table  class="layui-table layui-input-block">
                        <tbody>
                           
                            <tr>
                               
                                <td>
                                    <div class="layui-input-block">
                               <?php foreach($priData as $k=>$v):?>
                    <?php echo str_repeat('-',8*$v['level']);?>
                    <input  level_id="<?php echo $v['level']?>" type="checkbox" name="pri_id[<?php echo $k?>]" value="<?php echo $v['id']?>" /><?php echo $v['pri_name']?></br>
                    <?php endforeach;?>
                                    </div>
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
               
                <div class="layui-form-item">
                <button class="layui-btn" lay-submit="" lay-filter="add">增加</button>
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
              
              console.log($('input[type=checkbox]'));
              $('input[type=checkbox]').on('click',function(){
        //获取复选框的level_id
        console.log($('input[type=checkbox]'));
        var level_id=tmp_level_id=$(this).attr('level_id');
        //判断是否选中还是取消
        if($(this).prop('checked'))
        {
            //所有子级权限也许选中
            $(this).nextAll(':checkbox').each(function(k,v){
                if($(v).attr('level_id')>level_id)
                    $(v).prop('checked','checked');
                else
                    return false;
            });
            //所有上级权限也选中
            $(this).prevAll(':checkbox').each(function(k,v){
                if($(v).attr('level_id')<tmp_level_id)
                {
                  $(v).prop('checked','checked');
                  tmp_level_id--;//找更上一级
                }
                else
                    return false;
            });
        }
        else
        {
            //所有子级权限都取消
            $(this).nextAll(':checkbox').each(function(k,v){
                if($(v).attr('level_id')>level_id)
                    $(v).removeAttr('checked');
                else
                return false;
            });
        }
        
    });

              //监听提交
              form.on('submit(add)', function(data){
                console.log(data.field);
                //发异步，把数据提交给php
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