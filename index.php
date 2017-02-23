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
		<div class="media">
			<br>
			<div class="media-left">
					<?php
					if ( get_the_post_thumbnail($post_id) != '' ) {
						echo '<a href="'; the_permalink(); echo '" class="media-object">';
					   	the_post_thumbnail();
					  	echo '</a>';

					} else {

					 echo '<a href="'; the_permalink(); echo '">';
					 echo '<img class="media-object thumbnail" src="';
					 echo catch_that_image();
					 echo '" alt="" />';
					 echo '</a>';

					}

					?>
			</div>
			<div class="media-body">
				<?php
				query_posts('posts_per_page=1');
				while(have_posts()) : the_post();
				?>
						<h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
						<br>
						<p><?php echo substr(get_the_excerpt(), 0,180); ?></p>
						<p align="right">
							<a href="<?php the_permalink(); ?>">
							<span class="glyphicon glyphicon-chevron-right"></span> Read more</a>
						<!-- glyphicon glyphicon-chevron-right -->
						</p>
				<?php
				endwhile;
				wp_reset_query();
				?>
			</div>
		</div>
	</div>
</div>

<div id="div_index" class="container">
	<div class="row row-bordered">
		<div class="col-xs-12 col-md-12">
			<div class="nav nav-pills __nav-stacked">
				<?php
				wp_list_categories('orderby=name&title_li=');
				?>
			</div>
		</div>
	</div>
</div><!-- /.container -->

<!--
<div id="div_index" class="container">
	<div class="row row-bordered">
		<div class="col-xs-12 col-md-12">
			<div id="btnGroup" class="btn-group btn-group-justified">
				<?php
				//wp_list_categories('orderby=name&title_li=');
				?>
			</div>

		</div>
	</div>
</div>
-->



<div id="div_posts" class="container">
	<div class="row row-bordered">
		<div class="col-xs-12 col-md-12">
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
				<p class="text-muted">On <?php the_time('F jS, Y');?></p>             
			<?php
			}
		?>

		<?php
		endwhile;wp_reset_query();
		?>
	</div>

	</div>
</div>

<?php
get_footer(); 
?>
<!-- /index.php -->

<script>
$(function(){
	$(".current-cat").addClass("underlined");
	
//	$("#btnGroup li a").addClass("btn btn-primary");
	
	$(".cat-item a").each(function(index){
		console.log(index + ": " + $( this ).text());
		var texto = $(this).html();
		var chevron = "<span class='glyphicon glyphicon-pushpin btn-sm'></span>";
		$(this).html(chevron + "" + texto);
	});
	
	//$(".cat-item a").before("<span class='glyphicon glyphicon-chevron-right'></span>");
});
</script>