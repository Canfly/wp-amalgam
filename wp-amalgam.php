<?php
/*
Plugin Name: Amalgam WP
Plugin URI: https://canfly.org/wp-amalgam
Description: Amalgam tools for Wordpress
Version: 0.0
Author: Adiom From Canfly
Author URI: https://canfly.org/adiom
*/


// рофлю с такого кода, но я последний
// раз писал поноценный плагин в июне 2021 года
// так что пока вспоминаю что как

function amalgam_hash_in_post_name($the_content)
{
	return ($the_content . "<b>hash:</b> ". hash('sha256', $the_content));

}

add_filter('the_content', 'amalgam_hash_in_post_name')

?>