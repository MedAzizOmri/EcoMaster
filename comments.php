<?php
include 'dbh.inc.php';
// include 'edit_cmnt.php';
function setcomments($conn){
    $db= new config();
    $conn=$db->getConnexion();
    if (isset($_POST['commentSubmit'])&&!empty($_POST['message'])) {
$id_article=$_GET['id'];

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
function deletecommnt($conn,$cid)
{
    if(isset($_POST['commentdelete'])){
        

        $sql="DELETE FROM `comments` WHERE id_cmnt=$cid";
        $result=$conn->query($sql);
        // header()
    }
}

function getComments($conn,$ida){
    $sql="SELECT * FROM `comments`  INNER JOIN articles  WHERE comments.id_user=$ida ";
    
    $result=$conn->query($sql);
    while(   $row=$result->fetch_assoc()){
        echo"<div class='commentbox'><p>";
            echo $row['id_user']."<br>";
            echo $row['date_comment']."<br>";
            echo nl2br($row['message']);
            $cid=$row['id_cmnt'];
        echo"</p>
        <form class='deletecmnt' method='post' action='".deletecommnt($conn,$cid)."'>
    <input type='hidden' name='id_cmnt ' value='". $row['id_cmnt']."' >
    <button name='commentdelete'>Delete</button>
</form>
        
        
        </div>";
}

}
?>