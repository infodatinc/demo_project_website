<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- <header class="header">
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header> -->

<?php if (is_page('home')) { ?>
<div class="home_slideshow" >


<?php
        if(is_front_page() || is_home() )
        {
            echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]');
            ?>  <?php
        }
        else
        {
            echo "something is wrong";
        }
        ?>

</div>




<div class="entry-content pw-1090"  itemprop="mainContentOfPage">


<!-- HTML content to be displayed on the About page -->
<div class="firstPage">
  <!-- mission statement here -->

<div class="mission_section">
<h2 class="mission_title">Our Mission1</h2>
   <p class="mission_description"> OUR missions is to partner with businesses 
    of all sizes and industries, assisting them in harnessing the full potential of their 
    data to drive informed decision-making and achieve sustainable growth. 
    We strive to deliver exceptional value to our clients by providing cutting-edge analytics solutions and strategic consulting services tailored to their unique needs. </p>
</div>

<div class = "dives_us_section"> 

   <div>
   <h2 class="drivesUs_title">What Drives Us?</h2>

   <div class="drivesUs_rows">
   <img class="drivesus_image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/drivesus_1.svg">
     
     <div class="drivesus_content">
     <h2 class="drivesus_subheader">Expertise</h2>
     <p class="drivesus_description">  Our team consists of highly skilled technical consultants and SMEs in a wide range of industries.</p>
     <img class="drivesus_divider" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/drivesus_divider.svg">
    </div>
   </div>

   <div class="drivesUs_rows">
   <img class="drivesus_image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/drivesus_2.svg">
     
     <div class="drivesus_content">
     <h2 class="drivesus_subheader">Client-Centric Approach</h2>
     <p class="drivesus_description"> We believe in building strong partnerships with our clients. Trusted partner. Forge strong partnerships.</p>
     <img class="drivesus_divider" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/drivesus_divider.svg">

   
    </div>
   </div>


   <div class="drivesUs_rows">
   <img class="drivesus_image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/americasglobe.svg">
     
     <div class="drivesus_content">
     <h2 class="drivesus_subheader">Holistic Solutions</h2>
     <p class="drivesus_description"> We offer end-to-end analytics and consulting services, encompassing data strategy, advanced analytics, predictive modeling, data visualization, and more.</p>

   
    </div>
   </div>



 </div>


<!-- data image floating to the right -->
<div class="image_right">
   <img class="dataImage_right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/MicrosoftTeams-image (1).webp">
</div>


</div>

<!-- client success section -->
<div class="client_successSection">
<h2 class="client_success">Client Success</h2>
   <h6 class="clientSuccess_description"> See how we’ve helped ambitious clients achieve extraordinary outcomes. </h6>
</div>
<!-- beginning of cards row -->
 

<div class="post-excerpts pw-1090">
    <?php
    $args = array(
        'category_name' => 'healthcare',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>               

</div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>



<!-- clients and partners section -->
<div class="clients_partners homepartners">
  <div class="clientsPartners_title">
  <h1 >Trusted by our clients & partners</h1>
  </div>

  <div class="clientLogos_section">

  <div class="clients_toprow">
    <img class="cardinal_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cardinal_logo.png">
    <img class="snowflake_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/snowflake_logo.svg">
    <img class="green_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/green_logo.svg">
    <img class="microsoft_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/microsoft_logo.svg">
  </div>

  <div>
  <img class="partners_divider " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/drivesus_divider.svg">
  </div>

    <div class="clients_bottomrow">
    <img class="patterson_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/patterson_logo.png">
    <img class="pimcore_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pimcore_logo.svg">
    <img class="nabors_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/nabors_logo.png">
    <img class="chevron_Partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/chevron_logo.png">
  </div>

  </div>
</div>






<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>




</div>
</div>
<!-- end of the pw-1099 page here  -->
<!-- <div class="purple_content">
<div class="purple_image">
<div class="purple_section pw-1090">
<div class="grid-container">
  <div class="column1">
  <h1 class="help_text">How can we help?</h1>
  <button class="help_button_left"> <span class=helpbutton_text> Lets get to work </span> </button>
  </div>
  <div class="column2"> 
     <img class="cards_divider purpleDivider" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
 
  </div>
  <div class="column1">
  <h1 class="career_text">Where will your career take you?</h1>
  <button class="help_button"> <span class=helpbutton_text>Careers Page </span></button>
  </div>

</div>

</div>





</div>
</div> -->
      </div>
      <?php } ?>

<!-- Display the content you want to show on the About Us page -->
<?php if (is_page('about')) { ?>
  <div class="clients_partners">
  <div class="clientsPartners_title">
  <h1 >About me page can go here </h1>
  </div>
</div>
<?php } ?>


