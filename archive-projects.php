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
        <div class="sixteen columns"><h2>Work Summary</h2>
        <p>I have over ten years of experience in various technical and creative roles, and over five years of experience with accessible, standards-based web development. I have a passion for design and creating user experiences, especially in the context of content management systems such as <a href="http://wordpress.org">WordPress</a>.</p>
        <h4><a class="button" href="<?php bloginfo('url'); ?>/resume"><i class="fa fa-file-o fa-fw"></i> View my r&eacute;sum&eacute;</a></h4>
        </div>
	</div><!-- container -->
</section><!-- section -->
<?php
    //WordPress loop for custom post type
    $my_query = new WP_Query('post_type=projects&posts_per_page=-1');
    if ($my_query->have_posts()) : ?>
        <section class="semi">
            <div class="container">
                <div class="sixteen columns"><h2>Projects</h2></div>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="one-third column">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(400,400); ?></a><br /><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <?php
                            $terms = get_the_terms( $post->ID, 'project-cat' );
						
                            if ( $terms && ! is_wp_error( $terms ) ) : 

	                           $project_cat_links = array();

	                           foreach ( $terms as $term ) {
		                          $project_cat_links[] = '<a href="' . get_term_link( $term->slug, 'project-cat' ) . '">' . $term->name . '</a>';
	                           }
						
	                           $project_cats = join( ", ", $project_cat_links );
                        ?>
                        <p><i class="fa fa-briefcase fa-fw"></i> <em><?php echo $project_cats; ?></em></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <div class="sixteen columns">
                    <div class="nav-previous left"><?php next_posts_link( 'Older Projects' ); ?></div>
                    <div class="nav-next right"><?php previous_posts_link( 'Newer Projects' ); ?></div>
                </div>
	       </div><!-- container -->
        </section><!-- section -->
<?php endif;  wp_reset_query(); ?>


<?php get_footer() ?>