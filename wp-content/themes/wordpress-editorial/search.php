<?php
/*
Template Name: Search Page
*/
?>

<!DOCTYPE HTML>
<html>
	<head>
        <?php get_template_part( 'templates/dom', 'head'); ?>
	</head>
	<body class="<?php if ( is_user_logged_in() ) { echo 'logged-in'; } ?>" >  

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

                            <?php include(locate_template('templates/section-header.php')); ?>

                            <section>

                                <?php if ( have_posts() && !empty(get_search_query())) : ?>

                                    <header class="major">
                                        <h2><?php printf( esc_html__( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h2>
                                    </header>

                                    <div class="posts">

                                        <?php while ( have_posts() ) : the_post(); ?>

                                            <?php $image = get_field('image'); ?>
                                            <article>
                                                <?php if($image): ?>
                                                    <a href="<?php the_permalink(); ?>" class="image"><img src="<?php echo $image['url'] ?>" alt="" /></a>
                                                <?php endif; ?>
                                                <h3>
                                                    <?php the_title(); ?>
                                                </h3>
                                                <p><?php the_excerpt(); ?></p>
                                                <ul class="actions">
                                                    <li><a href="<?php the_permalink(); ?>" class="button">More</a></li>
                                                </ul>
                                            </article>

                                        <?php endwhile; ?>

                                    </div>

                                <?php else: ?>

                                    <header class="major">
                                        <h2><?php printf( esc_html__( 'Nothing found for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h2>
                                    </header>

                                <?php endif; ?>

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