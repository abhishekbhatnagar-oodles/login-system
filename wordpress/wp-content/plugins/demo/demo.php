<?php

/**
* Plugin Name: Welcome User PLugin 
* Plugin URL: http://localhost/wordpress/wp-admin/plugins.php
* Description: This is a plugin which is used to welcome user. If the user is logged in it welcome user by its name with some css else it will show the site name with welcome message.
* Version: 1.0
* Author: Abhishek Bhatnagar
* Author URL: http://localhost/wordpress/wp-admin/plugins.php
* Text Domain: Welcome
**/

add_action('wp_body_open','site_head');

// function site_head(){
//     echo '<h3 style="color:green">Welcome Abhishek to our site</h3>';
// }

function welcome(){
    if(!is_user_logged_in()){
        return 'to' . get_bloginfo('name');
    }else{
        $user = wp_get_current_user();
        return $user -> user_login;
    }
}


function site_head(){
    echo '<h3 class=heading>Welcome  ' . welcome() . '</h3>';
}

add_action('wp_print_styles','site_css');

function site_css(){
    echo '<style>
        .heading{
            margin:0;
            color:white;
            background-color:black;
            text-align:center;
        }
        </style>';
}