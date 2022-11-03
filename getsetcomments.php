<?php
include 'Dashbord\config.php';
include 'dbh.inc.php';
include 'Dashbord\controller\articlec.php';
include 'Dashbord\model\article.php';
// include 'edit_cmnt.php';
function setcomments($conn){
    $db= new config();
    $conn=$db->getConnexion();
    if (isset($_POST['commentSubmit'])&&!empty($_POST['message'])) {
$id_article=$_GET['id'];
var_dump($id_article);
$date_comment=$_POST['date_comment'];
$message=$_POST['message'];

$sql="INSERT INTO `comments` (id_article,id_user,date_comment,message) 
VALUES ('$id_article','$id_article','$date_comment','$message')";
try {
    $query = $conn->prepare($sql);
				$query->execute();			
} catch (PDOException $e) {
var_dump($e->getMessage());
}
    }

}


function getComments($conn){
    $sql="SELECT * FROM `comments` as c INNER JOIN articles as a WHERE 55581 =c.id_user "; /*a.id*/
    
    $result=$conn->query($sql);
    while(   $row=$result->fetch_assoc()){
        echo"<div class='commentbox'><p>";
            echo $row['id_user']."<br>";
            echo $row['date_comment']."<br>";
            echo nl2br($row['message']);
        echo"</p></div>";
}

}
?>