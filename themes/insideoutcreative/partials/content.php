<?php
if(have_rows('builder')): while(have_rows('builder')): the_row();
$layout = get_sub_field('layout');

if($layout == 'Content + Image'){
    if(have_rows('content_image')): while(have_rows('content_image')): the_row();
    $bgImg = get_sub_field('background_image');
        $style = get_sub_field('style');
        $classes = get_sub_field('classes');
        $content = get_sub_field('content');
        $img = get_sub_field('image');
        if($bgImg){
            echo '<section class="position-relative content-section bg-accent-secondary text-accent-quinary ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;padding:150px 0;' . $style . '" id="' . get_sub_field('id') . '">';
            // echo '</section>';
        } else {
            echo '<section class="position-relative content-section bg-accent-secondary text-accent-quinary ' . $classes . '" style="padding:150px 0;' . $style . '" id="' . get_sub_field('id') . '">';
        }

        echo '<div class="container">';
        echo '<div class="row row-content align-items-center justify-content-between">';
        echo '<div class="col-lg-4">';
            echo $content;
        echo '</div>';

        if($img):
        echo '<div class="col-lg-6 pt-lg-0 pt-5">';
            echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
        echo '</div>';
        endif;

        echo '</div>';
        echo '</div>';

        echo '</section>';
    endwhile; endif;

} elseif($layout == 'Text Columns'){
    if(have_rows('text_columns')): while(have_rows('text_columns')): the_row();
    $bgImg = get_sub_field('background_image');
    $style = get_sub_field('style');
    $classes = get_sub_field('classes');

    if($bgImg){
        echo '<section class="position-relative content-section bg-accent-quaternary ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;padding:150px 0;' . $style . '">';
        // echo '</section>';
    } else {
        echo '<section class="position-relative content-section bg-accent-quaternary ' . $classes . '" style="padding:150px 0;' . $style . '">';
    }

    echo '<div class="container">';
    echo '<div class="row row-content align-items-center justify-content-between">';

    if(have_rows('columns')): while(have_rows('columns')): the_row();
    echo '<div class="col-lg-3 col-md-6 text-center pt-lg-0 pb-lg-0 position-relative" style="padding-top:100px;padding-bottom:100px;">';
    echo '<span class="position-absolute h1 mb-0 text-columns-big-title" style="
    opacity: .5;
    top: -50%;
    left: 50%;
    transform: translate(-60%,-50%);
    font-size: 180px;
    color:#a49c86;
    mix-blend-mode:multiply;">' . get_sub_field('big_title') . '</span>';

    echo '<span class="" style="color:var(--accent-septenary);letter-spacing:0.5em;">' . get_sub_field('small_title') . '</span>';

    echo '</div>';
    endwhile; endif;

    echo '</div>';
    echo '</div>';

    echo '</section>';

    endwhile; endif;
} elseif ($layout == 'Repeated Content') {

    if(have_rows('repeated_content')): while(have_rows('repeated_content')): the_row();

    if(have_rows('sections')):
    echo '<section class="pt-5 content-area position-relative" style="">';


        echo wp_get_attachment_image(69,'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);
        echo '<div class="container-fluid">';

        while(have_rows('sections')): the_row();

        $imageSide = get_sub_field('image_side');

        if($imageSide == 'Left'){
            echo '<div class="row">';
        } else {
            echo '<div class="row flex-row-reverse">';
            // echo '</div>';
        }
        echo '<div class="col-md-6 p-0">';
        $image = get_sub_field('image');
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
        // echo '<img src="//cdn.shopify.com/s/files/1/0280/8004/6214/t/5/assets/Photos-Custom-Gift-Boxes.jpg?v=175517787959240699551659978186" alt="" width="100%" height="100%" style="object-fit:cover;">';
        echo '</div>';

        if($imageSide == 'Left'){
        echo '<div class="col-md-6 p-0 right">';
        } else {
            echo '<div class="col-md-6 p-0 left">';
        }
        echo '<div class="col-md-12 pt-5 pb-5">';
        echo '<div class="top">';


        if($imageSide == 'Left'){
        echo '<div class="bg-top" style="clip-path: polygon(10% 0%, 100% 0, 100% 100%, 0% 100%);
        "></div>';
        } else {
        echo '<div class="bg-top" style="clip-path: polygon(0% 0%, 90% 0%, 100% 100%, 0% 100%);
        "></div>';
        }

        echo '<div class="text-center position-relative z-1">';
        echo '<div class="">';
        echo '<h3 class="text-accent-quinary bold text-uppercase h6" style="transform:translate(-75px, 10px);letter-spacing:0.2em;">' . get_sub_field('pretitle') . '</h3>';
        echo '</div>';
        echo '<div class="">';
        echo '<h2 class="text-white" style="font-size:60px;">' . get_sub_field('title') . '</h2>';
        echo '</div>';
        // echo '<div class="text-right">';
        // echo '<h5 class="accent text-uppercase ls-big nova-bold">With our high-quality materials</h5>';
        // echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="pt-3 pb-5"></div>';

        if($imageSide == 'Left'){
        echo '<div class="col-md-11 ml-auto mt-2 smaller-text">';
        } else {
            echo '<div class="col-md-11 mt-2 smaller-text">';
            // echo '</div>';
        }
        echo '<div class="bg-top"></div>';
        echo '<div class="featured-text">';
        echo get_sub_field('content');
        // echo '<p class="m-0 nova-thin">Named for ski resorts in the Rocky Mountains, our men’s watches and bracelets feature the same rustic charm with rugged, yet elegant, style. Our sustainably sourced materials mean you can wear nature on your wrist while feeling good about being a steward of the environment.</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-md-12 text-center pt-4 pb-4">';
        $link = get_sub_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
echo '<a class="btn-outline" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '</a>';
// echo '<a href="/pages/watches" class="btn primary mb-5">Shop Now</a>';
endif;
        echo '</div>';
        echo '</div>';
        echo '</div>';
        endwhile;

        // echo '<div class="row">';
        // echo '<div class="col-md-6 p-0 left">';
        // echo '<div class="col-md-12 pt-5 pb-5">';
        // echo '<div class="top">';
        // echo '<div class="bg-top"></div>';
        // echo '<div class="text">';
        // echo '<div class="text-left">';
        // echo '<h5 class="accent text-uppercase nova-bold">From Around the World</h5>';
        // echo '</div>';
        // echo '<div class="text-center">';
        // echo '<h3 class="title nova-thin ls-0">exotic wood</h3>';
        // echo '</div>';
        // echo '<div class="text-right">';
        // echo '<h5 class="accent text-uppercase ls-big nova-bold">durable and long lasting</h5>';
        // echo '</div>';
        // echo '</div>';
        // echo '</div>';
        // echo '</div>';
        // echo '<div class="pt-3 pb-5"></div>';
        // echo '<div class="col-md-11 mt-2 smaller-text text-right">';
        // echo '<div class="bg-top"></div>';
        // echo '<div class="featured-text">';
        // echo '<p class="m-0 nova-thin">Premium exotic raw woods. From dark, luxury woods to pacific coast Redwoods to lighter zebrawoods, we offer an array of high-end, unique materials in all of our products.</p>';
        // echo '</div>';
        // echo '</div>';
        // echo '<div class="col-md-12 text-center pt-4 pb-4">';
        // echo '<a href="/pages/about" class="btn primary mb-5">Learn More</a>';
        // echo '</div>';
        
        // echo '</div>';
        // echo '<div class="col-md-6 p-0">';
        // echo '<img src="//cdn.shopify.com/s/files/1/0280/8004/6214/t/5/assets/Photos-Exotic-Woods.jpg?v=171798210917663730071659978188" alt="" width="100%" height="100%" style="object-fit:cover;">';
        // echo '</div>';
        // echo '</div>';
        echo '</div>';
        echo '</section>';
        endif;

        endwhile; endif;

} elseif($layout == 'Skewed Columns'){

    if(have_rows('skewed_columns')): while(have_rows('skewed_columns')): the_row();
        echo '<section class="position-relative" style="padding:100px 0;">';
        echo '<div class="container-fluid">';
        echo '<div class="row row-content justify-content-between">';


        if(have_rows('left_column')): while(have_rows('left_column')): the_row();
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        endif;

        if( $link ):
        echo '<div class="col-lg-6 pl-0">';
        echo '<a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="d-inline-block w-100 h-100 overflow-h pr-0" style="padding:215px 0;clip-path: polygon(0 0, 100% 15%, 100% 85%, 0% 100%);text-decoration:none;">';
        
        echo '<div class="img-hover h-100 w-100 position-absolute" style="top:0;left:0;">';
        echo wp_get_attachment_image($image,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
        echo '</div>';
        echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background:#a186be;mix-blend-mode:multiply;pointer-events:none;"></div>';

        echo '<span class="position-relative text-white h1 pl-5 d-inline-block" style="pointer-events:none;">' . esc_html( $link_title ) . '</span>';
        echo '</a>';
        echo '</div>';
        endif;

        endwhile; endif;

        if(have_rows('right_column')): while(have_rows('right_column')): the_row();
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        endif;

        if( $link ):
            echo '<div class="col-lg-6 pr-0">';
            echo '<a href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" class="d-inline-block w-100 h-100 overflow-h pl-0" style="padding:215px 0;clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 85%);text-decoration:none;">';
            
            echo '<div class="img-hover h-100 w-100 position-absolute" style="top:0;left:0;">';
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
            echo '</div>';
            echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background:#a186be;mix-blend-mode:multiply;pointer-events:none;"></div>';
            
            echo '<span class="position-relative text-white h1 pl-5 d-inline-block" style="pointer-events:none;">' . esc_html( $link_title ) . '</span>';
            echo '</a>';
            echo '</div>';
        endif;
        endwhile; endif;

        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
} elseif($layout == 'Content'){
    if(have_rows('content')): while(have_rows('content')): the_row();
    echo '<section class="position-relative text-white bg-accent-quaternary" style="padding:100px 0;">';
    echo '<div class="container-fluid">';
    echo '<div class="row justify-content-center">';

    echo '<div class="col-lg-9 text-center">';
    echo get_sub_field('content');
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</section>';
    endwhile; endif;

} elseif($layout == 'Icons'){
    if(have_rows('icons')): while(have_rows('icons')): the_row();
        $bgImg = get_sub_field('background_image');
        $style = get_sub_field('style');
        $classes = get_sub_field('classes');
        $content = get_sub_field('content');
        $img = get_sub_field('image');
        if($bgImg){
            echo '<section class="position-relative content-section text-white ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg,'full') . ');background-size:cover;padding:150px 0;' . $style . '">';
            // echo '</section>';
        } else {
            echo '<section class="position-relative ' . $classes . '" style="padding:150px 0;' . $style . '">';
        }

        echo '<div class="container">';
        echo '<div class="row row-content justify-content-center">';
        echo '<div class="col-lg-9 text-center pb-4">';
            echo $content;
        echo '</div>';

        echo '</div>';

        if(have_rows('icons_inner')):
        echo '<div class="row row-content justify-content-between">';
            while(have_rows('icons_inner')): the_row();
            $icon = get_sub_field('icon');
            echo '<div class="col-lg-4 col-6 text-center mb-5">';
            echo '<div class="border-hover d-flex align-items-center justify-content-center ml-auto mr-auto mb-4" style="border-radius:50%;height:105px;width:105px;border:1px solid var(--accent-quinary);">';
            echo wp_get_attachment_image($icon['id'],'full','',['class'=>'','style'=>'height:70px;width:70px;object-fit:contain;']);
            echo '</div>';
                
                echo '<h3 class="h6 light">' . get_sub_field('title') . '</h3>';
            echo '</div>';
            endwhile;
        echo '</div>';
        endif;


        echo '</div>';

        echo '</section>';
    endwhile; endif;
} elseif($layout == 'Listings'){
    if(have_rows('listings')): while(have_rows('listings')): the_row();
        echo '<section class="position-relative" style="padding:150px 0;">';
        echo '<div class="container">';
        echo '<div class="row row-content justify-content-center">';
        echo '<div class="col-12 text-center pb-4">';
        echo get_sub_field('content');
        echo '</div>';
        echo '</div>';

        $spaces = get_sub_field('spaces');

        if( $spaces ):
            echo '<div class="row">';
            foreach( $spaces as $post ): 
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post);
                echo '<div class="col-lg-4 col-md-6 text-center mb-4">';
                echo '<div class="img-hover overflow-h">';
                    the_post_thumbnail('full',array('class'=>'w-100','style'=>'height:250px;object-fit:cover;'));
                echo '</div>';

                echo '<h3 class="cormorant text-uppercase pt-4">' . get_the_title() . '</h3>';
                echo '<a href="' . get_the_permalink() . '" class="ls-2">LEARN MORE</a>';
                // echo '<hr class="mt-2">';
                echo '</div>';
            endforeach;
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); 
            echo '</div>';
        endif;

        echo '</div>';
        echo '</section>';
    endwhile; endif;
} elseif($layout == 'Testimonials'){
    if(have_rows('testimonials')): while(have_rows('testimonials')): the_row();
    echo '<section class="position-relative bg-accent-quinary" style="padding:150px 0;">';

    echo wp_get_attachment_image(173,'full','',['class'=>'w-100 position-absolute','style'=>'height:80%;top:10%;left:0;mix-blend-mode:multiply;']);
    
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center pb-5">';
    echo wp_get_attachment_image(218,'full','',['class'=>'h-100 z-1 img-quote','style'=>'object-fit:contain;']);

    echo get_sub_field('content');

    echo '</div>';

        if(have_rows('testimonial_repeater')): 
            

            echo '<div class="testimonial-carousel owl-carousel owl-theme arrows-middle">';
            while(have_rows('testimonial_repeater')): the_row();


                echo '<div class="text-center col-lg-6 ml-auto mr-auto">';
                echo '<div class="pb-4 text-white" style="font-size:125%;">';
                echo get_sub_field('content');
                echo '</div>';

                $headshot = get_sub_field('headshot');
                echo wp_get_attachment_image($headshot['id'],'full','',['class'=>'ml-auto mr-auto','style'=>'width:100px;height:100px;object-fit:cover;border-radius:50%;']);

                echo '<span class="d-block h5 cormorant pt-4">' . get_sub_field('name') . '</span>';
                echo '<span class="d-block text-white">' . get_sub_field('title') . '</span>';
                
                echo '</div>';

            
            endwhile;
        endif;
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
} elseif($layout == 'Contact'){
    if(have_rows('contact')): while(have_rows('contact')): the_row();
        echo '<section class="position-relative bg-accent-quinary" style="padding-top:500px;padding-bottom:100px;">';

        $bgImg = get_sub_field('background_image');
        echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100','style'=>'height:80%;top:0;left:0;object-fit:cover;']);

        echo '<div class="container">';
        echo '<div class="row justify-content-center">';
        echo '<div class="col-lg-9 text-center">';
        echo '<div class="position-relative p-5" style="">';
        echo wp_get_attachment_image(173,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;opacity:.71;object-fit:cover;']);

        echo '<div class="position-relative">';
        echo get_sub_field('content');
        echo '</div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
}

endwhile; endif;
?>