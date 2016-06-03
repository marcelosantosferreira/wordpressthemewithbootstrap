<?php get_header(); ?>
 
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <h3><?php the_title(); ?></h3>    
                <?php the_post(); ?>
                <?php the_content(); ?>
                </div>
                <div class="col-md-3">
			         <div class="list-group">
                    <?php
                    query_posts('posts_per_page=7');
                    while(have_posts()) : the_post();
                    ?>
                        <a class="list-group-item" href="<?php the_permalink(); ?>">
                            <h4 class="list-grou-item-heading text-primary"><?php the_title();?></h4>
                            <p class="list-grou-item-text">Posted by <?php the_author();?> on <?php the_time('F jS, Y');?></p>
                        </a>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                    </div>
                </div>
            </div><!-- #container -->
        </div>
<?php get_footer(); ?>