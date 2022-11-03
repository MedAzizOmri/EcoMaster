<?php 

	include_once('../configevent.php');//database
	include_once('../Database.php');
	include_once('../connection.php');
	$db = new Database();

?>

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

			

				<form action = "" method = "POST" enctype="multipart/form-data">
						<?php 
							//vie3w reservation
							if(isset($_GET['id_res']))
								{
									$editid = $_GET['id_res'];

									$sql = "SELECT * FROM reservation WHERE id_res = ?";
									$res = $db->getRow($sql, [$editid]);
									$owner_name =  $res['owner_name'];
									// $cvv =  $res['cvv'];
									// $card_numb =  $res['card_numb'];
									// $expiration = $res['expiration'];
								
								 }

									//update reservation

								 if(isset($_POST['update_res']))
								 	{
								 		$update_res = $_POST['update_res'];
										$res = $db->getRow($sql, [$update_res]);

								 		$owner_name =  $res['owner_name'];
										// $cvv =  $res['cvv'];
										// $card_numb =  $res['card_numb'];
										// $expiration = $res['expiration'];

								 	}
						?>

					   <div class="form-group">
					    <label for="inputdefault">Owner Name:</label>
					    <input class="form-control" id="inputdefault"  name="owner_name" type="text" value ="<?php echo $owner_name; ?>">
					  </div>

					  <!-- <div class="form-group">
					    <label for="inputdefault">CVV:</label>
					    <input class="form-control" id="inputdefault" name="cvv" type="text" value ="<?php echo $cvv; ?>">
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Card Number:</label>
					    <input class="form-control" id="inputdefault" name="card_numb" type="text" value ="<?php echo $card_numb; ?>">
					  </div>

					  <div class="form-group">
					    <label for="inputdefault">Expires in:</label><br />
					    <input class="btn-lg" id="inputdefault" name="expiration" type="date" value ="<?php echo $expiration; ?>">
					  </div> -->
					  

					   <!-- <div class="form-group">
				    	  <label for="inputdefault">Boat Picture:</label>
					      <input class="form-control" id="inputdefault" name="bimg" type="file">
					    </div> -->

					  <button class="btn btn-info" name = "update_res">
					  		Save
					  		<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
					  </button>
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