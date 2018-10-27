<?php
    $menu_title = $block['menu_title']
?>

<section class="menu">
    <div class="menu-headline-container">
        <p class="headline menu-headline"><?php echo $menu_title ?></p>
        <div class="menu-filter">
            <div class="flex-group">
                <div class="icons">
                    <span class="icon-options"></span>
                    <span class="icon-gluten option" data-value="gluten"></span>
                    <span class="icon-vegan option" data-value="vegan"></span>
                    <span class="icon-gluten option" data-value="gluten"></span>
                    <span class="icon-vegan option" data-value="vegan"></span>
                    <span class="icon-gluten option" data-value="gluten"></span>
                    <span class="icon-vegan option" data-value="vegan"></span>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'templates/menu', 'home'); ?>
</section>