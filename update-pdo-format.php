<?php
// Include config file
require_once "./Dashbord/config.php";
 
// Define variables and initialize with empty values
$subject = $writer = $datepub=$contenu = "";
$subject_err = $writer_err = $datepub_err = $contenu_err="";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate subject
    $input_subject = trim($_POST["subject"]);
    if(empty($input_subject)){
        $subject_err = "Please enter a subject.";
    } elseif(!filter_var($input_subject, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $subject_err = "Please enter a valid subject.";
    } else{
        $subject = $input_subject;
    }
    
    // Validate writer writer
    $input_writer = trim($_POST["writer"]);
    if(empty($input_writer)){
        $writer_err = "Please enter an writer.";     
    } else{
        $writer = $input_writer;
    }
    
    // Validate datepub
    $input_datepub = trim($_POST["datepub"]);
    if(empty($input_datepub)){
        $datepub_err = "Please enter a datepub.";     
    } elseif(!ctype_digit($input_datepub)){
        $datepub_err = "Please enter a valide date.";
    } else{
        $datepub = $input_datepub;
    }
    
    // Validate datepub
    $input_contenu = trim($_POST["contenu"]);
    if(empty($input_contenu)){
        $contenu_err = "Please enter content.";     
    } elseif(!ctype_digit($input_contenu)){
        $contenu_err = "Please enter valid content.";
    } else{
        $contenu = $input_contenu;
    }
    
    // Check input errors before inserting in database
    if(empty($subject_err) && empty($writer_err) && empty($datepub_err)&& empty($contenu_err)){
        // Prepare an update statement
        $sql = "UPDATE articles SET subject=:subject, writer=:writer, datepub=:datepub WHERE id=:id";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":subject", $param_subject);
            $stmt->bindParam(":writer", $param_writer);
            $stmt->bindParam(":datepub", $param_datepub);
            $stmt->bindParam(":contenu", $param_contenu);
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_subject = $subject;
            $param_writer = $writer;
            $param_datepub = $datepub;
            $param_contenu = $contenu;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: articleform.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM articles WHERE id = :id";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    // Retrieve individual field value
                    $subject = $row["subject"];
                    $writer = $row["writer"];
                    $datepub = $row["datepub"];
                    $contenu = $row["contenu"];
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    // header("location: error.php");
                    echo ("erroe");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
        
        // Close connection
        unset($pdo);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        // header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>subject</label>
                            <input type="text" subject="subject" class="form-control <?php echo (!empty($subject_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $subject; ?>">
                            <span class="invalid-feedback"><?php echo $subject_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>writer</label>
                            <textarea subject="writer" class="form-control <?php echo (!empty($writer_err)) ? 'is-invalid' : ''; ?>"><?php echo $writer; ?></textarea>
                            <span class="invalid-feedback"><?php echo $writer_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>datepub</label>
                            <input type="text" subject="datepub" class="form-control <?php echo (!empty($datepub_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $datepub; ?>">
                            <span class="invalid-feedback"><?php echo $datepub_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>contenu</label>
                            <input type="text" subject="contenu" class="form-control <?php echo (!empty($contenu_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $contenu; ?>">
                            <span class="invalid-feedback"><?php echo $contenu_err;?></span>
                        </div>
                        <input type="hidden" subject="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>