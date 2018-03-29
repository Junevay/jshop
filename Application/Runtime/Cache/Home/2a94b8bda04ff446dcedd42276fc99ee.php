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


<div class="page-slider margin-bottom-35">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-four active">
                <div class="container">
                    <div class="carousel-position-four text-center">
                        <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            Tones of <br><span class="color-red-v2">Shop UI Features</span><br> designed
                        </h2>
                        <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Lorem ipsum dolor sit amet constectetuer diam <br>
                            adipiscing elit euismod ut laoreet dolore.</p>
                    </div>
                </div>
            </div>

            <!-- Second slide -->
            <div class="item carousel-item-five">
                <div class="container">
                    <div class="carousel-position-four text-center">
                        <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                            Unlimted
                        </h2>
                        <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                            Layout Options
                        </p>
                        <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                            Fully Responsive
                        </p>
                        <a class="carousel-btn" href="#" data-animation="animated fadeInUp">See More Details</a>
                    </div>
                    <img class="carousel-position-five animate-delay hidden-sm hidden-xs" src="/Public/assets/pages/img/shop-slider/slide2/price.png" alt="Price" data-animation="animated zoomIn">
                </div>
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-six">
                <div class="container">
                    <div class="carousel-position-four text-center">
                            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                                Full Admin &amp; Frontend
                            </span>
                        <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
                            eCommerce UI
                        </p>
                        <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                            Is Ready For Your Project
                        </p>
                    </div>
                </div>
            </div>

            <!-- Fourth slide -->
            <div class="item carousel-item-seven">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                The most <br>
                                wanted bijouterie
                            </h2>
                            <a class="carousel-btn" href="#" data-animation="animated fadeInUp">But It Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
    <div class="main">
      <div class="container">
        <!-- 最新商品 -->


        <!-- END SALE PRODUCT & NEW ARRIVALS -->
          <div class="row margin-bottom-40">
              <!-- BEGIN SALE PRODUCT -->
              <div class="col-md-12 sale-product">
                  <h2>最新商品</h2>

                  <div class="owl-carousel owl-carousel5">
                      <?php foreach ($goods2 as $k => $v): ?>
                      <div>
                          <div class="product-item">
                              <div class="pi-img-wrapper">
                                  <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>">  <img src="<?php Image($v['big_logo']); ?>" class="img-responsive" alt="Berry Lace Dress"></a>
                              </div>
                              <h3><a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>"><?php echo $v['goods_name']; ?></a></h3>
                              <div class="pi-price"><?php echo $v['shop_price']; ?>元</div>
                              <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>" class="btn btn-default add2cart">详情</a>
                              <div class="sticker sticker-sale"></div>
                          </div>
                      </div>
                      <?php endforeach; ?>
                  </div>

              </div>
              <!-- END SALE PRODUCT -->
          </div>
		  <div class="row margin-bottom-40">
			  <!-- BEGIN SALE PRODUCT -->
			  <div class="col-md-12 sale-product">
				  <h2>热卖商品</h2>

				  <div class="owl-carousel owl-carousel5">
					  <?php foreach ($goods3 as $k => $v): ?>
					  <div>
						  <div class="product-item">
							  <div class="pi-img-wrapper">
                                  <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>">  <img src="<?php Image($v['big_logo']); ?>" class="img-responsive" alt="Berry Lace Dress"></a>
							  </div>
							  <h3><a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>"><?php echo $v['goods_name']; ?></a></h3>
							  <div class="pi-price"><?php echo $v['shop_price']; ?>元</div>
							  <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>" class="btn btn-default add2cart">详情</a>
							  <div class="sticker sticker-sale"></div>
						  </div>
					  </div>
					  <?php endforeach; ?>
				  </div>

			  </div>
			  <!-- END SALE PRODUCT -->
		  </div>

          <div class="row margin-bottom-40">
              <!-- BEGIN SALE PRODUCT -->
              <div class="col-md-12 sale-product">
                  <h2>推荐商品</h2>

                  <div class="owl-carousel owl-carousel5">
                      <?php foreach ($goods4 as $k => $v): ?>
                      <div>
                          <div class="product-item">
                              <div class="pi-img-wrapper">
                                  <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>">  <img src="<?php Image($v['big_logo']); ?>" class="img-responsive" alt="Berry Lace Dress"></a>
                              </div>
                              <h3><a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>"><?php echo $v['goods_name']; ?></a></h3>
                              <div class="pi-price"><?php echo $v['shop_price']; ?>元</div>
                              <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>" class="btn btn-default add2cart">详情</a>
                              <div class="sticker sticker-sale"></div>
                          </div>
                      </div>
                      <?php endforeach; ?>
                  </div>

              </div>
              <!-- END SALE PRODUCT -->
          </div>

              <!-- BEGIN SALE PRODUCT -->

              <!-- END SALE PRODUCT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">
          <!-- BEGIN TWO PRODUCTS -->
          <div class="col-md-6 two-items-bottom-items">
            <h2>抢购商品</h2>
            <div class="owl-carousel owl-carousel2">

                <?php foreach ($goods1 as $k => $v): ?>
                <div>
                    <div class="product-item">
                        <div class="pi-img-wrapper">
                            <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>">  <img src="<?php Image($v['big_logo']); ?>" class="img-responsive" alt="Berry Lace Dress"></a>
                        </div>
                        <h3><a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>"><?php echo $v['goods_name']; ?></a></h3>
                        <div class="pi-price"><?php echo $v['promote_price']; ?>元</div>
                        <a href="<?php echo U('Index/goods',array('id'=>$v['id'])); ?>" class="btn btn-default add2cart">详情</a>
                        <div class="sticker sticker-sale"></div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
          </div>
          <!-- END TWO PRODUCTS -->
          <!-- BEGIN PROMO -->
          <div class="col-md-6 shop-index-carousel">
            <div class="content-slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="/Public/assets/pages/img/index-sliders/slide1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="/Public/assets/pages/img/index-sliders/slide2.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <div class="item">
                    <img src="/Public/assets/pages/img/index-sliders/slide3.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END PROMO -->
        </div>
        <!-- END TWO PRODUCTS & PROMO -->
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
<script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script>


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
                    $(".fa-shopping-cart").mouseover();
                    console.log($(obj).parent());
                }else{
                    alert(123);
                }

            }
        });


}

    function del_cartGoods(id,obj,attr_id) {



        $.ajax({
            type : "GET",
            url : "<?php echo U('Cart/ajaxDelGoods','',false); ?>/id/"+id+"/attr_id/"+attr_id,
            dataType : "json",
            success : function(data)
            {
                if(data.status==1){
                    location.reload();
                }else{
                    alert(123);
                }

            }
        });


    }



    layui.use(['form','layer'], function(){
        $ = layui.jquery;
        var form = layui.form()
            ,layer = layui.layer;



        //监听提交
        form.on('submit(addCart)', function(data){
            console.log(data.field);

         var data= $("#cartForm").serialize();
            $.ajax({
                url:"<?php echo U('Cart/add'); ?>",
                data:data,
                dataType:'JSON',
                type:'POST',
                success:function(ret)
                {
                    if(ret.status==1)
                    {
                        layer.alert("加入购物车成功", {icon: 6},function (index) {
                            // 获得frame索引

                            //关闭当前frame
                            parent.layer.close(index);

                        });
                    }
                    else
                    {

                        layer.alert(ret.info, {icon: 5},function (index) {
                            //关闭当前frame
                            parent.layer.close(index);
                        });
                    }
                },

            });
            //发异步，把数据提交给php

            return false;
        });

    <?php $ic = C('IMAGE_CONFIG'); ?>
        var picView = "<?php echo $ic['viewPath']; ?>";
        $(".fa-shopping-cart").mouseover(function(){
            $.ajax({
                type : "GET",
                url : "<?php echo U('Cart/ajaxCartList'); ?>",
                dataType : "json",
                success : function(data)
                {




                    // 拼出HTML放到页中
                    var html = "<li>";
                    $(data).each(function(k,v){

                    html+="\t\t\t<a href=\"/Home/Index/goods/id/"+v.goods_id+"\"><img src="+picView+v.mid_logo+"    alt=\""+v.goods_name+"\" width=\"37\" height=\"34\"></a>\n" +
                        "\t\t\t\t\t\t\t<span class=\"cart-content-count\">x "+v.goods_number+"</span>\n" +
                        "\t\t\t\t\t\t\t<strong><a href=\"/Home/Index/goods/id/"+v.goods_id+"\">"+v.goods_name+"</a></strong>\n" +
                        "\t\t\t\t\t\t\t<em>"+v.shop_price+"元</em>\n" +
                        "\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"del-goods\" onclick=\"del_goods("+v.goods_id+",this,'"+v.goods_attr_id+"')\">&nbsp;</a>"
                    });
                    html += "</li>";

                    $(".scroller").html(html);
                }
            });
        });
    });
</script>