<?php get_header(); ?>

<?php

    if(have_posts()){

        while (have_posts()) {

            the_post();
            ?>
            <h2><?php the_title(); ?></h2>
            <small>Posted on <?php the_time('F j, Y g:i a'); ?> in <?php the_category(); ?></small>
            <p><?php the_content(); ?></p>
            <hr>
        <?php
        }
    }
?>


<?php get_footer(); ?>