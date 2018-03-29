<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
	<meta charset="utf-8">
	<title>Shop</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta content=" description" name="description">
	<meta content=" keywords" name="keywords">
	<meta content="keenthemes" name="author">

	<meta property="og:site_name" content="-CUSTOMER VALUE-">
	<meta property="og:title" content="-CUSTOMER VALUE-">
	<meta property="og:description" content="-CUSTOMER VALUE-">
	<meta property="og:type" content="website">
	<meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
	<meta property="og:url" content="-CUSTOMER VALUE-">

	<link rel="shortcut icon" href="favicon.ico">

	<!-- Fonts START -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->

	<!-- Fonts END -->

	<!-- Global styles START -->
	<link href="/Public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/Public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Global styles END -->

	<!-- Page level plugin styles START -->
	<link href="/Public/assets/pages/css/animate.css" rel="stylesheet">
	<link href="/Public/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
	<link href="/Public/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
	<link href="/Public/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
	<link href="/Public/assets/plugins/rateit/src/rateit.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin styles END -->

	<!-- Theme styles START -->
	<link href="/Public/assets/pages/css/components.css" rel="stylesheet">
	<link href="/Public/assets/pages/css/slider.css" rel="stylesheet">
	<link href="/Public/assets/corporate/css/style.css" rel="stylesheet">
	<link href="/Public/assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
	<link href="/Public/assets/corporate/css/style-responsive.css" rel="stylesheet">
	<link href="/Public/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
	<link href="/Public/assets/corporate/css/custom.css" rel="stylesheet">
	<link href="/Public/Home/style//foot.css" rel="stylesheet">
	<!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
<!-- BEGIN STYLE CUSTOMIZER -->
<div class="color-panel hidden-sm">
	<div class="color-mode-icons icon-color"></div>
	<div class="color-mode-icons icon-color-close"></div>
	<div class="color-mode">
		<p>THEME COLOR</p>
		<ul class="inline">
			<li class="color-red current color-default" data-style="red"></li>
			<li class="color-blue" data-style="blue"></li>
			<li class="color-green" data-style="green"></li>
			<li class="color-orange" data-style="orange"></li>
			<li class="color-gray" data-style="gray"></li>
			<li class="color-turquoise" data-style="turquoise"></li>
		</ul>
	</div>
</div>
<!-- END BEGIN STYLE CUSTOMIZER -->

<!-- BEGIN TOP BAR -->
<div class="pre-header">
	<div class="container">
		<div class="row">
			<!-- BEGIN TOP BAR LEFT PART -->

			<!-- END TOP BAR LEFT PART -->
			<!-- BEGIN TOP BAR MENU -->
			<div class="col-md-offset-6 col-md-6 col-sm-6 additional-nav">
				<ul class="list-unstyled list-inline pull-right">
					<li id="logInfo"></li>
					<li><a href="<?php echo U('My/order'); ?>">我的订单</a></li>

					<li><a href="<?php echo U('Cart/lst'); ?>">购物车</a></li>

				</ul>
			</div>
			<!-- END TOP BAR MENU -->
		</div>
	</div>
</div>
<!-- END TOP BAR -->

<!-- BEGIN HEADER -->
<div class="header">
	<div class="container">
		<a class="site-logo" href="<?php echo U('Index/index')?>"><img src="/Public/assets/corporate/img/logos/logo-shop-red.png" alt=""></a>

		<a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

		<!-- BEGIN CART -->
		<div class="top-cart-block">

			<i class="fa fa-shopping-cart"></i>

			<div class="top-cart-content-wrapper">
				<div class="top-cart-content">
					<ul class="scroller" style="height: 250px;">
						<?php foreach ($cartData as $k => $v): ?>
						<li>
							<a href="<?php echo U('Index/goods',array('id'=>$v['goods_id'])); ?>"><img src="<?php Image($v['mid_logo']); ?>" alt="<?php echo ($v["goods_name"]); ?>" width="37" height="34"></a>
							<span class="cart-content-count">x <?php echo ($v["goods_number"]); ?></span>
							<strong><a href="<?php echo U('Index/goods',array('id'=>$v['goods_id'])); ?>"><?php echo ($v["goods_name"]); ?></a></strong>
							<em><?php echo ($v["shop_price"]); ?>元</em>
							<a href="javascript:void(0);" class="del-goods" onclick="del_goods(<?php echo ($v["goods_id"]); ?>,this,'<?php echo ($v["goods_attr_id"]); ?>')">&nbsp;</a>
						</li>
						<?php endforeach; ?>
					</ul>
					<div class="text-right">
						<a href="<?php echo U('Cart/lst'); ?>" class="btn btn-default">查看购物车</a>
						<a href="<?php echo U('My/order'); ?>" class="btn btn-primary">结算</a>
					</div>
				</div>
			</div>
		</div>
		<!--END CART -->

		<!-- BEGIN NAVIGATION -->
		<!-- 引入导航条文件  -->
		<div class="header-navigation">
	<ul>

		<?php foreach ($catData as $k => $v): ?>
		<li class="dropdown dropdown-megamenu">
			<a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="<?php echo U('Search/cat_search?cat_id='.$v['id'], '', FALSE); ?>">
				<?php echo $v['cat_name'];?>

			</a>
			<ul class="dropdown-menu">

				<li>
					<div class="header-navigation-content">

						<div class="row">
							<?php foreach ($v['children'] as $k1 => $v1): ?>
							<div class="col-md-4 header-navigation-col">
								<h4><a style="color: black" href="<?php echo U('Search/cat_search?cat_id='.$v1['id'], '', FALSE); ?>"><?php echo $v1['cat_name'];?></a></h4>
								<ul>
									<?php foreach ($v1['children'] as $k2 => $v2): ?>
									<li><a href="<?php echo U('Search/cat_search?cat_id='.$v2['id'], '', FALSE); ?>"><?php echo $v2['cat_name'];?></a></li>
									<?php endforeach; ?>

								</ul>
							</div>
							<?php endforeach; ?>
						</div>

					</div>
				</li>

			</ul>
		</li>
		<?php endforeach; ?>




		<!-- BEGIN TOP SEARCH -->
		<li class="menu-search">
			<span class="sep"></span>
			<i class="fa fa-search search-btn"></i>
			<div class="search-box">
				<form action="<?php echo U('Search/key_search', '', FALSE); ?>" method="get">
					<div class="input-group">
						<input id="key" name="key"  type="text" placeholder="<?php echo I('get.key', '请输入商品关键字'); ?>"  class="form-control">
						<span class="input-group-btn">
                      <button class="btn btn-primary"  type="submit">搜索</button>
                    </span>
					</div>
				</form>
			</div>
		</li>
		<!-- END TOP SEARCH -->
	</ul>
