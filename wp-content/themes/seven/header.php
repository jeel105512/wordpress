<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 
        wp_head() lets wordpress let in control of our head section 
        meaning it allows wordpress to load whatever it needs to load here like styles or scripts

        we can also link out custom styles in here
        but to do that we need to create a new php file called "functions.php"
        where we can call all of our scripts
    -->
    <?php wp_head(); ?>
</head>
<body>
<nav>
    <!-- 
        we can use site_url() to navigate to different pages using the slugs as
        their string argument
        if we do not provide any argument then it goes to the home page
        so we can just use site_url(); instead of home_url();
     -->
    <a href="<?php echo site_url(); ?>">Home</a>
    <a href="<?php echo site_url("the-loop") ?>">The Loop</a>
</nav>