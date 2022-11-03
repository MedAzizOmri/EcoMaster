<?php 
include 'Dashbord\config.php';
include 'dbh.inc.php';
include 'Dashbord\controller\articlec.php';
include 'Dashbord\model\article.php';
include_once 'comments.php';
function editcomments($conn){
    if (isset($_POST['commentSubmit'])&&!empty($_POST['message'])) {
        $id_cmnt=$_POST['id_cmnt'];
        $id_user=$_POST['id_user'];

$date_comment=$_POST['date_comment'];
$message=$_POST['message'];

$sql="UPDATE  `comments`SET '$message' where id_cmnt='$id_cmnt'";

$result=$conn->query($sql);
header("article.php"/*?=idarticle*/);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .commentbox p{
        font-family: arial;
        font-size: 14px;
        line-height: 16px;
        font-weight: 100;
    }
    .commentbox{
        width: 375px;
        padding: 20px;
        margin-bottom: 4px;
        background-color: white;
        border-radius: 4px;
    }
   
    .textareac{
        width: 400px;
        height: 100px;
        background-color: #fff;
        resize: none;
    }
    .cbutton{width: 90px;
    height: 30px;
    background-color: #282828;
    border: none;
    color:  #FFF;
    font-family: arial;
    font-weight: 400;
    cursor: pointer;
    margin-bottom: 30px;
    }
</style>
</head>
<body>
    





<h1>Edit comment</h1>
<?php
$id_cmnt=$_POST['id_cmnt'];
$id_user=$_POST['id_user'];
$date_comment=$_POST['date_comment'];
$message=$_POST['message'];



echo" <form method='POST' action='".editcomments($conn)."'>
    <input type='hidden' name='id_user' value='".$_POST['id_user']."'>
    <input type='hidden' name='date_comment' value='".$_POST['date_comment']."'>

    <textarea class ='textareac' name='message' cols='30' rows='10'>".$_POST['message']."</textarea><br>
    <button class='cbutton' name='commentSubmit' type='submit' >update</button>
</form>";
?>




</body>
</html>