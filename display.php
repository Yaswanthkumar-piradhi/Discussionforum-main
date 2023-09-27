<?php 
include('connection.php');
session_start();
?>

<?php

if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
?>
<!-- Start here -->
<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
                  .h2{
                /* border: 2px solid #EFE7DA; */
                background-color: #EFE7DA;
                box-shadow: 2px 2px 10px 1px;
                
                text-align: center;
            }

.card{
z-index: 1;
background-color: #0E4749;
}

.position-relative{
    z-index: 2;
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
body{
      margin-top:0px;
      color: #1a202c;
      text-align: left;
      background-color: #d2f8d2;    
  }
  .bg-light{
    border-radius: 15px;
    box-shadow: 1px 1px 8px 1px #d2f8d2;
  }
  #rat{
    margin-right: 20px;
    font-size: smaller;
    font-weight: 200;
  }
  .slider{
    margin-right: 20px;
  }
    </style>
      </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      

        <div class="container ">
          
            <nav class="navbar navbar-expand-sm navbar-dark text-center">
            <button class="navbar-toggler" style="background-color:#1a202f" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
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
                <form method="POST" action="logout.php">
                 
                  <li class="nav-item">
                    <input style="padding: .5em .8em;font-size: 20px;color: orange;background: none;border: none;" type="submit" value="Logout">
                  </li>
                </form>
              </ul>
            </div>
          </nav>
          </div>

    

<?php

$count=mysqli_num_rows(mysqli_query($con,"select * from ques"));

for ($x = 1; $x <= $count; $x++){
    if(isset($_POST[$x])){
        $qid=$_POST[$x];
        $_SESSION['qid']=$qid;
        $qid=$_SESSION['qid'];
        
        break;
    }
}

if(isset($qid) || isset($_SESSION['qid'])){
    if(isset($qid)){$_SESSION['qid']=$qid;}
    $qid=$_SESSION['qid'];
}else{
    echo "<h1>Something went wrong, try again later.</h1>";
}

$res=mysqli_query($con,"select * from ques where qid='$qid'");
$res1=mysqli_query($con,"select MAX(rating) as maxx,ans from ans where qid='$qid'");
        $arr=mysqli_fetch_array($res);
        $arr1=mysqli_fetch_array($res1);
        $rowcount=mysqli_num_rows($res1);
        if(isset($arr1['maxx'])&& $rowcount==1){
          $maxrat=$arr1['maxx'];
          $ress=mysqli_query($con,"select ans from ans where rating='$maxrat' and qid='$qid'");
          $ress1=mysqli_fetch_array($ress);
        }
// echo $qid;

?>
     <div class="card">
        <div class="card-body">
        <div class="bg-light">
          <div class="container py-5">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <h3 style="display:inline"><b><?php echo $arr['Subject']; ?></b></h3>&nbsp(Posted by <?php echo $arr['id']; ?>)
                <style>
                  .postt{
                    font-size:smaller;
                  }
                </style>
                <hr><br>
                <h5><?php echo $arr['Question']; ?></h5>
                <p class="lead"><b>Top answer :</b></p> 
                <?php


                if(isset($ress1['ans'])){
                ?>
                <ul>
                <?php echo $ress1['ans']; ?>
                </ul><?php
                $and=$ress1['ans'];
                mysqli_query($con,"update ques set top='$and' where qid='$qid'");
                }else{
                  echo "Not yet answered";
                }

                ?>
                <form action="postanswer.php" method="POST">
                    <br>
                <div class="form-floating mb-3">
                <div class="input-group mb-3">
  <textarea type="text" name="ans" class="form-control" placeholder="Your Answer" aria-label="Recipient's username" aria-describedby="button-addon2"></textarea>
  <button type="submit" style="max-height:40px" class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
</div>          <div class="postt" style="display: inline-block; text-align:right;float:right">Posted on : <?php echo $arr['date'];?></div>


                
</form>
</div>

                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
        <hr>
        <style>
  .qno,.ratt{
    border-radius: 5px;
    background-color: wheat;
    padding:0px 4px 0px 4px;
    font-weight: 300;
    font-size: smaller;
    margin-top: 5px;
    margin-left: 5px;
  }
</style>
<?php
echo "<h1>&nbsp Answers</h1>";
$sql="select * from ans where qid = '$qid'";
$res=mysqli_query($con,$sql);
$c=1;

while($row=mysqli_fetch_array($res)){


?>

<div class="card">
        <div class="card-body">
        <div class="bg-light"><div class="qno" style="display: inline-block; text-align:right; float:left"><?php echo $c; $c=$c+1; ?></div>
            <div class="container ">
                <div class="row align-items-center">
                    <div style="font-size:20px" style="display: inline-block;" class="col-lg-12"><br>
                        <?php echo $row['id']; ?><div class="ratt" style="display: inline-block; text-align:right; float:right">Rating : <?php echo number_format((float)$row['rating'], 1, '.', ''); ?></div><hr>
                        <p class="lead"><?php echo $row['ans']; ?></p>
                    </div>
<hr>
<?php 
$ro=$row['aid'];
$check="select * from rating where id='$id' and aid='$ro'";
$rees=mysqli_query($con,$check);
$cc=mysqli_num_rows($rees);
if($cc==0){
?>
                      <form action="rate.php" method="post">
                      <div class="slidecontainer">
                          <p>Rate the answer: </p>
                          <input type="range" min="1" max="5" value="1" class="slider" id="<?php echo $row['aid'] ?>" name="<?php echo $row['aid'] ?>">
                          <input type="submit" class="btn btn-primary btn-sm" value="Rate"><br>
                          &nbsp;&nbsp;<span id="rat">1</span><span id="rat">2</span><span id="rat">3</span><span id="rat">4</span><span id="rat">5</span>
                          
                      </div>
                      </p>
                      </form>
<?php }else{
 
} ?>


                </div>
            </div>
        </div>
        </div>
</div>

<?php

}


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