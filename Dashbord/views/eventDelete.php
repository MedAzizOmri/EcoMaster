<?PHP
	include "../controller/eventc.php";

	$eventc=new eventc();
	
	if (isset($_POST["id_eve"])){
		$eventc->supprimerevent($_POST["id_eve"]);
		header('Location:../views/eventView.php');
	}
?>