<?php get_template_part('header'); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php $imgurl = wp_get_attachment_image_src(get_field('custom_header_image'), 'slideshow'); ?>
    <div class="pageHeader" style="background: url(<?php echo $imgurl[0]; ?>);background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container page">
        <div class="row">
            <div class="col-md-6">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <?php endwhile; else : ?>
        <div class="container page">
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        </div>
    <?php endif; ?>
    
<?php get_template_part('footer'); ?>