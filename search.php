<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>

<div class="jumbotron">
        <div class="container">
        <?php
        query_posts('posts_per_page=1');
        while(have_posts()) : the_post();
        ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-info btn-md">Read more</a>
        <?php
        endwhile;
        wp_reset_query();
        ?>
        </div>
</div> 

<div id="div_index" class="container">
        <div class="row row-bordered">
            <div class="col-xs-12 col-md-2">
                <br>
                <div class="nav nav-pills nav-stacked">
                    <?php
                    wp_list_categories('orderby=name&title_li=');
                    ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-10">
				
                <?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span class="label label-default">' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php 
				//shape_content_nav( 'nav-above' ); 
				?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'content', 'search' ); 
					?>
					<!--
					<div class="date" style="clear: both;">
						<p><?php the_time('d'); ?> <span><?php the_time('M'); ?></p>
					</div>-->
					<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<p><?php the_excerpt();?>
					<p class="text-muted">Posted by <?php the_author();?> on <?php the_time('F jS, Y');?></p>        

				<?php endwhile; ?>

				<?php 
				//shape_content_nav( 'nav-below' ); 
				?>

			<?php else : ?>

				<?php 
				//get_template_part( 'no-results', 'search' ); 
				echo "no-results...";
				?>

			<?php endif; ?>
            </div>
        </div>
    </div><!-- /.container -->

<?php
get_footer(); 
?>