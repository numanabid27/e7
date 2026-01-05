<!-- footer section start -->
<style>
.footer-menu ul {
    list-style: none;
}

.footer-menu ul li a {
    color: white;
}

.vr {
    display: inline-block;
    align-self: stretch;
    width: 1px;
    min-height: 1rem;
    background-color: white;
    opacity: .25;
}
</style>
<footer id="footer" style="color:white; background: black;">
   
    
    
    <div class="container-fluid px-md-5 py-5 custom_container">
        <div class="row">
            <div class="col-md-6 align-content-center footer_logo">
                <a href="/" title="ELECTRO-7 General Trading LLC - Home"><img src="assets/images/footer_logo.png" alt="ELECTRO-7 General Trading LLC Logo" title="ELECTRO-7 General Trading LLC" height="50" loading="lazy"></a>
            </div>
            
            <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-md-end justify-content-center">
                    <a class="mx-2 text-white custom_text" href="https://www.facebook.com/people/Electro7/61572615522821/" target="_blank" title="Follow us on Facebook" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                    <a class="mx-2 text-white custom_text" href="https://www.linkedin.com/company/electro7-trading-technologies/" target="_blank" title="Follow us on LinkedIn" rel="noopener noreferrer"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <div class="vr m-2"></div>
                    <p class="m-0 custom_text">Partner with <a href="https://inetgcc.com" target="_blank" title="Visit iNET GCC - Our Partner" rel="noopener noreferrer">iNET</a></p>
                </div>
                <div class="d-flex align-items-center justify-content-md-end justify-content-center">
                    <ul>
                        <li class="custom_text">
                            <a class="mx-2 text-white " href="tel:+97142946335" title="Call us at +971 4 2946335">T: +971 4 2946335</a>
                        </li>
                        <li class="custom_text">
                            <a class="mx-2 text-white" href="mailto:info@electro7.com" title="Email us at info@electro7.com">E: info@electro7.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <hr class="my-3" style="border-color: white;">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <span class="custom_text">Electro7 - All Rights Reserved</span>
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