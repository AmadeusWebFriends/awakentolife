<?php
variables([
	//'link-to-section-home' => true,
	'social' => [
		[ 'type' => 'facebook', 'url' => 'https://www.facebook.com/vidyashankarchennai', 'name' => 'Vidya FB' ],
		[ 'type' => 'instagram', 'url' => 'https://www.instagram.com/vidyashankarchennai/', 'name' => 'Vidya IG' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/vidya-shankar-1453ab49/', 'name' => 'Vidya LI' ],
	],
	'footer-variation' => 'single-widget',
	'skip-directory' => true, //TODO: enable when each page has inner content
	'no-page-menu' => true,
	'no-seo-info' => true,
	'no-search' => true,
]);

function site_before_render() {
	runFeature('engage'); //needed for floating button
	variable('htmlReplaces', [
		'Vidya' => '<span class="h5 cursive">Vidya Shankar Chakravarthy</span>',
		'AwakenToLife' => '<span class="h5 cursive">' . variable('name') . '</span>',
	]);

	/*
	if (nodeIs(SITEHOME)) {
		variable('sub-theme', 'parallax');
	}
	*/
}

function enrichThemeVars($vars, $what) {
	if ($what == 'header' && nodeIs(SITEHOME)) {
		$vars['optional-slider'] = returnLines(SITEPATH . '/data/snippets/parallax-slider.html');
	}

	return $vars;
}

function after_footer_assets() {
	if (nodeIs(SITEHOME))
		echo getSnippet('slider-footer');

	//echo getThemeSnippet('floating-button');
}
