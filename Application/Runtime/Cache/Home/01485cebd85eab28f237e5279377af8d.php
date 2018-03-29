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
					<li><a href="<?php echo U('Member/orderList'); ?>">我的订单</a></li>

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



<link rel="stylesheet" href="/Public/Home/style/list.css" type="text/css">
<link rel="stylesheet" href="/Public/Home/style/common.css" type="text/css">
<script type="text/javascript" src="/Public/Home/js/list.js"></script>

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
	

	<!-- 列表主体 start -->
	<div class="list w1210 bc mt10">
		<!-- 面包屑导航 start -->
		<div class="breadcrumb">
			<h2>当前位置：<a href="">首页</a> > <a href="">电脑、办公</a></h2>
		</div>
		<!-- 面包屑导航 end -->

		<!-- 左侧内容 start -->
		<div class="list_left fl mt10">
			<!-- 分类列表 start -->
			<div class="catlist">
				<h2>电脑、办公</h2>
				<div class="catlist_wrap">
					<div class="child">
						<h3 class="on"><b></b>电脑整机</h3>
						<ul>
							<li><a href="">笔记本</a></li>
							<li><a href="">超极本</a></li>
							<li><a href="">平板电脑</a></li>
						</ul>
					</div>

					<div class="child">
						<h3><b></b>电脑配件</h3>
						<ul class="none">
							<li><a href="">CPU</a></li>
							<li><a href="">主板</a></li>
							<li><a href="">显卡</a></li>
						</ul>
					</div>

					<div class="child">
						<h3><b></b>办公打印</h3>
						<ul class="none">
							<li><a href="">打印机</a></li>
							<li><a href="">一体机</a></li>
							<li><a href="">投影机</a></li>
							</li>
						</ul>
					</div>

					<div class="child">
						<h3><b></b>网络产品</h3>
						<ul class="none">
							<li><a href="">路由器</a></li>
							<li><a href="">网卡</a></li>
							<li><a href="">交换机</a></li>
							</li>
						</ul>
					</div>

					<div class="child">
						<h3><b></b>外设产品</h3>
						<ul class="none">
							<li><a href="">鼠标</a></li>
							<li><a href="">键盘</a></li>
							<li><a href="">U盘</a></li>
						</ul>
					</div>
				</div>
				
				<div style="clear:both; height:1px;"></div>
			</div>
			<!-- 分类列表 end -->
				
			<div style="clear:both;"></div>	

			<!-- 新品推荐 start -->
			<div class="newgoods leftbar mt10">
				<h2><strong>新品推荐</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li>
							<dl>
								<dt><a href=""><img src="/Public/Home/images/list_hot1.jpg" alt="" /></a></dt>
								<dd><a href="">美即流金丝语悦白美颜新年装4送3</a></dd>
								<dd><strong>￥777.50</strong></dd>
							</dl>
						</li>

						<li>
							<dl>
								<dt><a href=""><img src="/Public/Home/images/list_hot2.jpg" alt="" /></a></dt>
								<dd><a href="">领券满399减50 金斯利安多维片</a></dd>
								<dd><strong>￥239.00</strong></dd>
							</dl>
						</li>

						<li class="last">
							<dl>
								<dt><a href=""><img src="/Public/Home/images/list_hot3.jpg" alt="" /></a></dt>
								<dd><a href="">皮尔卡丹pierrecardin 男士长...</a></dd>
								<dd><strong>￥1240.50</strong></dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>
			<!-- 新品推荐 end -->

			<!--热销排行 start -->
			<div class="hotgoods leftbar mt10">
				<h2><strong>热销排行榜</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
			<!--热销排行 end -->

			<!-- 最近浏览 start -->
			<div class="viewd leftbar mt10">
				<h2><a href="">清空</a><strong>最近浏览过的商品</strong></h2>
				<div class="leftbar_wrap">
					<dl>
						<dt><a href=""><img src="/Public/Home/images/hpG4.jpg" alt="" /></a></dt>
						<dd><a href="">惠普G4-1332TX 14英寸笔记...</a></dd>
					</dl>

					<dl class="last">
						<dt><a href=""><img src="/Public/Home/images/crazy4.jpg" alt="" /></a></dt>
						<dd><a href="">直降200元！TCL正1.5匹空调</a></dd>
					</dl>
				</div>
			</div>
			<!-- 最近浏览 end -->
		</div>
		<!-- 左侧内容 end -->
	
		<!-- 列表内容 start -->
		<div class="list_bd fl ml10 mt10">
			<!-- 热卖、促销 start -->
			<div class="list_top">
				<!-- 热卖推荐 start -->
				<div class="hotsale fl">
					<h2><strong><span class="none">热卖推荐</span></strong></h2>
					<ul>
						<li>
							<dl>
								<dt><a href=""><img src="/Public/Home/images/hpG4.jpg" alt="" /></a></dt>
								<dd class="name"><a href="">惠普G4-1332TX 14英寸笔记本电脑 （i5-2450M 2G 5</a></dd>
								<dd class="price">特价：<strong>￥2999.00</strong></dd>
								<dd class="buy"><span>立即抢购</span></dd>
							</dl>
						</li>

						<li>
							<dl>
								<dt><a href=""><img src="/Public/Home/images/list_hot3.jpg" alt="" /></a></dt>
								<dd class="name"><a href="">ThinkPad E42014英寸笔记本电脑</a></dd>
								<dd class="price">特价：<strong>￥4199.00</strong></dd>
								<dd class="buy"><span>立即抢购</span></dd>
							</dl>
						</li>

						<li>
							<dl>
								<dt><a href=""><img src="/Public/Home/images/acer4739.jpg" alt="" /></a></dt>
								<dd class="name"><a href="">宏碁AS4739-382G32Mnkk 14英寸笔记本电脑</a></dd>
								<dd class="price">特价：<strong>￥2799.00</strong></dd>
								<dd class="buy"><span>立即抢购</span></dd>
							</dl>
						</li>
					</ul>
				</div>
				<!-- 热卖推荐 end -->

				<!-- 促销活动 start -->
				<div class="promote fl">
					<h2><strong><span class="none">促销活动</span></strong></h2>
					<ul>
						<li><b>.</b><a href="">DIY装机之向雷锋同志学习！</a></li>
						<li><b>.</b><a href="">京东宏碁联合促销送好礼！</a></li>
						<li><b>.</b><a href="">台式机笔记本三月巨惠！</a></li>
						<li><b>.</b><a href="">富勒A53g智能人手识别鼠标</a></li>
						<li><b>.</b><a href="">希捷硬盘白色情人节专场</a></li>
					</ul>

				</div>
				<!-- 促销活动 end -->
			</div>
			<!-- 热卖、促销 end -->
			
			<div style="clear:both;"></div>
			<style>
				#search_condition{margin:10px;padding:5px;padding-right:0;}
				#search_condition span{border:1px solid #F00;padding:5px;margin:5px;}
				#search_condition span a:hover{background:#F00;color:#FFF;padding:5px;margin-right:0;}
			</style>
			<div id="search_condition">
				当前搜索条件：
				<?php  $brandId = I('get.brand_id'); if($brandId): ?>
					<span>
						品牌：<?php echo ltrim(strstr($brandId, '-'), '-'); ?>
						<a href="<?php echo filterUrl('brand_id'); ?>">X</a>
					</span>
				<?php endif; ?>
				
				<?php  $price = I('get.price'); if($price): ?>
					<span>
						价格：<?php echo $price; ?>
						<a href="<?php echo filterUrl('price'); ?>">X</a>
					</span>
				<?php endif; ?>
				
				<?php  foreach ($_GET as $k => $v): if(strpos($k, 'attr_') === 0) : $_attrName = strrchr($v, '-'); ?>
					<span>
						<?php echo ltrim($_attrName, '-'); ?>：<?php echo str_replace($_attrName, '', $v); ?>
						<a href="<?php echo filterUrl($k); ?>">X</a>
					</span>
				<?php endif;endforeach; ?>
				
			</div>
			
			
			<!-- 商品筛选 start -->
			<div class="filter mt10">
				<h2><a href="">重置筛选条件</a> <strong>商品筛选</strong></h2>
				<div class="filter_wrap">
					<?php if(!I('get.brand_id') && $searchFilter['brand']): ?>
					<dl>
						<dt>品牌：</dt>
						<?php foreach ($searchFilter['brand'] as $k => $v): ?>
						<dd><a href="/index.php/Home/Search/key_search?key=123/brand_id/<?php echo $v['brand_id']; ?>-<?php echo $v['brand_name']; ?>"><?php echo $v['brand_name']; ?></a></dd>
						<?php endforeach; ?>
					</dl>
					<?php endif; ?>
					
					<?php if(!I('get.price') && !empty($searchFilter['price'])): ?>
					<dl>
						<dt>价格：</dt>
						<?php foreach ($searchFilter['price'] as $k => $v): ?>
						<dd><a href="/index.php/Home/Search/key_search?key=123/price/<?php echo $v; ?>"><?php echo $v; ?></a></dd>
						<?php endforeach; ?>
					</dl>
					<?php endif; ?>
					
					<!-- 筛选属性 -->
					<?php foreach ($searchFilter['gaData'] as $k => $v): $attrUrlName = 'attr_'.$v[0]['attr_id']; if(isset($_GET[$attrUrlName])) continue ?>
					<dl>
						<dt><?php echo $k; ?>：</dt>
						<?php foreach ($v as $k1 => $v1): ?>
							<dd><a href="/index.php/Home/Search/key_search?key=123/<?php echo $attrUrlName; ?>/<?php echo $v1['attr_value']; ?>-<?php echo $k; ?>"><?php echo $v1['attr_value']; ?></a></dd>
						<?php endforeach; ?>
					</dl>
					<?php endforeach; ?>
				</div>
			</div>
			<!-- 商品筛选 end -->
			
			<div style="clear:both;"></div>

			<!-- 排序 start -->
			<?php $odby = I('get.odby', 'xl'); ?>
			<div class="sort mt10">
				<dl>
					<dt>排序：</dt>
					<dd <?php if($odby=='xl') echo 'class="cur"'; ?>><a href="<?php echo filterUrl('odby'); ?>/odby/xl">销量</a></dd>
					<dd <?php if(strpos($odby, 'price_') === 0) echo 'class="cur"'; ?>>
					<a href="<?php echo filterUrl('odby'); ?>/odby/<?php echo $odby=='price_desc'?'price_asc':'price_desc'; ?>">
						价格
						<?php if(strpos($odby, 'price_') === 0): ?>
							<?php echo $odby == 'price_desc' ? '↓' : '↑'; ?>
						<?php endif; ?>
					</a>
					</dd>
					<!--<dd><a href="">评论数</a></dd>-->
					<dd <?php if($odby=='addtime') echo 'class="cur"'; ?>><a href="<?php echo filterUrl('odby'); ?>/odby/addtime">上架时间</a></dd>
				</dl>
			</div>
			<!-- 排序 end -->
			
			<div style="clear:both;"></div>

			<!-- 商品列表 start-->
			<div class="goodslist mt10">
				<ul>
					<?php foreach ($data as $k => $v): ?>
					<li>
						<dl>
							<dt><a href="<?php echo U('Index/goods/?id='.$v['id']); ?>"><?php showImage($v['mid_logo']); ?></a></dt>
							<dd><a href="<?php echo U('Index/goods/?id='.$v['id']); ?>"><?php echo $v['goods_name']; ?></a></dt>
							<dd><strong>￥<?php echo $v['shop_price']; ?>元</strong></dt>
							<dd>
								<a href=""><em>已有10人评价</em></a>
								<a href=""><em>已有<?php echo (int)$v['xl']; ?>销量</em></a>
									
							</dt>
						</dl>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<!-- 商品列表 end-->

			<!-- 分页信息 start -->
			<div class="page mt20">
				<?php echo $page; ?>
			</div>
			<!-- 分页信息 end -->

		</div>
		<!-- 列表内容 end -->
	</div>
	<!-- 列表主体 end-->

	<div style="clear:both;"></div>

	<!-- 底部导航 start -->
	<div class="bottomnav w1210 bc mt10">
		<div class="bnav1">
			<h3><b></b> <em>购物指南</em></h3>
			<ul>
				<li><a href="">购物流程</a></li>
				<li><a href="">会员介绍</a></li>
				<li><a href="">团购/机票/充值/点卡</a></li>
				<li><a href="">常见问题</a></li>
				<li><a href="">大家电</a></li>
				<li><a href="">联系客服</a></li>
			</ul>
		</div>
		
		<div class="bnav2">
			<h3><b></b> <em>配送方式</em></h3>
			<ul>
				<li><a href="">上门自提</a></li>
				<li><a href="">快速运输</a></li>
				<li><a href="">特快专递（EMS）</a></li>
				<li><a href="">如何送礼</a></li>
				<li><a href="">海外购物</a></li>
			</ul>
		</div>

		
		<div class="bnav3">
			<h3><b></b> <em>支付方式</em></h3>
			<ul>
				<li><a href="">货到付款</a></li>
				<li><a href="">在线支付</a></li>
				<li><a href="">分期付款</a></li>
				<li><a href="">邮局汇款</a></li>
				<li><a href="">公司转账</a></li>
			</ul>
		</div>

		<div class="bnav4">
			<h3><b></b> <em>售后服务</em></h3>
			<ul>
				<li><a href="">退换货政策</a></li>
				<li><a href="">退换货流程</a></li>
				<li><a href="">价格保护</a></li>
				<li><a href="">退款说明</a></li>
				<li><a href="">返修/退换货</a></li>
				<li><a href="">退款申请</a></li>
			</ul>
		</div>

		<div class="bnav5">
			<h3><b></b> <em>特色服务</em></h3>
			<ul>
				<li><a href="">夺宝岛</a></li>
				<li><a href="">DIY装机</a></li>
				<li><a href="">延保服务</a></li>
				<li><a href="">家电下乡</a></li>
				<li><a href="">京东礼品卡</a></li>
				<li><a href="">能效补贴</a></li>
			</ul>
		</div>
	</div>
	<!-- 底部导航 end -->

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