<!-- tech insights started-->
<div class="insights">
   <div class="insights__main padding-lr">
      <h1 class="insights__heading"> Tech Insights</h1>
      <div class="content-des">Stay on top of IT! Check out the latest data on trending
tech topics.</div>
      <div class="insights__block">
      <?php
            $args = array(
            'post_type' => 'tech_insights',
            'paged' => get_query_var( 'paged' ),
            'orderby' => 'publish_date',
            'order' => 'ASC',
            'posts_per_page' => 3,
            );
            $wp_query = new WP_Query($args);
            while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
         <!-- insights block card started-->
         <div class="insights__blog">
            <div class="insights__blog-img">
               <img class="lazyload" data-src="<?php echo get_field('tech_insight_img'); ?>" alt="blog">
            </div>
            <div class="insights__blog-data">
               <div class="insights__blog-content">
                  <div class="insights__blog-name m-show">SPICEWORKS BLOG</div>
                  <div class="insights__blog-title"><?php echo get_the_title(); ?></div>
                  <div class="insights__blog-text"> <?php echo get_the_content(); ?>
                  </div>
                  <div class="insights__blog-button-holder">
                     <a href="<?php echo get_field('redirection_link'); ?>" target="_self">
                     <button class="insights__blog-button-name">Read More</button>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <?php endwhile ?>
         <!-- insights block card ended-->
      </div>
   </div>
   <!-- insights block card ended-->
   <div class="insights__button-holder">
    <a href="https://www.spiceworks.com/research/" target="_self" >
      <button class="insights__button-text">Read IT Research >>  </button>
      </a>
   </div>
</div>
</div>
<!-- tech insights started-->