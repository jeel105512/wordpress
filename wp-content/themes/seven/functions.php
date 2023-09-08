<?php
    function site_resources(){
        /*
        wp_enqueue_style("argument 1", "argument 2");
        argument 1: this is just a name for us to identify what we are loading
        argument 2: the location of the script

        we use "wp_enqueue_style()" to lode styles
        and "wp_enqueue_script()" to load javascript scripts
        */
        wp_enqueue_style("custom_site_styles", get_stylesheet_uri()); // get_stylesheet_uri() will get us the location of our styles
    }

    /*
    add_action(argument 1, argument 2);
    argument 1: "wp_enqueue_scripts" is a wordpress keyword that is used to load scripts
    argument 2: "function_name", this is a function name that we will run which we create above
    */
    add_action("wp_enqueue_scripts", "site_resources");

    function page_resources(){
        add_theme_support("title-tag");
    }

    /*
    action for the page unique titles
    after_setup_theme will help us get the unique page title for every page
    
    the after_setup_theme action is a critical part of the theme initialization process.
    It allows theme developers to execute code or perform various setup tasks after the theme has been loaded but before
    the WordPress environment is fully set up.

    function my_theme_setup() {
        // Add support for post thumbnails (featured images)
        add_theme_support('post-thumbnails');

        // Register a custom navigation menu
        register_nav_menu('primary', 'Primary Menu');
        
        // Add a custom image size
        add_image_size('custom-thumbnail', 300, 200, true);
    }
    add_action('after_setup_theme', 'my_theme_setup');

    */
    add_action("after_setup_theme", "page_resources")
?>