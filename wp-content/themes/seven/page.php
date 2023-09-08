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
            
            <?php
            /*
            get_pages();
            this function returns the list of pages in memory
            it is similar to wp_list_pages();
            */
                $is_a_parent = get_pages(array( // if the current page has children, this function will return a collection of any and all children pages
                    "child-of" => get_the_ID()
                ));
                if(get_permalink(wp_get_post_parent_id(get_the_ID())) || $is_a_parent){ ?> <!-- if the current page has a parent or if it is a parent -->
                    <p><b><i>side navigation</i></b></p>
                    <b><a href="<?php echo get_permalink(wp_get_post_parent_id(get_the_ID())) ?>"><?php echo get_the_title(wp_get_post_parent_id(get_the_ID())) ?></a></b>
                    <?php
                    /*
                    wp_list_pages();
                    this will give you the links to every single page on our website

                    this function takes an associative array as an argument
                    associative array:
                    $animalSounds = array(
                        "cat" => "meow",
                        "dog" => "bark",
                        "pig" => "oink"
                    );
                    $animalSound["dog"]; to access the value
                    */
                    $parent_page_id = wp_get_post_parent_id(get_the_ID());
                    if($parent_page_id){ // if it is the parent page
                        $findChildOf = $parent_page_id;
                    } else{ // if it is the child page
                        $findChildOf = get_the_ID();
                    }

                    wp_list_pages(array(
                        "title_li" => NULL,
                        "child_of" => $findChildOf,
                        "sort_column" => "menu_order"
                    ));
                    ?>
                <?php }
            ?>
        </nav>
        <p><?php the_content() ?></p>
        <?php 
                /*
                get_the_ID();
                this wordpress method will give us the id of the page that
                we are currently viewing

                wp_get_post_parent_id();
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
                         
                            generally in wordpress functions, get_...(); will return the value so you need to echo it out
                            while the normal functions without the get keyword will echo out by default like the_title();
                        -->
                        <a href="<?php echo get_permalink($parentPageId); ?>">Back to <?php echo get_the_title($parentPageId); ?></a>
                        <p>You are on the page: <?php the_title(); ?></p>
                    </div>
                <?php } 
            ?>
    <?php }

    get_footer();
?>