<?php 
    while ( have_posts() ) : the_post(); 
?> 

    <section class="page-content">
        
        <?php the_content(); ?> 
        
    <section>

<?php
    endwhile; 
    wp_reset_query();
?>