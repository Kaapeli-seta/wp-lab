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
        <img src="<?php
        $header_image = get_uploaded_header_images();
        array_shift($header_image);
        echo $header_image[0]['url'];?>"
             width="<?php get_custom_header()->width?>"
             height="<?php get_custom_header()->height?>"
             alt="random kuva" >
    </section>
    <main>
        <section class="products">
            <?php
            $args = ['child_of' => get_queried_object_id()];
            $subcategories = get_categories( $args );

            foreach ($subcategories as $subcategory) :
                echo '<h2>' . $subcategory->name . '</h2>';
                $args = [
                        'post_type' => 'post',
                        'cat' => $subcategory->term_id,
                        'post_per_page' => 3,
                    ];
                $products = new WP_Query($args);
                generate_article($products);
                ?>
            <artticle class="all">
                <a href="<?php echo get_category_link($subcategory->term_id)?>">View all</a>
            </artticle>
            <?php
            wp_reset_postdata();
            endforeach;
            ?>
        </section>
    </main>
<?php
get_footer();