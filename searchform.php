<?php
/**
 * The template for displaying search forms in Shape
 *
 * @package Shape
 * @since Shape 1.0
 */
?>
<form class="form-inline" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="form-group">
		<!--<label for="s" class="assistive-text"><?php _e( 'Search in the site', 'shape' ); ?></label>-->
		<input type="text" class="field form-control" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" />
		<button type="submit" class="submit btn btn-default" name="submit" id="searchsubmit"><?php esc_attr_e( 'Search', 'shape' ); ?></button>
	</div>
</form>
