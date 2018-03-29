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
        </div>
        <div class="x-body">
            <form class="layui-form"  method="GET" id="searchForm" style="width:80%">
                <div  class="layui-form-pane" style="margin-top: 15px;">

                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            商品名称：
                        </label>
                        <div class="layui-input-inline">
                            <input  value="<?php echo I('get.gn'); ?>" type="text" name="gn"  placeholder="" autocomplete="off" class="layui-input">
                        </div>

                    </div>





                    <div class="layui-form-item">
                        <label class="layui-form-label">	分　　类：</label>
                        <div class="layui-input-inline">
                            <?php
 $catId = I('get.cat_id'); ?>
                            <select name="cat_id">
                                <option value=" ">选择分类</option>
                                <?php foreach ($catData as $k => $v): if($v['id'] == $catId) $select = 'selected="selected"'; else $select = ''; ?>
                                <option <?php echo $select; ?> value="<?php echo $v['id']; ?>"><?php echo str_repeat('-', 8*$v['level']) . $v['cat_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">	品　　牌：</label>
                        <div class="layui-input-inline">
                            <?php buildSelect('brand', 'brand_id', 'id', 'brand_name', I('get.brand_id')); ?>
                        </div>

                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">	所属类型：</label>
                        <div class="layui-input-inline">
                            <?php buildSelect('Type', 'type_id', 'id', 'type_name', I('get.type_id')); ?>
                        </div>

                    </div>
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">价格</label>
                            <div class="layui-input-inline" style="width: 100px;">
                                <input type="text"  name="fp" placeholder="￥"  value="<?php echo I('get.fp'); ?>" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid">-</div>
                            <div class="layui-input-inline" style="width: 100px;">
                                <input type="text" name="tp" placeholder="￥"  value="<?php echo I('get.tp'); ?>"  autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">添加时间：</label>
                            <div class="layui-input-inline" style="width: 100px;">
                                <input type="text"  id="start_time" name="fa" value="<?php echo I('get.fa'); ?>" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid">-</div>
                            <div class="layui-input-inline" style="width: 100px;">
                                <input type="text" id="end_time" name="ta" value="<?php echo I('get.ta'); ?>"  autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            是否上架：
                        </label>
                        <div >
                            <?php $ios = I('get.ios'); ?>
                            <input lay-filter="ios" type="radio" name="ios" value=""  title="全部"   <?php if($ios == '') echo 'checked="checked"'; ?> />
                            <input lay-filter="ios"  type="radio" name="ios" value="是"  title="上架"   <?php if($ios == '是') echo 'checked="checked"'; ?> />
                            <input lay-filter="ios"  type="radio" name="ios" value="否"  title="下架"  <?php if($ios == '否') echo 'checked="checked"'; ?> />
                        </div>

                    </div>
                    <div class="layui-form-item">
                        <label for="username" class="layui-form-label">
                            排序方式：
                        </label>
                        <div >
                            <?php $obdy = I('get.odby', 'id_desc'); ?>
                            <input lay-filter="odby" type="radio" name="odby" value="id_desc"  title="以添加时间降序" <?php if($obdy == 'id_desc') echo 'checked="checked"'; ?> />
                            <input lay-filter="odby" type="radio" name="odby" value="id_asc" title="以添加时间升序" <?php if($obdy == 'id_asc') echo 'checked="checked"'; ?> />
                            <input lay-filter="odby" type="radio" name="odby" value="price_desc" title="以价格降序" <?php if($obdy == 'price_desc') echo 'checked="checked"'; ?> />
                            <input lay-filter="odby" type="radio" name="odby" value="price_asc" title="以价格升序" <?php if($obdy == 'price_asc') echo 'checked="checked"'; ?> />
                            <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i>搜索</button>

                        </div>
                    </div>

                    </div>
            </form>
            <xblock><button class="layui-btn" onclick="admin_add('添加商品','<?php echo U(add)?>','1000','600')"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px">共有数据：<?php echo $count;?> 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>编号</th>
                        <th>主分类</th>
                        <th>扩展分类</th>
                        <th>品牌</th>
                        <th>商品名称</th>
                        <th>logo</th>
                        <th>市场价格</th>
                        <th>本店价格</th>
                        <th>上架</th>
                        <th>添加时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($data as $v):?>
                    <tr>

                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['cat_name']; ?></td>
                        <td><?php echo $v['ext_cat_name']; ?></td>
                        <td><?php echo $v['brand_name']; ?></td>
                        <td  class="first-cell"><span><?php echo $v['goods_name']; ?></span></td>
                        <td><?php showImage($v['sm_logo']); ?></td>
                        <td><?php echo $v['market_price']; ?></td>
                        <td><?php echo $v['shop_price']; ?></td>
                        <td><?php echo $v['is_on_sale']; ?></td>
                        <td><?php echo $v['addtime']; ?></td>
                       
                       
                        <td class="td-manage">
                            <a href="<?php echo U('goods_number?id='.$v['id']); ?>">库存量</a>
                            <a title="编辑" href="javascript:;" onclick="admin_edit('编辑','<?php echo U(edit,'',FALSE)?>/id/<?php echo $v['id']?>',<?php echo $v['id']?>,'900','600')"
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

                form.on('radio(odby)', function(data){
                    $('#searchForm').submit();


                })

                form.on('radio(ios)', function(data){
                    $('#searchForm').submit();

                })
           
                });

            var start = {
                istime: true,
                format: 'YYYY-MM-DD',
                max: '2099-06-16 23:59:59',
                istoday: true,
                choose: function (datas) {
                    end.min = datas; //开始日选好后，重置结束日的最小日期
                }
            };

            var end = {
                istime: true,
                format: 'YYYY-MM-DD',
                max: '2099-06-16 23:59:59',
                istoday: true,
                choose: function (datas) {
                    start.max = datas; //结束日选好后，重置开始日的最大日期
                }
            };

            document.getElementById('start_time').onclick = function () {
                start.elem = this;
                laydate(start);
            };
            document.getElementById('end_time').onclick = function () {
                end.elem = this;
                laydate(end);
            };
           
              
            
              
          

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
                        url:"<?php echo U('Goods/delete','',FALSE)?>/id/"+id,
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