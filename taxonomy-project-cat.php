<?php get_header() ?>

<header>
    <div class="container">
        <div class="sixteen columns">
            <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/bh-logo-white-300.png" alt="Brian Hamburg's logo" /></a>
            <h1><?php bloginfo('title');?></h1>
            <p><?php bloginfo('description');?></p>
        </div>
    </div>
</header>
<section class="white">
    <div class="container">
        <div class="sixteen columns"><h2 class="archive-title"><?php printf( __( 'Project Category Archives: %s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
        <?php if ( category_description() ) : // Show an optional category description ?>
            <p><?php echo category_description(); ?></p>
        <?php endif; ?>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="one-third column">
                <h4><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(400,400); ?></a><br /><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4><br />
        </div>
        <?php endwhile; else: ?>
            <h3><?php _e('Sorry, there are no posts.'); ?></h3>
        <?php endif; ?>
	</div><!-- container -->
</section><!-- section -->

<?php get_sidebar('latest-projects'); ?>

<?php get_footer() ?>