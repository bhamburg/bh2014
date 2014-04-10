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
        <div class="sixteen columns"><h2><?php printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h2>
        <?php if ( tag_description() ) : // Show an optional category description ?>
            <p><?php echo tag_description(); ?></p>
        <?php endif; ?>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="one-third column">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><i class="fa fa-calendar-o fa-fw"></i> <em><?php the_time('F j, Y'); ?></em></p><br />
        </div>
        <?php endwhile; else: ?>
            <h3><?php _e('Sorry, there are no posts.'); ?></h3>
        <?php endif; ?>
        <div class="sixteen columns">
            <div class="nav-previous left"><?php next_posts_link( 'Older posts' ); ?></div>
            <div class="nav-next right"><?php previous_posts_link( 'Newer posts' ); ?></div>
        </div>
	</div><!-- container -->
</section><!-- section -->

<?php get_sidebar('latest-projects'); ?>

<?php get_footer() ?>