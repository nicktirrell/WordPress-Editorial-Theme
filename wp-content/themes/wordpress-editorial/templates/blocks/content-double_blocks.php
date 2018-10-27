<?php
    $first_title = $block['first_block_title'];
    $fitst_description = $block['first_block_description'];
    $first_image = $block['first_block_image'];
    $second_title = $block['second_block_title'];
    $second_description = $block['second_block_description'];
    $second_image = $block['second_block_image'];
?>

<section class="intro-blocks">
    <div class="block animated none">
        <div class="text">
            <div class="flex-group">
                <p class="subhead"><?php echo $first_title ?></p>
                <p class="description"><?php echo $fitst_description ?></p>
            </div>
        </div>
        <div class="image">
            <img src="<?php echo $first_image["url"] ?>" />
            <div class="overlay"></div>
        </div>
    </div>
    <div class="block animated none">
        <div class="text">
            <div class="flex-group">
                <p class="subhead"><?php echo $second_title ?></p>
                <p class="description"><?php echo $second_description ?></p>
            </div>
        </div>
        <div class="image">
            <img src="<?php echo $second_image["url"] ?>" />
            <div class="overlay"></div>
        </div>
    </div>
</section>