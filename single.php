<!-- single.php -->
<?php
get_header();
?>
<div class="container">
    <div class="row row-bordered">
        <div class="col-md-9">
            <?php
            while(have_posts()) : the_post();
            ?>	
				<!--
                <div class="date">
					<p><?php the_time('d'); ?> <span><?php the_time('M'); ?></p>
				</div>-->
				<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                <p class="text-muted">Posted by <?php the_author();?> on <?php the_time('F jS, Y');?></p>                        
                <p><?php the_content('');?>
                <div class="mx_comments"> 
                <?php comments_template(); ?>
                </div>
            <?php
            endwhile;wp_reset_query();
            ?>
            
        </div>
        <div class="col-md-3" style="padding:0">
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
    </div>
</div>
<?php
get_footer();
?>
<!-- /single.php -->