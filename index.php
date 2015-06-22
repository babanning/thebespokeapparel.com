<?php get_header(); ?>

<div class="page">
    <div class="vid-block">
        <img class="vid-img" src="<?php echo get_template_directory_uri(); ?>/images/intro-block-bg-img.png">
        <div class="abs">
            <div class="right-content">
            <h1 class="headline" id="slogan">Master the Unspoken Word.</h1>
            <a href="#" class="js-video-btn button hollow-button">watch the video</a>
          </div>
        </div>
        <div class="abs video-panel">
            <!-- <iframe class="fade-in" id="bespoke-youtube-iframe" width="100%" height="100%" src="https://www.youtube.com/embed/QL9Qlkky81M?rel=0&autoplay=0&showinfo=0&modestbranding=1" frameborder="0" allowfullscreen></iframe> -->
        </div>
    </div>

    <div id="section-id-products" class="js-waypoint-products-section section products-block no-bottom-pad">
        <div class="wrap">
            <img class="needle" src="<?php echo get_template_directory_uri(); ?>/images/needle.png" />
        </div>
        <div class="wrap center">
            <h2 class="headline red">Our Products</h2>
            <p class="lead choke no-bottom-margin">Sure, we make suits. . . We also have everything that makes an amazing suit perfect.  </p>
        </div>
    
        <div class="section nobg js-product-slide-frame">

                    <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 100 );
            $loop = new WP_Query( $args );
            $group_i = 1; //iterator to get 6 in one group
            $product_i = 1; //iterator to get 6 in one group

            while ( $loop->have_posts() ) : $loop->the_post();
                if ($group_i == 1) {
                    echo '<div class="cell-group"><div class="wrap">';
                };
                echo '<div class="cell product-nth-'.$group_i . '">';
                    //the_title();
                    // echo '<div class="entry-content">';
                    //     the_content();
                    // echo '</div>';
                    echo '<img src="http://placehold.it/500x333/bababa">';
                echo '</div>';

                if ($group_i == 6 || $product_i == $loop->post_count)  {
                    echo '</div></div><!--close-->';
                    $group_i = 1;
                } else {
                    $group_i += 1;
                };
                $product_i += 1;
            
            endwhile;
            ?>
        <!--     <div class="cell-group">
                        <div class="wrap">
                            <div class="cell"><img src="http://placehold.it/500x333/bababa"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/bababa"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/bababa"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/bababa"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/bababa"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/bababa"></div>
                        </div>
                    </div>
                    <div class="cell-group">
                        <div class="wrap">
                            <div class="cell"><img src="http://placehold.it/500x333/333333"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/333333"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/333333"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/333333"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/333333"></div>
                            <div class="cell"><img src="http://placehold.it/500x333/333333"></div>
                        </div>
                    </div> -->
        </div>
        <div class="section nobg cell-controller center">
        </div>
    </div>
    <div id="section-id-whatwedo" class="section what-we-do" style="background: url('<?php echo get_template_directory_uri(); ?>/images/what-we-do.png')">
        <h2 class="headline center">What We Do</h2>
        <div class="wrap center cell-group align-top">
            <div class="cell">
                <div class="serv-card">
                    <img src="http://placehold.it/500x333/d8d8d8" class="serv-illustration">
                    <h2 class="profile-name">Custom Tailoring</h2>
                    <ul class="serv-list">
                        <li>service number one</li>
                        <li>service number two</li>
                        <li>service number three</li>
                        <li>service number four</li>
                    </ul>
                </div>
            </div>
            <div class="cell">
                <div class="serv-card">
                    <img src="http://placehold.it/500x333/d8d8d8" class="serv-illustration">
                    <h2 class="profile-name">Alterations</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                </div>
            </div>
            <div class="cell">
                <div class="serv-card">
                    <img src="http://placehold.it/500x333/d8d8d8" class="serv-illustration">
                    <h2 class="profile-name">Image Consulation</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                </div>
            </div>
        </div>
        <!-- <img class="bg-image" src="<?php echo get_template_directory_uri(); ?>/images/what-we-do.png" /> -->
    </div>

    <div id="section-id-whoweare" class="section who-we-are">
        <div class="wrap">
            <img class="needle" src="<?php echo get_template_directory_uri(); ?>/images/needle.png" />
        </div>
        <div class="wrap center">
            <h2 class="headline red">Who We Are</h2>
            <p class="lead choke">Don&rsquo;t settle for less than perfection. We’ll give you a suit that is one of a kind, made just for you.</p>

            <div class="cell-group cell-group-half">
                <div class="profile-card cell">
                    <div class="serv-card">
                        <img src="http://placehold.it/500x333/d8d8d8" alt="David Corbitt">
                        <h2 class="profile-name">David Corbitt</h2>
                        <h3 class="profile-title">Founder</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
                <div class="profile-card cell">
                    <div class="serv-card">
                        <img src="http://placehold.it/500x333/d8d8d8" alt="Dani Corbitt">
                        <h2 class="profile-name">Dani Corbitt</h2>
                        <h3 class="profile-title">Manager of Operations</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor  incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="testimonials vid-block">
        <!--This structure might need to change because of slider behavior -->
        <img class="vid-img" src="<?php echo get_template_directory_uri(); ?>/images/intro-block-bg-img-invert.png">
        <div class="abs js-testimonial-slide-frame testimonial-slide-frame">

        <?php
        $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 100 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();

            $length = strlen ( get_the_title() ); 
            if ($length > 60) {
            echo '<div class="testimonial-slide long-testimonial">'; //`long` class for lengthy quotes
            } else
            echo '<div class="testimonial-slide">';
                echo '<h4 class="quote-content">"';
                    the_title();
                echo '"</h4>';
                echo '<h4 class="quote-author">-';
                echo wp_strip_all_tags( get_the_content() );
                echo '</h4>';
            echo '</div>';
        endwhile;
        ?>
            <!--
            <div class="testimonial-slide">
                <h4 class="quote-content">"Bespoke is simply the greatest."</h4>
                <h4 class="quote-author">- Muhammad Ali</h4>
            </div>
            -->
        </div>
        <div class="testimonials-thumbs-container">
            <div class="testimonials-thumbs"></div>
        </div>
    </div>

    <div id="section-id-contactus" class="section contact-us">
        <div class="wrap">
            <img class="needle" src="<?php echo get_template_directory_uri(); ?>/images/needle.png" />
        </div>
        <div class="wrap center">
            <h2 class="headline red">Contact Us</h2>
            <p class="lead choke">Let’s see what we can do for you. Email or call us to get started on the path to lifechanging clothing.</p>
        </div>
        <div class="wrap cell-group cell-group-half align-top">
            <div class="cell form-cell">
                <?php echo do_shortcode('[contact-form-7 id="4" title="Home Contact Form"]'); ?>
            </div>
            <div class="cell illustration-cell">
                <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" />
            </div>
        </div>
    </div>

    <!-- <div id="section-id-map" class="section map-section">
        <div class="googlemap-iframe-container">
            <iframe class="googlemap-iframe" width="800" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Bespoke%20Apparel%2C%20Lamp%20and%20Lantern%20Village%2C%20Chesterfield%2C%20MO%2C%20United%20States&key=AIzaSyAMbyFhPXX4GKCMxd_AH6Ch0jczzoLTwro"></iframe>
        </div>
    </div> -->
