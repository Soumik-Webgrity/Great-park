<?php 
// Template Name: Home Template
get_header();
?>

<section class="home_topsection">
<?php
$banner = get_field('home_banner');

if ($banner) :
  $fallback_image_url = get_template_directory_uri() . '/assets/images/noimage.png';
  $image_url = (isset($banner['home_banner_image']) && $banner['home_banner_image'])
    ? $banner['home_banner_image']
    : $fallback_image_url;

  $heading = $banner['home_banner_heading'];
  $subheading = $banner['home_banner_subheading'];
  $desc = $banner['home_banner_short_desc'];
  $button_text = $banner['home_banner_button_text'];
  $years = $banner['years_of_experience'];
?>

<div class="home-banner-wrapper position-relative">
  <div class=" position-relative px-120px">
    <div class="home-banner text-white" style="background-image: url('<?php echo esc_url($image_url); ?>');">
      <div class="row h-100 align-items-center">
        <div class="col-md-6 px-5 py-5">
          <?php if ($heading): ?>
            <h1 class="banner_heading mb-3"><?php echo esc_html($heading); ?></h1>
          <?php endif; ?>

          <?php if ($subheading): ?>
            <p class="lead banner_subheading mb-3 mb-md-4"><?php echo esc_html($subheading); ?></p>
          <?php endif; ?>
            <p class="lead banner_desc mb-3 mb-md-5"><?php echo esc_html($desc); ?></p>
          <?php if ($button_text): ?>
            
          <?php endif; ?>
          <a href="<?=site_url('/contact-us');?>" class="btn px-4 py-2 button1"><?php echo esc_html($button_text); ?></a>
        </div>
        <div class="col-md-6"></div>
      </div>

      <?php if ($years): ?>
        <div class="experience-box position-absolute text-center text-white">
          <div class="exp_year"><?php echo esc_html($years); ?></div>
          <div class="">Years of<br>Experience</div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php endif; ?>

</section>

<?php
$about = get_field('home_about');
if ($about):
?>
<section class="home_about_section container my-5 py-5 d-flex flex-wrap align-items-center">
  <div class="about-left col-lg-6 col-12 mb-4 mb-lg-0 text-center text-lg-start">
    <?php if (!empty($about['about_image'])): ?>
      <img src="<?= $about['about_image']; ?>" alt="About Image" class="img-fluid rounded">
    <?php endif; ?>
  </div>

  <div class="about-right col-lg-6 col-12">
    <?php if (!empty($about['about_heading'])): ?>
      <h2 class="about_heading mb-2"><?= esc_html($about['about_heading']); ?></h2>
    <?php endif; ?>

    <?php if (!empty($about['about_subheading'])): ?>
      <h3 class="about_subheading mb-4"><?= esc_html($about['about_subheading']); ?></h3>
    <?php endif; ?>

    <?php if (!empty($about['about_desc'])): ?>
      <?= $about['about_desc']; ?>
    <?php endif; ?>
    
    
    
  </div>
</section>
<?php endif; ?>

<?php
$client_spotlight = get_field('client_spotlight_section'); 

if ($client_spotlight): 
    $heading = $client_spotlight['spotlight_heading'];
    $subheading = $client_spotlight['spotlight_subheading'];
    $link_text = $client_spotlight['spotlight_link_text'];
    $right_image = $client_spotlight['spotlight_background_image'];

    // Collect available quotes
    $quotes = [];
    for ($i = 1; $i <= 5; $i++) {
        $quote = $client_spotlight["spotlight_quote_{$i}"];
        if (!empty($quote)) {
            $quotes[] = $quote;
        }
    }
?>
<section class="client-spotlight-section" style="background-image: url('<?= esc_url($right_image); ?>');">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- LEFT CONTENT -->
      <div class="col-md-8 col-lg-6 left-content text-white p-5">
        <h2 class="spotlight_heading"><?= esc_html($heading); ?></h2>
        <p class="spotlight_subheading"><?= esc_html($subheading); ?></p>

        <div class="quote-slider-header d-flex justify-content-between align-items-center mb-3">
          <!-- Left: Quote Icon -->
          <div class="quote_icon">
            <i class="fa-solid fa-quote-left"></i>
          </div>

          <!-- Right: Slider Arrows -->
          <div class="quote-slider-arrows">
            
          </div>
        </div>

        <?php if (!empty($quotes)): ?>
          <div class="spotlight-quotes-slider">
            <?php foreach ($quotes as $q): ?>
              <blockquote class="spotlight_quote">“<?= esc_html($q); ?>”</blockquote>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if ($link_text): ?>
          <a href="<?= site_url('/success-stories'); ?>" class="spotlight_link"><?= esc_html($link_text); ?></a>
        <?php endif; ?>
      </div>

      <div class="col-md-4 col-lg-6 right-image p-0"></div>

    </div>
  </div>
</section>

<?php endif; ?>

<?php
$steps = get_field('home_care_steps');
?>

