<?php
/**
 * Template part for displaying single events.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Zeal
 */

?>
<?php

    if ( has_post_thumbnail( get_the_ID() ) ) :
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
    else:
        $image = get_template_directory_uri() . '/inc/images/blog-post-default-bg.jpg';
    endif;
    
    switch ( get_theme_mod( 'zeal_post_column_ratio', 'four-eight' ) ) :
                    
        case 'three-nine':
            $col_1_width = 3;
            $col_2_width = 9;
            break;
        case 'four-eight':
            $col_1_width = 4;
            $col_2_width = 8;
            break;
        case 'six-six':
            $col_1_width = 6;
            $col_2_width = 6;
            break;
        default:
            $col_1_width = 4;
            $col_2_width = 8;
            
    endswitch; 
    
?>

<div class="col-sm-12 single-post-wrapper team-member-wrapper event">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="row">
        
            <div class="col-sm-<?php echo esc_attr( $col_1_width ); ?> single-post-left">
                
                <a href="<?php echo has_post_thumbnail( get_the_ID() ) ? esc_url( $image[0] ) : esc_url( $image ); ?>" data-lightbox="<?php esc_attr( the_title() ); ?>">
                    
                    <?php
                        if( has_post_thumbnail( get_the_ID() ) ) : 
                            
                            the_post_thumbnail();
                        
                        else : ?>
                    
                            <img src="<?php echo has_post_thumbnail( get_the_ID() ) ? esc_url( $image[0] ) : esc_url( $image ); ?>" alt="<?php echo __( 'Featured Image', 'zeal' ); ?>" />
                        
                    <?php endif; ?>
                    
                </a>
                
                <div class="event-details single-post-meta">
                    
                    <h2 class="title">

                            <?php if ( get_post_meta( get_the_ID(), 'event_metalocation', true ) ) : ?>
                        
                                <span class="meta-heading"><?php echo __( 'LOCATION :', 'zeal' ); ?></span>
                                <span class="meta-value">
                                    <?php echo esc_html( get_post_meta( get_the_ID(), 'event_metalocation', true ) ); ?>
                                </span>

                                <br>

                            <?php endif; ?>
                        
                            <?php if ( get_post_meta( get_the_ID(), 'event_metadate', true ) ) : ?>

                                <span class="meta-heading"><?php echo __( 'DATE :', 'zeal' ); ?></span>
                                <span class="meta-value">
                                    <?php echo esc_html( date( 'M jS, Y', strtotime( get_post_meta( get_the_ID(), 'event_metadate', true ) ) ) ); ?>
                                </span>
                            
                                <br>
                            
                            <?php endif; ?>
                            
                            <?php if ( get_post_meta( get_the_ID(), 'event_metatime_start', true ) && get_post_meta( get_the_ID(), 'event_metatime_end', true ) ) : ?>
                                
                                <span class="meta-heading"><?php echo __( 'TIME :', 'zeal' ); ?></span>
                                <span class="meta-value">
                                    <?php echo esc_html( date( 'g:i', strtotime( get_post_meta( get_the_ID(), 'event_metatime_start', true ) ) ) ); ?>
                                    <?php echo __('to', 'zeal' ); ?> <?php echo esc_html( date( 'g:i a', strtotime( get_post_meta( get_the_ID(), 'event_metatime_end', true ) ) ) ); ?>
                                </span>

                                <br>
                            
                            <?php endif; ?>
                        
                        <div class="clear"></div>

                    </h2>

                    <?php if ( get_post_meta( get_the_ID(), 'event_more', true ) ) : ?>
                    
                        <div class="">
                            <a class="apply secondary-button" target="_BLANK" href="<?php echo esc_url( get_post_meta( get_the_ID(), 'event_more', true ) ); ?>"><?php echo __('Learn More', 'zeal' ); ?></a>
                        </div>                               

                    <?php endif; ?>
                    
                </div>
                
            </div>
            
            <div class="col-sm-<?php echo esc_attr( $col_2_width ); ?> single-post-right">
                
                <header class="entry-header">
                    <?php esc_html( the_title( '<h1 class="entry-title">', '</h1>' ) ); ?>
                    <hr>
                    <div class="job-title-meta">
                        
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'event_metalocation', true ) ); ?>
                        
                    </div>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    
                    <h2 class="about-heading"><?php echo __('Event Details', 'zeal' ); ?></h2>
                    
                    <?php the_content(); ?>
                    
                    <?php
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zeal' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                    
                </div><!-- .entry-content -->
            
            </div>
            
        </div>
            
    </article><!-- #post-## -->

</div>