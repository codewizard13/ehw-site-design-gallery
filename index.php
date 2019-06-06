<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>

<!--
File Name: ehw-list-dir-images/index.php
Date Created: 04/23/19
Date Modified: 06/06/19
Programmer: Eric Hepperle

Tutorial Title: jQuery Category Filter [VOICE TUTORIAL]
Tutorial Link: https://www.youtube.com/watch?v=aVn0tHZa0CQ
-->

<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">

    <!-- Stylesheets -->  
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine|Open+Sans:400,300,700">

    <title>EHW - Website Design Evaluations (2019)</title>
    
<style>
.ehw-yel-bg {
    background: yellow;
}

.ehw-bg-bisque {
    background: bisque;
}



</style>
    
</head>

<body>

<?php

function debug_log( $object=null, $label=null ){ $message = json_encode($object, JSON_PRETTY_PRINT); $label = "Debug" . ($label ? " ($label): " : ': '); echo "<script>console.log(\"$label\", $message);</script>"; }

?>

    <h2>Site Design Evaluations<br>by ERIC HEPPERLE - 2019</h2>
    <div class="category_container">
        <p class="category_item" id="all">ALL</p>
        <p class="category_item" id="good">GOOD</p>
        <p class="category_item" id="facebook">FACEBOOK</p>
        <p class="category_item" id="poor">POOR</p>
        <p class="category_item" id="app">APP</p>
    </div>
    
    <H2 class='ehw-yel-bg'>Some PHP Code goes here ...</H2>

    <div class="block_container">
    
    <?php
    // This section is derived from the answer here:
    // https://stackoverflow.com/questions/17122218/get-all-the-images-from-a-folder-in-php/#answer-43252004
    
    $sourceDir = "images";
    
    
    $all_files = glob("$sourceDir/*.*");
    
    // echo "<dir>";
    // var_dump($all_files);
    // echo "</dir>";
    
    // set class value associations for image types
    $imageClasses = array(
        "ehwds" => "good",
        "good" => "good",
        "facebook" => "facebook",
        "app" => "app",
        "poor" => "poor"
    );
    
    $supported_format = array('gif','jpg','jpeg','png');

    ?>
    
    <ul style="list-style: none">
    
    <?php
    
    for ($i=0; $i<count($all_files); $i++)
    {
        $image_name = $all_files[$i];
      
        // Parse image name for first part
        $img_parts = explode ('_', $image_name);
        
        $firstPart = $img_parts[0]; // grab first file name part
        $firstPart = explode('/', $firstPart)[1]; // remove folder name      
      
        $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
      
        if (in_array($ext, $supported_format))
        {


            // echo "<div class='ehw-bg-bisque'>\$img_parts[0] = {$img_parts[0]}</div>";
            // echo "<div class='ehw-bg-bisque'>\$firstPart = {$firstPart}</div>";
            // echo "<div class='ehw-bg-bisque'>\$ext = {$ext}</div>";

            // echo "<div style='background: aliceblue'>image $i</div>";
            echo '<li>';
            echo '  <a href="' . $image_name . '">';
            echo '      <img class="design_item ' . $imageClasses[$firstPart] . '" src="'.$image_name .'" alt="'.$image_name.'" />';
            echo '  </a>';
            echo '</li>';

        } else {
            continue;
        }
    }
    ?>
    
    </ul>
    
    </div>
    
<!-- JavaScripts -->

<!-- NOTE: Scripts go at bottom before the closing body tag, listed in order of dependency. jquery.js is always first. -->

<script src="./jquery-3.4.0.min.js"></script>
<script src="https:/ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>

<script src="functionality.js"></script>

</body>

</html>

<!--

NOTES:

    20190606 - Added masonry plugin.
    
    20190423 - Converted to php.
             - Original name: ehCode_2018.06.13_tutWork_jQueryBootstrapGallery.htm
             - WORKS! :)
-->

<!-- SAMPLE IMAGE ELEMENT OUTPUTS: 
    
        <img src="images/good_01.png" class="design_item good">
        <img src="images/ehwds_yada_02.png" class="design_item good">
        <img src="images/poor_03.png" class="design_item poor">
        <img src="images/app_04.png" class="design_item app">
        <img src="images/facebook_05.png" class="design_item facebook">
-->
















