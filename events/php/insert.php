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
        $query =" insert into event (id_eve, nom, date, prix_dt, localisation) values('$id_eve', '$nom', '$date' , '$prix_dt' , '$localisation')";
        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
    
    if($run){
        echo "Submitted";
    } 
    else {
        echo"No";
    }

}
}else{
    echo" All fields required" ;}
?>



<html>

<body>
    <form method="post" action="" class="es-form es-add-form">
    <center> <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> ID Evenement </label>
                <input type="text" name="id_eve" required />
            </div>
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Nom </label>
                <input type="text" name="nom" required />
            </div><div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Date </label>
                <input type="date" name="date" required />
            </div>
            </div><div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Prix </label>
                <input type="text" name="prix_dt" required />
            </div>
            </div><div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Localisation </label>
                <input type="text" name="localisation" required />
            </div>
            
            <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                <button href="routines-accounting-add.php"
                    class="btn btn-danger btn-block bg-gradient border-0 text-white" type="submit" name="submit">insert
                </button>

            </div>
            </center>
    </form>
</body>
<html>