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

	$("#emailform").submit(function(e){
		var email = $.trim($("#email").val());
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(!email.length || regex.test(email)) {

		}
		else {
			alert('Please enter a valid email address to be sent your photo');
		}
		e.preventDefault();
		return false;
	});
});