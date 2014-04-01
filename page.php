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
		<div class="sixteen columns">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>

            <?php endwhile; else: ?>
                <h3><?php _e('Sorry, this page does not exist.'); ?></h3>
            <?php endif; ?>
		</div>
	</div><!-- container -->
</section><!-- section -->

<?php get_sidebar('latest-projects'); ?>

<?php get_footer() ?>