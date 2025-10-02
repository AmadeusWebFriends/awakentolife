<?php
$sheet = getSheet(__DIR__ . '/data/' . getPageParameterAt(1) . '.tsv', 'folder');

$baseUrl = replaceHtml($sheet->values['baseMediaUrl']);
$omit = replaceHtml($sheet->values['prefixToOmit']);

sectionId('audio-w', 'container content-box');

$md = [];
foreach ($sheet->group as $group => $items) {
	cbCloseAndOpen('container mt-5');
	$md[] = SPACERSTART . $sheet->values[$group . '_FolderName'] . SPACEREND;
	cbCloseAndOpen('container mt-5');
	foreach ($items as $item) {
		$item = $sheet->asObject($item);
		$name = humanize(replaceItems($item['fileName'], [$omit => '', '.mp3' => '']));
		$md[] = '<h2>' . $name . '</h2>';
		$md[] = '';
		$md[] = '[audio]' . $baseUrl . $item['fileName'] . '[/audio]';
		$md[] = '';
		$md[] = cbCloseAndOpen('container');
	}
	cbCloseAndOpen('container mt-5');
}

renderMarkdown(implode(NEWLINE, $md));

section('end');