<!-- start of industries page here -->
<?php if (is_page('healthcare')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header healthcare">
            <div class="subpage-header-content content-width">
                <h1 class="white">Healthcare</h1>
                <p class="white">Cross-disciplinary expertise spanning the entire healthcare value chain</p>
            </div>
        </div>




        <div class="content-width">
            <div class="industry-content">
                
                   <div class="collapse-section-container">
                     <div class="collapse-section"> What Are Your Data Challenges? </div>
                    <section class="collapse-text">
                        <p>With a deep understanding of your organization’s busines needs and use cases, we can design a solution that empowers your team, and works across the ecosystem. </p>
                    </section>
                    </div>


                    <div class="grid_challenges">
<div class="card_challenges1 half-a-border-on-top">
<div class="card_challenges_title">Data Silos</div>
<h4 class="card_challenges_content">Isolated data stored in different departments or systems, hindering a unified view.</h4>
</div>
<div class="card_challenges2">
<div class="card_challenges_title">Data Quality</div>
<h4 class="card_challenges_content">Inaccurate or incomplete data can lead to unreliable insights and decisions.</h4>
</div>
<div class="card_challenges3">
<div class="card_challenges_title">Data Security</div>
<h4 class="card_challenges_content">Concerns about the privacy and security of sensitive information.</h4>
</div>
<div class="card_challenges4">
<div class="card_challenges_title">Scalability</div>
<h4 class="card_challenges_content">Inability to handle and analyze large volumes of data as the business grows.</h4>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >Solutions</h1>

<div class="container_solutions">
<div class="grid_solutions">
<div class="card_solutions">
<div class="card_solutions_title">Data Integration Solutions</div>
<p class="card_solutions_content">High data quality is essential for making informed decisions, conducting meaningful analyses, and maintaining the overall effectiveness of business processes.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Data Quality Management</div>
<p class="card_solutions_content">Through advanced processes such as data profiling, cleansing, and validation, we identify and rectify errors, ensuring that your datasets meet the highest standards.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Cybersecurity Measures</div>
<p class="card_solutions_content">Infodat provides diverse software development expertise for essential architectures and applications, with a proven track record in creating functional, growth-oriented solutions.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Real-time Analytics Platforms</div>
<p class="card_solutions_content">Scaling to effectively accommodate and manage the growing volume of patient data, increasing demand for services, and evolving healthcare needs.</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>

<div class="card_solutions">
<div class="card_solutions_title">Data Integration Solutions</div>
<p class="card_solutions_content">High data quality is essential for making informed decisions, conducting meaningful analyses, and maintaining the overall effectiveness of business processes.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Data Integration Solutions</div>
<p class="card_solutions_content">High data quality is essential for making informed decisions, conducting meaningful analyses, and maintaining the overall effectiveness of business processes.</p>
</div>
</div>

<div class="solutions_img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/solutionsimg.webp"> 

</div>


</div>











                <!-- <div class="comp-enh-section">
                    <h3>
                        Competitive Enhancement
                    </h3>
                    <div class="comp-enh-grid">
                        <div class="comp-enh-grid-left">
                            <div class="flex-left-sub">
                                <section>
                                    <div >
                              <img class="img-column" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-expertise.svg">

                                    </div>
                                    <div class="text-column">
                                        <h4>Healthcare Data Analytics</h4>
                                        <p>Our healthcare data and consulting expertise empowers healthcare organizations to leverage the power of data analytics for improved patient outcomes, operational efficiency,</p>
                                        <img class="hr-icon"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-fade-hr.svg">

                                    </div>
                                </section>
                                <section>
                                    <div >
                                    <img class="img-column"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-client-centric.svg">

                                    </div>
                                    <div class="text-column">
                                        <h4>Process Optimization and Efficiency</h4>
                                        <p>We specialize in optimizing healthcare processes to enhance efficiency and patient experience. Through data analysis and process mapping, we identify areas of improvement, streamline</p>
                                        <img class="hr-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-fade-hr.svg">
                                    </div>
                                </section>
                                <section>
                                    <div >
                                        <img class="img-column" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-holistic.svg">
                                    </div>
                                    <div class="text-column">
                                        <h4>Performance Metrics and KPIs</h4>
                                        <p>Our consulting services focus on establishing meaningful performance metrics and key performance indicators (KPIs) in the healthcare industry. We work closely with healthcare</p>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="comp-enh-grid-right">
                        <img class="img-scale" src="<?php echo get_stylesheet_directory_uri(); ?>/img/image-healthcare.jpg">

                        </div>
                    </div>
                </div> -->
                <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>
                    


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'healthcare',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>





                  
                </div>


                <div class="trusted-partners-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Our Technology Partners</h1>
                                <h4>See how we are Collaborating with Industry Leaders for Innovative Solutions</h4>
                            </div>
                        </div>
                        <!-- <div class="subtitle-right">
                            <a class="view-all-partners-link" href="#">View All Partners</a>
                        </div> -->
                    </div>

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'partners',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top_partners">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <!-- <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div> -->

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
            




                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>


<!-- start of Oil&Gas page here -->
<?php if (is_page('Oil & Gas')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header oil_gas">
            <div class="subpage-header-content content-width">
                <h1 class="white">Oil & Gas</h1>
                <p class="white">proficiency across the complete oil and gas value chain.</p>
            </div>
        </div>
        <div class="content-width">
            <div class="industry-content">
                
                   <div class="collapse-section-container">
                     <div class="collapse-section"> Challenges In The Oil And Gas Industry </div>
                    <section class="collapse-text">
                        <p>With a deep understanding of your organization’s needs and use cases, we can design a data architecture that empowers your teams and works across the ecosystem. </p>
                    </section>
                    </div>


                    <div class="grid_challenges">
<div class="card_challenges1 half-a-border-on-top">
<div class="card_challenges_title">Environmental Impact</div>
<h4 class="card_challenges_content">Ensuring comprehensive rig data is vital for accurate market and operational insights.</h4>
</div>
<div class="card_challenges2">
<div class="card_challenges_title">Rig State</div>
<h4 class="card_challenges_content">Inefficient monitoring of rig states in the oil and gas sector can lead to operational downtime, safety risks, data management challenges</h4>
</div>
<div class="card_challenges3">
<div class="card_challenges_title">Operational Efficiency</div>
<h4 class="card_challenges_content">Optimizing operations is paramount in a fluctuating market.</h4>
</div>
<div class="card_challenges4">
<div class="card_challenges_title">Supply Chain Management</div>
<h4 class="card_challenges_content">Efficient supply chain management is critical for maintaining project timelines and budgets.</h4>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >Solutions</h1>

<div class="container_solutions">
<div class="grid_solutions_two">
<div class="card_solutions">
<div class="card_solutions_title">Sustainable Environmental Management Solutions</div>
<p class="card_solutions_content">Our environmental impact solutions leverage predictive analytics to forecast potential ecological risks, enabling preventative measures.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Optimized Rig State Management System</div>
<p class="card_solutions_content">Our Integrated Rig State Monitoring Platform addresses these challenges by providing real-time monitoring, predictive maintenance, advanced data analytics, and a regulatory compliance dashboard.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Operational Efficiency Solutions</div>
<p class="card_solutions_content">In the fast-paced and resource-intensive oil and gas industry, achieving operational efficiency is key to staying competitive. Our solutions reduce downtime, and optimize resource allocation.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Safety Management</div>
<p class="card_solutions_content">Integrate safety management tools that alert crews to potential hazards and enforce safety protocols.</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>
</div>

<div class="solutions_img_two">
    <img class="solutions_img_right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/oilgas2.webp"> 

</div>


</div>






                <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>
                    


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'oil-gas',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>





                   
                </div>


                <div class="trusted-partners-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Our Technology Partners</h1>
                                <h4>See how we are Collaborating with Industry Leaders for Innovative Solutions</h4>
                            </div>
                        </div>
                        <!-- <div class="subtitle-right">
                            <a class="view-all-partners-link" href="#">View All Partners</a>
                        </div> -->
                    </div>

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'partners',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top_partners">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
            

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                    

                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>

<?php if (is_page('manufacturing')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header manufacturingHeader">
            <div class="subpage-header-content content-width">
                <h1 class="white">Manufacturing</h1>
                <p class="white">Infodat has scaled from a startup organization to a growth company by delivering excellence to our customers. We plan to continue this growth. By providing great service and creating strong relationships.</p>
            </div>
        </div>
       <div class="content-width">
            <div class="industry-content">
                
                   <div class="collapse-section-container">
                     <div class="collapse-section"> Challenges In The Manufacturing Industry </div>
                    <section class="collapse-text">
                        <p>With a deep understanding of your organization’s needs and use cases, we can design a data architecture that empowers your teams and works across the ecosystem. </p>
                    </section>
                    </div>


                    <div class="grid_challenges">
<div class="card_challenges1 half-a-border-on-top">
<div class="card_challenges_title">Supply Chain Disruptions</div>
<h4 class="card_challenges_content">Isolated data stored in different departments or systems, hindering a unified view.</h4>
</div>
<div class="card_challenges2">
<div class="card_challenges_title">Workforce Skill Gaps</div>
<h4 class="card_challenges_content">As manufacturing technologies evolve rapidly, there’s a growing need for skilled labor proficient in these new technologies.</h4>
</div>
<div class="card_challenges3">
<div class="card_challenges_title">Equipment Maintenance And Downtime</div>
<h4 class="card_challenges_content">Unplanned downtime due to equipment failure is a major pain point.</h4>
</div>
<div class="card_challenges4">
<div class="card_challenges_title">Quality Control And Compliance:</div>
<h4 class="card_challenges_content">Maintaining consistent product quality while adhering to regulations can be challenging.</h4>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >Solutions</h1>

<div class="container_solutions">
<div class="grid_solutions_two">
<div class="card_solutions">
<div class="card_solutions_title">Supply Chain Disruptions</div>
<p class="card_solutions_content">We implement advanced supply chain management systems that enhance visibility and flexibility. We enable manufacturers to anticipate disruptions and adjust procurement and inventory strategies accordingly.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Quality Control & Compliance</div>
<p class="card_solutions_content">Leveraging automation and machine learning for quality checks ensures high standards are consistently met, reducing waste and rework.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Equipment Maintenance And Downtime</div>
<p class="card_solutions_content">Integrating IoT and AI into manufacturing equipment allows for real-time monitoring and predictive maintenance, reducing unplanned downtime and extending equipment lifespan.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Artificial Intelligence And Machine Learning</div>
<p class="card_solutions_content">AI can analyze large datasets to identify patterns and insights that humans might miss. Machine learning algorithms can optimize production processes, improve supply chain management, and even predict equipment failures before they happen.</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>
</div>

<div class="solutions_img_two">
    <img class="solutions_img_right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/manufacturingright.webp"> 

</div>


</div>






                <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>
                    


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'manufacturing',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>





                   
                </div>


                <div class="trusted-partners-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Our Technology Partners</h1>
                                <h4>See how we are Collaborating with Industry Leaders for Innovative Solutions</h4>
                            </div>
                        </div>
                        <!-- <div class="subtitle-right">
                            <a class="view-all-partners-link" href="#">View All Partners</a>
                        </div> -->
                    </div>

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'partners',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top_partners">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
            

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                    

                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>
<!-- start of data services page here -->
<?php if (is_page('data_services')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header data_services">
            <div class="subpage-header-content content-width">
                <h1 class="white">Data Services</h1>
                <p class="white">Infodat has scaled from a startup organization to a growth company by delivering excellence to our customers. We plan to continue this growth. By providing great service and creating strong relationships.</p>
            </div>
        </div>
        <div class="content-width">

            <div class="industry-content-gov">
                
                   <div>
                     <div class="collapse-section-gov">  Maximizing Business Potential With Data Analytics </div>
                    
                    </div>


                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
<p class="card_challenges_content_gov">In the age of big data, navigating the vast landscape of data analytics can be overwhelming for businesses. Data analytics consulting bridges this gap, providing expert insights and tailored strategies to transform data into actionable intelligence. These consultants are pivotal in unlocking the true potential of data, driving growth, and fostering competitive advantage.</p>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >Data Capabilites</h1>

<div class="container_solutions">
<div class="grid_solutions">
<div class="card_solutions">
<div class="card_solutions_title">Business Intelligence Tools</div>
<p class="card_solutions_content">Simplify the process of gathering, processing, and interpreting data, offering interactive reports and dashboards for easy comprehension.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">E-Commerce Solutions</div>
<p class="card_solutions_content">provide you with the capability to create, manage, and optimize online storefronts, handling everything from product listings and customer interactions to payment processing and order fulfillment.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Data Warehousing Solutions</div>
<p class="card_solutions_content">Essential for businesses that require historical data analysis for trend identification and decision making, these solutions are key in supporting business intelligence and data analytics initiatives</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Customer Analytics Platforms</div>
<p class="card_solutions_content">These platforms assist businesses in understanding their customers better, enabling targeted marketing strategies, personalized experiences, and improved customer engagement.</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>

<div class="card_solutions">
<div class="card_solutions_title">Data Visualization Tools</div>
<p class="card_solutions_content">Enable the representation of complex data sets in a graphical or pictorial format. These tools are vital for making data understandable and accessible, allowing users to perceive patterns, trends, and outliers more easily.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">AI and Machine Learning Platforms</div>
<p class="card_solutions_content">These platforms are designed to handle large datasets and complex algorithms, making them ideal for tasks like predictive analysis, pattern recognition, and automated decision-making.</p>
</div>
</div>

<div class="solutions_img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/solutionsimg.webp"> 

</div>


</div>
                










                 <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>
                    


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'data-services',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>





                   
                </div>


                <div class="trusted-partners-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Our Technology Partners</h1>
                                <h4>See how we are Collaborating with Industry Leaders for Innovative Solutions</h4>
                            </div>
                        </div>
                        <!-- <div class="subtitle-right">
                            <a class="view-all-partners-link" href="#">View All Partners</a>
                        </div> -->
                    </div>

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'partners',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top_partners">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                    




                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>


<!-- start of the consulting page here -->
<?php if (is_page('consulting')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header consulting">
            <div class="subpage-header-content content-width">
                <h1 class="white">Consulting</h1>
                <p class="white">Expertise That Empowers</p>
            </div>
        </div>
        <div class="content-width">
            <div class="industry-content-gov">
                
                   <div>
                     <div class="collapse-section-gov"> Transformative Power of Consulting </div>
                    <!-- <section class="collapse-text">
                        <p>With a deep understanding of your organization’s needs and use cases, we can design a data architecture that empowers your teams and works across the ecosystem. </p>
                    </section> -->
                    </div>


                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
<p class="card_challenges_content_gov">In today’s fast-paced and complex business environment, consulting services stand out as crucial allies for organizations seeking to optimize performance, innovate, and stay ahead of the curve. By providing expert insights, tailored strategies, and innovative solutions, consultants play a key role in enabling businesses to unlock their full potential and navigate the intricacies of their respective industries</p>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >How We Help</h1>

<div class="container_solutions">
<div class="grid_solutions">
<div class="card_solutions">
<div class="card_solutions_title">Technology & IT Consulting</div>
<p class="card_solutions_content">We Provide expert guidance and strategic planning in the implementation and management of technology within organizations. These services focus on optimizing IT infrastructure and facilitating digital transformation.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Customer Relationship Management</div>
<p class="card_solutions_content">(CRM) Solutions are designed to manage and enhance a company's interactions with current and potential customers. These solutions centralize customer data, streamline communication, and automate sales, marketing, and customer service processes.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Technology Integration & Digital Transformation</div>
<p class="card_solutions_content">focus on seamlessly incorporating new technologies into existing business processes and infrastructure.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Strategic Insight & Expertise</div>
<p class="card_solutions_content">Analyzing industry trends, identifying opportunities for growth, and developing long-term strategic plans. Essential for organizations seeking a competitive edge.</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>

<div class="card_solutions">
<div class="card_solutions_title">Operational Efficiency & Process Optimization</div>
<p class="card_solutions_content">Enhancing the effectiveness and streamlining of business processes. Analyzing current operations, identify areas of improvement, and implement strategies to reduce waste, increase productivity, and optimize resource allocation.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Market Analysis and Expansion Strategies</div>
<p class="card_solutions_content">Comprehensive market insights and strategic planning for entering new markets or expanding in existing ones.</p>
</div>
</div>

<div class="solutions_img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultingimg.webp"> 

</div>


</div>







                 <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>
                    


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'government',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>





                   
                </div>


                <div class="trusted-partners-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Our Technology Partners</h1>
                                <h4>See how we are Collaborating with Industry Leaders for Innovative Solutions</h4>
                            </div>
                        </div>
                        <!-- <div class="subtitle-right">
                            <a class="view-all-partners-link" href="#">View All Partners</a>
                        </div> -->
                    </div>

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'partners',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top_partners">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <!-- <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div> -->

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                    


               





                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>













<!-- start of the app development page here -->
<?php if (is_page('App Development')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header appdevelopment">
            <div class="subpage-header-content content-width">
                <h1 class="white">App Development</h1>
                <p class="white">Infodat has scaled from a startup organization to a growth company by delivering excellence to our customers. We plan to continue this growth. By providing great service and creating strong relationships.</p>
            </div>
        </div>
        <div class="content-width">
            <div class="industry-content-gov">
                
                   <div>
                     <div class="collapse-section-gov"> Navigating Application Development </div>
                    <!-- <section class="collapse-text">
                        <p>With a deep understanding of your organization’s needs and use cases, we can design a data architecture that empowers your teams and works across the ecosystem. </p>
                    </section> -->
                    </div>


                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
<p class="card_challenges_content_gov">In the complex realm of application development, consulting plays a crucial role. It bridges the gap between innovative ideas and practical, efficient software solutions. Consultants offer the expertise needed to align technology with business goals, ensuring that applications are not just technically sound, but also market-ready and user-focused.</p>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >Development Capabilities</h1>

<div class="container_solutions">
<div class="grid_solutions">
<div class="card_solutions">
<div class="card_solutions_title">Modernization</div>
<p class="card_solutions_content">updating and improving existing business systems, processes, and technologies to meet current and future demands. These services assist organizations in transitioning from outdated methods to modern, efficient, and scalable solutions.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Technology Selection & Architecture Design</div>
<p class="card_solutions_content">Assisting organizations in choosing the appropriate technology solutions and designing robust system architectures. Ensuring that technology choices align with business objectives, scalability needs, and performance requirements.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Quality Assurance & Testing</div>
<p class="card_solutions_content">ensuring that systems meet the highest standards of quality, functionality, and performance. Comprehensive testing strategies, including functional, performance, and security testing, to identify and rectify defects.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Agile Methodology & Project Management</div>
<p class="card_solutions_content">Implementing and optimizing Agile practices for project management. This approach emphasizes flexibility, collaboration, and customer-centric development.</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>

<div class="card_solutions">
<div class="card_solutions_title">UI/UX Design</div>
<p class="card_solutions_content">enhancing the user experience (UX) and user interface (UI) design of digital products. This service emphasizes creating intuitive, engaging, and visually appealing interfaces that resonate with users.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Conceptualization and Strategy Formation</div>
<p class="card_solutions_content">Assists businesses in turning ideas into actionable plans and strategies. This service involves defining project scope, setting goals, and identifying the steps needed to achieve them.</p>
</div>
</div>

<div class="solutions_img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/appimg.webp"> 

</div>


</div>



                 <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>
                    


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'healthcare',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>





                   
                </div>


                <div class="trusted-partners-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Our Technology Partners</h1>
                                <h4>See how we are Collaborating with Industry Leaders for Innovative Solutions</h4>
                            </div>
                        </div>
                        <!-- <div class="subtitle-right">
                            <a class="view-all-partners-link" href="#">View All Partners</a>
                        </div> -->
                    </div>

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'partners',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top_partners">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <!-- <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div> -->

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                    






                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>


<?php if (is_page('automation')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header automation">
            <div class="subpage-header-content content-width">
                <h1 class="white">Automation</h1>
                <p class="white white-automation">Empower Your Industrial Operations with Smart Technology — IoT, AI, Automation, and Beyond.</p>
            </div>
        </div>
       <div class="content-width">
            <div class="industry-content">
                
                   <div class="collapse-section-container">
                     <div class="collapse-section"> What Are Your Challenges? </div>
                    <section class="collapse-text">
                        <p>With a deep understanding of your organization’s needs and use cases, we can design a data architecture that empowers your teams and works across the ecosystem. </p>
                    </section>
                    </div>


                    <div class="grid_challenges grid_challenges_autoamtion">
<div class="card_challenges1 half-a-border-on-top">
<div class="card_challenges_title">Integration Complexity</div>
<h4 class="card_challenges_content">Complexity can lead to increased costs, extended downtime, and potential operational inefficiencies.</h4>
</div>
<div class="card_challenges2 card_challenges-automation">
<div class="card_challenges_title">High Initial Investment And Roi Concerns</div>
<h4 class="card_challenges_content">The high initial cost can be a barrier to adoption, and there may be uncertainty about the time frame for realizing the benefits of automation.</h4>
</div>
<div class="card_challenges3">
<div class="card_challenges_title">Scalability And Flexibility Challenges</div>
<h4 class="card_challenges_content">This limitation can hinder a company’s ability to respond to market trends and demands efficiently.</h4>
</div>
<div class="card_challenges4">
<div class="card_challenges_title">Maintenance And Reliability Issues:</div>
<h4 class="card_challenges_content">maintenance and downtime can lead to lost production time and increased operational costs.</h4>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >Solutions</h1>

<div class="container_solutions">
<div class="grid_solutions_two">
<div class="card_solutions">
<div class="card_solutions_title">Integration Complexity</div>
<p class="card_solutions_content">Implement modular and scalable automation solutions that can be easily integrated with existing systems. Employing middleware or using platforms that offer API compatibility can simplify integration.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">High Initial Investment & Roi Concerns</div>
<p class="card_solutions_content">Leasing equipment or using Automation-as-a-Service (AaaS) models can reduce upfront costs. Detailed cost-benefit analysis and long-term financial planning can help in making informed decisions.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Equipment Maintenance And Downtime</div>
<p class="card_solutions_content">Integrating IoT and AI into manufacturing equipment allows for real-time monitoring and predictive maintenance, reducing unplanned downtime and extending equipment lifespan.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Artificial Intelligence And Machine Learning</div>
<p class="card_solutions_content">AI can analyze large datasets to identify patterns and insights that humans might miss. Machine learning algorithms can optimize production processes, improve supply chain management, and even predict equipment failures before they happen.</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>
</div>

<div class="solutions_img_two">
    <img class="solutions_img_right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/automationright.webp"> 

</div>


</div>






                <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>
                    


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'manufacturing',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>





                   
                </div>


                <div class="trusted-partners-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Our Technology Partners</h1>
                                <h4>See how we are Collaborating with Industry Leaders for Innovative Solutions</h4>
                            </div>
                        </div>
                        <!-- <div class="subtitle-right">
                            <a class="view-all-partners-link" href="#">View All Partners</a>
                        </div> -->
                    </div>

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'partners',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top_partners">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
            

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                    

                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>













<!-- start of the careers page here -->
<?php if (is_page('careers')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header test1">
            <div class="subpage-header-content content-width">
                <h1 class="white">Careers</h1>
                <p class="white">Love your work--and your life.</p>
           <div class="button-red-header" > <a class="button-red-header-text" href="#positions-section" > View All Positions
            </a> </div>
            </div>

        </div>
        <div class="content-width">
            <div class="industry-content-career">
                <div class="collapse-section-career">
                    <h1>Powered By Our Associates</h1>
                    <section class="collapse-text-career">
                        <p>Infodat is always looking for the best and brightest talent to support our growing portfolio. We have scaled from a startup organization to a growth company by delivering excellence to our customers. If you are interested in choosing a career with Infodat, you’ll find great colleagues, a challenging environment and a work-life balance.</p>
                    </section>
                </div>
                <div class="comp-enh-section-career">
                   
                        Why Work At Infodat?
                 
</div>

                    
<div class="career_imagesSection">

    <div class="image-container Image_1">
    
    <img class="image1.jpg Image_"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/careerimage1.webp">
            <img class="image1.jpg  mobileImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobilecareerimg1.webp">

    <!-- <div class="career_imgheader"> Modern spacious office </div> -->
            <div class="career_imgheader"> Modern spacious office </div>

         <div class="img_description"> Enjoy a comfortable office environment with the most modern and stylish furnishing.  </div>

    </div>

    <div class="image-container Image_1">
    
    <img class="image1.jpg Image_"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/officeteam.webp">
        <img class="image1.jpg  mobileImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobilecareerimg2.webp">


    <!-- <div class="career_imgheader"> Modern spacious office </div> -->
            <div class="career_imgheader"> Great Coworkers </div>

         <div class="img2_description"> Work with some of the best talent in the industry and build strong networks with them.  </div>

    </div>

          <div class="image-container Image_1">
    
    <img class="image1.jpg Image_"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/gardenimage.webp">
                <img class="image1.jpg  mobileImage"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobilecareer3.webp">

    <!-- <div class="career_imgheader"> Modern spacious office </div> -->
            <div class="career_imgheader"> Education Opportunity </div>

         <div class="img_description"> Get resources for developing your skills and knowledge to kickstart your career.  </div>

    </div>


        <div class="image-container4">
    
    <img class="image1.jpg image_4"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/officeimage.webp">

        <div class="career_imgheader4">Infodat is a place where you’ll be supported to build your career</div>
            <div class="career_imgdescription4">"At infodat, I felt a sense of community and support from the beginning. Everyone was so kind and made sure that I felt like I was part of the team, even as I was transitioning into my role."<br> -Project Manager</div>
        
            
            <!-- <div class="button-red" href="#">View All Partners</a>
            </div> -->

    
    </div>

</div>


        	        	
            	<div class="container">
                	

                            <div id="page-content-wrap">
        
<div id="main" class="container">
	<div class="row">
        <section class="col-md-12 col-sm-12">
 <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div id="positions-section" class="wpb_wrapper">
<h1 style="text-align: left;font-family:Poppins;font-weight:400;font-style:normal"  class="vc_custom_heading" >Exceptional Career Opportunities</h1>
	<div class="wpb_text_column wpb_content_element  vc_custom_1603314952117" >
		<div class="wpb_wrapper">
			<p>Infodat is always looking for the best and brightest talent to support our growing portfolio. We have scaled from a startup organization to a growth company by delivering excellence to our customers. Our alliances with technology industry leaders like Microsoft, Comodo, Tufin, Imperva, allow us to achieve even greater success as we build best practices for efficient and effective solutions.</p>
<p>If you are interesting in choosing a career with Infodat, you&#8217;ll find great colleagues, a challenging environment and a work-life balance.</p>
<p><strong style="font-size: 23px;">Current Openings</strong></p>

		</div>
	</div>
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey" ><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
</div>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p class="job_title"><strong>Sr Software Engineer</strong><strong> </strong></p>
<p><strong>Available positions:</strong> 5</p>
<p><strong>Full Time </strong></p>
<p><strong>Location: </strong>Houston, Texas</p>
<p><strong>Job Duties</strong>:</p>
<p>Analyze, design, develop and Test and maintain applications systems and software using a minimum of half of programs such as SQL, Oracle, C#, .NET, Java, AJAX, Angular, Energy Components (EC), Web Services, HTML, Visual Studio.NET, Data Analysis, Data warehousing, Sharepoint, Crystal Reports, PowerBuilder, PowerBI, Agile, SDLC, JAD, Waterfall, ASP.NET, AJAX, MySQL Windows, Linux, LabVIEW, C, C++, Visual C++, Matlab, UI, RPA, Python, Boomi, PHP, Azure, MathCad, Tableau, SAP, Optical networking, UNIX, Android, iOS, WinForms, Control systems, Application Architecture, Project implementation, Project Cycles, QTP, RFT, Eclipse, SWT, Scrum Master.</p>
<p><strong>Education Requirement:</strong></p>
<p>Requirement for  Sr Software Engineer  are Master’s in Computer Science or Information Systems or Engineering or Technology or Computer Applications or Business Administration related plus minimum of 1 Yr of relevant experience computer science, information systems ,technology, network engineer, computer application or Business Administration  or bachelor’s above-mentioned disciplines   plus minimum of 5 Yrs of relevant experience as Computer System Analyst, Software Engineer, Network Engineer, Project Manager or Business Analyst etc.</p>
<p>&nbsp;</p>






<p class="job_title" ><strong>Financial  Analyst  </strong><strong> </strong></p>
<p><strong>Available positions:</strong> 2</p>
<p><strong>Full Time </strong></p>
<p><strong>Location: </strong>Houston, Texas</p>
<p><strong>Job Duties</strong>:</p>
<p class="job_duties">
Analyze financial data and provide forecasting support.
Organize data into accessible reports and perform various types of analysis using key metrics such as yearly growth, return on assets, return on equity and earnings per share.
Review all non-legal pertinent information about prospective deals
Oversee financial functions, such as assessing, auditing, planning, budgeting, taxes, consolidation, cost control and project control
Evaluate and analyze capital expenditures, depreciation, proposals, investment opportunities, rate of return, profit plans, operating records, financial statements, etc.
Study a company’s financial data to give advice for guiding business investments and overall financial strategy.
</p>
<p><strong>Skill Set Required</strong>:</p>
<p >Knowledge of DAG, Python, Apache Airflow, Pandas, OS and Glob, MS SQL server.</p>
<p><strong>Education Requirement:</strong></p>
<p>Bachelor’s in business administration or Finance required.</p>
<p>&nbsp;</p>
<p class="job_title" ><strong>Software Developer</strong><strong> </strong></p>
<p><strong>Available positions:</strong> 5</p>
<p><strong>Full Time </strong></p>
<p><strong>Location: </strong>Houston, Texas</p>
<p><strong>Job Duties</strong>:</p>
<p>
Deliver web and windows-based solutions using .NET Technology and Azure cloud.
Design develop web forms using C#, .NET, integrating COM+ components into .NET Framework.
Design code and test programs using Oracle, SQL Server, Sybase, Post grace and PL/QL programming.
Build and Deploy EC Service packs. Customize PL/SQL code for Vent &amp; Flare and for Base Business metrics and for its enhancements.
Perform troubleshooting, and analysis to assess the root cause of application issues.
Evaluate, analyze and interpret needs and technologies, assess requirements and identify solutions.
Design, build and maintain efficient, reusable, and reliable C# code.
Develop new, or modify existing, programs and artifacts bases on design and/or programming specifications.
Design, develop and analyze complex software programs for cloud-based systems.
</p>
<p><strong>Skill Set Required</strong>:</p>
<p>Oracle, .NET Core, C#, ASP.NET, MVC, LINQ, Entity Framework, WCF, Web API, JavaScript, html 5, Angular, Responsive Design, SQL Server, Test Driven Development, Bootstrap, Dependency Injection, Azure, Visual Studio, SQL Server, CI/CD process, DevOps, Git, TFS, Micro Services, Docker, OOAD design patterns and SOLID principals.</p>
<p><strong>Education Requirement:</strong></p>
<p>Minimum of Bachelor’s degree in Computer science, Information systems, Computer applications, engineering, technology or equivalent in a closely related discipline. + minimum of 2 years of experience</p>
<p><strong>Mail your resume</strong> to HR at 2050 W Sam Houston Pkwy South,   Suite 1675,   Houston,   TX 77042</p>

		</div>
	</div>

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p class="job_title" ><strong>Computer System Analyst | IT specialist</strong></p>
<p><strong>Available positions:</strong> 3 each</p>
<p><strong>Full Time </strong></p>
<p><strong>Location: </strong>Houston, Texas</p>
<p><strong>Job Duties</strong>:</p>
<p>


Monitor computer programs and systems, including coodinating the installation of computer programs and systems.
Troubleshoot program and system malfunctions to restore normal function.




Expand or modify system to serve new purposes or improve work flow.
Use the computer in the analysis and solution of business problems such as: Development of Integrated production and Inventory Control and Cost Analysis Systems.

Consult with managmeent to ensure agreement on system principle.


<p><strong>Education Requirement:</strong></p>

<p>Associate Degree plus two years experience in Computer System Analyst or Programmer or software or related. <p>
<p> <b> Mail your resume to HR at 2050 W Sam Houston Pkwy South,   Suite 1675,   Houston,   TX 77042 <b> </p>

		</div>
	</div>
</div></div></div></div>
                                    </section>
            </div>
</div>
    </div>

</div>
         
               



    </main>

  </body>
<?php } ?>







<?php if (is_page('insights')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header insights">
            <div class="subpage-header-content content-width">
                <h1 class="white">Insights</h1>
                <!-- <p class="white">Infodat has scaled from a startup organization to a growth company by delivering excellence to our customers. We plan to continue this growth. By providing great service and creating strong relationships.</p> -->
            </div>
        </div>
        <div class="">
            <div class=" ">
                <div class="collapse-section-career content-width">
                    <h1>Powered By Client Success</h1>
                    <section class="collapse-text-career">
                        <p>At our business, we understand that client success is at the heart of our operations. We recognize the paramount importance of maintaining a comprehensive portfolio of clients and case studies as it not only demonstrates our commitment to customer satisfaction.</p>
                    </section>
                </div>


        <div class="subpageheader_insightss insights2">
            <div class="subpage-header-content-insights content-width">
                <h1 class="white"> Healthcare Insights</h1>
                <p class="white insights_description">See how we’ve helped ambitious clients achieve extraordinary outcomes.</p>
            </div>
        </div>
        


                 <div class="client-success-section content-width insights_overlap pw-1090">
                    
                   


<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'healthcare',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
                    <a href="<?php the_permalink(); ?>">Case Study 

                    <img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">
                    <img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">

                
                </a>                </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                </div>

        <div class="subpageheader_insightss insights3">
            <div class="subpage-header-content-insights content-width">
                <h1 class="white">Oil & Gas Insights</h1>
                <p class="white insights_description">See how we’ve helped ambitious clients achieve extraordinary outcomes.</p>
            </div>
        </div>

                <div class="trusted-partners-section content-width insights_overlap pw-1090">

  <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'oil-gas',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <!-- <div class="read_more">
                    <a href="<?php the_permalink(); ?>">Case Study 

                    <img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">
                    <img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">

                
                </a>
                </div> -->

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
</div>

        <div class="subpageheader_insightss insights4">
            <div class="subpage-header-content-insights content-width ">
                <h1 class="white">Manufacturing</h1>
                <p class="white insights_description">See how we’ve helped ambitious clients achieve extraordinary outcomes.</p>
            </div>
        </div>
                <div class="insights-section content-width insights_overlap pw-1090">


     <div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'manufacturing',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
                    <a href="<?php the_permalink(); ?>">Case Study 

                    <img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">
                    <img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">

                
                </a>                </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                </div>






                <div class="contact-us-section content-width ">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>


<!-- government page here  -->
<?php if (is_page('government')) { ?>
   <body>
    <main class="industries">
        <div class="subpage-header government">
            <div class="subpage-header-content content-width">
                <h1 class="white">Government</h1>
                <p class="white">From sitting on advisory boards of Houston nonprofits to sponsoring local spelling bees, we truly believe every act of kindness and service, no matter how seemingly small, has a positive impact.</p>
            </div>
        </div>




        <div class="content-width">
            <div class="industry-content-gov">
                
                   <div>
                     <div class="collapse-section-gov"> Our Pledge: Serving With Integrity, Innovating For Tomorrow </div>
                    <!-- <section class="collapse-text">
                        <p>With a deep understanding of your organization’s needs and use cases, we can design a data architecture that empowers your teams and works across the ecosystem. </p>
                    </section> -->
                    </div>


                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
<p class="card_challenges_content_gov">We collaborate closely with government organizations, dedicating ourselves to enhancing the lives and livelihoods of citizens around the world. Our mission is to drive transformations that yield substantial, positive societal impacts. Our work is not limited to one field; it extends across multiple sectors and functions, including digital and analytics, operations, organization, and strategy.</p>
</div>
</div>


</div>


             

<!-- start of cards section solutions -->


<h1 class= "solutions_title" >Capabilities</h1>

<div class="container_solutions">
<div class="grid_solutions">
<div class="card_solutions">
<div class="card_solutions_title">Citizen Experience Design</div>
<p class="card_solutions_content">is at the heart of our digital transformation. We’re not just building a website; we’re creating a journey that respects your time, anticipates your needs, and simplifies your interactions with government services.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Service Delivery & Operations</div>
<p class="card_solutions_content">our commitment to excellence in service delivery is unwavering. We understand that the backbone of effective governance is not just the services we provide, but how we deliver them. Our operational strategy is built on efficiency, reliability, and adaptability.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Robust Cybersecurity Framework</div>
<p class="card_solutions_content">In the digital age, cybersecurity is a paramount concern.</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Technology Modernization</div>
<p class="card_solutions_content">Our goal is to harness the power of the latest technological innovations to improve local services, enhance the citizen experience, and streamline operations..</p>
<!-- Assuming you have an image named 'data-image.jpg' in the same directory as your HTML file -->
</div>

<div class="card_solutions">
<div class="card_solutions_title">Public Safety Modernization & Cybersecurity</div>
<p class="card_solutions_content">Public Safety Modernization & Cybersecurity</p>
</div>
<div class="card_solutions">
<div class="card_solutions_title">Real-time Analytics Platforms</div>
<p class="card_solutions_content">Scaling to effectively accommodate and manage the growing volume of patient data, increasing demand for services, and evolving healthcare needs.</p>
</div>
</div>

<div class="solutions_img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/govside.webp"> 

</div>


</div>

                <div class="client-success-section">
                    
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Client Success</h1>
                                <h4>See how we’ve helped ambitious clients achieve extraordinary outcomes.</h4>
                            </div>
                        </div>
                        <div class="subtitle-right"></div>
                    </div>

<div class="post-excerpts">
    <?php
    $args = array(
        'category_name' => 'government',
        'posts_per_page' => 3, // Display all posts from the category use -1
        'post_status' => 'publish',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
            $custom_query->the_post();
            ?>
            <article <?php post_class(); ?>>
            <div class="excerpt_top">
                <div class="excerpt"><?php the_excerpt(); ?> 
                </div>
                <div class="read_more">
 <a href="<?php the_permalink(); ?>">Case Study
<img class="white_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-circle.svg">

<img class="red_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-red-circle (1).svg">
</a>                 </div>

             </div>
               

        <div class="card_seperator">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/cards_divider.svg">
        </div>
      
            </article>

            <?php
        endwhile;
        wp_reset_postdata(); // Reset the post data
    else :
        echo 'No posts found.';
    endif;
    ?>
</div>
                </div>

<!-- start of certification section -->
<div> 
  <h1 class= "solutions_title" >Certifications</h1>
<div class="certifications-content-gov">
 <div>
    <img class="cert_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Cert_1.webp">    
  </div>
                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
              <h1 class= "certifications_title" >Historically Underutilized Business Program</h1>
<p class="certifications_content">Infodat proudly holds the distinction of being a HUB (Historically Underutilized Business) certified entity, as recognized by the State of Texas. This certification underscores our commitment to fostering diversity and equality in the business arena.</p>
</div>
</div>
</div>

<div class="certifications-content-gov">
 <div>
    <img class="cert_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cer2.webp">    
  </div>
                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
              <h1 class= "certifications_title" >Small Business Enterprise</h1>
<p class="certifications_content">At Infodat, we recognize the vital role that Small Business Enterprises (SBEs) play in the tapestry of the global economy. We see these dynamic, agile entities not just as clients, but as essential drivers of innovation and community development.</p>
</div>
</div>
</div>


<div class="certifications-content-gov">
 <div>
    <img class="cert_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cert3.webp">    
  </div>
                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
              <h1 class= "certifications_title" >Minority Business Enterprise</h1>
<p class="certifications_content">As a proud Minority Business Enterprise, Infodat stands at the intersection of innovation, diversity, and excellence. Our identity as a minority-owned firm enriches our perspective, allowing us to bring unique insights and solutions to the forefront of the data analytics and consulting sector.</p>
</div>
</div>
</div>

<h1 class= "solutions_title" >Active Contracts</h1>
<div class="certifications-content-gov">
 <div>
    <img class="cert_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cert4.webp">    
  </div>
                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
<p class="certifications_content">Infodat is pleased to participate in DIR Bulk Purchase Initiative #BP2020-028 by offering special pricing for Comodo AEP and Comodo EDR. This special pricing is good for all contracts signed through December 31, 2020. Click on the respective pricing links below to see how much you can save.</p>
</div>
</div>
</div>


<div class="certifications-content-gov">
 <div>
    <img class="cert_img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cert5.webp">    
  </div>
                    <div class="grid_challenges_gov">
<div class="card_challenges1_gov">
<!-- <div class="card_challenges_title">Data Silos</div> -->
<p class="certifications_content">Infodat has been providing staffing and technology services for more than 20 years. Our proven methodology ,wide resource network and diligent screening process help us to place the right resources in the right positions at a great value. Resources can be placed at customer or mutually agreeable locations, at Infodat’s Houston office or offshore as required. We are confident that we can provide the same level of excellence to TIPS members.</p>
</div>
</div>
</div>


</div>





                <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>

                        </div>
                    </div>
                </div>



        </div>




    </main>
        <script>
        $(function(){
            $('.collapse-text').expander({
                expandPrefix:'',
                slicePoint: 420
            });
        });
    </script>
  </body>
<?php } ?>



<?php
// Check if the current page is the Opt-Out Preferences page
if (is_page('opt-out-preferences')) {
    ?>
    <main class="industries">
        <div class="subpage-header-optout opt_out">
            <div class="subpage-header-content content-width">
                <h1 class="white" style="font-size: 26px !important; margin-top: 60px;">Opt-Out Preferences</h1>
                <!-- <p class="white">From sitting on advisory boards of Houston nonprofits to sponsoring local spelling bees, we truly believe every act of kindness and service, no matter how seemingly small, has a positive impact.</p> -->
            </div>
        </div>
    <div class="opt_out_preferences">

        <?php
        // Use the 'do_shortcode' function to parse the shortcode and get the content
        echo do_shortcode('[cmplz-document type="cookie-statement" region="us"]');
        ?>

    </div>
    <main>

    <?php
}
?>

























<!-- start of Contact page here -->
<?php if (is_page('contact')) { ?>
<body>
    <main class= "industries">
            <div class="subpage-header contactus">
            <div class="subpage-header-content content-width">
                <h1 class="white">Contact Us</h1>
                <!-- <p class="white">Infodat has scaled from a startup organization to a growth company by delivering excellence to our customers. We plan to continue this growth. By providing great service and creating strong relationships.</p> -->
            </div>
        </div>
                <div class="contact-us-section content-width pw-1090">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                            
                        </div>
                    </div>
                </div>
           
                </main>

</body>
<?php } ?>






<!-- start of Case Study page here -->
<?php if (is_page('case-study')) { ?>
<body>
    <section class="top_header_section">
        <div class="top_header_div pw-1090">
            <div class="top_header_column" id="top_column">
                <h2 class="resource_header">Case Study</h2>
                <h1 class="top_section_header">Privacy-Preserving Data Ecosystems in support of Drug Discovery </h1>
                    <h2 class="top_section_subheader">Working with data bases of sensitive data, maneuvering this data and creating actionable data that creates leads and insights.</h2>
                    <div class="link_controls">
                    <!-- <div class="related_links">
                       <a class="link_1" href="" target="blank" ><h1 class="related_link_1">Data Analytics</h1> <i class="fa fa-arrow-right" id="arrow"></i></a> 
                        <a class="link_2" href="" target="blank" ><h1 class="related_link_2">Healthcare</h1> <i class="fa fa-arrow-right" id="arrow"></i></a>
                    </div> -->
                    <div class="social_links">
                        <h3 class="share">Share To</h3>
                        <a class="linkedin_share" href="https://linkedin.com/shareArticle?url=WEBSITE_URL&title=WEBSITE_TITLE" target="blank"><i class="fa fa-linkedin-square"></i></a>
                        <a class="facebook_share" href="" target="blank"><i class="fa fa-facebook-square"></i></a>
                        <a class="share_square" href="" target="blank"><i class="fa fa-share-square-o" id="related_link_arrow_2"></i></a>
                    </div>
                </div>
            </div>
            <div class="top_header_column">
            
                <img class="top_header_image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Rectangle_casestudy.png">

              </div>
        </div>
    </section>
    <section class="main_content_section pw-1090">
        <div class="main_content_div ">
            <div class="main_content_column">
                <div class="content_feed_div">
                <h3 class="content_feed">Our client is a major distributor  of pharmaceuticals, a global manufacturer and distributor of medical and laboratory products, and a provider of performance and data solutions for healthcare facilities. To do this effectively, our client relies on the speed and effectiveness of processing large and complex data from around the nation. </h3>
                </div>
                <div class="main_content_life_div">
                    <h1 class="main_content_life">Challenge</h1>
                    <ul class="challenge_points">
                        <li><strong class="challenge_titles">Data access and sharing</strong> sensitive patient data, can create privacy concerns and  impede the sharing and use of this data.</li>
                        <li><strong class="challenge_titles"> Integration</strong> from multiple sources and in different formats can be difficult and time-consuming.</li>
                        <li><strong class="challenge_titles">Scalability</strong> as the data grows, the team would have to ensure that their privacy-preserving ecosystem is able to scale to handle large amounts of data.</li>
                    </ul>
                    </div>
                    </div>
                    <div class="main_content_column">
                        <div class="solution_div">
                            <h1 class="solution_header">Solution</h1>
                            <h3 class="solution_body">The team began by identifying the types of data that would be necessary for drug discovery research, including patient medical records, genetic data, and clinical trial data. They then assessed the privacy risks associated with each type of data and determined the appropriate privacy-preserving techniques to use.
                                To protect patient medical records, the team implemented a secure data sharing platform that uses secure multiparty computation (SMC) to enable the sharing of data without revealing the underlying sensitive information. SMC allows multiple parties to jointly compute a function on their private inputs without revealing anything but the output. This allows researchers to access the necessary data without compromising patient privacy.
                                For genetic data, the team used differential privacy, a technique that adds noise to the data to protect against re-identification while still preserving the usefulness of the data for research.
                                Finally, for clinical trial data, the team used homomorphic encryption, a technique that enables computations to be performed on encrypted data without the need to decrypt it first. This allows researchers to analyze the data without compromising patient privacy.</h3>
                        </div>
                    </div>
        </div>
    </section>
    <section class="results_section pw-1090">
      
          <div class="results">
            <h1 class="results_header">Results</h1>
            <div class="results_icons">
                <div><i class="fa fa-low-vision fa-xl" id="icon_controls"></i> <h3 class="results_text">Confidential Patient Data</h3></div>
                <div><i class="fa fa-file-invoice fa-xl"id="icon_controls"></i> <h3 class="results_text">Confidential Patient Data</h3></div>
                <div><i class="fa fa-stethoscope fa-xl" id="icon_controls"></i> <h3 class="results_text">Confidential Patient Data</h3></div>
            </div>    
          </div>
    </section>
    <div class="industries pw-1090">
    <div class="insights-section">
                    <div class="grid-subtitle">
                        <div class="subtitle-left">
                            <div class="subtitle-left-content">
                                <h1>Insights</h1>
                            </div>
                        </div>
                        <div class="subtitle-right">
                            
                        </div>
                    </div>
                    <div class="case-study-flex">
                        <div class="case-study-card">
                            <h5>Medical Technology</h5>
                            <h3>Flexible and fit for purpose: Hybrid Sales in Medtech</h3>
                            <div class="case-study-excerpt">
                                <p>As procedure volumes shift to ambulatory care settings, industry leaders are evolving one-size-fits-all sales strategies to serve a more fragmented, virtual landscape.</p>
                            </div>
                            <div class="case-study-link">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        
                        <div class="case-study-card">
                            <h5>Medical Technology</h5>
                            <h3>Flexible and fit for purpose: Hybrid Sales in Medtech</h3>
                            <div class="case-study-excerpt">
                                <p>As procedure volumes shift to ambulatory care settings, industry leaders are evolving one-size-fits-all sales strategies to serve a more fragmented, virtual landscape.</p>
                            </div>
                            <div class="case-study-link">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                       
                        <div class="case-study-card">
                            <h5>Medical Technology</h5>
                            <h3>Flexible and fit for purpose: Hybrid Sales in Medtech</h3>
                            <div class="case-study-excerpt">
                                <p>As procedure volumes shift to ambulatory care settings, industry leaders are evolving one-size-fits-all sales strategies to serve a more fragmented, virtual landscape.</p>
                            </div>
                            <div class="case-study-link">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
    </div>
    <div class="contact-us-section">
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
                             <?php echo do_shortcode('[ninja_form id=1]'); ?>
                            
                        </div>
                    </div>
                </div>
    </div>

</body>
<?php } ?>








</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>



