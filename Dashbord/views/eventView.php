<?PHP
	include "../controller/eventc.php";

	$eventc=new eventc();
	$listeevent=$eventc->afficherevent();
if(isset($_POST['submi']))
{
    $listeevent=$eventc->afficherevent();
}
if(isset($_POST['submit']))
{
    $listeevent=$eventc->trierevent();
}
if(isset($_POST['submit1']))
{
    $listeevent=$eventc->trierevent1();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste event</title>
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
		<br>
		<h1>Liste Des Evenements</h1> 
		<form method="POST" action="">
			<button type="submit" id="trititre" name="submi" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> Afficher les News  </button>
			<button type="submit" id="triDate" name="submit" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> Trier par date </button> 
			<button type="submit" id="trititre" name="submit1" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> Trier par titre </button>
        </form>   
		<table>
        
			<tr>
				<th ><strong>IdEve</strong></th>
				<th ><strong>Nom</strong></th>
				<th ><strong>Prix</strong></th>
				<th ><strong>Date</strong></th>
				<th ><strong>Localisation</strong></th>
				<th ><strong>Supprimer</strong></th>
				<th ><strong>Modifier</strong></th>
			</tr>

			<?PHP
				foreach($listeevent as $event){
					// $image = $event['Imageevent']; // source iamge  
			?>
				<tr>
					<td ><?PHP echo $event['id_eve']; ?></td>
					<td ><?PHP echo $event['nom']; ?></td>
					<td ><?PHP echo $event['prix_dt']; ?></td>
					<td ><?PHP echo $event['date']; ?></td>
                    <td ><?PHP echo $event['localisation']; ?></td>
                    
					<td >
						<form method="POST" action="../views/eventDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $event['id_eve']; ?> name="id_eve">
						</form>
					</td>
					<td >
						<a href="../views/eventUpdate.php?id_event=<?PHP echo $event['id_eve']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
            
		</table> 
		<br>
		<form class="form-inline" method="post" action="../libs/generate_pdfevent.php">
			<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary">
				<i class="fa fa-pdf" aria-hidden="true"></i>
				Generate PDF
			</button> 
        </form>         
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
