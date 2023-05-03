<?php /* Template Name: Dynamic Template */ ?>

<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'hero-banner',
    'posts_per_page' => 1
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
?>
<section class="sc-banner">
  <div class="sc-content-wrapper">
    <div class="sc-banner__content">
      <h1 class="sc-banner__title">
        <span><?php echo get_field('first_title'); ?></span>
        <span><?php echo get_field('second_title'); ?></span>
        <span><?php echo get_field('third_title'); ?></span>
      </h1>
      <p class="sc-description"><?php echo get_field('description'); ?></p>
      <div class="sc-cta">
        <a class="sc-btn" href="<?php echo get_field('cta_url'); ?>" title="<?php echo get_field('cta_text'); ?>"><?php echo get_field('cta_text'); ?></a>
      </div>
    </div>
    <?php if ( $image = get_field('banner_image') ) :
        $image_url = wp_get_attachment_image_src($image, 'full')[0];
        $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
    ?>
      <img class="sc-banner__image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
    <?php endif; ?>
  </div>
</section>
<?php
    endwhile;
endif;

wp_reset_postdata();
?>


<?php
$args = array(
    'post_type' => 'key-people',
    'posts_per_page' => 1
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
?>

<section class="sc-people">
    <div class="sc-content-wrapper">
        <div class="sc-people__wrapper">
            <div class="sc-tile">
                <div class="sc-tile__wrapper">
                    <?php if ( $image = get_field('people_1_image') ):
                        $image_url = wp_get_attachment_image_src($image, 'full')[0];
                        $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
                    ?>
                    <img class="sc-tile__image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    <?php endif; ?>
                    <div class="sc-tile__details">
                        <span class="sc-tile__marker"></span>
                        <div class="sc-tile__content">
                            <h4 class="sc-tile__name"><?php echo get_field('people_1_name'); ?></h4>
                            <span class="sc-tile__designation"><?php echo get_field('people_1_designation'); ?></span>
                            <p class="sc-description"><?php echo get_field('people_1_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sc-tile">
                <div class="sc-tile__wrapper">
                    <?php if ( $image = get_field('people_2_image') ):
                        $image_url = wp_get_attachment_image_src($image, 'full')[0];
                        $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
                    ?>
                    <img class="sc-tile__image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                    <?php endif; ?>
                    <div class="sc-tile__details">
                        <span class="sc-tile__marker"></span>
                        <div class="sc-tile__content">
                            <h4 class="sc-tile__name"><?php echo get_field('people_2_name'); ?></h4>
                            <span class="sc-tile__designation"><?php echo get_field('people_2_designation'); ?></span>
                            <p class="sc-description"><?php echo get_field('people_2_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-cta">
            <a class="sc-btn" href="<?php echo get_field('read_more_url'); ?>" title="<?php echo get_field('read_more_text'); ?>"><?php echo get_field('read_more_text'); ?></a>
        </div>
    </div>
</section>

<?php
    endwhile;
endif;

wp_reset_postdata();
?>


<?php
$args = array(
    'post_type' => 'event',
    'posts_per_page' => 1
);

$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
?>

<article class="sc-events">
    <div class="sc-content-wrapper">
        <div class="sc-events__wrapper">
            <div class="sc-events__content">
                <h3 class="sc-events__title-wrapper">
                    <span class="sc-events__marker"></span>
                    <span class="sc-events__title"><?php echo get_field('event_title'); ?></span>
                </h3>
                <p class="sc-description"><?php echo get_field('event_description'); ?></p>
                <div class="sc-cta">
                    <a class="sc-btn" href="<?php echo get_field('event_more_url'); ?>" title="<?php echo get_field('event_more_text'); ?>"><?php echo get_field('event_more_text'); ?></a>
                </div>
            </div>
            <?php if ( $image = get_field('event_image')) :
                $image_url = wp_get_attachment_image_src($image, 'full')[0];
                $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
            ?>
            <img class="sc-events__image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
            <?php endif; ?>
        </div>
    </div>
</article>

<?php
    endwhile;
endif;

wp_reset_postdata();
?>

<?php get_footer(); ?>