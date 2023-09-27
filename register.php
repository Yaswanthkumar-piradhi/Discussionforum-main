<?php
// Include config file
$connection = mysqli_connect("localhost", "root", "","pro");
 
// Define variables and initialize with empty values
$id = $name = $password= $email= $phone="";
$id_err = $name_err = $password_err = $email_err = $phone_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Id as input
    $id=trim($_POST["id"]);
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    // assign phone::
    $phone=$_POST["phone"];
    // Validate password
    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter a password.";     
    } else{
        $password = $input_password;
    }
    
    // Validate email
    $email = trim($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_err = "Invalid email format";
    }
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($name_err) && empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO user (id,name,phone,email,password,mac) VALUES (?, ?, ?,?,?,0)";
    
        
         if($stmt = mysqli_prepare($connection, $sql)){
         // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt,"sssss",$param_id, $param_name,$param_phone,$param_email, $param_password);
            
        //     // Set parameters
             $param_id = $id;
             $param_name = $name;
             $param_password = $password;
             $param_phone=$phone;
             $param_email=$email;
             //create mac::
    $string=exec('getmac');
    $mac=substr($string, 0, 17);
            //alert::
            ?><script>alert("Registered Successfully");</script><?php
            // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                   // Records created successfully. Redirect to landing page
                 header("location: index.html");
                 
                 exit();
                 } else{
                     echo "Oops! Something went wrong. Please try again later.";
                 }
             }
    }
        // Close statement
    //     mysqli_stmt_close($stmt);
    // }
    
    // Close connection
//     mysqli_close($connection);
// }
            }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Register</h2>
                    <p>Please fill this form to Register.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>id</label>
                            <input type="text" name="id" required class="form-control <?php echo (!empty($id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>">
                            <span class="invalid-feedback"><?php echo $id_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <textarea name="name" required class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $name; ?></textarea>
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" required class="form-control">
                            <span class="invalid-feedback"><?php echo $id_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" required class="form-control <?php echo (!empty($id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $id; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" required class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.html" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>