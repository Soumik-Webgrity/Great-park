<?php 
// Template Name: Work Template
get_header();
?>
<?=do_shortcode('[custom_page_banner]');?>

<!-- Home care Jobs section -->


<?php
$jobs = get_field('job_section');
if ($jobs):
?>
<section class="home_about_section container my-5 py-5 d-flex flex-wrap align-items-center px-4 px-md-0">
  <div class="job-left col-lg-6 col-12 mb-4 mb-lg-0 text-center text-lg-start">
    <?php if (!empty($jobs['job_left_image'])): ?>
      <img src="<?= $jobs['job_left_image']; ?>" alt="Job Image" class="img-fluid job_left_image">
    <?php endif; ?>
  </div>

  <div class="job-right col-lg-6 col-12">
    <?php if (!empty($jobs['jobs_heading'])): ?>
      <h2 class="main_heading mb-2"><?= esc_html($jobs['jobs_heading']); ?></h2>
    <?php endif; ?>

    <?php if (!empty($jobs['jobs_subheading'])): ?>
      <h3 class="jobs_subheading mb-4"><em><?= esc_html($jobs['jobs_subheading']); ?></em></h3>
    <?php endif; ?>

    <?php if (!empty($jobs['jobs_description'])): ?>
      <?= $jobs['jobs_description']; ?>
    <?php endif; ?>
    
  </div>

  <div class="row">
    <div class="col-12 my-4">
         <?php if (!empty($jobs['bottom_description1'])): ?>
      <h3 class="bottom_description mb-4"><?= $jobs['bottom_description1']; ?></h3>
    <?php endif; ?>
    <a href="<?php echo site_url('/contact-us')?>" class="button2"><?= $jobs['button_text'];?></a>
    </div>
    <div class="job-right col-12 my-4">
        <?php if (!empty($jobs['bottom_heading'])): ?>
      <h2 class="main_heading mb-2"><?= esc_html($jobs['bottom_heading']); ?></h2>
    <?php endif; ?>

         <?php if (!empty($jobs['bottom_description2'])): ?>
      <?= $jobs['bottom_description2']; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Join family section -->

<?php
$staff_section = get_field('staff_section');

if ($staff_section):
  $heading = $staff_section['join_family_heading'] ?? '';
  $details = $staff_section['join_family_details'] ?? '';
  $image = $staff_section['join_family_image'] ?? '';
?>
<section class="staff-section py-5 px-3 px-md-0" style="background-image: linear-gradient(to right, #0282c8, transparent), url('<?php echo esc_url($image); ?>');">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Side: Text -->
      <div class="col-md-6 mb-4 mb-md-0 text-white">
        <?php if ($heading): ?>
          <h2 class="main_heading mb-3">
            <?php echo esc_html($heading); ?>
          </h2>
        <?php endif; ?>
        
        <?php if ($details): ?>
          <div class="staff-details">
            <?php echo wp_kses_post($details); ?>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>

<!-- We provide section -->


<?php
$benefits = get_field('home_care_benefits');
?>

<section class="home-help">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Column: Text -->
      <div class="col-md-5 mb-5 mb-md-0">
        <?php if ($benefits['benefits_list']): ?>
          <div class="benefits-list">
            <?php echo $benefits['benefits_list']; // expected to contain <ul><li>...</li></ul> ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Right Column: Image -->
      <div class="col-md-7 text-center">
        <?php if (!empty($benefits['benefit_image'])): ?>
          <img src="<?= esc_url($benefits['benefit_image']); ?>" 
               alt="<?= esc_attr($benefits['benefit_image']); ?>" 
               class="img-fluid help_image">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>


<!-- Contact form section -->
 <section class="Apply_now">
<div class="container text-white py-5 job_form">
<?php echo do_shortcode('[contact-form-7 id="e9672cc" title="Contact form 2"]'); ?>
</div>
</section>


<!-- Work for section -->

<?= do_shortcode('[work_for_us_section]')?>


<?php
get_footer();
?>