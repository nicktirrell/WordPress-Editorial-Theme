<?php
    $title = $block['title'];
    $image = $block['background_image'];
?>

<section class="divider-block">
    <?php if ($title): ?>
        <p class="headline"><?php echo $title ?></p>
    <?php endif; ?>
    <img src="<?php echo $image['url'] ?>" />
    <div class="overlay"></div>
</section>