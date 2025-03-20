<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example WordPress Theme</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>
<div class="container">
    <?php get_header()?>
    <main>
        <section class="products">
            <h2>Featured Products</h2>
            <article class="product">
                <img src="//placehold.it/200x200?text=Product" alt="Product">
                <h3>Product 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#">Read More</a>
            </article>
            <article class="product">
                <img src="//placehold.it/200x200?text=Product" alt="Product">
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#">Read More</a>
            </article>
            <article class="product">
                <img src="//placehold.it/200x200?text=Product" alt="Product">
                <h3>Product 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="#">Read More</a>
            </article>
        </section>
    </main>
    <?php get_sidebar()?>
    <?php get_footer()?>


</div>
</body>

</html>