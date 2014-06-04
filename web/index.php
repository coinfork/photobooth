<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifespan Society of BC UV Photo Booth</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/photobooth.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="jumbotron">
    <div class="previews">
		<div class="image-preview left">
			<img src="">
		</div>
		<div class="image-preview right">
			<img src="">
		</div>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <form id="emailform">
                <div class="form-group">
					<input type="text" class="form-control" id="name" placeholder="Full name" autocomplete="off">
					<input type="text" class="form-control" id="email" placeholder="Email address" autocomplete="off">
                </div>
				<p>Your UV image will be emailed to you in the next few minutes.</p>
                <p>
					<input class="btn btn-primary btn-lg" id="submit" type="submit" value="Create My UV Photo &raquo;">
					<label for="dontemail" class="dontemail">
						Don't send me future updates from Lifespan Society of BC
						<input type="checkbox" id="dontemail" name="dontemail">
					</label>
				</p>
        </div>
    </div>

    <hr>

    <footer>
        <p>Lifespan Society of BC 2014</p>
    </footer>
</div> <!-- /container -->


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/photobooth.js"></script>
</body>
</html>
