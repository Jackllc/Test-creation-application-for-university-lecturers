<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	
	$session_user_id = $_SESSION['user_id'];
  //User data for the session of logged in user
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');
	

$instructor = $user_data['username'];
$query="SELECT * FROM `module` WHERE `instructor`='$instructor'";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
 
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

?>

<br/>
<table WIDTH="500" class="table table-striped">
<tr>
<th>User Name</th>
<th>First Name</th>
<th>Last Name</th>
<th>Module</th>
<th>Instructor</th> 

<?php

$counter=0;
while ($counter < $numrows) {
//Loop through each student per row in the table
$id = mysql_result($result,$counter,"id");
$username = mysql_result($result,$counter,"username");
$lastname = mysql_result($result,$counter,"lastname");
$firstname = mysql_result($result,$counter,"firstname");
$module = mysql_result($result,$counter,"module");
$instructor = mysql_result($result,$counter,"instructor");

		echo '<tr>
	        <td>'.$username.'</td>
          <td>'.$firstname.'</td>
		      <td>'.$lastname.'</td>
          <td>'.$module.'</td>
          <td>'.$instructor.'</td>
          </tr>';
$counter++;	
    }


} else{
  //If not logged in return them to log in page
  header('location:../index.php');
}

?>
</table>
</form>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
