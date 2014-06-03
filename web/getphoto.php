<?php

$files = scandir('pics', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];

foreach($files as $file) {

	if(stripos($file, '.jpg') == strlen($file)-4) {
		$newest_file = $file;
	}
}

die(json_encode(array(
	'uv' => $newest_file
)));