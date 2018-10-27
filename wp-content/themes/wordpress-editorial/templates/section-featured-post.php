<?php 
    if (have_rows('home_featured_post', 'option')):

        while( have_rows('home_featured_post', 'option') ): the_row();

        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $excerpt = get_sub_field('excerpt');
        $link = get_sub_field('link');
        $image = get_sub_field('image');

         echo '<section id="banner">';

            echo '<div class="content">';

                echo '<header>';

                    echo '<h1>' . $title . '</h1>';

                    echo '<p>' . $subtitle . '</p>';

                echo '</header>';

                echo '<p>' . $excerpt . '</p>';

                echo '<ul class="actions"><li><a href="' . $link . '" class="button big">Read More</a></li></ul>';

            echo '</div>';

            echo '<span class="image object"><img src="' . $image['url'] . '" alt="" /></span>';

        echo '</section>';
                
        endwhile;
    endif;
?>