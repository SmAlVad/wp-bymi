<?php
/**
 * The template for displaying search forms in Full Page
 *
 * @package Full Page
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Поискать...', 'full-page' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php esc_attr_e( 'Поискать', 'full-page' ); ?>">
</form>
