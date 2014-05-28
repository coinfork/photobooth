<?php

$files = scandir('../node-eyefi/pics', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];

header('Content-Type: image/jpeg');
echo(file_get_contents($newest_file));