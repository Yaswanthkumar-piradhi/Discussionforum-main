<?php 
include('connection.php');
session_start();
?>

<?php

if(isset($_SESSION['id'])){
$id=$_SESSION['id'];
$qid=$_SESSION['qid'];
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $ans=$_POST['ans'];
    
$rowc=mysqli_query($con,"select * from ans");
$rowcount=mysqli_num_rows($rowc)+1;
    $sql="insert into ans (aid,id,qid,ans,rating,rates) values('$rowcount','$id','$qid','$ans',0,0)";
    mysqli_query($con,$sql);
    header('location:display.php');
}
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