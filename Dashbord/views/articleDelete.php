<?PHP
	include "../controller/articlec.php";

	$articlec=new articlec();
	
	if (isset($_POST["id"])){
		$articlec->supprimerarticle($_POST["id"]);
		header('Location:../views/articleView.php');
	}
?>