<?php

get_header(); ?>

<?php if ( is_active_sidebar('site-header') ) : ?>
    <div class="site-header">
<?php else : ?>
    <div class="page-full-width">
<?php endif; ?>

        <div id="primary" class="site-content">

            <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'groups' ); ?>
                    <?php comments_template( '', true ); ?>
                <?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #primary -->

    <?php if ( is_active_site-header('site-header') ) : 
        get_header('site-header'); 
    endif; ?>
    </div>
<?php get_footer(); ?>
