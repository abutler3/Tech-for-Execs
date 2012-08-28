<?php
/**
 * The template for displaying search forms in Tech-To-Execs
 *
 * @package WordPress
 * @subpackage Techs-to-execs
 * @since Techs-to-execs 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e('','T4E' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'Techs-to-execs' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'Techs-to-execs' ); ?>" />
	</form>