<?php 
// Template Name: About Template
get_header();
?>

<?=do_shortcode('[custom_page_banner]');?>

<?php
$about = get_field('about_details_section');
if ($about):
    $left_image         = $about['about_left_image'];
    $right_heading      = $about['about_right_heading'];
    $right_desc         = $about['about_right_desc'];
    $bottom_heading1    = $about['about_bottom_heading1'];
    $bottom_desc1       = $about['about_bottom_desc1'];
    $bottom_heading2    = $about['about_bottom_heading2'];
    $bottom_desc2       = $about['about_bottom_desc2'];
?>

<section class="about-section py-5 my-5 px-3 px-md-0">
    <div class="container">
        <div class="row align-items-center mb-5">
            <?php if ($left_image): ?>
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="<?php echo esc_url($left_image); ?>" alt="<?php echo esc_attr($left_image); ?>" class="img-fluid about_left_image">
                </div>
            <?php endif; ?>

            <div class="col-lg-5 about_rightside">
                <?php if ($right_heading): ?>
                    <h2 class="main_heading mb-3"><?php echo esc_html($right_heading); ?></h2>
                <?php endif; ?>
                <?php if ($right_desc): ?>
                    <p><?php echo wp_kses_post($right_desc); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($bottom_heading1 || $bottom_desc1): ?>
            <div class="mb-5 about_bottom_heading">
                <?php if ($bottom_heading1): ?>
                    <h3 class=" mb-3"><?php echo esc_html($bottom_heading1); ?></h3>
                <?php endif; ?>
                <?php if ($bottom_desc1): ?>
                    <p><?php echo wp_kses_post($bottom_desc1); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($bottom_heading2 || $bottom_desc2): ?>
            <div class="about_bottom_heading">
                <?php if ($bottom_heading2): ?>
                    <h3 class="mb-3"><?php echo esc_html($bottom_heading2); ?></h3>
                <?php endif; ?>
                <?php if ($bottom_desc2): ?>
                    <p><?php echo wp_kses_post($bottom_desc2); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>


<!-- Our vision -->

<?php
$vision = get_field('our_vision');
if ($vision):
    $background_image = $vision['vision_background_image'] ?? '';
    
?>
<section class="our_vision" style="background-image: url('<?php echo esc_url($background_image); ?>'); ">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Column: Text -->
      <div class="col-md-6 mb-5 mb-md-0 vision_content">
        <?php if (!empty($vision['vision_heading'])): ?>
          <h2 class="mb-3 main_heading"><?php echo esc_html($vision['vision_heading']); ?></h2>
        <?php endif; ?>

        <?php if (!empty($vision['vision_description'])): ?>
          <?php echo $vision['vision_description']; ?>
        <?php endif; ?>
      </div>

      <!-- Right Column: Image -->
      <div class="col-md-6 text-center">
        
      </div>

    </div>
  </div>
</section>
<?php endif; ?>



<!-- Our Impact section -->

<?php
$impact = get_field('our_impact');
?>

<section class="home-help">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Column: Text -->
      <div class="col-md-5 mb-5 mb-md-0 impact_details">
        <h2 class="mb-3 main_heading"><?= esc_html($impact['impact_heading']); ?></h2>
        <?= $impact['impact_details']; ?>
        
      </div>

      <!-- Right Column: Image -->
      <div class="col-md-7 text-center">
        <?php if (!empty($impact['impact_image'])): ?>
          <img src="<?= esc_url($impact['impact_image']); ?>" 
               alt="<?= esc_attr($impact['impact_image']); ?>" 
               class="img-fluid help_image">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>


<!-- Work for us section-->

<?= do_shortcode('[work_for_us_section]')?>



<!-- Our team section -->

<?php
$team = get_field('team_section');
if ($team):
?>
<section class="team-section py-5 px-3 px-md-0">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2 class="main_heading"><?php echo esc_html($team['team_heading']); ?></h2>
            <div class="separator under-text"></div>
        </div>

        <?php
        $members = [
            $team['team_member_1'],
            $team['team_member_2'],
            $team['team_member_3'],
            
        ];

        foreach ($members as $i => $member):
            if (!$member) continue;

            $is_even = $i % 2 === 0;
        ?>
            <div class="row align-items-center every_team_section flex-column-reverse flex-md-row mb-5 <?php echo $is_even ? '' : 'flex-md-row-reverse'; ?>">
                <div class="col-md-4 mt-4 mt-md-0 d-flex justify-content-center justify-content-md-<?php echo $is_even ? 'start' : 'end'; ?> px-3">
                  <div class="image-container position-relative">
                      <img src="<?php echo esc_url($member['member_photo']); ?>" alt="<?php echo esc_attr($member['member_name']); ?>" class="img-fluid" />
                  </div>
              </div>



                <div class="col-md-8 member_details">
                    <h4 class="mb-1 member_name"><?php echo esc_html($member['member_name']); ?></h4>
                    <h6 class="text-pink fw-bold mb-3 member_designation"><?php echo wp_kses_post($member['member_designation']); ?></h6>
                    <div class="team_bio">
                        <?php echo wp_kses_post($member['member_bio']); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>


<?php
get_footer();
?>