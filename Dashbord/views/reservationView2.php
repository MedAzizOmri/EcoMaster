<?php 

	include_once '../configevent.php';//database
	include_once '../connection.php';
	include_once '../Database.php';
	$db = new Database();

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Events Reservation</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/jquery.dataTables.css">

		 <!--pagination-->
	    <link rel="stylesheet" href="../css/bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
	    <script src="../css/bootstrap/	js/jquery.dataTables2.js"></script>


	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }

		td.align-img {
			line-height: 3 !important;
		}
	</style>

	<body>
		<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 Liste Des Reservations</h1> 
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
								<a href="viewreservation.php">Reservations</a>
							</li>
							
						</ul>
						
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->

		<br />
		<br />
		
		
		<!-- main cntent -->
		<?php 
				//para delete
				if(isset($_GET['delid']))
					{
						$bid = $_GET['delid'];
						$sql = "DELETE FROM reservation WHERE id_res = ? ";
						$res = $db->deleteRow($sql,[$bid]);

					}
			?>


		 <div class="container">
		 	 <table id="myTable" class="table table-striped" >  
				<thead>
					<th>ID RESERVATION</th>
					<th>ID EVENT</th>
					<th>ID USER</th>
					<th>OWNER NAME</th>
					<th><center>DATE RESERVATION</center></th>
					<th>  </th>
				</thead>
				<tbody>
					<?php 

						$sql = "SELECT * FROM reservation ORDER BY owner_name";
						$res = $db->getRows($sql);
						foreach ($res as $row) {
							$id_res = $row['id_res'];
							$id_eve = $row['id_eve'];
							$id_user = $row['id_user'];
							$date_res = $row['date_res'];
							$owner_name = $row['owner_name'];
					?>
					<tr> 

						<td class="align-img"><?php echo $id_res; ?></td>
						<td class="align-img"><?php echo $id_eve; ?></td>
						<td class="align-img"><?php echo $id_user; ?></td>
						<td class="align-img"><?php echo $owner_name; ?></td>
						<td class="align-img"><?php echo $date_res; ?></td>						
						<td class="align-img">



							<a class = "btn btn-success btn-xs" href="reservationUpdate.php?id_res=<?php echo $id_res; ?>">
								Edit
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>

							
							<a class = "btn btn-danger  btn-xs" href="reservationView.php?delid=<?php echo $id_res;?>"> 
								Delete
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>
						</td>
					</tr>
					<?php } ?>

				</tbody>
			</table>

		 </div>

			
		<!-- main cntent -->

	</body>
 		<script src="../css/bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="../css/bootstrap/js/dataTables.js"></script>
 		<script src="../css/bootstrap/js/dataTables2.js"></script>
 		<script src="../css/bootstrap/js/bootstrap.js"></script>
 		    <!--pagination-->
    <link rel="stylesheet" href="../css/bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
    <script src="../css/bootstrap/js/jquery.dataTables2.js"></script>


    <script>
//script for pagination
$(document).ready(function(){
    $('#myTable').dataTable();
});
    </script>


</html>



<?php 
$db->Disconnect();
?>