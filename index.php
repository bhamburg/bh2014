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
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="sixteen columns"><h2><?php the_title(); ?></h2></div>
		<div class="one-third column">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><em><?php the_time('F j, Y'); ?></em></p>
        </div>
            <?php endwhile; else: ?>
            <div class="sixteen columns">
                <h2>Page not found</h2>
                <h4>&ldquo;Anyone who has never made a mistake has never tried anything new.&rdquo;<br /> 
<em>&mdash; Albert Einstein</em></h4>
            </div>
            <?php endif; ?>
        <div class="sixteen columns">
            <div class="nav-previous left"><?php next_posts_link( 'Older posts' ); ?></div>
            <div class="nav-next right"><?php previous_posts_link( 'Newer posts' ); ?></div>
        </div>
	</div><!-- container -->
</section><!-- section -->

<?php get_sidebar('latest-projects'); ?>

<?php get_footer() ?>