<?php 
// SEO Meta Tags for Home Page
$pageTitle = "ELECTRO-7 GENERAL TRADING LLC | Trading Without Boundaries";
$pageDescription = "ELECTRO-7 General Trading LLC - Leading technology solutions and trading company in Dubai, UAE. Specializing in RTLS, RFID, Asset Management, Solar Solutions, and Water Management. Established in 2015, we bridge global suppliers and retailers with quality products.";
$pageKeywords = "ELECTRO-7, Dubai trading company, technology solutions Dubai, RTLS solutions, RFID readers, asset management, solar glass, solar panels, water management, UAE trading, Dubai business";
$pageImage = "https://electro7.com/assets/images/header_images/about.png";
$pageUrl = "https://electro7.com/";
$pageType = "website";

include('header.php'); ?>
<style>
#header-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-image: url(assets/images/header_images/about.png);
    min-height: 50vh;
    align-content: center
}
</style>
<main>
    <div class="banner_section">
      <video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" autoplay muted loop>
        <source src="assets/videos/about_header.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="position-relative text-center banner_text_container" >
          <h1 class="text-white banner_text" style="font-size:4.5rem;"><strong>Trading</strong> without <strong>Boundaries</strong></h1>
      </div>
    </div>
  </main>
<div class="container-fluid p-md-5 custom_container about_us_sec_spacing">
    <div class="row">
        <div class="col-md-6">
            <img src="assets/images/product_images/about_1.png" alt="ELECTRO-7 General Trading LLC - About Us" title="ELECTRO-7 General Trading LLC - About Us" class="img-fluid img-fluid-about" loading="lazy">
        </div>
        <div class="col-md-6 pr-md-5">
            <h2 class="custom_heading"  id="tdr_hdng">About Us</h2>
            <hr style="border:1px solid #000;">
            <p class="custom_text">
                ELECTRO7 serves as the main company, leading our operations with a focus on innovative technological solutions and system integration. We are proud to have two affiliates that complement our business endeavors:
                
            </p>
            <ul class="custom_text">
                    <li><strong>iNET Measuring and Control Equipment:</strong> With 20 years of specializing in advanced measuring and
                        control equipment, iNET supports our mission by providing installation and commissioning, services
                        of solutions for various industries.</li>
                    <li><strong>Hulk Transport:</strong> Dedicated to efficient and reliable logistics, Hulk Transport ensures the seamless
                        movement of goods, enhancing our supply chain capabilities.</li>
    
                </ul>
        </div>
    </div>
</div>
<div class="container-fluid p-md-5 custom_container history_sec_spacing">
    <div class="row flex-column-reverse flex-lg-row">
        <div class="col-md-6 pr-md-5">
            <h2 class="my-2 custom_heading">Our History</h2>
            <hr style="border:1px solid #000;">
            <p class="custom_text">Established in 2015 in Dubai, U.A.E., ELECTRO7 General Trading LLC, has rapidly built a strong market presence based on a core principle: Earn Trust with Business. We excel in bridging the gap between global suppliers and retailers, ensuring that only top-quality products transition smoothly from factories (anywhere in the world) to businesses (In Dubai). Our extensive network and strategic partnerships enable us to streamline the supply chain, providing unparalleled value to our clients.
            </p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/product_images/about_2.png" alt="ELECTRO-7 History - Established 2015 Dubai UAE" title="ELECTRO-7 History - Established 2015 Dubai UAE" class="img-fluid img-fluid-about" id="tdr_hdng" loading="lazy">
        </div>
    </div>
</div>

