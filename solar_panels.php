<?php include('header.php'); ?>
<?php 

$hasHeaderTag = true;
$isHeading = true;
$headerClass = "align-content-center";
$headerText = "SOLAR PANELS";
$headerImg = "assets/images/header_images/solar_panels.png";

include('header_image.php'); ?>

<div class="custom_container p-md-5 p-3 container_fluid" data-aos="fade-up" data-aos-duration="2000">
    <div class="row align-items-center">
        <div class="col-md-6 overlay-div">
            <img src="assets/images/product_images/solar_panels_1.png" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2 class="custom_heading" style="font-weight: bolder; " id="tdr_hdng">Clean Energy</h2>
            <hr style="border:1px solid #000;">
            <p class="custom_text">Harness the power of the sun with Electro 7's high-efficiency Solar Panels. Our cutting-edge solar
                technology is designed to maximize energy output while reducing your carbon footprint.

                Applications:

            </p>
             <ul class="custom_text">

                <li><b>Residential:</b> Enhance your home’s energy efficiency and reduce utility costs.</li>


                <li><b>Commercial:</b> Power your business sustainably while lowering operational expenses.</li>

                <li><b>Industrial:</b> Integrate renewable energy solutions into large-scale operations for long-term
                    benefits.</li>
            </ul>
        </div>
    </div>
</div>

<div class="custom_container p-md-5 p-3 container_fluid" data-aos="fade-up" data-aos-duration="2000">
    <div class="row align-items-center">
        <div class="col-md-6 overlay-div">
            <img src="assets/images/product_images/solar_panels_2.png" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2 class="custom_heading" style="font-weight: bolder; " id="tdr_hdng">Why Choose E7 Solar Panels?</h2>
            <hr style="border:1px solid #000;">
            <p class="custom_text">
                <b>High Efficiency:</b> Advanced photovoltaic cells ensure optimal energy conversion, providing maximum
                power output.

                <b>Durability:</b> Built to withstand extreme weather conditions, our solar panels offer long-lasting
                performance with minimal maintenance.

                <b>Eco-Friendly:</b> Generate clean, renewable energy and contribute to a greener, more sustainable
                future.

                <b>Cost Savings:</b> Reduce your energy bills and reliance on traditional power sources with our
                cost-effective solar solutions.
            </p>
        </div>
    </div>
</div>

<?php 
$infoText = "For Solar Panel Solutions in Dubai, Abu Dhabi, Ajman, Sharjah, Umm Al Quwain, Fujairah, or Ras Al Khaimah (United Arab Emirates) or Gulf region please contact us at info@electro7.com";
include('for_more_information.php'); ?>


<?php include('footer.php'); ?>