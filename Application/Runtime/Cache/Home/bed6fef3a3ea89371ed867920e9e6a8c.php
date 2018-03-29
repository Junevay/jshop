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
			<div class="col-md-6 col-sm-6 additional-shop-info">
				<ul class="list-unstyled list-inline">
					<li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
					<!-- BEGIN CURRENCIES -->
					<li class="shop-currencies">
						<a href="javascript:void(0);">€</a>
						<a href="javascript:void(0);">£</a>
						<a href="javascript:void(0);" class="current">$</a>
					</li>
					<!-- END CURRENCIES -->
					<!-- BEGIN LANGS -->
					<li class="langs-block">
						<a href="javascript:void(0);" class="current">中文 </a>
						<div class="langs-block-others-wrapper"><div class="langs-block-others">
							<a href="javascript:void(0);">French</a>
							<a href="javascript:void(0);">Germany</a>
							<a href="javascript:void(0);">Turkish</a>
						</div></div>
					</li>
					<!-- END LANGS -->
				</ul>
			</div>
			<!-- END TOP BAR LEFT PART -->
			<!-- BEGIN TOP BAR MENU -->
			<div class="col-md-6 col-sm-6 additional-nav">
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
		<a class="site-logo" href="shop-index.html"><img src="/Public/assets/corporate/img/logos/logo-shop-red.png" alt=""></a>

		<a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

		<!-- BEGIN CART -->
		<div class="top-cart-block">
			<div class="top-cart-info">
				<a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
				<a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
			</div>
			<i class="fa fa-shopping-cart"></i>

			<div class="top-cart-content-wrapper">
				<div class="top-cart-content">
					<ul class="scroller" style="height: 250px;">
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
						<li>
							<a href="shop-item.html"><img src="/Public/assets/pages/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
							<span class="cart-content-count">x 1</span>
							<strong><a href="shop-item.html">Rolex Classic Watch</a></strong>
							<em>$1230</em>
							<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
						</li>
					</ul>
					<div class="text-right">
						<a href="shop-shopping-cart.html" class="btn btn-default">View Cart</a>
						<a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
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
						<?php foreach ($v['children'] as $k1 => $v1): ?>
						<div class="row">
							<div class="col-md-4 header-navigation-col">
								<h4><a style="color: black" href="<?php echo U('Search/cat_search?cat_id='.$v1['id'], '', FALSE); ?>"><?php echo $v1['cat_name'];?></a></h4>
								<ul>
									<?php foreach ($v1['children'] as $k2 => $v2): ?>
									<li><a href="<?php echo U('Search/cat_search?cat_id='.$v2['id'], '', FALSE); ?>"><?php echo $v2['cat_name'];?></a></li>
									<?php endforeach; ?>

								</ul>
							</div>

						</div>
						<?php endforeach; ?>
					</div>
				</li>

			</ul>
		</li>
		<?php endforeach; ?>


		<li><a href="" target="_blank">Admin theme</a></li>

		<!-- BEGIN TOP SEARCH -->
		<li class="menu-search">
			<span class="sep"></span>
			<i class="fa fa-search search-btn"></i>
			<div class="search-box">
				<form action="<?php echo U('Search/key_search', '', FALSE); ?>" method="get">
					<div class="input-group">
						<input id="key" name="key"  type="text" value="<?php echo I('get.key', '请输入商品关键字'); ?>"  class="form-control">
						<span class="input-group-btn">
                      <button class="btn btn-primary"  type="submit">Search</button>
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
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Member</a></li>
            <li class="active">Regist</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Regist</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

              <!-- BEGIN CHECKOUT -->
              <div id="checkout" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#checkout-content" class="accordion-toggle">
                     注册页面
                    </a>
                  </h2>
                </div>
                <div id="checkout-content" class="panel-collapse collapse in">
                  <div class="panel-body row">

                    <div class="col-md-6 col-sm-6">
                      <h3>注册 用户 </h3>

                      <form action="/index.php/Home/Member/regist.html" method="post">
                        <div class="form-group">
                          <label for="email-login">账号</label>
                          <input type="text" id="email-login"  name="username" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="password-login">密码</label>
                          <input type="password" id="password-login" name="password"  class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="password-login">确认密码</label>
                          <input type="password" id="password" name="cpassword"  class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="password-login">验证码</label>
                          <input type="password" id="captcha-login" name="chkcode"  class="form-control">
                          <img style="cursor:pointer;" onclick="this.src='<?php echo U('chkcode'); ?>#'+Math.random();" src="<?php echo U('chkcode'); ?>" />
                        </div>
                        <div class="form-group">
                          <input type="checkbox" name="must_click" value="1" class="chb" checked="checked" /> 我已阅读并同意《用户注册协议》
                        </div>


                        <a href="javascript:;">忘记密码?</a>
                        <div class="padding-top-20">                  
                          <button class="btn btn-primary" type="submit">注册</button>
                        </div>
                        <hr>
                        <div class="login-socio">
                          <p class="text-muted">或者还可以使用其他方式登录:</p>
                          <ul class="social-icons">
                            <li><a href="javascript:;" data-original-title="facebook" class="facebook" title="facebook"></a></li>
                            <li><a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a></li>
                            <li><a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a></li>
                            <li><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a></li>
                          </ul>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
              <!-- END CHECKOUT -->


              <!-- END CONFIRM -->
            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
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

