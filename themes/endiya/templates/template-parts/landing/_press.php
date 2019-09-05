<?php
$templateUrl = get_template_directory_uri();
?>

<div class="press">
    <div class="press__main padding-lr">
        <h1 class="press__title">In the press</h1>
        <div class="press__popup">
        <?php
            $args = array(
            'post_type' => 'press',
            'paged' => get_query_var( 'paged' ),
            'orderby' => 'publish_date',
            'order' => 'ASC',
            );
            $wp_query = new WP_Query($args);
            while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
            <div class="press__popup-block" data= "<?php echo $post->ID ; ?>">
                <div class="press__popup-content">
                    <div class="press__popup-text">
                    <?php echo get_the_content(); ?>
                    </div>
                    <div class="press__popup-active">  <?php echo get_the_title(); ?>.com</div>
                </div>
                <a class = "m-hide" href="<?php echo get_field('link'); ?>" target="_blank" >
                <button class="press__popup-readmore ">Read More</button>
        </a>
            </div>

            <?php endwhile ?>
        </div>
        <div class="press__links">
            <?php
            while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
            <div class="press__link " data= "<?php echo $post->ID ; ?>">
                <div class="press__icon">
                    <img class="lazyload" data-src="<?php echo get_field('img'); ?>" alt="<?php echo get_the_title(); ?>">
                </div>
            </div>
            <?php endwhile ?>
        </div>
        <?php
        while ( $wp_query->have_posts() ) : $wp_query->the_post();
            ?>
        <div class="m-button" data= "<?php echo $post->ID ; ?>">
        <a  href="<?php echo get_field('link'); ?>" target="_blank">
                <button class="press__popup-readmore m-show">Read More</button>
        </a>
        </div>
        <?php endwhile ?>
    </div>
</div>