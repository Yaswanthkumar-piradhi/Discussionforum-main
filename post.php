<?php 
include('connection.php');
session_start();
?>

<?php

if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $sql11="select id from user where id='$id'";
    $result11=mysqli_query($con,$sql11);
    $row11=mysqli_fetch_array($result11);
    
    $rowc=mysqli_query($con,"select * from ques");
    $rowcount=mysqli_num_rows($rowc)+1;
// Define variables and initialize with empty values
$Subject = $Question = $id="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Id as input
    $Subject=trim($_POST["Subject"]);
    // Validate name
    $Question = trim($_POST["Question"]);
    $date=mysqli_fetch_array(mysqli_query($con,'select now()'));
    $date1=$date['now()'];
    // Check input errors before inserting in database
    
        // Prepare an insert statement
        $sql111 = "INSERT INTO ques (qid,Subject,Question,id,date) VALUES ('$rowcount',?, ?, ?,'$date1')";
    
        
         if($stmt = mysqli_prepare($con, $sql111)){
         // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt,"sss",$param_sub, $param_ques, $param_id);
            
        //     // Set parameters
             $param_sub = $Subject;
             $param_ques = $Question;
             $param_id = $row11['id'];
             
             //create mac::
            //alert::
            ?><script>alert("Registered Successfully");</script><?php
            // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                   // Records created successfully. Redirect to landing page
                header("location: home.php");
                 
                 exit();
                 } else{
                     echo "Oops! Something went wrong. Please try again later.";
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
<!-- Start here -->
<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>
    .card{
        box-shadow: 1px 1px 15px 5px aquamarine;
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 60px;
        padding-bottom: 60px;
        border-radius: 20px;
    }
</style>
    </head>
    <body>


    <div class="log">
    <div class="position-absolute top-50 start-50 translate-middle">

    <div class="card" style="background-color:aquamarine;">
    <h2 style="text-align: center;">Post your Question</h2> 

  <div class="card-body">
  <div class="input-group mb-3">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input style="min-width:250px" type="text" class="form-control" name="Subject" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
  <textarea type="text" name="Question" class="form-control" placeholder="Question" aria-label="Recipient's username" aria-describedby="button-addon2"></textarea>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="home.php" class="btn btn-secondary ml-2">Cancel</a>



</form>
  </div>
</div>

       
    </div>

    </div>

        
    </body>
</html>


<?php
}
else{
  ?>
  <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    

  
  <div class="col-md-8">
  <div class="card" style="width: 18rem;">
      <div class="card-body">
    <p>Please Login or Register to continue</p>
    <form action="index.html">
    <button type="submit" class="btn btn-outline-primary">Login/Register</button>
</form>
    </div>
  </div>
  </div>
  </body>
  </html>
  <?php
}
?>