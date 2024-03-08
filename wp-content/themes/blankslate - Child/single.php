<?php get_header();?>

<div class="top_header_section"> 
    <div class="top_header_div pw-1090">

<div class="top_header_column"> 
    <span class="post_category"><?php echo get_field('post_category'); ?></span>
    <div class="post_title"><?php echo get_field('post_title'); ?></div>
    <div class="post_sub-title"><?php echo get_field('post_sub-title'); ?></div>

                <div class="link_controls">
                    <div class="social_links">

                        <h3 class="share">Share To</h3>
                            <a class="linkedin_share" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_permalink();?>" target="_blank">
                        <i class="fa fa-linkedin-square"></i>
    </a>                        
                            <a class="facebook_share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
        <i class="fa fa-facebook-square"></i>
    </a>
                        <a class="share_square" href="" target="blank"><i class="fa fa-share-square-o" id="related_link_arrow_2"></i></a>
                    </div>
                </div>

</div>
<!-- div for the right image here -->
<div class="top_header_column"> 

   
<?php if( get_field('post_header_image') ): ?>
    <img src="<?php the_field('post_header_image'); ?>" />
<?php endif; ?>
     
</div>

    </div>

</div>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
    <section class="results_section pw-1090">

<h1 class="results_header">Results</h1>
<div class="results_container">
    <?php if( get_field('results_image_1') || get_field('results_field_1') ): ?>
        <div class="item">
            <img src="<?php the_field('results_image_1'); ?>" alt="Icon 1">
            <p><?php the_field('results_field_1'); ?></p>
        </div>
    <?php endif; ?>
    <!-- Repeat this structure for additional groups -->
    <?php if( get_field('results_image_2') || get_field('results_field_2') ): ?>
        <div class="item">
            <img src="<?php the_field('results_image_2'); ?>" alt="Icon 1">
            <p><?php the_field('results_field_2'); ?></p>
        </div>
    <?php endif; ?>

    <?php if( get_field('results_image_3') || get_field('results_field_3') ): ?>
        <div class="item">
            <img src="<?php the_field('results_image_3'); ?>" alt="Icon 1">
            <p><?php the_field('results_field_3'); ?></p>
        </div>
    <?php endif; ?>

    <?php if( get_field('results_image_4') || get_field('results_field_4') ): ?>
        <div class="item">
            <img src="<?php the_field('results_image_4'); ?>" alt="Icon 1">
            <p><?php the_field('results_field_4'); ?></p>
        </div>
    <?php endif; ?>

    <?php if( get_field('results_image_5') || get_field('results_field_5') ): ?>
        <div class="item">
            <img src="<?php the_field('results_image_5'); ?>" alt="Icon 1">
            <p><?php the_field('results_field_5'); ?></p>
        </div>
    <?php endif; ?>

    <?php if( get_field('results_image_6') || get_field('results_field_6') ): ?>
        <div class="item">
            <img src="<?php the_field('results_image_6'); ?>" alt="Icon 1">
            <p><?php the_field('results_field_6'); ?></p>
        </div>
    <?php endif; ?>
    
  </div>







        
      
    </section>



    


<div class="contact-us-section pw-1090">
                    <div class="left-column">
                        <h1>Contact Us</h1>
                        <p>Need more information? We’re here to answer any questions you may have.</p>
                        <p>2050 W Sam Houston Pkwy S #1675,<br> Houston, TX 77042</p>
                        <div class="social-media-icons">
                            <a href="#">
                            
                        <img class="icon-linkedin"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-linkedin.svg">

                            </a>
                            <a href="#">
                  
                        <img class="icon-facebook"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook.svg">

                            </a>
                        </div>
                        <div class="contact-image">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/image-contact.webp">

                        </div>
                    </div>
                    <div class="right-column">
                        <div class="contact-form">
                            <div class="col-2">
                                <div>
                                    <label><span class="required">*</span>First Name</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label><span class="required">*</span>Last Name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div>
                                <label><span class="required">*</span>Email</label>
                                <input type="text">
                            </div>
                            <div>
                                <label class="optional"><span>Phone</span><span class="optional">Optional</span></label>
                                <input type="text"> 
                            </div>
                            <div>
                                <label><span class="required">*</span>Company Name</label>
                                <input type="text">
                            </div>
                            <div>
                                <label class="optional"><span><span class="required">*</span>How Can We Help You?</span><span>500 words</span></label>
                                <textarea></textarea>
                            </div>
                            <div>
                                <button class="form-submit" type="Submit" value="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
</div>


<footer class="footer">
<?php //get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>