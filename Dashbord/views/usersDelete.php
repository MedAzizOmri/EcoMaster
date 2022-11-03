<?PHP
	include "../controller/userc.php";

	$userc=new userc();
	
	if (isset($_POST["id"])){
		$userc->supprimeruser($_POST["id"]);
		header('Location:../views/usersView.php');
	}
?>