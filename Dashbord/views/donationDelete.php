<?PHP
	include "../controller/donationc.php";

	$donationc=new donationc();
	
	if (isset($_POST["idd"])){
		$donationc->supprimerdonation($_POST["idd"]);
		header('Location:../views/donationView.php');
	}
?>