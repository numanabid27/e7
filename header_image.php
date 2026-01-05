<?php
// header_image.php

// Set default values if variables are not passed
if (!isset($hasHeaderTag)) {
    $hasHeaderTag = false; // Default text
}
if (!isset($isHeading)) {
    $isHeading = false; // Default text
}
if (!isset($headerTag)) {
    $headerTag = ""; // Default text
}

if (!isset($headerClass)) {
    $headerClass = ""; // Default class
}
if (!isset($headerText)) {
    $headerText = ""; // Default class
}
if (!isset($headerImg)) {
    $headerImg = ""; // Default class
}
?>
<style>
#header-image-container {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-image: url(assets/images/header_image.png);
    min-height: 50vh;
    align-content: center
}
#header-image-container h1{
    font-family:Poppins !important;
}

#overlay-div {
    /* position: absolute;
    top: 0;
    height: 100%; */
    width: 100%;
    /*text-align:justify;*/
}
</style>
<!-- <div class="container-fluid p-0">
   <div class="image-container">
      <img src="assets/images/header_image.png" alt="Solar Glass">
      <div id="overlay-div" class="<?php echo $headerClass;?>">
            <?php echo $headerTag; ?>
        </div>
   </div>
</div> -->
<?php
if(!$hasHeaderTag){
?>
<div class="container-fluid" id="header-image-container">
    <div id="overlay-div" class="<?php echo $headerClass;?>">
        <?php echo $headerTag; ?>
    </div>
</div>
<?php
}else{
?>
<div class="container-fluid" id="header-image-container">
    <div id="overlay-div" class="<?php echo $headerClass;?>">
        <div class="row">
            <div class="col-md-6 p-0">
                <div class="image-container">
                    <img src="<?php echo $headerImg;?>" alt="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'ELECTRO-7 General Trading LLC'; ?>" title="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'ELECTRO-7 General Trading LLC'; ?>" loading="eager" />
                </div>
            </div>
            <div class="offset-md-1 col-md-4 align-content-center">
                <?php
                if($isHeading){
                    ?>
                <h1 class="font-weight-bold text-white">
                    <?php echo $headerText;?>
                </h1>
                <?php
                }else{
                    ?>
                <div class="text-white mt-5">
                    <?php echo $headerText;?>
                </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>
<?php
}
?>