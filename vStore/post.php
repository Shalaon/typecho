<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<!-- Hero Start -->
<section class="bg-half bg-light">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="page-next-level">
                            <div class="row justify-content-center">
                                <div class="col-md-10 pt-2">
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-md-6">
                                            <div class="work-details rounded bg-fff p-4">
                                                <h5 class="title border-bottom pb-1 mb-1"><?php $this->title() ?></h5>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mt-3">
                                                        <b>最新版本：</b><span class="badge badge-warning"><?php $this->fields->version(); ?></span>
                                                    </li>
                                                    <li class="mt-3">
                                                        <b>最近更新：</b><span><?php echo date('F jS , Y' , $this->modified); ?></span>
                                                    </li>
                                                    <li class="mt-3">
                                                        <b>演示地址：</b><span><a href="<?php $this->fields->demo(); ?>" target="_blank"><?php $this->fields->demo(); ?></a></span>
                                                    </li>
                                                    <li class="mt-3">
                                                        <b>支持设备：</b><span><?php $this->fields->advice(); ?></span>
                                                    </li>
                                                    <li class="mt-3">
                                                        <b>环境要求：</b><span><?php $this->fields->env(); ?></span>
                                                    </li>
                                                    <li class="mt-3">
                                                        <b>在线价格</b><span><?php $this->fields->price(); ?></span>
                                                    </li>
                                                </ul>                          
                                            </div>
                                        </div>
                                        <div class="col-md-6 rounded bg-fff p-4">
                                            <img class="img-fluid rounded cover lazyloaded" data-src="<?php $this->fields->thumb(); ?>" src="<?php $this->fields->thumb(); ?>" alt="<?php $this->title() ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 pt-2 justify-content-center">
                                <div class="col-lg-8 col-md-12 text-center">
                                    <ul class="nav nav-pills rounded nav-justified flex-column flex-sm-row" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link rounded active" id="pills-daythree-tab" data-toggle="pill" href="#pills-goumai" role="tab" aria-controls="pills-daythree" aria-selected="false">
                                                <div class="text-center pt-1 pb-1">
                                                    <h4 class="title font-weight-normal mb-0">购买方式</h4>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        <li class="nav-item">
                                            <a class="nav-link rounded" id="pills-dayone-tab" data-toggle="pill" href="#pills-jieshao" role="tab" aria-controls="pills-dayone" aria-selected="false">
                                                <div class="text-center pt-1 pb-1">
                                                    <h4 class="title font-weight-normal mb-0">说明介绍</h4>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        <li class="nav-item">
                                            <a class="nav-link rounded" id="pills-daythree-tab" data-toggle="pill" href="#pills-jiaocheng" role="tab" aria-controls="pills-daythree" aria-selected="false">
                                                <div class="text-center pt-1 pb-1">
                                                    <h4 class="title font-weight-normal mb-0">使用教程<span class="badge badge-danger rounded ml-2">视频+</span></h4>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        <li class="nav-item">
                                            <a class="nav-link rounded" id="pills-daythree-tab" data-toggle="pill" href="#pills-pinglun" role="tab" aria-controls="pills-daythree" aria-selected="false">
                                                <div class="text-center pt-1 pb-1">
                                                    <h4 class="title font-weight-normal mb-0">用户评论</h4>
                                                </div>
                                            </a><!--end nav link-->
                                        </li>
                                    </ul><!--end nav pills-->
                                </div>
                            </div>

    
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Start Work Detail -->
<section class="section pt-3">
    <div class="container">
	
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-goumai" role="tabpanel" aria-labelledby="pills-daythree-tab">
				<div class="row justify-content-center">
					<div class="col-md-10 mt-4 pt-2">
					    <div class="bg-light rounded p-4 mb-4">
                                <p class="text-muted text-muted mb-0">涨价提示：2020年5月1日起，TePay 与 TePass 两款插件均已涨价。</p>
                            </div>
						<div class="text-muted">
						  <h5 class="mt-4 pt-2"><i class="mdi mdi-chevron-right"></i> 购买方式：</h5>
						  <ul>
							<li class="mb-2">一、在下面的付款界面直接付款购买即可（推荐）。</li>
							<li class="mb-2">二、联系QQ：744272645 咨询购买。</li>
							<li class="mb-2">三、联系微信：744272645 购买（不常在线）。</li>
						  </ul>
						  
						<?php echo TePass_Plugin::getTePass(); ?>

						</div>
					</div><!--end col-->
				</div>
			</div><!--end teb pane-->
			
			<div class="tab-pane fade" id="pills-jieshao" role="tabpanel" aria-labelledby="pills-dayone-tab">
				<div class="row justify-content-center">
					<div class="col-md-10 mt-4 pt-2">
					   <div class="text-muted">
							<?php $this->content(); ?>
						</div><!--end container--> 
                       </div>
                </div><!--end row-->
            </div><!--end teb pane-->
                

			<div class="tab-pane fade" id="pills-jiaocheng" role="tabpanel" aria-labelledby="pills-daythree-tab">
				<div class="row justify-content-center">
					<div class="col-md-10 mt-4 pt-2">
						<div class="text-muted">
						   <?php include 'Parsedown.php';
						   $Parsedown = new Parsedown();
							echo $Parsedown->text($this->fields->jiaocheng);
						    ?>
						</div>
					</div><!--end col-->
				</div>
			</div><!--end teb pane-->
			
				<div class="tab-pane fade" id="pills-pinglun" role="tabpanel" aria-labelledby="pills-daythree-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <?php $this->need('comments.php'); ?>	

                        </div><!--end col-->
                    </div>
                </div>
                
            </div><!--end tab content-->
    </div>
</section>
<!-- End Work Detail -->

<?php $this->need('footer.php'); ?>
