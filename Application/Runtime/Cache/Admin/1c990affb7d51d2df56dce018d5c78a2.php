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
              <a><cite>权限管理</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
           
            <xblock><button class="layui-btn" onclick="rule_add('添加权限','<?php echo U(add)?>','600','500')"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px"></span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                       
                        <th>
                            ID
                        </th>
                         <th>
                            权限名称
                        </th>
                        <th>
                            模块名称
                        </th>
                        <th>
                            控制器名称
                        </th>
                        <th>
                           方法名称
                        </th>
                       
                        <th>
                            上级权限id
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
                    <?php foreach($data as $v):?>
                    <tr>
                      
                        <td>
                            <?php echo $v['id']?>
                        </td>
                        <td>
                            <?php echo str_repeat('-', 8*$v['level']).$v['pri_name']; ?>
                        </td>
                        <td>
                           <?php echo $v['module_name']?>
                        </td>
                        <td>
                            <?php echo $v['controller_name']?>
                        </td>
                        <td>
                            <?php echo $v['action_name']?>
                        </td>
                        
                       <td>
                            <?php echo $v['parent_id']?>
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="javascript:;" onclick="rule_edit('编辑','<?php echo U(edit,'',FALSE)?>/id/<?php echo $v['id']?>',<?php echo $v['id']?>,'600','500')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="rule_del(this,<?php echo $v['id']?>)" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

            <div id="page">
                
            </div>
        </div>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['element','laypage','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层
              form = layui.form();//弹出层

              //监听提交
            
            })

              //以上模块根据需要引入

            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }
            
            //添加
             function rule_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }

            //-编辑
            function rule_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            
             /*删除*/
            function rule_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $.ajax({
                        url:"<?php echo U('Privilege/delete','',FALSE)?>/id/"+id,
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