<!-- Endiya head Start-->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo $metaContent; ?>    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" type="text/css">
</head>
<div class="page restrict-width padding-lr">
<header>
<div class="header">
   <div class="header__logo">
      <img src="https://endiya.com/wp-content/themes/Endiya3.5/assets/images/endiyalogo.png" alt="Endiya Logo">
   </div>
   <div class="header__nav">
   <?php get_template_part("templates/common/_menu"); ?>
   <div class="header__humbuger">
      <span></span>
      <span></span>
      <span></span>
   </div>
   </div>
</div>
</header>
<!--  Endiya head End -->