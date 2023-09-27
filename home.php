<?php 
include('connection.php');
session_start();
?>

<?php


if(isset($_SESSION['id'])){
$id=$_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<style>


  body{
      margin-top:20px;
      color: #1a202c;
      text-align: left;
      background-color: #d2f8d2;    
  }
  .main-body {
      padding: 15px;
  }
  .card {
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
  }

  .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: transparent;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, 0.87);
      border-radius: .25rem;
      color:black;
  }


  .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
  }

  .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
  }

  .gutters-sm>.col, .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
  }
  .mb-3, .my-3 {
      margin-bottom: 1rem!important;
  }

  .bg-gray-300 {
      background-color: black;
  }
  .h-100 {
      height: 100%!important;
  }
  .shadow-none {
      box-shadow: none!important;
  }
  .navbar-nav {
    text-transform: uppercase;
    text-align: center;
    font-weight: bold;
  }

  .navbar-nav * {
    box-sizing: border-box;
    transition: all .35s ease;
  }

  .navbar-nav li {
    display: inline-block;
    list-style: outside none none;
    margin: .5em 1em;
    padding: 0;
  }

  .navbar-nav a {
    padding: .5em .8em;
    color: black;
    position: relative;
    text-decoration: none;
    font-size: 20px;
  }

  .navbar-nav a::before,
  .navbar-nav a::after {
    content: '';
    height: 14px;
    width: 14px;
    position: absolute;
    transition: all .35s ease;
    opacity: 0;
  }

  .navbar-nav a::before {
    content: '';
    right: 0;
    top: 0;
    border-top: 3px solid black;
    border-right: 3px solid black;
    transform: translate(50%, 100%);
  }

  .navbar-nav a:after {
    content: '';
    left: 0;
    bottom: 0;
    border-bottom: 3px solid black;
    border-left: 3px solid black;
    transform: translate(100%, -50%)
  }

  .navbar-nav a:hover:before,
  .navbar-nav a:hover:after{
    transform: translate(0,0);
    opacity: 1;
  }

  .navbar-dark .navbar-nav .nav-item .nav-link{
      color: black;
  }
  .navbar-dark .navbar-nav .nav-link:hover {
      color: black;
  }

  .btn-three {
    color: black;
    transition: all 0.5s;
    position: relative;
  }
  .btn-three::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background-color: rgba(255,255,255,0.1);
    transition: all 0.3s;
  }
  .btn-three:hover::before {
    opacity: 0 ;
    transform: scale(0.5,0.5);
  }
  .btn-three::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
    transition: all 0.3s;
    border: 1px solid black;
    transform: scale(1.2,1.2);
  }
  .btn-three:hover::after {
    opacity: 1;
    transform: scale(1,1);
  }
  .mb-0, .mt-3{
      color: black;
  }

a.btn{
  margin-left : 120px;
  padding-left: 100px;
  padding-right : 100px;
}
.bg-light{
  border-radius: 15px;
  box-shadow:2px 2px 8px 1px #ffffff;
  background-color:aquamarine;
}
.asd{
  border-radius: 15px;
  
}

</style>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


        <div class="container ">
          
            <nav class="navbar navbar-expand-sm navbar-dark text-center">
            <button class="navbar-toggler"  style="background-color:#1a202f" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="post.php">Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ques.php">Your Questions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Change Password</a>
                </li>
                <li>
                <a  class="nav-link" style="color:black" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Profile
  </a>
                </li>
                <form method="POST" action="logout.php">
                 
                  <li class="nav-item">
                    <input style="padding: .5em .8em;font-size: 20px;color: orange;background: none;border: none;" type="submit" value="Logout">
                  </li>
                </form>
            
              </ul>
            </div>
          </nav>
          </div>


<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <?php
                      $id=$_SESSION['id'];
                     $sql="select name,id,email,phone from user where id='$id'";
                     $result=mysqli_query($con,$sql);
                     $row = mysqli_fetch_array($result);

                     ?>
                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary" >
                            <?php  echo $row['name'];  ?>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Roll No</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <?php  echo $row['id'];  ?>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <?php  echo $row['email'];  ?>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <?php  echo $row['phone'];  ?>
                            </div>
                          </div>
                          <hr>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>  </div>
</div><hr>
<h2 style="text-align:center">Home</h2>
<?php
          $sqlrows="select Subject,Question,id from ques";
          $rowc=mysqli_query($con,$sqlrows);
          $rowcount=mysqli_num_rows($rowc);
          
          // $vieww="create view quess as select row_number() OVER(ORDER BY qid ASC) AS RowNo,qid,Subject,Question,id,date from ques";
          // mysqli_query($con,$vieww);

          // for ($x = 1; $x <= $rowcount; $x++) {
          //   $sqlro="select RowNo,Subject,Question,id,date from quess where RowNo='$x' ";
          //   $ro=mysqli_query($con,$sqlro);
          //   $arr=mysqli_fetch_array($ro);
          //   $sqlqid="select qid from quess where ROwNo='$x'";
          //   $qidd=mysqli_query($con,$sqlqid);
          //   $qidarr=mysqli_fetch_array($qidd);
          //   $qid=$qidarr['qid'];
            
          $ar=(mysqli_query($con,"select * from ques order by date DESC"));
          while($arr=mysqli_fetch_array($ar)){
        ?>
                  
        <!---About Section-->
        <div class="card" >
        <div class="card-body" >
        <div class="bg-light" style="background-color:aquamarine;">
          <div class="asd container py-5">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <style>
                  .postt{
                    font-size: smaller;
                  }
                </style>
              <h3 style="display:inline"><b><?php echo $arr['Subject']; ?></b></h3>&nbsp(Posted by <?php echo $arr['id']; ?>)
              <hr><br>
                <h5><?php echo $arr['Question']; ?></h5>
                <p class="lead"><b>Top answer :</b></p> 
                <?php
                if(isset($arr['top']) && $arr['top']<>''){
                  ?>
                <ul>
                <?php echo $arr['top']; ?>
                </ul><?php
                }else{
                  echo "<ul>Not yet answered</ul>";
                }
                ?>
                <form method="post" action="display.php">
                  <!-- <?php echo $arr['qid']; ?> -->
                <button type="submit" name="<?php echo $arr['qid']; ?>" value="<?php echo $arr['qid']; ?>" class="btn btn-outline-dark">View Discussion</button>
          </form>              

                </p>
                <div class="postt" style="display: inline-block; text-align:right;float:right">Posted on : <?php echo $arr['date'];?></div>

              </div>
            </div>
          </div>
        </div>
        </div>

        
        <!---End About-->
        <?php } 
// mysqli_query($con,"drop view quess");
?>
       
        
        
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
