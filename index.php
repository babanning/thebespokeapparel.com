<?php get_header(); ?>
<div>BUAHAHAHAHAHAHAAH</div>

<div class="all-products">
<?php
    $args = array( 'post_type' => 'product', 'posts_per_page' => 10 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    echo '<div class="entry">';
        the_title();
        echo '<div class="entry-content">';
            the_content();
        echo '</div>';
    echo '</div>';
    endwhile;
    ?>
</div>


<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</section>
<!--<?php get_footer(); ?>-->