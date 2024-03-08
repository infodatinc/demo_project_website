</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">



<!-- <div class="experience_footer">

<div class="footer_content pw-1090">
<div class="footer_numbers">
        <p class="numbers">15+</p>
        <p class="footer_description">Case Studies</p>
      </div>
      <div class="footer_numbers">
        <p class="numbers">60+</p>
        <p class="footer_description">Clients & Customers</p>
      </div>
      <div class="footer_numbers">
        <p class="numbers">25+</p>
        <p class="footer_description">Years of experience</p>
      </div>
</div>
  </div> -->


<div class="Infodat_footer"> 
<div class="Infodat_footerContent pw-1090">

  <div>
  <img class="Infodatlogo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/InfodatLogoTop.svg">
  <div class="hidden_socials_top">
  <h6 class="copyright_text">Copyright © 2023 Infodat. All rights reserved.</h6>
  <div class=" socialmedia">
  <!-- <img class="social_Icons" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons8-facebook.svg"> -->
  <img class="social_Icons"   src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Icon-linkedin.svg">
 <img class="social_Icons"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Icon-facebook.svg">

  </div>
  </div>
</div>


<div class="column1_footer">
<div class="footer_industries wwd_section">
  <div class= "wwd_header">
  <h4 class="Whatwedo_text" >What We Do </h4>
  </div>

  <div class="wwd_leftcolumn">
  <!-- <a class="industriesList_footer">Healthcare</a> -->
  <a class="industriesList_footer" href="<?php echo get_permalink(get_page_by_title('healthcare')); ?>">Healthcare</a>
    <a class="industriesList_footer" href="<?php echo get_permalink(get_page_by_title('Oil & Gas')); ?>">Oil & Gas</a>

    <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('government')); ?>">Government</a>
  <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('manufacturing')); ?>">Manufacturing</a>

  </div>

  <div class="wwd_rightcolumn">
  <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('data_services')); ?>">Data Services</a>
  <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('App Development')); ?>">App Development</a>
  <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('automation')); ?>">Automation</a>
    <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('consulting')); ?>">Consulting</a>



  <!-- <a class="industriesList_footer">Consulting</a> -->
</div>
</div>



</div>

<div class="last_column"> 


<div class="column3_footer">
<div class="resource_lists">
<h4 class="Resources_header" >Resources</h4>
  <!-- <h6 class="industriesList_footer">Contact Us</h6> -->
    <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('contact')); ?>">Contact Us</a>
    <a class="industriesList_footer"href="<?php echo get_permalink(get_page_by_title('careers')); ?>">Careers</a>

  <!-- <h6 class="industriesList_footer">Privacy Statement</h6> -->
  <!-- <h6 class="industriesList_footer">Terms of Use</h6> -->
</div>

</div>

<div class="column2_footer">
<div class="company_lists">
<h4 class="Company_header" >Company Info </h4>
  <h6 class="industriesList_footer address">2050 W Sam Houston Pkwy S #1675,
Houston, TX 77042</h6>
  <!-- <h6 class="industriesList_footer">Who We Are</h6> -->
  <!-- <h6 class="industriesList_footer">Public Sector</h6> -->
</div>

</div>


</div>

</div>
<!-- hidden socials  -->
<div class="hidden_socials">
  <div class="socialmedia_bottom">
  <img class="social_Iconsbottom" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-facebook.svg">
  <img class="social_Iconsbottom" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-linkedin.svg">
  </div>
  <h6 class="copyright_text_bottom">Copyright © 2023 Infodat. All rights reserved.</h6>
</div>



</div>

<!-- <div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div> -->






    <!-- Your common footer content here -->


</footer>
</div>
<?php wp_footer(); ?>

<!-- NEHA: THIS SCRIPT NEEDS TO BE PUT INTO THE FOOTER TO RUN THE MOBILE MENU -->

<script>
    jQuery(document).ready(function($) {
        $('.menu-toggle-button, .close-toggle').click(function() {
            $('body').toggleClass('mm-menu-active');
        });
    });
</script>

</body>
</html>