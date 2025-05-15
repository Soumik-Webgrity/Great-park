<?php
/**
 * great park functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package great_park
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function great_park_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on great park, use a find and replace
		* to change 'great-park' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'great-park', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary'     => esc_html__( 'Primary Menu', 'great-park' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'great-park' ),
		)
	);


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'great_park_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'great_park_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function great_park_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'great_park_content_width', 640 );
}
add_action( 'after_setup_theme', 'great_park_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function great_park_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'great-park' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'great-park' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'great_park_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function great_park_scripts() {
	wp_enqueue_style( 'great-park-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'great-park-style', 'rtl', 'replace' );

	wp_enqueue_script( 'great-park-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'great_park_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Global site info config
$GLOBALS['site_info'] = [
    'phone1'  => '+44 (0) 1753 369088',
    'phone2'  => '01753 369088',
    'phone3'  => '+44 1753 369088',
    'address' => 'Unit 5 Silversmith Court, 10 High Street Eton, Berkshire, SL4 6AS',
	'fb' => 'https://www.facebook.com/GreatParkHomecare/',
	'twit' => 'https://x.com/WindsorHomecare',

];

function shortcode_site_info($atts) {
    $atts = shortcode_atts([
        'key' => '',
    ], $atts);

    $key = $atts['key'];

    return isset($GLOBALS['site_info'][$key]) ? $GLOBALS['site_info'][$key] : '';
}
add_shortcode('site_info', 'shortcode_site_info');


// Work with us section 
function work_for_us_shortcode() {
    if (!function_exists('get_field')) return '';

    $group = get_field('work_for_us_section');
    if (!$group || !is_array($group)) return '';

    $background_image   = $group['background_image'] ?? '';
    $work_heading       = $group['work_heading'] ?? '';
    $work_subheading    = $group['work_subheading'] ?? '';
    $column_text_left   = $group['column_text_left'] ?? '';
    $column_text_right  = $group['column_text_right'] ?? '';
    $quote_text         = $group['quote_text'] ?? '';
    $quote_source       = $group['quote_source'] ?? '';
    $button_text        = $group['button_text'] ?? '';

    // Collect 5 separate slide text fields
    $slides = [];
    for ($i = 1; $i <= 5; $i++) {
        $field_name = 'slide_text_' . $i;
        if (!empty($group[$field_name])) {
            $slides[] = $group[$field_name];
        }
    }

    ob_start();
    ?>
    <section class="work-for-us-section py-5 px-3 px-md-0" style="background-image: url('<?= esc_url($background_image); ?>');">
        <div class="work-for-us-container container text-white d-flex flex-column justify-content-center h-100 position-relative">

            <?php if ($work_heading): ?>
                <h2 class="work-for-us-heading mb-5 text-center"><?= esc_html($work_heading); ?></h2>
            <?php endif; ?>

            <?php if ($work_subheading): ?>
                <p class="work-for-us-subheading mb-2 text-center"><?= esc_html($work_subheading); ?></p>
            <?php endif; ?>

            <div class="row work-for-us-columns mt-4">
                <div class="col-md-6 work-for-us-left-text"><?= wp_kses_post($column_text_left); ?></div>
                <div class="col-md-6 work-for-us-right-text"><?= wp_kses_post($column_text_right); ?></div>
            </div>

            <?php if ($quote_text): ?>
                <div class="work-for-us-quote quote-box my-5 bg-light text-dark p-4 text-center mx-auto">
                    <blockquote class="mb-0">“<?= esc_html($quote_text); ?>”</blockquote>
                    <?php if ($quote_source): ?>
                        <footer class="blockquote-footer mt-2"><?= esc_html($quote_source); ?></footer>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($button_text): ?>
                <div class="work-for-us-button text-center">
                    <a href="<?= esc_url(site_url('/work-for-us')); ?>" class="btn button1 px-4 py-2 text-uppercase">
                        <?= esc_html($button_text); ?>
                    </a>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($slides)): ?>
                <div class="work-for-us-quote-slider mt-5 mx-auto position-relative" style="max-width: 700px;">
                    <div class="quote-slider-header d-flex justify-content-center align-items-center mb-3">
                        <div class="quote_icon fs-3">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        
                    </div>
					<div class="quote-slider-arrows">
                            
                        </div>

                    <div class="slick-slider-quotes">
                        <?php foreach ($slides as $quote): ?>
                            <div class="quote-slide text-center px-4">
                                <blockquote class="blockquote text-white fst-italic">“<?= esc_html($quote); ?>”</blockquote>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <script>
    jQuery(document).ready(function($) {
        if ($('.slick-slider-quotes').length) {
            $('.slick-slider-quotes').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 4000,
                adaptiveHeight: true,
                appendArrows: $('.quote-slider-arrows'), 
    prevArrow: '<button type="button" class="slick-prev1"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next1"><i class="fa fa-angle-right"></i></button>'
            });
        }
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('work_for_us_section', 'work_for_us_shortcode');



// Banner shortcode

function custom_banner_shortcode() {
    if (is_front_page()) return ''; // Exclude home page only
    if (!function_exists('get_field')) return '';

    $banner = get_field('my_banner');
    if (!$banner || !is_array($banner)) return '';

    $fallback_image_url = get_template_directory_uri() . '/assets/images/noimage.png';
    $image_url   = $banner['banner_image'] ?? $fallback_image_url;
    $heading     = $banner['banner_heading'] ?? '';
    $subheading  = $banner['banner_subheading'] ?? '';

    ob_start();
    ?>
    <section class="global_topsection">
    <div class="global-banner-wrapper position-relative">
        <div class="position-relative px-120px">
            <div class="global-banner text-white" style="background-image: url('<?php echo esc_url($image_url); ?>');">
                <!-- Overlay -->
                <div class="global-overlay"></div>

                <div class="global-banner-content-wrapper">
                    <div class="global-banner-content">
                        <?php if ($heading): ?>
                            <h1 class="global_banner_heading mb-3"><?php echo esc_html($heading); ?></h1>
                        <?php endif; ?>

                        <?php if ($subheading): ?>
                            <p class="lead global_banner_subheading mb-3 mb-md-4"><?php echo esc_html($subheading); ?></p>
                        <?php endif; ?>

                        <?php if (function_exists('yoast_breadcrumb')): ?>
                            <div class="breadcrumb-wrapper text-white mt-3 position-relative">
                                <?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php
    return ob_get_clean();
}
add_shortcode('custom_page_banner', 'custom_banner_shortcode');



