<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


// custom widgets
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function widget_yes_search() {
?>		
		<?php _e('Search'); ?>
   		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div>
				<input type="text" name="s" id="s" size="15" /><br />
				<? /*<input type="submit" value="<?php _e('Search'); ?>" />*/?>
			</div>
		</form>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_yes_search');

?>