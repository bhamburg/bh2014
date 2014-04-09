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
        <?php if ( have_posts() ) : ?>
            <div class="twelve columns"><h2>Search results for &ldquo;<strong><?php the_search_query(); ?></strong>&rdquo;</h2></div>
        <div class="four columns">
                <form method="get" action="<?php echo home_url( '/' ); ?>">
                    <input name="s" id="s" type="text" placeholder="Search again">
                </form>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
		<div class="one-third column">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><i class="fa fa-calendar-o fa-fw"></i> <em><?php the_time('F j, Y'); ?></em></p>
        </div>
            <?php endwhile; else: ?>
            <div class="twelve columns">
                <h2>Your search for &ldquo;<strong><?php the_search_query(); ?></strong>&rdquo; did not produce any results.</h2>
            </div>
            <div class="four columns">
                <form method="get" action="<?php echo home_url( '/' ); ?>">
                    <input name="s" id="s" type="text" placeholder="Search again">
                </form>
            </div>
            <div class="sixteen columns">
                <h4>&ldquo;What I am looking for is not out there, it is in me.&rdquo;<br /> 
                    <em>&mdash; Helen Keller</em></h4>
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