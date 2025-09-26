<?php
return replaceItems(returnLines('<!--no-processing-->
DIV-ROW
	DIV-CELL6
		[youtube]tXKVB2OjSZM[/youtube]
	DIV-CLOSE
	DIV-CELL6
		DIV-CONTAINER[this-slide]DIV-CLOSE
	DIV-CLOSE
DIV-CLOSE
'), [
	'[this-slide]' => '<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQZea4VTg_6ud4x5vvye5NCpGxS7Uhzx566cIxaAVut0pEg4mh0WNhdqmelIzJzpg/pubembed?start=true&loop=true&delayms=10000" frameborder="0" width="560" height="315" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>'
]);
