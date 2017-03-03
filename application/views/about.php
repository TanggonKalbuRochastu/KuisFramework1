
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
				<h1 align="center">About Myself</h1>
				<div class="container-fluid" align="center">
				<img src=" <?php echo base_url('') ?>assets\img\5.jpg"  alt="" class="img-circle" align="center"> 
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>
						About my...
					</th>
					<th>
						Answer
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						Full Name
					</td>
					<td>
						Tanggon Kalbu Rochastu
					</td>
				</tr>
				<tr>
					<td>
						Born
					</td>
					<td>
						Sidoarjo, Indonesia at 18 April 1997
					</td>
				</tr>
				<tr>
					<td>
						Residence
					</td>
					<td>
						Graha Laksana Tidar I - 2, Karangwidoro, Dau, Malang, Indonesa
					</td>
				</tr>
				<tr>
					<td> Education History </td>
					<td>
						<ul>
							<li>SD LABORATORIUM UM</li>
							<li>SMPN 8 Malang</li>
							<li>SMAN 9 Malang</li>
							<li>Currently Study Informatics Engineering at State Polytechnic of Malang</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Hobby</td>
					<td>
						<ul>
							<li>Basketball</li>
							<li>Online Games</li>
							<li>Go to Somewhere New</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td>Blood Type</td>
					<td>B</td>
				</tr>
				<tr>
					<td>Height</td>
					<td>1.82 Meters</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>Male</td>
				</tr>
				<tr>
					<td>Contact</td>
					<td>+6283848034360</td>
				</tr>
			</tbody>
		</table>
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


