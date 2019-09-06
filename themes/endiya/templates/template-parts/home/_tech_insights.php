<!-- tech insights started-->
<div class="insights">
   <div class="insights__main padding-lr">
      <h1 class="insights__heading"> Tech Insights</h1>
      <?php
            $args = array(
            'post_type' => 'welcome',
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
            <h1>
            <?php echo get_field('sub_heading') ?>
            </h1>
            <?php echo get_field('title_des') ?>
            <h2> </h2>
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