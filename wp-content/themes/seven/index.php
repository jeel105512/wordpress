<?php 
    get_header();

    /*
    The Loop
    we can use have_posts() to see if we have any post
    then we can do the following,
    the_post();
    then the_title() to get the title of the post
    then the_content() to get the content of the post
    
    we can use the function the_permalink() to get the url for the block post individual/detail page
    
    if we want to control the content of the individual/details page of the block post using the_permalink() method,
    we need to create a new php file named "single.php"
    */
    while(have_posts()){
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <p><?php the_content() ?></p>
        <hr>
    <?php }

    /*
    get_theme_file_uri("path")
    this will help us to access the directory and its resources inside the wp_content
    without us needing to type a long uri

    we can also use this function in the functions.php to load our javascript
    */ 
    ?><img src="<?php echo get_theme_file_uri("/images/Card-5.jpg"); ?>" alt=""><?php

    get_footer();
?>