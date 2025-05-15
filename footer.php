<div class="footer_parent">
<!-- Call To Action Section -->
<div class="container text-center text-md-start cta-section px-4 px-md-0">
  <div class="row align-items-stretch">
    
    <!-- Image -->
    <div class="col-md-6 mb-4 mb-md-0 cta-image-wrapper text-center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerimage1.jpg" alt="Call Us Image" class="img-fluid Footer_image">
    </div>

    <!-- Text & Buttons -->
    <div class="col-md-6 d-flex flex-column justify-content-between cta-content-wrapper">
      <h4 class="cta_heading">Call Us</h4>
      <a href="tel:<?php echo do_shortcode('[site_info key="phone1"]');?>" class="cta_phone"><?php echo do_shortcode('[site_info key="phone1"]');?></a>
      <p class="my-3 cta_desc">We provide 24-hour care so our team is available anytime to assist you. If you’d like to speak with someone directly, just give us a call—we’re here for you 24/7.</p>
      <p class="cta_desc">For general enquiries about our home care services in Windsor and beyond, including our flexible care packages and prices, please complete our online form.</p>
      <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center justify-content-md-start">
        <a href="<?php echo site_url('/contact-us'); ?>" class="btn px-4 py-2 button1">Book a Call</a>
        <a href="<?php echo get_template_directory_uri();?>/assets/images/Brochure.pdf" class="btn px-4 py-2 button2" target="_blank">
						Download Brochure
						</a>
      </div>
    </div>

  </div>
</div>

 <div class="certifications-wrapper px-4">
  <div class="container p-4 bg-white footicon_container">
    <div class="d-flex flex-wrap justify-content-evenly gap-3 align-items-center footicon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footlogo1.png" alt="Cert 1" class="img-fluid">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footlogo2.png" alt="Cert 2" class="img-fluid">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footlogo3.png" alt="Cert 3" class="img-fluid">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footlogo4.png" alt="Cert 4" class="img-fluid">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footlogo5.png" alt="Cert 5" class="img-fluid">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footlogo6.png" alt="Cert 6" class="img-fluid">
    </div>
  </div>
</div>


<footer id="colophon" class="site-footer text-white px-4 pt-5">
  <!-- Certifications Section -->
 

  <!-- Main Footer Section -->
  <div class="container">
    <div class="row gy-4 gap-5">

      <!-- Logo and Social -->
      <div class="col-md-3 text-center">
        <a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerlogo.png" alt="Logo" class="mb-3 img-fluid" style=" max-width: 150px;"></a>
        <div class="d-flex justify-content-center gap-3 mt-2">
		<a href="<?= do_shortcode('[site_info key="fb"]');?>" target="_blank" class="social-icon"><i class="fab fa-facebook-f fa-lg"></i></a>
		<a href="<?= do_shortcode('[site_info key="twit"]');?>" target="_blank" class="social-icon"><i class="fab fa-x-twitter fa-lg"></i></a>

        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md-4 text-center text-md-start foot_contact">
        <h5 class="fw-bold mb-3 px-2">Contact Us</h5>
        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 border border-light p-2 rounded"></i><?php echo do_shortcode('[site_info key="address"]');?></p>
        <p class="mb-0"><i class="fas fa-phone me-2 border border-light p-2 rounded"></i><a href="tel:<?php echo do_shortcode('[site_info key="phone1"]');?>" class="text-white text-decoration-none"><?php echo do_shortcode('[site_info key="phone1"]');?></a></p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 text-center text-md-start footlinks">
		<h5 class="fw-bold mb-3 px-2">Links</h5>
		<?php
			wp_nav_menu([
			'theme_location' => 'footer_menu',
			'menu_class'     => 'list-unstyled',
			'container'      => false,
			'link_before'    => '<span class="text-white text-decoration-none d-block">',
			'link_after'     => '</span>',
			'fallback_cb'    => false,
			]);
		?>
	  </div>


    </div>
  </div>

  <!-- Footer Bottom Bar -->
  <div class="footer-bottom text-center text-white small mt-4 py-3">
    <div class="container">
      PRIVACY POLICY | TERMS & CONDITIONS | Sitemap | © Casterpoint Services Ltd T/A Great Park Homecare<br>
      Registered Office: 59-60 Thames Street, Windsor, Berkshire, SL4 1TX UK | Registered in England No: 06971982 |
      Website managed by <a href="https://gorillahub.co.uk" target="_blank" class="text-white text-decoration-underline">GorillaHub</a>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
