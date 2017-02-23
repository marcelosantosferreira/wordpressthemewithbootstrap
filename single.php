<!-- single.php -->
<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-9" style="padding-left:0">
            <?php
            while(have_posts()) : the_post();
            ?>	
				<!--
                <div class="date">
					<p><?php the_time('d'); ?> <span><?php the_time('M'); ?></p>
				</div>-->
				<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a> <small><p class="text-muted"><?php the_time('F jS, Y');?></p></small></h3>
				<?php
				$posttags = get_the_tags();
				if ($posttags) {
					//echo "<h3><small><span class='glyphicon glyphicon-tags'></span></small> Post Tags</h3>";
					//echo "<ul class='list-inline'>";
					echo "<div class='btn-group btn-group-sm'>";
					foreach($posttags as $tag) {
						//echo "<pre>$tag</pre>";
						//echo "<li><a href=''>" . $tag->name . '</a></li> ';
						//echo "<li><span class='glyphicon glyphicon-tag'></span><a href=". get_tag_link($tag) . ">". $tag->name ."</a></li>";
						echo "<a href='". get_tag_link($tag) . "' class='label label-primary'><span class='glyphicon glyphicon-tag'></span> ".$tag->name."</a> ";
					}
					//echo "</ul>";
					echo "</div>";
				}
				?>
                <!--<p class="text-muted">Posted by <?php the_author();?> on <?php the_time('F jS, Y');?></p>-->
                <p><?php the_content('');?></p>
				
				<?php
				/*
				$posttags = get_the_tags();
				if ($posttags) {
					echo "<h3><small><span class='glyphicon glyphicon-tags'></span></small> Post Tags</h3>";
					echo "<ul class='nav nav-pills'>";
					foreach($posttags as $tag) {
						//echo "<pre>$tag</pre>";
						//echo "<li><a href=''>" . $tag->name . '</a></li> ';
						echo "<li><a href=". get_tag_link($tag) . ">". $tag->name ."</a></li>";
					}
					echo "</ul>";
				}
				*/
				?>
				<?php
				$posttags = get_the_tags();
				if ($posttags) {
					//echo "<h3><small><span class='glyphicon glyphicon-tags'></span></small> Post Tags</h3>";
					//echo "<ul class='list-inline'>";
					echo "<div class='btn-group btn-group-sm'>";
					foreach($posttags as $tag) {
						//echo "<pre>$tag</pre>";
						//echo "<li><a href=''>" . $tag->name . '</a></li> ';
						//echo "<li><span class='glyphicon glyphicon-tag'></span><a href=". get_tag_link($tag) . ">". $tag->name ."</a></li>";
						echo "<a href='". get_tag_link($tag) . "' class='label label-primary'><span class='glyphicon glyphicon-tag'></span> ".$tag->name."</a> ";
					}
					//echo "</ul>";
					echo "</div>";
				}
				?>
				<?php
				/*
				if(get_the_tag_list()) {
					//echo get_the_tag_list("<ul class='nav nav-pills'><li><span class='glyphicon glyphicon-pushpin'></span>","</li><li><span class='glyphicon glyphicon-pushpin'></span>","</li></ul>");
					echo get_the_tag_list("<div><span class='glyphicon glyphicon-tag'></span>&nbsp;","&nbsp;<span class='glyphicon glyphicon-tag'></span>&nbsp;","</div>");
				}
				*/
				?>
				
                <div class="mx_comments"> 
                <?php comments_template(); ?>
                </div>
            <?php
            endwhile;wp_reset_query();
            ?>
            
        </div>
        <div class="col-md-3" style="padding:0">
            <div class="list-group">
			<br>
            <?php
            query_posts('posts_per_page=12');
            while(have_posts()) : the_post();
            ?>
                <a class="list-group-item" href="<?php the_permalink(); ?>">
                    <h4 class="list-group-item-heading text-primary"><small><span class="glyphicon glyphicon-chevron-right"></span></small> <?php the_title();?></h4>
					<p class="list-group-item-text">
					<small class="text-info"><?php the_time('F jS, Y');?></small><br>
					<?php echo substr(get_the_excerpt(), 0,50) . "..."; ?>
					</p>
                    <!--<p class="list-group-item-text">Posted by <?php the_author();?> on <?php the_time('F jS, Y');?></p>-->
                </a>
            <?php
            endwhile;
            wp_reset_query();
            ?>
            </div>
        </div>
    </div>
</div>
<!--
<script>
	var searchForm = document.getElementById("searchform");
	if(searchForm){
		//searchForm.style.visibility = "hidden";
		//searchForm.style.display = "none";
		//searchForm.style.margin = "100px 30px 30px 100px";
		//searchForm.style.backgroundColor = "gray";
		//searchForm.style.className = "jumbotron";
	}
</script>-->
<?php
get_footer();
?>
<!-- /single.php -->