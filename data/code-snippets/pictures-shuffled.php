<?php
$prefix = 'vidya-shankar-awakentolife-photo-';
$show = getShuffledItems(range(1, 31), 5);

$result = '<div class="masonry-thumbs grid-container row row-cols-6" data-big="3" data-lightbox="gallery">' . NEWLINE;

$template = '<a class="grid-item" href="%cdn%photos/%prefix%%sno%.jpg" data-lightbox="gallery-item">
	<img src="%cdn%photos/thumbnails/%prefix%%sno%.jpg" alt="photo %sno%"></a>' . NEWLINE;

$vars = [
	'cdn' => getHtmlVariable('cdn'),
	'prefix' => $prefix,
];

foreach ($show as $sno) {
	$vars['sno'] = str_pad($sno, 2, '0', STR_PAD_LEFT);
	$result .= replaceItems($template, $vars, '%');
}

$result .= '</div>' . NEWLINES2;

return $result;