<section class="home-care-steps py-5">
  <div class="container text-center">
    <h2 class="home-care-title py-5"><?= esc_html($steps['steps_heading']); ?></h2>

    <div class="steps-icons position-relative d-flex justify-content-center flex-wrap align-items-center align-items-lg-start">

      <!-- Step 1 -->
      <div class="step-group text-center position-relative mb-5 mb-md-0" data-step="0">
        <div class="step-icon active" data-step="0">
          <img 
            src="<?= get_template_directory_uri(); ?>/assets/images/headphone-hover.png" 
            data-default="<?= get_template_directory_uri(); ?>/assets/images/headphone.png" 
            data-hover="<?= get_template_directory_uri(); ?>/assets/images/headphone-hover.png" 
            alt="Step 1">
        </div>
        <div class="step-box active" data-step="0">
          <div class="pointer-up"></div>
          <h4><?= esc_html($steps['step_1_title']); ?></h4>
          <p><?= esc_html($steps['step_1_content']); ?></p>
        </div>
        <div class="curve-img d-none d-md-block">
        <img 
          src="<?= get_template_directory_uri(); ?>/assets/images/curve.png" 
          alt="curve line" 
          class="img-fluid"
        >
      </div>
      </div>

      <!-- Curve Image 1 -->
      

      <!-- Step 2 -->
      <div class="step-group text-center position-relative mb-5 mb-md-0" data-step="1">
        <div class="step-icon" data-step="1">
          <img 
            src="<?= get_template_directory_uri(); ?>/assets/images/think.png" 
            data-default="<?= get_template_directory_uri(); ?>/assets/images/think.png" 
            data-hover="<?= get_template_directory_uri(); ?>/assets/images/think-hover.png" 
            alt="Step 2">
        </div>
        <div class="step-box" data-step="1">
          <div class="pointer-up"></div>
          <h4><?= esc_html($steps['step_2_title']); ?></h4>
          <p><?= esc_html($steps['step_2_content']); ?></p>
        </div>
        <div class="curve-img d-none d-md-block">
        <img 
          src="<?= get_template_directory_uri(); ?>/assets/images/curve.png" 
          alt="curve line" 
          class="img-fluid"
        >
      </div>
      </div>

      <!-- Curve Image 2 -->
      

      <!-- Step 3 -->
      <div class="step-group text-center position-relative mb-5 mb-md-0" data-step="2">
        <div class="step-icon" data-step="2">
          <img 
            src="<?= get_template_directory_uri(); ?>/assets/images/protection.png" 
            data-default="<?= get_template_directory_uri(); ?>/assets/images/protection.png" 
            data-hover="<?= get_template_directory_uri(); ?>/assets/images/protection-hover.png" 
            alt="Step 3">
        </div>
        <div class="step-box" data-step="2">
          <div class="pointer-up"></div>
          <h4><?= esc_html($steps['step_3_title']); ?></h4>
          <p><?= esc_html($steps['step_3_content']); ?></p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Help section -->

<?php
$help = get_field('home_help_section');
?>

<section class="home-help">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Column: Text -->
      <div class="col-md-5 mb-5 mb-md-0">
        <h2 class="mb-3 main_heading"><?= esc_html($help['help_title']); ?></h2>
        <p class="mb-4 main_subheading"><?= esc_html($help['help_desciption']); ?></p>
        <a href="<?=site_url('/contact-us')?>" class="btn button1 text-uppercase">
          <?= esc_html($help['help_button_text']); ?>
        </a>
      </div>

      <!-- Right Column: Image -->
      <div class="col-md-7 text-center">
        <?php if (!empty($help['help_image'])): ?>
          <img src="<?= esc_url($help['help_image']); ?>" 
               alt="<?= esc_attr($help['help_image']); ?>" 
               class="img-fluid help_image">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>


<!-- Work for us section -->


<?= do_shortcode('[work_for_us_section]')?>



<?php
get_footer();
?>

<script>
jQuery(document).ready(function($) {
  $('.spotlight-quotes-slider').slick({
    arrows: true,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    fade: false,
    speed: 600,
    appendArrows: $('.quote-slider-arrows'), 
    prevArrow: '<button type="button" class="slick-prev1"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next1"><i class="fa fa-angle-right"></i></button>'
  });

  function matchStepBoxHeights() {
  var maxHeight = 0;
  $('.step-box').css('height', 'auto');

  $('.step-box').each(function () {
    var boxHeight = $(this).outerHeight();
    if (boxHeight > maxHeight) {
      maxHeight = boxHeight;
    }
  });

  $('.step-box').css('height', maxHeight + 'px');
}

$(window).on('load resize', matchStepBoxHeights);

$(document).ready(function () {
  $('.step-icon').on('click', function () {
    var step = $(this).data('step');

    // Toggle active state
    $('.step-icon').removeClass('active');
    $(this).addClass('active animate-icon-pop');

    // Reset all icons to default
    $('.step-icon img').each(function () {
      $(this).attr('src', $(this).data('default'));
    });

    // Set hover image for clicked icon
    var img = $(this).find('img');
    img.attr('src', img.data('hover'));

    // Show corresponding step box
    $('.step-box').removeClass('active animate-slide-shake');
    var activeBox = $('.step-box[data-step="' + step + '"]');
    activeBox.addClass('active animate-slide-shake');
  });
});


});


</script>