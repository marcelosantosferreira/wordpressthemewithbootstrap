<?php get_header(); ?>
 
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="padding-left:0">
                <h3><?php the_title(); ?></h3>    
                <?php the_post(); ?>
                <?php the_content(); ?>
                </div>
                <div class="col-md-3" style="padding:0">
					<br>
			        <div class="list-group">
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
            </div><!-- #container -->
        </div>
<script>
	/*
	var searchForm = document.getElementById("searchform");
	if(searchForm){
		searchForm.style.display = "none";
	}
	*/
	
	var formsCollection = document.getElementsByTagName("form");
	if (formsCollection){
		if (formsCollection.length == 2){
			var form2 = formsCollection[1];
			//console.info(form2.elements);
			
			var elems = form2.elements;
			
			for(i=0; i<elems.length; i++){
				console.info(elems[i].type + " - " + elems[i].name);
				if(elems[i].type == "text" || elems[i].type == "email" || elems[i].type == "textarea"){
					elems[i].className = "form-control";
				}
				if (elems[i].type == "submit"){
					elems[i].className = "btn btn-info";
				}
			}
		}
	}
	
</script>
<?php get_footer(); ?>