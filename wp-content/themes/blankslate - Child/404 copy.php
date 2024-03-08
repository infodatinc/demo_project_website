<?php get_header(); ?>
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Not Found', 'blankslate' ); ?></h1>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
<?php get_footer(); ?>




<?php  get_header(); ?>
<article id="post-0" class="post not-found">


<div class="entry-content" itemprop="mainContentOfPage">


    <div class="error_containter">
        <h1>Oops!</h1>
        <p>Looks like you're trying to find something that doesn't exist.<br> The page you are looking for might have been abducted by aliens.</p>
        <!-- <img class=alien src="https://i.imgur.com/YQeOpB1.png" alt="404 Alien"> -->
                    <img class="alien"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/unicorn.webp">

        <p>But don't worry, you can always click on the logo at the top left to go back to the home page.</p>

    </div>

</div>
</article>
<?php get_footer(); ?>