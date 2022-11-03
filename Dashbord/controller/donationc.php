<?PHP
	include '../config.php';
	require_once '../model/donation.php';

	class donationc {
		
		function ajouterdon($donation){
			$sql="INSERT INTO donation (montant, 'date', info_bancaire) 
			VALUES (:montant,:'date', :info_bancaire)";
			$db = getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'montant' => $donation->getmontant(),
					'date' => $donation->getdate(),
					'info_bancaire' => $donation->getinfo_bancaire(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherdon(){
			$sql="SELECT * FROM donation";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			
		}

		

        function trierdonation(){
			
			$sql="SELECT * FROM donation order by 'date'";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function trierdonation1(){
			
			$sql="SELECT * FROM donation order by montant";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function recpererdonation($idd)
		{
			
			$sql="SELECT FROM donation WHERE idd= $idd";
			$db = getConnexion();
			$req=$db->prepare($sql);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
			
		}
		function supprimerdonation($idd){
			$sql="DELETE FROM donation WHERE idd= :idd";
			$db = getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idd',$idd);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierdonation($donation, $idd){
			
			try {
				echo $donation->getmontant();
				$db = getConnexion();
				$query = $db->prepare(
					'UPDATE donation SET 
						montant = :montant,
						"date" = :"date",
						info_bancaire = :info_bancaire,
						Imagedonation = :Imagedonation
					    WHERE idd = :idd'
				);
				$query->execute([
					'montant' => $donation->getmontant(),
					'date' => $donation->getdate(),
					'info_bancaire' => $donation->getinfo_bancaire(),
					'idd' => $idd
				]);
				echo $query->execute;
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		

		
		
	}

?>