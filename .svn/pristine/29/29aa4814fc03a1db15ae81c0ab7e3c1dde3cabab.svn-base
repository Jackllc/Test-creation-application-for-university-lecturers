<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');
	

//Select all users who were added by the logged in instructor
$instructor = $user_data['username'];
$query="SELECT * FROM `module` WHERE `instructor`='$instructor'";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	




//Gather posted form data and insert into the correct columns
if(isset($_POST['adduserdata'])){
	$usertype = $_POST['usertype'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$module = $_POST['module'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$selinstructor = $_POST['instructor'];
	$extratime = $_POST['extratime'];
	$email = $_POST['email'];

	$username = mysql_real_escape_string($username);
	$firstname = mysql_real_escape_string($firstname);
	$lastname = mysql_real_escape_string($lastname);
	

	if(empty($username)||empty($password)||empty($password2)||empty($firstname)||empty($lastname)||empty($module)||empty($email)){
			header('Location:addUser.php?AllFieldsAreRequired!');
		}
	
			elseif($password != $password2){
			header('Location:addUser.php?PasswordsMustMatch!');
			} else {
		
				$instructor = $user_data['username'];	
				

				//Salt value			
				$salt = 36475838563;	
				//password hash created by hashing salt and password with sha1
				$password = sha1($salt.$password);
			
			if(isset($extratime)){

			mysql_query("INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `module`, `instructor`,`type` ,`extratime`,`email`) VALUES
			('', '$username', '$password', '$firstname', '$lastname', '$module', '$instructor', '1', 'yes', '$email')")or die (mysql_error());
			header('Location:user.php');

		} else {
			
			mysql_query("INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `module`, `instructor`,`type`,`email`) VALUES
			('', '$username', '$password', '$firstname', '$lastname', '$module', '$instructor', '1', '$email')")or die (mysql_error());
			header('Location:user.php');

		}
				}
			}
		}				
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
 
    <link href="css/min.css" rel="stylesheet">
  </head>
  <body>
  </br>
  </br>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Quiz Master</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">

   <div>
    <div id="status">
          </form>
        </div>
      </div>
    </nav>
</div>
          

    <div class="jumbotron">
      <div class="container">



<?php




$instructor = $user_data['username'];
$query="SELECT * FROM `users` WHERE `type`='1' AND `instructor`='$instructor'";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);

		
		//Student form data
		echo '<h2 align="center">Student</h2>
			  <form action="addUser.php" method="post">			
			  <table class="tableuser" align="center">
			  <tr><td>Username</td><td><input type="text" class="form-control input-sm" name="username" maxlength="100"/></td></tr>
			  <tr><td>Password</td><td><input type="password" class="form-control input-sm" name="password" maxlength="100" /></td></tr>
			  <tr><td>Confirm Password</td><td><input type="password" class="form-control input-sm" name="password2" maxlength="100" /></td></tr>
			  <tr><td>Module</td><td><select name="module" class="form-control">';
							
		
						
							$instructor = $user_data['username'];
							$query="SELECT `modulecode` FROM `module` WHERE `instructor`='$instructor'";
							
							$result = mysql_query($query);
							while($row = mysql_fetch_assoc($result)){
								$modulecode = $row['modulecode'];
						
							echo '<option value="'.$modulecode.'">'.$modulecode.'</option>';
							}
							
					echo '</select></td></tr>
					<tr><td>First Name</td><td><input type="text" class="form-control input-sm" name="firstname" maxlength="100" /></td></tr>
					<tr><td>Last Name</td><td><input type="text" class="form-control input-sm" name="lastname" maxlength="100" />
					<tr><td>Email</td><td><input type="text" class="form-control input-sm" name="email" maxlength="200" />
					<input type="hidden" name="type" value="1"></td></tr>
					<tr><td>Eligible for extra time?</td><td><input type="radio" name="extratime" value="extratime"></td></tr>
					</table>
					</br><table class="central" align="center"><tr><td>
					<input type="submit" name="adduserdata" class="btn btn-lg btn-default"/></td></tr></table>
					<input type="hidden" name="item" value="">
					</form>';	




		//Add user Instructor TODO
?>



</div>

</form>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
