<!-- footer section start -->
<style>
/* Footer Base */
#footer {
    background: #000;
    color: #fff;
    font-size: 14px;
}

/* Logo */
.footer_logo img {
    max-height: 50px;
}

/* Social Icons */
.footer-social a {
    font-size: 16px;
    color: #fff;
    opacity: 0.85;
    transition: all 0.3s ease;
}

.footer-social a:hover {
    opacity: 1;
    transform: translateY(-2px);
}

/* Partner Text */
.footer-partner {
    font-size: 13px;
}

.footer-partner a {
    color: #fff;
    text-decoration: underline;
    font-weight: 700;
}

/* Contact Info */
.footer-contact {
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
}

.footer-contact li {
    margin-bottom: 6px;
}

.footer-contact a {
    color: #fff;
    opacity: 0.85;
    text-decoration: none;
}

.footer-contact a:hover {
    opacity: 1;
}

/* Divider */
.footer-divider {
    border-color: rgba(255, 255, 255, 0.15);
}

/* Copyright */
.footer-bottom {
    font-size: 13px;
    opacity: 0.7;
}

/* Vertical Divider */
.vr {
    width: 1px;
    height: 18px;
    background-color: rgba(255,255,255,0.3);
}

</style>
<footer id="footer">
    <div class="container-fluid px-md-5 py-5 custom_container">

        <div class="row align-items-center justify-content-between">
            <!-- Logo -->
            <div class="col-md-6 text-md-start mb-4 mb-md-0 footer_logo">
                <a href="/" title="ELECTRO-7 General Trading LLC">
                    <img src="assets/images/footer_logo.png" title="ELECTRO-7 General Trading LLC" alt="Electro7" loading="lazy">
                </a>
            </div>

            <!-- Right Content -->
            <div class="col-md-2 text-md-end">
  
                <!-- Contact -->
                <ul class="footer-contact mt-3">
                    <li class="d-flex align-items-center gap-2" style="gap:12px;">
                        <i class="fa fa-phone"></i>
                        <a href="tel:+97142946335" title="+97142946335">+971 4 2946335</a>
                    </li>

                    <li class="d-flex align-items-center mt-2" style="gap:12px;">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@electro7.com" title="info@electro7.com">info@electro7.com</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center footer-social" style="gap:12px;">
                    <a href="https://www.facebook.com/people/Electro7/61572615522821/" title="facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/electro7-trading-technologies/" title="linkedin" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <div class="vr"></div>
                    <span class="footer-partner">
                        Partner with <a href="https://inetgcc.com" title="iNET" target="_blank">iNET</a>
                    </span>
                </div>

            </div>
        </div>

        <hr class="footer-divider my-4">

        <!-- Bottom -->
        <div class="row justify-content-between">
            <div class="col-12 footer-bottom text-center">
                © Electro7 — All Rights Reserved
            </div>
            <div class="col-12 footer-bottom text-center">
                <a href="/privacy-policy" class="text-center d-block" style="color:#fff; padding-top:10px;" title="privacy-policy">Privacy Policy</a>
            </div>
        </div>

    </div>
</footer>


<!-- Back to top button -->
<a id="button"></a>
<!-- footer copy right section end -->

<!-- Cursor elements - only for desktop (non-touch devices) -->
<script>
(function() {
    if (!('ontouchstart' in window || navigator.maxTouchPoints > 0)) {
        var cursorOutline = document.createElement('div');
        cursorOutline.className = 'cursor-dot-outline';
        cursorOutline.style.cssText = 'top: 211.398px; left: 845.831px; opacity: 0;';
        
        var cursorDot = document.createElement('div');
        cursorDot.className = 'cursor-dot';
        cursorDot.style.cssText = 'opacity: 0; top: 211px; left: 846px;';
        
        document.body.appendChild(cursorOutline);
        document.body.appendChild(cursorDot);
    }
})();
</script>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/aos.js"></script>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<!-- Cursor script - only load on desktop (non-touch devices) -->
<script>
(function() {
    if (!('ontouchstart' in window || navigator.maxTouchPoints > 0)) {
        var script = document.createElement('script');
        script.src = './assets/js/cursor.js';
        document.body.appendChild(script);
    }
})();
</script>
</body>

</html>
<script type="text/javascript">
var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});

//Menu Dropdown setting
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    // debugger
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');

    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
    });

    return false;
});
</script>
<script>
AOS.init();
</script>