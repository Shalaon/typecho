<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 pb-0 ">
                    <a class="logo-footer" href="https://pangsuan.com"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">胖蒜网</font></font><span class="text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">。</font></font></span></a>
                    <p class="mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">本站是 TePass 和 TePay 专业版的唯一授权购买官网：https://store.pangsuan.com</font></font></p>
                    <!--end icon-->
                </div><!--end col-->
                
                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-muted footer-head"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于本站</font></font></h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="/about.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 关于我们</font></font></a></li>
                        <li><a href="/faq.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 你问我答</font></font></a></li>
                    </ul>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-muted footer-head"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">声明公告</font></font></h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="/services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 服务条款</font></font></a></li>
                        <li><a href="/privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 隐私政策</font></font></a></li>
                    </ul>
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-muted footer-head"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></h4>
                    <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php $this->options->qq(); ?>&amp;site=qq&amp;menu=yes" target="_blank" class="btn btn-primary mt-4 w-100"><i class="mdi mdi-qqchat"></i> 咨询QQ：<?php $this->options->qq(); ?> </a>

                    
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer>
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
           <div style="font-size: 13px;">
                        <p class="mb-0" style="font-size: 15px;">© 2012-2020 Design by <a href="https://pangsuan.com/" target="_blank" class="text-success">胖蒜网</a>    <a href="http://www.beian.miit.gov.cn/" target="_blank" class="text" style=" color: #8492a6; "> <?php $this->options->icp(); ?><br></a></p>
                        <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">盗版举报：本站所开发的插件唯一作者QQ：<?php $this->options->qq(); ?>，其他非本站全部为盗版，切勿相信所谓盗版而对自己和他人带来财产损失。</p>
                        <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">免责申明：在本站购买的插件，使用时不得违反国家法律法规，网络购物请擦亮双眼，防止诈骗。</p>
                    </div>

        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->
    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top" style="display: inline;"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->
	<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/bootstrap.bundle.min.js?ver=5.3.2'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/scrollspy.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/app.js'); ?>"></script>

    <script type="text/javascript" src="https://js.users.51.la/20682985.js"></script>
    <script>
	(function(){
	    var bp = document.createElement('script');
	    var curProtocol = window.location.protocol.split(':')[0];
	    if (curProtocol === 'https') {
	        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	    }
	    else {
	        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	    }
	    var s = document.getElementsByTagName("script")[0];
	    s.parentNode.insertBefore(bp, s);
	})();
	</script>
</body>
</html>