<!--  header started -->

<div class="website"> 
<div class="website__banner">
    <?php
      get_template_part("templates/sections/_bannerv1");
      ?>
    <script>
           var baseUrl = "<?php echo get_stylesheet_directory_uri(); ?>" ;
    </script>
</div>
<a class="overlay" href="https://www.spiceworks.com/marketing/" target="_self">
      <div class="overlay__notification">
         <!-- <div class="overlay__img">
            <svg>
               <use xlink:href="#solution"></use>
            </svg>
         </div> -->
         <div class="overlay__text">
            Tech vendor? Learn more about our solutions.
         </div>
      </div>
</a>
</div>  
<!--  header end -->