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
              <a><cite>商品管理</cite></a>
              <a><cite>库存量管理</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;margin-right:10px;float:right"  href="<?php echo U('Goods/lst')?>" >商品列表</a>

        </div>
        <div class="x-body">
            <form method="POST" action="/Admin/Goods/goods_number/id/46.html" class="layui-form"  >


            <table class="layui-table">
                <thead>
                    <tr>

                        <!-- 循环输出属性 -->
                        <?php foreach ($gaData as $k => $v): ?>
                        <th><?php echo $k; ?></th>
                        <?php endforeach; ?>

                        <th width="120">库存量</th>
                        <th width="60">操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($gnData): ?>
                <?php foreach ($gnData as $k0 => $v0): ?>
                <tr class="tron">
                    <?php
 $gaCount = count($gaData); foreach ($gaData as $k => $v): ?>
                    <td>
                        <select name="goods_attr_id[]">
                            <option value=" ">请选择</option>
                            <?php foreach ($v as $k1 => $v1): $_attr = explode(',', $v0['goods_attr_id']); if(in_array($v1['id'], $_attr)) $select = 'selected="selected"'; else $select = ''; ?>
                            <option <?php echo $select; ?> value="<?php echo $v1['id']; ?>"><?php echo $v1['attr_value']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <?php endforeach; ?>
                    <td><input  class="layui-input"  type="text" name="goods_number[]" value="<?php echo $v0['goods_number']; ?>" /></td>
                    <td><a onclick="addNewTr(this);"  class="layui-btn"    ><?php echo $k0==0?'+':'-'; ?></a></td>
                </tr>
                <?php endforeach; ?>
                <?php else: ?>
                <tr class="tron">
                    <?php
 $gaCount = count($gaData); foreach ($gaData as $k => $v): ?>
                    <td>
                        <select name="goods_attr_id[]">
                            <option value=" ">请选择</option>
                            <?php foreach ($v as $k1 => $v1): ?>
                            <option value="<?php echo $v1['id']; ?>"><?php echo $v1['attr_value']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <?php endforeach; ?>
                    <td><input class="layui-input"  type="text" name="goods_number[]" value="" /></td>
                    <td><a class="layui-btn" onclick="addNewTr(this);"   >+</a></td>
                </tr>
                <?php endif; ?>
                </tbody>
                <tr id="submit">
                    <td align="center" colspan="<?php echo $gaCount+2; ?>"><input type="submit" value="提交" /></td>
                </tr>
            </table>

            <div >
        <?php if(preg_match('/\d/', $page)): ?>  
        <tr><td align="right" nowrap="true" colspan="99" height="30"><?php echo $page; ?></td></tr> 
        <?php endif; ?> 
            </div>
            </form>
        </div>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8"></script>

        <script>
            function addNewTr(btn)
            {
                var tr = $(btn).parent().parent();
                if($(btn).text() == "+")
                {
                    var newTr = tr.clone();
                    newTr.find("a").text("-");
                    $("#submit").before(newTr);
                }
                else
                    tr.remove();
                form.render();
            }

            layui.use(['laydate','element','laypage','layer','form'], function(){
                $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              laypage = layui.laypage;//分页
              layer = layui.layer;//弹出层
                form = layui.form();
              //以上模块根据需要引入
                //监听提交


           
                });

              
           
              
            
              
          




              
  
          
 
  
            
            </script>

    </body>
</html>