<div id="aboutUsIndicators" class="carousel slide" data-ride="carousel" data-interval="400000">
    <ol class="carousel-indicators">
        <li data-target="#aboutUsIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#aboutUsIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">

            <div class="slider_row bg-color-light-grey">
                <div class="custom_container container-fluid slider_container">
                    <div class="row align-items-center">
                        <div class="col-md-6 slider_img">
                            <img src="assets/images/product_images/about_3.png" alt="Global Sourcing and Supply Chain Management" title="Global Sourcing and Supply Chain Management" class="img-fluid" loading="lazy">
                        </div>
                        <div class="col-md-6 px-md-5">
                            <h2 class="font-weight-bold slide_heading" id="tdr_hdng">Global Sourcing</h2>
                            <p class="custom_text">We meticulously source products from trusted manufacturers worldwide, ensuring high standards
                                of quality
                                and compliance.</p>
                            <h2 class="font-weight-bold slide_heading">Efficient Supply Chain Mgmt.</h2>
                            <p class="custom_text">Our sophisticated logistics and supply chain solutions guarantee timely delivery and cost
                                efficiency.</p>
                            <h2 class="font-weight-bold slide_heading">Trusted Globally</h2>
                            <p class="custom_text">Our commitment to excellence and integrity has earned us the trust of a diverse clientele,
                                establishing
                                ELECTRO7 GENERAL TRADING LLC as a reliable and preferred partner in the global trading
                                industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container-fluid p-5 bg-color-light-grey">
                <div class="row align-items-center">
                    <div class="col-md-6 slider_img">
                        <img src="assets/images/product_images/about_3.png" alt="Market Insight & Innovation" title="Market Insight & Innovation" class="img-fluid" loading="lazy">
                    </div>
                    <div class="col-md-6 px-md-5">
                        <h2 class="font-weight-bold slide_heading" id="tdr_hdng">Market Insight & Innovation</h2>
                        <p class="custom_text">We stay ahead of market trends and unceasingly innovate to provide our clients with
                            cutting-edge products and services.</p>
                        <h2 class="font-weight-bold slide_heading">Professional Expertise</h2>
                        <p class="custom_text">Our highly skilled team of iNET possesses in-depth industry knowledge and expertise,
                            dedicated to delivering exceptional customer service and support.</p>
                        <h2 class="font-weight-bold slide_heading">Client-Centric Approach</h2>
                        <p class="custom_text">We prioritize our clients' needs, offering personalized solutions that enhance their
                            operational effectiveness and profitability.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#aboutUsIndicators" role="button" data-slide="prev" title="Previous Slide">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#aboutUsIndicators" role="button" data-slide="next" title="Next Slide">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="my-5">
    <div class="image-container about_4_img">
        <img src="assets/images/product_images/about_4.png" alt="ELECTRO-7 Technology Solutions and Services" title="ELECTRO-7 Technology Solutions and Services" loading="lazy">
    </div>
</div>

<div class="container-fluid my-md-5 my-3 custom_container p-md-5">
    <div class="row">
        <div class="col-md-4 col-sm-4 mb-md-0 mb-3">
            <div class="custom-card">
                <img src="assets/images/product_images/about_5.png" alt="ELECTRO-7 Vision Statement - Dubai Vision D33" title="ELECTRO-7 Vision Statement - Dubai Vision D33" class="img-fluid" loading="lazy">
                <h2 class="mt-5 slide_heading">Vision Statement</h2>
                <p class="custom_text">We aspire to lead in delivering innovative and efficient technological solutions that drive
                    operational excellence and safety across industries. Our vision is at par with Dubai Vision D33, as
                    we aim to contribute to Dubai's ambitious economic growth and digital transformation goals. </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 mb-md-0 mb-3">
            <div class="custom-card">
                <img src="assets/images/product_images/about_6.png" alt="ELECTRO-7 Mission Statement - Technology Solutions" title="ELECTRO-7 Mission Statement - Technology Solutions" class="img-fluid" loading="lazy">
                <h2 class="mt-5 slide_heading">Mission Statement</h2>
                <p class="custom_text">Our mission is to deliver innovative and reliable technological solutions that enhance operational
                    competence and security for businesses worldwide. We are committed to providing top-tier service and
                    support, driving sustainable growth, and fostering strong partnerships with our clients.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 mb-md-0 mb-3">
            <div class="custom-card">
                <img src="assets/images/product_images/about_7.png" alt="ELECTRO-7 Quality Statement - Sustainable Solutions" title="ELECTRO-7 Quality Statement - Sustainable Solutions" class="img-fluid" loading="lazy">
                <h2 class="mt-5 slide_heading">Quality Statement</h2>
                <p class="custom_text">We deliver top-notch products and services with a focus on quality. Our commitment to sustainability
                    drives us to use eco-friendly materials, reduce waste, and promote energy efficiency. By embedding
                    green practices into our operations, we strive to support a sustainable future.</p>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>