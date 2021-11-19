<?php
add_action('widgets_init', function () {
	register_sidebar([
		'name' => 'Avant la zone de contenu principal',
		'id' => 'before-main-sidebar',
		'description' => 'La zone qui apparait avant le contenu principal',
	]);
});
