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
                            <h1 class="title">404 - <?php _e('页面没找到'); ?></h1>
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
		<script type="text/javascript">
			var dispatch = function() {
				q = document.getElementById("q");
				if (q.value != "" && q.value != "站内搜索") {
					window.location.href = '/search/' + q.value;
					return false;
				} else {
					return false;
				}
			}
		</script>			
		<div class="search-box">
			<form method="get" onsubmit="return dispatch()" target="_blank" class="new-searching-unit" data-regestered="regestered">
				<input id="q" type="text" size="27" name="q" autocomplete="off" placeholder="搜索你喜欢的..." value="">
				<a href="#" onclick="return dispatch()" class="go"></a>
			</form>
			<div class="search-hint"></div>
			<div class="hot-words">
				<span>热门搜索：</span>
				<a href="/search/TePass">TePass</a><span>，</span>
				<a href="/tag/设计">交互设计</a><span>，</span>
				<a href="/category/allforpay">付费专栏</a>
			</div>
		</div>
    </article>
</section>
<!-- End Work Detail -->
<?php $this->need('footer.php'); ?>
