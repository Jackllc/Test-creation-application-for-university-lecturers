 <?php

include 'system/connect.php';
include 'system/core.php';
?>

<?php
if(isset($_POST['login'])){
//login user

	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
	
	//Salt value
  $salt = 36475838563;
	//Password hash of salt and password using sha1 
	$password_hash = sha1($salt.$password);
	
			$query = "SELECT `id` FROM users WHERE `username`='$username' AND `password`='$password_hash'";
				if ($query_run = mysql_query($query)){
					$query_num_rows = mysql_num_rows($query_run);
					if($query_num_rows == 1){
						$user_id = mysql_result($query_run, 0, 'id' );
						$_SESSION['user_id'] = $user_id;

            $query2 = "SELECT * FROM `users` WHERE `username`='$username' AND `type` = '1'";
            $query_run2 = mysql_query($query2);
            $query_num_rows2 = mysql_num_rows($query_run2);
					
           if($query_num_rows2 == 1){
              //If a student, quiz control panel page
							header('Location:quiz.php');
						  }
						  else{
              //If a lecturer, granted entry into the system
							header('Location:system/index.php');
						  }
					         }
					         else{
						       header('Location:index.php');
					
				}		
			}	
		
	}	
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>QuizMaster</title>

    <!-- Bootstrap core CSS -->
    <link href="system/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    

  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navigation">

    <!-- Fixed navbar -->
      <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>QuizMaster</b></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>


  <section id="home" name="home"></section>
  <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
          <h1>Welcome To <b>QuizMaster</b></h1>
          <br>

<br/><br/><br/><br>
<form action="index.php" method="post">
<table align="center">
<tr><td><input type="text" autocomplete="off" name="username" class="form-control input-sm" placeholder="Username" maxlength="100" /></td></tr>
<td>&nbsp;</td>
<tr><td><input type="password" name="password" class="form-control input-sm" placeholder="Password" maxlength="100" /></td></tr>
<tr><td>&nbsp;</td></tr><tr><td><input type="Submit" name="login" class="btn btn-lg btn-primary btn-block" value="login" /></td></tr>
</table>
</form>
        </br>
            </br>
            </br>
              </br>
            </br>  </br>
            </br>
        
          </div>
          
    
        </div>
      </div> <!--/ .container -->
  </div><!--/ #headerwrap -->


    </div><!-- /container -->
  </div>  






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
  <script>
  $('.carousel').carousel({
    interval: 3500
  })
  </script>
  </body>
</html>
