<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
?>

<div class="sc-events">
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
</div>

<?php
  }
}
?>

<?php get_footer(); ?>
