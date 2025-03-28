<?php
get_header();
global $wp_query;
?>
    <section class="hero">
        <div class="hero-text">
            <?php
            echo '<h1>' . single_cat_title('', false) . '</h1>';
            echo category_description();
            ?>
        </div>
        <img src="<?php echo get_random_post_image(get_queried_object_id());?>" alt="random kuva" >
    </section>
    <main>
        <section class="products">
            <h2>Products</h2>
            <?php
            generate_article($wp_query);
            ?>
        </section>
    </main>
<?php
get_footer();