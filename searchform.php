<?php
/**
 * The template for displaying search forms in Shape
 *
 * @package Shape
 * @since Shape 1.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<!--
		<input type="text" class="field form-control allwidth" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" />
		<button type="submit" class="submit btn btn-default" name="submit" id="searchsubmit"><?php esc_attr_e( 'Search', 'shape' ); ?></button>
	-->
	<div class="input-group">
		<input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" name="submit" id="searchsubmit">&nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;</button>
		</span>
		
	</div>
</form>
<!--<label for="s" class="assistive-text"><?php _e( 'Search in the site', 'shape' ); ?></label>-->