<?php
    
    function services_list($external_list, $img_name, $service_name){ ?>
        <?php $templateUrl = get_stylesheet_directory_uri(); ?>
          <div class="services__list">
         <a href="<?php echo $external_list ?>"  class="services__links" target="_blank"><div class="services__img-holder">
            <img class="lazyload <?php echo trim($img_name,'.png') ?>" data-src="<?php echo $templateUrl; ?>/assets/images/<?php echo $img_name ?>" alt="security" >
         </div>
         <div class="services__text"> <?php echo $service_name ?>
         </div>
         </a>
      </div>
    <?php
    }
    ?>
<div class="services">
   <div class="services__block">
      <?php echo services_list("https://community.spiceworks.com/security?utm_source=internal&utm_medium=www&utm_campaign=www_homepage_categories", "security.png", "Security"); ?>
      <?php echo services_list("https://community.spiceworks.com/databases?utm_source=internal&utm_medium=www&utm_campaign=www_homepage_categories", "databases.png", "Database"); ?>
      <?php echo services_list("https://community.spiceworks.com/networking?utm_source=internal&utm_medium=www&utm_campaign=www_homepage_categories", "networking.png", "Networking"); ?>
      <?php echo services_list("https://community.spiceworks.com/windows?utm_source=internal&utm_medium=www&utm_campaign=www_homepage_categories", "windows.png", "Windows"); ?>
      <?php echo services_list("https://community.spiceworks.com/hardware?utm_source=internal&utm_medium=www&utm_campaign=www_homepage_categories", "hardware.png", "Hardware"); ?>
      <?php echo services_list("https://community.spiceworks.com/?utm_source=internal&utm_medium=www&utm_campaign=www_homepage_categories", "more.png", "More..."); ?>
   </div>
</div>