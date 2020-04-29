<?php 

// Favicon logo function
function myfavicon()
{
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('template_directory').'/../assets/images/logo8anos.png" />';
}
add_action('wp_head', 'myfavicon');