<!DOCTYPE HTML>
<html>
	<head>
        <?php get_template_part( 'templates/dom', 'head'); ?>
	</head>
	<body class="<?php if ( is_user_logged_in() ) { echo 'logged-in'; } ?>">  
    <div id="wrapper">
        <div id="main">
			<div class="inner">

                <?php include(locate_template('templates/section-header.php')); ?>

                <section>

                    <?php $image = get_field('image'); ?>
                    
                    <header class="main">
                        <h1><?php echo get_the_title(); ?></h1>
                    </header>

                    <span class="image main"><img src="<?php echo $image['url']; ?>" alt="" /></span>

                    <?php include(locate_template('templates/section-page-content.php')); ?>

                    <?php include(locate_template('templates/section-blocks.php')); ?>

                </section>

            </div>
        </div>
        <div id="sidebar">
            <div class="inner">

                <?php include(locate_template('templates/section-sidebar.php')); ?>
                
            </div>
        </div>
    </div>

	</body>
</html>