<?php
$show = getShuffledItems([
	'four.jpg',
	'one.jpg',
	'three.jpg',
	'two.jpg',
], 2);

$start = '<div class="col-md-6 col-xs-12">'; $end = '</div>';
return $start . implode($end . NEWLINES2 . $start, array_map(
	function($itm) { return '<img src="%cdn%shuffled/'
		. $itm . '" class="img-fluid" />'; }, $show
	)
);
