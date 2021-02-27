<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
  	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>商店 - 胖蒜</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="<?php $this->options->keywords(); ?>">
	<meta name="description" content="<?php if($this->is('single')){$this->excerpt(125, '...');}else{$this->options->description();} ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="dns-prefetch" href="https://s.w.org/">
	<link rel="stylesheet" id="bootstrap-css" href="<?php $this->options->themeUrl('assets/css/bootstrap.min.css'); ?>" type="text/css" media="all">
	<link rel="stylesheet" id="materialdesignicons-css" href="<?php $this->options->themeUrl('assets/css/materialdesignicons.min.css'); ?>" type="text/css" media="all">
	<link rel="stylesheet" id="carousel-css" href="<?php $this->options->themeUrl('assets/css/owl.carousel.min.css'); ?>" type="text/css" media="all">
	<link rel="stylesheet" id="carousel-default-css" href="<?php $this->options->themeUrl('assets/css/owl.theme.default.min.css'); ?>" type="text/css" media="all">
	<link rel="stylesheet" id="app-css" href="<?php $this->options->themeUrl('assets/css/app.css'); ?>" type="text/css" media="all">
</head>

<body style="overflow: visible;">
        
    <!-- Loader -->
	    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky active nav-sticky">
        <div class="container">
            <div>
                <a class="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
            </div>                 
            <div class="buy-button">
            <?php if($this->user->hasLogin()): ?>	
                <a href="/tepass/my" class="btn btn-warning">会员中心</a>
            <?php else: ?>
				<a href="/tepass/signin" class="btn btn-warning">注册登录</a>
			<?php endif; ?>
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Navigation Menu 菜单 静态编辑模式-->  
            <div id="navigation" class="active" style="display: none;"> 
                <ul id="menu-menu-1" class="navigation-menu">
				<li class="nav-item active"><a target="" href="/" class="nav-link">首页</a></li>
				<li class="nav-item  has-submenu">
					<a target="" href="https://store.pangsuan.com" class="nav-link "><i class="mdi mdi-webhook text-primary"></i> Typecho 插件  <span class="badge badge-danger rounded">新</span></a><span class="menu-arrow"></span>
					<ul class="submenu depth_0">
						<li class="nav-item  "><a target="" href="https://store.pangsuan.com/p/tepass.html" class="nav-link">TePass  <span class="badge badge-danger rounded">热推</span></a></li>
						<li class="nav-item  "><a target="" href="https://store.pangsuan.com/p/tepay-pro.html" class="nav-link">TePay-Pro  <span class="badge badge-danger rounded">简</span></a></li>
						<li class="nav-item  "><a target="" href="https://pangsuan.com/p/teepay.html" class="nav-link">TeePay 免费版</a></li>
					</ul>
				</li>
				<li class="nav-item  has-submenu">
					<a target="" href="https://store.pangsuan.com" class="nav-link ">在线商店</a><span class="menu-arrow"></span>
					<ul class="submenu depth_0">
					<li class="nav-item  "><a target="" href="https://store.pangsuan.com/p/tepass.html" class="nav-link">TePass  <span class="badge badge-danger rounded">热推</span></a></li>
					<li class="nav-item  "><a target="" href="https://store.pangsuan.com/p/tepay-pro.html" class="nav-link">TePay-Pro  <span class="badge badge-danger rounded">简</span></a></li>
					</ul>
				</li>
				<li class="nav-item  has-submenu">
					<a target="" href="/notice.html" class="nav-link ">官方公告</a><span class="menu-arrow"></span>
					<ul class="submenu depth_0">
					<li class="nav-item  "><a target="" href="/about.html" class="nav-link">关于我们</a></li>
					<li class="nav-item  "><a target="" href="/privacy.html" class="nav-link">免责声明</a></li>
					<li class="nav-item  "><a target="" href="/services.html" class="nav-link">服务条款</a></li>
					</ul>
				</li>
				<li class="nav-item last-elements">
					<a target="_blank" href="https://www.aliyun.com/minisite/goods?userCode=hcsa5cx2&share_source=copy_link" class="nav-link"><i class="mdi mdi-weather-fog text-primary"></i> 服务器推荐  <span class="badge badge-danger rounded">荐</span></a>
				</li>
				</ul>                
                <!--end navigation menu-->
                <div class="buy-menu-btn d-none">
                    <?php if($this->user->hasLogin()): ?>	
		                <a href="https://store.pangsuan.com/tepass/my" class="btn btn-warning">会员中心</a>
		            <?php else: ?>
						<a href="https://store.pangsuan.com/tepass/signin" class="btn btn-warning">注册登录</a>
					<?php endif; ?>                 
                </div><!--end login button-->
            </div>
            <!--end navigation-->
        </div><!--end container-->
    </header><!--end header-->
    <!-- Navbar End -->
        