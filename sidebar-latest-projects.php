<?php
    //WordPress loop for custom post type
    $my_query = new WP_Query('post_type=projects&posts_per_page=4');
    if ($my_query->have_posts()) : ?>
        <section class="semi">
            <div class="container">
                <div class="sixteen columns"><h2>Latest Projects</h2></div>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="four columns">
                        <h5><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(400,400); ?></a><br /><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
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
	       </div><!-- container -->
        </section><!-- section -->
<?php endif;  wp_reset_query(); ?>