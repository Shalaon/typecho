<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php
if ($this->_currentPage == 0 || $this->_currentPage == 1) {
  $hidden = 'hidden';
  $cpage = 1;
  $next = 2;
} else {
  $cpage = $this->_currentPage;
  $next = $cpage +1;
}
$totalpage = ceil($this->getTotal() / $this->parameter->pageSize);
if($next < $totalpage){
    $next = $next;
}else{
    $next = $totalpage;
}
?>
<section class="bg-half bg-light">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle(array('category'  =>  _t('%s ')), '', ''); ?></h4>
							<ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
								<li><a href="/category/geek/" class="text-uppercase font-weight-bold text-dark">网络技术</a></li>
								<li><a href="/category/typecho/" class="text-uppercase font-weight-bold text-dark">Typecho相关</a></li>
							</ul>                            
                        </div>

                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row">
         
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
			<div class="col-lg-6 col-md-6 mb-12 pb-2">
				<div class="blog position-relative overflow-hidden shadow ">
				  <article class="post-list d-flex">
				    <?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?> 
					  <?php if($this->fields->thumb){ ?>
					  <a class="focus" href="<?php $this->permalink() ?>">
						<img class="thumb lazyloaded" data-src="<?php $this->fields->thumb(); ?>" src="<?php $this->fields->thumb(); ?>" alt="<?php $this->title() ?>">
					  </a>
					  <?php } ?>
					<?php endif; ?>
					  <div class="other">
						<h4><a class="title mb-0 text-dark" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><?php $this->title() ?></a></h4>
						<div class="excerpt text-muted mb-0"><?php $this->excerpt(50, '...');?></div>
					  </div>
				  </article>
				</div>
			</div><!--end col-->
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
              
		<div class="col-12"> 
		<ul class="pagination justify-content-center mb-0 list-unstyled">
			<li class="active"><a href="#" class="pr-3 pl-3 pt-2 pb-2">第<?= $cpage ?>页，共<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>页</a></li>
			<li><a href="/category/<?php echo $this->category.'/'.$next ?>" class="pr-3 pl-3 pt-2 pb-2">下一页</a></li>
		</ul>
		</div>
	
	</div>
            

            
        </div><!--end row-->
    <!--end container-->
</section>


	<?php $this->need('footer.php'); ?>
