<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<!-- Hero Start -->
<section class="bg-half bg-light">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h1 class="title"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </div>
    </div>
</section><!--end section-->
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
<section class="section">
    <article id="post-single" class="container article-content">
      <?php $this->content(); ?>
	  <?php echo TePass_Plugin::getReward(); ?>
    </article>
</section>
<!-- End Work Detail -->
<?php $this->need('footer.php'); ?>
