<?php  
$server= "localhost";
$username ="root";
$password="";
$dbname ="eco";


$conn= mysqli_connect($server,$username,$password, $dbname );
if(isset($_POST['submit'])){
if(!empty($_POST['id_eve'])&&!empty($_POST['nom'])&&!empty($_POST['date'])&&!empty($_POST['prix_dt'])&&!empty($_POST['localisation'])){
    $id_eve=$_POST['id_eve'];
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $prix_dt=$_POST['prix_dt'];
    $localisation=$_POST['localisation'];
    $query =" insert into event (id_eve, nom, date, prix_dt, localisation) values('$id_eve', '$nom', '$date', '$prix_dt', '$localisation')";
    $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
    
}  
else{
    echo" all fields required" ;
}
}
if(isset($_POST['delete']))
{
    $id_eve=$_POST['id_eve'];
    $query="DELETE FROM event WHERE id_eve='$id_eve'";
    $query_run= mysqli_query($conn,$query);
    if($query_run)
    {
        echo'<script type="text/javascript">alert("data deleted")</script>';
        
    }
    else{
        echo'<script type="text/javascript">alert("data not deleted")</script>';
    }
}
?>


<html>

<body>
    <form method="post" action="" class="es-form es-add-form">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> ID </label>
                <input type="text" name="id_eve" required />
                
            </div>
            <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                <br>
                <button href="routines-accounting-add.php"
                    class="btn btn-danger btn-block bg-gradient border-0 text-white" type="submit" name="delete">delete
                </button>

            </div>


    </form>
</body>

</html>

