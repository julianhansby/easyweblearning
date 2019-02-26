<?php
/**
    template name: CV Landing Page - 2019
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>

<div class="wrap">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

    <?php if ( is_home() && ! is_front_page() ) : ?>

    <?php else : ?>

    <?php endif; ?>            

            <?php
            if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) : the_post();
                    ?>

                    <div class="entry-content">
                        <?php
                        /* translators: %s: Name of current post */
                        the_content( sprintf(
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
                            get_the_title()
                        ) );

                        wp_link_pages( array(
                            'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->

                <?php endwhile;

            else :
                ?>
                    <div class="entry-content">
                        <?php
                        /* translators: %s: Name of current post */
                        the_content( sprintf(
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
                            get_the_title()
                        ) );

                        wp_link_pages( array(
                            'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->

           <?php endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
