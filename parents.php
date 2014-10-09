<?php 
   /* ================================================================
	* KINU KIDS WEBSITE
	* includes/config.php
	* ---------------------------------------------------------------
	* By 2014 KINU INTERNS
	* Apache 2.0 License
	* ================================================================ */


	include("includes/functions.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>parents-test &middot; kinukids</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type ="text/css">
	
		body {
			padding-top: 100px;
		}
		
		
		.table-hover > tbody > tr:hover > th {
			background-color: transparent !important;
		}
		
		.table > thead > tr > th,
		.table > tbody > tr > th,
		.table > tfoot > tr > th,
		.table > thead > tr > td,
		.table > tbody > tr > td,
		.table > tfoot > tr > td {
		  border:0 !important;
		  border-bottom: 1px solid #ddd !important;
		  cursor: pointer;
		}
    
    </style>
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
    </div>

    <div class="container">
		
		<p class="lead">List of all parents</p>
		<hr/>
		
		<table class="table table-responsive table-hover">
			<tr>
				<th><input type="checkbox"></th>
				<th>Full name</th>
				<th>Gender</th>
				<th>Mobile number</th>
				<th>Email address</th>
				<th>Member since</th>
			</tr>
			<tr>
				<td><input type="checkbox"></td>
				<td>Walter Bishop</td>
				<td>Male</td>
				<td>+255 (0) 653 123 456</td>
				<td>walterbishop@example.com</td>
				<td>2014-05-11 12:26:44</td>
			</tr>
			
			<?php 
				
				echo parent_list();
				
			?>
			
		</table>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bower_components/jquery/distjquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

