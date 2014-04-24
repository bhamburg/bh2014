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
            <?php
                $terms = get_the_terms( $post->ID, 'project-cat' );
						
                if ( $terms && ! is_wp_error( $terms ) ) : 

	               $project_cat_links = array();

	               foreach ( $terms as $term ) {
		              $project_cat_links[] = '<a href="' . get_term_link( $term->slug, 'project-cat' ) . '">' . $term->name . '</a>';
	               }
						
	               $project_cats = join( ", ", $project_cat_links );
                ?>
                <p><i class="fa fa-briefcase fa-fw"></i> <em><?php echo $project_cats; ?></em><br />
                <i class="fa fa-calendar fa-fw"></i> <em><?php the_time('F j, Y'); ?></em></p>
            <?php endif; ?>
            <?php previous_post_link( '%link', '<button style="float: left"><i class="fa fa-reply fa-fw"></i> Prev</button>' ); ?>
            <?php next_post_link( '%link', '<button style="float: right">Next <i class="fa fa-share fa-fw"></i></button>' ); ?>
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