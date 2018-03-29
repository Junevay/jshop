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
              <a><cite>角色管理</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            
            <xblock><button class="layui-btn" onclick="role_add('添加用户','<?php echo U(add)?>','900','500')"><i class="layui-icon">&#xe608;</i>添加</button></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                       
                        <th>
                            ID
                        </th>
                        <th>
                            角色名
                        </th>
                        <th>
                            拥有权限规则
                        </th>
                      
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $v):?>
                    <tr>
                      
                        <td>
                            <?php echo $v['id']?>
                        </td>
                        <td>
                           <?php echo $v['role_name']?>
                        </td>
                        <td >
                             <?php echo $v['pri_name']?>
                        </td>
                       
                        <td class="td-manage">
                            <a title="编辑" href="javascript:;" onclick="role_edit('编辑','<?php echo U(edit,'',FALSE)?>/id/<?php echo $v['id']?>',<?php echo $v['id'];?>,'','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="role_del(this,<?php echo $v['id'];?>)" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

            <div id="page">
                    <div >
        <?php if(preg_match('/\d/', $page)): ?>  
        <tr><td align="right" nowrap="true" colspan="99" height="30"><?php echo $page; ?></td></tr> 
        <?php endif; ?> 
            </div>
            </div>
        </div>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['laydate','element','laypage','layer'], function(){
                $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层

              //以上模块根据需要引入
            });

          
             /*添加*/
            function role_add(title,url,w,h){
                x_admin_show(title,url,w,h);
            }

             
            //编辑
            function role_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            /*删除*/
            function role_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                 $.ajax({
                        url:"<?php echo U('Role/delete','',FALSE)?>/id/"+id,
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