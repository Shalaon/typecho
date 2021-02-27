<?php
/**
 * 这是一款防Ri-VIP官网的主题
 * 
 * @package vStore
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

    
    <!-- Hero Start -->
	<section class="bg-half-170 pb-3" id="home">
		<div class="home-center">
			<div class="home-desc-center">
				<div class="container">
					<div class="row">
					<?php 
					$tuijian = $this->options->imghdp;
					$hang = explode(",", $tuijian);
					$n=count($hang);
					$html="";
					for($i=0;$i<$n;$i++){
						$this->widget('Widget_Archive@tuijian'.$i, 'pageSize=1&type=post', 'cid='.$hang[$i])->to($tui);
						$html=$html.'
						<div class="col-lg-6 col-md-6 mb-4 pb-2">
							<div class="theme-item position-relative overflow-hidden shadow rounded p-4">
								<span class="tipss">强力推荐</span>
								<header>
									<h4 class="text-center"><a href="'.$tui->permalink.'" class="title text-dark">'.$tui->title.'<span class="badge badge-muted ml-2">'.$tui->fields->version.'</span><span class="badge badge-danger ml-2">热推</span></a></h4>
									<p class="text-muted miaoshu">'.$tui->description.'</p>
								</header>
								<div class="themes-item-content">
									<img class="img-fluid lazyloaded" data-src="'.$tui->fields->thumb.'&amp;h=533&amp;w=800&amp;zc=1&amp;a=c&amp;q=100&amp;s=1" src="'.$tui->fields->thumb.'" alt="TePass 插件">
									<div class="mt-3 text-center">
										<a href="'.$tui->permalink.'" class="btn btn-primary mt-2 mr-2">查看详情</a>
										<a href="'.$tui->fields->demo.'" target="_blank" class="btn btn-outline-primary mt-2">演示</a>
									</div>
								</div>
							</div>
						</div>';
					}
					echo $html;
					?>
								
					</div><!--end row-->
				</div><!--end container--> 
			</div><!--end home desc center-->
		</div><!--end home center-->
	</section><!--end section-->
	<!-- Hero End -->


    <section class="section pt-3 pb-0">
		<div class="justify-content-center">
			<div class="col-12 text-center">
				<div class="section-title mb-60">
					<div class="alert alert-light alert-pills shadow" role="alert">
						<span class="badge badge-primary rounded mr-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告</font></font></span>
						<span class="content">
							<font><?php $this->options->tipa(); ?></font>
							<br><font style=" color: #FF9800; "><?php $this->options->tipb(); ?></font>
						</span>
					</div>
					<p class="text-muted para-desc mx-auto mb-0">购买后请加<span class="badge badge-danger rounded ml-2 mr-2">QQ：<?php $this->options->qq(); ?></span>邀请进入插件交流售后群</p>
				</div>
			</div><!--end col-->
		</div>
	</section><!--end section-->

    <!-- Pricing Start -->
	<section class="section pt-5">
		<div class="container">
			<div class="row mt-lg-4 align-items-center">
				<div class="col-lg-5 col-md-12 text-center text-lg-left">
					<div class="section-title mb-60">
						<h4 class="title mb-4">免费升级· 一次购买后续升级不再另外收费。</h4>
						<p class="text-muted para-desc mx-auto mb-0">本站所有<span class="text-primary font-weight-bold"> Typecho 插件 </span>或以后发布的主题、插件购买后可享受免费升级更新的服务，无套路，更放心！</p>
						<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php $this->options->qq(); ?>&amp;site=qq&amp;menu=yes" target="_blank" class="btn btn-primary mt-4">购买咨询 <span class="badge badge-danger rounded ml-2">QQ：<?php $this->options->qq(); ?></span></a>
					</div>
				</div><!--end col-->

				<div class="col-lg-7 col-md-12">
					<div class="row align-items-center ml-lg-5">
						<div class="col-md-6 col-12 pl-md-0 pr-md-0">
							<div class="pricing-rates starter-plan shadow bg-white pt-5 pb-5 p-4 rounded text-center">
								<h2 class="title text-uppercase text-warning mb-4">TePass插件<span class="badge badge-warning rounded ml-2">推荐</span></h2>
								<div class="d-flex justify-content-center mb-4">
									<span class="h4 mb-0 mt-2">￥</span>
									<span class="price h1 mb-0">100</span>
									<span class="h4 align-self-end mb-1">/永久</span>
								</div>

								<ul class="feature list-unstyled pl-0">
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>插件免费更新升级</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>最多可绑定3个顶级域名</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>插件售后及维护</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>会员专属QQ群</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>支付宝当面付与PAYJS收款</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>无需营业执照</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>无需网站备案</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>提供一次免费远程协助安装</li>
								</ul>
								<a href="https://store.pangsuan.com/p/tepass.html" class="btn btn-warning mt-4">查看详情</a>
															
							</div>
						</div><!--end col-->

						<div class="col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0 pl-md-0 pr-md-0">
							<div class="pricing-rates bg-light pt-5 pb-5 p-4 rounded text-center">
								<h2 class="title text-uppercase mb-4">TePay专业版</h2>
								<div class="d-flex justify-content-center mb-4">
									<span class="h4 mb-0 mt-2">￥</span>
									<span class="price h1 mb-0">80</span>
									<span class="h4 align-self-end mb-1">/永久</span>
								</div>

								<ul class="feature list-unstyled pl-0">
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>插件免费更新升级</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>最多可绑定2个顶级域名</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>插件售后及维护</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>会员专属QQ群</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>支付宝当面付与PAYJS收款</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>无需营业执照</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>无需网站备案</li>
									<li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>提供一次免费远程协助安装</li>
								</ul>
								<a href="https://store.pangsuan.com/p/tepay-pro.html" class="btn btn-primary mt-4">查看详情</a>
								
							</div>
						</div><!--end col-->
					</div><!--end row-->
				</div><!--end col-->
			</div><!--end row-->
		</div><!--end container-->
		<div class="container-fluid">
			<div class="row">
				<div class="home-shape-bottom">
					<img src="<?php $this->options->themeUrl('assets/images/shape-light.png'); ?>" alt="" class="img-fluid mx-auto d-block">
				</div> 
			</div><!--end row-->
		</div> <!-- END CONTAINER -->
	</section><!--end section-->
	<!-- Pricing End -->

	<!-- FAQ n Contact Start -->
	<section class="section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="faq-container">
						<h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> 购买之后<span class="text-primary">所有插件</span>都可以用吗？</h4>
						<p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">目前本站有两款插件，其中TePass带有会员中心功能，两款插件都有区别，价格不一样，购买的哪款插件就只能使用哪款。</p>
					</div>
				</div><!--end col-->
				
				<div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<div class="faq-container">
						<h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i>插件<span class="text-primary">限制域名</span>数量吗？</h4>
						<p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">本站所开发的 Typecho 插件限制域名绑定数量，且仅限购买者本人使用，外泄插件将取消授权资格，并拉入黑名单。</p>
					</div>
				</div><!--end col-->
				
				<div class="col-md-6 col-12 mt-4 pt-2">
					<div class="faq-container">
						<h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i>插件新版本是<span class="text-primary">免费更新</span>的吗？</h4>
						<p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">本站所有在维护更新的插件，发布新版本后可直接免费下载，下载后可自行进行升级操作，简单无任何费用！</p>
					</div>
				</div><!--end col-->
				
				<div class="col-md-6 col-12 mt-4 pt-2">
					<div class="faq-container">
						<h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i>插件支持自己<span class="text-primary">修改美化</span>二次开发吗？</h4>
						<p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">本站所发布的插件用户可以自行修改，美化等，每次升级只需要将二次开发的文件覆盖即可，技术党无忧！</p>
					</div>
				</div><!--end col-->

			</div><!--end row-->

			<div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
				<div class="col-12 text-center">
					<div class="section-title">
						<h4 class="title mb-4">支持正版主题与插件，为您的资金安全保驾护航。</h4>
						<p class="text-muted para-desc mx-auto">我们正在向更好的方向无限进步，作者开发不易，真诚的呼吁和希望您支持正版作者，这将为您提供更有保障的Typecho插件驱动力。</p>
						<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php $this->options->qq(); ?>&amp;site=qq&amp;menu=yes" target="_blank" class="btn btn-primary mt-4"><i class="mdi mdi-qqchat"></i> 立即咨询</a>
					</div>
				</div><!--end col-->
			</div><!--end row-->
		</div><!--end container-->
		
	</section><!--end section-->
	<!-- FAQ n Contact End -->
    

<?php $this->need('footer.php'); ?>
