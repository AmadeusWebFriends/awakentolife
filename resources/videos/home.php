<?php
contentBox('deck', 'm-3');
h2('Tenets of Parenting');
echo getCodeSnippet('video-and-deck');
contentBox('end');

contentBox('links', 'container');
h2('Vidya Shankar');
echo returnLine('

* [On quality of life](https://www.sarallearningcentre.com/post/quality-of-life)
* [In the media](https://drive.google.com/drive/folders/1F_j7Xjc6vSnC0e7KriUz53fvR-04dfSO?usp=drive_link)
* [Photos past](https://drive.google.com/drive/folders/1uPame3ZcQpaHWGHnxWeMoYAIz3FVTCM2?usp=drive_link)
');

contentBox('end');

runFeature('social');
renderPulse(false);
