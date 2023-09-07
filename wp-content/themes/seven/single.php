<?php
    /*
    if we want to control the content of the individual/details page of the block post using the_permalink() method,
    we need to create a new php file named "single.php"

    so this single.php file will work as a blue print for the block post page to render its content
    */
    while(have_posts()){
        the_post(); ?>
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
    <?php }
?>