<?PHP
	include("$_SERVER[DOCUMENT_ROOT]/ECO-AWARE-master/Dashbord/config.php");
	include '../model/article.php';

	class articlec {
		
		function ajouterarticle($article){
			$sql="INSERT INTO articles (subject, writer, datepub,contenu,img_dir) 
			VALUES (:subject,:writer, :datepub, :contenu,:img_dir )";
			$db= new config();
			$conn=$db->getConnexion();
			try{
				$query = $conn->prepare($sql);
				$query->execute([
					'subject' => $article->getSubject(),
					'writer' => $article->getWriter(),
					'datepub' => $article->getDatepub(),
					'contenu' => $article->getContenu(),
					'img_dir' => $article->getimg_dir(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherarticle(){
			$sql="SELECT * FROM articles";
			$db= new config();
			$conn=$db->getConnexion();try{
				$liste = $conn->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			
		}

		

        function trierarticle(){
			
			$sql="SELECT * FROM articles order by writer";
			$db= new config();
			$conn=$db->getConnexion();
			try{
				$liste = $conn->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function trierarticle1(){
			
			$sql="SELECT * FROM articles order by subject";
			$db= new config();
			$conn=$db->getConnexion();
				try{
				$liste = $conn->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function recpererarticlec($id){
			$sql="SELECT * from articles where id=$id";
			$db= new config();
			$conn=$db->getConnexion();
			try{
				$query=$conn->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function supprimerarticle($id){
			$sql="DELETE FROM articles WHERE id= :id";
			$db= new config();
			$conn=$db->getConnexion();
			$req=$conn->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierarticle($article, $id){
			
			try {
				$db= new config();
				$conn=$db->getConnexion();
				$query = $conn->prepare(
					'UPDATE articles SET 
						subject = :subject,
						writer = :writer,
						datepub = :datepub,
						contenu = :contenu
					    WHERE id = :id'
				);
				$query->execute([
					'subject' => $article::getSubject(),
					'writer' => $article->getWriter(),
					'datepub' => $article->getDatepub(),
					'contenu' => $article->getContenu(),	
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