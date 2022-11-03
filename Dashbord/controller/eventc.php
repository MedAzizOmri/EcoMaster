<?PHP
	
	// include '../config.php';
	include("$_SERVER[DOCUMENT_ROOT]/ECO-AWARE-master/Dashbord/configevent.php");
	// include '../model/event.php';
	include("$_SERVER[DOCUMENT_ROOT]/ECO-AWARE-master/Dashbord/model/event.php");

	class eventc {
		function ajouterevent($event){
			 $sql="INSERT INTO event (nom, prix_dt, 'date',localisation,description,description2) 
			 VALUES (:'nom',:prix_dt, :'date', :localisation, :description, :description2)";
			 $db = getConnexion();
			 try{
			 	$query = $db->prepare($sql);
			 	$query->execute([
				'nom' => $event->getnom(),
				'prix_dt' => $event->getprix_dt(),
				'date' => $event->getdate(),
		 		'localisation' => $event->getlocalisation(),
				'description' => $event->getdescription(),
				'description2' => $event->getdescription2()
			]);			
			}
			catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
			}			


		}
		
		function afficherevent(){
			$sql="SELECT * FROM event";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			
		}

		

        function trierevent(){
			
			$sql="SELECT * FROM event order by prix_dt";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function trierevent1(){
			
			$sql="SELECT * FROM event order by nom";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function recupererEvent($id_eve){
			$sql="SELECT * from event where id_eve=$id_eve";
			$db = getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function supprimerevent($id_eve){
			$sql="DELETE FROM event WHERE id_eve= :id_eve";
			$db = getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_eve',$id_eve);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierevent($event, $id_eve){
			
			try {
				echo $event->getnom();
				$db = getConnexion();
				$query = $db->prepare(
					"UPDATE event SET 
						nom = :nom,
						prix_dt = :prix_dt,
						date = :date,
						localisation = :localisation
					    WHERE id_eve = :id_eve"
				);
				$query->execute([
					'nom' => $event->getnom(),
					'prix_dt' => $event->getprix_dt(),
					'date' => $event->getdate(),
					'localisation' => $event->getlocalisation(),	
					'id_eve' => $id_eve
				]);
				echo $query->execute;
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		

		
		
	}

?>