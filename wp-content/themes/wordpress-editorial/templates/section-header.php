<header id="header">
    <a href="/" class="logo"><img src="<?php echo get_site_url(); ?>/wp-content/themes/wordpress-editorial/assets/dist/images/placeholder-logo.png" /></a>
    <?php if(have_rows('social_links', 'option')): ?>
        <ul class="icons">
            <div>
                <?php while( have_rows('social_links', 'option') ) : the_row(); ?>
                    <?php 
                        $icon = get_sub_field('platform');
                        $link = get_sub_field('link');
                    ?>
                    <li><a href="<?php echo $link ?>" class="icon fa-<?php echo $icon ?>"><span class="label"><?php echo $icon ?></span></a></li>
                <?php endwhile; ?>
            </div>
        </ul>
    <?php endif; ?>
</header>