<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
	<div class="container">
		<div class="row">
			<!-- BEGIN BOTTOM ABOUT BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>关于我们</h2>
				<p>为消费者在线上购买产品提供了新的渠道选择,亦保证了产品来源的可靠。在线购买的客户均可在全国所有门店与专柜尊享真情。 </p>
				<p>打造一个包括智能商业、智能金融、智能保险在内的全球领先的智能商业体。</p>
			</div>
			<!-- END BOTTOM ABOUT BLOCK -->
			<!-- BEGIN BOTTOM INFO BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>信息</h2>
				<ul class="list-unstyled">
					<li><i class="fa fa-angle-right"></i> <a href="javascript:;">配送信息</a></li>
					<li><i class="fa fa-angle-right"></i> <a href="javascript:;">客户服务</a></li>
					<li><i class="fa fa-angle-right"></i> <a href="javascript:;">订单跟踪</a></li>
					<li><i class="fa fa-angle-right"></i> <a href="javascript:;">送货与退货</a></li>
					<li><i class="fa fa-angle-right"></i> <a href="contacts.html">联系我们</a></li>
					<li><i class="fa fa-angle-right"></i> <a href="javascript:;">招聘</a></li>
					<li><i class="fa fa-angle-right"></i> <a href="javascript:;">支付方式</a></li>
				</ul>
			</div>
			<!-- END INFO BLOCK -->

			<!-- BEGIN TWITTER BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2 class="margin-bottom-0">最新的推文</h2>
				<a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">由@keenthemes加载推文...</a>
			</div>
			<!-- END TWITTER BLOCK -->

			<!-- BEGIN BOTTOM CONTACTS -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>我们的联系方式</h2>
				<address class="margin-bottom-40">

					电话: 300 323 3456<br>
					传真: 300 323 1456<br>
					邮箱: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
					Skype: <a href="skype:metronic">metronic</a>
				</address>
			</div>
			<!-- END BOTTOM CONTACTS -->
		</div>
		<hr>
		<div class="row">
			<!-- BEGIN SOCIAL ICONS -->
			<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
					<li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
					<li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
					<li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
					<li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
					<li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
					<li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
					<li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
				</ul>
			</div>
			<!-- END SOCIAL ICONS -->
			<!-- BEGIN NEWLETTER -->
			<div class="col-md-6 col-sm-6">
				<div class="pre-footer-subscribe-box pull-right">
					<h2>Newsletter</h2>
					<form action="#">
						<div class="input-group">
							<input type="text" placeholder="youremail@mail.com" class="form-control">
							<span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
						</div>
					</form>
				</div>
			</div>
			<!-- END NEWLETTER -->
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="container">
		<div class="row">
			<!-- BEGIN COPYRIGHT -->
			<div class="col-md-4 col-sm-4 padding-top-10">
				2017 © Keenthemes. ALL Rights Reserved.
			</div>
			<!-- END COPYRIGHT -->
			<!-- BEGIN PAYMENTS -->
			<div class="col-md-4 col-sm-4">
				<ul class="list-unstyled list-inline pull-right">
					<li><img src="/Public/assets/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
					<li><img src="/Public/assets/corporate/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
					<li><img src="/Public/assets/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
					<li><img src="/Public/assets/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
					<li><img src="/Public/assets/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
				</ul>
			</div>
			<!-- END PAYMENTS -->
			<!-- BEGIN POWERED -->
			<div class="col-md-4 col-sm-4 text-right">
				<p class="powered">Copyright &copy; 2017.Company name All rights reserved</p>
			</div>
			<!-- END POWERED -->
		</div>
	</div>
</div>
<!-- END FOOTER -->

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
</script>