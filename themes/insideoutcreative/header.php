<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php 
}
wp_head(); 
?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }
echo '<div class="blank-space"></div>';
echo '<header class="position-relative pt-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">';

echo '<div class="nav">';
echo '<div class="container-fluid">';
echo '<div class="row align-items-center justify-content-end">';


echo '<div class="col-lg">';

echo '</div>';

echo '<div class="col-lg col-md-4 mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'Menu Left',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
    )); 
echo '</div>';

echo '<div class="col-lg col-md-6 col-8">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']); 
}

echo '</a>';
echo '</div>';

echo '<div class="col-lg col-md-4 mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'Menu Right',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
    )); 
echo '</div>';

echo '<div class="col-4 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-accent"></div>';
echo '<div class="line-2 bg-accent"></div>';
echo '<div class="line-3 bg-accent"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div class="col-lg col-md-10 text-right pr-0">';
wp_nav_menu(array(
    'menu' => 'Contact',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-end mb-0 bold font-italic'
    )); 

    echo '<div class="position-relative">';
    echo wp_get_attachment_image(126,'full','',['class'=>'position-absolute w-100 h-100','style'=>'bottom: -2px;
    left: 0;']);

    echo '<div class="position-relative">';
    echo '<a href="tel:+' . get_field('phone','options') . '" class="text-white bold pl-4 pr-4 pt-3 pb-2 d-block">' . get_field('phone','options') . '</a>';
    echo '</div>';

    echo '</div>';

echo '</div>';

echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 pr-0 nav-items bg-white desktop-hidden" id="navItems">';

echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h1 pr-3">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}

echo '</a>';
echo '</div>';

wp_nav_menu(array(
    'menu' => 'Menu Left',
    'menu_class'=>'menu list-unstyled mb-0'
));
wp_nav_menu(array(
    'menu' => 'Menu Right',
    'menu_class'=>'menu list-unstyled mb-0'
));
wp_nav_menu(array(
    'menu' => 'Contact',
    'menu_class'=>'menu list-unstyled mb-0'
));

echo '<div class="position-relative text-right mt-4">';
    echo wp_get_attachment_image(126,'full','',['class'=>'position-absolute w-100 h-100','style'=>'bottom: -2px;
    left: 0;']);

    echo '<div class="position-relative">';
    echo '<a href="tel:+' . get_field('phone','options') . '" class="text-white bold pl-4 pr-4 pt-3 pb-2 d-block">' . get_field('phone','options') . '</a>';
    echo '</div>';

    echo '</div>';

    echo '<div class="pt-5">';
    echo get_field('website_message','options');
    echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

echo '<section class="hero position-relative pt-5 pb-5 text-center s">';

echo wp_get_attachment_image(43,'full','',['class'=>'h-100 position-absolute','style'=>'top:0;left:5%;object-fit:cover;width:90%;']);

$globalPlaceholderImg = get_field('global_placeholder_image','options');

if(is_front_page()){

    echo '<video playsinline autoplay muted loop class="h-auto position-relative z-1" style="width:80.5%;" src="' . home_url() . '/wp-content/themes/insideoutcreative/assets/Suc-n-Up-Yesterdays-Meals-on-Wheels.mp4#t=0.1"></video>';

} else {
    
    if(has_post_thumbnail()){
        the_post_thumbnail('full', array('class' => 'w-100 h-100 position-relative'));
    } else {
        echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 position-relative']);
    }
} // end of is front page

// if(is_page()){
// if(has_post_thumbnail()){
// the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
// } else {
// echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
// }
// } else {
// echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
// }


// if(is_front_page()) {
// echo '<div class="text-white text-center">';
// echo '<div class="position-relative">';
// echo '<div class="multiply overlay position-absolute w-100 h-100 bg-img"></div>';
// echo '<div class="position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-12 text-center">';
echo '<h1 class="p-3 mb-0 d-inline-block bg-accent text-white bold text-uppercase heading-page z-1 position-relative" style="">' . get_the_title() . '</h1>';
echo '</div>';
echo '</div>';
echo '<div class="row justify-content-center pb-5">';

echo '<div class="col-1 pr-0" style="">';
echo '<div class="h-100 bg-accent ml-auto" style="width:2px;"></div>';
echo '</div>';

echo '<div class="col-md-6 col-11">';
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
endif;
echo '</div>';

echo '</div>';
echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }



if(!is_front_page()) {
echo '<div class="container pt-5 pb-5 text-white text-center">';
echo '<div class="row">';
echo '<div class="col-md-12">';
if(is_page() || !is_front_page()){
echo '<h1 class="">' . get_the_title() . '</h1>';
} elseif(is_single()){
echo '<h1 class="">' . single_post_title() . '</h1>';
} elseif(is_author()){
echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
} elseif(is_tag()){
echo '<h1 class="">' . get_single_tag_title() . '</h1>';
} elseif(is_category()){
echo '<h1 class="">' . get_single_cat_title() . '</h1>';
} elseif(is_archive()){
echo '<h1 class="">' . get_archive_title() . '</h1>';
}
elseif(!is_front_page() && is_home()){
echo '<h1 class="">' . get_the_title(133) . '</h1>';
}
echo '</div>';
echo '</div>';
echo '</div>';
}

echo '</section>';
?>