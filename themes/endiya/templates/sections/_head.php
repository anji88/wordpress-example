
<?php global $div_head_end; ?>
<!-- <html lang="en-us">
   <head> -->
      <?php $globalTitle = "Software, Forums & Tools for IT Pros | Spiceworks"; ?>
      <title><?php
         if ($pageTitle) {
          ?><?php
         echo $pageTitle;
          ?> <?php
         } else {
            ?><?php
         echo $globalTitle;
            ?>  <?php
         }
          ?>
      </title>    
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Add the slick-theme.css if you want default styling -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
      <?php echo $div_head_end; ?>
   <!-- </head>