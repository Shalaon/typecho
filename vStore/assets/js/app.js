/* Template Name: Landrick - Saas & Software Landing Page Template
   Author: Shreethemes
   E-mail: shreethemes@gmail.com
   Version: 1.0.0
   Created: August 2019
   File Description: Main JS file of the template
*/
/****************************/
/*         INDEX            */
/*===========================
 *     01.  Loader          *
 *     02.  Menu            *
 *     03.  Sticky Menu     *
 *     03.  Back to top     *
 ===========================*/
window.lazySizesConfig = window.lazySizesConfig || {};
window.lazySizesConfig.loadHidden = false;
! function($) {
    "use strict";
    // Loader 
    $(window).on('load', function() {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    });
    // Menu
    $('.navbar-toggle').on('click', function(event) {
        $(this).toggleClass('open');
        $('#navigation').slideToggle(400);
    });
    $('.navigation-menu>li').slice(-1).addClass('last-elements');
    $('.menu-arrow,.submenu-arrow').on('click', function(e) {
        if ($(window).width() < 992) {
            e.preventDefault();
            $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
        }
    });
    $(".navigation-menu a").each(function() {
        if (this.href == window.location.href) {
            $(this).parent().addClass("active");
            $(this).parent().parent().parent().addClass("active");
            $(this).parent().parent().parent().parent().parent().addClass("active");
        }
    });
    // Clickable Menu
    $(".has-submenu a").click(function() {
        if (window.innerWidth < 992) {
            if ($(this).parent().hasClass('open')) {
                $(this).siblings('.submenu').removeClass('open');
                $(this).parent().removeClass('open');
            } else {
                $(this).siblings('.submenu').addClass('open');
                $(this).parent().addClass('open');
            }
        }
    });
    $('.mouse-down').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 0
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    //Sticky
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            $(".sticky").addClass("nav-sticky");
        } else {
            $(".sticky").removeClass("nav-sticky");
        }
    });
    // Back to top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    $('.back-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 3000);
        return false;
    });
    //vipbox
    $('.payvip-box .vip-info').on('click', function() {
        var _this = $(this);
        var id = _this.data('id');
        _this.parents(".payvip-box").find('.vip-info').removeClass("active")
        _this.addClass('active');
        $("input[name='order_type']").val(id);
    });

    $("#pay-submit").on("click", function(event) {
        //阻止默认提交事件
        event.preventDefault();
        var order_type = $("input[name='order_type']").val();
        if (order_type) {order_type = order_type}else{order_type = 'vip'}
        var pay_type = $("input[name='pay_type']:checked").val(); //1 支付宝 2 微信
        var coupon = $("input[name='coupon']").val(); // 优惠码
        var nonce = $(this).attr('data-nonce');
        // 获取支付方式
        popup.showToast({
            type: "it",
            text: "订单创建中...",
            time: 40000
        });
        senData(order_type, pay_type, coupon, nonce);
        return false;
    });

    // 请求订单 paytype ; postid
    function senData(order_type, pay_type, coupon,nonce) {
        var pay_type,template
        if (pay_type == 1) {
            // 支付宝方式
            template = "AlipayQrcode";
        } else if (pay_type == 2) {
            //微信方式
            template = "WeixinpayQrcode";
        }
        $.post(ritheme.ajaxurl, {
            "action": "go_to_pay",
            "order_type": order_type,
            "pay_type": pay_type,
            "coupon": coupon,
            "nonce": nonce
        }, function(result) {
            // if start
            if (result.status == 1) {
                popup.hideToast();
                popup.showCustomModal({
                    template: template, // AlipayQrcode; WeixinpayQrcode ;Popup；PayMethod
                    layerClose: 0,
                    data: {
                        price: result.price,
                        code: result.qr,
                        desc: result.msg+'支付完成后请等待5秒左右，期间请勿关闭此页面'
                    }
                });
                // 每4秒检测一次是否支付，如果支付则刷新页面
                var wppayOrder = setInterval(function() {
                    $.post(ritheme.ajaxurl, {
                        "action": "check_pay",
                        "order_trade_no": result.num
                    }, function(data) {
                        if (data.status == "1") {
                            clearInterval(wppayOrder);
                            popup.hideModal('customModal');
                            popup.showToast({
                                type: "text",
                                text: "恭喜您支付成功"
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    });
                }, 4000);
            }else {
                popup.showToast({
                    type: "text",
                    text: "获取支付信息失败"
                });
            }
            // end
        }, 'json');
    }

}(jQuery)