</div>
		<!-- END NAVIGATION -->
	</div>
</div>
<!-- Header END -->


    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>我的订单</h1>
            <?php $count=count($data)?>
            <?php if($count > 0): ?><div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tr>

                    <th class="goods-page-image">订单号</th>
                    <th class="goods-page-image">订单商品</th>
                    <th class="goods-page-description">收货人</th>
                    <th class="goods-page-quantity">订单金额</th>
                    <th class="goods-page-price">	订单状态</th>
                    <th class="goods-page-total" >下单时间</th>
                    <th class="goods-page-total" >操作</th>
                  </tr>

				<?php foreach ($data['data'] as $k => $v): ?>
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
                        <?php echo makeAlipayBtn($v['id']); ?>
                        <?php endif; ?></span></strong>
                    </td>
                    <td class="goods-page-total">
                      <?php if($v['pay_status'] == '否'): ?>
                      <a href="">查看</a> | <a href="">取消定单</a>
                      <?php endif; ?>
                    </td>

                  </tr>
                  <?php endforeach; ?>

                </table>
                </div>

                <div class="shopping-total">
                  <ul>


                  </ul>
                </div>
              </div>

            </div>
              <?php else: ?><h2>当前订单没有订单</h2><?php endif; ?>
          </div>
          <a class="btn btn-default"   href="<?php echo U('Index/index'); ?>" type="submit">继续购物 <i class="fa fa-shopping-cart"></i></a>
          <!-- END CONTENT -->  <div class="row">
          <?php echo $page; ?>
        </div>

        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>最受欢迎的产品</h2>
            <div class="owl-carousel owl-carousel4">
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/Public/assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>

                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">详情</a>
                  <div class="sticker sticker-new"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/Public/assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>

                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress2</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">详情</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/Public/assets/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>

                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress3</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">详情</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/Public/assets/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>

                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress4</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">详情</a>
                  <div class="sticker sticker-sale"></div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/Public/assets/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>

                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress5</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">详情</a>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="/Public/assets/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                    <div>

                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress6</a></h3>
                  <div class="pi-price">$29.00</div>
                  <a href="javascript:;" class="btn btn-default add2cart">详情</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>


<!-- BEGIN STEPS -->
<div class="steps-block steps-block-red">
	<div class="container">
		<div class="row">
			<div class="col-md-4 steps-block-col">
				<i class="fa fa-truck"></i>
				<div>
					<h2>免费送货</h2>
					<em>Express delivery withing 3 days</em>
				</div>
				<span>&nbsp;</span>
			</div>
			<div class="col-md-4 steps-block-col">
				<i class="fa fa-gift"></i>
				<div>
					<h2>日常礼物</h2>
					<em>3 Gifts daily for lucky customers</em>
				</div>
				<span>&nbsp;</span>
			</div>
			<div class="col-md-4 steps-block-col">
				<i class="fa fa-phone"></i>
				<div>
					<h2>477 505 8877</h2>
					<em>24/7 customer care available</em>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END STEPS -->

