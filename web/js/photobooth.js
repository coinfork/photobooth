$(document).ready(function(){
	$(document).on('click', '.thumb', function(){
       $(this).closest('.image-preview').find('img').attr('src', '/preview.php?mode=uv&file=pics/'+$(this).attr('src'));
       $(this).closest('.image-preview').find('input').value($(this).attr('src'));
    });

    var lastresponse = null;

    $("#email").val('');
	$("#dontemail").removeAttr('checked');

	var timer = setInterval(function() {

        $.get('/getphoto.php?dir=pics', function(response){
            if(lastresponse != response.uv) {
                makeThumbs(response.uv);
                lastresponse = response.uv;
            }
		}, 'json');

	}, 2000);

	$("#emailform").submit(function(e){
		var email = $.trim($("#email").val());
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(!email.length || regex.test(email)) {
            $("#email").val('');
            $("#dontemail").removeAttr('checked');

            return true;
		}
		else {
			alert('Please enter a valid email address to be sent your photo');
		}
		e.preventDefault();
		return false;
	});
});

function makeThumbs(pics) {
    var html = '';
    $(pics).each(function(){
        html += '<img src="' + '/preview.php?mode=uv&file=pics/' + $(this) + '" class="thumb">';
    });
    $('.image-preview.left .thumbs, .image-preview.right .thumbs').html(html);
}