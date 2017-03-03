<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('') ?>assets\css\bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<div class="container-fluid">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						TKR
					</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url()?>/Welcome/index">Home</a></li>
						<li><a href="<?php echo site_url()?>/Welcome/about">About</a></li>
						<li><a href="<?php echo site_url()?>/Welcome/contact">Contact</a></li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
    				<div class="form-group">
    					<input type="text" class="form-control" placeholder="Search">
    				</div>
 	  				<button type="submit" class="btn btn-default">Submit</button>
    		</form>		
				</div><!-- /.navbar-collapse -->
			</div>
			
		</nav>
		<div class="jumbotron">
			<div class="container">
				<h1 align="center">Contact</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<form action="" method="POST" role="form">
			<legend>Contact Me!</legend>
			<div class="form-group">
				<label>Name</label>
				<br>
				<input type="text" class="form-control" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<br>
				<input type="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Message</label>
				<br>
				<textarea name="message" id="" cols="5" rows="10" placeholder="Your Message" class="form-control"></textarea>	
			</div>
				
		
			<button type="submit" class="btn btn-primary">Submit Here</button>
		</form>
	</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url('') ?>assets\js\bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>