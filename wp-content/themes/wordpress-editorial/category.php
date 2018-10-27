<!DOCTYPE HTML>
<html>
	<head>
        <?php get_template_part( 'templates/dom', 'head'); ?>
	</head>
	<body class="<?php if ( is_user_logged_in() ) { echo 'logged-in'; } ?>">  

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

                            <?php include(locate_template('templates/section-header.php')); ?>

                            <?php

                            $args = array(
                                'numberposts' => 10,
                                'category' => 'single_cat_title();'
                            );
                            
                            $latest_posts = get_posts( $args );

                            ?>

                            <?php foreach($latest_posts as $post): ?>
                                <?php $image = get_field('image'); ?>
                                <?php if ($post === reset($latest_posts)): ?>
                                    <section id="banner">
                                        <div class="content">
                                            <header>
                                                <h1><?php echo get_the_title(); ?></h1>
                                            </header>
                                            <p><?php echo get_the_excerpt(); ?></p>
                                            <ul class="actions">
                                                <li><a href="<?php echo the_permalink(); ?>" class="button big">More</a></li>
                                            </ul>
                                        </div>
                                        <span class="image object">
                                            <img src="<?php echo $image['url'] ?>" alt="" />
                                        </span>
                                    </section>
                            <section>
                            <header class="major">
                                <h2>Latest posts tagged <?php echo single_cat_title(); ?></h2>
                            </header>
                            <div class="posts">
                                <?php else: ?>
                                    <article>
                                        <a href="<?php echo the_permalink(); ?>" class="image"><img src="<?php echo $image['url'] ?>" alt="" /></a>
                                        <h3>
                                            <?php echo get_the_title(); ?>
                                        </h3>
                                        <p><?php echo get_the_excerpt(); ?></p>
                                        <ul class="actions">
                                            <li><a href="<?php echo the_permalink(); ?>" class="button">More</a></li>
                                        </ul>
                                    </article>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </div>
                            </section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

                            <?php include(locate_template('templates/section-sidebar.php')); ?>
                            
						</div>
					</div>

			</div>
	</body>
</html>