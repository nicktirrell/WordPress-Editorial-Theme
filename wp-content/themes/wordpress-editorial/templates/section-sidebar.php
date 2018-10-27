<!-- Search -->
<section id="search" class="alt">
    <form method="post" action="?s=" id="searchForm">
        <input type="text" name="query" id="query" placeholder="Search" onchange='document.getElementById("searchForm").setAttribute("action", "/?s=" + $(this).val());' />
    </form>
</section>

<!-- Menu -->
<nav id="menu">
    <header class="major">
        <h2>Menu</h2>
    </header>
    <ul>
        <?php 
        if (have_rows('nav_items', 'option')):

            while( have_rows('nav_items', 'option') ): the_row();

                $parent = get_sub_field('nav_item');
                $children = get_sub_field('has_children');

                if ($children) {

                    echo '<li>';

                        echo '<span class="opener">' . $parent . '</span>';
                        echo '<ul>';

                            while( have_rows('nav_children', 'option') ): the_row();

                                $item = get_sub_field('nav_item');
                                $link = get_sub_field('nav_item_url');
                                echo '<li><a href="' . $link . '">' . $item . '</a></li>';

                            endwhile;

                        echo '</ul>';

                    echo '</li>';

                }

                else {

                    $link = get_sub_field('nav_item_url');
                    echo '<li><a href="' . $link . '">' . $parent . '</a></li>';

                }

            endwhile;

        endif; 
        ?>
    </ul>
</nav>

<!-- Section -->
<?php 
if (have_rows('sidebar_trending', 'option')) :

    while( have_rows('sidebar_trending', 'option') ): the_row();

        echo '<section>';

            echo '<header class="major">';
                echo '<h2>' . get_sub_field('title') . '</h2>';
            echo '</header>';

            echo '<div class="mini-posts">';

            if (have_rows('trending_items', 'option')) {

                while( have_rows('trending_items', 'option') ): the_row();
                    
                    $link = get_sub_field('item_url');
                    $image = get_sub_field('item_image');
                    $excerpt = get_sub_field('item_excerpt');

                    echo '<article>';
                        echo '<a href="' . $link . '" class="image"><img src="' . $image['url'] . '" alt="" /></a>';
                        echo '<p>' . $excerpt . '</p>';
                    echo '</article>';

                endwhile;

            }

            echo '</div>';

        echo '</section>';

    endwhile;

endif;
?>

<!-- Section -->
<?php
if (have_rows('sidebar_contact', 'option')):

    while( have_rows('sidebar_contact', 'option') ): the_row();

        echo '<section>';
            echo '<header class="major">';
                echo '<h2>' . get_sub_field('title') . '</h2>';
            echo '</header>';
            echo '<p>' . get_sub_field('description') . '</p>';
            echo '<ul class="contact">';
                echo '<li class="fa-envelope-o"><a href="mailto:' . get_sub_field('email') . '">' . get_sub_field('email') . '</a></li>';
                echo '<li class="fa-phone">' . get_sub_field('phone') . '</li>';
                echo '<li class="fa-home">' . get_sub_field('address') . '<br />' . get_sub_field('city_state') . '</li>';
            echo '</ul>';
        echo '</section>';

    endwhile;

endif; 
?>

<!-- Footer -->
<?php include(locate_template('templates/section-footer.php')); ?>