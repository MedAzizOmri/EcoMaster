

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Reservation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/jquery.dataTables.css">

	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
	</style>

	<body>

		<br />
		<br />
		<br />
		
	
			

		<!-- begin whole content -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#" style="font-family: Times New Roman; font-size: 30px;">Reservation</a></li>
						</ul>

						<ul class="nav navbar-nav" style="font-family: Times New Roman;">
							<li class="active">
								<a href="reservationView.php">Reservations</a>
							</li>
							<li>
								<a href="events.php">Events</a>
							</li>
						</ul>

					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->

		<br />

		
		<!-- main cntent -->
		<div class="container-fluid">

			<div class="col-md-3"></div>
			<div class="col-md-6">
				<a href="reservationView.php" class="btn btn-success">
					Back
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
				</a>
			<br />
			<br />

				<?php 

					include_once '../configevent.php';//database
					include_once '../connection.php';
					include_once '../Database.php';
					
					$db = new PDO ("mysql:host=127.0.0.1;dbname=eco","root","");
					// new Database();

					if(isset($_POST['owner_name']))
						{
							if(!empty($_POST['owner_name']))
							{
								
								// $id_res = $_POST['id_res'];
								$owner_name = htmlspecialchars($_POST['owner_name']);
								// $date_res = $_POST['date_res'];
							
								$sql = $db->prepare('INSERT INTO reservation (owner_name, date_res) VALUES(?,NOW())');
								$sql->execute(array($owner_name));

								$message='Reservation effectuee';

							} else {
								$message= 'Owner Name is Required.';
							}
							
								
						}
				?>



				<form action = "" method = "POST" enctype="multipart/form-data">

					   <div class="form-group">
					    <label for="inputdefault">Owner Name:</label>
					    <input class="form-control" id="inputdefault"  name="owner_name" type="text">
					  </div>

					    <!-- <div class="form-group">
				    	  <label for="inputdefault">Boat Picture:</label>
					      <input class="form-control" id="inputdefault" name="bP" type="file">
					    </div> -->

					  <button class="btn btn-info" name = "newres">
					  		Save
					  		<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
					  </button>

					  <?php if (isset($message)){echo $message ;}?>
				</form>	
			</div>
			<div class="col-md-3"></div>
		</div>
		<!-- main cntent -->



 		<script src="../css/bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="../css/bootstrap/js/dataTables.js"></script>
 		<script src="../css/bootstrap/js/dataTables2.js"></script>
 		<script src="../css/bootstrap/js/bootstrap.js"></script>

	</body>
</html>