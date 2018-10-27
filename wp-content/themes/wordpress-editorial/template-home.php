<?php

    /* 
    Template Name: Home 
    */

?>

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

						<?php include(locate_template('templates/section-featured-post.php')); ?>

						<?php include(locate_template('templates/section-posts.php')); ?>

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