<div class="foot">
	<div class="foot_logo">
		<img src="/Public/Home/images/timg.jpg" alt="商城">
	</div>
	<p class="foot_info"> 购物商城</p>
	<p class="foot_info">客服电话：411-902-1310</p>
	<p class="foot_link">
		<img src="/Public/Home/images/join_wc.png" class="foot_wc">

		<a href="http://weibo.com/kuaishao?refer_flag=1005050010_&amp;is_hot=1">
			<img src="/Public/Home/images/join_xl.png" class="wb">
		</a>
	</p>
	<div class="friendly-link">
		<!-- 两端对齐，多行链接时使用 -->
		<div>
			<span>友情链接：</span>
			<div class="link-list">
				<a href="http://www.dizhi.xin/" target="_blank">信站大全</a>
			</div>
		</div>
	</div>
	<p class="foot_copy">
		©&nbsp;Copyright&nbsp;2018&nbsp;Inc.&nbsp;All&nbsp;Rights&nbsp;Reserved.&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)">粤ICP备15234259号-5</a>
	</p>
</div>

<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="/Public/assets/plugins/respond.min.js"></script>
<![endif]-->
<script src="/Public/assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Public/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/Public/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
<script src="/Public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="/Public/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<script src="/Public/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
<script src='/Public/assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
<script src="/Public/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
<script src="/Public/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/Public/assets/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>

<script src="/Public/assets/corporate/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/assets/pages/scripts/checkout.js" type="text/javascript"></script>
<script src="/Public/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initTwitter();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initUniform();
        Checkout.init();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>


<script>
    // 判断登录状态
    $.ajax({
        type : "GET",
        url : "<?php echo U('Member/ajaxChkLogin'); ?>",
        dataType : "json",
        success : function(data)
        {
            if(data.login == 1)
                var li = '欢迎您，'+data.username+' [<a href="<?php echo U('Member/logout'); ?>">退出</a>]';
        else
            var li = '欢迎您来到商城 ![<a href="<?php echo U('Member/login'); ?>">请登录</a>] [<a href="<?php echo U('Member/regist'); ?>">免费注册</a>]'
            $("#logInfo").html(li);
        }
    });
</script>


<script>
    <?php $ic = C('IMAGE_CONFIG'); ?>
    var picView = "<?php echo $ic['viewPath']; ?>";
    $("#cart_list").mouseover(function(){
        $.ajax({
            type : "GET",
            url : "<?php echo U('Cart/ajaxCartList'); ?>",
            dataType : "json",
            success : function(data)
            {
                // 拼出HTML放到页中
                var html = "<table>";
                $(data).each(function(k,v){
                    html += "<tr>";
                    html += '<td><img width="50" src="'+picView+v.mid_logo+'" /></td>';
                    html += '<td>'+v.goods_name+'</td>';
                    html += '</tr>';
                });
                html += "</table>";
                $("#cart_div_list").html(html);
            }
        });
    });


/*    /!******** AJAX发表评论 *************!/

    $("#comment_btn").click(function(){
        // 先接收表单中的数据，并拼成这样式格式的字符串： name=tom&age=231

        var form = $("#comment_form");
        var formData = form.serialize();
        $.ajax({
            type : "POST",
            url : "<?php echo U('Comment/add'); ?>",
            data : formData, // 表单中要提交的数据
            dataType : "json",  // 服务器返回的数据格式
            success : function(data)
            {
                if(data.status == 0)
                {

                        alert(data.info);

                }
                else
                {
                    // 清空表单
                    form.trigger("reset"); // 触发表单的reset事件
                    // 用新发表的评论数据拼出一个显示的HTML字符串
					var html="   <div class=\"review-item clearfix\">\n" +
                        "                        <div class=\"review-item-submitted\">\n" +
                        "                          <strong>"+data.info.name+"</strong>\n" +
                        "                          <em>"+data.info.addtime+"</em>\n" +
                        "                          <div class=\"rateit\" data-rateit-value=\""+data.info.star+"\" data-rateit-ispreset=\"true\" data-rateit-readonly=\"true\"></div>\n" +
                        "                        </div>\n" +
                        "                        <div class=\"review-item-content\">\n" +
                        "                            <p>"+data.info.content+"</p>\n" +
                        "                        </div>\n" +
                        "                      </div>"
                    // 把整个评论的字符串转化成jq的对象
                    console.log(html);
                    alert(html);
                    html = $(html);
                    // 把拼好的评论放到页面中

                    $("#Reviews").prepend(html);
                    // 让导航条直接滚动第一个评论处
                    $("body").animate({
                        "scrollTop" : "750px"
                    }, 1000, function(){
                        html.fadeIn(2000);
                    });
                7}
            }
        });
    });*/

function del_goods(id,obj,attr_id) {



        $.ajax({
            type : "GET",
            url : "<?php echo U('Cart/ajaxDelGoods','',false); ?>/id/"+id+"/attr_id/"+attr_id,
            dataType : "json",
            success : function(data)
            {
                if(data.status==1){
                    $(obj).parent().remove();
                    console.log($(obj).parent());
                }else{
                    alert(123);
                }

            }
        });


}
</script>