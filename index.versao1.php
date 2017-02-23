<!-- index.php -->
<?php
get_header();
/*
echo "conteúdo da index.php<br>";
echo get_theme_root();
echo "<br>";
echo bloginfo('template_url');
*/
?>
<br>
<?php 
//the_excerpt();
?>
<!--
<div class="container">
	<div class="row">
		<?php
		query_posts('posts_per_page=3');
		while(have_posts()) : the_post();
		?>
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		  <div class="caption">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<p>
			<?php echo substr(get_the_excerpt(), 0,120);?>
			</p>
			<p align="center"><a href="<?php the_permalink(); ?>" class="btn btn-info btn-md">Read more</a></p>
		  </div>
		</div>
	  </div>
	  <?php
		endwhile;
		wp_reset_query();
		?>
	</div>
</div>
-->

<div class="jumbotron">
        <div class="container">
			<!-- colocar aquele objeto MEDIA ou CARD -->
        
			<div class="col-xs-12 col-md-4">
				<br>
				<?php
				if ( get_the_post_thumbnail($post_id) != '' ) {
					//echo "<!-- " . the_post_thumbnail() . " -->"; 
					//echo "<script>console.log('".the_post_thumbnail()."');</script>";
				  
					echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
				   the_post_thumbnail();
				  echo '</a>';
					
				} else {
					//echo "<!-- " . catch_that_image_oustide_loop($post_id) . " -->"; 
					//echo "<script>console.log('".catch_that_image_oustide_loop($post_id)."');</script>";
					
				 echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
				 echo '<img src="';
				 echo catch_that_image();
				 echo '" alt="" />';
				 echo '</a>';
					
				}

				?>
			</div>
			<div class="col-xs-12 col-md-8">
				<?php
				query_posts('posts_per_page=1');
				while(have_posts()) : the_post();
				?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						<p><?php echo substr(get_the_excerpt(), 0,180); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn btn-info btn-md">Read more</a>
				<?php
				endwhile;
				wp_reset_query();
				?>
			</div>
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
                <?php
				$c = 0;
                while(have_posts()) : the_post();
					$c++;
					if ($c > 0){
						// Fix bug when it comes from Search/Tag filters...
					?>
						<!--
						<div class="date" style="clear: both;">
							<p><?php the_time('d'); ?> <span><?php the_time('M'); ?></p>
						</div>-->
						<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                        <p><?php the_excerpt();?>
                        <p class="text-muted">Posted by <?php the_author();?> on <?php the_time('F jS, Y');?></p>             
					<?php
					}
                ?>
						           
                <?php
                endwhile;wp_reset_query();
                ?>
            </div>
        </div>
    </div><!-- /.container -->

<?php
get_footer(); 
?>
<!-- /index.php -->