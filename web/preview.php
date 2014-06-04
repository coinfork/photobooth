<?php

$file = $_GET['file'];
if(empty($file)) throw new Exception('Please specify a valid "i" image GET parameter');
$mode = !empty($_GET['mode']) && $_GET['mode'] == 'uv' ? 'uv' : 'regular';

header('Content-type: image/jpeg');
$image = new Imagick($file);

if($mode == 'uv') {
	$image->separateimagechannel(Imagick::CHANNEL_GREEN);
	$image->levelImage (1, 1.0, 39000);
}

// 0 = aspect ratio is maintained
$image->thumbnailImage(1000, 0);

die($image);

/*

events.js:72
        throw er; // Unhandled 'error' event
              ^
Error: Request aborted
    at IncomingMessage.<anonymous> (/home/ubuntu/lifespan/photobooth/node-eyefi/node_modules/formidable/lib/incoming_form.js:107:19)
    at IncomingMessage.EventEmitter.emit (events.js:117:20)
    at abortIncoming (http.js:1911:11)
    at Socket.serverSocketCloseListener (http.js:1923:5)
    at Socket.EventEmitter.emit (events.js:117:20)
    at TCP.close (net.js:466:12)
ubuntu@ubuntu:~/lifespan/photobooth/node-eyefi$


*/