<?php 
 function theme_setup(){
    //Featured Image Support
    add_theme_support('post-thumbnails'); // Adds post thumbnail support.
 }
 add_action( 'after_setup_theme', 'theme_setup' );