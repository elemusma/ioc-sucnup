<?php

if(have_rows('builder')): while(have_rows('builder')): the_row();
$layout = get_sub_field('layout');

if($layout == 'List'){
    if(have_rows('list_group')): while(have_rows('list_group')): the_row();

    echo '<section class="bg-gray pt-5 pb-5 ' . get_sub_field('class') . '" style="' . get_sub_field('style') . '">';
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-12">';
                if(have_rows('list')): 
                    echo '<ul class="d-flex flex-wrap align-items-center justify-content-center text-white list-unstyled h4">';
                    $listCounter=0;
                    while(have_rows('list')): the_row();
                    $listCounter++;
                    if($listCounter == 1){
                        echo '<li class="">' . get_sub_field('list_item') . '</li>';
                    } else {
                        echo '<span class="ml-2 mr-2">•</span><li class="">' . get_sub_field('list_item') . '</li>';
                    }
                    endwhile; 
                    echo '</ul>';
                endif;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</section>';

    endwhile; endif;

} elseif ($layout == 'Content'){
    if(have_rows('content_group')): while(have_rows('content_group')): the_row();
    echo '<section class="pt-5 pb-5 ' . get_sub_field('class') . '" style="' . get_sub_field('style') . '">';
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-12 text-center">';
                    echo get_sub_field('content');
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</section>';
    endwhile; endif;
} elseif($layout == 'Image + Content'){
    if(have_rows('image_content')): while(have_rows('image_content')): the_row();
    $bgImg = get_sub_field('background_image');
    $mainImg = get_sub_field('main_image');
    $contentSide = get_sub_field('content_side');
    $link = get_sub_field('link');

    echo '<section class="pt-5 pb-5 position-relative ' . get_sub_field('class') . '" style="' . get_sub_field('style') . '">';
    echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;height:85%;']);
    echo '<div class="position-absolute w-100 h-100" style="background: rgb(255,255,255);
    background: linear-gradient(90deg, rgba(255,255,255,1) 40%, rgba(255,255,255,0.1) 100%);top:0;left:0;"></div>';

    echo '<div class="container">';
    // if($contentSide == 'Right'){
        // echo '<div class="row align-items-center justify-content-end">';
        // echo '</div>';
    // } else {
        echo '<div class="row align-items-center">';

    // }
            echo '<div class="col-12">';
if($contentSide == 'Right'){
    echo '<div class="text-right">';
}
                echo '<h6>' . get_sub_field('pretitle') . '</h6>';
                if($contentSide == 'Right'){
                    echo '<div class="divider mr-0"></div>';
                } else {
                    echo '<div class="divider ml-0"></div>';
                }
                echo '<h2>' . get_sub_field('title') . '</h2>';
                if($contentSide == 'Right'){
                    echo '<div class="col-lg-10 pl-0 pb-4 ml-auto" style="font-size:120%;">';
                    // echo '</div>';
                } else {
                    echo '<div class="col-lg-10 pl-0 pb-4" style="font-size:120%;">';
                }
                echo get_sub_field('content');
                echo '</div>';

                if($contentSide == 'Right'){
                    echo '</div>';
                }
            echo '</div>';

            

        echo '</div>';

        if($contentSide == 'Right'){
            echo '<div class="row flex-row-reverse">';
            // echo '</div>';
        } else {
            echo '<div class="row">';

        }

        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            echo '<div class="col-lg-3 col-md-5">';
            echo '<a class="btn-main w-100 text-center" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" style="transform:translate(0px, 20px);">' . esc_html( $link_title ) . '</a>';

            echo '</div>';
        endif;

        echo '<div class="col-md-7">';
        echo '<div class="position-relative" style="border:4px solid white;border-radius:4px;box-shadow:0px 2px 5px rgba(0,0,0,.5);background:#ebebeb;">';
        echo wp_get_attachment_image($mainImg['id'],'full','',['class'=>'w-100 h-100','style'=>'']);
        echo '</div>';
        echo '</div>';

        echo '</div>';

    echo '</div>';
echo '</section>';
    endwhile; endif;
} elseif($layout == 'Big Image'){
    if(have_rows('big_image')): while(have_rows('big_image')): the_row();
        echo '<section class="pt-5 pb-5 position-relative ' . get_sub_field('class') . '" style="' . get_sub_field('style') . '">';
        $image = get_sub_field('image');

        echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-auto','style'=>'']);
        echo '</section>';
    endwhile; endif;
} elseif($layout == 'Services'){
    if(have_rows('services_group')): while(have_rows('services_group')): the_row();
    echo '<section class="position-relative ' . get_sub_field('class') . '" style="padding:100px 0px;' . get_sub_field('style') . '">';

    $bgImg = get_sub_field('background_image');
    if($bgImg){
        echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);
    }

    echo '<div class="position-absolute w-100 h-100" style="background: rgb(255,255,255);
    background: radial-gradient(circle, rgba(255,255,255,0.5) 30%, rgba(255,255,255,1) 100%);top:0;left:0;"></div>';
    echo '<div class="position-absolute w-100 h-100" style="background:#ff0000;mix-blend-mode:multiply;top:0;left:0;"></div>';
    echo '<div class="position-absolute w-100 h-100" style="background:#900004;top:0;left:0;mix-blend-mode:multiply;"></div>';
    echo '<div class="position-absolute" style="width:90%;height:90%;top:5%;left:5%;background:#0f2849;mix-blend-mode:screen;opacity:.62;"></div>';

    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center text-white pb-5">';

    echo get_sub_field('content');

    echo '</div>';
    echo '</div>';

    $pages = get_sub_field('pages');

    if( $pages ):
        echo '<div class="row justify-content-center">';
        $pagesCounter=0;
        foreach( $pages as $post ): 
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post);
        $pagesCounter++;
        echo '<a href="' . get_the_permalink() . '" class="col-lg-4 col-md-6 text-white mb-5 col-services" style="text-decoration:none;">';
        echo '<div class="position-relative pt-3 pl-5 pr-5 h-100">';

        echo '<div class="hover-box bg-accent position-absolute w-100 h-100 z-1 d-flex align-items-center justify-content-center" style="border:3px solid white;top:0;left:0;transition:all .25s ease-in-out;">';
        echo '<h6 class="bold">' . get_the_title() . '</h6>';
        echo '</div>';

        echo '<div class="position-absolute w-100 h-100" style="background:#182236;top:0;left:0;mix-blend-mode:multiply;opacity:.72;"></div>';

        echo '<div class="position-relative pb-3 h-100">';
        echo '<span class="h1 blair-light mb-5 d-block" style="font-size:50px;">' . sprintf("%02d", $pagesCounter) . '</span>';
        echo '<div class="d-flex align-items-center">';
        echo '<div style="height: 35px;
        width: 35px;
        border: 1px solid #3373f1;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 15px;">';
        echo '<span class="plus-sign">&plus;</span>';
        echo '</div>';
        echo '<div>';
        echo '<h6>' . get_the_title() . '</h6>';
        echo '</div>';
        echo '</div>';
        echo '<div class="position-absolute" style="border-bottom:2px solid var(--accent-primary);width:50px;bottom:0;left:0;"></div>';
        echo '</div>';

        echo '</div>';
        echo '</a>';
        endforeach;
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); 
            echo '</div>';
        endif;
    

    echo '</div>';
    
    echo '</section>';
    endwhile; endif;
} elseif ($layout == 'Process'){
    if(have_rows('process_group')): while(have_rows('process_group')): the_row();

    echo '<section class="pt-5 pb-5 position-relative bg-accent-secondary ' . get_sub_field('class') . '" style="' . get_sub_field('style') . '">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-12 text-center text-white pb-5">';
    echo get_sub_field('content');
    echo '</div>';
    echo '</div>';

    if(have_rows('process_steps')):
    echo '<div class="row">';
    while(have_rows('process_steps')): the_row();

    echo '<div class="col-lg-3 col-md-6">';
    echo '<div class="position-relative">';
    $image = get_sub_field('image');
    echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100','style'=>'height:300px;object-fit:cover;']);
    echo '<div class="bg-accent text-white text-center p-4">';
    echo '<h6>' . get_sub_field('title') . '</h6>';
    echo '</div>';
    echo '</div>';

    echo '</div>';

    endwhile;
    echo '</div>';
    endif;

    echo '</div>';
    echo '</section>';

    endwhile; endif;
} elseif($layout == 'Testimonials') {
    if(have_rows('testimonials_group')): while(have_rows('testimonials_group')): the_row();
    echo '<section class="pt-5 pb-5 position-relative ' . get_sub_field('class') . '" style="background:#363636;border-top:8px solid var(--accent-primary);border-bottom:8px solid var(--accent-primary);' . get_sub_field('style') . '">';
    echo '<div class="container">';

    echo '<div class="row">';
    echo '<div class="col-12 text-center text-white pb-5">';

    echo get_sub_field('content');

    echo '</div>';
    echo '</div>';


    if(have_rows('testimonials')):
    echo '<div class="testimonial-carousel owl-carousel owl-theme arrows-middle">';
    while(have_rows('testimonials')): the_row();
    echo '<div class="position-relative pl-5" style="color:#acacac;">';

    echo '<div class="position-absolute" style="top:0;left:0;">';
    echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/11/Quotes.png" alt="" width="25px" height="25px">';
    echo '</div>';

    echo get_sub_field('content');
    echo '<div class="pl-5">';
    echo '<span class="bold" style="color:#cccccc;">' . get_sub_field('name') . '</span><br>';
    echo '<span class="">' . get_sub_field('job_title') . '</span>';
    echo '</div>';
    echo '</div>';

    endwhile;
    echo '</div>';
    endif;


    echo '</div>';
    echo '</section>';
    endwhile; endif;
} elseif($layout == 'Gallery + Content'){
    if(have_rows('gallery_content')): while(have_rows('gallery_content')): the_row();
echo '<section class="pt-5 pb-5 position-relative texture-bg bg-accent-secondary gallery-content">';
echo '<div class="background-image"></div>';
echo '<div class="container pt-5 mb-5">';
echo '<div class="row pb-5 mb-5 justify-content-around">';
echo '<div class="col-lg-5 img--main">';
echo '<div class="h-100">';

$gallery = get_sub_field('gallery');
if( $gallery ): 
    echo '<div class="gallery-content-carousel owl-carousel owl-theme arrows-middle">';
    foreach( $gallery as $image ):
        echo '<div class="overflow-h">';
        // echo '<div class="position-relative">';
        echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" data-title="' . $image['title'] . '">';
        echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-100 img-portfolio'] );
        echo '</a>';
        // echo '</div>';
        echo '</div>';
    endforeach; 
    echo '</div>';
endif;

echo '</div>';
echo '</div>';
echo '<div class="col-lg-6 pt-lg-0 pt-5 sm-text-center about"> ';
echo '<div class="about-first-half">';
echo '<div class="about-before"></div>';
echo '<div class="about-middle"></div>';
echo '</div>';
echo '<div class="about-after"></div>';
echo '<div class="about-details pt-5 pl-4 pr-4">';
// echo '<div class="page details">';

// echo '<h1>' . get_the_title() . '</h1>';


// echo '</div>';

the_sub_field('content');

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

endwhile; endif;
}


endwhile; endif;

?>