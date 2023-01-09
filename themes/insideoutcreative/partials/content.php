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
}


endwhile; endif;

?>