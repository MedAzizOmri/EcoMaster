<?PHP
	include "../controller/userc.php";

	$userc=new userc();
	$listeuser=$userc->afficheruser();
if(isset($_POST['submi']))
{
    $listeuser=$userc->afficheruser();
}
if(isset($_POST['submit']))
{
    
    $listeuser=$userc->trieruser();
}
if(isset($_POST['submit1']))
{
    $listeuser=$userc->trieruser1();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste Users</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- My Css Class-->

	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/assyl.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
    </head>

    <body class="sb-nav-fixed">
    <!-- header -->
    <?php include_once 'header.php'; ?>
     <!-- Contient -->
    <body>
	<div class="limiter">
            
		   <div class="centrer" >
			<div>
				<div >
		<hr>
        <br>
		<h1>Liste Users</h1> 
		<form method="POST" action="">
<button type="submit" id="trititre" name="submi" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> afficher les users  </button>
<button type="submit" id="triDate" name="submit" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par date </button> 
<button type="submit" id="trititre" name="submit1" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par titre </button>

        </form>   
		<table   >
        
			<tr >
				<th ><strong>Id user</strong></th>
				<th ><strong>username</strong></th>
				<th ><strong>email</strong></th>
				<th ><strong>password</strong></th>
				<th ><strong>supprimer</strong></th>
				<!-- <th ><strong>modifier</strong></th> -->
			</tr>

			<?PHP
				foreach($listeuser as $user){
					// $image = $Actualite['ImageActualite']; // source iamge
                     
			?>
				<tr>
					<td ><?PHP echo $user['id']; ?></td>
					<td ><?PHP echo $user['username']; ?></td>
					<td ><?PHP echo $user['email']; ?></td>
					<td ><?PHP echo $user['password']; ?></td>
					
					<td >
						<form method="POST" action="../views/usersDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					<td 
					</td>
				</tr>
			<?PHP
				}
			?>
            
		</table> 
		<br>
		<form class="form-inline" method="post" action="../libs/generate_pdfActualite.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>Generate PDF</button> 
        </form>         
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
