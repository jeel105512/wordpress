<?php
    /*
    page.php
    we need this file as the details or the individual page file where
    we can access the content of the pages that we have on wordpress and
    customize the structure of the individual page

    we need to do it as by default it will not use anything to structure and display the page content
    same as single.php for posts we need this page.php for the pages
    
    we use the same loop which we used to get the individual posts here to get the pages
    */
    while(have_posts()){
        the_post(); ?>
        <h1>This is a page not a post</h1>
        <a href="<?php echo home_url(); ?>">Back to Blog</a>
        <!-- we can use home_url() to get the link back to home page  -->
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?></p>
    <?php }
?>