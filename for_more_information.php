<?php
// header_image.php

// Set default values if variables are not passed
if (!isset($infoText)) {
    $infoText = ""; // Default text
}
?>
<div class="bg-color-light-grey">
    <div class="container-fluid custom_container  px-0" data-aos="fade-up" data-aos-duration="2000">
        <div class="p-md-5 p-3">
            <p class="custom_text"><?php echo $infoText;?></p>
        </div>
    </div>
</div>