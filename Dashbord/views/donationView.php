<?PHP
	include "../controller/donationc.php";

	$donationc=new donationc();
	$listedonation=$donationc->afficherdon();
if(isset($_POST['submi']))
{
    $listedonation=$donationc->afficherdon();
}
if(isset($_POST['submit']))
{
    $listedonation=$donationc->trierdonation();
}
if(isset($_POST['submit1']))
{
    $listedonation=$donationc->trierdonation1();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste donation</title>
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
		<h1>Liste Des donations</h1> 
		<form method="POST" action="">
<button type="submit" id="trititre" name="submi" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> afficher les News  </button>
<button type="submit" id="triDate" name="submit" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par date </button> 
<button type="submit" id="trititre" name="submit1" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par titre </button>

        </form>   
		<table   >
        
			<tr >
				<th ><strong>Id donation</strong></th>
				<th ><strong>montant</strong></th>
				<th ><strong>Date donation</strong></th>
				<th ><strong>info bancaire</strong></th>
				<th ><strong>supprimer</strong></th>
				<th ><strong>modifier</strong></th>
			</tr>
            <?PHP
				foreach($listedonation as $donation){
					
			?>
			
				<tr>
					<td ><?PHP echo $donation['idd']; ?></td>
					<td ><?PHP echo $donation['montant']; ?></td>
					<td ><?PHP echo $donation['date']; ?></td>
					<td ><?PHP echo $donation['info_bancaire']; ?></td>
					<td >
						<form method="POST" action="../views/donationDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $donation['idd']; ?> name="idd">
						</form>
					</td>
					<td >
						<a href="../views/donationUpdate.php?idd=<?PHP echo $donation['idd']; ?>"> Modifier </a>
					</td>
				</tr>
			
                <?PHP
				}
			?>
		</table> 
		<br>
		<form class="form-inline" method="post" action="../libs/generate_pdfdonation.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>Generate PDF</button> 
        </form>         
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
