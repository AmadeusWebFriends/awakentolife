<?php
$items = [
	['image-name' => '../vidya-dias.png', 'slug' => ''],
	['image-name' => 'vidya-business-acceleration.jpg', 'slug' => 'business-acceleration'],
	['image-name' => 'vidya-environment.png', 'slug' => 'environmental-stewardship'],
	['image-name' => 'vidya-montessori-trainer.jpg', 'slug' => 'montessori-education'],
	['image-name' => 'vidya-sanitary-hygiene.jpg', 'slug' => 'feminine-care'],
	['image-name' => 'vidya-posh.jpg', 'slug' => 'posh'],
];

$start = sprintf('	<div class="col-md-%s mt-sm-2 pt-xs-3"><hr class="d-sm-none">', '2') . NEWLINE;
$tpl = replaceHtml('		<a href="%item-link%"><h3>%heading%</h3><img class="img-fluid" src="%cdn%%image-name%" /></a>');

$op = '<div class="row">' . NEWLINES2;

foreach ($items as $ix => $item) {
	if ($ix == 0 && nodeIs(SITEHOME)) continue;
	$op .= $start;
	$item['heading'] = replaceHtml(humanize($item['slug'] == '' ? '%AwakenToLife%' : $item['slug']));
	$item['item-link'] = pageUrl($item['slug']);
	$op .= replaceItems($tpl, $item, '%');
	$op .= '	</div>' . NEWLINES2; //row ends
}

$op .= '</div>'; //row ends

return $op;
