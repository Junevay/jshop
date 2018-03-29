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
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>管理员管理</cite></a>
              <a><cite>管理员列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right;margin-right: 10px"  href="<?php echo U('Type/lst')?>" >类型列表</a>

        </div>
        <div class="x-body">
            <form class="layui-form"  action="/Admin/Attribute/lst" method="GET"  style="width:80%">
                <div  class="layui-form-pane" style="margin-top: 15px;">

                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            属性名称：
                        </label>
                        <div class="layui-input-inline">
                            <input type="text" name="attr_name" size="30" value="<?php echo I('get.attr_name'); ?>"   placeholder="" autocomplete="off" class="layui-input">
                        </div>

                    </div>
                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            属性类型：
                        </label>
                        <div >
                            <input type="radio" value="-1" name="attr_type"  title="全部" <?php if(I('get.attr_type', -1) == -1) echo 'checked="checked"'; ?> />
                            <input type="radio" value="唯一" name="attr_type"   title="唯一"  <?php if(I('get.attr_type', -1) == '唯一') echo 'checked="checked"'; ?> />
                            <input type="radio" value="可选" name="attr_type"  title="可选"   <?php if(I('get.attr_type', -1) == '可选') echo 'checked="checked"'; ?> />

                        </div>

                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">	所属类型：</label>
                        <div class="layui-input-inline">
                            <?php buildSelect('Type', 'type_id', 'id', 'type_name', I('get.type_id')); ?>
                        </div>
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                </div>



                    </div>
            </form>
            <xblock><button class="layui-btn" onclick="admin_add('添加属性','<?php echo U(add)?>','700','600')"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px">共有数据：<?php echo $count;?> 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>

                        <th >属性名称</th>
                        <th >属性类型</th>
                        <th >属性可选值</th>
                        <th >所属类型Id</th>
                        <th width="60">操作</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($data as $v):?>
                    <tr>

                        <td><?php echo $v['attr_name']; ?></td>
                        <td><?php echo $v['attr_type']; ?></td>
                        <td><?php echo $v['attr_option_values']; ?></td>
                        <td><?php echo $v['type_id']; ?></td>
                       
                       
                        <td class="td-manage">
                          
                            <a title="编辑" href="javascript:;" onclick="admin_edit('编辑','<?php echo U(edit,'',FALSE)?>/id/<?php echo $v['id']?>',<?php echo $v['id']?>,'','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>

                            <a title="删除" href="javascript:;" onclick="admin_del(this,<?php echo $v['id']?>)" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>

                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

            <div >
        <?php if(preg_match('/\d/', $page)): ?>  
        <tr><td align="right" nowrap="true" colspan="99" height="30"><?php echo $page; ?></td></tr> 
        <?php endif; ?> 
            </div>
        </div>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['laydate','element','laypage','layer','form'], function(){
                $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层
                form = layui.form();
              //以上模块根据需要引入

            
           
                });

              
           
              
            
              
          

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                     console.log(index);
                    layer.msg('删除成功', {icon: 1});
                });
             }
             /*添加*/
            function admin_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }

             /*停用*/
            function admin_stop(obj,id){
                layer.confirm('确认要停用吗？',function(index){
                    //发异步把属性状态进行更改
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
                    $(obj).remove();
                    layer.msg('已停用!',{icon: 5,time:1000});
                });
            }

            /*启用*/
            function admin_start(obj,id){
                layer.confirm('确认要启用吗？',function(index){
                    //发异步把属性状态进行更改
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="admin_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!',{icon: 6,time:1000});
                });
            }
            //编辑
            function admin_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            /*删除*/
            function admin_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $.ajax({
                        url:"<?php echo U('Attribute/delete','',FALSE)?>/id/"+id,
                        type:'GET',
                        dataType:'JSON',
                        success:function(ret)
                        {
                            if(ret.status==1)
                            {
                                   $(obj).parents("tr").remove();
                              layer.msg('已删除!',{icon:1,time:1000});
                            }
                            else
                            {
                                layer.msg(ret.info,{icon:1,time:1000});
                            }
                        },
                    });
                 
                });
            }
              
  
          
 
  
            
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