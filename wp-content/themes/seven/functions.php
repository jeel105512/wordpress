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
?>