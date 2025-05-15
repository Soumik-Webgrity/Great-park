<?php 
// Template Name: Contact Template
get_header();
?>

<?=do_shortcode('[custom_page_banner]');?>

<!-- contact form section -->

<section class="contact-form-section py-5 px-3 px-md-0">
  <div class="container">
    <div class="row">
      
      <div class="col-md-5 mb-4 mb-md-0 contact_details">
        <h2 class="contact_heading"><?= get_field('contact_heading');?></h2>
        <p class="contact_subheading"><?= get_field('contact_subheading');?></p>
        <p><strong><?= get_field('contact_heading1');?></strong><br>
        <a href="tel:<?= do_shortcode('[site_info key="phone1"]');?>"><?= do_shortcode('[site_info key="phone1"]');?></a>
        </p>
        <p><strong><?= get_field('contact_heading2');?></strong><br>
        <?= do_shortcode('[site_info key="address"]');?>
        </p>
      </div>

      <div class="col-md-7">
        <?php echo do_shortcode('[contact-form-7 id="de097cc" title="Contact form 1"]'); ?>
      </div>

    </div>
  </div>
</section>


<!-- Area we cover section -->

<?php
$area_cover = get_field('area_cover_section');

if ($area_cover):
  $heading = $area_cover['heading'] ?? '';
  $left_areas = $area_cover['left_areas'] ?? '';
  $right_areas = $area_cover['right_areas'] ?? '';
  $google_map_link = $area_cover['google_map_link'] ?? '';

  // Map iframe support (plain link or full iframe)
  $map_embed = '';
  if (strpos($google_map_link, '<iframe') === false && !empty($google_map_link)) {
      $map_embed = '<iframe src="' . esc_url($google_map_link) . '" width="100%" height="320" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
  } else {
      $map_embed = $google_map_link;
  }
?>
<section class="areas-we-cover py-5 px-3 px-md-0" style="background-color:#07103c; color:#fff;">
  <div class="container">
    <div class="row">
      <!-- Left: Heading + Areas -->
      <div class="col-md-6 mb-4 d-flex flex-column justify-content-center">
        <?php if ($heading): ?>
          <h3 class="mb-4 main_heading"><?php echo esc_html($heading); ?></h3>
        <?php endif; ?>
        <div class="row">
          <div class="col-6">
            <ul class="list-unstyled">
              <?php foreach (explode("\n", $left_areas) as $area): ?>
                <li class="mb-2">
                  <i class="fa-solid fa-caret-right me-2"></i>
                  <?php echo esc_html(trim($area)); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-6">
            <ul class="list-unstyled">
              <?php foreach (explode("\n", $right_areas) as $area): ?>
                <li class="mb-2">
                  <i class="fa-solid fa-caret-right me-2"></i>
                  <?php echo esc_html(trim($area)); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <!-- Right: Google Map -->
      <div class="col-md-6">
        <?php if ($map_embed): ?>
          <div class="map-wrapper" style="border-radius:8px; overflow:hidden; box-shadow:0 0 10px rgba(0,0,0,0.2);">
            <?php echo $map_embed; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<?php
get_footer();
?>