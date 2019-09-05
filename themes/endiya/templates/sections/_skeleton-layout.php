<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php $globalTitle = "Software, Forums & Tools for IT Pros | Spiceworks"; ?>
        <title><?php if($pageTitle){ ?><?php echo $pageTitle; ?> <?php } else { ?><?php echo $globalTitle; ?>  <?php } ?></title>
        <!-- meta tags -->
        <!-- don't mention any other tags above the below meta tag -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="https://www.spiceworks.com/wp-content/uploads/2018/02/spiceworks-fav-orange.png" rel="shortcut icon">
        <meta charset="UTF-8" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i" rel="stylesheet">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <!-- CSS files -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" type="text/css" />
        <!-- script files -->
        <!-- SVG Sprite preloading -->
        <!-- TO DO: Inject svg content inside html, instead of sending a request -->
    </head>
    <body>
        <div class="page">
            <div class="page-wrapper">
                <!-- Header section -->
                <?php get_template_part("templates/sections/_header"); ?>
                <!-- if the header and footer are common, you can include there sections here -->
                <!-- Add content here -->