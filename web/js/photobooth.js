$(document).ready(function(){
	$("#email").val('');
	$("#dontemail").removeAttr('checked');

	var timer = setInterval(function() {
		$.get('/getphoto.php', function(response){
			if($('.image-preview.left').attr('src') != response.uv) {
				$('.image-preview.left').attr('src', response.uv);
			}
		}, 'json');
	}, 2000);
});