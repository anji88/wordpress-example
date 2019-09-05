<?php
    $version = $_GET['v'];
    if(!isset($version)){
        $version = "3";
    }
?>


<?php 
    global $div_head_end;
    $siteUrl = get_site_url();
    $div_head_end = '
        <link rel="canonical" href="' . $siteUrl . '" />
    
    '; 
?>
<?php get_template_part("templates/pages/landing/landingv$version"); ?>