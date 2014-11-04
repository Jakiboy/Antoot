<?php
/*
Plugin Name: Antoot
Plugin URI: 
Description: Disable right click on your Wordpress website, compatible with all wordpress versions (4.0).
Author: JIHAD SINNAOUR
Author URI: http://jihadsinnaour.tk
Version: 1.0
license: GNU General Public License v3 <http://www.gnu.org/licenses/gpl.html>
Text Domain: Antoot
*/
/*
Antoot , Disabling right click on Wordpress websites.
    Copyright (C) 2014  JIHAD SINNAOUR <j.sinnaour.official@gmail.com>.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function DisableRightClick()
{
    // Registering
    wp_register_script( 'Antoot_script', plugins_url( '/js/Antoot.js', __FILE__ ) );
    wp_register_script( 'Antoot_script', get_template_directory_uri() . '/js/Antoot.js' );
    // Include script
    wp_enqueue_script( 'Antoot_script' );
}
add_action( 'wp_enqueue_scripts', 'DisableRightClick' );

?>
