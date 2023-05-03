<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
?>

<div class="sc-banner">
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
</div>

<?php
  }
}
?>

<?php get_footer(); ?>
