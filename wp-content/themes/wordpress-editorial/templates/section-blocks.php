<?php

$blocks = get_field('blocks');

if($blocks):

	foreach($blocks as $block) :

		$layout = $block['acf_fc_layout'];
		$template_path = 'templates/blocks/content-' . $layout . '.php';

		// if template with block name exists... include it.
		if(locate_template($template_path)) :

			include(locate_template($template_path));

		endif;

	endforeach;

endif;

?>