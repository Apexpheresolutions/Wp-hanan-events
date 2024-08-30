<?php
get_header(); // Include the header.php file
?>

<main>
    <section class="main-content">
        <div class="container">
            <!-- Start the Loop -->
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( '« Previous', 'hanan-events' ),
                        'next_text' => __( 'Next »', 'hanan-events' ),
                    ) );
                    ?>
                </div>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'hanan-events' ); ?></p>
            <?php endif; ?>
            <!-- End the Loop -->
        </div>
    </section>
</main>

<?php
get_footer(); // Include the footer.php file
?>
