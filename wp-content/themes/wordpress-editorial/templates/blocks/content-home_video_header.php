<?php
$video_url = $block['video_url'];
$logo_url = $block['logo_image'];
$scroll_image = $block['scroll_image'];
?>

<section class="header">
    <?php get_template_part( 'templates/page', 'nav'); ?>
    <video muted="" autoplay="" loop="" playsinline="">
        <source src="<?php echo $video_url ?>" type="video/mp4">
    </video>
    <div class="intro">
        <img src="<?php echo $logo_url["url"] ?>" />
    </div>
    <img class="mouse-icon animated" src="<?php echo $scroll_image["url"] ?>" />
    <div class="overlay"></div>
</section>