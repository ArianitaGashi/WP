<?php 
function ds_style(){
    wp_enqueue_style('digitalschool-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ds_style');

function ds_menu(){
    register_nav_menus( array(
    'primary'=>'Primary Menu')
);
}

add_action('after_setup_theme', 'ds_menu');

// add_action('wp_enqueue_scripts', function(){
// <<<<<<< HEAD
//     if(is_page_template('aboutus.php')){
//         wp_enqueue_script(
// =======
//     if(is_page_template('aboutus')){
//         wp_enqueue_scripts(
// >>>>>>> 83f1f11c1cd1ecc6cd33cb5c8df3dee0a3cd0c59
//             'tailwind-play',
//             'https://cdn.tailwindcss.com'
//         );
//     }
// });


?>