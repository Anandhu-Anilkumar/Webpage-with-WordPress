<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
?>

<header class="navbar navbar-expand-md w-100 bg-white sc-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo get_field('company_url'); ?>">
            <?php if ( $image = get_field('company_logo') ):
                $image_url = wp_get_attachment_image_src($image, 'full')[0];
                $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
            ?>
            <img class="sc-nav__logo" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
            <?php endif; ?>
        </a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-white mt-2 pt-2 pt-md-0 px-3 px-md-0" id="navbarSupportedContent">
            <ul class="navbar-nav w-100 mt-4 gap-1 gap-md-3 justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_field('url_1'); ?>" title="<?php echo get_field('label_1'); ?>"><?php echo get_field('label_1'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_field('url_2'); ?>" title="<?php echo get_field('label_2'); ?>"><?php echo get_field('label_2'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_field('url_3'); ?>" title="<?php echo get_field('label_3'); ?>"><?php echo get_field('label_3'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_field('url_4'); ?>" title="<?php echo get_field('label_4'); ?>"><?php echo get_field('label_4'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_field('url_5'); ?>" title="<?php echo get_field('label_5'); ?>"><?php echo get_field('label_5'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_field('url_6'); ?>" title="<?php echo get_field('label_6'); ?>"><?php echo get_field('label_6'); ?></a>
                </li>
            </ul>
            <a class="sc-nav__icon" href="<?php echo get_field('search_url'); ?>" title="Search">
                <svg class="sc-nav__search" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path class="sc-nav__search-icon"
                        d="M10 5C7.23858 5 5 7.23858 5 10C5 12.7614 7.23858 15 10 15C11.381 15 12.6296 14.4415 13.5355 13.5355C14.4415 12.6296 15 11.381 15 10C15 7.23858 12.7614 5 10 5ZM3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 11.5719 16.481 13.0239 15.6063 14.1921L20.7071 19.2929C21.0976 19.6834 21.0976 20.3166 20.7071 20.7071C20.3166 21.0976 19.6834 21.0976 19.2929 20.7071L14.1921 15.6063C13.0239 16.481 11.5719 17 10 17C6.13401 17 3 13.866 3 10Z" />
                </svg>
            </a>
        </div>
    </div>
</header>

<?php
  }
}
?>

<?php get_footer(); ?>
