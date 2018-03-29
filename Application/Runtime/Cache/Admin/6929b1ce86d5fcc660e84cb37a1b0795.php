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
              <a><cite>订单管理</cite></a>
              <a><cite>订单列表</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form" id="searchForm"  action="/Admin/Order/lst" method="GET"  style="width:80%">
                <div class="layui-form-pane" style="margin-top: 15px;">
                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                           支付状态：
                        </label>
                        <div >
                            <?php $ios = I('get.pay_status'); ?>
                            <input lay-filter="ios" type="radio" name="pay_status" value=""  title="全部"   <?php if($ios == '') echo 'checked="checked"'; ?> />
                            <input lay-filter="ios"  type="radio" name="pay_status" value="是"  title="未支付"   <?php if($ios == '是') echo 'checked="checked"'; ?> />
                            <input lay-filter="ios"  type="radio" name="pay_status" value="否"  title="已支付"  <?php if($ios == '否') echo 'checked="checked"'; ?> />
                        </div>

                    </div>
                </div>
            </form>
            <xblock><button class="layui-btn" onclick="admin_add('添加用户','<?php echo U(add)?>','700','600')"><i class="layui-icon">&#xe608;</i>添加</button></xblock>
            <table class="layui-table">
                <thead>
                    <tr>

                        <th class="goods-page-image">订单号</th>
                        <th class="goods-page-image">订单商品</th>
                        <th class="goods-page-description">收货人</th>
                        <th class="goods-page-quantity">订单金额</th>

                        <th class="goods-page-total" >下单时间</th>
                        <th class="goods-page-price">	订单状态</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $k => $v): ?>
                <tr>
                    <td class="goods-page-name">
                        <strong ><span><?php echo $v['id']; ?></span></strong>
                    </td>

                    <td class="goods-page-image">
                        <strong><?php echo $v['name']; ; ?></strong>
                    </td>
                    <td class="goods-page-description">
                        <strong > <?php echo $v['shr_name']; ?></strong >
                    </td>
                    <td class="goods-page-price">
                        <strong ><span><?php echo $v['total_price']; ?></span>元</strong>
                    </td>


                    <td class="goods-page-total">
                        <strong ><span><?php echo date('Y-m-d H:i:s', $v['addtime']); ?></span></strong>
                    </td>
                    <td class="goods-page-total">
                        <strong ><span>	<?php if($v['pay_status'] == '是'): ?>
                            已支付
                            <?php else: ?>
                           未支付
                            <?php endif; ?></span></strong>
                    </td>


                </tr>
                <?php endforeach; ?>
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


                form.on('radio(ios)', function(data){
                    $('#searchForm').submit();

                });


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




            //编辑
            function admin_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
            /*删除*/
            function admin_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $.ajax({
                        url:"<?php echo U('Order/delete','',FALSE)?>/id/"+id,
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