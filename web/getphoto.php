<?php

$files = scandir('pics', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];
$cut = array();

foreach($files as $file)
{
	if(stripos($file, '.jpg') == strlen($file)-4) {
		$cut[] = $file;
	}

    if(count($cut >= 8)) {
        break;
    }
}

die(json_encode(array(
	'uv' => $cut
)));