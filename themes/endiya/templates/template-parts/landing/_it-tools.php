<!--  spice works tools start -->
<?php
   $templateUrl = get_template_directory_uri();
   $pathUrl = get_stylesheet_directory_uri();
   ?>
<div class="tools__spiceworks">
<div class="tools">
   <div class="tools__block">
      <div class="tools__img">
         <img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bitmap.svg" alt="bitmap">
      </div>
      <div class="tools__information">
         <h1 class="tools__heading">Get IT Tools</h1>
         <div class="tools__content">IT pro? We’ve got free tools to help sysadmins,
            network engineers, technicians, and industry experts
            set up and troubleshoot networks.
         </div>
         <a href="https://community.spiceworks.com/tools/" target="_blank" >
         <button class="tools__find-tool find-tools">Find Tools</button>
         </a>
      </div>
   </div>
</div>
<div class="tools">
   <div class="tools__block">
      <div class="tools__img">
         <img class="lazyload" data-src="<?php echo $pathUrl; ?>/assets/images/research-products.png" alt="research  products ">
      </div>
      <div class="tools__information">
         <h1 class="tools__heading">Got IT purchases to make? Find the product info that’s
right for you.</h1>
         <div class="tools__content">See what solutions have worked for your IT peers. Read product reviews for IT pros, from IT pros. Research you need... right at your fingertips.
         </div>
         <a href="https://community.spiceworks.com/products/?utm_medium=internal&utm_source=www_homepage&utm_campaign=new_daily_destination_www_homepage" target="_blank" >
         <button class="tools__find-tool research-product">Research Products</button>
         </a>
      </div>
   </div>
</div>
</div>
<!--  spice works tools end -->