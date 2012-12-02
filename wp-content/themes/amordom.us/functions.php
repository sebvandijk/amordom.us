<?php

//sidebars
if ( function_exists('register_sidebar') )
	register_sidebar(array('name'=>'sidebar',
	'before_widget' => '<div class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
));

?>