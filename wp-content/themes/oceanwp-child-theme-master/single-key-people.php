<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
?>

<div class="sc-people">
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
</div>

<?php
  }
}
?>

<?php get_footer(); ?>
