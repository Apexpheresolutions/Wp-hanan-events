<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <aside class="widget-area" role="complementary">
                    <?php dynamic_sidebar('footer-1'); ?>
                </aside><!-- .widget-area -->
            <?php endif; ?>
        </div><!-- .footer-widgets -->

        <div class="site-info">
            <div class="footer-social-links">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div><!-- .footer-social-links -->

            <div class="site-copyright">
                <p>&copy; <?php echo date('Y'); ?> Hanan Events. All rights reserved.</p>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

    <?php wp_footer(); ?>
</body>
</html>
