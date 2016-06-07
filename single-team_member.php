<?php
/**
 * The template for displaying single team members.
 *
 * @package Zeal
 */

get_header(); ?>

    <div id="primary" class="content-area">
        
        <main id="main" class="site-main" role="main">

            <div class="container">

                <div class="row">
            
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'team-member' ); ?>

                        <?php the_post_navigation(); ?>
                    
                    <?php endwhile; // End of the loop. ?>
                    
                </div><!-- row -->
                
            </div><!-- container -->

        </main><!-- #main -->
        
    </div><!-- #primary -->
    
<?php get_footer(); ?>
