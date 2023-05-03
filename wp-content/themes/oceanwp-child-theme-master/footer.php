<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

<?php wp_footer(); ?>

<script>
// to prevent banner module gets overlapped by navbar, only fix-top navbar when user starts scrolling
let navbar = document.querySelector('.navbar');
window.addEventListener("scroll", function () {
    if (window.scrollY > 30) {
        navbar.classList.add('fixed-top');
    } else {
        navbar.classList.remove('fixed-top');
    }
});
</script>
</body>
</html>
