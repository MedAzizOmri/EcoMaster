<?php
$server= "localhost";
$username ="root";
$password="";
$dbname ="eco";


$conn= mysqli_connect($server,$username,$password, $dbname );
if (isset($_POST['id_eve'])) {
    $id_eve = $_POST['id_eve'];
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $prix_dt=$_POST['prix_dt'];
    $localisation=$_POST['localisation'];
   

    // write the update query
    $sql = "UPDATE `event` SET `id_eve`='$id_eve',`nom`='$nom',`date`='$date',`prix_dt`='$prix_dt',`localisation`='$localisation' WHERE `id_eve`='$id_eve'";

    // execute the query
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
$user_id = $_GET['id'];

// write SQL to get user data
$sql = "SELECT * FROM `event` WHERE `id_eve`='$id_eve'";

//Execute the sql
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $id_eve = $row['id_eve'];
        $nom = $row['nom'];
        $date = $row['date'];
        $prix_dt  = $row['prix_dt'];
        $localisation = $row['localisation'];
        // $id = $row['id'];
    }
}}
?>
<html>

<body>jdhzakfha
    <form method="post" action="" class="es-form es-add-form">
    <center> <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> ID Evenement </label>
                <input type="text" name="id" required />
            </div>
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Nom </label>
                <input type="text" name="subject" required />
            </div>
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Date </label>
                <input type="date" name="writer" required />
            </div>
            </div>
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Prix </label>
                <input type="text" name="datepub" required />
            </div>
            </div>
            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                <label> Localisation </label>
                <input type="text" name="contenu" required />
            </div>
            
            <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                <button href="routines-accounting-add.php"
                    class="btn btn-danger btn-block bg-gradient border-0 text-white" type="submit" name="submit">update
                </button>

            </div>
            </center>
    </form>
</body>
<html>