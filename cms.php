<?php
variables([
	'link-to-section-home' => true,
	'social' => [
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/vidya-shankar-1453ab49/', 'name' => 'Vidya' ],
	],
	//'footer-variation' => 'no-widget',
]);

function site_before_render() {
	runFeature('engage'); //needed for floating button
	variable('htmlReplaces', [
		'Vidya' => '<span class="h5 cursive">Vidya Shankar Chakravarthy</span>',
		'AwakenToLife' => '<span class="h5 cursive">' . variable('name') . '</span>',
	]);
}
