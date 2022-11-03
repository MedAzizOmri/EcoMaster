<?PHP
	include '../config.php';
	require_once '../model/user.php';

	class userc {
		
		function ajouteruser($user){
			$sql="INSERT INTO users (id, username, email,'password') 
			VALUES (:Titreuser,:username, :email, :'password')";
			$db = getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
			
					'username' => $user->getusername(),
					'email' => $user->getemail(),
					'password' => $user->getpassword(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficheruser(){
			$sql="SELECT * FROM users";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			
		}

		

        function trieruser(){
			
			$sql="SELECT * FROM users order by username";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function trieruser1(){
			
			$sql="SELECT * FROM users order by id";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function recpereruser($id)
		{
			
			$sql="SELECT FROM users WHERE id= $id";
			$db = getConnexion();
			$req=$db->prepare($sql);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
			
		}
		function supprimeruser($id){
			$sql="DELETE FROM users WHERE id= :id";
			$db = getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifieruser($user, $id){
			
			try {
				echo $user->getTitreuser();
				$db = getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
					
						username = :username,
						email = :email,
						"password" = :"password"
					    WHERE id = :id'
				);
				$query->execute([
					'Titreuser' => $user->getTitreuser(),
					'username' => $user->getusername(),
					'email' => $user->getemail(),
					'password' => $user->getpassword(),	
					'id' => $id
				]);
				echo $query->execute;
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		

		
		
	}

?>