<?php get_header(); ?>

<article id="post-0" class="post not-found">


<div class="entry-content-error" itemprop="mainContentOfPage">


    <div class="error_containter">
        <h1> <span style="color: white;">ERROR</span> 4<span class="error_number">0</span>4!</h1>
        <br>
        <p>Looks like you're trying to find something that no longer exists.</p>
        <!-- <img class=alien src="https://i.imgur.com/YQeOpB1.png" alt="404 Alien"> -->
<button class="button_error" onclick="window.location.href='<?php echo esc_url( get_home_url() ); ?>'">
    <span class="errorbutton_text">Home Page</span>
</button>

    </div>

</div>
</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>

<?php get_footer(); ?>



