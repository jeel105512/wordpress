<h1>This is the header from header.php</h1>
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