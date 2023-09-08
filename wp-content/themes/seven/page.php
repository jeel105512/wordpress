<?php
    get_header();

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
        <!-- we can use home_url() to get the link back to home page  -->
        <h2><?php the_title() ?></h2>
        <nav>
            <!--
                site_url() this will automatically give us the root url of our current wordpress site
                and anything we include as argument gets added onto it 

                e.g. site_url() => current page's url
                e.g. site_url("/the-loop") => current page's url/the-loop
            -->
            <b><a href="<?php echo site_url("/the-loop") ?>">The Loop</a></b>
            <a href="">LinkedIn Learning</a>
            <a href="">URLs SEO</a>
        </nav>
        <p><?php the_content() ?></p>
        <?php 
                /*
                get_the_ID()
                this wordpress method will give us the id of the page that
                we are currently viewing

                wp_get_post_parent_id()
                this wordpress method will give us the id of the parent page
                of the page that we are viewing currently

                if we want the parent page id of a specific page, we can pass the id
                of that child page in the wp_get_post_parent_id() method

                so, we can do something like this to get the id of the parent page of the child
                page that we are viewing,
                wp_get_post_parent_id(get_the_ID())
                */
                $parentPageId = wp_get_post_parent_id(get_the_ID());
                if($parentPageId){ // if the current page is a child, meaning if the current page has a parent page
                ?>    
                    <div>
                        <!-- 
                            the_title();
                            this will get the title of the current post or page

                            get_the_title();
                            this will get the title of the post or page whose id you pass as an argument

                            get_permalink();
                            instead of being limited to just the current page or post that we have looped through
                            we can pass it an id, and it will give us the permalink for that post or page
                         -->
                        <a href="<?php echo get_permalink($parentPageId); ?>">Back to <?php echo get_the_title($parentPageId); ?></a>
                        <p>You are on the page: <?php the_title(); ?></p>
                    </div>
                <?php } 
            ?>
    <?php }

    get_footer();
?>