<?php

$args = array(
  'numberposts' => 10
);
 
$latest_posts = get_posts( $args );

?>

<section>

    <header class="major">
        <h2>Latest Posts</h2>
    </header>

    <div class="posts">

        <?php foreach($latest_posts as $post): ?>
            <?php $auth_id = get_post_field('post_author', get_the_ID()); ?>
            <?php $image = get_field('image'); ?>
            <?php $categories = get_the_category(); ?>
            <article>
                <a href="<?php echo the_permalink(); ?>" class="image">
                    <?php if($categories[0]->name != 'Uncategorized'): ?>
                        <p class="category"><?php echo esc_html( $categories[0]->name ) ?></p>
                    <?php endif; ?>

                    <img src="<?php echo $image['url'] ?>" alt="" />
                    <p class="author"><?php echo get_the_author_meta('display_name', $auth_id) ?></p>
                </a>
                <h3>
                    <?php echo get_the_title(); ?>
                </h3>
                <p><?php echo get_the_excerpt(); ?></p>
                <ul class="actions">
                    <li><a href="<?php echo the_permalink(); ?>" class="button">More</a></li>
                </ul>
            </article>
        <?php endforeach; ?>

    </div>

</section>