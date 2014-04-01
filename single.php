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
        <div class="four columns right">
            <?php the_post_thumbnail(400,400); ?>
        </div>
        <div class="twelve columns">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="twelve columns">
	  	    <?php the_content(); ?>
        </div>
        <div class="four columns">
            <p><i class="fa fa-calendar fa-fw"></i> <em><?php the_time('F j, Y'); ?></em><br />
                <i class="fa fa-folder-open-o fa-fw"></i> <em><?php the_category(', '); ?></em><br />
                <i class="fa fa-tag fa-fw"></i> <em><?php the_tags(''); ?></em><br />
            </p>
            <p><?php next_post_link( '%link', 'Next: %title <span class="meta-nav">' . _x( '', 'Next post link' ) . '</span>' ); ?></p><p><?php previous_post_link( '%link', 'Previous: <span class="meta-nav">' . _x( '', 'Previous post link' ) . '</span> %title' ); ?></p>
        </div>
            <?php endwhile; else: ?>
            <div class="sixteen columns">
		      <h3><?php _e('Sorry, this page does not exist.'); ?></h3>
            </div>
	       <?php endif; ?>
        </div>
	</div><!-- container -->
</section><!-- section -->

<?php get_sidebar('latest-projects'); ?>

<?php get_footer() ?>