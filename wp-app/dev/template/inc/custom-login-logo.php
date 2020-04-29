<?php 
// Admin logo function
function custom_loginlogo()
{
	echo '<style type="text/css">
	h1 a {background-image: url('.get_bloginfo('template_directory').'/../assets/images/logo8anos.png) !important; }
	</style>';
}
add_action('login_head', 'custom_loginlogo');
add_action('login_enqueue_scripts', 'my_login_logo_one');