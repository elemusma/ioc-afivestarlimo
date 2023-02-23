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
        // echo '</div>';
        } else {
            echo '<div class="col-md-6 p-0 left">';
        }
        echo '<div class="col-md-12 pt-5 pb-5">';
        echo '<div class="top">';


        if($imageSide == 'Left'){
        echo '<div class="bg-top" style="clip-path: polygon(10% 0%, 100% 0, 100% 100%, 0% 100%);
        pointer-events:none;"></div>';
        } else {
        echo '<div class="bg-top" style="clip-path: polygon(0% 0%, 90% 0%, 100% 100%, 0% 100%);
        pointer-events:none;"></div>';
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
        echo '<div class="col-md-11 ml-auto mt-2 smaller-text col-left">';
        } else {
            echo '<div class="col-md-11 mt-2 smaller-text">';
            // echo '</div>';
        }
        echo '<div class="bg-top"></div>';
        echo '<div class="featured-text">';

        echo get_sub_field('content');
        
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

if($imageSide == 'Left'){
    echo '<div class="text-md-left">';
    // echo '</div>';
} else {
    echo '<div class="text-md-right">';
}
$imgSmall = get_sub_field('image_small');

if($imgSmall){
    echo wp_get_attachment_image($imgSmall['id'],'full','',[
        'class'=>'w-100 h-auto',
        'style'=>'max-width:300px;'
    ]);
}
echo '</div>';

        
        echo '</div>';
        echo '</div>';
        endwhile;

        
        echo '</div>';
        echo '</section>';
        endif;

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
} elseif($layout == 'Gallery'){

    if(have_rows('gallery_group')): while(have_rows('gallery_group')): the_row();
    echo '<section class="position-relative ' . get_sub_field('classes') . '" style="padding-top:150px;padding-bottom:150px;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';
    
        $bgImg = get_sub_field('background_image');
    
        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute',
                'style'=>'top:0;left:0;object-fit:cover;'
            ]);
        }

        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-12 text-center pb-5">';
                echo get_sub_field('content');
                echo '</div>';
            echo '</div>';

            $gallery = get_sub_field('gallery');
            if( $gallery ): 
                echo '<div class="row align-items-center">';
                foreach( $gallery as $image ):
                    echo '<div class="col-lg-3 col-md-4 col-6 mt-3 mb-3 overflow-h">';
                    // echo '<div class="position-relative">';
                    // echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" data-title="' . $image['title'] . '">';
                    echo wp_get_attachment_image($image['id'], 'full','',[
                        'class'=>'w-100 h-100 img-gallery',
                        'style'=>'mix-blend-mode:darken;object-fit:contain;',
                    ] );
                    // echo '</a>';
                    // echo '</div>';
                    echo '</div>';
                endforeach; 
                echo '</div>';
            endif;

        echo '</div>';

    echo '</section>';

    endwhile; endif;

} elseif($layout == 'Carousel'){
    if(have_rows('carousel_group')): while(have_rows('carousel_group')): the_row();
    echo '<section class="position-relative bg-accent-quinary ' . get_sub_field('classes') . '" style="padding-top:100px;padding-bottom:100px;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

    echo wp_get_attachment_image(69,'full','',[
        'class'=>'w-100 h-100 position-absolute',
        'style'=>'top:0;left:0;object-fit:cover;'
    ]);
    
        $bgImg = get_sub_field('background_image');
    
        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute',
                'style'=>'top:0;left:0;object-fit:cover;'
            ]);
        }

        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-12 text-center text-white pb-5">';
                echo get_sub_field('content');
                echo '</div>';
            echo '</div>';
            echo '</div>';

            $gallery = get_sub_field('gallery');
            if( $gallery ): 
                // echo '<div class="gallery-carousel-group">';
                echo '<div class="carousel owl-carousel owl-theme arrows-middle">';
                foreach( $gallery as $image ):
                    echo '<div class="overflow-h">';
                    echo '<div class="img-hover overflow-h">';
                    echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" data-title="' . $image['title'] . '">';
                    echo wp_get_attachment_image($image['id'], 'full','',[
                        'class'=>'w-100',
                        'style'=>'height:300px;object-fit:cover;',
                        ] );
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    endforeach; 
                    echo '</div>';
                    // echo '</div>';
            endif;
            

    echo '</section>';
    endwhile; endif;

} elseif($layout == 'Big Image'){
    if(have_rows('big_image_group')): while(have_rows('big_image_group')): the_row();
    echo '<section class="position-relative bg-accent-quinary ' . get_sub_field('classes') . '" style="' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';
    
        $bgImg = get_sub_field('background_image');
    
        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute',
                'style'=>'top:0;left:0;object-fit:cover;'
            ]);
        }

        $image = get_sub_field('big_image');
        echo wp_get_attachment_image($image['id'],'full','',[
            'class'=>'w-100 h-auto',
            'style'=>''
        ]);

        echo '</section>';
    endwhile; endif;

} elseif($layout == 'Testimonials'){
    if(have_rows('testimonials')): while(have_rows('testimonials')): the_row();
    // echo '<section class="position-relative bg-accent-quinary" style="padding:150px 0;">';
    // echo '</section>';

    echo '<section class="position-relative bg-accent-quinary testimonials-section ' . get_sub_field('classes') . '" style="padding-top:150px;padding-bottom:150px;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

        // echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Old-Paper-Background.jpg" class="w-100 h-100 position-absolute" style="top:0;left:0;object-fit:cover;" alt="">';
        echo wp_get_attachment_image(173,'full','',['class'=>'w-100 position-absolute','style'=>'height:80%;top:10%;left:0;mix-blend-mode:multiply;']);

        echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Confetti-Bg.png" height="100%" width="100%" class="position-absolute" style="top:0;left:0;" alt="">';
    
        $bgImg = get_sub_field('background_image');
    
        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute',
                'style'=>'top:0;left:0;object-fit:cover;'
            ]);
        }

    
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
                if($headshot){
                    echo wp_get_attachment_image($headshot['id'],'full','',['class'=>'ml-auto mr-auto','style'=>'width:100px;height:100px;object-fit:cover;border-radius:50%;']);
                }

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
        // echo '<section class="position-relative bg-accent-quinary" style="padding-top:500px;padding-bottom:100px;">';
        // echo '</section>';

        echo '<section class="position-relative bg-accent-quinary contact-section ' . get_sub_field('classes') . '" style="padding-top:500px;padding-bottom:50px;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

        // echo '<img src="https://insideoutcreative.io/wp-content/uploads/2023/02/Old-Paper-Background.jpg" class="w-100 h-100 position-absolute" style="top:0;left:0;object-fit:cover;" alt="">';
    
        $bgImg = get_sub_field('background_image');
    
        if($bgImg){
            echo wp_get_attachment_image($bgImg['id'],'full','',[
                'class'=>'w-100 h-100 position-absolute',
                'style'=>'top:0;left:0;object-fit:cover;'
            ]);
        }

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
} elseif($layout == 'About'){
if(have_rows('about_group')): while(have_rows('about_group')): the_row();

// <section class="pt-5 pb-5 position-relative about-details bg-shape">
// echo '</section>';

echo '<section class="pt-5 pb-5 position-relative about-details bg-shape ' . get_sub_field('classes') . '" style="padding-top:500px;padding-bottom:50px;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

$bgImg = get_sub_field('background_image');

if($bgImg){
    echo wp_get_attachment_image($bgImg['id'],'full','',[
        'class'=>'w-100 h-100 position-absolute',
        'style'=>'top:0;left:0;object-fit:cover;'
    ]);
}

echo '<div class="container pt-5 pb-5">';
echo '<div class="row justify-content-center offset-xl-3 pt-5 pb-5">';
echo '<div class="col-md-9">';
echo '<div class="inner-content position-relative">';
echo '<div class="inner-content-after"></div>';




$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$sinceText = get_sub_field('since_text');
$content = get_sub_field('content');

echo '<div class="inner-content-middle position-relative">';
echo '<div class="row justify-content-end">';
echo '<div class="col-md-8">';
echo '<div class="titles mb-5">';
echo '<div class="h3 position-relative">';
echo '<div class="row align-items-baseline">';
echo '<div class="col-6">';
echo '<div class="big-titles">';
echo '<span class="about-text cormorant text-uppercase text-white">' . $title . '</span>';
echo '<span class="us-text text-uppercase cormorant">' . $subtitle . '</span>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-6 text-right">';
echo '<span class="since ls-3">' . $sinceText . '</span></div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="paragraph-text" style="color:#e1e1e1;">';
echo $content;
echo '</div>';
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