</div>
<div class="footer">
    <div class="wrap">
    <p>Lorem ipsum Non aliqua aute Ut ea magna dolore sunt id sed amet officia Excepteur ad Ut ea tempor cillum tempor sunt Ut Duis reprehenderit ullamco Excepteur id non officia nisi adipisicing consequat ad fugiat do incididunt.</p>
    </div>
</div>




<?php

    //$args = array( 'post_type' => 'product', 'posts_per_page' => 100 );
    //$loop = new WP_Query( $args );
    //$group_i = 1; //iterator to get 6 in one group
    //$product_i = 1; //iterator to get 6 in one group
//
    //while ( $loop->have_posts() ) : $loop->the_post();
    //    if ($group_i == 1) {
    //        echo '<div class="a-group-of-entries">';
    //    };
    //    echo '<div class="entry product-nth-'.$group_i . '">';
    //        the_title();
    //        echo '<div class="entry-content">';
    //            the_content();
    //        echo '</div>';
    //    echo '</div>';
//
    //    if ($group_i == 6 || $product_i == $loop->post_count)  {
    //        echo '</div><!--close-->';
    //        $group_i = 1;
    //    } else {
    //        $group_i += 1;
    //    };
    //    $product_i += 1;
    //
    //endwhile;
?>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/waypoints-v3.1.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/fastclick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bespoke.js"></script>
<style>
    html {margin-top:0 !important;} /* wordpress admin bar */
</style>
<?php get_footer(); ?>
