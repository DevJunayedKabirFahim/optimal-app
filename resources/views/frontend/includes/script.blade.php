<!-- Including Jquery -->
<script src="{{asset('/')}}frontend/assets/js/vendor/jquery-min.js"></script>
<script src="{{asset('/')}}frontend/assets/js/vendor/js.cookie.js"></script>
<!--Including Javascript-->
<script src="{{asset('/')}}frontend/assets/js/plugins.js"></script>
<script src="{{asset('/')}}frontend/assets/js/main.js"></script>

<!--Newsletter Popup Cookies-->
<script>
    function newsletter_popup() {
        var cookieSignup = "cookieSignup", date = new Date();
        if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
            setTimeout(function () {
                    $.magnificPopup.open({
                            items: {
                                src: '#newsletter-modal'
                            }
                            , type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
                        }
                    );
                }
                , 5000);
        }
        $.magnificPopup.instance.close = function () {
            if ($("#dontshow").prop("checked") == true) {
                $.cookie(cookieSignup, 'true', {
                        expires: 1, path: '/'
                    }
                );
            }
            $.magnificPopup.proto.close.call(this);
        };
    }
    newsletter_popup();
</script>
<!--End Newsletter Popup Cookies-->
