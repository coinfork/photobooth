$(document).ready(function(){
	$("#email").val('');
	$("#dontemail").removeAttr('checked');

	var timer = setInterval(function() {
		$.get('/getphoto.php?dir=pics', function(response){
			if($('.image-preview.left img').attr('src') != '/preview.php?mode=uv&file=pics/'+response.uv) {
				$('.image-preview.left img').attr('src', '/preview.php?mode=uv&file=pics/'+response.uv);
			}
		}, 'json');

		$.get('/getphoto.php?dir=regular', function(response){
			if($('.image-preview.right img').attr('src') != '/preview.php?mode=regular&file=pics/'+response.uv) {
				$('.image-preview.right img').attr('src', '/preview.php?mode=regular&file=pics/'+response.uv);
			}
		}, 'json');
	}, 2000);
});