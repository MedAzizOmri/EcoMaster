<?PHP
	include "../controller/articlec.php";

	$articlec=new articlec();
	$listearticle=$articlec->afficherarticle();
if(isset($_POST['submi']))
{
    $listearticle=$articlec->afficherarticle();
}
if(isset($_POST['submit']))
{
    $listearticle=$articlec->trierarticle();
}
if(isset($_POST['submit1']))
{
    $listearticle=$articlec->trierarticle1();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste article</title>
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
		<h1>Liste Des articles</h1> 
		<form method="POST" action="">
<button type="submit" id="trititre" name="submi" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> afficher les News  </button>
<button type="submit" id="triDate" name="submit" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par date </button> 
<button type="submit" id="trititre" name="submit1" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i> trier par titre </button>

        </form>   
		<table   >
        
			<tr >
				<th ><strong>Id article</strong></th>
				<th ><strong>subject</strong></th>
				<th ><strong>writer</strong></th>
				<th ><strong>datepub</strong></th>
				<th ><strong>contenu</strong></th>
				<th ><strong>supprimer</strong></th>
				<th ><strong>modifier</strong></th>
			</tr>

			<?PHP
				foreach($listearticle as $article){
					// $image = $article['Imagearticle']; // source iamge
                     
			?>
				<tr>
					<td ><?PHP echo $article['id']; ?></td>
					<td ><?PHP echo $article['subject']; ?></td>
					<td ><?PHP echo $article['writer']; ?></td>
					<td ><?PHP echo $article['datepub']; ?></td>
                    <td ><?PHP echo $article['contenu']; ?></td>
                    
					<td >
						<form method="POST" action="../views/articleDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $article['id']; ?> name="id">
						</form>
					</td>
					<td >
						<a href="../views/articleUpdate.php?id=<?PHP echo $article['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
            
		</table> 
		<br>
		<form class="form-inline" method="post" action="../libs/generate_pdfarticle.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>Generate PDF</button> 
        </form>         
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
