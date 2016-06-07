<?php
/*
Template Name: Gallery
*/
get_header(); ?>

<div id="primary" class="content-area">
    
        <main id="main" class="site-main" role="main">
            
            <div class="container">
        
                <div class="row homepage-portfolio">

                    <section class="homepage-portfolio">

                        <div class="col-sm-12">

                            <h1 class="entry-title">

                                <?php echo the_title(); ?>

                            </h1>

                            <hr>
                            
                        </div>

                        <?php AddOns::zeal_output_gallery(); ?>

                    </section>
                    
                    <div class="zeal-pagination">
                        <?php echo paginate_links(); ?>
                    </div>
                    
                </div>
            
            </div>

        </main><!-- #main -->
        
    </div><!-- #primary -->

<?php get_footer(); ?>

