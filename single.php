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
        <div class="sixteen columns">
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
            <?php previous_post_link( '%link', '<button style="float: left"><i class="fa fa-reply fa-fw"></i> Prev</button>' ); ?>
            <?php next_post_link( '%link', '<button style="float: right">Next <i class="fa fa-share fa-fw"></i></button>' ); ?>
	   </div>
		<div class="sixteen columns"><?php comments_template(); ?></div>
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