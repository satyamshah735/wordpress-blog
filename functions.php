<?php

register_nav_menus(
array('primary-menu'=>'Header Menu')

);

add_theme_support('post-thumbnails'); //for top image of a page

add_theme_support('custom-header');  //used for adding website logo through header


//for widget menu in apperance and sidebar
function ourWidgetsInit(){
register_sidebar(array(
	'name'=>"Sidebar Location",
	'id'=>"sidebar"
)
);									
}

add_action('widgets_init','ourWidgetsInit');

//custom background
add_theme_support('custom-background');

//add excerpt to page
add_post_type_support('page','excerpt');




