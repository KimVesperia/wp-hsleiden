<?php

// link function
function hsleiden_files() {
    // link js
    wp_enqueue_script(
        "main-hsleiden-js",
        get_theme_file_uri("/js/scripts-bundled.js"),
        null,
        "1.0",
        true
    );
    // link google fonts
    wp_enqueue_style(
        "custom-google-fonts",
        "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i"
    );
    // link icon
    wp_enqueue_style(
        "font-awesome",
        "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    );
    // link css
    wp_enqueue_style("hsleiden_main_styles", get_stylesheet_uri());
}

// call function links
add_action("wp_enqueue_scripts", "hsleiden_files");

// feature function
function hsleiden_features() {
    add_theme_support("title-tag"); // unique title tag/tab for every page
}

// call function features
add_action("after_setup_theme", "hsleiden_features");

?>
