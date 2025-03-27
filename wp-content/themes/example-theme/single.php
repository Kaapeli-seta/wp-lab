<?php
get_header();
?>
<main class="full-width">
    <section class="single">
        <h2>Featured Products</h2>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_title();
                the_content();
            endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        ?>
    </section>
</main>

<?php
get_footer();