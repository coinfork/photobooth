<?php

$file = $_GET['file'];
if(empty($file)) throw new Exception('Please specify a valid "i" image GET parameter');
$mode = !empty($_GET['mode']) && $_GET['mode'] == 'uv' ? 'uv' : 'regular';

header('Content-type: image/jpeg');
$image = new Imagick($file);

if($mode == 'uv') {
	$image->separateimagechannel(Imagick::CHANNEL_GREEN);
}

// 0 = aspect ratio is maintained
$image->thumbnailImage(500, 0);

die($image);
